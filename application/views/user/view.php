<h2>Info for user "<?= $user->nickname; ?>"</h2>
 
<ul>
    <li>Nickname: <?= $user->nickname; ?></li>
    <li>First name: <?= $user->first_name; ?></li>
    <li>Last name: <?= $user->last_name; ?></li>
    <li>Phone: <?= $user->phone; ?></li>
    <li>Birthday: <?= $user->birthday; ?></li>
    <li>Address: <?= $user->address; ?></li>
    <li>Quote: <?= $user->quote; ?></li>
    <li>Description: <?= $user->description; ?></li>
    <li>Profile image: <img src="<?= url::base().'media/upload/'.$user->profile_image; ?>" /></li>
</ul>