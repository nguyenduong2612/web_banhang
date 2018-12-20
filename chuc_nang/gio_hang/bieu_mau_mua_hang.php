
<form method='post' action='' >
	<input type='hidden' name='thong_tin_khach_hang' value='co' >
	<div class="info-wrapper" style="width: 45%; margin-left: 10%;">
		<div>
			<h3 style="padding: 50px 0 20px;">Thông tin mua hàng</h3>
		</div>

		<div class="input-group input-group-lg">
  			<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-lg">Tên người mua</span>
  			</div>
        <?php 
        if(!isset($_SESSION['login_user'])){
          echo "<input type='text' name='ten_nguoi_mua' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-lg'>";
        } else if(isset($_SESSION['login_user'])) {
          $name = $_SESSION['login_user'];
          echo "<input type='text' name='ten_nguoi_mua' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-lg' value='$name'>";
        }
  			?>
		</div>

    <br>
		<div class="input-group input-group-lg">
  			<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-lg">Email</span>
  			</div>
  			<input type="text" name='email' class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
		</div>
    <br>

		<div class="input-group input-group-lg">
  			<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-lg">Địa chỉ</span>
  			</div>
  			<input type="text" name='dia_chi' class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
		</div>
    <br>

		<div class="input-group input-group-lg">
  			<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-lg">Điện thoại</span>
  			</div>
  			<input type="text" name='dien_thoai' class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
		</div>
    <br>

		<div class="input-group input-group-lg">
  			<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-lg">Nội dung</span>
  			</div>
  			<input type="text" name='noi_dung' class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
		</div>
	  <br>	

		<button type="submit" class="btn btn-warning" style="font-size: 20px">Mua hàng</button>

	 </div>	 
</form>
