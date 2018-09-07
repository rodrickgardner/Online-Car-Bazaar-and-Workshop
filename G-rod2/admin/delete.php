<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../db.php');
if($_GET['idss'])
{
$id=$_GET['idss'];
 $sql = "delete from car_detail where id='$id'";
 mysql_query( $sql);

}

/******************delete service*********/
if($_GET['idsserv'])
{
$id=$_GET['idsserv'];
 $sql = "delete from services where id='$id'";
 mysql_query( $sql);

}
if($_GET['idorder'])
{
$id=$_GET['idorder'];
 $sql = "delete from orders where id='$id'";
 mysql_query( $sql);

}
if($_GET['iduser'])
{
$id=$_GET['iduser'];
 $sql = "delete from users where id='$id'";
 mysql_query( $sql);

}


?>