<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit mainan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- connect -->
<?php
include('config.php');
$id = $_GET['Id'];
$getdata = mysqli_query($connect, "SELECT * FROM barangmainan WHERE Id=$id");
$row = mysqli_fetch_array($getdata)
?>

<div class="container my-5">
    <!-- card -->
        <div class="card shadow-lg p-1 mb-5 bg-body rounded border-dark">
            <div class="card-body">
                <form class="d-flex" action="update.php" method="post">
                <input class="form-control me-2" type="text" name="barangmainan" placeholder="Edit Mainan?" aria-label="Search" autocomplete="off" required value="<?php echo $row['nama']?>" >
                <input class="form-control me-2" type="number" name="harga" placeholder="Edit Harga?" aria-label="Search" autocomplete="off" required value="<?php echo $row['harga']?>">
                <button class="btn btn-outline-warning" type="submit"><i class="fa-solid fa-regular fa-check"></i></button>
                <input type="hidden" name="Id" value="<?php echo $row['Id']?>">
                </form>
            </div>
        </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
