<?php
require 'top.html.php'; ?>

<?php
$query1 = "SELECT * FROM citation ORDER BY RAND() LIMIT 1";
$resultcit = $dbh->query($query1);
?>
<div class="container">
    <div class="row my-4">
        <div class="col">
            <?php
            if ($resultcit->rowCount() > 0) {
                while ($row = $resultcit->fetch(PDO::FETCH_ASSOC)) {
            ?>
                    <div class="card text-center mb-3"">
                        <div class=" card-body">
                        <h5 class="card-title"> - <?= $row['name'] ?></h5>
                        <p class="card-text"><?= $row['content'] ?></p>
                    </div>
        </div>
<?php
                }
            }
?>
    </div>
    <div class="col-4">
        <div class="card">
            <img src="https://www.iim.fr/ecole-web/wp-content/uploads/2017/01/HTML5.jpg" class="card-img-top w" alt="...">
            <div class="card-body">
                <h5 class="card-title">HTML & CSS !</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, inventore facilis fugit mollitia perferendis, praesentium voluptatem minima illum fuga accusantium voluptas? Neque laboriosam alias odit expedita dolorem, sequi distinctio maxime.</p>
                <a href="https://www.metz-numeric-school.fr/fr" target="_blank" class="btn btn-primary">GO !</a>
            </div>
        </div>

    </div>
    <div class="col-4">
        <div class="card">
            <img src="https://goodtech.info/wp-content/uploads/2019/08/php-leader-4c1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nouveau cours : PHP !</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, inventore facilis fugit mollitia perferendis, praesentium voluptatem minima illum fuga accusantium voluptas? Neque laboriosam alias odit expedita dolorem, sequi distinctio maxime.</p>
                <a href="https://www.metz-numeric-school.fr/fr" target="_blank" class="btn btn-primary">GO !</a>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <img src="https://miro.medium.com/v2/resize:fit:1200/1*Z0QJCX3vTZz1g421batDIA.jpeg" class="card-img-top w" alt="...">
            <div class="card-body">
                <h5 class="card-title">Git & GitHub !</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, inventore facilis fugit mollitia perferendis, praesentium voluptatem minima illum fuga accusantium voluptas? Neque laboriosam alias odit expedita dolorem, sequi distinctio maxime.</p>
                <a href="https://www.metz-numeric-school.fr/fr" target="_blank" class="btn btn-primary">GO !</a>
            </div>
        </div>

    </div>
    <div class="col">
        <div class="card">
            <img src="https://assets-global.website-files.com/60ec34540d013784844d2ee2/61d42d538aec6733243470a7_Python-logo.png" class="card-img-top w" alt="...">
            <div class="card-body">
                <h5 class="card-title">Python !</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, inventore facilis fugit mollitia perferendis, praesentium voluptatem minima illum fuga accusantium voluptas? Neque laboriosam alias odit expedita dolorem, sequi distinctio maxime.</p>
                <a href="https://www.metz-numeric-school.fr/fr" target="_blank" class="btn btn-primary">GO !</a>
            </div>
        </div>

    </div>
    <div class="col">
        <div class="card">
            <img src="https://media.licdn.com/dms/image/C4D12AQGQl7-W8_DEWA/article-cover_image-shrink_600_2000/0/1651402325780?e=2147483647&v=beta&t=mZAjZUBat9lta5me8ScxHVXL4M3KU2PGYkXwCQobWTY" class="card-img-top w" alt="...">
            <div class="card-body">
                <h5 class="card-title">SQLite !</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, inventore facilis fugit mollitia perferendis, praesentium voluptatem minima illum fuga accusantium voluptas? Neque laboriosam alias odit expedita dolorem, sequi distinctio maxime.</p>
                <a href="https://www.metz-numeric-school.fr/fr" target="_blank" class="btn btn-primary">GO !</a>
            </div>
        </div>

    </div>

</div>
</div>