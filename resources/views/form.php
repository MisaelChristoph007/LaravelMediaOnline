<!-- resources/views/form.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Data Pengguna</title>
</head>
<body>

<h2>Formulir Data Pengguna</h2>
<form method="post" action="welcome">

    <label for="first_name">Nama Depan:</label><br>
    <input type="text" id="first_name" name="first_name"><br><br>

    <label for="last_name">Nama Belakang:</label><br>
    <input type="text" id="last_name" name="last_name"><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br><br>

    <label for="gender">Jenis Kelamin:</label><br>
    <select id="gender" name="gender">
        <option value="male">Laki-laki</option>
        <option value="female">Perempuan</option>
    </select><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>