<!DOCTYPE html>
<html>
<head>
<title>Kontak Bisnis</title>
</head>
<link rel="stylesheet" href="assets/style.css">

<body>
  <h2>Kontak Bisnis - MS Acces</h2>
  <br/>
  <a class="btn" href="index.php">KEMBALI</a>
  <br/>
  <br/>
  <h3>Detail Kontak Bisnis</h3>
  <?php
    include 'connectionACC.php';
  
    // mulai session
    session_start();

    // cek apakah ada pesan alert
    if (isset($_SESSION['alert_message'])) {
      // tampilkan pesan alert
      echo '<script>alert("'.$_SESSION['alert_message'].'");</script>';
    
      // hapus pesan alert dari session
      unset($_SESSION['alert_message']);
    }

    $id = $_GET['id'];
    $sql = "SELECT ID, NamaDepan, NamaBelakang, AlamatEmail, Jabatan, Perusahaan, TeleponKantor, TeleponRumah, TeleponSeluler, NomorFaks, Alamat, Kota, Negara_Bagian_Provinsi, ZIP_Kode_Pos, Negara_Kawasan, HalamanWeb, Catatan, Lampiran FROM Kontak WHERE ID = $id";
    $result = $db_conn->query($sql);
    while($row = $result->fetch()){
  ?>
    <form method="post" action="update.php">
      <table>
        <tr>
        <td>Nama Depan</td>
        <td>
          <input type="hidden" name="ID" value="<?php
            echo $row[0]; ?>"><?php echo $row[1]; ?>
        </td>
        </tr>
        <tr>
          <td>Nama Belakang</td>
          <td><?php echo $row[2]; ?></td>
        </tr>
        <tr>
          <td>Alamat Email</td>
          <td><?php echo $row[3]; ?></td>
        </tr>
        <tr>
          <td>Jabatan</td>
          <td><?php echo $row[4]; ?></td>
        </tr>
        <tr>
          <td>Perusahaan</td>
          <td><?php echo $row[5]; ?></td>
        </tr>
        <tr>
          <td>Telepon Kantor</td>
          <td><?php echo $row[6]; ?></td>
        </tr>
        <tr>
          <td>Telepon Rumah</td>
          <td><?php echo $row[7]; ?></td>
        </tr>
        <tr>
          <td>Telepon Seluler</td>
          <td><?php echo $row[8]; ?></td>
        </tr>
        <tr>
          <td>Nomor Faks</td>
          <td><?php echo $row[9]; ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><?php echo $row[10]; ?></td>
        </tr>
        <tr>
          <td>Kota</td>
          <td><?php echo $row[11]; ?></td>
        </tr>
        <tr>
          <td>Negara Bagian/Provinsi</td>
          <td><?php echo $row[12]; ?></td>
        </tr>
        <tr>
          <td>ZIP/Kode Pos</td>
          <td><?php echo $row[13]; ?></td>
        </tr>
        <tr>
          <td>Negara/Kawasan</td>
          <td><?php echo $row[14]; ?></td>
        </tr>
        <tr>
          <td>Halaman Web</td>
          <td><?php echo $row[15]; ?></td>
        </tr>
        <tr>
          <!-- <td>Catatan</td>
          <td><?php echo $row[16]; ?></td>
        </tr>
        <tr>
          <td>Lampiran</td>
          <td><?php echo $row[17]; ?></td>
        </tr>
        <tr>
          <td>Kategori</td>
          <td><?php echo $row[18]; ?></td>
        </tr> -->
      </table>
    </form>
  <?php
  }
  // cek apakah ada pesan error
  if (isset($_SESSION['error_message'])) {
    // tampilkan pesan error
    echo '<script>alert("'.$_SESSION['error_message'].'");</script>';
  
    // hapus pesan error dari session
    unset($_SESSION['error_message']);
  }
  ?>
  </body>
</html>