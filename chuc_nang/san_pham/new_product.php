<div id="new_product" style="display: inline-block; width: 100%;">
	<div class="title">
		<span>Món ăn mới</span>
	</div>
	<div class="product_container">
		<?php 
			include("ket_noi.php");	
			$tv="select id,ten,hinh_anh,gia from san_pham order by id desc limit 0,6";
			$tv_1=mysqli_query($conn,$tv);
			while($tv_2=mysqli_fetch_array($tv_1))
			{
				echo "<div class='product'>";
					$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
					$link_chi_tiet="?thamso=product_detail&id=".$tv_2['id'];
					$gia=$tv_2['gia'];
					$gia=number_format($gia,0,",",".");
					echo "<a href='$link_chi_tiet' >";
						echo "<img src='$link_anh'>";
					echo "</a>";
					echo "<a class='product_name' href='$link_chi_tiet' >";
						echo $tv_2['ten'];
					echo "</a>";
					echo "<span class='price'>";						
					echo $gia;
					echo "</span>";	
				echo "</div>";	
			}
		?>

	</div>
</div>
