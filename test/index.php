<?php

class ExampleParent 
{
        protected $propertyOne = 'value1';
        public $propertyTwo = 'value2';
}
class Example extends ExampleParent 
{
        
        private $propertyThree = 'value3';

        public function __construct()
        {
                echo "Internal iteration of Example:" . PHP_EOL."</br></br>";
                $line = 1;
                foreach($this as $property => $value)
                {
                        echo "$line- Property '$property' => '$value' " . PHP_EOL ."</br>";
                        $line++;
                }
                echo PHP_EOL;
        }
}
$example = new Example();

