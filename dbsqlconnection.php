<?php
$serverName = "theeducatorbox.cdtmubvsavf4.us-east-2.rds.amazonaws.com"; //serverName\instanceName


$connectionInfo = array( "Database"=>"The_Educator_Box", "UID"=>"owenga", "PWD"=>"Otieno2016*");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>