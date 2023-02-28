<?php include "../connect.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed Project</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/new_navbar.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <link rel="stylesheet" href="../../css/projectSection.css">
</head>

<body>
    <header class="header">
        <a href="../../index.php" class="logo"><img src="../../images/Deshmukha Builders logo-1.png" alt=""> </a>
        <nav class="navbar">
            <a href="../../index.php">home</a>
            <a href="../../index.php#about">about</a>
            <a href="../../index.php#contact">contact</a>
            <a href="../../index.php#reviews">reviews</a>
            <a href="onGoingProject.php">On-Going Project</a>
            <a href="#">Completed Project</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div style="display: none" id="info-btn" class="fas fa-info-circle"></div>
            <div style="display: none" id="search-btn" class="fas fa-search"></div>
            <div style="display: none" id="login-btn" class="fas fa-user"></div>
        </div>
    </header>

    <div class="container">
        <h3 class="title"> Completed ProjectS </h3>

        <div class="products-container">

            <?php
            $select = mysqli_query($conn, "SELECT * FROM `past_project`");

            while ($row = mysqli_fetch_assoc($select)) {

            ?>
                <div class="product" data-name="p-<?php echo $row['id']; ?>">
                    <img src="../../uploaded_img/<?php echo $row['image'] ?>" alt="">
                    <h3> <?php echo $row['name'] ?> </h3>
                    <div class="price"><?php echo $row['short'] ?></div>
                    <a href="../../uploaded_img/pdf/<?php echo $row['pdf'] ?>" target="_blank" class="btn">View map</a>
                </div>
            <?php }; ?>
        </div>
    </div>

    <div class="products-preview">
        <?php
        $select = mysqli_query($conn, "SELECT * FROM `past_project`");

        while ($row = mysqli_fetch_assoc($select)) {

        ?>
            <div class="preview" data-target="p-<?php echo $row['id']; ?>">
                <i class="fas fa-times"></i>
                <img src="../../uploaded_img/<?php echo $row['image'] ?>" alt="">
                <h3> <?php echo $row['name'] ?> </h3>
                <p> <?php echo $row['des'] ?> </p>
                <div class="price"><?php echo $row['short'] ?></div>
                <div class="buttons">
                    <a href="../../uploaded_img/pdf/<?php echo $row['pdf'] ?>" download class="buy">Download our map</a>
                    <a href="<?php echo $row['location'] ?>" target="_blank" class="cart">location of project</a>
                    <a href="<?php echo $row['yt'] ?>" target="_blank" class="buy">youtube video</a>
                </div>
            </div>

        <?php }; ?>
    </div>


    <footer class="footer">
        <div class="container1">
            <div class="row">
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="../../index.php">home</a></li>
                        <li><a href="../../index.php">About us</a></li>
                        <li><a href="../../index.php">Review us</a></li>
                        <li><a href="../../index.php">contact us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Our Project</h4>
                    <ul>
                        <li><a href="#">Complited project</a></li>
                        <li><a href="onGoingProject.php">onGoing project</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>contact us</h4>
                    <ul>
                        <li>
                            <a href="https://www.google.com/maps/place/Bhagya+nagar,+Irrigation+Colony,+Peer+Burhan+Nagar,+Nanded,+Maharashtra+431602/@19.1782164,77.3062902,17z/data=!3m1!4b1!4m6!3m5!1s0x3bd1d68b58a20959:0xce198fce0d6a8004!8m2!3d19.1782861!4d77.3084353!16s%2Fg%2F1tgm19lc?coh=164777&entry=tt" target="_blank">
                                <i class="bx bxs-map"><span> Bhagya nager Nanded</span></i></a>
                        </li>
                        <li>
                            <a href="https://wa.me/919579896842">
                                <i class="bx bxs-phone"><span> +91 9579896842</span></i></a>
                        </li>
                        <li>
                            <a href="mailto:rushikeshshrimanwar@gmail.com">
                                <i class="bx bxs-envelope"><span>rushikeshshrimanwar@gmail.com</span></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>
<script src="../../js/script.js"></script>
<script src="../../js/product.js"></script>



</html>