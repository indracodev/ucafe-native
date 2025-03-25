<?php

// db.php
$host = 'localhost'; // Ganti dengan host Anda
$db = 'ucafe'; // Nama database
$user = 'root'; // Ganti dengan username Anda
$pass = ''; // Ganti dengan password Anda

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

// tautan : ubah sesuai direktory anda (localhost)
$ucafe = "http://localhost/www/build/indracoweb/ucafe-php/";
// $ucafe = file_get_contents(__DIR__);
// $ucafe = "http://localhost/ucafe-php/";
// var_dump($ucafe);

// =======================================
// fungsi alih bahasa
// =======================================
session_start();

// Default language
$defaultLang = 'en';

// Check if a language is set in the session or URL
if (isset($_POST['lang'])) {
   $_SESSION['lang'] = $_POST['lang'];
}

$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : $defaultLang;

// Load the appropriate language file
$langFile = __DIR__ . '/../lang/' . $lang . '.php';
if (file_exists($langFile)) {
   $translations = include($langFile);
} else {
   $translations = include(__DIR__ . '/../lang/' . $defaultLang . '.php');
}
