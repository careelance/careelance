<?php
require_once __DIR__ . '/vendor/autoload.php';
session_start();


$client = new MongoDB\Client(
    'mongodb+srv://group6:Group6@careelance.fyoln.mongodb.net/careelance?retryWrites=true&w=majority');

$db = $client->careelance->job;

    //Retrieve details from Post Job form
    $jobType = $_POST['jobtype'];
    $minSalary = $_POST['minsalary'];
    $maxSalary = $_POST['maxsalary'];
    $eduLevel = $_POST['edulevel'];
    $webUrl = $_POST['weburl'];
    $email = $_POST['email'];
    $phoneNum = $_POST['phonenum'];
    $desc = $_POST['description'];

    if(isset($_FILES['picture'])){
        $pict = $_FILES['picture'];
        $document = new MongoDB\BSON\Binary(file_get_contents($pict["tmp_name"]), MongoDB\BSON\Binary::TYPE_GENERIC);
    }

    //Save to careelance->joblist
    $insertJob = $db->insertOne([
        'JobType' => $jobType,
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