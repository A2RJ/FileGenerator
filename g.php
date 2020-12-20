<?php
// php g.php -MyourFileName
require 'vendor/autoload.php';
$class = new Nette\PhpGenerator\ClassType('Demo');
use Nette\PhpGenerator\Literal;

$options = getopt("M:");
$fileName = $options['M'] . '.php';

// Change for custom result
$class
	->setFinal()
	->setExtends(BaseController::class)
	->addTrait(App\Models\Jurnal::class)
	->addComment("Description of class.\nSecond line\n")
    ->addComment('@property-read Nette\Forms\Form $form')
    ->addProperty('Jurnal');
    // construct
$method = $class->addMethod('__construct')
    ->setBody('$Jurnal = new Jurnal();');
$class->addMethod('index')
->setBody('return $a + $b;')
->addParameter('id');


$current = file_get_contents($fileName);

$current .= '<?php
' . $class;

// to generate PHP code simply cast to string or use echo:
// echo $class;
file_put_contents('yourDirectory'.$fileName, $current);
?>
