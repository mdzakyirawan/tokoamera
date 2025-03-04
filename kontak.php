<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="content">
        <h1>Hubungi Kami</h1>
        <form action="#" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin">
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
            </select>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="telepon">Telepon:</label>
            <input type="text" id="telepon" name="telepon">

            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" rows="4"></textarea>

            <input type="submit" value="Kirim">
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>