<div class="sidetitle" style="display: block; font-size: 24px; padding: 15px 0;">
	<span>Giỏ hàng</span>
</div>

<?php 
	$so_luong=0;
	if(isset($_SESSION['id_them_vao_gio']))
	{
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
		}
	}
?>

Số lượng món trong giỏ : <?php echo $so_luong; ?>
<br>
<input type="button" class="btn btn-warning" onclick="window.location.href='?thamso=gio_hang'" value="Đặt hàng" style="margin: 15px 0; " />

