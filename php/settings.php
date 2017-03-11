<?php

// Set header
if (isset($_SERVER['HTTP_USER_AGENT']) &&
  (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
    header('X-UA-Compatible: IE=edge,chrome=1');

// Set basic vars
$url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$slug = trim(basename($url, '.php'));

$proposals = [
  [
    1,
    'Der Aufstieg des Cyberspaces',
    'Beeinflussen Technologien wie Virtual Reality unsere Gesellschaft nachhaltig?'
  ],
  [
    2,
    'Angewandte Explorationen in artifiziellen Realitäten',
    'Die Synthese technologisch-kultureller Konzepte, Phänomene und Ästhetiken'
  ]
];
//  echo '<pre>'.print_r($proposals, true).'</pre>';

if (!isset($class_body)) {
  $class_body = '';
}

//include 'ref.php';

?>
