<?php 
include 'database.php'; 
$batas = 3;
	$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
	$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

	$previous = $halaman - 1;
	$next = $halaman + 1;
	
	$data = mysqli_query($connect,"select * from produk");
	$jumlah_data = mysqli_num_rows($data);
	$total_halaman = ceil($jumlah_data / $batas);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <style>
        nav{
            font-family: Apercu,Gill Sans MT,Gill Sans,Arial,sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            background-color: black;            
        }
        nav a, .navbar-nav a{
            color: white;        
        }
        nav a:hover, .navbar-nav a:hover{
            color: white;        
        }
        .text_banner{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">RIFPHONE STORE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php">Home</a>
                <a class="nav-item nav-link" href="#"></span></a>
                <input type="text" placeholder="Search..." id="search" name="search">
            </div>            
        </div>
    </nav> <br>
    <div class="container-fluid">        
        <div class="text-left">HAI SOBAT RIFPHONE, <br><br>
            
            Yuk, bandingkan dan dapatkan harga Handphone terbaru dan sesuai dengan budget kamu lho. Simak penjelasan selengkapnya ya!<br><br>
            <img src="image/banner.jpg" alt="" width="1350px">
        </div>
        <div class="container col-md-9">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group"><br>
                        <h5 class="text_banner">Price</h5>
                        <input type="hidden" id="hidden_minimum_price" value="0" />
                        <input type="hidden" id="hidden_maximum_price" value="20000000" />
                        <p id="price_show">1000 - 20000000</p>
                        <div id="price_range"></div>
                    </div>				
                    <div class="list-group"><br>
                        <h5 class="text_banner">Brand</h5>
                        <div style="overflow-y: auto; overflow-x: hidden;">
                        <?php
                        $query = mysqli_query($connect, "SELECT DISTINCT(merk_produk) FROM produk ORDER BY id_produk DESC");
                        while($row = mysqli_fetch_array($query)){                
                        ?>
                        <div class="list-group-item checkbox">
                            <label><input type="checkbox" class="common_selector brand" value="<?= $row['merk_produk'] ?>"> <?= $row['merk_produk'] ?></label>
                        </div>
                        <?php
                        }

                        ?>
                        </div>
                    </div>

                    <div class="list-group"><br>
                        <h5 class="text_banner">Jenis Produk</h5>
                        <?php
                        $query = mysqli_query($connect, "SELECT DISTINCT(jenis_produk) FROM produk ORDER BY id_produk DESC");
                        while($row = mysqli_fetch_array($query)){                
                        ?>
                        <div class="list-group-item checkbox">
                            <label><input type="checkbox" class="common_selector jenis_produk" value="<?= $row['jenis_produk'] ?>" > <?= $row['jenis_produk'] ?></label>
                        </div>
                        <?php    
                        }

                        ?>
                    </div>
                </div>
                <div class="col-md-9"><br>
                    <div class="container">
                        <div class="row filter_data">
                
                        </div><br>
                        <div class="pagination"><br><br>

                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function(){

        load_data();
        filter_data();
        
        function filter_data(search)
        {
            $('.filter_data').html('<div id="loading" style="" ></div>');
            var action = 'fetch_data';
            var minimum_price = $('#hidden_minimum_price').val();
            var maximum_price = $('#hidden_maximum_price').val();
            var search = $('#search').val();
            var brand = get_filter('brand');
            var jenis_produk = get_filter('jenis_produk');
            $.ajax({
                url:"fetch_data.php",
                method:"POST",
                data:{action:action, search:search, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, jenis_produk:jenis_produk},
                success:function(data){
                    $('.filter_data').html(data);
                }
            });
        }        

        function load_data(page){
            // alert(page)
            var action="pagination";
            $.ajax({
                url:"fetch_data.php",
                method:"POST",
                data:{action:action, page:page},
                success:function(data){
                    $('.filter_data').html(data);
                }
            })
        }
        
        $(document).on('click', '.halaman', function(){
            var page = $(this).attr("id");
            // alert(page)
            load_data(page);
        });                

        $('#search').keyup(function(){
            var search = $("#search").val();
            filter_data(search);
        });

        function get_filter(class_name)
        {
            var filter = [];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            });
            return filter;
        }

        $('.common_selector').click(function(){
            filter_data();
        });

        $('#price_range').slider({
            range:true,
            min:1000,
            max:20000000,
            values:[1000, 20000000],
            step:500,
            stop:function(event, ui)
            {
                $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                $('#hidden_minimum_price').val(ui.values[0]);
                $('#hidden_maximum_price').val(ui.values[1]);
                filter_data();
            }
        });

    });
    </script>
</body>
</html>