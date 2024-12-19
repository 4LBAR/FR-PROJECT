<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Gambar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group textarea {
            resize: vertical;
            height: 100px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
        }

        .button-group button {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button-group .btn-input {
            background-color: #4CAF50;
        }

        .button-group .btn-input:hover {
            background-color: #45a049;
        }

        .button-group .btn-back {
            background-color: #f44336;
        }

        .button-group .btn-back:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Data Gambar</h1>
        <form action="submit.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Upload Gambar</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="date">Tanggal</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi Gambar</label>
                <textarea id="description" name="description" placeholder="Tuliskan deskripsi gambar..." required></textarea>
            </div>
            <div class="form-group">
                <label for="type">Tipe Gambar</label>
                <select id="type" name="type" required>
                    <option value="" disabled selected>Pilih tipe gambar</option>
                    <option value="video">Video</option>
                    <option value="logo">Logo</option>
                    <option value="other">Lainnya</option>
                </select>
            </div>
            <div class="button-group">
                <button type="submit" class="btn-input">Input</button>
                <button type="button" class="btn-back" onclick="window.history.back();">Kembali</button>
            </div>
        </form>
    </div>
</body>
</html>
