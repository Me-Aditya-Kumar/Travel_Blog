<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudfl are.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <title>Travel Blog</title>
    <style>

.card {
            border: none;
            
        }

        .banner {
            position: absolute;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
            border-bottom: 100px solid transparent;
            border-image: url(./ad.png) 500 round;
        }

        .overlay {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay h1 {
            font-size: 70px;
            background-color: #ffffff;
            background: #ffffff;
            color: rgb(0, 0, 0);
            font-weight: 800;
            margin: 2rem 3rem 0;
            mix-blend-mode: lighten;
            padding: 5px 15px 5px 15px;
            text-align: center;
        }

        .container {
            position: relative;
            width: 50%;
        }

        .image {
            display: block;
            width: 100%;
            height: auto;
        }

        .over {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: #1d1d1d76;
        }

        .cont:hover .over {
            opacity: 1;
        }

        .text {
            color: rgb(255, 255, 255);
            font-size: 25px;
            font-weight: bolder;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
</head>

<body>
<?php
    include './includes/headnav.php';
    ?>
    <img class="banner" src="./media/pexels-alex-andrews-861440.jpg" alt="">
    <div class="overlay" style="min-height:100vh ;">
        <h1>Image Gallery</h1>
    </div>

    <div class="con">
        <div class="row">
            <?php
            $conn = mysqli_connect('129.154.240.37', 'aditya', 'password', 'database',3306) or die('Connection failed');
            $sql = "SELECT * FROM photos";
            $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-md-4">
                        <div class="card m-3 cont">
                            <img class="card-img-top image" src="<?php echo $row['photo_url']; ?>" alt="Card image cap">
                            <div class="card-body over">
                                <h5 class="text"><?php echo $row['photo_title']; ?></h5>
                                <p class="text-right text-white"><?php echo $row['photo_date']; ?></p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <?php include './includes/footer.php'; ?>
</body>

<script>
    $(document).ready(function () {
        $("img").mouseenter(function () {
            $("h5").css("display", "inline");
        })
    });
</script>

</html>