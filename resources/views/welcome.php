<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
</head>
<body>
  <h2>Selamat Datang!</h2>
  <p>Terima kasih atas pengisian formulir.</p>

  <h3>Data yang Anda masukkan:</h3>
  <ul>
    <li>Nama Depan: {{ $fname }}</li>
    <li>Nama Belakang: {{ $lname }}</li>
    <li>Email: {{ $email }}</li>
    <li>Kebangsaan: {{ $nationality }}</li>
    <li>Jenis Kelamin: {{ $gender }}</li>
    <li>Bio: {{ $bio }}</li>
  </ul>
</body>
</html>