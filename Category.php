<?php
require_once ('./db/dbhelper.php');
$id ='';
if (isset($_GET['id'])) {
	$id       = $_GET['id'];
	$sql      = 'select * from loaisp where id_loai = '.$id;
	$category = executeSingleResult($sql);
	if ($category != null) {
		$name = $category['ten_loai'];
	}}
?>
<!DOCTYPE html>
<link rel="shortcut icon" href="https://s3.getstickerpack.com/storage/uploads/sticker-pack/date-a-live/sticker_12.png?a75ec42c871649f07d7d66e5f918b946&d=200x200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4181611f0b.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href='./Category/Style.css' rel='stylesheet'>
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
<body>
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
<div class="container">
        <?php 
        if($id!='')
        {
        ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Shop</a></li>
            <li class="breadcrumb-item active"><?=$name?></li>
        </ol>
        <?php } else{?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Shop</a></li>
            
        </ol>
        <?php }?>
    
    <div class="row g-1">
        <div class ="col-2" style=" text-align: center"><h3 ><font size="4">danh mục sản phẩm</font></h3>
          <ul class="list-group" >
          <?php
          $sql          = 'select * from loaisp';
          $categoryList = executeResult($sql);
          foreach ($categoryList as $item) {
            echo '<li class="list-group-item"><a class="list" href="./Category.php?id='.$item['id_loai'].'" style="text-transform: capitalize;">'.$item['ten_loai'].'</a></li>';
          }

           ?>
        </div>
        <div class = "col-10">
            <div class="row">
                <?php
                if($id!='')
                {
                    $limit =12;
                    $page =1;
                    if(isset($_GET['page'])){
                       $page = $_GET['page'];
                    }
                    if($page <= 0){
                      $page = 1;
                    }
                    $firstIndex = ($page-1)*$limit;
                    $sql          = "SELECT * FROM `product` WHERE `id_loai` = " .$id ." ORDER BY id desc limit ".$firstIndex.",".$limit;
                    $productList = executeResult($sql);
                
                    $sql='select count(id) as total from product ';
                    $countResult = executeSingleResult($sql);
                    $count = $countResult['total'];
                    $number = ceil($count/$limit);
                    foreach ($productList as $item){
                    
                        echo'<div class="col-md-3">
                        <div class="p-card">
                        <a href="detail.php?id='.$item['id'].'" style = "text-decoration: none">
                          <div class="p-carousel">
                              <div class="carousel slide" data-ride="carousel" id="carousel-1">
                                  <div class="carousel-inner" role="listbox">
                                      <div class="carousel-item active"><img class="w-100 d-block" src="'.$item['image'].'"></div>
                                      
                                  </div>
                                  
                              </div>
                          </div>
                          
                          <div style=" text-align: center"><h5>'.$item['name'].'</h5></div>
                          </a>     
                        </div>
                      </div>';
                    }
                    
                 }
                else{
                    $limit =12;
                $page =1;
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                }
                if($page <= 0){
                    $page = 1;
                }
                $firstIndex = ($page-1)*$limit;
                $sql          = "SELECT * FROM `product`  ORDER BY id desc limit ".$firstIndex.",".$limit;
                
                $productList = executeResult($sql);
                
                $sql='select count(id) as total from  product';
                $countResult = executeSingleResult($sql);
                $count = $countResult['total'];
                $number = ceil($count/$limit);
                foreach ($productList as $item){
                    
                        echo'<div class="col-md-3">
                        <div class="p-card">
                        <a href="detail.php?id='.$item['id'].'" style = "text-decoration: none">
                          <div class="p-carousel">
                              <div class="carousel slide" data-ride="carousel" id="carousel-1">
                                  <div class="carousel-inner" role="listbox">
                                      <div class="carousel-item active"><img class="w-100 d-block" src="'.$item['image'].'"></div>
                                      
                                  </div>
                                  
                              </div>
                          </div>
                          
                          <div style=" text-align: center"><h5>'.$item['name'].'</h5></div>
                          </a>     
                        </div>
                      </div>';
                    }
                    
                }
                
                 ?>
                 <?php
				if ($number>1) {
				?>
				<ul class="pagination">
				    
					<?php 
					if($page>1){
						echo '<li class="page-item"><a class="page-link" href="?page='.($page-1).'">Previous</a></li>';
					}
					?>
					<?php 
					for($i =0;$i<$number;$i++){
						if($page == ($i+1)){
							echo '<li class="page-item active"><a class="page-link" href="?page='.($i+1).'">'.($i+1).'</a></li>';
						}
						else{
							echo '<li class="page-item"><a class="page-link" href="?page='.($i+1).'">'.($i+1).'</a></li>';
						}
					}
					?>
					<?php 
					if($page < $number){
						echo '<li class="page-item"><a class="page-link" href="?page='.($page+1).'">Next</a></li>';
					}
					?>
                   
                   
                   
                </ul>
				<?php 
				}
				?>
              
        
            </div>
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