<?php
require_once __DIR__ . '/vendor/autoload.php';
session_start();


$client = new MongoDB\Client(
    'mongodb+srv://group6:Group6@careelance.fyoln.mongodb.net/careelance?retryWrites=true&w=majority');

$db = $client->careelance;

if(isset($_POST["login"])){

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

        $_SESSION['loggedUser'] = $storedFirstname;
        $_SESSION['userEm'] = $storedEmail;
        $_SESSION['typeofuser'] = $userType;
        $_SESSION['logProof'] = TRUE;
        sleep(2);
        header("Location: index.php");
        exit();
    }else{
        echo '<script>alert("Your email or password is incorrect. Return to homepage.")</script>';
        $_SESSION['logProof'] = FALSE;
        sleep(2);
        header("Location: index.php");
        exit();
    }

}else if (isset($_POST["signup"])){
    
    //Retrieve data from sign up page
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $userType = $_POST["userType"];

    //Save to the database based on user type
    if($userType == "Client"){
        $setClient = $db->client;
        
        $insertClient = $setClient->insertOne([
            'firstname' => $firstName,
            'lastname' => $lastName,
            'email' => $email,
            'password' => $password,
            'userType' => $userType,
        ]);

    } else if($userType == "Freelancer"){
        $setClient = $db->freelancer;
        
        $insertFreelancer = $setClient->insertOne([
            'firstname' => $firstName,
            'lastname' => $lastName,
            'email' => $email,
            'password' => $password,
            'userType' => $userType,
        ]);
    }

    $_SESSION['logProof'] = TRUE;
    $_SESSION['loggedUser'] = $firstName;
    $_SESSION['typeofuser'] = $userType;
    header("Location: index.php");
    exit();
}

?>