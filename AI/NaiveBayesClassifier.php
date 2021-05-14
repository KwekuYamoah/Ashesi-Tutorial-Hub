<?php
/* Naive Bayes Classifier for PHP */
namespace Niiknow;
require '../vendor/autoload.php';


function classifyReview($review){
    $classifier = new \Niiknow\Bayes();
    
    $csvFile = fopen("recodedTrain.csv", "r");
    $data = fgetcsv($csvFile, 10000, ",");
    while (($data = fgetcsv($csvFile, 10000, ",")) !== FALSE) 
    {
        $classifier->learn($data[1], $data[2]);
    }

    return $classifier->categorize($review); 

}






?>