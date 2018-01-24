<?php
if(!is_array($_GET)&&count($_GET)<=0){
       exit();
}
date_default_timezone_set('PRC');
$t=base64_decode($_GET['token']);
$u=base64_decode(base64_decode($_GET['u']));
$name=$_GET['name'];
$s=time()-$t;
if($s>20){
  header('HTTP/1.1 504 Gateway Time-out');
  exit();
 }
$sql =<<<EOF
      INSERT INTO DATA (URL,NAME)
      VALUES ('$u', '$name');
EOF;
 $host        = "host=ec2-107-20-224-137.compute-1.amazonaws.com";
   $port        = "port=5432";
   $dbname      = "dbname=d7162p450un8ss";
   $credentials = "user=smqezctwnhxgqh password=afb9a2967fcca4e80bb4d325879174f87c6772827833719baf9a43536309ea8b";
   $db = pg_connect( "$host $port $dbname $credentials"  );
   $ret = pg_query($db, $sql);
   if(!$ret){} else {}
   pg_close($db);  
?>

