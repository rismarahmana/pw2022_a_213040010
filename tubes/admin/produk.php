<?php
require_once 'header.php';
?>
    <div class="container-fluid"><br>
        <a href="create_produk.php" class="btn btn-warning"><i class="fa-solid fa-plus"></i> Create Product</a>
        <a href="report.php" class="btn btn-success"><i class="fa-solid fa-plus"></i> Make Report</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jenis Produk</th>
                    <th scope="col">Harga Produk</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="filter_data">

            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function(){

        filter_data();

        // load_data();

        $('#search').keyup(function(){
            var search = $("#search").val();
            filter_data(search);
        });
        function filter_data(search)
        {
            var action = 'search';
            var search = $('#search').val();
            // var maximum_price = $('#hidden_maximum_price').val();
            $.ajax({
                url:"fetch_data.php",
                method:"POST",
                data:{action:action, search:search},
                success:function(data){
                    $('.filter_data').html(data);
                }
            });
        }
    });
    </script>
</body>
</html>