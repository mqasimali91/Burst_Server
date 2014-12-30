<?php
include("connection.php");
$phone=$_GET['phone'];
$result = mysql_query("SELECT * FROM usersdata WHERE phone='$phone'");
 $rows = array();
   while($r = mysql_fetch_assoc($result)) {
   	
   	$json = array(
   	"picurl" => "http://wv.smarnovative.com/".$r['picurl'],
   	'id' => (int)$r['id']
    
);
     $rows[] = $json;
     
   }
header('Content-Type: application/json');
 print json_encode($rows);

?>