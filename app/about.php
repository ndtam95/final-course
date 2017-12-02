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

        <!-- <?php include "slide-left.php" ?> -->
        <!-- /.col-lg-3 -->
        <div class="col-lg-12">
        <div class="row">
        	<?php include "slide.php" ?> 
        </div>
        <div class="row " style="border:3px solid red;padding:20px;margin: 20px 0;">
	          <h4 style="text-align: center;">
	          	SƠ LƯỢC VỀ CHÚNG TÔI
	          </h4>
          		<p>
          			<b>Marketing Marketing Marketing</b>

					Với sự bùng nổ của kinh tế thị trường, các doanh nghiệp như được chắp thêm đôi cánh, họ hăng hái xây dựng thương hiệu, đa dạng hóa sản phẩm, mở rộng thị trường người tiêu dùng với mục đích duy nhất: thu lợi nhuận. Marketing chính là công cụ hỗ trợ đáp ứng mục đích đó của họ.
          		</p><br>
          		<p style="text-align: center;margin: 0 auto;"><img src="../public/uploads/digima.jpg"></p><br>
          		<p>
          			<b>Digital Marketing – Tiếp Thị Số</b>

					Thật ra, các kênh marketing truyền thống luôn bị hạn chế bởi hai vấn đề:
					– Thứ nhất: đó là hình thức truyền đi thông tin một chiều, không nhận được ý kiến phản hồi từ công chúng (kiểu ‘tự biên tự diễn’ ấy). Vì vậy, mọi người cảm thấy tẻ nhạt nên không buồn chú ý.
					– Thứ hai: sự bùng nổ của Internet – một môi trường tương tác đa chiều; và với tính chất ‘độc thoại’, marketing truyền thống đã vô tình tự đào hố chôn mình.

					Trong khi marketing truyền thống chỉ tập trung vào việc ‘gây ấn tượng’, Digital Marketing lại hướng đến một khía cạnh quan trọng hơn, đem đến trải nghiệm cho người dùng.

					Nếu người dùng có xu hướng sử dụng Internet đại trà, chúng ta sẽ dùng Internet làm phương tiện để tiến hành các hoạt động của marketing. Internet chính là trái tim của Digital Marketing.

					Nhưng Digital Marketing cụ thể là gì? Tính chất và công dụng chi tiết ra sao? Bài viết này sẽ tập trung giải thích vấn đề này thật chi tiết.
          		</p>
          		<p>
          			<b>Muốn Digital Marketing thành công, cần hội đủ 4 yếu tố:</b><br>
					Có được cơ sở dữ liệu khách hàng <br>
					Tạo được sự tương tác <br>
					Có sự tích hợp các công cụ Digital và công cụ truyền trống <br>
					Chương trình phải đo lường được hiệu quả.
          		</p>
          		<p>
          			<b>Công việc Marketing Online</b> <br>

					Điều đầu tiên là bạn phải tạo 1 website trình bày đầy đủ thông tin công ty, sản phẩm, dịch vụ của công ty một cách rõ ràng và chi tiết.Đối với khách hàng thì đây chính là công ty của bạn trên internet. Bạn có thể tạo website với wordpress hoặc Joomla. Website của bạn nên được tối ưu chuẩn seo để thuận tiện cho các chiến dịch seo. Và nếu được liên kết với các site uy tín thì càng tốt <br>


					Bước tiếp theo bạn sẽ quảng cáo trên các mạng xã hội. Mạng xã hội là cầu nối tốt nhất đẻ bạn có thể đưa sản phẩm dịch vụ của bạn tới khác hàng. Và nó cũng là xu hướng hot trong Marketing. <br>


					Tiếp nữa là bạn làm SEO và Adwords:
					Adwords là hình thức mua từ khóa quảng cáo trên search engine. Nội dung quảng cáo của bạn sẽ xuất hiện khi có người gỏ tìm kiếm đúng từ khóa bạn đăng ký. Bạn sẽ trã phí cho nhà cung cấp. <br>

					SEO (search engine optimization) là hình thức tối ưu hóa từ khóa của website cho search engine để được lọt vào top cao trong kết quả tìm kiếm của người sử dụng. Bạn có thể tự SEO hay thuê SEO.
          		</p>

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
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
