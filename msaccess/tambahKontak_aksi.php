<?php
  // koneksi database
  include 'connectionACC.php';

  // mulai session
  session_start();
   
  // menangkap data yang di kirim dari form
  $NamaDepan = $_POST['NamaDepan'];
  $NamaBelakang = $_POST['NamaBelakang'];
  $AlamatEmail = $_POST['AlamatEmail'];
  $Jabatan = $_POST['Jabatan'];
  $Perusahaan = $_POST['Perusahaan'];
  $TeleponKantor = $_POST['TeleponKantor'];
  $TeleponRumah = $_POST['TeleponRumah'];
  $TeleponSeluler = $_POST['TeleponSeluler'];
  $NomorFaks = $_POST['NomorFaks'];
  $Alamat = $_POST['Alamat'];
  $Kota = $_POST['Kota'];
  $NegaraBagian = $_POST['Negara_Bagian_Provinsi'];
  $ZIP = $_POST['ZIP_Kode_Pos'];
  $Negara = $_POST['Negara_Kawasan'];
  $HalamanWeb = $_POST['HalamanWeb'];
  // $Catatan = $_POST['Catatan'];
  // $Lampiran = $_POST['Lampiran'];
  // $Kategori = $_POST['Kategori'];
  
  // Cek apakah kolom Nama Depan, Nama Belakang, dan Alamat Email sudah diisi
  if ($NamaDepan == '' || $NamaBelakang == '' || $AlamatEmail == '' || $Jabatan == '' || $Perusahaan == '' || $TeleponKantor == '' || $TeleponSeluler == '' || $NomorFaks == '' || $Alamat == '' || $Kota == '' || $NegaraBagian == '' || $ZIP == '' || $Negara == '' || $HalamanWeb == '') {
    $_SESSION['alert_message'] = 'Semua kolom harus diisi!';
    header("location:tambahKontak.php");
    // echo "<script>alert('Semua kolom harus diisi');</script>";
  }

  // menginput data ke database
  $sql = "INSERT INTO Kontak (NamaDepan, NamaBelakang, AlamatEmail, Jabatan, Perusahaan, TeleponKantor, TeleponRumah, TeleponSeluler, NomorFaks, Alamat, Kota, Negara_Bagian_Provinsi, ZIP_Kode_Pos, Negara_Kawasan, HalamanWeb) Values('$NamaDepan', '$NamaBelakang', '$AlamatEmail', '$Jabatan', '$Perusahaan', '$TeleponKantor', '$TeleponRumah', '$TeleponSeluler', '$NomorFaks', '$Alamat', '$Kota', '$NegaraBagian', '$ZIP', '$Negara', '$HalamanWeb')";
  $result = $db_conn->query($sql);
  //mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nim','$alamat')");
  
  // simpan pesan alert ke session
  $_SESSION['alert_message'] = 'Kontak berhasil ditambahkan!';

  // redirect ke halaman index.php
  header("location:index.php");
?>