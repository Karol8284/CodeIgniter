<div class="">
    <p class="h2 text-center bg-primary text-white">Użytkownik został utworzony</p>
</div>

<div>
    <table class="table table-striped-columns p-3">
        <thead class=" ">
            <tr>
                <th class="col">#</th>
                <th class="col">Login</th>
                <th class="col">Password</th>
                <th class="col">E-mail</th>
            </tr>
            <?php
            $conn = \Config\Database::connect('bank');
            $qeary = $conn->query($sql['sql1']); 
            $result = $qeary->getResultArray();
            $rowNumber = 1;
            ?>
            <?php ; foreach($result as $r): ?>
                <tr>
                <th class="row"><?= $rowNumber++  ?></th>
                <td><?= $r['login'] ?></td>
                <td><?= $r['password'] ?></td>
                <td><?= $r['email'] ?></td>
            </tr>
            <?php endforeach ?>
        </thead>
    </table>
</div>