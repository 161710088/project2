<?php
require_once "project2.php";
$aritmatika = new aritmatika;
$aritmatika->set_aritmatika(30,3);
echo "========================".'<br>';
echo "Perhitungan bilangan 30 dengan 3".'<br>';
echo "========================".'<br>';
echo "Penjumlahan = ".$aritmatika->get_penjumlahan().'<br>';
echo "Pengurangan = ".$aritmatika->get_pengurangan().'<br>';
echo "Perkalian = ".$aritmatika->get_perkalian().'<br>';
echo "Penbagian = ".$aritmatika->get_pembagian();
?>