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
 $host        = "host=ec2-54-163-233-103.compute-1.amazonaws.com";
   $port        = "port=5432";
   $dbname      = "dbname=d763r37bbuuvsd";
   $credentials = "user=hmhrvepodcqxjl password=f2dcc9bd1e8976749bc7e84b281e9e1b831ddd20b060e24b21e155e4b5464480";
   $db = pg_connect( "$host $port $dbname $credentials"  );
   $ret = pg_query($db, $sql);
   if(!$ret){} else {}
   pg_close($db);  
?>

