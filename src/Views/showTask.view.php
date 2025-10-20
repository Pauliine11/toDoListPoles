<?php
require_once(__DIR__ . "/partials/head.view.php");
?>
<h1 class="text-center text-warning fw-bold m-2">Afficher une tâche</h1>

<div class="container">
    <h2>Voici la tâche</h2>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <span class="badge rounded-pill text-bg-info"><?= $myTask->getStatus() ?></span>
            <h3 class="card-title"><?= $myTask->getTitle() ?></h3>
            <p class="card-text"><?= $myTask->getDescription() ?></p>
            <p class="card-text"><?= $myTask->getCreationDate() ?></p>
            <p class="card-text"><?= $myTask->getModificationDate() ?></p>
            <div class="col-auto">
                <a href="/modifier?id=<?= $myTask->getId(); ?>" class="btn btn-warning mb-3">Modifier</a>
                <form action="/supprimer" method="POST">
                    <input type="hidden" name="id" value="<?= $myTask->getId() ?>">
                    <button type="submit" class="btn btn-danger mb-3">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once(__DIR__ . "/partials/footer.view.php");
?>        