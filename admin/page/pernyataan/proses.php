<?php
error_reporting(0);
if (isset($_POST['add'])) {

  include('../../../inc/config.php');

  $pernyataan = mysqli_escape_string($conn, $_POST['pernyataan']);

  $insertPernyataan = $conn->query("INSERT INTO tb_pernyataan (pernyataan) VALUES ('$pernyataan')");

  if ($insertPernyataan) {
?>
    <script>
      alert("Berhasil");
      window.location.href = "../../?page=pernyataan&action=add";
    </script>
  <?php
  }
}

?>