<?php
// بيانات الاتصال بقاعدة البيانات - غيّرها ببياناتك من InfinityFree
$host = "sql109.infinityfree.com";      // اسم السيرفر (Hostname)
$user = "if0_42414840";                // اسم المستخدم
$pass = "N1mUmJNOPI";           // كلمة المرور
$dbname = "if0_42414840_conpan";   // اسم قاعدة البيانات

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "فشل الاتصال: " . $conn->connect_error]));
}
?>
