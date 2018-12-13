<div class="sidetitle">
	<span>Quảng cáo</span>
</div>
<?php 
	include("ket_noi.php");	
	$tv="select html from quang_cao where vi_tri='trai' ";
	$tv_1=pg_query($conn,$tv);
	$tv_2=pg_fetch_array($tv_1);
	echo $tv_2['html'];
?>