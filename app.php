<?php

use Symfony\Component\HttpClient\HttpClient;

require 'vendor/autoload.php';

$console = new \Symfony\Component\Console\Application();
$console->add(new \App\WikpediaSearchCommand());
$console->run();


/**
class Usuario {
php composer.phar install
 *
 *
    private string $name;
    private int $age;
    private array $colors = ['blue' , 'green'];


    public function __construct(string $name, int $age, array $colors)
    {
        $this->name = $name;
        $this->age = $age;
        $this->colors = $colors;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getColors(): array
    {
        return $this->colors;
    }

   $user = new Usuario( name: 'Tales' , age:21 , ['blue','yellow']);
    echo $user->getName();


}

$name = 'Joao';
echo "ola tales " . $name ;

for ($i = 0; $i < 20; $i++) {
    echo $i;
}

while($i <= 10) {
    echo 'peguei rabo';
    $i = 12;
}

if($i <= 19) {
    echo 'rabo';
}elseif (i == 20) {
    echo 'rabo1';
}else{
    echo 'rabo3';
}**/
