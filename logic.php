
<?php
$hostname = "localhost"; 
$username = "root";      
$password = "";          
$db = "joki"; 

$conn = new mysqli($hostname, $username, $password, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_POST['simpan'])) {   
    $nama = $_POST['nama'];
    $rank = $_POST['current-rank'];
    $bintang = $_POST['current-stars'];
    $rtujuan = $_POST['desired-rank'];
    $btujuan = $_POST['desired-stars'];
    $kontak = $_POST['contact'];

    $sql = "INSERT INTO buyer (nama, `rank`, bintang, rtujuan, btujuan, kontak) 
    VALUES ('$nama', '$rank', '$bintang', '$rtujuan', '$btujuan', '$kontak')";


if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data berhasil disimpan!'); window.location.href='index.html';</script>";
} else {
    echo "<script>alert('Gagal menyimpan data!'); window.location.href='index.html';</script>";
}
}

$conn->close();
?>

