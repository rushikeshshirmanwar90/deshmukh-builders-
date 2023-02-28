<?php
include '../connect.php';

$id = $_GET['edit'];

if (isset($_POST['update_project'])) {
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

    if (empty($id) || empty($name) || empty($desc) || empty($image)) {
        $msg[] = 'Please Fill The All Information';
    } else {
        $sql = "UPDATE past_project SET name = '$name', des = '$desc', image = '$image', location = '$location', yt = '$yt', short = '$shortDesc', pdf = '$pdf'  WHERE id = '$id'";
        $update = mysqli_query($conn, $sql);

        if ($update) {
            move_uploaded_file($image_tmp_name, $image_upload);
            move_uploaded_file($pdf_tmp_name, $pdf_upload);
            $msg[] = "Information is updated successfull";
        } else {
            $msg[] = "Information is not updated successfull";
        }
    }
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
    <title>past update project</title>
</head>

<body>
    <header class="header">
        <a href="../../index.php" class="logo">Our<span>LOGO</span></a>

        <nav class="navbar">
            <a href="../../index.php">home</a>
            <a href="#">a-Continue Project</a>
            <a href="pastProject.php">a-Complited Project</a>
            <a href="review.php">a-reviews</a>
            <a href="../projects/onGoingProject.php">On-Going Project</a>
            <a href="../projects/complitedProject.php">Complited Project</a>
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
        <div class="admin-product-form-container center">
            <?php
            $select = mysqli_query($conn, "SELECT * FROM past_project WHERE id = '$id' ");
            while ($row = mysqli_fetch_assoc($select)) {
            ?>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <h3>Update <span style="color: #f5bf23;"> PAST </span> Project</h3>
                    <input style="display: none;" type="number" required placeholder="Enter the project id" value="<?php echo $row['id'] ?>" name="id" class="box">

                    <input type="text" required placeholder="enter project Title" value="<?php echo $row['name'] ?>" name="name" class="box">
                    <input type="text" required placeholder="enter project location" name="location" value='<?php echo $row['location'] ?>' class="box">
                    <input type="text" name="yt" class="box" required placeholder="Enter the youtube link" value="<?php echo $row['yt'] ?>">
                    <textarea name="ShortDesc" required cols="" rows="5" class="box" placeholder="enter project short description"> <?php echo $row['short']; ?> </textarea>
                    <textarea name="desc" required cols="30" rows="10" class="box" placeholder="enter project desc"> <?php echo $row['des'] ?> </textarea>


                    <label style="font-size: 1.8rem;
                margin-left: 1rem;
                color: #011b1b;
                text-transform: capitalize;" for="">Update image</label>
                    <input type="file" required name="image" class="box">
                    <label style="font-size: 1.8rem;
                margin-left: 1rem;
                color: #011b1b;
                text-transform: capitalize;" for="">Update pdf</label>
                    <input type="file" required name="pdf" class="box">


                    <input type="submit" required class="btn" name="update_project" value="Update Project">
                    <a href="pastProject.php"><input type="button" required class="btn" value="go Back"></a>
                </form>
        </div>
    </div>
<?php }; ?>
</body>
<script src="../../js/script.js"></script>

</html>