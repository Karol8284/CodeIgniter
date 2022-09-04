<div class="container">
 <div class="card border border-3 rounded-3 m-3 p-3 " id="app">
  <div class="card-body" id="picterCard">
  <script>
    var numberOfObj = 0
    objId = 0
    // crateing Object
    function createImgObject(name, src, alt){
        this.name = name
        this.src  = src
        this.alt  = alt
    }
   
    tabObjectImg = []

    // numberOfTabElement = 0
<?php
// class obj {
//   protected $name;
//   protected $src;
//   protected $alt;

//   function createObj($name, $src, $alt) {
//     $this->name = $name;
//     $this->src = $src;
//     $this->alt = $alt;
//   }
  
// }
?>
    <?php

     
    $conn = \Config\Database::connect('shop');
    $query = $conn->query('SELECT name, src,alt FROM `peacters`');
    $result = $query->getResultObject();
    $objNum = 0;
    foreach ($result as $r) : ?>

    tabObjectImg[<?=$objNum; ?>] = new createImgObject('<?=$r->name?>', '<?=$r->src;?>','<?=$r->alt;?>')

    <?php
     $objNum++; 
     endforeach;
     $idOfObj = 0;
    ?>
    
        var i = 0
        while ( tabObjectImg[i]) {
            console.log(tabObjectImg[i].name+' ');
            $('#picterCard').html('<img src="'+tabObjectImg[i].src+'" alt="'+tabObjectImg[i].alt+'" class="card-img-top"><p class="card-text">'+tabObjectImg[i].name+'</p>')
            i++
        } 
    setInterval(()=>{
        
            // $('#picterCard').html('<img src="'+tabObjectImg[idOfObj].src+'" alt="'+tabObjectImg[idOfObj].alt+'" class="card-img-top"><p class="card-text">'+tabObjectImg[idOfObj].name+'</p>')
        <?php 
         if ( $idOfObj > $objNum) {
            echo "console.log(".$idOfObj." > ".$objNum.")";
            $idOfObj = 0;
         }else{
                        
         }
         
         $objNum++;
        ?>
    }, 3000);

</script>
  </div>
 </div>
</div>

<?php
//  $conn = \Config\Database::connect('shop');
//  $query = $conn->query('SELECT name, src,alt FROM `peacters`');
//  $result = $query->getResultObject();
 
//  foreach ($result as $r) {
//   echo '<script>';   
//   echo $r->src;   
//   echo '</script>';   
//  }
?>
