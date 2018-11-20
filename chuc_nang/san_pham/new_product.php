<div class="sidetitle">
	<span>Sản phẩm mới</span>
</div>

<center>
	<?php 
		include("ket_noi.php");	
		$tv="select id,ten,hinh_anh from san_pham order by id desc limit 0,3";
		$tv_1=mysqli_query($conn,$tv);
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
			$link_chi_tiet="?thamso=product_detail&id=".$tv_2['id'];
			echo "<a href='$link_chi_tiet' >";
				echo "<img src='$link_anh' width='100px' >";
			echo "</a>";
			echo "<span class='product_name'>" . $tv_2['ten'] . "</span>";
		}
	?>
</center>
