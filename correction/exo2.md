# Exo2

## ÉNONCÉ

Aaaaah, I'm aliiiiive !

Well... Now that I'm a human being, I have rights, OK? #MarioLivesMatter
As every other humain being, I have the right to privacy.
I'm not fond of my lives being public like that.

Can you create me a `getLives()` method, that return the amount of lives that I have?
And of course, the property needs to be private now.

For example, we should be able to use the class this way:

```php
<?php
// [..]
$mario = new Mario();
echo $mario->getLives(); // Display: 3
echo $mario->lives; // Fatal Error
```

## PLAN

- Reprendre le code de l'exo1
- Actuellement, la propriété "lives" est publique
- Changer la visibilité de "lives" en _privé_
- La propriété n'est plus accessible ni en lecture, ni en écriture
- Pour laisser l'accès en lecture au contenu de la propriété "lives", créer le _Getter_ "getLives"
  - un _Getter_ est une méthode retournant la valeur d'une propriété

## SOLUTION

<details>

```php
<?php
// [..]
class Mario {
    private $lives;

    public function __construct() {
        $this->lives = 3;
    }

    public function getLives() {
        return $this->lives;
    }
}
```

</details>
