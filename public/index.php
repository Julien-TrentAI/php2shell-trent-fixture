<?php
session_start();
$entries = $_SESSION['entries'] ?? [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message'])) {
    $entries[] = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
    $_SESSION['entries'] = $entries;
}
?>
<!doctype html>
<title>Guestbook</title>
<form method="post"><input name="message"><button>Sign</button></form>
<ul><?php foreach ($entries as $entry): ?><li><?= $entry ?></li><?php endforeach; ?></ul>
