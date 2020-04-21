<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HMS</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
</head>
    <body>
    <?= @$content ?>
    <div class="d-flex" id="wrapper">


        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"> <a href="" class="text-dark page-item"><img src="image/home.png" title="home" width="200" height="100"></a>  </div>
            
        </div>
        
        
        
        <div id="page-content-wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Menu</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?controller=pages&action=home">Trang chủ<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Liên hệ
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">0909587999</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Địa chỉ </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tài khoản
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Thông tin tài khoản</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php?controller=login&action=logout">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header> 
            <div id="login">
            <?php
                require_once 'views/pages/'.$data["page"].'.php';
            ?>
        </div>
        </div>
    </div>







<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");   
    });
</script>

</body>

</html>






























