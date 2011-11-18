<h2>Create event</h2>
<? if ($message) : ?>
    <h3 class="message">
        <?= $message; ?>
    </h3>
<? endif; ?>
 
<?= Form::open('event/create'); ?>
 
<?= Form::label('name', 'Name'); ?>
<?= Form::input('name', HTML::chars(Arr::get($_POST, 'name'))); ?>
<div class="error">
    <?= Arr::get($errors, 'name'); ?>
</div>

<?= Form::label('open_date', 'Open date'); ?>
<?= Form::input('open_date', HTML::chars(Arr::get($_POST, 'open_date')), array('id' => 'datepicker')); ?>
<div class="error">
    <?= Arr::get($errors, 'open_date'); ?>
</div>
 
<?= Form::label('end_date', 'End date'); ?>
<?= Form::input('end_date', HTML::chars(Arr::get($_POST, 'end_date')), array('id' => 'datepicker2')); ?>
<div class="error">
    <?= Arr::get($errors, 'end_date'); ?>
</div>

<?= Form::label('phone', 'Phone number'); ?>
<?= Form::input('phone', HTML::chars(Arr::get($_POST, 'phone'))); ?>
<div class="error">
    <?= Arr::get($errors, 'phone'); ?>
</div>

<?= Form::label('detail', 'Detail'); ?>
<?= Form::input('detail', HTML::chars(Arr::get($_POST, 'detail'))); ?>
<div class="error">
    <?= Arr::get($errors, 'detail'); ?>
</div>

<?= Form::label('contractor_name', 'Contract name'); ?>
<?= Form::input('contractor_name', HTML::chars(Arr::get($_POST, 'contractor_name'))); ?>
<div class="error">
    <?= Arr::get($errors, 'contractor_name'); ?>
</div>

<?= Form::label('location_id', 'Location'); ?>
<?= Form::select('location_id', $locations, HTML::chars(Arr::get($_POST, 'location_id'))); ?>
<div class="error">
    <?= Arr::get($errors, 'location_id'); ?>
</div>

<?= Form::label('status', 'Status'); ?>
<?= Form::select('status', Kohana::$config->load('timebank')->get('event_status'), HTML::chars(Arr::get($_POST, 'status'))); ?>
<div class="error">
    <?= Arr::get($errors, 'status'); ?>
</div>

<?= Form::label('user_need_count', 'How many volunteer do you need'); ?>
<?= Form::input('user_need_count', HTML::chars(Arr::get($_POST, 'user_need_count'))); ?>
<div class="error">
    <?= Arr::get($errors, 'user_need_count'); ?>
</div>

<?= Form::label('time_cost', 'Time cost'); ?>
<?= Form::input('time_cost', HTML::chars(Arr::get($_POST, 'time_cost'))); ?>
<div class="error">
    <?= Arr::get($errors, 'time_cost'); ?>
</div>


<?= Form::submit('create', 'Create company'); ?>
<?= Form::close(); ?>

<script>
	$(function() {
		$( "#datepicker" ).datetimepicker({
			dateFormat: 'yy-mm-dd'
		});
		$( "#datepicker2" ).datetimepicker({
			dateFormat: 'yy-mm-dd'
		});	});
</script>