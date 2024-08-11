<?php

/** @var \Core\Database $db */

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db->query("DELETE FROM notes WHERE id = :id", [
        "id" => $_POST["id"]
    ]);

    header("Location: ./notes.php");

    /* Make sure that code below does not get executed when we redirect. */
    exit();

}

?>
<?php require("views/partials/head.php") ?>
<?php require("partials/nav.php")  ?>
<?php require("partials/banner.php") ?>


<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <p class="mb-2">
            <a href="/practice2/notes.php" class="text-blue-500 underline">
                Go back
            </a>
        </p>
        <p><?= htmlspecialchars($note["body"]) ?></p>
        <form class="mt-5" method="POST">
            <input type="hidden" name="id" value="<?= $note["id"] ?>" />
            <button class="text-red-500">Delete</button>
        </form>
    </div>
</main>

<?php require("views/partials/footer.php") ?>