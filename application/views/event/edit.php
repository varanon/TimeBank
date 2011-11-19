<h2>Edit event "<?= $event->name; ?>"</h2>
<? if ($message) : ?>
    <h3 class="message">
        <?= $message; ?>
    </h3>
<? endif; ?>
 
<?= Form::open('event/edit/'.$event->id, array('enctype' => 'multipart/form-data')); ?>

<?php include Kohana::find_file('views', 'event/form') ?>

<?= Form::submit('create', 'Edit company'); ?>
<?= Form::close(); ?>