<?php $session = session(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/styleproduct.css">
    <script src="/js/click.js"></script>
    <title>Baju 1</title>
</head>
<body>
    <nav class="bar-atas">
        <div class="bar-atas-1"></div>
        <div class="row justify-content-md-center tulisan">
            <div class="col-md-auto sub-menu"><a href="/">Home</a></div>
            <div class="col-md-auto sub-menu dropdown" >
                <a href="products.html">Products</a>
                <div class="dropdown-products">
                    <a href="/products/baju">Tops</a>
                    <a href="/products/celana">Bottoms</a>
                    <a href="/products/topi">Hat</a>
                </div>
            </div>
            <div class="col-md-auto" style="color: white;">
                <img src="/gambar/logo/putih-lebar.png" alt="" width="180px" style="margin: 15px;">
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


    <br>
    
    
    <div class="row justify-content-md-center" style="width: 100%;margin-top: 80px;">
        <?php foreach($baju as $b){ ?>
            <?php $product_id = $b['product_id']; ?>
        <div class="col-md-3" >
        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $b['gambar_barang'] ).'" alt="" style="padding: 20px;float: right;padding-right: 80px;">'; ?>
            </div>
        <div class="col-md-3" style="padding: 30px;">
            
            <h5 style="font-weight: bold;"><em><?= $b['nama_product']; ?></em></h5>
            <p style="font-size: 25px;"><?= "Rp ".number_format($b['harga'],2,",","."); ?></p>
            <div><?= $b['deskripsi']; ?>
            </div><br>
            
            <div class="row">
                <div class="col-md-2" id="warna-klik" onclick=tampilWarna()>Warna</div>
                <div class="col-md-3" id="ukuran-klik" onclick=tampilUkuran()>Ukuran</div>
            </div>
            <div class="warna" id="warna">
                <ul>
                    <li>Hitam</li>
                    <li>Coklat</li>
                    <li>Abu-Abu</li>
                </ul>
            </div>
            <div class="ukuran" id="ukuran">
                30 (76cm X 104cm X 41cm) <br>
                31 (79cm X 104cm X 41cm)<br>
                32 (81cm X 104cm X 41cm)<br>
                33 (84cm X 105cm X 43cm)<br>
                34 (86cm X 105cm X 43cm)<br>
                35 (89cm X 105cm X 43cm)<br>
                36 (91cm X 107cm X 43cm)<br>
                38 (97cm X 107cm X 43cm)<br>
                40 (102cm X 107cm X 43cm)<br>
                42 (106cm X 106cm X 43cm)
            </div>       
        </div>
        <?php }; ?>
    </div>
    
    <div style="height: 30px;"></div>
    <h2 style="text-align: center;">Similar Products</h2>
    <div class="row justify-content-md-center barang" >
        <!-- <a href="" class="col-md-auto">
            <img src="/gambar/product/baju/baju2.jpg" alt="" class="thumbnail">
            <div class="caption" style="text-align: center;">
                <h5>baju 1</h5>
                <h6>Rp 60.000,00</h6>
            </div>
        </a>
        <a href="" class="col-md-auto">
            <img src="/gambar/product/baju/baju3.jpg" alt="" class="thumbnail">
            <div class="caption" style="text-align: center;">
                <h5>baju 2</h5>
                <h6>Rp 60.000,00</h6>
            </div>
        </a>
        <a href="" class="col-md-auto">
            <img src="/gambar/product/baju/shirt1.webp" alt="" class="thumbnail">
            <div class="caption" style="text-align: center;">
                <h5>Baju 3</h5>
                <h6>Rp 100.000,00</h6>
            </div>
        </a> -->
        
    </div>
    <div style="height: 30px;"></div>
    <h2 style="text-align: center;">Comments</h2>
    <div class="row justify-content-md-center" style="width: 100%;">
    <?php foreach($comment as $komentar){ ?>
        <div class="col-md-4" id="bagian-komentar" style="border: 1px solid black;height: fit-content;padding:10px;border-radius:10px;">
            
                <p>Komentar dari <b> <?= $komentar['user_name']; ?></b></p>
                <p style="font-style: italic;"><?= $komentar['comment_text']; ?></p>
                <p style="font-size: 12px;">pada <?= $komentar['timestamp']; ?></p>
                <?php if($session->get('user_name') == $komentar['user_name']){ ?>
                    <button class="btn-xs btn-danger" onClick="document.location.href='/comment/delete/<?= $komentar['komentar_id']; ?>/<?= $komentar['product_id']; ?>'">Hapus Komentar</button>
                    
                   <?php ;}; ?>    
                
        </div>
        <div class="w-100" style="margin: 5px;"></div>
    <?php }; ?>

    </div>
    <div class="row justify-content-md-center" style="width: 100%;">
        <form action="/comment/publish" method="post">
            <textarea name="komentar" id="komentar" cols="90" rows="4" class="form-control" <?php if($session->get('user_name')==null){echo 'readonly style="cursor: no-drop" ';} ?>></textarea>
            <input type="hidden" name="product_id" value="<?= $product_id; ?>">
            <input type="submit" name="postCommentSubmit" value="Publish">
        </form>
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
    <script src="/js/click2.js"></script>
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