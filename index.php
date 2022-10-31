<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    //mencampurkan html dan php
    echo "<h1>Sistem Aplikasi WEB</h1>"; ?>
    Halo Semuanya!

    <?php
//komentar 
    /* ini adalah komentar */
//variabel pada php
    $nama = "Mukhamad Jainur Kholis"; 
    echo "<br> Perkenalkan nama saya ".$nama."<br>" ;?>

    <?php
//Tipe data string
    $prodi = "Teknik Informatika";
    echo "Prodi : $prodi "; ?>

    <?php
//Tiper data integer atau float
    $nim = 212552018253895 ;
    echo "<br>NIM : $nim ";?>

    <?php
//Operator matematik
    $num = 27 ;
    $num2 = 12 ;
    $num3 = 23 ;
    echo "<br>#Perkenalan PHP";
    echo "<br> Berikut adalah hasil penerapan operator matematik di php : <br> (27 x 3) : 12 = ".$num*3/$num2; 
    echo "<br> Nilai min (27,12,23) = ".min($num,$num2,$num3);?>

    <?php 
//Metode String 
    $text = "<br>Belajar PHP itu menyenangkan ^^";
    echo str_replace("menyenangkan","mudah !", $text);
    echo str_repeat(str_replace("Belajar","Semangat!!! Belajar", $text),3);
?>

    <h1> Materi Pertemuan 5 - 7 Array PHP</h1>
    <?php 
//perkenalan array
echo '<h2>Perkenalan Array</h2>';
    $nama = array('Ahzul', 'Latifah', 'Kholis','Andrean');
    $kelompok = ['Beruang', 'Singa', 'Harimau','Macan'];
echo 'Nama : ';
    print_r($nama);
echo "<br>Kelompok : ";
    print_r($kelompok);
echo '<br>';
    echo $nama[2];
    echo " || ".$kelompok[2]."<br>";?> 

    <?php 
//Metode Array : array_unique, array_reverse, shuffle, count, sort
echo '<h2>Metode Array</h2>';
echo "<h3>Sort :</h3>";
    sort($nama);
    print_r($nama);
echo "<h3>Count :</h3>";
    count($kelompok);
    print_r($kelompok);
echo "<h3>Shuffle :</h3>";
    shuffle($nama);
    print_r($nama);
echo "<h3>Reverse :</h3>";
    array_reverse($nama);
    print_r($nama);
echo "<h3>Unique :</h3>";
    array_unique($nama);
    print_r($nama);
echo '<br>======================<br>'
?>

  <?php 
//Associative array
// key => isi
echo '<h2>Associative Array</h2>';
$data = array( "nama" => "Kholis",
             "Umur" => "21",
             "Kerja" => "Pengacara");
$data2 = array( "alamat" => "jl untung sudiro",
             "hobi" => "Mendaki");
print_r($data);
$data['nama'] = "Jainur";
echo "<br>Nama saya ".$data["nama"]."<br>";
echo "<h3>array_values</h3>";
print_r(array_values($data));
echo "<h3>array_keys</h3>";
print_r(array_keys($data));
echo "<h3>array_merge</h3>";
print_r(array_merge($data,$data2));
echo "<br>======================<br>";
?>

    <?php 
//Mutli dimensi array
echo '<h2>Multi Dimensi Array</h2>';
$bio = array(
  array("programmer","21","mlwn malas"),
  array("designer","24","harus rajin"),
  array("manager","34","rajin banget")
);
// 00 01 02
// 10 11 12
// 20 21 22
print_r($bio);
$bio[2][0] = "project manager";
echo "<br>".$bio[2][0];
?>

    <?php
echo "<h2>Super Global Array</h2>";
echo "Variabel super global di PHP adalah variabel bawaan yang bersifat global. Variabel bawaan yang dimaksud adalah: variabel yang sudah otomatis ada tanpa perlu kita definisikan sendiri. Dan ia bersifat global dalam artian bisa kita akses dari mana pun dan kapan pun.";
echo "<h3>Server : </h3> \$_SERVER : ";
echo $_SERVER['SERVER_NAME'];
?>

    <?php 
// Loop PHP
// for(variabelawal(mulai); batas(syarat); perubahan)
echo '<h2>Loop PHP (Perulangan di PHP)</h2>';
for($i = 0; $i<5; $i++){
  echo "------------";
  echo "SEMANGAT";
  echo "------------<br>";
}
?>
    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>