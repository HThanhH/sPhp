<?php
require_once ('./db/dbhelper.php');
?>
<!DOCTYPE html>
<head>
    <title>Sơn</title>
    <meta charset="utf-8">
    <link href="./style.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://s3.getstickerpack.com/storage/uploads/sticker-pack/date-a-live/sticker_12.png?a75ec42c871649f07d7d66e5f918b946&d=200x200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4181611f0b.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
  
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: black;">
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
                <a class="nav-link active" href="./Category.php">SẢN PHẨM</a>
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
    <div style=" display: flex; justify-content: center; align-items: center;"><div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width : 80%;">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://sonjotunvietnam.com/wp-content/uploads/2021/03/banner_14-copy.jpg" class="d-block w-100" alt="...">
          </div>
          
          
        </div>
        
    </div></div>
    <div class="row " >
      
      <div class="col-md-12">
        <div id="gap-447738005" class="gap-element clearfix" style="display:block; height:auto;">
		
            <style scope="scope">
            
            #gap-447738005 {
              padding-top: 34px;
            }
            </style>
        </div>
        <?php 
                    $sql          = 'select * from loaisp';
                    $categoryList = executeResult($sql);
                    $limit =4;
$page =1;
if(isset($_GET['page'])){
	$page = $_GET['page'];
}
if($page <= 0){
	$page = 1;
}
$firstIndex = ($page-1)*$limit;
foreach ($categoryList as $item1) {
    echo '
          
          
          <div class="title_tieude" style="border-top: 2px solid #edeee9; border-radius: 12px; padding-left: 2%;text-align: center;  position: relative; height: 30px;">
            <h2 id="ftoc-heading-1" class="ftwp-heading" style="display: inline-block;text-align: center; background: url(https://hunghung.com.vn/wp-content/uploads/2020/04/background-title.png) no-repeat center center; height: 41px; line-height: 41px; font-family: inherit; font-weight: bold; text-transform: uppercase; color: #fff; padding: 0px 10px; min-width: 240px; font-size: 15px; top: -22px; position: relative;"><span style="color: #ffffff;">
                <a style="color: red;text-decoration: none;" href="./Category.php?id='.$item1['id_loai'].'">'.$item1['ten_loai'].'</a></span></h2>
        </div>
       
          ';
          $sql          = "SELECT * FROM `product` WHERE `id_loai` = " .$item1['id_loai'] ." ORDER BY id desc limit ".$firstIndex.",".$limit;
        $productList = executeResult($sql);
        echo'<div class="container"><div class="row ">';
          foreach($productList as $item){
            echo'
            
                <div class="col-md-3">
                
                    <ul class="list-person" ><a href="detail.php?id='.$item['id'].'" style = "text-decoration: none">
                       
                     <li style= "list-style: none;"><img src="'.$item['image'].'" ></li>
                        <h1 style="text-align: center; font-size: 24px;">'.$item['name'].'</h1></a>
                    </ul>
                    
                </div>
            
            ';
  
  
  }
  echo'</div>
  </div>';
  
  } ?>
        
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
</html>

    
    
