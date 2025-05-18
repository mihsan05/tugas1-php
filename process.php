<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Ujian</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .result-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            transition: all 0.3s ease;
        }

        /* Efek hover untuk result-container */
        .result-container:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .result-container h3 {
            font-size: 24px;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .result-container p {
            font-size: 18px;
            color: #555;
            margin: 10px 0;
        }

        /* Styling untuk lulus */
        .passed {
            color: #27ae60;
            font-weight: bold;
        }

        /* Styling untuk remedial */
        .remedial {
            color: #e74c3c;
            font-weight: bold;
        }

        /* Styling nama dan nilai */
        .result-info {
            margin: 20px 0;
            font-size: 16px;
            color: #7f8c8d;
        }

        .result-info p {
            margin-bottom: 8px;
        }

        /* Tombol kembali */
        .btn-back {
            background-color: #3498db;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        /* Efek hover pada tombol */
        .btn-back:hover {
            background-color: #2980b9;
        }

        /* Responsif */
        @media (max-width: 480px) {
            .result-container {
                width: 90%;
                padding: 20px;
            }

            .result-container h3 {
                font-size: 20px;
            }

            .result-container p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

<?php
// Mengambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$nilai = $_POST['nilai'];

// Struktur kendali untuk menentukan kelulusan
if ($nilai > 70) {
    $status = "Lulus";
    $class_status = "passed"; // Menambahkan class untuk lulus
} else {
    $status = "Remedial";
    $class_status = "remedial"; // Menambahkan class untuk remedial
}
?>

<!-- Menampilkan hasil ujian -->
<div class="result-container">
    <h3>Hasil Ujian</h3>
    <p class="<?php echo $class_status; ?>">Status: <?php echo $status; ?></p>
    <div class="result-info">
        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Nilai Ujian:</strong> <?php echo $nilai; ?></p>
    </div>
    <button class="btn-back" onclick="window.location.href='form-data.php'">Kembali</button>
</div>

</body>
</html>
