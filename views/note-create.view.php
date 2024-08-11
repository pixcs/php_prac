<?php require("views/partials/head.php") ?>
<?php require("partials/nav.php")  ?>
<?php require("partials/banner.php") ?>
<?php

require "Core/Validator.php";

use Core\Validator;

/** @var \Core\Database $db */

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];

    if (! Validator::string($_POST["body"], 1, 255)) {
        $errors['body'] = "A body of no more than 255 characters is required";
    }

    if (empty($errors)) {
        $db->query("INSERT INTO notes (body, user_id) VALUE(:body, :user_id)", [
            "body" => $_POST["body"],
            "user_id" => 1
        ]);

    }
}

?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form method="POST">
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">

                    <div class="col-span-full">
                        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                        <div class="mt-2">
                            <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <?= $_POST["body"] ?? "" ?> 
                        </textarea>
                            <?php if (isset($errors["body"])) : ?>
                                <p class="text-sm text-red-500"><?= $errors["body"] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>


                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
        </form>

    </div>
</main>

<?php require("views/partials/footer.php") ?>