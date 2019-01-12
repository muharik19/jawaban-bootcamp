<?php

    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "hobby");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows   = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

    // ambil data dari tabel hobby / query
    $result = query("SELECT categories.name, GROUP_CONCAT(hobbies.name SEPARATOR ', ') AS person_hobbies FROM categories, hobbies WHERE categories.id = hobbies.person_id GROUP BY categories.id");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Daftar Hobbies</title>
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
            <h3>Daftar Hobbies</h3>

            <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Hobbies</th>
                </tr>

                <?php $i = 1; ?>
		        <?php foreach( $result as $row ) { ?>

            </thead>
            <tbody>
                <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><?= $row["name"]; ?></td>
                    <td><?= $row["person_hobbies"]; ?></td>
                </tr>

                <?php $i++; ?>
		        <?php } ?>
                
            </tbody>
        </table>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
