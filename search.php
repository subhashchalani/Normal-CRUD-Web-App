<?php
include'dbcon.php';
$text = $_POST['text'];
$sqlGetDataCount = "SELECT * FROM `employees` WHERE `name`='". $text ."' or `role`='". $text ."' OR `email`= '". $text ."'";
$result = $conn -> query($sqlGetDataCount);

// Get Row Count

$rowCount = $result ->num_rows;

// Get Data Array

$dataList = $result -> fetch_all();

//echo $rowCount;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CyberElysium Full Stack Developer Internship CRUD Sample</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Type-Heading.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <h1 class="text-center" data-aos="fade-up">CyberElysium Internship CRUD Sample</h1>
        <hr class="mt-0">
    </div>
    <div class="row justify-content-center">
        <div class="col-xl-10 col-xxl-9">
            <div class="card shadow">
                <div class="card-header d-flex flex-wrap justify-content-center align-items-center justify-content-sm-between gap-3">

                    <!-- Search Bar -->

                    <form action="search.php" method="post" >
                        <div class="input-group input-group-sm w-auto" style="min-width: 80%;max-width: 100%;">

                            <input class="form-control" name="text" type="text" placeholder="Search Some Data">
                            <button class="btn btn-outline-primary btn-sm" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search mb-1">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                </svg>
                            </button>

                        </div>
                    </form>

                        <!-- Add new Item -->
                        <a href="add.php"> <button class="btn btn-primary" type="button" style="border-radius: 18px;border-color: var(--bs-indigo);">Add New</button></a>
                </div>

                <!-- Data Table -->

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Role</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            for ($x = 1; $x <= $rowCount;$x++){

                                // Print Data
                                $y = $x - 1 ;
                                echo '<tr>
                                    <td class="text-truncate" style="max-width: 200px;">', $dataList[$y][0] ,'</td>
                                    <td class="text-truncate" style="max-width: 200px;">', $dataList[$y][1] ,'</td>
                                    <td>', $dataList[$y][2] , '</td>
                                    <td class="text-center">
                                    <form action="updateform.php" method="post">
                                        <input type="hidden" name="mailId" value="', $dataList[$y][0] ,'">
                                        <button class="btn btn-primary" type="submit">
                                        <i class="far fa-edit"></i>
                                        </button>
                                    </form>
                                    <form action="delete.php" name="mailId" method="post"> 
                                        <input type="hidden" name="mailId" value="', $dataList[$y][0] ,'">
                                        <button class="btn btn-danger" type="submit" onclick="myFunction()">
                                        <i class="icon ion-android-delete"></i>
                                        </button>
                                    </form>
                                    </td>
                                </tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/Animated-Type-Heading.js"></script>
    <script type="text/javascript"></script>
    <script>
        function myFunction() {
            let text = "You want to delete This User. If it's mistake please close this tab.";
            alert(text);
        }
    </script>
</body>

</html>