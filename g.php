<?php
// php g.php -MyourFileName
require 'vendor/autoload.php';

$options = getopt("C:");
$fileName = $options['C'] . 'Controller' . '.php';

$controllerName = $options['C'] . 'Controller';

$namespace = new Nette\PhpGenerator\PhpNamespace('Coba');

$namespace->addUse('App\Http\Controllers\Controller');
$namespace->addUse('App\Models\Coba');

$class = $namespace->addClass($controllerName)
    ->addComment('@Created by github.com/A2RJ')
    ->addComment("Description of class.")
    ->addComment("Copy namespace below and replace namespace Coba;")
    ->addComment("namespace App\Http\Controllers;");
$class->setExtends('Coba\Controller');
// ->addProperty('Demo');
// ->addTrait('Bar\AliasedClass');

$class->addMethod('__construct')
    ->addComment("Description of class.\n")
    ->addComment('@Created by github.com/A2RJ')
    ->setBody('$model = new Coba();');

$class->addMethod('coba')
    ->addComment("Description of class.\n")
    ->addComment('@Created by github.com/A2RJ')
    ->setBody('return Coba::findAll();')
    ->addParameter('id');

// For current file if want to concat the file 
// $current = file_get_contents('app/Http/Controllers/'.$fileName);
// $current = "<?php 
// " . $namespace;
$current = "<?php 
" . $namespace;

file_put_contents('app/Http/Controllers/' . $fileName, $current);
$file = file_get_contents('app/Http/Controllers/' . $fileName);
$replace = str_replace('Coba', $options['C'], $file);
file_put_contents('app/Http/Controllers/' . $fileName, $current);
