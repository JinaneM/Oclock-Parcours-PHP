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
    private $name;
    private $color;
    private $lives = 3;
    private $big = false;
    private $star = false;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function hello() {
        return "It's me, " . $this->name. "!";
    }

    public function getLives() {
        return $this->lives;
    }

    public function getColor() {
        return $this->color;
    }

    public function isBig() {
        return $this->big;
    }

    public function eatMushroom() {
        $this->big = true;
    }

    public function takeHit() {
        if (!$this->star) {
            if ($this->big) {
                $this->big = false;
            }
            else {
                $this->lives--;
            }
        }
    }

    public function up() {
        $this->lives++;
    }

    public function receiveStar() {
        $this->star = true;
    }

    public function vanishStar() {
        $this->star = false;
    }

    public function hasStar() {
        return $this->star;
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
if ($test) {
    $mario->eatMushroom();
    $test = $mario->isBig() === true;
    if ($test) {
        $mario->takeHit();
        $test = (
            $mario->isBig() === false
            && $mario->getLives() === 3
        );
        if ($test) {
            $mario->receiveStar();
            $test = $mario->hasStar() === true;
            if ($test) {
                $mario->takeHit();
                $mario->takeHit();
                $mario->up();
                $mario->vanishStar();
                $test = (
                    $mario->getLives() === 4
                    && $mario->hasStar() === false
                );
            }
        }
    }
}
displayExo(5, $test);
