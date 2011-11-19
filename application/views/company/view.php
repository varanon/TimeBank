<h2>Info for company "<?= $company->name; ?>"</h2>
 
<ul>
    <li>Name: <?= $company->name; ?></li>
    <li>Objective: <?= $company->objective; ?></li>
    <li>Detail: <?= $company->detail; ?></li>
    <li>Address: <?= $company->address; ?></li>
    <li>Website: <?= $company->website; ?></li>
    <li>Logo: <img src="<?= url::base().'media/upload/'.$company->logo; ?>" /></li>
</ul>