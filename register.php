<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>

  <div class="container">
    <div class="row text-center ">
      <div class="col-md-12">
        <h2>Register Akun</h2>
        <br />
        <br />
      </div>
    </div>
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>Masukan Data Diri Kamu</strong>
        </div>
        <div class="panel-body">
          <form role="form" method="POST" action="prosesregister.php">
            <div class="input-group form-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" name="nama" class="form-control" placeholder="masukkan nama kamu">
            </div>
            <div class="input-group form-group">
              <span class="input-group-addon"><i class="fa fa-tag"></i></span>
              <input type="text" name="username" class="form-control" placeholder="masukkan username">
            </div>
            <div class="input-group form-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="text" name="pass" class="form-control" placeholder="masukkan password">
            </div>
            <tr>
              <td>
                <button type="submit" action="index.php" class="btn btn-primary">Register Now</button>
              </td>
              <td>
                <a href=" index.php" class="btn btn-primary">Back to Login</a>
              </td>
            </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>