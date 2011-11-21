<h2>Edit volunteer account "<?= $user->username ?>"</h2>
<? if ($message) : ?>
    <h3 class="message">
        <?= $message; ?>
    </h3>
<? endif; ?>
 
<?= Form::open('user/edit', array('enctype' => 'multipart/form-data')); ?>

<?= Form::label('nickname', 'Nickname'); ?>
<?= Form::input('nickname', HTML::chars($user->nickname)); ?>
<div class="error">
    <?= Arr::get($errors, 'nickname'); ?>
</div>


<?= Form::label('first_name', 'First name'); ?>
<?= Form::input('first_name', HTML::chars($user->first_name)); ?>
<div class="error">
    <?= Arr::get($errors, 'first_name'); ?>
</div>

<?= Form::label('last_name', 'Last name'); ?>
<?= Form::input('last_name', HTML::chars($user->last_name)); ?>
<div class="error">
    <?= Arr::get($errors, 'last_name'); ?>
</div>

<?= Form::label('phone', 'Phone number'); ?>
<?= Form::input('phone', HTML::chars($user->phone)); ?>
<div class="error">
    <?= Arr::get($errors, 'phone'); ?>
</div>

<?= Form::label('birthday', 'Birthday'); ?>
<?= Form::input('birthday', HTML::chars($user->birthday), array('id' => 'datepicker')); ?>
<div class="error">
    <?= Arr::get($errors, 'birthday'); ?>
</div>

<?= Form::label('address', 'Address'); ?>
<?= Form::input('address', HTML::chars($user->address)); ?>
<div class="error">
    <?= Arr::get($errors, 'address'); ?>
</div>

<?= Form::label('quote', 'Quote'); ?>
<?= Form::input('quote', HTML::chars($user->quote)); ?>
<div class="error">
    <?= Arr::get($errors, 'quote'); ?>
</div>

<?= Form::label('description', 'Description'); ?>
<?= Form::input('description', HTML::chars($user->description)); ?>
<div class="error">
    <?= Arr::get($errors, 'description'); ?>
</div>

<?= Form::label('profile_image', 'Profile image'); ?>
<img src="<?= url::base().'media/upload/'.$user->profile_image; ?>" />
<?= Form::file('profile_image') ?>
<div class="error">
    <?= Arr::get($errors, 'profile_image'); ?>
</div>

<?= Form::submit('create', 'Edit user profile'); ?>
<?= Form::close(); ?>

<script>
	$(function() {
		$( "#datepicker" ).datepicker({
			dateFormat: 'yy-mm-dd'
		});
	});
</script>