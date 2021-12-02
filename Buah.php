<?php
/**
 * 
 */
class Buah
{
  
  var $namabuah1;
  var $namabuah2;
  var $namabuah3;

  private ?int $harga1;
  private ?int $harga2;
  private ?int $harga3;

  public function harga1 ($harga1){
  	$this->harga1 = $harga1;
  }

  public function harga2 ($harga2){
  	$this->harga2 = $harga2;
  }

  public function harga3 ($harga3){
  	$this->harga3 = $harga3;
  }

  public function tampil (){
  	echo '<p style="text-align: center;">'.$this->namabuah1.' '.$this->harga1.'/Kg<br>'.$this->namabuah2.' '.$this->harga2.'/Kg<br>'.$this->namabuah3.' '.$this->harga3.'/Kg</p>';
  }
}
?>