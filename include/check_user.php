<?php
// getting requested username
if (isset($_GET['id'])) {
    $id= $_GET['id'];
}

// Set visibility flag
$editVisible=false;
if (isset($_SESSION['username'])) {
// Compare usernames
if ($id == $_SESSION['username']) {
  $editVisible = true;
}
}