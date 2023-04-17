<!DOCTYPE html>
<html>

<head>
  <title>Kontak Bisnis</title>
</head>
<link rel="stylesheet" href="assets/style.css">

<body>

  <h2>Kontak Bisnis - MS Access</h2>
  <br />
  <a class="btn" href="index.php">KEMBALI</a>
  <br /><br />

  <?php
  // mulai session
  session_start();

  // cek apakah ada pesan alert
  if (isset($_SESSION['alert_message'])) {
    // tampilkan pesan alert
    echo '<script>alert("' . $_SESSION['alert_message'] . '");</script>';

    // hapus pesan alert dari session
    unset($_SESSION['alert_message']);
  }

  ?>

  <h3>Tambah Data Kontak Bisnis</h3>
  <form method="post" action="tambahKontak_aksi.php">
    <table>
      <tr>
        <td>Nama Depan</td>
        <td><input type="text" name="NamaDepan" value="<?php if (isset($_SESSION['NamaDepan'])) echo $_SESSION['NamaDepan']; ?>"></td>
      </tr>
      <tr>
        <td>Nama Belakang</td>
        <td><input type="text" name="NamaBelakang" value="<?php if (isset($_SESSION['NamaBelakang'])) echo $_SESSION['NamaBelakang']; ?>"></td>
      </tr>
      <tr>
        <td>Alamat Email</td>
        <td><input type="text" name="AlamatEmail" value="<?php if (isset($_SESSION['AlamatEmail'])) echo $_SESSION['AlamatEmail']; ?>"></td>
      </tr>
      <tr>
        <td>Jabatan</td>
        <td><input type="text" name="Jabatan" value="<?php if (isset($_SESSION['Jabatan'])) echo $_SESSION['Jabatan']; ?>"></td>
      </tr>
      <tr>
        <td>Perusahaan</td>
        <td><input type="text" name="Perusahaan" value="<?php if (isset($_SESSION['Perusahaan'])) echo $_SESSION['Perusahaan']; ?>"></td>
      </tr>
      <tr>
        <td>Telepon Kantor</td>
        <td><input type="text" name="TeleponKantor" value="<?php if (isset($_SESSION['TeleponKantor'])) echo $_SESSION['TeleponKantor']; ?>"></td>
      </tr>
      <tr>
        <td>Telepon Rumah</td>
        <td><input type="text" name="TeleponRumah" value="<?php if (isset($_SESSION['TeleponRumah'])) echo $_SESSION['TeleponRumah']; ?>"></td>
      </tr>
      <tr>
        <td>Telepon Seluler</td>
        <td><input type="text" name="TeleponSeluler" value="<?php if (isset($_SESSION['TeleponSeluler'])) echo $_SESSION['TeleponSeluler']; ?>"></td>
      </tr>
      <tr>
        <td>Nomor Faks</td>
        <td><input type="text" name="NomorFaks" value="<?php if (isset($_SESSION['NomorFaks'])) echo $_SESSION['NomorFaks']; ?>"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="Alamat" value="<?php if (isset($_SESSION['Alamat'])) echo $_SESSION['Alamat']; ?>"></td>
      </tr>
      <tr>
        <td>Kota</td>
        <td><input type="text" name="Kota" value="<?php if (isset($_SESSION['Kota'])) echo $_SESSION['Kota']; ?>"></td>
      </tr>
      <tr>
        <td>Negara Bagian/Provinsi</td>
        <td><input type="text" name="Negara_Bagian_Provinsi" value="<?php if (isset($_SESSION['Negara_Bagian_Provinsi'])) echo $_SESSION['Negara_Bagian_Provinsi']; ?>"></td>
      </tr>
      <tr>
        <td>ZIP/Kode Pos</td>
        <td><input type="text" name="ZIP_Kode_Pos" value="<?php if (isset($_SESSION['ZIP_Kode_Pos'])) echo $_SESSION['ZIP_Kode_Pos']; ?>"></td>
      </tr>
      <tr>
        <td>Negara/Kawasan</td>
        <td><input type="text" name="Negara_Kawasan" value="<?php if (isset($_SESSION['Negara_Kawasan'])) echo $_SESSION['Negara_Kawasan']; ?>"></td>
      </tr>
      <tr>
        <td>Halaman Web</td>
        <td><input type="text" name="HalamanWeb" value="<?php if (isset($_SESSION['HalamanWeb'])) echo $_SESSION['HalamanWeb']; ?>"></td>
      </tr>
      <tr>
        <!-- <td>Catatan</td>
        <td><input type="text" name="Catatan" value="<?php if (isset($_SESSION['Catatan'])) echo $_SESSION['Catatan']; ?>"></td>
      </tr>
      <tr>
        <td>Lampiran</td>
        <td><input type="text" name="Lampiran" value="<?php if (isset($_SESSION['Lampiran'])) echo $_SESSION['Lampiran']; ?>"></td>
      </tr> -->
      <tr>
        <td></td>
        <td><input type="submit" value="Tambah"></td>
      </tr>
    </table>
  </form>

</body>

</html>