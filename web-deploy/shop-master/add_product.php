<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="cssAddproduct.css">
</head>
<body>
	<form method="POST" enctype="multipart/form-data" >
		<div class="login-box">
		  <h2>Add Product</h2>
		  <form>
		    <div class="user-box">
		      <input type="text" name="product_id" required="">
		      <label>ID</label>
		    </div>
		    <div class="user-box">
		      <input type="text" name="product_name" required="">
		      <label>Name</label>
		    </div>
		    <div class="user-box">
		      <input type="text" name="product_price" required="">
		      <label>Price</label>
		    </div>
		    <div class="">
		      <input type="file" name="product_image" required="" style="color: white;">
		      <label style="color: white;">Image</label>
		    </div>
		    <br>
		    <a href="#">
		      <span></span>
		      <span></span>
		      <span></span>
		      <span></span>
		      <input type="submit" name="add_product" value="Add">
		    </a>
		  </form>
		</div>
	</form>
</body>
</html>

<?php
			$connect = mysqli_connect('3.128.54.48','batpromax_db','batpromax_user','web_deploypro');
			if (isset($_POST['add_product'])) {
			$product_id =$_POST['product_id'];
			$product_name =$_POST['product_name'];
			$product_price =$_POST['product_price'];
			//lấy ảnh từ thư mục bất kỳ của máy tính
			$product_image =$_FILES['product_image']['name'];
			//di chuyển ảnh từ thư mục bất kỳ sang thư mục tmp_name của htdocs
			$product_image_tmp =$_FILES['product_image']['tmp_name'];
			//đưa ảnh từ thư mục tmp sang thư mục cần lưu
			move_uploaded_file($product_image_tmp, "images/$product_image");
			$sql = "INSERT INTO product VALUES('$product_id','$product_name','$product_price','$product_image')";
			$result = mysqli_query($connect, $sql);
			if($result){
				echo "<script>alert('Thêm bài sản phẩm thành công') </script>";
				echo "<script> window.location.href = 'index.php' </script>";
				}
			else{
				echo "<script>alert('Add new error') </script";
			}

			}
		?>	


