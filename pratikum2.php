<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Data Orang</title>
</head>
<body>
    <form action="" method="POST">
    Silahkan Masukan Nama : <input type="text" name="nama">
    <input type="submit" name="tombol" value="Submit">
    </form>
<br>
<br>

<?php
if(isset($_POST['nama'])){

$nama = $_POST['nama'];
$user = array(
    array(
        "Nama"              => "Arsene Lupin",
        "NIK"               => "1234",
        "Jenis_kelamin"     => "Male",
        "Tgl_lahir"         => "1902-03-23"
    ),
    array(
        "Nama"              => "Sherlock Holmes",
        "NIK"               => "4321",
        "Jenis_kelamin"     => "Male",
        "Tgl_lahir"         => "1812-01-11"
    ),
    array(
        "Nama"              => "Irene Adler",
        "NIK"               => "7890",
        "Jenis_kelamin"     => "Female",
        "Tgl_lahir"         => "1232-04-13"
    )
);

$i=0;
$a=0;

foreach($user as $u){
if(strtoupper($u["Nama"]) == strtoupper($nama)){
$i=1;
$a=$u;
} 
}

if($a){

echo "<ul>";
echo "<li>Nama              : ".$a["Nama"]."</li>";
echo "<li>NIK               : ".$a["NIK"]."</li>";
echo "<li>Jenis Kelamin     : ".$a["Jenis_kelamin"]."</li>";
echo "<li>Tanggal Lahir     : ".$a["Tgl_lahir"]."</li>";
echo "</ul>";
}
}

?>
<br>


</body>
</html>