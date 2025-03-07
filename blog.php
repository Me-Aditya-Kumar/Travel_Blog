<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudfl are.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
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
  <img class="banner" src="./media/wallpaperflare-cropped.jpg" alt="" />
  <div class="overlay" style="min-height: 100vh">
    <h1>Featured Blogs</h1>
  </div>
  <div class="container mt-5">
    <div class="row">
      <?php
      $conn = mysqli_connect('129.154.240.37', 'aditya', 'password', 'database',3306) or die('Connection failed');
      $sql = " SELECT * FROM blog ";
      $result=mysqli_query($conn, $sql) or die("Query unsuccessful");
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="col-lg-4">
          <div class="card">
            <img src=<?php echo $row['blog_img']; ?> class="card-img-top" alt="Waterfall" />
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $row['blog_title']; ?>
              </h5>
              <p class="card-text">
                <?php echo $row['blog_desc']; ?>

              </p>
              <a class="btn btn-primary" href=<?php echo $row['blog_url']; ?> >Read More</a>
              <p class="d-inline float-right">posted on <b><?php echo $row['blog_date']; ?></b> </p>
            </div>
          </div>
        </div>

      <?php
        }
      }
      ?>
    </div>
  </div>

  <?php
 include './includes/footer.php'
 ?>
</body>

</html>