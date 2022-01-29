<?php
session_start();

// Remove current user login session
session_unset();

// Set the session to false and redirect to main page
$_SESSION['logProof'] = FALSE;
header('Location: index.html');
?>