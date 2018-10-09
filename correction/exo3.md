# Exo3

## ÉNONCÉ

Bowser: Mouhahahahahahahahaaaaaaa! It's me, Bowser!
Don't be mad, the game would not be fun if there is no bad guy in it.

So. I want a way to kill Mario's life when I throw a turtle shell on him :)
Can you create me a method `takeHit`, and decrement Mario's lives when it's being used?

For example, we should be able to use the class this way:

```php
<?php
// [...]
$mario = new Mario();
echo $mario->getLives(); // Display: 3 (display because of the "echo")
$mario->takeHit();
echo $mario->getLives(); // Display: 2 (display because of the "echo")
```

---

Mario: Heeeeey, what are you doing here?!?
…
Well…
…
OK, it's fair. A method to kill me. Nice.
But I want a method to gain 1up! I love these green mushrooms…

For example, we should be able to use the class this way:

```php
<?php
// [...]
$mario = new Mario();
echo $mario->getLives(); // Display: 3
$mario->takeHit();
$mario->up();
$mario->up();
$mario->takeHit();
$mario->up();
echo $mario->getLives(); // Display: 4
```

## PLAN

- Reprendre le code de l'exo2
- Créer une méthode `takeHit` dans la classe `Mario`
  - la méthode doit modifier la valeur de la propriété `lives` (-1)
  - la méthode ne retourne rien
- Créer une méthode `up` dans la classe `Mario`
  - la méthode doit modifier la valeur de la propriété `lives` (+1)
  - la méthode ne retourne rien

## SOLUTION

<details>

```php
<?php
// [...]
class Mario {
    private $lives;

    public function __construct() {
        $this->lives = 3;
    }

    public function getLives() {
        return $this->lives;
    }

    public function takeHit() {
        // $this->lives = $this->lives - 1;
        // $this->lives -= 1;
        $this->lives--;
    }

    public function up() {
        // $this->lives = $this->lives + 1;
        // $this->lives += 1;
        $this->lives++;
    }
}
```

</details>
