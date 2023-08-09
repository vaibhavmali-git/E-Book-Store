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
            <img src="images/about-image1.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Our point is to give significant, charming, and animating substance to youngsters who go much past their normal course books. With this point of view, we treat each book as a work of adoration.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>The wide scope of books offered by us incorporates fantasies, moral stories, showed storybooks, reference books, general learning books, sentence structure books, shading books, action books, sticker books, and more.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-image2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-image3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>This BookStore is a meta-search engine for comparing books prices and know availability across all popular Indian book stores.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/profile.png" alt="">
            <p>Nice book with all major indian mythology stories together.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>USER 1</h3>
        </div>

        <div class="box">
            <img src="images/profile.png" alt="">
            <p>A good moral story for youthful mind. A must read story for everyone. Recommended for understanding life in a better way.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>USER 2</h3>
        </div>

        <div class="box">
            <img src="images/profile.png" alt="">
            <p>The book covers the entire Ramayana in a really descriptive yet concise way. Great book for kids to read and learn about the e Ramayana.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>USER 3</h3>
        </div>

        <div class="box">
            <img src="images/profile.png" alt="">
            <p>Very nicely deted story of Mahabharat with key events highlighted. Recommended for children and parents to read at leisure. Ciao !</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>USER 4</h3>
        </div>

        <div class="box">
            <img src="images/profile.png" alt="">
            <p>Superb novel so many things learn to short time, and if you are interested for mahabharata this book help to learn new way of learning</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>USER 5</h3>
        </div>

        <div class="box">
            <img src="images/profile.png" alt="">
            <p>There is no better way than this to introduce Indian Es to children. Written in conversational mode with pixtures.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>USER 6</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>