<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phpcrud';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style_admin.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Swiftshop</h1>
            <a href="dasboard.html"><i class="fas fa-home"></i>Dasboard</a>
			<a href="read.php"><i class="fa-solid fa-clipboard-list"></i>Items</a>
			<a href="sales.php"><i class="fa-brands fa-shopify"></i></i>Sales</a>
			<a href="earn.php"><i class="fa-solid fa-money-check-dollar"></i>Income</a>
			
    	</div>
    </nav>
EOT;
}
function template_footer() {
echo <<<EOT
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	<br>
	<br>
    </body>
</html>
EOT;
}
?>