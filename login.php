<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   
<h2>Form Login Gym</h2>

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
    $nama = $_POST['nama']; // Ubah dari noTelp ke nama
    $password = $_POST['password'];

    // Periksa keberadaan nama dan password dalam database
    $result = $conn->query("SELECT * FROM pendaftar WHERE nama = '$nama'");
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    var loginPopup = document.getElementById('loginPopup');
                    loginPopup.style.display = 'block';
                });
            </script>";
        } else {
            echo "Password salah.";
        }
    } else {
        echo "Nama tidak terdaftar.";
    }
}
?>

<div class="container">
    <div class="box form-box">
        <form id="loginForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="nama">Nama:</label> <!-- Ubah dari noTelp ke nama -->
            <input type="text" id="nama" name="nama" required> <!-- Ubah dari noTelp ke nama -->

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>

        <!-- Pop-up element -->
        <div id="loginPopup" class="popup">
            <h3>Login Berhasil!</h3>
            <p>Selamat datang, <?php echo isset($user['nama']) ? $user['nama'] : ''; ?>.</p>
            <p>Umur <?php echo isset($user['umur']) ? $user['umur'] : ''; ?> tahun</p>
            <p>Alamat <?php echo isset($user['alamat']) ? $user['alamat'] : ''; ?> </p>
            <p>Jenis Kelamin <?php echo isset($user['jenis_kelamin']) ? $user['jenis_kelamin'] : ''; ?></p>
            <button onclick="closeLoginPopup()">Tutup</button>
        </div>
    </div>
</div>  

<!-- Script PHP -->
<script>
    function closeLoginPopup() {
        var loginPopup = document.getElementById('loginPopup');
        loginPopup.style.display = 'none';
    }
</script>
</body>
</html>
