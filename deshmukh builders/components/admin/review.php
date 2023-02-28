<?php

include '../connect.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM review WHERE id = '$id';";
    $delete = mysqli_query($conn, $sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/new_style.css" />
    <link rel="stylesheet" href="../../css/new_navbar.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" /> -->
    <title>Edit-Review</title>
</head>

<body>


    <header class="header">
        <a href="../../index.php" class="logo"><img src="../../images/Deshmukha Builders logo-1.png" alt=""></a>

        <nav class="navbar">
            <a href="../../index.php">home</a>
            <a href="continueProject.php">a-Continue Project</a>
            <a href="pastProject.php">a-Complited Project</a>
            <a href="#">a-reviews</a>
            <a href="continueProject.php">On-Going Project</a>
            <a href="pastProject.php">Complited Project</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div style="display: none" id="info-btn" class="fas fa-info-circle"></div>
            <div style="display: none" id="search-btn" class="fas fa-search"></div>
            <div style="display: none" id="login-btn" class="fas fa-user"></div>
        </div>
    </header>

    <?php
    $select = mysqli_query($conn, "SELECT * FROM review");
    ?>
    <div class="productDisplay">
        <table class="product-display-table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>number</th>
                    <th>review</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['des'] ?></td>
                    <td>
                        <a href="review.php?delete=<?php echo $row['id'] ?>" class="delete"> <i class="fas fa-trash"></i>delete</a>
                    </td>
                </tr>
            <?php }; ?>
        </table>
    </div>

    <script src="../../js/script.js"></script>
</body>

</html>