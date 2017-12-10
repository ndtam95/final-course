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

        <!-- <?php include "slide-left.php" ?> -->
        <!-- /.col-lg-3 -->
        <div class="col-lg-12">
        <?php include "slide.php" ?> 
          
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->      

      </div>
      <!-- /.row -->
      <div class="row">
      	<div class="col-md-9 col-xs-9 pull-left">
				<form  class="formlh">
		        	<p>
		            <label style="font-weight: bold">Tên của bạn</label><br>
		           	<input type="text" required="true" id="name" size="40" placeholder="Tên của bạn (required)" class="inputlh">
		           	<br>
		        	</p>
		        	<p>
		            <label style="font-weight: bold">Email của bạn</label> <br>
		            <input type="email" required="true" id="email"  size="40" placeholder="Email của bạn (required)" class="inputlh">
		            <br>
		        	</p>
		        	<p>
		            <label style="font-weight: bold">Địa chỉ của bạn</label><br>
		            <input type="text" id="address"  size="40" placeholder="Địa chỉ của bạn" class="inputlh">
		            <br>
		        	</p>
		        	<p>
		            <label style="font-weight: bold">Điện thoại của bạn</label> <br>
		            <input type="text" id="phone" size="40" placeholder="Điện thoại của bạn" class="inputlh" >
		            <br>
		        	</p>
		        	<p>
		            <label style="font-weight: bold">Nội dung liên hệ</label> <br>
		            <textarea rows="7"></textarea>
		            <br>
		        	</p>
		        	<p>
		            <input type="text" id="captcha" value="" size="10" placeholder="Mã captcha"> <br>	
		            <img src="https://freetuts.net/captcha/contact?rand=0.66509062905235660.82328452479292370.1687047475073462"><br>
		            <input  type="submit" value="Gửi liên hệ" id="send_message">
		        	</p>
		        	<input type="hidden" id="contact_type" value="contact">
    			</form>
			</div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

