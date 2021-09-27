<?php declare(strict_types=1);

final class FizzBuzz {

     
    public function convert($num) {

        //Check if num contains 3
        if(preg_match('/(3)/', (string)$num)) {
            return "lucky";
        }
        //Check if divisible by 15
        if ($num % 15 === 0) {
            return "fizzbuzz";
        }
        //Check if divisible by 3
        if($num % 3 == 0){
            return "fizz";
        }
        //Check if divisible by 5
        if($num % 5 == 0){
            return "buzz";
        }
      
        return strval($num);
        
        
    }

    public function run() {

        $out = [];

        //Set max range
        for($i = 1; $i < 21; $i++) {
            $out[$i] = $this->convert($i);
        }

        echo implode(" ", $out) . PHP_EOL;
    }
}

$fizz = new FizzBuzz;
$fizz->run();

?>