<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    
</head>
<body>
     <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Login</h5>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="login">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control mb-3" id="username" name="username" placeholder="Enter your Username" required>
                            <label for="passwd" class="form-label">Password</label>
                            <input type="text" class="form-control mb-3" id="passwd" name="passwd" placeholder="Enter your Password" required>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>
</body>
</html>
   
