<?php
include '../database.php';
$output="";
if (isset($_POST['action'])) {
	$no= 1;
	$query = "SELECT * FROM produk WHERE id_produk IS NOT NULL
	";
    if(isset($_POST["search"]))
	{
		$keyword = $_POST['search'];
		$query .= " AND nama_produk LIKE '%".$keyword."%' OR jenis_produk LIKE '%".$keyword."%' ";
	}
	$connect->multi_query($query);
	if ($result = mysqli_store_result($connect)) {
		while ($row = mysqli_fetch_array($result)) {
			$output .= '
			<tr>
			<td>'.$no++.'</td>
			<td>'.$row['id_produk'].'</td>
			<td>'.$row['nama_produk'].'</td>
			<td>'.$row['jenis_produk'].'</td>
			<td>'.$row['harga_produk'].'</td>
			<td>
				<a href="edit_produk.php?id='.$row['id_produk'].'" class="btn btn-primary">Edit</a>
				<a href="delete_produk.php?id='.$row['id_produk'].'" class="btn btn-danger">Delete</a>
			</td>
			</tr>
			
			';		
		}	
	}
	echo $output;
}
else if (isset($_POST['apaya'])) {
	$no= 1;
	$query = "SELECT * FROM users WHERE id_user IS NOT NULL
	";
    if(isset($_POST["search"]))
	{
		$keyword = $_POST['search'];
		$query .= " AND username LIKE '%".$keyword."%' OR level LIKE '%".$keyword."%' ";
	}
	$connect->multi_query($query);
	if ($result = mysqli_store_result($connect)) {
		while ($row = mysqli_fetch_array($result)) {
			$output .= '
			<tr>
			<td>'.$no++.'</td>
			<td>'.$row['username'].'</td>
			<td>'.$row['level'].'</td>
			<td>
				<a href="edit_user.php?id='.$row['id_user'].'" class="btn btn-primary">Edit</a>
				<a href="delete_user.php?id='.$row['id_user'].'" class="btn btn-danger">Delete</a>
			</td>
			</tr>
			';		
		}	
	}
	echo $output;
}
else if (isset($_POST['okeh'])) {
	$no= 1;
	$query = "SELECT * FROM supplier WHERE id_supplier IS NOT NULL
	";
    if(isset($_POST["search"]))
	{
		$keyword = $_POST['search'];
		$query .= " AND nama LIKE '%".$keyword."%' OR alamat LIKE '%".$keyword."%' ";
	}
	$connect->multi_query($query);
	if ($result = mysqli_store_result($connect)) {
		while ($row = mysqli_fetch_array($result)) {
			$output .= '
			<tr>
			<td>'.$no++.'</td>
			<td>'.$row['id_supplier'].'</td>
			<td>'.$row['nama'].'</td>
			<td>'.$row['alamat'].'</td>
			<td>'.$row['kontak'].'</td>
			<td>
				<a href="edit_supplier.php?id='.$row['id_supplier'].'" class="btn btn-primary">Edit</a>
				<a href="delete_supplier.php?id='.$row['id_supplier'].'" class="btn btn-danger">Delete</a>
			</td>
			</tr>
			';		
		}	
	}
	echo $output;
}

?>