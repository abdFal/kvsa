<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainanKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<!-- container -->
     <div class="container my-5">
        <div class="title my-4">
        <h2 class="display-6 fw-semibold fs-3"><i class="fa-solid fa-list-ul text-primary-emphasis"></i><span class="ms-3">Data Mainan</span></h2>
        </div>
        <!-- card -->
        <div class="card shadow-lg p-1 mb-5 bg-body rounded border-dark">
            <div class="card-body">
                <form class="d-flex" action="insert.php" method="post">
                <input class="form-control me-2" type="text" name="barangmainan" placeholder="Tambahkan Mainan?" aria-label="Search" autocomplete="off" required>
                <input class="form-control me-2" type="number" name="harga" placeholder="Tambahkan Harga?" aria-label="Search" autocomplete="off" required>
                <button class="btn btn-outline-warning" type="submit"><i class="fa-sharp fa-regular fa-plus"></i></button>
                </form>
            </div>
        </div>
        <?php
            include('config.php');
            $alldata = mysqli_query($connect, "SELECT * FROM barangmainan");
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($alldata)) {
                ?>
                    <tr class="tables">
                        <td style="vertical-align: middle; width :4%" scope="row"><?php echo $row['Id']?></th>
                        <td style="vertical-align: middle"><?php echo $row['nama']?></td>
                        <td style="vertical-align: middle"><?php echo $row['harga']?></td>
                        <td style="width :5%"><a href="edit.php?Id=<?php echo $row['Id']?>" class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square mb-2"></i></a></td>
                        <td style="width :5%"><a href="delete.php?Id=<?php echo $row['Id']?>" class="btn btn-outline-danger"><i class="fas fa-trash mb-2"></i></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>