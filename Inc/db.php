<?php 

   $db['db_host']='127.0.0.1';
   $db['db_user']='root';
   $db['db_pass']='';
   $db['db_name']='test';

   foreach($db as $key => $value)
   {
       define(strtoupper($key),$value);
   }

    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASS);
    mysqli_select_db($con,DB_NAME);
    
                  
?>
         