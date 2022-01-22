<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <i class="fas fa-clipboard-list"></i> Tambah Pernyataan
      </div>
      <div class="card-body">
        <form action="page/pernyataan/proses.php" method="post" onSubmit="validasi()">
          <div class="form-group">
            <label for="pernyataan">Pernyataan :</label>
            <input type="text" class="form-control" name="pernyataan" id="pernyataan" placeholder="Tulis pernyataan..." required>
          </div>
      </div>
      <div class="card-footer">
        <div class="form-group my-auto">
          <button type="submit" name="add" class="btn btn-sm btn-primary">Submit</button>
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