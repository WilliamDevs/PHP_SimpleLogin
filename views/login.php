<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGs03_Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9Muh0f23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div id='login'>
        <h3 class="text-center text-white pt-5">Login Form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-form" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info" >Login</h3>
                            <div class="from-group">
                                <label for="username" class="text-info">Username:</label>
                                <input type="text" name="username" id="username" class="form-control" />
                            </div>
                            <div class="from-group">
                                <label for="password" class="text-info">Password:</label>
                                <input type="password" name="password" id="password" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="LoginSubmit" class="btn btn-info btn-md" value="submit" />
                            </div>
                            <div id="reg_link" class="text-right">
                                <a href="?register=true">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</body>
</html>