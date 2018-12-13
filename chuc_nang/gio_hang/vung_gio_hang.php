<div class="sidetitle" style="display: block; font-size: 24px; padding: 15px 0;">
	<span><b>Giỏ hàng</b></span>
	<div class='title_in_cart' style='width: 72.5%;'>Tên</div>
	<div class='title_in_cart' style='width: 25%;'>Số lượng</div>

<?php 
	$so_luong=0;
	if(isset($_SESSION['id_them_vao_gio']))
	{
		echo "<script>$('.title_in_cart').show();</script>";
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
			$tv="select id,ten,gia from san_pham where id='".$_SESSION['id_them_vao_gio'][$i]."'";
			$tv_1=pg_query($conn,$tv);
			$tv_2=pg_fetch_array($tv_1);

			if($_SESSION['sl_them_vao_gio'][$i]!=0)
			{
			echo "<div style='color: #000;'>";
				echo "<div class='product_in_cart' style='width: 75%;'>".$tv_2['ten']."</div>";
				echo "<div class='product_in_cart' style='width: 25%;'>".$_SESSION['sl_them_vao_gio'][$i]."</div>";
			echo "</div>";
			}
		}
	}
	if ($so_luong==0){
		echo "<script>$('.title_in_cart').hide();</script>";
		echo "<span style='display: block; font-size: 18px; padding-top: 15px;'>Giỏ hàng của bạn đang trống</span>";
	}
?>

</div>
<!-- Số lượng món trong giỏ : <?php echo $so_luong; ?> -->
<input type="button" class="btn btn-warning" onclick="window.location.href='?thamso=gio_hang'" value="Đặt hàng" style="margin: 15px 0; " />

