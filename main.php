<?php
date_default_timezone_set("asia/jakarta");
class siswa{
  var $nama;
  var $nis;
  var $rom; 
  var $ray;
  function __construct($na="ilham",$ni="11907192",$rom="RPL XI-1",$ray="TAJ 2"){
    $this->nama=$na;
    $this->nis=$ni;
    $this->rom=$rom;
    $this->ray=$ray;
  }
}
class ketAbsen extends siswa{
  var $dt,$jam,$menit,$ket;
  function ketWaktu(){
    $this->dt=date("d-M-Y H:i:s");
    $this->jam=date("H");
    $this->menit=("i");
  }
  function ketAbs(){
    if ($this->jam>=12){
      echo"\nabsen sudah ditutup(jam 12)";
      exit();
    }
    else if($this->jam<=6 && $this->menit<=50){
      $this->ket="tepat waktu";
    }
    else{
      $this->ket="terlambat";
    }
  }
  function cetakAbs(){
  printf("Nama\t|%sNis \t|%sRombel\t|%sRayon\t|%swaktu\t|%s\nket \t|%s", $this->nama,$this->nis,$this->rom,$this->ray,$this->dt,$this->ket);
}
}
$nama;$nis;$rombel;$rayon;
$waktu = new ketAbsen();
$waktu->ketWaktu();
echo $waktu->dt;
$waktu->ketAbs();
echo "\nmasukan nama : ";
$nama = fgets(STDIN);
echo "masukan nis : ";
$nis= fgets(STDIN);
echo "masukan Rayon : ";
$rayon= fgets(STDIN);
echo "masukan rombel : ";
$rombel= fgets(STDIN);
echo  "\033[0;0H\033[2J";
$siswa1=new ketAbsen($nama,$nis,$rombel,$rayon);
$siswa1->ketWaktu();
$siswa1->ketAbs(); 
$siswa1->cetakAbs();
?>
