<?= Form::label('name', 'Name'); ?>
<?= Form::input('name', HTML::chars($event->name)); ?>
<div class="error">
    <?= Arr::get($errors, 'name'); ?>
</div>

<?= Form::label('open_date', 'Open date'); ?>
<?= Form::input('open_date', HTML::chars($event->open_date), array('id' => 'datepicker')); ?>
<div class="error">
    <?= Arr::get($errors, 'open_date'); ?>
</div>
 
<?= Form::label('end_date', 'End date'); ?>
<?= Form::input('end_date', HTML::chars($event->end_date), array('id' => 'datepicker2')); ?>
<div class="error">
    <?= Arr::get($errors, 'end_date'); ?>
</div>

<?= Form::label('phone', 'Phone number'); ?>
<?= Form::input('phone', HTML::chars($event->phone)); ?>
<div class="error">
    <?= Arr::get($errors, 'phone'); ?>
</div>

<?= Form::label('detail', 'Detail'); ?>
<?= Form::input('detail', HTML::chars($event->detail)); ?>
<div class="error">
    <?= Arr::get($errors, 'detail'); ?>
</div>

<?= Form::label('contractor_name', 'Contract name'); ?>
<?= Form::input('contractor_name', HTML::chars($event->contractor_name)); ?>
<div class="error">
    <?= Arr::get($errors, 'contractor_name'); ?>
</div>

<?= Form::label('location_id', 'Location'); ?>
<?= Form::select('location_id', $locations, HTML::chars($event->location_id)); ?>
<div class="error">
    <?= Arr::get($errors, 'location_id'); ?>
</div>

<?= Form::label('status', 'Status'); ?>
<?= Form::select('status', Kohana::$config->load('timebank')->get('event_status'), HTML::chars($event->status)); ?>
<div class="error">
    <?= Arr::get($errors, 'status'); ?>
</div>

<?= Form::label('user_need_count', 'How many volunteer do you need'); ?>
<?= Form::input('user_need_count', HTML::chars($event->user_need_count)); ?>
<div class="error">
    <?= Arr::get($errors, 'user_need_count'); ?>
</div>

<?= Form::label('time_cost', 'Time cost'); ?>
<?= Form::input('time_cost', HTML::chars($event->time_cost)); ?>
<div class="error">
    <?= Arr::get($errors, 'time_cost'); ?>
</div>

<?= Form::label('pic_1', 'Pic 1'); ?>
<img src="<?= url::base().'media/upload/'.$event->pic_1; ?>" />
<?= Form::file('pic_1') ?>
<div class="error">
    <?= Arr::get($errors, 'pic_1'); ?>
</div>

<?= Form::label('pic_2', 'Pic 2'); ?>
<img src="<?= url::base().'media/upload/'.$event->pic_2; ?>" />
<?= Form::file('pic_2') ?>
<div class="error">
    <?= Arr::get($errors, 'pic_2'); ?>
</div>

<?= Form::label('pic_3', 'Pic 3'); ?>
<img src="<?= url::base().'media/upload/'.$event->pic_3; ?>" />
<?= Form::file('pic_3') ?>
<div class="error">
    <?= Arr::get($errors, 'pic_3'); ?>
</div>

<?= Form::label('pic_4', 'Pic 4'); ?>
<img src="<?= url::base().'media/upload/'.$event->pic_4; ?>" />
<?= Form::file('pic_4') ?>
<div class="error">
    <?= Arr::get($errors, 'pic_4'); ?>
</div>

<?= Form::label('pic_5', 'Pic 5'); ?>
<img src="<?= url::base().'media/upload/'.$event->pic_5; ?>" />
<?= Form::file('pic_5') ?>
<div class="error">
    <?= Arr::get($errors, 'pic_5'); ?>
</div>

<script>
	$(function() {
		$( "#datepicker" ).datetimepicker({
			dateFormat: 'yy-mm-dd'
		});
		$( "#datepicker2" ).datetimepicker({
			dateFormat: 'yy-mm-dd'
		});	});
</script>