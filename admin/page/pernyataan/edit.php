<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <i class="fas fa-clipboard-list"></i> Edit Pernyataan
      </div>
      <?php
      $id = $_GET['id'];
      $sql = $conn->query("SELECT * FROM tb_pernyataan WHERE id_pernyataan = '$id'");
      $data = $sql->fetch_assoc();
      ?>
      <div class="card-body">
        <form action="" method="post" onSubmit="validasi()">
          <input type="hidden" name="id_pernyataan" value="<?= $data['id_pernyataan']; ?>">
          <div class="form-group">
            <label for="pernyataan">Pernyataan :</label>
            <input type="text" class="form-control" name="pernyataan" id="pernyataan" value="<?= $data['pernyataan']; ?>" placeholder="Tulis pernyataan..." required>
          </div>
      </div>
      <div class="card-footer">
        <div class="form-group my-auto">
          <button type="submit" name="edit" class="btn btn-sm btn-primary">Submit</button>
          <a href="?page=pernyataan" class="btn btn-sm btn-secondary">Kembali</a>
        </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Pernyataan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $query = $conn->query("SELECT * FROM tb_pernyataan");
        while ($dataQuery = $query->fetch_assoc()) {
        ?>
          <tr>
            <th width="5%"><?= $no++; ?></th>
            <td><?= $dataQuery['pernyataan']; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<?php
if (isset($_POST['edit'])) {
  $id = $_POST['id_pernyataan'];
  $editPernyataan = mysqli_escape_string($conn, $_POST['pernyataan']);

  $sqlEdit = $conn->query("UPDATE tb_pernyataan SET pernyataan = '$editPernyataan' WHERE id_pernyataan = '$id'");

  if ($sqlEdit) {
?>
    <script>
      alert("Berhasil");
      window.location.href = "?page=pernyataan";
    </script>
<?php
  }
}
?>