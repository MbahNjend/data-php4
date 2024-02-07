<?php
  $page = $_SERVER['PHP_SELF'];
  $sec = "10";
  header("Refresh: $sec; url=$page");
  echo "<br>";
?>

<?php
$nama = array (
    "Ezi",
    "Majid",
    "Alvin",
    "Nanda",
    "Rosyid",
    "Celis",
    "Denall",
    "Denis",
    "Bima",
    "Hafidz",
    "Vito",
    "Ian",
    "Jauza",
    "Keyza",
    "Lazuardi",
    "Mesa",
    "Torvald",
    "Dzaky",
    "Galih",
    "Syafiq",
    "Dirga",
    "Hisyam",
    "Vania",
    "Rafa",
    "Rafael",
    "Reza",
    "Ronald",
    "Gantari",
);

$jurusan = array ("RPL","TKJ","ANIMASI","DKV","AKUNTANSI","BROCASTING");

echo $nama [1] . "<br>";
echo $nama [9] . "<br>";
echo $nama [6] . "<br>";
echo $nama [2] . "<br>";
echo $nama [0] . "<br>";
echo "<hr>";


for($i=0; $i < count($jurusan); $i++){
    echo $jurusan[$i]."<hr>";
}
?>

<?php
$Hewan = array ("Kucing","Sapi","Kelinci","Ayam","Kambing");
$i = 0;
while($i < count($Hewan)){
    echo $Hewan [$i]."<hr>";
    $i++;
}
?>

<?php
$food = array ("Mie","Nasi","Tempe","Ayam","Sawi");

foreach($food as $isi){
    echo $isi."<hr>";
}