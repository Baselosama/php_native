<html>
<head>
    <title>login data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8" style="margin: 100px auto">
            <form action="../includes/database/reigster-DB.php" method="post">
                <div class="form-group">
                    <input type="text" name="name" placeholder="User name" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Enter Email" class="form-control" required>
                </div>
                    <div class="form-group">
                    <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
                    </div>
                <div class="form-group">
                    <input type="password" name="confirm_pass" placeholder="Enter Password Again" class="form-control" required>
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-danger" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>