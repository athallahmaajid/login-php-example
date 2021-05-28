<?php
require_once "core/init.php";
require_once "views/header.php";

$articles = tampilkan();
?>

<?php
if (!($_SESSION === array())){
  echo "<h1>Halo ". $_SESSION['username']. '</h1>';
}
?>
<?php while($row=mysqli_fetch_assoc($articles)): ?>
<div class="each_article">
  <h3><?= $row['judul']; ?></h3>
  <p>
    <?= $row['isi']; ?>
  </p>
  <p class="waktu"><?= date_format(date_create($row['waktu']), "H:i:s"); ?></p>
  <p class="tag">Tag: <?= $row['tag']; ?></p>
</div>
<?php endwhile; ?>
<?php
require_once "views/footer.php";
?>