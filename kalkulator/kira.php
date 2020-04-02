<?php 

if(isset($_POST['nombor']))
{
$pertama = $_POST['no_pertama'];
$kedua = $_POST['no_kedua'];
$operasi = $_POST['operasi'];
$hasil = $_POST['hasil'];
  
 switch ($operasi) {
    case 'tambah':
     $hasil = $pertama + $kedua;
    break;
   
   case 'tolak':
    $hasil = $pertama - $kedua;
   break;
   
   case 'darab':
    $hasil = $pertama * $kedua;
   break;
	
   case 'bahagi':
    $hasil = $pertama / $kedua;
   }
}
 ?>
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>KALKULATOR</title>
<script>
    // Function to change webpage background color
    function changeBodyBg(color){
        document.body.style.background = color;
    }
   
</script>
  <link href="style.css" rel="stylesheet" type="text/css">
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #808000;
}

.active {
  background-color:  #ff5286;
}
div {
  background-color: ;
  width: 300px;
  border: 15px grey;
  padding: 50px;
  margin: 20px;
}
</style>
</head>

 <body bgcolor="#99ff99">

 <center>
  <img src="banner1.jpg" width="1367" height="300"  align="bottom">
</center>
<center><div id = "header">

               <marquee><p><b>SELAMAT DATANG KE SISTEM KALKULATOR</b></p></marquee>
        </div></center>
   <ul>
 <li><a href="papar.php">Home page</a></li>
  <li><a class="" href="login.php">Login</a></li>
  <li><a href="kira.php">Kalkulator</a></li>
  <li><a href="logout.html">Log Keluar</a></li>
</ul>

  <center>
 <div class="kalkulator">
  <h3>MARI MENGIRA</h3>
  <form action="" action="" method="post">
    
   <input class="number" type="number" name="no_pertama" placeholder="NO 1"><br>
   <br>
   <input class="number" type="number" name="no_kedua" placeholder=" NO 2"><br>
   <br>
   operasi: <select class="option" name="operasi">
<option value="tambah">+</option>
<option value="tolak">-</option>
<option value="kali">x</option>
<option value="bagi">/</option>
   </select>
   <br><br>
   <input type="submit" name="nombor" class="tombol" value="kira"><br>
   <br>
  </form>


  
  <?php if(isset($_POST['nombor'])){  ?>
  <input type="text" value="<?php echo $hasil; ?>" class="number">
  <?php }else{ ?>
   <input type="text" value="" class="number">
  <?php } ?> 
  <br>

</div></center>
<center>

        <label>What colour do you love? :</label>
        <button type="button" onclick="changeBodyBg('#00ffbf');">Terqoise</button>
        <button type="button" onclick="changeBodyBg('#99ccff');">Light blue</button>
        <button type="button" onclick="changeBodyBg('#9966ff');">Light Purple</button>
         <button type="button" onclick="changeBodyBg('#ff0000');">Red</button>
        <button type="button" onclick="changeBodyBg('#ffcc99');">Pitch</button>
    
<script type="text/javascript"><?php echo $bgimage_session."();"; ?></script>
</center>
 </body>
 </html>