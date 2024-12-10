<?php
header('Content-Type: application/json');

$host = 'localhost';
$db = 'web';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass $db,3307);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $_GET['q'];
    $query = '%' . $query . '%';

    $sql = "SELECT * FROM `data` WHERE name LIKE ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$query]);

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($results);
} catch (PDOException $e) {
    echo json_encode([]);
}
