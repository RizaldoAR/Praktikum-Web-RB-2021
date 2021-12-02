<?php
require_once("Buah.php");

$buah = new Buah();

$buah->namabuah1 = "Mangga";
$buah->namabuah2 = "Jambu";
$buah->namabuah3 = "Salak";

$buah->harga1(15000);
$buah->harga2(13000);
$buah->harga3(10000);

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:500');
      *{
        font-family: 'Montserrat', sans-serif;
        font-weight: 'bold'
      }
  * {
    box-sizing: border-box;
  }

.container{
    padding: 20px; 
}

  .content{
    margin-top: 5%;
    margin-bottom: 10%;
    background-color: white;
    margin-left: 20%;
    width: 60%;
    padding: 1%;
    border-radius: 5px; 
  }

  .column {
    float: left;
    padding-right: 10px;
    padding-left: 10px;
  }

  .column.side {
    width: 40%;
  }

  .column.middle {
    width: 20%;
  }

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  @media screen and (max-width: 600px) {
    .column.side, .column.middle {
      width: 100%;
    }
  }
  </style>

</head>
<body style="background-color: #cec3c8;">
    <div class="container">
        <h1 style="text-align: center; font-weight: bold;">TOKO BUAH</h1>

        <div class="content">
            <h3 style="text-align: center;">Jual Buah</h3>
            <?= $buah->tampil();?>
            <br>
            <form>
                <div class="row">
                  <div class="column side">
                    <label for="mangga">Mangga</label><br><br>
                    <label for="jambu">jambu</label><br><br>
                    <label for="salak">Salak</label><br><br>
                  </div>
                  <div class="column middle">
                    <input type="number" name="mangga" id="mangga" onkeyup="getTotal()"><br><br>
                    <input type="number" name="jambu" id="jambu" onkeyup="getTotal()"><br><br>
                    <input type="number" name="salak" id="salak" onkeyup="getTotal()"><br><br>
                  </div>
                </div>
                <p id="tampilTotal" style="padding-left: 10px;"></p>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        function getTotal(){
          var x = document.getElementById('mangga').value * 15000;
          var y = document.getElementById('jambu').value * 13000;
          var z = document.getElementById('salak').value * 10000;

          var result = 0;

          result = x + y + z;
            
          document.getElementById('tampilTotal').innerHTML='Harga total belanjaanmu adalah Rp.'+result;
        }
    </script>
</body>
</html>
