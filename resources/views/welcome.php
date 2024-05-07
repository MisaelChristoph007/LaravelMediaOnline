<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
</head>
<body>

<h2>Selamat Datang</h2>
<p>Terima kasih atas pengisian formulir.</p>

<h3>Data yang Anda masukkan:</h3>
<ul>
    <li>Nama Depan: {{ $first_name }}</li>
    <li>Nama Belakang: {{ $last_name }}</li>
    <li>Email: {{ $email }}</li>
    <li>Jenis Kelamin: {{ $gender }}</li>
</ul>

</body>
</html>