# Exo4

## ÉNONCÉ

Luigi: Hi!
It seems like Mario is in trouble. I'm here to help!

But, you know, Mario is my brother. I don't think we should have
a Mario class, and a Luigi class. Maybe, we can just pass our firstname
when we create the object?

Oh, and I saw this is not programmed yet, but I want to say my punchline!

For example, we should be able to use the class this way:

```php
<?php
// [..]
$mario = new Hero('Mario');
echo $mario->hello(); // Display: "It's me, Mario!"
$mario->takeHit();
$mario->up();
$mario->takeHit();
echo $mario->getLives(); // Display: 2

$luigi = new Hero('Luigi');
echo $luigi->hello(); // Display: "It's me, Luigi!"
$luigi->up();
$luigi->up();
$luigi->takeHit();
echo $luigi->getLives(); // Display: 4
```

## PLAN

- Reprendre le code de l'exo3
- Dans les exemples,
  - l'affichage se fait grâce aux mot-clés `echo`
  - donc la méthode `hello` doit retourner une chaîne de caractères
  - et il faut bien faire attention au `!` à la fin de la phrase
- Renommer la classe `Mario` en `Hero`
- Ajouter la propriété `name` permettant de stocker le nom du héro
- Modifier le constructeur de la classe
  - définir un paramètre pour le "nom" du héro
  - affecter la valeur de ce paramètre à la propriété `name` de l'instance courante
- Créer la méthode `hello` dans la classe
  - créer la bonne chaîne de caractères en concaténant avec la propriété `name`
  - retourner la chaîne de caractères générée

## SOLUTION

<details>

```php
<?php
// [..]
class Hero {
    private $lives;
    private $name;

    // $name = 1er paramètre du constructeur => 1er paramètre lors du "new Hero(1erParam);"
    public function __construct($name) {
        $this->lives = 3;
        // Affectation du paramètre $name à la propriété name de l'objet courant
        $this->name = $name;
    }

    public function getLives() {
        return $this->lives;
    }

    public function takeHit() {
        $this->lives--;
    }

    public function up() {
        $this->lives++;
    }

    public function hello() {
        //return "It's me, {$this->name}!";
        return 'It\'s me, ' . $this->name . '!';
    }
}
```

</details>
