<?php
//koneksi ke DB & pilih DB
$conn = mysqli_connect('localhost', 'root', '', '');
//query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
//ubah data ke dalam array
while ($row = mysqli_fetch_assoc($result)) {
}
//tampung ke variabel mahasiswa
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <tr>
      <td>1</td>
      <td><img src="img/picture1.jpg" width="60"></td>
      <td>20108035</td>
      <td>novridayanti</td>
      <td>novridayanti.nd@gmail.com</td>
      <td>Sistem Informasi</td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
      </td>
    </tr>
  </table>
</body>

</html>