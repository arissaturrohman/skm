<?php
$id = $_GET['id'];
$delete = $conn->query("DELETE FROM tb_pernyataan WHERE id_pernyataan = '$id'");
?>

<script type="text/javascript">
  window.location.href = "?page=pernyataan";
</script>