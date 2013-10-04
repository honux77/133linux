<html>
<head>
<title>Simple db test </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
</head>
<body>
<h1> Messages</h1>
<p>
<?
	// Variables for DB Account
	$DBINFO['host']="localhost";
	$DBINFO['user']="next";
	$DBINFO['pass']="next0708";
	$DBINFO['name']="next_db";

	//connection test
	$_connect = mysql_connect($DBINFO['host'], $DBINFO['user'], $DBINFO['pass']);
	if ($_connect) {
		mysql_query("SET NAMES utf8");
		if (mysql_select_db($DBINFO['name'], $_connect)) {
			$sql = "select * from message";
			$result = mysql_query($sql);
			while($row = mysql_fetch_row($result)) {
				echo "message {$row[0]}: {$row[1]}\n<br>";
			}
		}
		else {
			echo "Database Connect Error! Check DB & other name.<br>";
			exit();
		}
	} else {
		echo "Connect Failed!!.<br>";
		exit();
	}
?>
<a href="input.html">back to insert</a>
</body>
</html>
