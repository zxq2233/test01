<!doctype html>
<html lang="zh">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.bootcss.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
    <style type="text/css">
       #containers{
             font-family: "Open Sans", "Helvetica Neue", "Helvetica", Arial, "Hiragino Sans GB", "Microsoft YaHei", "SimSun", "Droid Sans Fallback", sans-serif !important;  
       } 
    </style>
  </head>
  <body>
    <div class="container" id="containers">
        <h3 class="text-center p-3">测试</h3>
        <div class="row">
          <div class="col-md-12">
              <table class="table table-bordered">
  <thead class="thead-inverse">
    <tr>
      <th>站点名称</th>
      <th>URL连接</th>
    </tr>
  </thead>
  
  <tbody>
      <?php
   $host        = "host=ec2-54-163-233-103.compute-1.amazonaws.com";
   $port        = "port=5432";
   $dbname      = "dbname=d763r37bbuuvsd";
   $credentials = "user=hmhrvepodcqxjl password=f2dcc9bd1e8976749bc7e84b281e9e1b831ddd20b060e24b21e155e4b5464480";

   $db = pg_connect( "$host $port $dbname $credentials"  );
 
   
           $sql0 =<<<EOF
            SELECT * from data;
EOF;
$ret = pg_query($db, $sql);
  
            $ret0 = pg_query($db, $sql0);
            $d=pg_num_rows($ret0);
            $num=ceil($d/5);
            if($num<$_GET['p']){
                exit();
            }
            if(is_array($_GET)&&count($_GET)>0){ 
              $offset= ($_GET['p']-1)*5;
              $pm=$pm+1;
              $pj1=$_GET['p']+1;
              $pj2=$_GET['p']-1;
             
            }else{
              $offset=0;
              $pm=1;
              $pj1=$pm+1;
              $pj2=$pm-1;
            }
              

             $sql =<<<EOF
      SELECT * from data limit  5  offset  $offset;
     
EOF;
            $ret = pg_query($db, $sql);
            $res=pg_fetch_all($ret);

                foreach ($res as $val) {
                    echo "<tr>";
                    echo '<td>'.$val['name'].'</td>';
                    echo '<td><a href="./url.php?u='.$val['url'].'" target="_blank">'.$val['url'].'</td>';
                    echo "</tr>";
                }?>
</tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    
    <?php
        if($_GET['p']!=$num){
            echo'<li class="page-item">
      <a class="page-link" href="?p='.$pj2.'" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>';
    for ($i = 1; $i <= $num; $i++) {
       echo '<li class="page-item"><a class="page-link" href="?p='.$i.'">'.$i.'</a></li>';      
    }
    echo '<li class="page-item">
      <a class="page-link" href="?p='.$pj1.'" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>';
        }
    ?>
  
  </ul>
</nav>

              
          </div>
        </div>
    </div>
    
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  </body>
</html>
