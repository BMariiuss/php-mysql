<h1>Ajouter une recette</h1>
<form action="<?php echo($rootUrl . 'recipes.post_create.php'); ?>" method="POST">
<div class="mb-3">
    <label for="title" class="form-label">Titre de ma recette</label>
    <input type="text" class="form-control" id="title" name="title"