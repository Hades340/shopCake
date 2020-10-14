
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="/public/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body style="background-image:url(/public/img/body2.png);">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                <?php require_once "./mvc/views/pages/".$data["Page"].".php" ?>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 mt-auto" style="background-image: url(img/background.gif);">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted" style="color: white;">Just shop for healthy</div>
                        <div>
                            <a href="#" style="color: white;">admin</a> &middot;
                            <a href="#" style="color: black;">you need help</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/public/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="/public/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/public/js/scripts.js"></script>
</body>

</html>