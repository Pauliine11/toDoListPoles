<?php
require_once(__DIR__ . "/partials/head.view.php");
?>
<div class="container">
    <div class="row d-flex justify-content-around">
        <h1 class="text-center text-warning fw-bold m-2">Bienvenue</h1>
        <h2 class="text-center text-warning mt-5">Les tâches urgentes</h2>
        <?php
        if (!empty($tasksUrgent)) {
            foreach ($tasksUrgent as $task) {
        ?>
                <div class="card border-3 border-danger mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <span class="badge rounded-pill text-bg-danger"><?= $task->getStatus() ?></span>
                        <h3 class="card-title"><?= $task->getTitle() ?></h3>
                        <p class="card-text"><?= $task->getDescription() ?></p>
                        <a href="/tache?id=<?= $task->getId() ?>" class="btn btn-secondary">Voir +</a>
                        <form action="" method="post">
                            <input type="hidden" value="<?= $task->getId() ?>" name="id">
                            <button type="submit" class="btn btn-success mt-2" name="editStatus">Terminer</button>
                        </form>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>Vous n'avez pas de tâche urgente !</p>";
        }
        ?>
        <h2 class="text-center text-warning mt-5">Les tâche à faire</h2>
        <?php
        if (!empty($tasksToDo)) {
            foreach ($tasksToDo as $task) {
        ?>
                <div class="card border-3 border-info mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <span class="badge rounded-pill text-bg-info"><?= $task->getStatus() ?></span>
                        <h3 class="card-title"><?= $task->getTitle() ?></h3>
                        <p class="card-text"><?= $task->getDescription() ?></p>
                        <a href="/tache?id=<?= $task->getId() ?>" class="btn btn-secondary">Voir +</a>
                        <form action="" method="post">
                            <input type="hidden" value="<?= $task->getId() ?>" name="id">
                            <button type="submit" class="btn btn-success mt-2" name="editStatus">Terminer</button>
                        </form>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>Vous n'avez pas de tâche à faire !</p>";
        }
        ?>
        <h2 class="text-center text-warning mt-5">Les tâches en cours</h2>
        <?php
        if (!empty($tasksInProgress)) {
            foreach ($tasksInProgress as $task) {
        ?>
                <div class="card border-3 border-warning mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <span class="badge rounded-pill text-bg-warning"><?= $task->getStatus() ?></span>
                        <h3 class="card-title"><?= $task->getTitle() ?></h3>
                        <p class="card-text"><?= $task->getDescription() ?></p>
                        <a href="/tache?id=<?= $task->getId() ?>" class="btn btn-secondary">Voir +</a>
                        <form action="" method="post">
                            <input type="hidden" value="<?= $task->getId() ?>" name="id">
                            <button type="submit" class="btn btn-success mt-2" name="editStatus">Terminer</button>
                        </form>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>Vous n'avez pas de tâche en cours !</p>";
        }
        ?>
        <h2 class="text-center text-warning mt-5">Les tâches terminées</h2>
            <?php
        if (!empty($tasksFinished)) {
            foreach ($tasksFinished as $task) {
        ?>
                <div class="card border-3 border-success mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <span class="badge rounded-pill text-bg-success"><?= $task->getStatus() ?></span>
                        <h3 class="card-title"><?= $task->getTitle() ?></h3>
                        <p class="card-text"><?= $task->getDescription() ?></p>
                        <a href="/tache?id=<?= $task->getId() ?>" class="btn btn-secondary">Voir +</a>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>Vous n'avez pas de tâche terminée !</p>";
        }
        ?>
        <h2 class="text-center text-warning mt-5">Voilà les tâches :</h2>
        <?php
        if (!empty($resultTasks)) {
            foreach ($resultTasks as $task) {
        ?>
                <div class="card border-3 border-warning mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <span class="badge rounded-pill text-bg-info"><?= $task->getStatus() ?></span>
                        <h3 class="card-title"><?= $task->getTitle() ?></h3>
                        <p class="card-text"><?= $task->getDescription() ?></p>
                        <a href="/tache?id=<?= $task->getId() ?>" class="btn btn-secondary">Voir +</a>
                        <form action="" method="post">
                            <input type="hidden" value="<?= $task->getId() ?>" name="id">
                            <button type="submit" class="btn btn-success mt-2" name="editStatus">Terminer</button>
                        </form>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>Vous n'avez pas de tâche</p>";
        }
        ?>
    </div>
</div>
<?php
require_once(__DIR__ . "/partials/footer.view.php");
?>