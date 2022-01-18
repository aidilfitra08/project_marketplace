<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/click.js"></script>
    <style>
        .thumbnail {
            height: 350px;
        }
        .barang {
            margin-left: 90px;
            margin-right: auto;
        }
    </style>
    <title>products</title>
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
                    <a href="">News</a>
                    <a href="">Community</a>
                    
                </div>
            </div>
            <div class="col-md-auto sub-menu" style="margin-right: 10px;"><a href="">Account</a></div>
            
        </div>
        <p onclick=buka() class="search-button" style="float: right; position: relative;z-index: 3;"><img class="search-img" src="/gambar/logo/search.png" alt=""></p>
        
    </nav>


    
    <div id="search" style="margin-top: -100px;">
        <div class="row justify-content-md-center" style="background-color: white;height: 100px;opacity: 95%;">
            <div class="col-lg-auto">
                <form method="POST" class="col-lg-12">
                    <input type="text" placeholder="Search.." name="search" style="width:700px;height: 27px;margin-top: 30px;">
                        <button type="submit" >Search</button>
                    
                
                </form> 
            </div>
        </div>
        

    </div>
    <div style="margin-top: 110px;"></div>
    <h2 style="text-align: center;">OUR PRODUCTS</h2>
    
    <div class="row barang" >
        <a href="" class="col-md-auto">
            <img src="/gambar/product/baju/baju1.jpg" alt="" class="thumbnail">
            <div class="caption" style="text-align: center;">
                <h5>Nama Barang</h5>
                <h6>Harga</h6>
            </div>
        </a>
        <a href="" class="col-md-auto">
            <img src="/gambar/product/baju/baju2.jpg" alt="" class="thumbnail">
            <div class="caption" style="text-align: center;">
                <h5>Nama Barang</h5>
                <h6>Harga</h6>
            </div>
        </a>
        <a href="" class="col-md-auto">
            <img src="/gambar/product/baju/baju3.jpg" alt="" class="thumbnail">
            <div class="caption" style="text-align: center;">
                <h5>Nama Barang</h5>
                <h6>Harga</h6>
            </div>
        </a>
        <a href="" class="col-md-auto">
            <img src="/gambar/product/baju/shirt1.webp" alt="" class="thumbnail">
            <div class="caption" style="text-align: center;">
                <h5>Nama Barang</h5>
                <h6>Harga</h6>
            </div>
        </a>
        <a href="" class="col-md-auto">
            <img src="/gambar/product/baju/shirt2.jpg" alt="" class="thumbnail">
            <div class="caption" style="text-align: center;">
                <h5>Nama Barang</h5>
                <h6>Harga</h6>
            </div>
        </a>
        <a href="" class="col-md-auto">
            <img src="/gambar/product/baju/shirt3.webp" alt="" class="thumbnail">
            <div class="caption" style="text-align: center;">
                <h5>Nama Barang</h5>
                <h6>Harga</h6>
            </div>
        </a>
        <a href="" class="col-md-auto">
            <img src="/gambar/product/celana/cargo1.webp" alt="" class="thumbnail">
            <div class="caption" style="text-align: center;">
                <h5>Celana Cargo</h5>
                <h6>Harga</h6>
            </div>
        </a>
        <a href="" class="col-md-auto">
            <img src="/gambar/product/celana/cargo2.webp" alt="" class="thumbnail">
            <div class="caption" style="text-align: center;">
                <h5>Nama Barang</h5>
                <h6>Harga</h6>
            </div>
        </a>
        <a href="" class="col-md-auto">
            <img src="/gambar/product/celana/chino1.jpg" alt="" class="thumbnail">
            <div class="caption" style="text-align: center;">
                <h5>Nama Barang</h5>
                <h6>Harga</h6>
            </div>
        </a>
        <a href="" class="col-md-auto">
            <img src="/gambar/product/celana/chino2.jpg" alt="" class="thumbnail">
            <div class="caption" style="text-align: center;">
                <h5>Nama Barang</h5>
                <h6>Harga</h6>
            </div>
        </a>
        <a href="" class="col-md-auto">
            <img src="/gambar/product/celana/chino3.webp" alt="" class="thumbnail">
            <div class="caption" style="text-align: center;">
                <h5>Nama Barang</h5>
                <h6>Harga</h6>
            </div>
        </a>
        <a href="" class="col-md-auto">
            <img src="/gambar/product/celana/denim1.webp" alt="" class="thumbnail">
            <div class="caption" style="text-align: center;">
                <h5>Nama Barang</h5>
                <h6>Harga</h6>
            </div>
        </a>
    </div>

    <div class="footer">
        <div class="row">
            <div class="col-md-4 " style="padding: 50px 0px 0px 100px;">
                <a href="/aboutUs"><h3>About us</h3></a>
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




    <script> 
        var searchpopup = document.getElementById("search");
        window.onclick = function(event) {
            if (event.target == searchpopup) {
                searchpopup.style.display = "none";
            }
        }

	</script> 
</body>
</html>