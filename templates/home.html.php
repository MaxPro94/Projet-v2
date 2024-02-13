<?php
require 'top.html.php'; ?>

<?php 
$query1 = "SELECT * FROM citation ORDER BY RAND() LIMIT 1";
$resultcit = $dbh->query($query1);
?>

<?php
if ($resultcit->rowCount() > 0) {
    while ($row = $resultcit->fetch(PDO::FETCH_ASSOC)) {
?>
        <div class="card mx-auto my-5" style="width: 24rem;">
            <img src="https://www.asafrance.fr/cache/com_zoo/images/peinture_saint_michel_contre_dragon_peinture_source_cw_8ff52aed87573b8d98ff12d98e8d824f.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><?= $row['content'] ?></p>
                <p class="auteur"> - <?= $row['name'] ?></p>
            </div>
        </div>
<?php
    }
}
?>

