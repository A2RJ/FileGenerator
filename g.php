<?php
$options = getopt("M:");
$exetension = 'yourFileExetension';
$file = $options['M'] . $exetension;
$current = file_get_contents($file);
$template = "will generate ".$options['M'];
$current .= $template;
file_put_contents('yourDirectory'.$file, $current);
?>
