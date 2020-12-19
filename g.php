<?php
$options = getopt("M:");
$file = $options['M'] . '.php';
$current = file_get_contents($file);
$template = "will generate ".$options['M'];
$current .= $template;
file_put_contents('yourDirectory'.$file, $current);
?>
