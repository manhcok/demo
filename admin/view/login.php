		<div class="login" style="margin:0px auto">
			<h1>Đăng nhập thông tin</h1>
				<hr >
				<form method="POST">
					<fieldset class="form-group">
						<label for="exampleInputEmail1">User name</label>
						<input type="text" name="txtname" class="form-control" style="border-radius: 10px;" placeholder="Tên đăng nhập">
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" name ="pass"style="border-radius: 10px;" class="form-control" >
					</fieldset>
					<button type="submit" name="submit" class="btn " style="font-weight: bold;">Đăng nhập</button>
				</form>
				<?php 
					if(isset($_POST['submit']))
					{
						$name = $_POST["txtname"];
						$pass = $_POST["pass"];
						$rows = mysqli_query($conn,"SELECT*FROM admin WHERE tendangnhap='$name' AND MatKhau='$pass'");
						$arr = mysqli_fetch_array($rows);
						$count = mysqli_num_rows($rows);
						if($count==1)
						{
							$_SESSION['img'] = $arr['img'];
							$_SESSION['name'] = $name;
							echo "<script>alert('đăng nhập thành công');</script>";
							header('location:index.php?page=home');
						}
						else
						{
							echo "<script>alert('đăng nhập mật khẩu sai');</script>";
						}
					}
				 ?>
		</div>
