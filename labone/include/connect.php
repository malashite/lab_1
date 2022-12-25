<?php
$connect = mysqli_connect( 'localhost', 'root', '', 'lab1' );
if ( !$connect ) {
  die( 'Error connect to DataBase' );
}