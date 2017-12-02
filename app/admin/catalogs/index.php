<?php require_once "../../../db/mysql.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Danh sach nguoi dung</title>
   <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
</head> 
<body>
  <?php include "../../menucon.php" ?>
  <div class="container">

    <br><br><br>
    <script src="../../../public/js/jquery.min.js"></script>
<script src="../../../public/js/bootstrap.min.js"></script>
<script src="../../../public/js/bootstrap.bundle.min.js"></script>
  <h2 class="bg-warning" style="text-align: center;color: red;padding:5px 0;">Danh sách người dùng</h2>
  <div class="row">
    <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $sql = "select * from catalogs";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['description']; ?></td>
          <!-- <td><?php switch ($row['role']) {
            case 0:
              echo "Admin";
              break;
            case 1:
              echo "Editor";
              break;
            case 2:
              echo "User";
              break;
          }; ?>            
          </td> -->

          <td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
          <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
        </tr>
    <?php  }
    }
     ?>       
    </tbody>
  </table>
  </div>
</div>
</body>
</html>