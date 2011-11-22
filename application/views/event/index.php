 <h1> Event Page </h1>
 
 <table border="1">
  <tr>
	<th>name</th>
	<th>status</th>
	<th>time_cost</th>
	<th>show</th>
  </tr>
<?php foreach ($events as $event):?>
	<tr>
	<td><?= $event->name ?></td>
	<td><?= $event->status ?></td>
	<td><?=  $event->time_cost ?></td>
	<td><?= HTML::anchor('event/view/'.$event->id, 'show'); ?></td>
	</tr>
<? endforeach ?>