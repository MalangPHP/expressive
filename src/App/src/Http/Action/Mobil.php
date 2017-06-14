<?php
/**
 * Created by PhpStorm.
 * User: asrulsibaoel
 * Date: 14/06/17
 * Time: 16:05
 */

namespace App\Http\Action;


abstract class Mobil
{
    
    private $roda;
    private $spion;

    public function __construct($roda, $spion)
    {
         $this->roda = $roda;
         $this->spion = $spion;
    }

    public function setRoda($roda)
    {
        $this->roda = $roda;
    }

    public function setSpion($spion)
    {
        $this->spion = $spion;
    }

    public function getRoda()
    {
        return $this->roda;
    }

    public function getSpion()
    {
        return $this->spion;
    }
}


class Avanza extends Mobil{}
class Jazz extends Mobil{}
class Corvette extends Mobil{}

$class = new Avanza($spion, $roda);

if ($class instanceof Avanza) {
    //
} elseif($class instanceof Jazz) {
    //   
} elseif($class instanceof Corvette) {}


class DI {

    public function __invoke($class, $roda, $spion)
    {
        if ($class instanceof Mobil) {
            new $class($roda, $spion);
        }
    }
}

