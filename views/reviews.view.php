<?php require("partials/head.php") ?> 
  
<?php require("partials/nav.php") ?>

<?php require("partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <?php foreach ($reviews as $review) : ?>
        <li>
          <a href="/review?id=<?= $review["id"] ?>" class="text-blue-700 hover:underline">
            <?= $review["body"] ?>
          </a>
        </li>
      <?php endforeach; ?>  
    </div>
</main>

<?php require("partials/footer.php") ?>
