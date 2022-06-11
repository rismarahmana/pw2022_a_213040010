<?php
require_once 'header.php';
?>
    <div class="container-fluid"><br>
        <a href="create_user.php" class="btn btn-warning"><i class="fa-solid fa-plus"></i> Create User</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Level</th>
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
            var apaya = 'user';
            var search = $('#search').val();
            // var maximum_price = $('#hidden_maximum_price').val();
            $.ajax({
                url:"fetch_data.php",
                method:"POST",
                data:{apaya:apaya, search:search},
                success:function(data){
                    $('.filter_data').html(data);
                }
            });
        }
    });
    </script>
</body>
</html>