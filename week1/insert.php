<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
</head>
<body>
<?
	// Variables for DB Account
	$DBINFO['host']="localhost";
	$DBINFO['user']="next";
	$DBINFO['pass']="next0708";
	$DBINFO['name']="next_db";

	$con = mysqli_connect($DBINFO['host'], $DBINFO['user'], $DBINFO['pass'], $DBINFO['name']);
	if (mysqli_connect_errno()) {
		echo "Fail to connect DB: " . mysqli_connect_error();
	}
	mysql_query("SET NAMES utf8");
	$sql = "insert into message (text) values('$_POST[msg]')";
	if (mysqli_query($con, $sql)) {
		echo "1 record added";
	} else {
		echo "insert fail: " . mysqli_error($con);
	}

	mysqli_close($con);
?>
<p>
<a href="mysql_test.php">show result</a> <p>
<a href="input.html">back to insert</a>
</body>
</html>
