<div class="sidetitle">
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
<br><br>
<input type="button" class="btn btn-info" onclick="window.location.href='?thamso=gio_hang'" value="Đặt hàng" style="margin: 0 87px; " />

