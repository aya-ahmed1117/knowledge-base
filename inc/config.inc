<?php
session_start();
date_default_timezone_set('Africa/Cairo');

  $DBhost = "10.109.18.18";
  $DBuser = "epmweb";
  $DBpass = "12345678";
  $DBname = "EPMKS";
  $CharacterSet = "UTF-8";
  
  $connectionInfo = array( "Database"=> $DBname , "UID"=> $DBuser ,"CharacterSet" => "UTF-8", "PWD"=> $DBpass);
  $con = sqlsrv_connect($DBhost, $connectionInfo);

  sqlsrv_query( $con ,"SET NAMES 'UTF-8'"); 
  sqlsrv_query( $con ,'SET CHARACTER SET UTF-8');
  
//"CharacterSet" => "UTF-8", 
  //sqlsrv_query( $con , "SET NAMES 'utf8'"); 
  //sqlsrv_query( $con ,'SET CHARACTER SET utf8' );

/*
session_start();
date_default_timezone_set('Africa/Cairo');

  $DBhost = "172.29.29.76";
  $DBuser = "Seniors";
  $DBpass = "123456789";
  $DBname = "Aya_Web_APP";
  
  $connectionInfo = array( "Database"=>"Aya_Web_APP" , "UID"=>"Seniors" , "PWD"=>"123456789");
  $con = sqlsrv_connect($DBhost, $connectionInfo);
    

sqlsrv_query( $con , "SET NAMES 'utf8'"); 
sqlsrv_query( $con ,'SET CHARACTER SET utf8' );
*/
?>