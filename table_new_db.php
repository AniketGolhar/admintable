<?php
include 'server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- data table cdn -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>
<body>
    <header class="bg-success" style="height: 350px;">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand">
                <img src="https://www.pngitem.com/pimgs/m/195-1951323_your-logo-here-png-company-logo-your-logo.png" alt="logo" width="200px" class="d-inline-block align-text-top">
              </a>
            </div>
        </nav>
        <!-- navbar -->
        <center>
            <br><br><br>
            <h1>Save Planet</h1>
            <h1 class="text-light">Save Plant, Save Earth...</h1>
        </center>
    </header>
    <!-- header complete -->
    <br>
    <!-- table section -->
    <div class="container">
        <br>
        <table class="table table-striped table-bordered" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nick Name</th>
                    <th scope="col">Mobile No</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM new_db";
                $run = mysqli_query($conn, $sql);
                ?>
                <?php
                while ($row = mysqli_fetch_assoc($run)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $row['id'];?></th>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nick Name</th>
                    <th scope="col">Mobile No</th>
                </tr>
            </tfoot>
        </table>
        <br>
    </div>

<!-- bootstap script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- data table cdn -->
<script src="https:////cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<!-- scripts -->
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

</body>
</html>