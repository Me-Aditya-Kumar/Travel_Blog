<?php
if(isset($_POST['register'])){
echo $blogger_name = $_POST['uname'];
echo $blogger_date = $_POST['date'];
echo $blogger_photo_url = $_POST['photo_url'];
echo $blogger_twitter_url= $_POST['twitter_url'];
echo $blogger_facebook_url = $_POST['facebook_url'];
echo $blogger_instagram_url = $_POST['instagram_url'];
$conn = mysqli_connect() or die('Connection failed');
$sql = " INSERT INTO bloggers(blogger_name,blogger_join_date,blogger_photo_url,blogger_twitter_url,blogger_facebook_url,blogger_instagram_url) VALUES ('{$blogger_name}','{$blogger_date}','{$blogger_photo_url}','{$blogger_twitter_url}','{$blogger_facebook_url}','{$blogger_instagram_url}') ";
$result = mysqli_query($conn, $sql) or die("Query unsuccessful");
header("Location: https://localhost/bloggers.php");
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #24243d;
    }
    .card {
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }
    
    .form-control{
        background-color: #e0dede;
        margin: 0 0 10px 0;
    }
    .card-header {
        color: #3c3c70;
    font-size: 2.3em;
    justify-content: center;
    display: flex;
    margin: 60px;
    font-weight: bold;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
    .btn-link {
      color: #007bff;
    }
    .btn-link:hover {
      color: #0056b3;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center">
            Register
          </div>
          <div class="card-body">
            <form class="post-form" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
                <label for="username">Username</label>
                <input type="text" name="uname" class="form-control" id="username" placeholder="Enter username">

                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" id="date">

                <label for="photoUrl">Photo URL</label>
                <input type="url" name="photo_url" class="form-control" id="photoUrl" placeholder="Enter photo URL">

                <label for="twitterUrl">Twitter URL</label>
                <input type="url" name="twitter_url" class="form-control" id="twitterUrl" placeholder="Enter Twitter URL">

                <label for="facebookUrl">Facebook URL</label>
                <input type="url" name="facebook_url" class="form-control" id="facebookUrl" placeholder="Enter Facebook URL">

                <label for="instagramUrl">Instagram URL</label>
                <input type="url" name="instagram_url" class="form-control" id="instagramUrl" placeholder="Enter Instagram URL">
              <button name="register" type="submit" class="btn btn-primary btn-block">Register</button>
              <div class="text-center mt-3">
                <a href="#" class="btn btn-link">Already a user?</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
