
  <!DOCTYPE html>
  <html>
  <head>
   <title>Edit</title>
   <link rel="stylesheet" href="style.css">
   <link rel="icon" type="icon/x-icon" href="hitler.jpg">
  </head>
  <body>
  <center>
          <?php
  include("koneksi.php");
  $query = mysqli_query($db, "SELECT * FROM tb_siswa INNER JOIN tb_jurusan ON tb_siswa.id_jurusan =
  tb_jurusan.id_jurusan INNER JOIN tb_spp ON tb_siswa.id_spp= tb_spp.id_spp");
  ?>
      <tr>
  <form action="proses_edit.php" method="POST">
      <label for="nama">Nama :</label>
      <input type="text" name="nama">
  <br>
  <br>
      <label for="kelas">Kelas  :</label>
      <input type="text" name="kelas">
  <br>
  <br>
      <label for="nama_jurusan">Jurusan :</label>
      <input type="text" name="nama_jurusan">
  <br>
  <br>
      <label for="tahun">Tahun :</label>
      <input text="text" name="tahun">
  <br>
  <br>
      <label for="nominal">Nominal :</label>
      <input type="text" name="nominal">
  <br>
  <br>
  
  <input type="submit" name="submit" value="submit">
  </form>
  </body>
  </html>
  </tr>
  </center>