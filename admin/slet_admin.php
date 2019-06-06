<?php
session_start();
include "../include/connect.php";
include "../phpcode/crud.php";
$id = $_GET['id'];
$admin = getAdminById($id);
$row = mysqli_fetch_assoc($admin);
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <title>Blog | Admin</title>
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/css.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:400,600" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/tinyicon.png">
</head>
<body class="flex-column center">
    <section class="content flex">
        <?php include "menu.php"; ?>
        <div class="admin-content p-10 m-tb-20 flex-column center">

            <h2>Slet administrator</h2>
            <h3 class="p-10">Er du sikker på at du vil slette følgende administrator?</h3>
            <h4><?php echo $row['navn'];?> med mailen <?php echo $row['email']; ?></h4>

            <div class="flex between w-50 m-tb-10">
                <h4><a class="back" href="post_slet_admin.php?id=<?php echo $row['id']; ?>">Ja</a></h4>
                <h4><a class="back" href="se_admin.php">Nej</a></h4>
            </div>

        </div>
    </section>
</body>
</html>
