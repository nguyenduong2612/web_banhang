<?php 
	include("ket_noi.php");	
	$tv="select * from menu_doc order by id";
	$tv_1=mysqli_query($conn, $tv);
?>	

<div class='menu_doc'>
	<div class="sidetitle"><span>Danh mục</span></div>
	<button class="navbar-toggler" type="button" style="position: absolute; left: 10px; top: 96px;">
    	<span class="fas fa-bars"></span>
  	</button>
	<?php 
		echo "<div class='collapse'>";
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$link="?thamso=caterogy&id=".$tv_2['id'];
			echo "<a href='$link'>";
				echo $tv_2['ten'];
			echo "</a>";
		}
		echo "</div>";
	?>
</div>

<script type="text/javascript">
	$('.navbar-toggler').click(function(){
    	$('.collapse').slideToggle();
	});
</script>