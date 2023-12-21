<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Data Pemesanan</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Pemesan</th>
      <th scope="col">Tanggal Keberangkatan</th>
      <th scope="col">Tujuan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($all_data_pemesanan as $pemesanan) : ?>
    <tr>
        <td><?= $pemesanan->nama_pemesan ?></td>
        <td><?= $pemesanan->tanggal_keberangkatan ?></td>
        <td><?= $pemesanan->tujuan ?></td>
        <td><a href="<?= base_url('edit_data_pemesanan') ?>" class="btn btn-info btn-sm">Edit</a></td>
        <td><a href="<?= base_url('delete_data_pemesanan') ?>" class="btn btn-info btn-sm">Delete</a></td>
   </tr>
   <?php endforeach ?>
   </tbody>
   </table>
   <br>
   <a href="<?= base_url('add_data_pemesanan') ?>" class="btn btn-primary">+ Tambah Data Tamu</a></th>
   </div>
</tbody>
</table>
<br>
<a href="<?= base_url('add_data_pemesanan') ?>" class="btn btn-primary">+ Tambah Data Pemesanan </a>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>