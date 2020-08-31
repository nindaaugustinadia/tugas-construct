<?php
class produk{
public $jenis,
	   $level, 
	   $harga;

public function getCetak(){
	return "$this->jenis, $this->level, $this->harga";
}
public function __construct($jenis="jenis",$level="level",$harga=0){
	$this->jenis = $jenis;
	$this->level=$jenis;
	$this->harga=$harga;
 		}
}
$produk1 = new produk("ayam geprek level 0", "tidak pedas", 15000);
$produk2 = new produk("ayam geprek level 1", "pedas", 15000);
$produk3 = new produk("ayam geprek level 2", "pedas", 15000);
$produk4 = new produk("ayam geprek level 3", "pedas", 15000);
$produk5 = new produk("ayam geprek level 4", "pedas", 15000);
$produk6 = new produk("ayam geprek level 5", "pedas", 15000);
$produk7 = new produk("baso goreng jeletot", "pedas", 15000);
$produk8 = new produk("roti bakar", "manis", 10000);
$produk9 = new produk("pisang bakar", "manis", 17000);
$produk10 = new produk("kopi gula aren", "dingin", 18000);
$produk11 = new produk("minuman soda", "dingin", 10000);
$produk12 = new produk("air mineral", "dingin", 5000);
$produk13 = new produk("air mineral", "tidak dingin", 5000);

echo "--------warung ndut--------";
echo "<br>";
echo "<br>";
echo "^^makanan^^";
echo "<br>";
echo "Nama makanan: " . $produk1->getCetak();
echo "<br>";
echo "Nama makanan: " . $produk2->getCetak();
echo "<br>";
echo "Nama makanan: " . $produk3->getCetak();
echo "<br>";
echo "Nama makanan: " . $produk4->getCetak();
echo "<br>";
echo "Nama makanan: " . $produk5->getCetak();
echo "<br>";
echo "Nama makanan: " . $produk6->getCetak();
echo "<br>";
echo "Nama makanan: " . $produk7->getCetak();
echo "<br>";
echo "Nama makanan: " . $produk8->getCetak();
echo "<br>";
echo "<br>";
echo "^^minuman^^";
echo "<br>";
echo "Nama minuman: " . $produk9->getCetak();
echo "<br>";
echo "Nama minuman: " . $produk10->getCetak();
echo "<br>";
echo "Nama minuman: " . $produk11->getCetak();
echo "<br>";
echo "Nama minuman: " . $produk12->getCetak();
echo "<br>";
echo "Nama minuman: " . $produk13->getCetak();
echo "<br>";

?>