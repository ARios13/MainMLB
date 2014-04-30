<?php
include_once 'db_connect.php';
include_once 'functions.php';
sec_session_start ();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Secure Login: Protected Page</title>
<link rel="stylesheet" href="styles/main.css" />
</head>
<body>
        <?php if (login_check($mysqli) == true) : ?>
        <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
	<p>
		Please proceed to our <a href="MLBMain.php">Main Page</a>
	</p>
        <?php else : ?>
            <p>
		<span class="error">You are not authorized to access this page.</span>
		Please <a href="index.php">login</a>.
	</p>
        <?php endif; ?>
    </body>
</html>
