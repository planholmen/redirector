<?php

require_once __DIR__ . '/../handlers/loader.php';

$id = $_POST['id'];

$stmt = $mysqli->prepare("DELETE FROM " . DB_PREFIX . "redirect WHERE `id` = ?");
$stmt->bind_param('i', $id);

if ( ! $stmt->execute()) {
    echo "error";
} else {
    header('Location: http://' . BASE_URL . '/admin?succes=1');
}
