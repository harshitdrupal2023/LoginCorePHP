<html>
    <head>
        <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    </head>
    <body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">Signup Form</div>
                    <div class="card-body">
                        <form method="post" action="process_apply.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="uname" placeholder="Enter username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="upass" placeholder="Password" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="username">Email</label>
                                <input type="email" class="form-control" id="username" name="uemail" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Image</label>
                                <input type="file" class="form-control" id="file" name="uimg" required>
                            </div>
                            
                            <button type="submit" name="signup" class="btn btn-primary btn-block">Signup</button>
                        </form>
                    </div>
                    <a href="login.php" class="btn btn-primary btn-block">Login</a>
                </div>
            </div>
        </div>
    </div>
<!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>