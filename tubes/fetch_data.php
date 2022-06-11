<?php

include 'database.php';

$keyword="";
$output = '';
$page=1;
$limit=1;
if(isset($_POST["action"]))
{
    $query = "SELECT * FROM produk WHERE id_produk IS NOT NULL
	";
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= " AND harga_produk BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'";
	}
    if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= " AND merk_produk IN ('".$brand_filter."')";
	}
    if(isset($_POST["jenis_produk"]))
	{
		$jenis_produk_filter = implode("','", $_POST["jenis_produk"]);
		$query .= " AND jenis_produk IN('".$jenis_produk_filter."')";
	}
	if(isset($_POST["search"]))
	{
		$keyword = $_POST['search'];
		$query .= " AND nama_produk LIKE '%".$keyword."%' OR jenis_produk IN ('%".$keyword."%') ";
	}

	$page = (isset($_POST['page']))? $_POST['page'] : 1;
	$limit = 3; 
	$limit_start = ($page - 1) * $limit;
	$no = $limit_start + 1;

	$query .= " LIMIT ".$limit_start.",".$limit;

    $connect->multi_query($query);

    if ($result = mysqli_store_result($connect)) {
        while ($row = mysqli_fetch_row($result)) {
            $output .= '
			<div class="col-md-4 card">
				<div class="card-body" >
					<img src="image/'. $row[7] .'" alt="" class="img-responsive" width="150px">
					<p style="text-align:center;" class="text-danger" >'. $row[3] .'</p>				
					<p align="center"><strong><a href="#">'. $row[2] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >'. $row[5] .'</h4>				
				</div>
			</div><br><br>
            ';	
        }
    }
    echo $output;

	$query = mysqli_query($connect,"SELECT id_produk FROM produk");
	$total_records = mysqli_num_rows($query); ?><br>
	  <ul class="pagination justify-content-end">
		<?php
		  $jumlah_page = ceil($total_records / $limit);
		  $jumlah_number = 1; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
		  $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
		  $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;                      
	
		  if($page == 1){
			echo '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
			echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
		  } else {
			$link_prev = ($page > 1)? $page - 1 : 1;
			echo '<li class="page-item halaman" id="1"><a class="page-link" href="#">First</a></li>';
			echo '<li class="page-item halaman" id="'.$link_prev.'"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
		  }
	
		  for($i = $start_number; $i <= $end_number; $i++){
			$link_active = ($page == $i)? ' active' : '';
			echo '<li class="page-item halaman '.$link_active.'" id="'.$i.'"><a class="page-link" href="#">'.$i.'</a></li>';
		  }
	
		  if($page == $jumlah_page){
			echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
			echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
		  } else {
			$link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
			echo '<li class="page-item halaman" id="'.$link_next.'"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
			echo '<li class="page-item halaman" id="'.$jumlah_page.'"><a class="page-link" href="#">Last</a></li>';
		  }
		?>
	  </ul>
<?php	
}
