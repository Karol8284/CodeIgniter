<?php
    $conn = \Config\Database::connect('zawody');
    $sql = "SELECT * FROM karty_wedkarskie";
    $queary = $conn->query($sql);
    $result = $queary->getResult();
?>
<!-- 'INSERT INTO `karty_wedkarskie` (`id`, `imie`, `nazwisko`, `adres`, `data_zezwolenia`, `punkty`) VALUES (NULL, '.$data['name'].', '.$data['nazwisko'].', '.$data['adres'].', NULL, '.$data['pt'].')'; -->
<div>
    <table  border="1" style="text-align: center;">
        <?php foreach($result as $r) : ?>
            <tr><td><?= $r->imie ?></td><td><?= $r->nazwisko ?></td><td><?= $r->adres ?></td></tr>
        <?php endforeach ?>
    </table>
</div>
<div>
    <form class="lead text-center" action="zawodnicy" method="post">
        <p>Imie:<input type="text" name="imie" id=""></p>
        <p>Nazwisko:<input type="text" name="nazwisko" id=""></p>
        <p>Adres:<input type="text" name="adres" id=""></p>
        <p>Punkty:<input type="number" name="pt" id=""></p>
        <input type="submit" value="Utwórz konto">
    </form>
</div>