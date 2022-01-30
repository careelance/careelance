<?php
require_once __DIR__ . '/vendor/autoload.php';
session_start();


$client = new MongoDB\Client(
    'mongodb+srv://group6:Group6@careelance.fyoln.mongodb.net/careelance?retryWrites=true&w=majority');

$db = $client->careelance->job;

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_POST["jobPost"];
}*/
    //Retrieve details from Post Job form
    $jobTitle = $_POST['jobtitle'];
    $minSalary = $_POST['minsalary'];
    $maxSalary = $_POST['maxsalary'];
    $eduLevel = $_POST['edulevel'];
    $webUrl = $_POST['weburl'];
    $email = $_POST['email'];
    $phoneNum = $_POST['phonenum'];
    $desc = $_POST['description'];

    if(isset($_FILES['picture'])){
        $pict = $_FILES['picture'];
        $document = array(new MongoDB\BSON\Binary(file_get_contents($pict["tmp_name"]), MongoDB\BSON\Binary::TYPE_GENERIC));

        //echo '<img src="data:jpeg;base64,' .base64_encode(implode("",$document)). '" />';
    }

    //Save to careelance->joblist
    $insertJob = $db->insertOne([
        'JobTitle' => $jobTitle,
        'MinimumSalary' => $minSalary,
        'MaximumSalary' => $maxSalary,
        'EducationLevel' => $eduLevel,
        'WebURL' => $webUrl,
        'Email' => $email,
        'PhoneNumber' => $phoneNum,
        'Description' => $desc,
        'Picture' => $document,
    ]);
    if($insertJob){
        header("Location: explore_page.php");
    }

?>