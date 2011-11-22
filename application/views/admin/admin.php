 <h1> Admin Page </h1>
 <table border="1">
  <tr>
	<th>name</th>
	<th>detail</th>
	<th>verify</th>
  </tr>
<?php foreach ($companies as $company):?>
	<tr>
	<td><?= $company->name ?></td>
	<td><?= $company->detail ?></td>
	<td><?=  $company->verify ?></td>
	</tr>
<? endforeach ?>

</table> 
<?= Form::open('admin/approve'); ?>
<select name="company_id">
<?php foreach ($companies as $company) {
	if ( $company->verify == '0' )
	{
		echo '<option value="'.$company->id.' ">'.$company->name.'</option>';
	}
}?>
</select>
<?= Form::submit('approve', 'approve'); ?>
<?= Form::close(); ?>
