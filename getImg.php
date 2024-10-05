<?php
$directory = './image/';
$images = glob($directory . "*"); // Ambil semua file jpg

echo json_encode($images); // Mengembalikan daftar file dalam format JSON
?>
