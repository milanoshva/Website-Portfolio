<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p> Milano Florist menyediakan banyak jenis bunga. Milano Florist juga merupakan supplier untuk toko-toko bunga yang berada di wilayah Jakarta. Produk yang kami sediakan dipastikan berkualitas dan terjangkau.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>Milano florist melayani custom bunga untuk acara wisuda, kematian, lahiran dan lainnya. Dalam kondisi bagus, hemat, dan bunga yang tidak layu atau berkualitas</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>Milano Florist adalah toko bunga atau florist online yang menjual berbagai bunga.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/reva.png" alt="">
            <p>Bunganya sangat mantap! penataan yang sangat rapi, saya pun sampai terpesona, aku terpesona memandang si bunga.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Reva Rasya Rafsanjani</h3>
        </div>

        <div class="box">
            <img src="images/rehan.png" alt="">
            <p>Banyak pilihan bunga dan deskripsi dari semua bunga yang ada sangat membantu untuk para pembeli memilih bunga yang tepat.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Achmad Raihan Alfarizi</h3>
        </div>

        <div class="box">
            <img src="images/nanda.png" alt="">
            <p>Saya merekomendasikan tempat florist ini. Pengiriman cepat, penjual ramah, ramah untuk di pukul.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Nanda Putra Pratama</h3>
        </div>

        <div class="box">
            <img src="images/lano.png" alt="">
            <p>Saya baru saja membeli bunga dari toko bunga ini dan sangat senang dengan hasilnya! Penataan bunga  yang indah dan tepat.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Sheva Milano</h3>
        </div>

        <div class="box">
            <img src="images/rikard.png" alt="">
            <p>Setelah melihat toko ini saya langsung jatuh cinta karna bunga bunga yang dijual ditoko ini cantik cantik.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Richard Oscar Yusuf</h3>
        </div>

        <div class="box">
            <img src="images/dimas.png" alt="">
            <p>Keren bunga nya, trus ada deskripsi nya juga. Suka banget dan ramah-ramah juga dan packing nya juga sangat rapih, pokok nya suka banget</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Dimas Ardian Setiawan</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>