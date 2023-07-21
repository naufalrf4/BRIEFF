<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Verifikasi Email</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
    }

    .btn {
      display: inline-block;
      font-weight: bold;
      color: #fff;
      background-color: #007bff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    h3 {
      color: #007bff;
    }

    p {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Halo <?php echo ucfirst($nama); ?>,</h3>
        <h3>Terima kasih telah mendaftar BRIEFF 6.0.</h3>

        <p>Berikut adalah link verifikasi email Anda:</p>
        <p><a href="<?=base_url('auth/verify?email='.$email.'&token='.urlencode($token))?>" class="btn btn-primary">Aktivasi Sekarang</a></p>
        <p>Catatan: link aktivasi akan kedaluarsa dalam 24 jam.</p><br>
        <p>Terima kasih,</p>
        <p>Tim BRIEFF 6.0</p>

        <hr>
        <p>Jika Anda tidak mendaftar BRIEFF 6.0, abaikan email ini.</p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
