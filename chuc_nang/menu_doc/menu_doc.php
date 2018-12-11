<?php 
	include("ket_noi.php");	
	$tv="select * from menu_doc order by id";
	$tv_1=mysqli_query($conn, $tv);
?>	

<div class='menu_doc'>
	<?php 
		echo "<div>";
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$link="?thamso=caterogy&id=".$tv_2['id'];
			echo "<a style='margin: 5px 0;' href='$link'>";
				echo $tv_2['ten'];
			echo "</a>";
		}
		echo "</div>";
	?>
</div>