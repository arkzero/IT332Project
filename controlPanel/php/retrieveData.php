<?php
	include("account.php");
	include("connect.php");

	$query = "SELECT * FROM synergy_web_services";
	$sth = mysql_query($query);
	$rows = array();
	while($r = mysql_fetch_assoc($sth)) {
        $rows[] = $r;
    }
    print json_encode($rows);
?>