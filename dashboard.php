<?php
session_start();
include 'dbconfig.php';

 if(isset($_SESSION['uname'])) // If session is not set then redirect to Login Page
       {
?>

<html>
    <head>
        <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    /* Adjust sidebar height */
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        padding: 48px 0 0;
        overflow-x: hidden;
    }
</style>
    </head>
    <body>
    <div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                           Logout
                        </a>
                    </li>
                    <!-- Add more menu items as needed -->
                </ul>
            </div>
        </nav>

        <!-- Main content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <!-- Your dashboard content goes here -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Example content -->
                    <div class="card">
                        <div class="card-body">
                            Welcome User<h3><?php echo $_SESSION['uname'];  ?></h3>
                            <div class="container">
  <h2>Filterable Table</h2>
  <p>Type something in the input field to search the table for first names, last names or emails:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>
        <th>Image</th>
      </tr>
    </thead>
    <?php  
$carusal_list="SELECT * FROM `users`"; 
//echo $c_list;
$c_listss=mysqli_query($conn,$carusal_list);
while($c_listes=mysqli_fetch_assoc($c_listss))
{?>
    <tbody id="myTable">
    <tr>
      <td><?php echo $c_listes['uname'];   ?></td>
      <td><?php echo $c_listes['uemail'];   ?></td>
      <td><?php echo $c_listes['udate'];   ?></td>
      <td><img src="./images/<?php echo $c_listes['uimg'];   ?>" title="<?php echo $c_listes['uname'];   ?>" width="120" height="85"></td>
    </tr>
    </tbody>
    <?php } ?>
  </table>
  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
        $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
    });
</script>

    </body>
</html>
<?php
       }
       else{
        header("Location:Login.php");  
       }
       
       
       

?>
