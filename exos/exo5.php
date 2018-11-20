<?php
require_once '../inc/functions.php';

/*
 * Exo 5 : Full Mario!
 *
 * Add these to the Hero class:
 *  - A favorite color.
 *  - To be able to grow when eat a mushroom. Shrink instead of die when taking a hit.
 *  - To be able to be invicible when eat a star.
 *
 * See tests at the bottom of this file for more info :)
 * 
 * Don't panic, this time, there will be a lot of Fatal Errors until you finish this "exo"
 */

class Hero {
    private $lives = 3;
    private $name;
    private $color = 'red';
    private $size = false;
    private $invicible = false;
 
    public function __construct($name,$color) 
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getColor() 
    {
        return $this->color;
    }


    public function getLives() 
    {
        return $this->lives;
    }

    public function takeHit() 
    {
        if ($this->eatMushroom()) {
            $this->size = false;
            return $this->isBig();
        } 
        if ($this->receiveStar()) {
            return $this->vanishStar();
        } 

        return $this->lives = $this->getLives() - 1; 
    }
 
    public function up() 
    {
        return $this->lives = $this->getLives() + 1;
    }

    public function hello() 
    {
        return 'It\'s me, '.$this->name.'!';
    }

    public function eatMushroom()
    {
        $this->size = true;
        return $this->isBig();
    }
        
      
    public function isBig() 
    {
        return $this->size;
    }


    public function receiveStar() 
    {
        $this->invicible = true;
        return $this->hasStar();
    }

    public function hasStar() 
    {
        return $this->invicible;
    }
    public function vanishStar() 
    {
        $this->invicible = false;
        return $this->hasStar();
    }
}



/*
 * Tests
 * Pas touche !
 */
$mario = new Hero('Mario', 'red');
$test = (
    $mario->getColor() === 'red'
    && $mario->isBig() === false
    && $mario->hasStar() === false
    && $mario->getLives() === 3
);
var_dump($test);
if ($test) {
    $mario->eatMushroom();
    var_dump($test);
    
    $test = $mario->isBig() === true;
    var_dump($test);
    if ($test) {
        // var_dump($test);
        $mario->takeHit();
        $test = (
            $mario->isBig() === false
            && $mario->getLives() === 3
        );
        var_dump($test);
        if ($test) {
            var_dump($test);
            $mario->receiveStar();
            $test = $mario->hasStar() === true;
            if ($test) {
                var_dump($test);
                $mario->takeHit();
                $mario->takeHit();
                $mario->up();
                $mario->vanishStar();
                $test = (
                    $mario->getLives() === 4
                    && $mario->hasStar() === false
                );
                var_dump($mario->hasStar());
            }
        }
    }
}
displayExo(5, $test);
// echo $mario->hasStar();
// var_dump($test);
