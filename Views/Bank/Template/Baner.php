<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title><?= $banerTitle ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
     <div class="container-fluid">
      <a href="<?= $link['logo'] ?>" class="navbar-brand"><?= $text['logo'] ?></a>
     </div>    
     <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <div class="navbar-nav">
       <a href="<?= $link['link1'] ?>" class="nav-link"><?= $text['text1'] ?></a>
       <ul class="navbar-nav">
       <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
         <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $text['text2'] ?></a>
         <ul class="dropdown-menu dropdown-menu-white">
          <?php $NumberOfTextList = 1 ?> 
          <?php foreach($text['text2List'] as $textList) : ?> 
          <?php  $NumberOfLinkList = 0 ?>
          <?php foreach($link['link2List'] as $linkList) : ?>
          <?php
           $NumberOfLinkList++;    
           if($NumberOfLinkList == $NumberOfTextList){
               echo '<li><a class="dropdown-item" href="'.$linkList.'">'.$textList.'</a></li>';
           }
          ?> 
          <?php endforeach ?>
          <?php $NumberOfTextList++; ?>
          <?php endforeach ?>
         </ul>
         </li>
        </ul>
       </div>
       <a href="<?= $link['link3'] ?>" class="nav-link"><?= $text['text3'] ?></a>
       <a href="<?= $link['link4'] ?>" class="nav-link"><?= $text['text4'] ?></a>
       </div>
      </div>
     </div>
    </nav>
    
    
    