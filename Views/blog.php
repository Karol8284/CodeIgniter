<h1><?= $title ?></h1>

<div>


    <?php foreach ($posts as $p) :  ?>
        <div>
            <h3><?=$p ?></h3>
            <img src="/assets/images/photo1.jpg" width="200pt" height="100pt" alt="">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur deserunt animi perferendis, repellat provident dolor ullam harum quaerat a recusandae? Praesentium nobis suscipit illum eveniet velit dolorem facere, sit voluptatibus.</p>
            <?php endforeach ?>
        </div>
</div>