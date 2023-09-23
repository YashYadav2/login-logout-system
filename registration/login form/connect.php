<?php


$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='98yash98';
$DATABASE='login forms';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if (!$con) {
    die(mysqli_error($con));
}
