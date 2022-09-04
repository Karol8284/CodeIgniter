<?php
     $a = 'htrjrd';
    
    class obj{
        public $firstName;
        public $lastName;

        public function createObj($firstName, $lastName)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }
        function returnObjData(){;
            echo $this->firstName.$this->lastName;
        }
    }
    $obj0 = new obj();
    $obj0->createObj('Julia','KOP');
    $obj1 = new obj();
    $obj1->createObj('Celestyna','LOT');
    $obj2 = new obj();
    $obj2->createObj('Henryk','RYI');

?>


<?php

?>

<script>
    PersonMaleNameTab = [
        'Liam','Noah','Oliver','Elijah','James','William','Benjamin','Lucas','Henrys','Theodore',
    ]
    console.log(PersonMaleNameTab.length)
    function Person() {
        PersonData = {
         id: 0,
         firstName : '',
         lastName : '',
         age : 0,
        }
        
            // age = function(ageMin,ageMax){
            //     return Math.random() * (ageMax - ageMin + 1) + ageMin
            // },
            // pesel = function(peselMin,peselMax){
            //     return Math.random() * (peselMax - peselMin + 1) + peselMin
            // }
            
        function setPersonData(lastName) {
            var randomNum = Math.random()*(PersonMaleNameTab.length)
            randomIntNum = parseInt(randomNum)
            this.firstName = PersonMaleNameTab[randomIntNum]
            this.lastName = lastName
        }
        function setName(tableName,lengthPersonMaleNameTab) {
            
        }
    }
    Object1 = {
        name :"Oliver",
        Object2 : {
            name : "Lucas",
        },
        Object3 : [
            'Liam','Noah','Oliver','Elijah','James','William','Benjamin','Lucas','Henrys','Theodore',
        ],
    }
    console.log(Object1.Object2.name); 
    console.log(Object1.Object3[4]);


    function ObjectFun(id,name){
        name1 = 'William',
        age1 = 31,
        Data = {
            id : id,
            name: name,
            lastName: '',
        }
        return Data
    }
    ObjFun1 = new ObjectFun(23,'Noah')
    // ObjFun1.Data.id 
    console.log(ObjFun1.name);
    console.log(ObjFun1);
    
    console.log(PersonMaleNameTab);
    
     a = Math.random() * (10 - 1 + 1) + 1 
    console.log(a)

    let i = 0
    PersonTab = []
    while (i < 20) {
        PersonTab[i] = new Person()
        // console.log(Person)
        // PersonTab[i].PersonData.id = i
        // console.log(PersonTab[i])
        i++
    }
</script>
    <?php $variable1 = "<script>document.write(ObjFun1.name)</script>";
        echo $variable1;
    ?>
    <?php 
        $variable2 = "<script>document.write(ObjFun1)</script>";
        echo $variable2;
    ?>
    <?php
    // "<script>document.write(Object1.Object3.length)</script>"
        $tab1 = [];
        $doMore = true;
        for ($i = 0; $i < 10; $i++) {
            if ("<script>document.write(Object1.Object3[".$i."])</script>" == null ) {
                echo "console.log(end)";
                $doMore = false;
            }else{
            $tab1[$i] = "<script>document.write(Object1.Object3[".$i."])</script>";
            // echo $tab1[$i];
            echo $i." <script>document.write(Object1.Object3[".$i."])</script> ";
            }
        }
    ?>

<script>
    const ProductObject = {
        seller : {
            company : {
                name : "Company Name SEO",
                many :  0,
                
            }
        }
    }
    ProductObject1 = ProductObject
    ProductObject1.seller.company.many = 591211926996

    $( function () { 
        $.getJSON({
        type: "GET",
        // http://localhost/ProjectIgniter/public/transferData/page1Ajax
        url: "page1Ajax",
        data: {
            name : 'Oliver',
            ObjFunAjax1 : ObjFun1,
            Object1 : Object1,
            ProductObject1 : ProductObject1,
        },
        dataType: "JSON",
        beforeSend: function(data){
            console.log("AJAX "+data.name)
        },
        success: function (data) {
            console.log(data);
            console.log("AJAX "+ data.ObjFunAjax1);
            console.log("AJAX "+ data.name);
        }
    })
     })
</script>

</body>
</html>