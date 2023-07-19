<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Halo <?php echo ucfirst($email);?>,</h3>
          <h3>Anda telah meminta untuk reset password.</h3> 

          <p>Berikut adalah link untuk reset password Anda :</p>   
          <p><a href="<?=base_url('auth/reset-password?email='.$email.'&token='.urlencode($token))?>" class="btn btn-primary">Reset Password</a></p>
          <p>Catatan : link reset password akan kedaluarsa dalam 24 jam.</p>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
  </html>