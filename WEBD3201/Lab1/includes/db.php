<?php 

  /*
    Name: Scott Alton
    Date: September 16, 2020
    File: db.php
    Description: This file contains the functions used to connect to the site's postgres database, and makes use of constants imported from constants.php to do
  */

function db_connect() {
  return pg_connect("host=" . DB_HOST . " port=" . DB_PORT . " dbname=" . DATABASE . " user=" . DB_ADMIN . " password=" . DB_PASSWORD);
}
?>