<?php 

Class Mobil {
    Var $bensin;
    function maju(){
        $this->bensin = $this-> bensin - 2; //mensetting properti
    }
    function mundur(){
        $this->bensin = $this-> bensin - 1; //mensetting properti
    }
    function isibensin($tambah){
        $this->bensin = $this-> bensin + $tambah;
    }
    function sisabensin(){
       return $this->bensin;
    }
}

$mobil1 = new Mobil;
$mobil1->isibensin(6);
echo "Mobil melakukan isi bensin. Sisa bensin : ".$mobil1->sisabensin()." Liter <br/>";
$mobil1->maju();
echo "Mobil melakukan aksi maju. Sisa bensin : ".$mobil1->sisabensin()." Liter <br/>";
$mobil1->mundur();
echo "Mobil melakukan aksi mundur. Sisa bensin : ".$mobil1->sisabensin()." Liter <br/>";
$mobil1->isibensin(6);
echo "Mobil melakukan isi bensin. Sisa bensin : ".$mobil1->sisabensin()." Liter <br/>";

?>