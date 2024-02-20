<?php

// This PHP script file is used to collect all of the functions used by the app.
// Use these functions by including it in your php file 
// (see: include, require, include_once, require_once)

// This function is from the w3schools PHP Form Validation section
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

