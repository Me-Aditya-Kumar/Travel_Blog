<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudfl are.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
    </style>
</head>

<body>
    <?php
    include './includes/headnav.php';
    ?>
    <img class="banner" src="./media/pexels-quang-nguyen-vinh-2171277.jpg" alt="">
    <div class="overlay mt-n5" style="min-height:100vh;">
        <h1>Bloggers</h1>
    </div>
    <?php
    $conn = mysqli_connect('129.154.240.37', 'aditya', 'password', 'database',3306) or die('Connection failed');
    $sql = " SELECT * FROM bloggers ";
    $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <div class="" style="background-color: #eee;">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-12 col-xl-4">

                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body text-center">
                                    <div class="mt-3 mb-4">
                                        <img src="<?php echo $row['blogger_photo_url']; ?>" class="rounded-circle img-fluid" style="width: 100px;" />
                                    </div>
                                    <h4 class="mb-2"><?php echo $row['blogger_name']; ?></h4>
                                    <p class="text-muted mb-4">Travel Blogger <span class="mx-2">|</span><?php echo $row['blogger_join_date']; ?>
                                    </p>
                                    <div class="mb-4 pb-2">
                                        <a type="button" class="btn btn-dark" href="<?php echo $row['blogger_facebook_url']; ?>" target="_blank">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAADJklEQVR4nNXXS4iWVRgH8NGarMaxojIQNJJCcJcK0c0kxUWCKSmRJm4cN63yElGLlhllteq2iEhNCEztQtpC1KCL0kJdRIscghYG3WbhotUvnub56Mzr+77f900ziw4ceM85z+2c5/9c3oGB/9vAHDyEzdiR80k8jOHpUjoL23Ecf+Ik9mFvzvg+hbGkGcE1U6F4JrZgFEexHte30A9hHT7GxeSdMVnlwynoG9yfezfjKazqgf++5D3ct2uwAOfxJgYxD7fgcbyLJT3KGUwZF0JmPze/gN253ohfsLqvW0yUuTsvNNyLz4+E1bmO5/6x7cYBNtybhsZchcU1dG8ljma2GbAVX+fTbUjw3d5AOwPP4Nf09Yc5v8DP4a4Kfcj8NsK3LdRGEzzh80tY2mLs6/gSd9ScvYhna/YfzOiYVSdwe6A+v9/AnhblS/BTJKWG81oD8uyTyBN1B8fxKG7Ab5jbYsBreK6yd2vmiY0ZersaeB/DsTrkj2UiuQrLmpQnfTz98goQRzNvBA7ew/wG3tmp69/XM57HT7YprQj5HouK9QM40wf/6agn5cYm7O9DQITmwmK9NkKsD/4DobPciIq2twvTpyaO0oDATjnGOum7oFnUcQtenoAR7IrNLgZcbitEFdqojlsrGPkK7+c6KuiOkmFzNxf0acBZ3NNy/gGeKDdWdANhrwZkhgwX3FjJGy/hrlxH77CiZJqTjcZQi+BIr4eKlHtbcbas2P8IP1R45+L5rBOdMJxdVXAsEkmLAQuLgnOpBoRn8yxqyLxKjilp11+RiGJkG/VPKp5EGIYBRxpol2Y5X1tE00hTMbpYDZ//YgDuLFw8VBSj+n7ReHcbpXVwigw4gReKUDwTfWK3huRopyGZrAGJ+Lj1TViZe28nQNubVOOgOd9UzXo04B08Xax3Zps3EfldmtJgeCWq4yQMGEyfX41Xca7nprTyEoczvO7uFwOZfL7LHrO3mzdktS2pMMJnDa5rMgDX4hF8ljSbWpvQXkcieCS7pt/xFw4m2PZkEotM+gc+x7Yp+TUbqDcmXBO1o/NzGgCL7+XT9nM6neNvhNUX+IEWVK8AAAAASUVORK5CYII=" alt="">
                                        </a>
                                        <a type="button" class="btn btn-dark " href="<?php echo $row['blogger_twitter_url']; ?>" target="_blank">
                                            <img src="https://img.icons8.com/pulsar-line/32/FFFFFF/twitterx.png" alt="">
                                        </a>
                                        <a type="button" class="btn btn-dark" href="<?php echo $row['blogger_instagram_url']; ?>" target="_blank">
                                            <img src="https://img.icons8.com/dotty/32/FFFFFF/instagram-new.png" alt="">
                                        </a>
                                    </div>
                                    <a class="btn btn-primary btn-rounded btn-lg text-white" href="<?php echo $row['blogger_blogs_url']; ?>" target="_blank">
                                        View Blogs
                                    </a>
                                    <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        <div>
                                            <p class="mb-2 h5"><?php echo $row['blogger_followers_count']; ?></p>
                                            <p class="text-muted mb-0">Followers</p>
                                        </div>
                                        <div class="px-3">
                                            <p class="mb-2 h5"><?php echo $row['blogger_blogs_count']; ?></p>
                                            <p class="text-muted mb-0">Blogs</p>
                                        </div>
                                        <div>
                                            <p class="mb-2 h5"><?php echo $row['blogger_photos_count']; ?></p>
                                            <p class="text-muted mb-0">Photos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
 <?php
 include './includes/footer.php'
 ?>
</body>

</html>