<?php
include '../connect.php';

if (isset($_POST['add_project'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $location = $_POST['location'];
    $yt = $_POST['yt'];
    $shortDesc = $_POST['ShortDesc'];
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_upload = '../../uploaded_img/' . $image;
    $pdf = $_FILES['pdf']['name'];
    $pdf_tmp_name = $_FILES['pdf']['tmp_name'];
    $pdf_upload = '../../uploaded_img/pdf/' . $pdf;

    $sql = "INSERT INTO `project`(`id`, `name`, `des`, `image`, `location`, `yt`, `short`, `pdf`) VALUES ('$id','$name','$desc','$image','$location','$yt','$shortDesc','$pdf')";
    $upload = mysqli_query($conn, $sql);

    if ($upload) {
        move_uploaded_file($image_tmp_name, $image_upload);
        move_uploaded_file($pdf_tmp_name, $pdf_upload);
        $msg[] = "Information is inserted successfully";
    } else {
        $msg[] = "Information is not inserted successfully";
    }
}


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM project WHERE id = $id";
    $delete = mysqli_query($conn, $sql);
}

?>
<?php
session_start();
ob_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: continueLoginForm.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="../../css/new_style.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <link rel="stylesheet" href="../../css/new_navbar.css">
    <title>(ADMIN) On-Going project</title>
</head>

<body>
    <header class="header">
        <a href="../../index.php" class="logo"><img src="../../images/Deshmukha Builders logo-1.png" alt=""></a>

        <nav class="navbar">
            <a href="../../index.php">home</a>
            <a href="#">a-On_Going   Project</a>
            <a href="pastProject.php">a-Complited Project</a>
            <a href="review.php">a-reviews</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div style="display: none" id="info-btn" class="fas fa-info-circle"></div>
            <div style="display: none" id="search-btn" class="fas fa-search"></div>
            <div style="display: none" id="login-btn" class="fas fa-user"></div>
        </div>
    </header>

    <?php
    if (isset($msg)) {
        foreach ($msg as $information) {
            echo '<span class="msg">' . $information . '</span';
        }
    }
    ?>

    <div class="container">
        <div class="admin-product-form-container">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <h3>add <span style="color: #002245;"> On-Going </span> Project</h3>
                <input type="number" required placeholder="Enter the project id" name="id" class="box">
                <input type="text" required placeholder="enter project Title" name="name" class="box">
                <input type="text" required placeholder="enter project location" name="location" class="box">
                <input type="text" required placeholder="Enter Youtube link" name="yt" class="box">

                <textarea name="ShortDesc" required cols="30" rows="5" class="box" placeholder="enter project short description"></textarea>
                <textarea name="desc" required cols="30" rows="10" class="box" placeholder="enter project description"></textarea>


                <label style="font-size: 1.8rem;
                margin-left: 1rem;
                color: #011b1b;
                text-transform: capitalize;" for="">Add image</label>
                <input type="file" required placeholder="Add image" name="image" class="box">
                <label style="font-size: 1.8rem;
                margin-left: 1rem;
                color: #011b1b;
                text-transform: capitalize;" for="">Add pdf</label>
                <input type="file" required placeholder="Add image" name="pdf" class="box">


                <input type="submit" required class="btn" name="add_project" value="add project">
            </form>
        </div>

        <?php
        $select = mysqli_query($conn, "SELECT * FROM project");
        ?>
        <div class="productDisplay">
            <table class="product-display-table">
                <thead>
                    <tr>
                        <th>Project id</th>
                        <th>Project image</th>
                        <th>Project Title</th>
                        <th>Project Description</th>
                        <th>action</th>
                    </tr>
                </thead>
                <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><img src="../../uploaded_img/<?php echo $row['image'] ?>" alt="this is an img" height="100"></td>
                        <td><?php echo $row['name'] ?></td>
                        <td style="height: 25rem; width: 70rem;"> <?php echo $row['short'] ?></td>
                        <td>
                            <a href="ContinueUpdatePage.php?edit=<?php echo $row['id'] ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                            <a href="continueProject.php?delete=<?php echo $row['id'] ?>" class="delete"> <i class="fas fa-trash"></i>delete</a>
                        </td>
                    </tr>
                <?php }; ?>
            </table>


            <form action="" method="post">
                <a href="loginForm.php"><button class="btn" name="logout">Logout</button></a>
            </form>

        </div>
    </div>
    <?php
    if (isset($_POST['logout'])) {
        session_destroy();
        header("location: continueProject.php");
        ob_end_flush();
    }
    ?>

</body>
<script src="../../js/script.js"></script>

</html>