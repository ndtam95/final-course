<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tao moi user</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  </head>
  <body>
  <div class="wrapper">
    <div class="row">
      <?php include "../../menucon.php" ?>
    </div>
    <script src="../../../public/js/jquery.min.js"></script>
<script src="../../../public/js/bootstrap.min.js"></script>
<script src="../../../public/js/bootstrap.bundle.min.js"></script>
    <form method="post" action="create.php">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div class="row">
        <h3>Tạo mới người dùng</h3>
      </div>
      <div class="row">
        <label>Tên người dùng:</label>
        <input class="form-control" type="text" name="name">
      </div>
      <div class="row">
        <label>Mô tả</label>
        <textarea class="form-control"  name="description"></textarea>
      </div>
      
      <br>
      <div class="row">
        <button class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  </body>
</html>
<?php unset($_SESSION["flash"]); ?>