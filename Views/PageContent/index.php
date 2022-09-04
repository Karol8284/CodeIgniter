<div>
    <?php foreach ($name  as $n) : ?>
        
    <p>Imie: <?=$n ?></p>
    <?php endforeach ?>
    
    <?php
    //$this->load->database();
    ?>
</div>

<div>
    <form action="page/login" method="post">
        <input type="text" name="login" id="login">
        <input type="password" name="password" id="password">
        <input type="submit" value="Login">
    </form>
</div>