<?php
    $conn = \Config\Database::connect('zawody');
    $sql1 = "Select * from ryby";
    $query1 = $conn->query($sql1);
    $result = $query1->getResult();
?>
<h2><?= $title['title'] ?></h2>

<div>
    
    <ol>
        <?php foreach($result as $r) : ?>
            <li><?= $r->nazwa ?></li>

            <?php endforeach ?>
    </ol>
    
</div>