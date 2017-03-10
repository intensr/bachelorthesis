<?php include 'header.php'; ?>
<?php
define('TTF_DIR', $_SERVER['HOME'] . "/Library/Application Support/Adobe/CoreSync/plugins/livetype/.r");
define('XML_FILE', $_SERVER['HOME'] . "/Library/Application Support/Adobe/CoreSync/plugins/livetype/.c/entitlements.xml");
define('DST_DIR', $_SERVER['HOME'] . "/TypeKitFonts");
$map = [];
$xml = new SimpleXmlElement(XML_FILE, LIBXML_COMPACT, true);
foreach ($xml->fonts->font as $font) {
	$map[] = [
	'name'			=> strval($font->properties->fullName),
	'infile'			=> strval(TTF_DIR . '/.' . $font->id . '.otf'),
	'outfile'      => strval(DST_DIR . '/' . $font->properties->familyName . '/' . $font->properties->fullName . '.otf')
	];
}
foreach ($map as $font) {
	@mkdir(dirname($font['outfile']), 0777, true);
	if (!file_exists($font['outfile'])) {
		echo "Copying " . $font['name'] . PHP_EOL;
		copy($font['infile'], $font['outfile']);
	} else {
		echo "Already copied " . $font['name'] . PHP_EOL;
	}
}?>
<?php include 'footer.php'; ?>
