<div id="main_product" style="display: inline-block; width: 100%; text-align: center; padding-bottom: 50px">
	<div class="title">
		<span>Món ăn của chúng tôi</span> 
	</div>
	<div class="product_container">
	<?php 
		include("ket_noi.php");	
		$tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham where trang_chu='co' order by sap_xep_trang_chu desc limit 0,6";
		$tv_1=mysqli_query($conn,$tv);
		while($tv_2=mysqli_fetch_array($tv_1))
		{
				for($i=1;$i<=3;$i++)
				{
					if($tv_2!=false)
					{
						echo "<div class='product'>";
							$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
							$link_chi_tiet="?thamso=product_detail&id=".$tv_2['id'];
							$gia=$tv_2['gia'];
							$_SESSION['trang_chi_tiet_gio_hang']='co';
							$_GET['id']=$tv_2['id'];
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
					if($i!=3)
					{
						$tv_2=mysqli_fetch_array($tv_1);
					}
				}
		}
	?>
	</div>
	<button type="button" class="btn btn-warning" onclick="window.location.href='?thamso=all_product'" style="font-size: 24px; border-radius: 10px; padding: .375rem 1.25rem;">Tất cả món ăn</button>
</div>