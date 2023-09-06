<!DOCTYPE html>
<html>
<head>
<title>Affichage des recettes</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Affichage des recettes</h1>

<ul>
<?php
//tableau des recettes
$recipes = [
    [
    'title' => 'Cassoulet',
    'recipe' => 'Etape1: des flageolets',
    'author' => 'mickael.andrieu@exemple.com',
    'is_enabled' => true,
    ],
    [
    'title' => 'Couscous',
    'recipe' => '',
    'author' => 'mickael.andrieu@exemple.com',
    'is_enabled' => false,
    ],
    [
    'title' => 'Escalope milanaise',
    'recipe' => 'Etape1: prenez une belle escalope',
    'author' => 'mathieu.nebra@exemple.com',
    'is_enabled' => true,
    ]
];

foreach($recipes as $recipe) {
    if($recipe['is_enabled'] == true){ ?>
        <h2>
           <?php echo $recipe['title'] ?>
        </h2>
        <h3>
            <?php echo $recipe['recipe'] ?>
            <br>
            <?php echo $recipe['author']?>
        </h3>

    <?php
    }
    
}

?>
</ul>
</body>
</html>