<?php
require_once __DIR__ . '/vendor/autoload.php';
session_start();


$client = new MongoDB\Client(
    'mongodb+srv://group6:Group6@careelance.fyoln.mongodb.net/careelance?retryWrites=true&w=majority');

$db = $client->careelance;

//$document = $db->findOne(['username' => 'muhamadaiman']);

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "OK";
}*/
    //Retrieve username and password from form
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $userType = $_POST["userType"];

    //Connecting to the database collection
    if($userType == "Client"){
        $findUser = $db->client->find(array('email' => $email));
    } else if($userType == "Freelancer"){
        $findUser = $db->freelancer->find(array('email' => $email));
    }
    

    foreach($findUser as $usersAvail){
        $storedFirstname = $usersAvail['firstname'];
        $storedLastname = $usersAvail['lastname'];
        $storedEmail = $usersAvail['email'];
        $storedPass = $usersAvail['password'];
        $storedUsertype = $usersAvail['userType'];
    }

    if($email === $storedEmail && $pass === $storedPass){
        //header("Location: main_page.html");
        $_SESSION['loggedUser'] = $storedFirstname;
        $_SESSION['logProof'] = TRUE;
        sleep(5);
        header("Location: main_page_user.php");
        exit();
    }else{
        $_SESSION['logProof'] = FALSE;
        sleep(5);
        header("Location: main_page_user.php");
        exit();
    }
?>