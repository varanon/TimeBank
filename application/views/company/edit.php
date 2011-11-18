<h2>Edit company "<?= $company->name; ?>"</h2>
<? if ($message) : ?>
    <h3 class="message">
        <?= $message; ?>
    </h3>
<? endif; ?>
 
<?= Form::open('company/edit/'.$company->id, array('enctype' => 'multipart/form-data')); ?>

<?php include Kohana::find_file('views', 'company/form') ?>

<?= Form::submit('create', 'Edit company'); ?>
<?= Form::close(); ?>