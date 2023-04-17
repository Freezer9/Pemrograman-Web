<?php
    // koneksi database
    include 'connectionACC.php';

    // mulai session
    session_start();
      
    // menangkap data yang di kirim dari form
    $ID = $_POST['ID'];
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
    
    // cek apakah semua form telah diisi
    if (empty($NamaDepan) || empty($NamaBelakang) || empty($AlamatEmail)) {
        // simpan pesan error ke session
        $_SESSION['alert_message'] = 'Semua kolom harus diisi!';
        
        // kembali ke halaman edit
        header("location:editKontak.php?id=$ID");
        exit();
    }

    // update data ke database
    $sql = "UPDATE Kontak Set NamaDepan='$NamaDepan', NamaBelakang='$NamaBelakang' , AlamatEmail='$AlamatEmail', Jabatan='$Jabatan', Perusahaan='$Perusahaan', TeleponKantor='$TeleponKantor', TeleponRumah='$TeleponRumah', TeleponSeluler='$TeleponSeluler', NomorFaks='$NomorFaks', Alamat='$Alamat', Kota='$Kota', Negara_Bagian_Provinsi='$NegaraBagian', ZIP_Kode_Pos='$ZIP', Negara_Kawasan='$Negara', HalamanWeb='$HalamanWeb' WHERE ID=$ID";
    $result = $db_conn->query($sql);
    
    // simpan pesan alert ke session
    $_SESSION['alert_message'] = 'Kontak berhasil diupdate!';

    header("location:index.php");
    exit();
