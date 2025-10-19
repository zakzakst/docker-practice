<?php
$host = 'db';
$db   = 'sampledb';
$user = 'root';
$pass = 'secret';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    $stmt = $pdo->query("SELECT * FROM users");
    echo "<h1>Users</h1><ul>";
    while ($row = $stmt->fetch()) {
        echo "<li>{$row['id']}: {$row['name']} ({$row['email']})</li>";
    }
    echo "</ul>";
} catch (\PDOException $e) {
    echo "DB接続エラー: " . $e->getMessage();
}