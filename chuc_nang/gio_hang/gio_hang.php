<?php 
	include("ket_noi.php");	
	if(isset($_GET['id']) and $_SESSION['trang_chi_tiet_gio_hang']=="co")
	{
		$_SESSION['trang_chi_tiet_gio_hang']="huy_bo";
		if(isset($_SESSION['id_them_vao_gio']))
		{
			$so=count($_SESSION['id_them_vao_gio']);
			$trung_lap="khong";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				if($_SESSION['id_them_vao_gio'][$i]==$_GET['id'])
				{
					$trung_lap="co";
					$vi_tri_trung_lap=$i;
					break;
				}
			}
			if($trung_lap=="khong")
			{
				$_SESSION['id_them_vao_gio'][$so]=$_GET['id'];
				$_SESSION['sl_them_vao_gio'][$so]=$_GET['so_luong'];
			}
			if($trung_lap=="co")
			{
				$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]=$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]+$_GET['so_luong'];
			}
		}
		else
		{
			$_SESSION['id_them_vao_gio'][0]=$_GET['id'];
			$_SESSION['sl_them_vao_gio'][0]=$_GET['so_luong'];
		}
	}

	$gio_hang="khong";
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$so_luong=0;
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
		}
		if($so_luong!=0)
		{
			$gio_hang="co";
		}
	}
	
	echo "<div class='title'><span>Giỏ hàng</span></div>";
	if($gio_hang=="khong")
	{
		echo "<span class='noti'>Không có món ăn trong giỏ hàng</span>";
	}
	else 
	{
		echo "<form action='' method='post' >"; 
		echo "<input type='hidden' name='cap_nhat_gio_hang' value='co' > ";
		echo "<table class='table' style='width: 80%;margin: 0 10%; font-size: 20px;'>";
			echo "<thead class='thead-light'>";
				echo "<th width='200px' >Tên</td>";
				echo "<th width='150px' >Số lượng</td>";
				echo "<th width='150px' >Đơn giá</td>";
				echo "<th width='170px' >Thành tiền</td>";
			echo "</thead>";
			$tong_cong=0;
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
			
				$tv="select id,ten,gia from san_pham where id='".$_SESSION['id_them_vao_gio'][$i]."'";
				$tv_1=mysqli_query($conn,$tv);
				$tv_2=mysqli_fetch_array($tv_1);
				
				$tien=$tv_2['gia']*$_SESSION['sl_them_vao_gio'][$i];
				$tong_cong=$tong_cong+$tien;
				$name_id="id_".$i;
				$name_sl="sl_".$i;
				if($_SESSION['sl_them_vao_gio'][$i]!=0)
				{
				echo "<tr style='color: #fff;'>";
					echo "<td>".$tv_2['ten']."</td>";
					echo "<td>";
					echo "<input type='hidden' name='".$name_id."' value='".$_SESSION['id_them_vao_gio'][$i]."' >";
					echo "<input type='text' class='form-control' style='width:70px; height: 35px;' name='".$name_sl."' value='". $_SESSION['sl_them_vao_gio'][$i]."' > ";
					echo "</td>";
					echo "<td>".$tv_2['gia']."</td>";
					echo "<td>".$tien."</td>";
				echo "</tr>";
				}
			}	
			echo "<tr>";
				echo "<td>&nbsp;</td>";
				echo "<td><input type='submit' class='btn btn-warning' value='Cập nhật' > </td>";
				echo "<td>&nbsp;</td>";
				echo "<td>&nbsp;</td>";
			echo "</tr>";	
		echo "</table>";
		echo "</form>";
		echo "<span class='noti'>Tổng giá trị đơn hàng là : <b style='color: #ffc107;'>".$tong_cong."</b> VNĐ</span>";
		include("chuc_nang/gio_hang/bieu_mau_mua_hang.php");
	}
	
?>