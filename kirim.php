<?php
if ($_POST['kirim']) {
  $admin = 'hytecth@hybridtech.my.id'; //ganti email dg email admin (email penerima pesan)

  $nama  = htmlentities($_POST['nama']);
  $email  = htmlentities($_POST['email']);
  $judul  = htmlentities($_POST['judul']);
  $pesan  = htmlentities($_POST['pesan']);

  $headers =  'MIME-Version: 1.0' . "\r\n";
  $headers .= 'From: ' . $nama . ' <' . $email . '>' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  // $pengirim  = 'Dari: ' . $nama . ' <' . $email . '>';

  if (mail($admin, $judul, $pesan, $headers)) {
    echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.php">Kembali</a>';
  } else {
    echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.php">Kembali</a>';
  }
} else {
  header("Location: tes.php");
}
