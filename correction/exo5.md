# Exo5

## ÉNONCÉ

Add these to the Hero class:
- A favorite color.
- To be able to grow when eat a mushroom. Shrink instead of die when taking a hit.
- To be able to be invicible when eat a star.

See tests at the bottom of this file for more info :)

Don't panic, this time, there will be a lot of Fatal Errors until you finish this "exo"

Test :

```php
<?php
// [..]
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
```

## PLAN

Il y a beaucoup de chose à faire. Tout est dans l'analyse de l'utilisation de la classe dans les tests.

### Analyse

- Analyser le code des tests effectués
- Noter toutes les méthodes à créer
  - `getColor` un _Getter_ sur la propriété `color` (favorite color)
  - `isBig` un _Getter_ sur la propriété `big` (true/false, true si le héro vient de manger un champignon)
  - `hasStar` un _Getter_ sur la propriété `star` (true/false, true si le héro est invincible grâce à l'étoile)
  - `eatMushroom` une méthode permettant de modifier l'instance courante (le héro devient "big" après avoir mangé un champignon)
  - `receiveStar` une méthode permettant de modifier l'instance courante (le héro est invincible grâce à l'étoile)
  - `vanishStar` une méthode permettant de modifier l'instance courante (le héro n'est plus invincible grâce à l'étoile)

### Plan niveau code

<details>

- Reprendre le code de l'exo4
- Ajouter les 3 propriétés et les 3 méthodes _Getter_ correspondantes
  - `color` => `getColor()`
  - `big` => `isBig()`
  - `star` => `hasStar()`
- Ajouter la méthode `eatMushroom`
  - passer la propriété `big` à vrai
- Ajouter la méthode `receiveStar`
  - passer la propriété `star` à vrai
- Ajouter la méthode `vanishStar`
  - passer la propriété `star` à faux
- La méthode `takeHit` doit être modifiée
  - le héro n'est pas affecté si il a l'étoile
  - le héro ne perd pas de vie, mais revient à taille normal, si il était "big"
  - sans étoile et sans être "big", le héro perd une vie, comme avant

</details>

## SOLUTION

<details>

```php
<?php
// [...]
class Hero {
    private $name;
    private $color;
    private $lives;
    private $big = false;
    private $star = false;

    public function __construct($name, $color) {
        $this->lives = 3;
        $this->name = $name;
        $this->color = $color;
    }

    public function hello() {
        return 'It\'s me, '.$this->name.'!';
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

```

</details>
