<?php
// php G.php -MVC=yourFileName
// https://github.com/nette/php-generator
// generate file php berdasarkan inputName
require 'vendor/autoload.php';

use Codedungeon\PHPCliColors\Color;

$name = getopt("MVC:");

if (sizeof($name) >= 3 and $name['C'] !== "") {

    $fileName = $name['C'] . 'Controller' . '.php';

    $controllerName = $name['C'] . 'Controller';

    $namespace = new Nette\PhpGenerator\PhpNamespace('Generator');

    $namespace->addUse('CodeIgniter\Controller;');
    $namespace->addUse('App\Models\Generator;');

    $class = $namespace->addClass($controllerName)
        ->addComment('@Created by github.com/A2RJ')
        ->addComment("Description of class.")
        ->addComment("Copy namespace below and replace namespace Generator;")
        ->addComment("namespace App\Http\Controllers;")
        ->addComment("delete namespace Generator;");
    $class->setExtends('Generator\Controller');
    // ->addProperty('Demo');
    // ->addTrait('Bar\AliasedClass');

    $class->addMethod('index')
    ->addComment("Description of class.\n")
    ->addComment('@Created by github.com/A2RJ')
    ->setBody('$model = new Generator();
    $data["Generator"] = $model->getGenerator();
    echo view("Generator_view",$data);');

    $class->addMethod('GeneratorAdd')
        ->addComment("Description of class.\n")
        ->addComment('@Created by github.com/A2RJ')
        ->setBody('echo view("add_product_view");');

    $class->addMethod('GeneratorSave')
        ->addComment("Description of class.\n")
        ->addComment('@Created by github.com/A2RJ')
        ->setBody("CRUD")
        ->addParameter('id');

    // For current file if want to concat the file 
    // $current = file_get_contents('app/Controllers/'.$fileName);
    // $current = "<?php 
    // " . $namespace;
    $current = "<?php
    namespace App\Controllers; 
    " . $namespace ;

    file_put_contents('app/Controllers/' . $fileName, $current);

    $file = file_get_contents('app/Controllers/'.$fileName);
    $replace = str_replace('Generator', $name['C'], $file);
    file_put_contents('app/Controllers/' . $fileName, $replace);
    
    $file = file_get_contents('app/Controllers/'.$fileName);
    $replace = str_replace('CRUD', "Gunakan fungsi ini untuk generate crud sesuai dg Tabel MySQL", $file);
    file_put_contents('app/Controllers/' . $fileName, $replace);

    echo "Create controller " . $controllerName;

    echo "\n";
    echo Color::GREEN, 'Your controller was created ' . $name['C'], Color::RESET, PHP_EOL;
} else {
    echo Color::RED, 'Example php G.php -MVC=ControllerName', Color::RESET, PHP_EOL;
}
// saat controller selesai dibuat maka lakukan ubah KATA menjadi fungsi CRUD
