<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
<meta name="description" content="Example Auth with ORM for Kohana 3.1" /> 
<meta name="author" content="JDStraughan" /> 
<meta name="copyright" content="Copyright 2011. JDStraughan.com" />
<meta name="language" content="en-us" /> 
<title>TimeBank test</title> 
<LINK href="<?= url::base(); ?>media/js/jqueryui/css/start/jquery-ui-1.7.1.custom.css" type="text/css" rel="Stylesheet" />
<script type="text/javascript" src="<?= url::base(); ?>media/js/jqueryui/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?= url::base(); ?>media/js/jqueryui/js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript" src="<?= url::base(); ?>media/js/jquery-ui-timepicker-addon.js"></script>

<style type="text/css">
.error {
    color: red;
}
.message {
    padding: 10px;
    background-color: yellow;
}

</style>
</head> 
<body>
	<div>
    <h2>Login header</h2>
    	<?php if (!$user): ?>
			<?= Form::open('user/login'); ?>
             
            <?= Form::label('username', 'Username'); ?>
            <?= Form::input('username', HTML::chars(Arr::get($_POST, 'username'))); ?>
             
            <?= Form::label('password', 'Password'); ?>
            <?= Form::password('password'); ?>
             
            <?= Form::label('remember', 'Remember Me'); ?>
            <?= Form::checkbox('remember'); ?>
             
            <p>(Remember Me keeps you logged in for 2 weeks)</p>
             
            <?= Form::submit('login', 'Login'); ?>
            <?= Form::close(); ?>
             
            <p>Or <?= HTML::anchor('user/create', 'create a new account'); ?></p>
		<?php else : ?>
        	Hello <?= $user->username; ?> | <?= HTML::anchor('user/logout', 'Logout'); ?>
        <?php endif ?>
    </div>
    <hr />
    <div id="content">
        <?= $content; ?>
    </div>
</body>
</html>