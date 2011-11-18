<h2>Create company account (step 2)</h2>
<? if ($message) : ?>
    <h3 class="message">
        <?= $message; ?>
    </h3>
<? endif; ?>
 
<?= Form::open('company/createcompany', array('enctype' => 'multipart/form-data')); ?>

<?php include Kohana::find_file('views', 'company/form') ?>

<?= Form::submit('create', 'Create company'); ?>
<?= Form::close(); ?>