<?php
  // koneksi database
  include 'connectionACC.php';

  // memulai session
  session_start();

  // menangkap data yang di kirim dari form
  $id = $_GET['id'];

  // update data ke database
  $sql = "DELETE FROM Kontak WHERE ID = $id";
  $result = $db_conn->query($sql);

  // set pesan alert
  $_SESSION['alert_message'] = "Kontak berhasil dihapus";

  // mengalihkan halaman kembali ke index.php
  header("location:index.php");

?>