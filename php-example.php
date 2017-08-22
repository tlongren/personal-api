<?php
// Pull random data from longren.org API

$url = "http://api.longren.io";
$result = file_get_contents($url);
$json = json_decode($result);

// get years
$years = $json->person->age->years;
?>

<pre>
<?=$years?> years old
</pre>

<?php
// get programming languages
$programming_languages = $json->person->languages->programming;
$coding = array(); $i=0; $code_langs = array();
foreach ($programming_languages as $pr) {   
    $code_langs[] = $pr;
}
?>

<pre>
<?php print_r($code_langs); ?>
</pre>

<?php
// Get Family
$family = $json->person->family;
?>

<pre>
<?php print_r($family); ?>
</pre>