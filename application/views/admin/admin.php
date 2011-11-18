 <h1> Admin Page </h1>
 <table border="1">
  <tr>
    <th>name</th>
    <th>detail</th>
	<th>verify</th>
  </tr>
<?php foreach ($companies as $company) {
	echo '<tr>';
    echo '<td>'.$company->name.'</td>';
	echo '<td>'.$company->detail.'</td>';
	echo '<td>'.$company->verify.'</td>';
	echo '</tr>';
}?>

</table> 
<?= Form::open('company/approve'); ?>
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
