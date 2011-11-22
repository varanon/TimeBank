 <h1>Timebank record</h1>
 
<? if (count($records) > 0) :?>
 <table border="1">
  <tr>
	<th>status</th>
	<th>hour</th>
	<th>datetime</th>
  </tr>

Total hour = <?= $total_hour ?>

<?php foreach ($records as $record):?>
	<tr>
	<td><?= $record->status ?></td>
	<td><?= $record->hour ?></td>
	<td><?= $record->timestamp ?></td>
	</tr>
<? endforeach ?>
</table>
<? endif ?>

<?= Form::open('user/addhour'); ?>

<?= Form::label('hour', 'hour'); ?>
<?= Form::input('hour'); ?>
<div class="error">
    <?= Arr::get($errors, 'hour'); ?>
</div>

<?= Form::submit('submit', 'Add hour'); ?>
<?= Form::close(); ?>