<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= esc($title); ?></title>
</head>
<body>
<form action="<?= base_url('login/process'); ?>" method="post">
	<?php if(session()->has("err")): ?>
	<b style="color: #f00;"><?= session()->get("err"); ?></b>
	<?php endif; ?>
	<label>Username</label>
	<input type="text" name="username">
	<label>Password</label>
	<input type="password" name="password">
	<button>Login</button>

</form>
</body>
</html>