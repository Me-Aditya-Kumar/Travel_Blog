<?php
if(isset($_POST['post'])){
$conn = mysqli_connect('129.154.240.37', 'aditya', 'password', 'database',3306) or die('Connection failed');
echo $photo_title = $_POST['title'];
echo $photo_url = $_POST['photo_url'];
echo $photo_date = $_POST['date'];

$sql = "INSERT INTO photos(photo_title, photo_url, photo_date) VALUES ('{$photo_title}','{$photo_url}','{$photo_date}') ";
$result = mysqli_query($conn, $sql) or die("Query unsuccessful");
header("Location: https://localhost/photos.php");
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Blog</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url(./media/travel-hd-axhrsecphqby11wk.jpg);
            background-size: cover;

        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .form-control {
            background-color: #e0dede;
            margin: 0 0 10px 0;
        }

        .card-header {
            color: #3c3c70;
            font-size: 2.3em;
            justify-content: center;
            display: flex;
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
                        Post a Blog
                    </div>
                    <div class="card-body">
                        <form class="post-form" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" >

                            <label for="title">Title</label>
                            <input required type="text" name="title" class="form-control" id="title" placeholder="Enter Title">

                            <label for="date">Date</label>
                            <input required type="date" name="date" class="form-control" id="date">

                            <label for="photo_url">Photo URL</label>
                            <input required type="url" name="photo_url" class="form-control" id="photo_url" placeholder="Enter photo URL">

                            <button name="post" type="submit" class="btn btn-primary btn-block">Post</button>
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