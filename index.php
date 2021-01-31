<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "mobilephones";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles-2.css" rel="stylesheet" type="text/css" media="all" />
    <title>DB Practice</title>
</head>

<body>
    <?php
    $connection = mysqli_connect($server, $username, $password, $databaseName);
    if($connection)
        {
            echo ('<div class="alert alert-success">Connected Successfully!</div>');
        }
        else
        {
            echo ('<div class="alert alert-danger">Failed to Connect</div>');
        }
?>
    <section>
        <!--for demo wrap-->
        <h1>Welcome to Gates' Mobile Store</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>mobile name</th>
                        <th>company</th>
                        <th>year</th>
                        <th>price</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Mobile Name</th>
                        <th>Company</th>
                        <th>Year</th>
                        <th>Price($)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      $query = "SELECT * FROM types"; 
                      $result = mysqli_query($connection, $query); 
                      $resultsCount = mysqli_num_rows($result);
                      if($resultsCount > 0)
                      {
                          echo '<tr><td colspan="5">'.$resultsCount.' have been found</td></tr>';
                          while ($row = mysqli_fetch_assoc($result)) {
                              $deleteCell = '<td><a href="delete-student.php?id='.$row["Id"].'" class="btn btn-danger">Remove</a></td>';
                              echo ('<tr><td>'.$row["Id"].'</td><td>'.$row["MobileName"].'</td><td>'.$row["Company"].'</td><td>'.$row["Year"].'</td><td>'.$row["Price"].'</td>'.$deleteCell.'</tr>');
                          }
                      }
                      else
                      {
                          echo '<tr><td colspan="5">No Data Found</td></tr>';
                      }
      
                    ?>
                </tbody>
            </table>
        </div>
    </section>


   

</body>

<script>
    $(window).on("load resize ", function () {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({ 'padding-right': scrollWidth });
    }).resize();

</script>

<script>
    $(document).ready(function () {
        $('table').DataTable();
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
    crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>



</html>