<!DOCTYPE html>
<html>

<head>
  <title>Kontak Bisnis</title>
</head>
<link rel="stylesheet" href="assets/style.css">

<body>

  <!-- Tampilan dari Microsoft Access -->
  <div id="access">
    <h2>Kontak Bisnis - MS Access</h2>
    <br />
    <a class="btn btn-kontak" href="tambahKontak.php">Tambah Kontak</a>
    <br />
    <table border='1'>
      <tr>
        <th>No </th>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>Alamat Email</th>
        <th>Aksi</th>
      </tr>
      <?php
      include 'connectionACC.php';

      // mulai session
      session_start();

      // cek apakah ada pesan alert
      if (isset($_SESSION['alert_message'])) {
        // tampilkan pesan alert
        echo '<script>alert("' . $_SESSION['alert_message'] . '");</script>';

        // hapus pesan alert dari session
        unset($_SESSION['alert_message']);
      }

      // $update = "UPDATE Kontak SET NamaDepan = 'Panji' WHERE ID = 4";
      // $hasil = $db_conn->query($update);
      $no = 1;
      $sql = "SELECT ID, NamaBelakang, NamaDepan, AlamatEmail FROM Kontak WHERE ID >= 90";
      $resultACC = $db_conn->query($sql);
      while ($rowACC = $resultACC->fetch()) {
      ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $rowACC[2] ?></td>
          <td><?php echo $rowACC[1] ?></td>
          <td><?php echo $rowACC[3] ?></td>
          <td>
            <a class="btn" href="lihatKontak.php?id=<?php echo $rowACC[0] ?>">Lihat</a>
            <a class="btn btn-warning" href="editKontak.php?id=<?php echo $rowACC[0] ?>">Edit</a>
            <a class="btn btn-danger" href="deleteKontak.php?id=<?php echo $rowACC[0] ?>">Hapus</a>
          </td>
        </tr>
      <?php
      }
      echo "</table>";
      ?>
  </div>
</body>

</html>