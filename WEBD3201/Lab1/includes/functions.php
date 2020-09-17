<?php 

/*
  Name: Scott Alton
  Date: September 16, 2020
  File: function.php
  Description: This file contains functions that are used accross the site.
*/


function redirect($url) {
  header("Location:" . $url);
  ob_flush();
}

function setMessage($message) {
  $_SESSION['message'] = $message;
}

function getMessage() {
  return $_SESSION['message'];
}

function isMessage() {
  return isset($_SESSION['message']) ? true : false;
}

function removeMessage() {
  unset($_SESSION['message']);
}

function flashMessage() {
  $message = "";
  
  // Check if a session message has been sent
  if(isMessage()) {
    $message = getMessage();
    removeMessage();
  }

  return $message;
}

?>