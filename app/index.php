<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost:81/php/final-course/public/uploads/"); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "lib.php"; ?>
  </head>
  <body>

    <!-- Navigation -->
    <?php include "menu.php" ?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div class="row">

        <?php include "slide-left.php" ?>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">
          <?php include "slide.php" ?>
          <div class="row">
            <?php
                $sql = "select * from products";
                $result = $conn->query($sql);
                if($result->num_rows > 0)
                {
                  while($row = $result->fetch_assoc()) {?>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="single.php?products_id=<?php echo $row["id"];?>"><img class="card-img-top" src="<?php echo URL_IMAGE.$row['image'];?>" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                          <a href="single.php?products_id=<?php echo $row["id"];?>">
                            <span style="display:block;text-overflow: ellipsis;width: 200px;overflow: hidden; white-space: nowrap;">
                              <?php echo $row["name"];?>
                            </span></a>
                        </h4>
                        <h5><?php echo $row["price"]?> VNĐ</h5>                        
                        <p class="card-text"><?php echo $row["description"];?>.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
                  </div>
                  <?php  }
                }

              ?>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    

  </body>

</html>
<?php unset($_SESSION["flash"]); ?>