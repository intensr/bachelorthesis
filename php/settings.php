<?php

// Set header
if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE' !== false)) {
  header('X-UA-Compatible: IE=edge,chrome=1');
}

// Set basic vars
$server = $_SERVER['SERVER_NAME'];
$url = $server.$_SERVER['REQUEST_URI'];
$folder = $_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']);
$slug = trim(basename($url, '.php'));

// Content settings
$contentInfo = [
  [
    0,
    'Change content info variable!',
    'Change content info variable!',
    'Change content info variable!',
    'Change content info variable!',
    'Change content info variable!',
    'Change content info variable!'
  ],
  [
    1,
    'Der Aufstieg des Cyberspaces',
    'Beeinflussen Technologien wie Virtual Reality unsere Gesellschaft nachhaltig?',
    ' - Proposal 1',
    'Das Proposal beschäftigt sich mit einem etwaigen, gesellschaftlichen Paradigmenwechsel, induziert durch das revitalisierte Themenfeld Virtual Reality (VR) in Verbindung mit Webbrowser Technologien (WebVR). Als fundamentale Grundlage der Analyse dienen bedeutende Entwicklungen der Computer- und Softwarebranche, mit besonderem Fokus auf die Korrelation der Aspekte von Technik und Performance (Leistungsfähigkeit), Design und Darstellung sowie Soziologie und Ethik.',
    'David Hoffmann',
    $folder.'/assets/img/preview-1.png'
  ],
  [
    2,
    'Angewandte Explorationen in artifiziellen Realitäten',
    'Die Synthese technologisch-kultureller Konzepte, Phänomene und Ästhetiken',
    ' - Proposal 2',
    'In dem Proposal werden experimentelle Explorationen innerhalb artifizieller Realitäten realisiert und analysiert. Welche Umsetzungen von WebVR Konzepten sind durch aktuelle Technologien bereits möglich?',
    'David Hoffmann',
    $folder.'/assets/img/preview-2.png'
  ]
];
//  echo '<pre>'.print_r($contentInfo, true).'</pre>';

// Var backup
if (!isset($contentInfoId)) { $contentInfoId = 0; }
if (!isset($class_body)) { $class_body = ''; }

?>
