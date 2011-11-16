<h2>Create a New Company</h2>
<? if ($message) : ?>
    <h3 class="message">
        <?= $message; ?>
    </h3>
<? endif; ?>
 
<?= Form::open('user/company', array('enctype' => 'multipart/form-data')); ?>
 
<?= Form::label('name', 'name'); ?>
<?= Form::input('name', HTML::chars(Arr::get($_POST, 'name'))); ?>
<div class="error">
    <?= Arr::get($errors, 'name'); ?>
</div>
 
<?= Form::label('objective', 'Company objective'); ?>
<?= Form::input('objective', HTML::chars(Arr::get($_POST, 'objective'))); ?>
<div class="error">
    <?= Arr::get($errors, 'objective'); ?>
</div>

<?= Form::label('address', 'Company address'); ?>
<?= Form::input('address', HTML::chars(Arr::get($_POST, 'address'))); ?>
<div class="error">
    <?= Arr::get($errors, 'address'); ?>
</div>

<?= Form::label('detail', 'Company detail'); ?>
<?= Form::input('detail', HTML::chars(Arr::get($_POST, 'detail'))); ?>
<div class="error">
    <?= Arr::get($errors, 'detail'); ?>
</div>

<?= Form::label('email', 'Company email'); ?>
<?= Form::input('email', HTML::chars(Arr::get($_POST, 'email'))); ?>
<div class="error">
    <?= Arr::get($errors, 'email'); ?>
</div>

<?= Form::label('website', 'Company website'); ?>
<?= Form::input('website', HTML::chars(Arr::get($_POST, 'website'))); ?>
<div class="error">
    <?= Arr::get($errors, 'website'); ?>
</div>

<?= Form::label('logo', 'Company logo'); ?>
<?= Form::file('logo') ?>
<div class="error">
    <?= Arr::get($errors, 'logo'); ?>
</div>

<?= Form::submit('create', 'Create company'); ?>
<?= Form::close(); ?>