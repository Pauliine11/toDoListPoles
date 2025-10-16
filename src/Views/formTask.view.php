<?php 
    require_once (__DIR__ . '/partials/head.view.php');
?>
<h1 class="text-center my-5">Ajouter une tâche</h1>
<form method="POST">
    <div class="container">
        <div class="form-group">
            <label for="title">Titre de la tâche :</label>
            <input class="form-control" type="text" id="title" name="title">
            <label for="description" class="form-label mt-3">Quelle tâche avez-vous à ajouter ?</label>
            <textarea class="form-control" id="description" name="description" style="height: 50px"></textarea>
            <label for="status" class="form-label mt-3">Statut</label>
            <select name="status">
                <option value ="Urgente">Urgente</option>
                <option value ="A faire">A faire</option>
                <option value ="En cours">En cours</option>
            </select>
        </div>
        <button type="submit" name="addTask" class="btn btn-warning mt-2">Ajouter la tâche</button>
    </div>
</form>

<?php 
   require_once (__DIR__ . '/partials/footer.view.php');