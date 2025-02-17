<?php require("views/partials/head.php") ?>
<?php require("partials/nav.php")  ?>
<?php require("partials/banner.php") ?>


<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <p>Welcome to the Notes Page</p>
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="note.php?id=<?= $note["id"] ?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($note["body"]) ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>

        <p class="mt-6">
            <a href="./note-create.php" class="text-blue-500 hover:underline">
                Create Note
            </a>
        </p>
    </div>
</main>

<?php require("views/partials/footer.php") ?>