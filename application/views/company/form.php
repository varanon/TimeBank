<?= Form::label('name', 'Company name'); ?>
<?= Form::input('name', HTML::chars($company->name)); ?>
<div class="error">
    <?= Arr::get($errors, 'name'); ?>
</div>
 
<?= Form::label('objective', 'Company objective'); ?>
<?= Form::input('objective', HTML::chars($company->objective)); ?>
<div class="error">
    <?= Arr::get($errors, 'objective'); ?>
</div>

<?= Form::label('address', 'Company address'); ?>
<?= Form::input('address', HTML::chars($company->address)); ?>
<div class="error">
    <?= Arr::get($errors, 'address'); ?>
</div>

<?= Form::label('detail', 'Company detail'); ?>
<?= Form::input('detail', HTML::chars($company->detail)); ?>
<div class="error">
    <?= Arr::get($errors, 'detail'); ?>
</div>

<?= Form::label('website', 'Company website'); ?>
<?= Form::input('website', HTML::chars($company->website)); ?>
<div class="error">
    <?= Arr::get($errors, 'website'); ?>
</div>

<?= Form::label('logo', 'Company logo'); ?>
<?= Form::file('logo') ?>
<div class="error">
    <?= Arr::get($errors, 'logo'); ?>
</div>