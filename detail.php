<?php
require_once ('./db/dbhelper.php');
$id = '';
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $sql = 'select * from product where id = '.$id ;
    $product = executeSingleResult($sql);
    if($product != null){
        $name = $product['name'];
        $images = $product['image'];
        $price = $product['price'];
        
        $mo_ta = $product['content'];
        
        $L = $product['L'];
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title><?=$name?></title>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
        <link rel="shortcut icon" href="https://s3.getstickerpack.com/storage/uploads/sticker-pack/date-a-live/sticker_12.png?a75ec42c871649f07d7d66e5f918b946&d=200x200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4181611f0b.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href='./detail/style.css' rel='stylesheet'>
    </head> 
<body><nav class="navbar navbar-default navbar-fixed-top" style="background-color: black;">
        <div class="flex-row container">
            <div class="flex-col hide-for-medium flex-left">
                <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                    <li class="html custom html_topbar_left"><strong class="uppercase" style="color: aliceblue;">CHÀO MỪNG BẠN ĐẾN VỚI THẾ GIỚI SƠN</strong></li>          </ul>
            </div>
      
            <div class="flex-col hide-for-medium flex-center">
                <ul class="nav nav-center nav-small  nav-divided">
                              </ul>
            </div>
      
            <div class="flex-col hide-for-medium flex-right">
               <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
               <li class="html custom html_topbar_right"><strong class="uppercase" style="color: aliceblue;">Sdt: 0378.543.875</strong></li>
                </ul>
            </div>
      
            
            
      </div>
    </nav>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" >
        <div class="container">
          <a class="navbar-brand" href="./"> <img src="https://sonjotunvietnam.com/wp-content/uploads/2017/05/Jotun_logo.svg_.png" height="50"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./">TRANG CHỦ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./">VỀ CHÚNG TÔI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./">SẢN PHẨM</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active "href="#">TIN TỨC-TƯ VẤN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active "href="#">LIÊN HỆ</a>
              </li>
              
            </ul>
            <form>
            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
            <li>
              <a href="./cart.php"  ><i class="fas fa-shopping-cart" style="color: aliceblue;"></i></a>
            </li>
          </div>
        </div>
    </nav>
    <div class="super_container">
    <header class="header" style="display: none;">
        <div class="header_main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="single_product">
        <div class="container" style=" background-color: #fff; padding: 11px;">
            <div class="row">
                
                <div class="col-lg-6 order-lg-2 order-1">
                    <img src="<?=$images?>" alt="" style="width:100%">
                </div>
                <div class="col-lg-6 order-3">
                    <div class="product_description">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Trang chủ</a></li>
                                
                                <li class="breadcrumb-item active"><?=$name?></li>
                            </ol>
                        </nav>
                        <div class="product_name"><?=$name?></div>
                        
                        
                            <div> <span class="product_price"><?=$price?>VND / <?=$L?> L</span>  </div>


                        
                        
                        
                        <hr class="singleline">
                        
                        <div>
                            <div class="row">
                                <div class="col-md-5">
                                    
                                </div>
                                <div class="col-md-7"></div>
                            </div>
                            
                        </div>
                        <hr class="singleline">
                        <?php
        include './connect_db.php';
        $result = mysqli_query($con, "SELECT * FROM `product` WHERE `id` = ".$_GET['id']);
        $product1 = mysqli_fetch_assoc($result);
        
        ?>
                        <form id="add-to-cart-form" action="cart.php?action=add" method="POST">
                          <input type="text" value="1" name="quantity[<?=$product1['id']?>]" size="2" /><br/>
                          <input type="submit" value="Mua sản phẩm" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="row row-underline">
                <div class="col-md-6"> <span class=" deal-text">Thông tin sản phẩm</span> </div>
                <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
            </div>
            <div><span class="product_info"><?=$mo_ta?><span> </div>
            

        </div>
    </div>
</div>
</body>      


        <div class="container">
  <footer class="row row-cols-5 py-5 my-5 border-top">
    <div class="col">
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      </a>
      <p class="text-muted">&copy; 2021</p>
    </div>

    <div class="col">

    </div>

    <div class="col">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>
  </footer>
</div>