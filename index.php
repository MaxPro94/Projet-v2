<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citation</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
</head>
<?php
require 'data/db-connect.php'; ?>
<?php 
$query1 = "SELECT * FROM citation ORDER BY RAND() LIMIT 1";
$resultcit = $dbh->query($query1);
?>

<?php
if ($resultcit->rowCount() > 0) {
    while ($row = $resultcit->fetch(PDO::FETCH_ASSOC)) {
?>
    <div class="box">
        <a href="acceuil.php"><?= $row['content'] ?></a>
        <h2>- <?= $row['name'] ?></h2>
    </div>
    <div class="background"></div>
<?php
    }
}
?>