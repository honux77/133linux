<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<style type="text/css" >

div#wrap {
    width : 400px;
    height : 500px;
    1border : 1px solid red;
}
.1st {
    color : blue;
}
</style>
</head>
<body>
<div id="wrap">
<div>
</body>
<script>

(function(){

  var TAGNAME = "h1";
  //add dom
  function addDom(newEleStr) {
      var ele = document.getElementById('wrap');
      ele.insertAdjacentHTML('beforeend' , newEleStr);
  }

<?
	// Variables for DB Account
	$DBINFO['host']="localhost";
	$DBINFO['user']="next";
	$DBINFO['pass']="next0708";
	$DBINFO['name']="next_db";

	//connection test
	$_connect = mysql_connect($DBINFO['host'], $DBINFO['user'], $DBINFO['pass']);
	echo "var aMsg = [";
	if ($_connect) {
		mysql_query("SET NAMES utf8");
		if (mysql_select_db($DBINFO['name'], $_connect)) {
			$sql = "select * from message";
			$result = mysql_query($sql);
			while($row = mysql_fetch_row($result)) {
				echo "\"{$row[0]}: {$row[1]}\", ";
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
	echo "];\n";
?>
  var MESSAGE_COUNT = aMsg.length;
  for ( var i = 0  ; i < MESSAGE_COUNT; i++) {
    addDom("<"+TAGNAME+">" + aMsg[i] + "<"+TAGNAME+">");
  }
    
  //from NodeList to Array type
  var ele = document.getElementsByTagName(TAGNAME);
  var aEle = [].slice.call(ele);

  //random color set
  aEle.forEach(function(e,i,a) {
      var aColor = ["blue", "red" , "green" , "orange" , "Magenta" , "Cyan" , "DarkGray"];
      var rNum = Math.floor(Math.random()*MESSAGE_COUNT); 
      e.style.color = aColor[rNum];
  });
})();

</script>
<a href="input.html">back to insert</a>
</html>
