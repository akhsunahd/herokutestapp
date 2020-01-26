<?php
	//error_log( $_GET['val'], 3, "C:\\xampp\\tmp\\my-errors.log");
   $host        = "host = ec2-3-224-165-85.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dd2g7aamsbmv73";
   $credentials = "user = natsflgfpoqmlr password=129a5ddf67b9a93cf5e75afcd179e48ea1a1e890a82f9267447b72a565751022";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

/*
    $sql =<<<EOF
      INSERT INTO t_location (user_id,latitude,longitude)
      VALUES (1, $_GET['lt'],$_GET['ln']);

EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
   pg_close($db)
*/
?>