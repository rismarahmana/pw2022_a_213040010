<?php
require_once 'header.php';
?>
    <div class="container-fluid"><br>
        <a href="create_supplier.php" class="btn btn-warning"><i class="fa-solid fa-plus"></i> Create Supplier</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Supplier</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kontak</th>
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
            var okeh = 'search';
            var search = $('#search').val();
            // var maximum_price = $('#hidden_maximum_price').val();
            $.ajax({
                url:"fetch_data.php",
                method:"POST",
                data:{okeh:okeh, search:search},
                success:function(data){
                    $('.filter_data').html(data);
                }
            });
        }
    });
    </script>
</body>
</html>