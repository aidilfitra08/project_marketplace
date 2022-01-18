<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/styleabout.css">
    <script src="/js/click.js"></script>
    
    <link rel="stylesheet" href="/css/slideshow.css">
    <title>Home</title>
</head>
<body>
    <nav class="bar-atas">
        <div class="bar-atas-1"></div>
        <div class="row justify-content-md-center tulisan">
            <div class="col-md-auto sub-menu"><a href="/">Home</a></div>
            <div class="col-md-auto sub-menu dropdown" >
                <a href="/products">Products</a>
                <div class="dropdown-products">
                    <a href="/products/baju">Tops</a>
                    <a href="/products/celana">Bottoms</a>
                    <a href="/products/topi">Hat</a>
                </div>
            </div>
            <div class="col-md-auto" style="color: white;">
                <a href="/"><img src="/gambar/logo/putih-lebar.png" alt="" width="180px" style="margin: 15px;"></a>
            </div>
            
            <div class="col-md-auto sub-menu dropdown" >
                <a href="">Others</a>
                <div class="dropdown-products">
                    <a href="/article">News</a>
                    <a href="">Community</a>
                    
                </div>
            </div>

            <div class="col-md-auto sub-menu dropdown" style="margin-right: 10px;">
                <?php 
                    $session = session();
                    if($session->get('user_name')){ ?>
                <img src="/gambar/product/topi/baseball1.jpg" alt="" style="width: 30px;border-radius:20px;">
                <?php
                    echo '<a href="">'.$session->get('user_name').'</a>';
                ?>
                <div class="dropdown-products" style="margin-top: 25px;">
                    <a href="">Upload Photo</a>
                    <a href="login/logout">Logout</a>
                        
                </div>
                <?php
                } else {
                    echo "<a href=''>Account</a>";
                ?>
                <div class="dropdown-products">
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                        
                </div>
                <?php }; ?>
            </div>
            
        </div>
        <p onclick=buka() class="search-button" style="float: right; position: relative;z-index: 3;"><img class="search-img" src="/gambar/logo/search.png" alt=""></p>
        
    </nav>


    
    <div id="search" style="margin-top: -80px;">
        <div class="row justify-content-md-center" style="background-color: white;height: 100px;opacity: 95%;">
            <div class="col-lg-auto">
                <form method="POST" class="col-lg-12">
                    <input type="text" placeholder="Search.." name="search" style="width:700px;height: 27px;margin-top: 30px;">
                        <button type="submit" >Search</button>
                    
                
                </form> 
            </div>
        </div>
    </div>

    <div class="container about">
        <h2 style="text-align: center">Developer Team</h3><br><br>
        <div class="row">
            <div class="col-sm">
                <img src="/gambar/aboutUs/dev.jpg" alt="">
                <br><br>
                <h5 style="text-align: center">Devara Hifzhurrahman</h5>
                <p style="text-align: center"><i>140810190019</i></p>
            </div>
            <div class="col-sm">
                <img src="/gambar/aboutUs/clau.jpg" alt="">
                <br><br>
                <h5 style="text-align: center">Zahra Claura Hermawan</h5>
                <p style="text-align: center"><i>140810190027</i></p>
            </div>
            <div class="col-sm">
                <img src="/gambar/aboutUs/aidil.jpg" alt="">
                <br><br>
                <h5 style="text-align: center">Aidil Fitra</h5>
                <p style="text-align: center"><i>140810190053</i></p>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="row">
            <div class="col-md-4 " style="padding: 50px 0px 0px 100px;">
                <h3>About us</h3>
                <p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Suspendisse elit mi, malesuada ac nisi vitae, venenatis consectetur orci. 
                    In interdum finibus metus, in aliquam quam rhoncus ac. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel auctor nisl. 
                    Quisque turpis erat, ultricies vel tristique sit amet, dictum ullamcorper metus. 
                    Etiam maximus gravida enim eu efficitur. In hac habitasse platea dictumst. 
                    In ac maximus odio. Vivamus eu efficitur ante. Cras ultricies mauris 
                    lorem, a mollis urna sodales at. Suspendisse ullamcorper interdum nibh, quis semper nunc 
                    sollicitudin sed. Vivamus vel mollis ex. Suspendisse vel imperdiet neque, ac scelerisque arcu. 
                    Quisque metus odio, porta vel enim vitae, rhoncus vulputate lectus.
                </p>
            </div>
            <div class="col-md-3 offset-md-2" style="padding: 50px 0px 0px 100px; float: right;">
                <h3>Customer Services</h3>
            </div>
            <div class="col-md-3" style="padding: 50px 0px 0px 100px;float: right;">
                <h3>Contact Us</h3>
            </div>
        </div>
    </div>

</body>
</html>