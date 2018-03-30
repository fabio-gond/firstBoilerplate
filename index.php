<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/main.css?t=<?php echo time(); ?>">
  <title>Documento senza titolo</title>
</head>

<body>
  <?php include "includes/partials/header.php"; ?>
  <?php include "includes/partials/form.html"; ?>
  <main class="content grid">
    <?php include "includes/partials/card.html"; ?>
    <?php include "includes/partials/card.html"; ?>
    <?php include "includes/partials/card.html"; ?>
  </main>
  <script src="assets/js/vendor/docready.js"></script>
  <?php 
    // Footer
    include "includes/partials/footer.php";
  
    // Cookie Bar
    include "includes/partials/cookie-bar.html";
  
    // Javascript at the end of the body
    include "includes/partials/end-scripts.php"; 
  ?>
</body>

</html>