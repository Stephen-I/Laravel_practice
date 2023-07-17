<?php require("partials/head.php") ?> 
  
<?php require("partials/nav.php") ?>

<?php require("partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <?php foreach ($characters as $character) : ?>
        <li>
          <a href="/character?id=<?= $character["id"] ?>" class="text-blue-700 hover:underline">
            <?= $character["full_name"] ?>
          </a>
        </li>
      <?php endforeach; ?>  
    </div>
</main>

<?php require("partials/footer.php") ?>
