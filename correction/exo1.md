# Exo1

## ÉNONCÉ

Hello! It's me, Mario!

Oh, I'm sorry, I'm not speaking French right now.
But I've been told you're a developer, so I figure
you speak English, at least a little.

And for Peach's sake, you're a student in a school
named “O’clock”, so you HAVE to be able to read English!

So, where were we?
OK, I'm Mario! But right now, I am not programmed yet.

Can you write me a PHP class to make me exist?
Just a bare class nammed `Mario`, with just one property: `lives`.
In this game, I start with 3 lives. Oh, and this property
should be public knowledge…

For example, we should be able to use the class this way:
```
$mario = new Mario();
echo $mario->lives; // Display: 3
```

## PLAN

- Créer une classe nommée "Mario" dans le fichier `exo1.php`
- Ajouter une propriété "lives"
- Créer le constructeur de la classe
- Dans le constructeur de la classe, donner la valeur `3` à la propriété "lives"

## SOLUTION

<details>

```php
<?php

// [..]

class Mario {
    public $lives;

    public function __construct() {
        $this->lives = 3;
    }
}
```

</details>
