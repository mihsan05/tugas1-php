<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Ujian</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 100vh;
    }

    /* Identitas header */
    .header-info {
      background-color: #4CAF50;
      color: white;
      padding: 15px 25px;
      border-radius: 8px 8px 0 0;
      text-align: center;
      width: 300px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .header-info h3 {
      margin: 5px 0;
      font-size: 16px;
      font-weight: normal;
    }

    /* Container form */
    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 0 0 8px 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }

    h2 {
      color: #333;
      margin-bottom: 20px;
    }

    label {
      display: block;
      text-align: left;
      font-size: 14px;
      color: #555;
      margin-bottom: 8px;
    }

    input[type="text"],
    input[type="email"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 14px;
      box-sizing: border-box;
    }

    input[type="text"]:hover,
    input[type="email"]:hover,
    input[type="number"]:hover {
      border-color: #4CAF50;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      width: 100%;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <!-- Header Identitas -->
  <div class="header-info">
    <h3>Ilham Maulana</h3>
    <h3>Tanggal: <?php echo date('d-m-Y'); ?></h3>
    <h3>Tugas 1 PHP - NFA</h3>
  </div>

  <!-- Form Input Data -->
  <form action="process.php" method="POST">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="nilai">Nilai Ujian:</label>
    <input type="number" id="nilai" name="nilai" required>

    <button type="submit">Kirim</button>
  </form>

</body>
</html>
