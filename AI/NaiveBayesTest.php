<?php
/* Naive Bayes Classifier for PHP */
namespace Niiknow;
require '../vendor/autoload.php';

$classifier = new \Niiknow\Bayes();

// teach it positive phrases

$classifier->learn('amazing, awesome movie!! Yeah!! Oh boy.', 'positive');
$classifier->learn('Sweet, this is incredibly, amazing, perfect, great!!', 'positive');

// teach it a negative phrase

$classifier->learn('terrible, shitty thing. Damn. Sucks!!', 'negative');

// now ask it to categorize a document it has never seen before

echo $classifier->categorize('awesome, cool, amazing!! Yay.');

?>