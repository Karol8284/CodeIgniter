<?php

namespace App\Controllers\Page1;
use App\Controllers\BaseController;
use SplFileObject;
use SplMaxHeap;
use SplMinHeap;

class Classes extends BaseController
{
    public function index()
    {
        echo 'dwaas';
    }
    public function sortowanie(){
        $tab = new SplMinHeap();
        $tab->insert('Piotr');
        $tab->insert('Arkadiusz');
        $tab->insert('Samuel');
        foreach($tab as $t){
            print "$t <br>";
        }
        echo "<br>";
        $tab2 = new SplMaxHeap();
        $tab2->insert('Piotr');
        $tab2->insert('Arkadiusz');
        $tab2->insert('Samuel');
        foreach ($tab2 as $t) {
            print "$t <br>";
        }
    }
    // public function classClone(){
        
    // }
}


class test3a{
    protected $wlasciwosc;
    protected $kopie;
    function __construct($wlasciwosc, $kopie = 0)
    {
        $this->wlasciwosc = $wlasciwosc;
        $this->kopie = $kopie;
    }
    function __destruct()
    {
        printf("Usuwanie obiektu %s...\n", $this->wlasciwosc);
    }
    function __clone()
    {
        $this->wlasciwosc.= "KLON";
        $this->kopie++;
    }
    function pobierzKopie()
    {
        printf("Obiekt %s ma %d kopii.\n", $this->wlasciwosc, $this->kopie);
    }
    
}
$x = new test3a("Ob 1");
$x->pobierzKopie();
echo "<br>";
$y = new test3a("Ob 2");
$x = clone $y;
echo "<br>";
$x->pobierzKopie();
echo "<br>";
$y->pobierzKopie();
echo "<br>";
echo "Koniec";
echo "<br>";
?>
<?php
