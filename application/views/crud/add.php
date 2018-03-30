<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data</title>
</head>
<body>
	<h2>Input Data</h2>
    <form action="<?php echo base_url(); ?>index.php/crud/action_add" method="post">
        <input type="text" name="nama" placeholder"Masukkan nama"> <br>
        <input type="text" name="status" placeholder"Masukkan status"> <br>
        <input type="text" name="jurusan" placeholder"Masukkan jurusan"> <br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>