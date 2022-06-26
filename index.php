<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- CSS Main File -->
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container-fluid">
            <img class="navbar-brand" src="assets/img/mswdo-logo.png" width="50px" height="60px" alt="">
            <div>MSWDO</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-lable="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="toggleMobileMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">PWD</a></li>
                            <li><a class="dropdown-item" href="#">Senior Citizens</a></li>
                            <li><a class="dropdown-item" href="#">Solo Parents</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Mandate</a></li>
                            <li><a class="dropdown-item" href="#">Mission & Vision</a></li>
                            <li><a class="dropdown-item" href="#">Organizational Chart</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#">Sign Up </a>
                    </li>
                </ul>
            </div>
    </nav>

    <!-- primary-section -->
    <header class="primary-section ">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Municipal Social Welfare and Development Office </h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Municipality of Pila Laguna</h2>
                    <a class="btn btn-primary" href="#about">Get Started</a>
                </div>
            </div>
        </div>
    </header>

    <!-- About-->
    <section class="dummy-section text-center" id="dummy">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 >About MSWDO</h2>
                    <p >
                        To serve the needy and poor families all over the Philippines
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="assets/img/sample-pic.jpg" alt="..." />
        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script>
            $('a').on('click', function() {
                $('a').removeClass('active');
                $(this).addClass('active');
            });
        </script>
        
<!-- scroll navbar color -->
        <script>
            $(document).ready(function() {
                $(window).on("scroll", function() {
                    var wn = $(window).scrollTop();
                    if (wn > 1) {
                        $(".navbar").css("background", "#fff");
                        $(".navbar").css("color", "black");
                        $(".nav-link").css("color", "black");
                    } else {
                        $(".navbar").css("background", "transparent");
                        $(".navbar").css("color", "#fff");
                        $(".nav-link").css("color", "#fff");
                    }
                });
            });
</script>
    
</body>

</html>