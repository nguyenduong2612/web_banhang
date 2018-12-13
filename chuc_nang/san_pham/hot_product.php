<div id="hot_product" style="display: inline-block; width: 100%;">
	<div class="title">
		<span>Món ăn nổi bật</span>
	</div>
	<div class="product_container">
		<?php 
			include("ket_noi.php");	
			$tv="select id,ten,hinh_anh,gia from san_pham where noi_bat='co' order by id desc limit 6 offset 0";
			$tv_1=pg_query($conn,$tv);
			while($tv_2=pg_fetch_array($tv_1))
			{
				echo "<div class='product'>";
					$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
					$link_chi_tiet="?thamso=product_detail&id=".$tv_2['id'];
					$gia=$tv_2['gia'];
					$_GET['id']=$tv_2['id'];
					$_SESSION['trang_chi_tiet_gio_hang']='co';
					$gia=number_format($gia,0,",",".");
					echo "<a href='$link_chi_tiet' >";
						echo "<img src='$link_anh'>";
					echo "</a>";
					echo "<a class='product_name' href='$link_chi_tiet' >";
						echo $tv_2['ten'];
					echo "</a>";
					echo "<span class='price'>";						
					echo $gia;
					echo "</span>";?>
						<form style="margin: 20px;">
							<input type='hidden' name='thamso' value='gio_hang' >
							<?php echo "<input type='hidden' name='id' value='".$_GET['id']."' >" ?>
							<input type='hidden' class='form-control' name='so_luong' value='1'>
							<button type='submit' class='btn btn-warning' class='submit_button' style='margin-bottom: 3px;'>Thêm vào giỏ</button>
						</form>
				<?php
				echo "</div>";
			}
		?>

	</div>
</div>