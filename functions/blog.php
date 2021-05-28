<?php

function tampilkan(){
    global $link;

    $query = "SELECT * FROM blog_data;";

    $result = mysqli_query($link, $query) or die('gagal menampilkan data');

    return $result;
}
function tambah_data($judul, $konten, $tag){
    $query = "INSERT INTO blog_data (judul, isi, tag) VALUES ('$judul', '$konten', '$tag')";
    return run($query);
}

function register($username, $email, $password){
    $username = $username;
    $email = $email;
    $password = md5($password);
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    return run($query);
}

function login($username, $password){
    global $link;
    $notFound = true;
    $query_result = mysqli_query($link, "SELECT username, password FROM users;");

    while($row = mysqli_fetch_assoc($query_result)) {
        if (($username == $row['username']) && ($password == $row['password'])){
            $_SESSION['username'] = $row['username'];
            $notFound = false;
            return true;
        }
    }
    if ($notFound){
        return false;
    }
}

function run($query){
    global $link;

    if ($link->exec) return true;
    else return false;
}

?>