<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Toko Wayang</title>
   <style>
    body {
       font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1, h3 {
        color: #007bff;
        text-align: center;
    }

    form {
        max-width: 400px;
        margin: 20px auto;
    }

    label {
        display: block;
        margin: 10px 0 5px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        box-sizing: border-box;
    }

    button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #0056b3;
    }

    hr {
        margin: 40px 0;
        border: 0;
        border-top: 2px solid #007bff;
    }

    .result {
        text-align: center;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Toko Wayang Kami</h1>
        <div>Program aplikasi sederhana untuk menghitung penjualan barang toko wayang kami</div><br>
        <form method="POST">
         <div class="form-group">
           <label>Nama Barang</label>
           <input name="namaBarang" class="form-control">
         </div>
         <div class="form-group">
           <label>Harga Barang</label>
           <input name="hargaBarang" class="form-control" type="number">
         </div>
         <div class="form-group">
           <label>Jumlah Barang</label>
           <input name="jumlahBarang" class="form-control" type="number">
         </div>
         <div class="form-group">
           <label>Diskon Barang</label>
           <input name="diskonBarang" class="form-control" type="number" min="0" max="100" >
         </div>
         <button type="submit" name="hitung" class="btn btn-primary">Hitung</button>
    </form>
    <hr>
    </div>
</body>
</html>

<?php
  if(isset($_POST['hitung'])) { 
      $nama = $_POST['namaBarang'];
      $harga = $_POST['hargaBarang'];      
      $jumlah = $_POST['jumlahBarang'];
      $diskon = $_POST['diskonBarang'];
      $total = $harga * $jumlah;
      $totalDiskon = $diskon/100 * $total;
      $totalAkhir = $total - $totalDiskon;
      
      echo " 
      <div class='container'>  
         <h3>Jumlah yang harus dibayar</h3>
         <div>Nama Barang : $nama</div>
         <div>Harga Barang : $harga</div>
         <div>Jumlah Barang : $jumlah</div>
         <div>Diskon : $diskon%</div>
         <h3>Rp. $totalAkhir</h3>
      </div>
      ";
  }
?>