<?php 
    require_once('../include/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/50f10d1d11.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <title>Nhóm 15 - Website bán laptop</title>
    
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="header-menu">
                <div class="logo">
                    <a href="./">
                        <img class="logo-img" src="./assets/img/logo.png" alt="">
                    </a>
                </div>

                <div class="search-form">
                    <div class="input-group mt-4">
                        <input class="form-control border-right-0">
                        <span class="input-group-append bg-white">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                    </div>
                </div>

                <div class="gio-hang">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p class="cart-text">Giỏ hàng</p>
                </div>

                <div class="login">
                    <a href="http://">Đăng nhập</a>
                    <a href="http://">Đăng kí</a>
                </div>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="side-menu">
                        <ul class="menu-list">
                            <li class="item">
                                <i class="fa-solid fa-laptop"></i>
                                <a href="">Laptop mới</a>
                                <i class="fa-solid fa-angle-right"></i>
                            </li>
                            <li class="item">
                                <i class="fa-solid fa-gamepad"></i>
                                <a href="">Laptop gaming</a>
                                <i class="fa-solid fa-angle-right"></i>
                            </li>
                            <li class="item">
                                <i class="fa-solid fa-pen-ruler"></i>
                                <a href="">Laptop đồ họa</a>
                                <i class="fa-solid fa-angle-right"></i>
                            </li>
                            <li class="item">
                                <i class="fa-solid fa-building"></i>
                                <a href="">Laptop văn phòng</a>
                                <i class="fa-solid fa-angle-right"></i>
                            </li>
                            <li class="item">
                                <i class="fa-solid fa-house-laptop"></i>
                                <a href="">Laptop cũ</a>
                                <i class="fa-solid fa-angle-right"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-8">
                    <div class="banner">
                        <img class="mockup" src="./assets/img/4305488.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    
    
    
    
    
    
    </div>

    <div class="product-show">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="detail">
                        <div class="thumbnail">
                            <img class="" src="./assets/img/sanpham/legion_5.jpeg" alt="">
                        </div>
                        
                        <p class="product-name"><a href="./san-pham.php">Macbook Pro 14 inch 2021 | Chính hãng Apple Việt Nam</a></p>

                        <p class="config">M1/16/512</p>

                        <p class="price">51.500.000 <span>&#8363;</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>