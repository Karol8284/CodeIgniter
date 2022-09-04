<?php
    $conn = \Config\Database::connect('zawody');
    $sql = "SELECT akwen, data_zawodow, wojewodztwo, sedzia FROM `zawody_wedkarskie` INNER JOIN lowisko ON zawody_wedkarskie.Lowisko_id = lowisko.rodzaj;";
    $query = $conn->query($sql);
    $result = $query->getResultArray();
?>


<style>
td,th {
    border: 1px solid rgb(190, 190, 190);
    padding: 10px;
}
td {
    text-align: center;
}
</style>

<h2><?= $title1 ?></h2>

<table border="1">
<tr>
    <th><p><?= $table['title1']; ?></p></th>
    <th><p><?= $table['title2']; ?></p></th>
    <th><p><?= $table['title3']; ?></p></th>
    <th><p><?= $table['title4']; ?></p></th>
</tr>
<?php foreach($result as $r) : ?>
    <tr><td><?= $r['akwen']; ?></td><td><?= $r['data_zawodow']; ?></td><td><?= $r['wojewodztwo'];?></td><td><?= $r['sedzia'];?></td></tr>
<?php endforeach ?>

<?php
    $session = \Config\Services::session();
    $tabSession = [
        'id' => 1,
        'name' =>'Kordian',
        'lastName' => 'Wiśniewski',
    ];
    $tabSession = $session->set($tabSession);
    if($session->has('id')){
        echo "have";
        $session->push('tabSession',['city' => 'Śląsk',]);
        echo $tabSession;
    }else{
        echo "don't have";
    }
    $session->markAsFlashdata('item');
    $session->setFlashdata('item','Polska');

    // Both 'item' and 'item2' will expire after 300 seconds
    $session->markAsTempdata(['item', 'item2'], 300);

    // 'item' will be erased after 300 seconds, while 'item2'
    // will do so after only 240 seconds
    $session->markAsTempdata([
        'item'  => 300,
        'item2' => 240,
    ]);
    $_SESSION['item'] = 'value';
    $session->markAsTempdata('item', 300); // Expire in 5 minutes   
    $session->setTempdata('item', 'value', 300);
    $tempdata = ['newuser' => true, 'message' => 'Thanks for joining!'];
    $session->setTempdata($tempdata, null);
    $session->removeTempdata('item');
    $session->stop();
    $session->destroy();
?>
</table>