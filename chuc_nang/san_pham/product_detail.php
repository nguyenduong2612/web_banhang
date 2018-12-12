<?php 
	include("ket_noi.php");	
	$_SESSION['trang_chi_tiet_gio_hang']="co";
	$id=$_GET['id'];
	$tv="select * from san_pham where id='$id'";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$menu = $tv_2['thuoc_menu'];
	$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
	$link_chi_tiet="?thamso=caterogy&id=".$tv_2['thuoc_menu'];
	$query_name = mysqli_query($conn,"select * from menu_doc where id='$menu';");
	$get_name = mysqli_fetch_array($query_name);
?>
<div class="name_detail noti">
	<a href="<?php echo $link_chi_tiet ?>"> <?php echo $get_name['ten']; ?> </a> 
	<span> > </span>
	<span><?php echo $tv_2['ten']; ?></span>
</div>

<div style="width: 80%; margin: auto;">
	<div class="product">
		<?php echo "<img src='$link_anh' style='float: left;'> "?>
	</div>
	<span class="product_name" style="padding-top: 0; font-size: 35px;"><?php echo $tv_2['ten']; ?></span>
	<span class="price" style="padding-bottom:25px; font-size: 25px;">
		<?php
			$gia=$tv_2['gia'];
			$gia=number_format($gia,0,",",".");
			echo $gia;
		?>
	</span>
	<form>
		<input type='hidden' name='thamso' value='gio_hang' >
		<?php echo "<input type='hidden' name='id' value='".$_GET['id']."' >" ?>
		<input type='text'  class='form-control' name='so_luong' value='1' style='width:60px; display: inline-block;' >
		<button type='submit' class='btn btn-warning' class='submit_button' style='margin-bottom: 3px; margin-left: 25px;'>Thêm vào giỏ</button>
	</form>
	<span class="description" style="font-size: 18px;">
			<?php echo $tv_2['noi_dung']; ?>
	</span>

</div>
