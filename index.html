<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Gym</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h2>Form Pendaftaran Gym</h2>

    <?php
    $host = "localhost"; // Ganti dengan host MySQL Anda
    $username = "root"; // Ganti dengan username MySQL Anda
    $password = ""; // Ganti dengan password MySQL Anda
    $database = "formulir_pendaftaran"; // Ganti dengan nama database yang telah Anda buat

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $umur = $_POST['umur'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $noTelp = $_POST['noTelp'];
        $password = $_POST['password'];

        // Hash password sebelum menyimpan ke database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data ke dalam database
        $sql = "INSERT INTO pendaftar (nama, alamat, umur, jenis_kelamin, no_telp, password) VALUES ('$nama', '$alamat', $umur, '$jenisKelamin', '$noTelp', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            // Tampilkan popup pendaftaran berhasil
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    var popup = document.getElementById('successPopup');
                    popup.style.display = 'block';
                });
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Tampilkan popup pendaftaran berhasil
        echo "<div id='successPopup' class='popup'>";
        echo "<h3>Pendaftaran Berhasil!</h3>";
        echo "<p>Terima kasih, $nama, telah mendaftar.</p>";
        echo "<button onclick='closePopup()'>Tutup</button>";
        echo "</div>";
    }
    ?>

    <div class="container">
        <div class="box form-box">
            <form id="registrationForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>

                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>

                <label for="umur">Umur:</label>
                <input type="number" id="umur" name="umur" required>

                <label for="jenisKelamin">Jenis Kelamin:</label>
                <select id="jenisKelamin" name="jenisKelamin" required>
                    <option value="laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>

                <label for="noTelp">No Telepon:</label>
                <input type="tel" id="noTelp" name="noTelp" required>

                <!-- Letakkan input password dan checkbox dalam container -->
                <div class="password-container">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <input type="checkbox" class="show-password" id="showPassword"> <!-- Hapus event onclick di sini -->
                    <label for="showPassword">Lihat Password</label>
                </div>

                <button type="submit">Daftar</button>

                <!-- Tombol untuk menuju ke halaman login.php -->
                <a href="login.php">
                    <button type="button">Login</button>
                </a>
            </form>

            <!-- Pop-up element -->
            <div id='successPopup' class='popup'>
                <h3>Pendaftaran Berhasil!</h3>
                <p>Terima kasih, <?php echo isset($nama) ? $nama : ''; ?>, telah mendaftar.</p>
                <button onclick='closePopup()'>Tutup</button>
            </div>

            <!-- Script PHP -->
            <script>
                function closePopup() {
                    var popup = document.getElementById('successPopup');
                    popup.style.display = 'none';
                }

                // Fungsi untuk menampilkan/menyembunyikan password
                document.getElementById('showPassword').addEventListener('input', function() {
                    var passwordField = document.getElementById('password');
                    var checkbox = document.getElementById('showPassword');
                    passwordField.type = checkbox.checked ? 'text' : 'password';
                });
            </script>
        </div>
    </div>
</body>

</html>
