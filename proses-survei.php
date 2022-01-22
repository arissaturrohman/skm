<link href="asset/css/sweetalert.min.css" rel="stylesheet">
<link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
<?php
include("inc/config.php");

if (isset($_POST['kirim'])) {

  $nama = mysqli_escape_string($conn, $_POST['nama']);
  $pendidikan = mysqli_escape_string($conn, $_POST['pendidikan']);
  $pekerjaan = mysqli_escape_string($conn, $_POST['pekerjaan']);
  $usia = mysqli_escape_string($conn, $_POST['usia']);
  $jk = mysqli_escape_string($conn, $_POST['jk']);
  $nilai = $_POST['nilai'];
  $saran = mysqli_escape_string($conn, $_POST['saran']);
  $kritik = mysqli_escape_string($conn, $_POST['kritik']);
  $kelebihan = mysqli_escape_string($conn, $_POST['kelebihan']);
  $created_at = date("Y");

  // insert data responden ke database
  $insertResponden = $conn->query("INSERT INTO tb_responden (nama, pendidikan, pekerjaan, usia, jk, created_at) VALUES ('$nama', '$pendidikan', '$pekerjaan', '$usia', '$jk', '$created_at')");

  // looping data responden untuk mendapatkan ID
  $responden = $conn->query("SELECT * FROM tb_responden");
  while ($dataResponden = $responden->fetch_assoc()) {
    $id_responden = $dataResponden['id_responden'];
  }

  // looping data pernyataan untuk mendapatkan ID
  $pernyataan = $conn->query("SELECT * FROM tb_pernyataan");
  while ($dataPernyataan = $pernyataan->fetch_assoc()) {
    $id_pernyataan = $dataPernyataan['id_pernyataan'];
    $nilaiJawaban = [
      'n1' => $nilai[1],
      'n2' => $nilai[2],
      'n3' => $nilai[3],
      'n4' => $nilai[4],
      'n5' => $nilai[5],
      'n6' => $nilai[6],
      'n7' => $nilai[7],
      'n8' => $nilai[8],
      'n9' => $nilai[9]
    ];
  }

  // insert data survei ke database
  $insertNilai = $conn->query("INSERT INTO tb_survei (id_responden, n1, n2, n3, n4, n5, n6, n7, n8, n9, created_at) VALUES ('$id_responden','$nilaiJawaban[n1]', '$nilaiJawaban[n2]', '$nilaiJawaban[n3]', '$nilaiJawaban[n4]', '$nilaiJawaban[n5]','$nilaiJawaban[n6]','$nilaiJawaban[n7]','$nilaiJawaban[n8]','$nilaiJawaban[n9]', '$created_at')");

  // insert data kritik dan saran ke database
  $insertKiritkSaran = $conn->query("INSERT INTO tb_kritik_saran (id_responden, kritik, saran, kelebihan, created_at) VALUES ('$id_responden', '$kritik', '$saran', '$kelebihan', '$created_at')");

  if ($insertNilai && $insertNilai && $insertKiritkSaran) {

?>
    <script>
      setTimeout(function() {
        swal({
          title: 'Terima kasih ! ',
          text: 'Telah meluangkan waktu untuk melengkapi survey yang kami sediakan, Pendapat Anda sangat berarti bagi kami untuk meningkatkan pelayanan.',
          type: 'success',
          timer: 4000,
          showConfirmButton: false
        });
      }, 10);
      window.setTimeout(function() {
        window.location.href = './';
      }, 4000);
    </script>
<?php
  }
}
?>
<script src="asset/js/sweetalert.min.js"></script>