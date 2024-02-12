<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>
<?php require('../includes/book.php') ?>
<main>
<div class="content-wrap">
<h1><?php echo $_SESSION["useruid"]; ?></h1>
<h2>Booking Information</h2>
<p>Date: 2023-11-11 <?php $name ?></p>
<p>Time: 04:00 pm</p>
</div>
</main>
<?php require('partials/foot.php') ?>
