<div>
<ol>
    <?php $conn = \Config\Database::connect("Login");
                $sql1 = "Select Login, Password from users";
                $query1 = $conn->query($sql1);
                $result1 = $query1->getResult();
     ?>
     <?php foreach($result1 as $r) : ?>
        <li>Login: <?= $r->Login; ?></li>    
    <?php endforeach ?>
</ol>
</div>
<div>
    <form action="login" method="post">
        <input type="text" name="login" id="login">
        <input type="password" name="password" id="password">
        <input type="submit" value="Login">
    </form>

    
</div>