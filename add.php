<?php
require_once "core/init.php";
require_once "views/header.php";

$error = '';

if (isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $tag = $_POST['tag'];

    if (!empty(trim($judul)) && !empty(trim($judul))){
        if (tambah_data($judul, $konten, $tag)){
            header('Location: index.php');
        } else {
            $error = 'ada masalah saat menambah data';
        }
    } else {
        $error = 'judul dan konten wajib diisi';
    }
}
?>

<form action="" method="post">
    <label for="judul">Judul</label> <br>
    <input type="text" name="judul"> <br><br>

    <label for="konten">Isi</label> <br>
    <textarea name="konten" cols="40" rows="8"></textarea> <br><br>

    <label for="tag">Tag</label> <br>
    <input type="text" name="tag"> <br><br>

    <div id="error"><?= $error ?></div>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
require_once "views/footer.php";
?>