<?php
$conn = mysqli_connect() or die('Connection failed');
if (isset($_POST['login'])) {
    $query = "SELECT * FROM users WHERE u_email='$_POST[u_email]'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $result_fetch = mysqli_fetch_assoc($result);
            if ($_POST['u_pass'] == $result_fetch['u_pass']) {
                $_SESSION['u_name'] = $result_fetch['u_name'];
                header("location: main.php");
            } else {
                echo "
                <script>
                alert('Password incorrect')
                window.location.href='index.php';
                </script>
                ";
            }
        } else {
            echo "
            <script>
            alert('Email or Password incorrect')
            window.location.href='index.php';
            </script>
            ";
        }
    }
}
if (isset($_POST['register'])) {
    $user_exist = "SELECT * FROM users WHERE u_email='$_POST[u_email]'";
    $result = mysqli_query($conn, $user_exist);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "
            <script>
            alert('Email already exists')
            window.location.href='index.php';
            </script>
            ";
        } else {
            $query = "INSERT INTO users(u_name, u_email, u_pass) VALUES ('$_POST[u_name]','$_POST[u_email]','$_POST[u_pass]')";
            if (mysqli_query($conn, $query)) {
                echo "
                <script>
                alert('User registered successfully')
                window.location.href='index.php';
                </script>
                ";
            } else {
                echo "
                <script>
                alert('cannot register')
                window.location.href='index.php';
                </script>
                ";
            }
        }
    } else {
        echo "
        <script>
        alert('cannot run query')
        window.location.href='index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login/signup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudfl are.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-color: #24243d;
        justify-content: center;
    }

    .navbar a {
        pointer-events: none;
    }

    li {
        margin: 0 10px 0 10px;
        border-bottom: 2px solid black;
    }

    a {
        text-decoration: none;
    }

    .navilink:hover {
        text-decoration: none;
        transition: 200ms;
        padding-bottom: 2px;
        border-bottom: 2px solid white;
    }

    .log,
    .reg {
        background-color: transparent;
    }

    .log:hover,
    .reg:hover {
        text-decoration: none;
        transition: 200ms;
        background-color: rgb(54, 54, 54);
    }

    .main_login {
        display: none;
        position: absolute;
        margin: 5% 0 0 37%;
        width: 350px;
        height: 350px;
        overflow: hidden;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 5px 20px 50px #000;
    }

    .main_login .signup {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .main_login label {
        color: #fff;
        font-size: 2.3em;
        justify-content: center;
        display: flex;
        margin: 60px;
        font-weight: bold;
        cursor: pointer;
        transition: .5s ease-in-out;
    }

    .main_login input {
        width: 60%;
        height: 40px;
        background: #e0dede;
        justify-content: center;
        display: flex;
        margin: 20px auto;
        padding: 10px;
        border: none;
        outline: none;
        border-radius: 5px;
    }

    .main_login button {
        width: 60%;
        height: 40px;
        margin: 10px auto;
        justify-content: center;
        display: block;
        color: #fff;
        background: #6342a0;
        font-size: 1em;
        font-weight: bold;
        margin-top: 20px;
        border: none;
        border-radius: 5px;
        transition: 0.15s ease-in;
        cursor: pointer;
    }

    .main_login h2 {
        color: #3c3c70;
        font-size: 2.3em;
        justify-content: center;
        display: flex;
        margin: 40px;
        font-weight: bold;
    }

    .main_login button:hover {
        background: #6d44b8;
    }

    .main_login .login {
        position: relative;
        width: 100%;
    }

    .main_register {
        margin: 5% 0 0 37%;
        position: absolute;
        width: 350px;
        height: 400px;
        overflow: hidden;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 5px 20px 50px #000;
        display: none;
    }

    .main_register .signup {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .main_register h2 {
        color: #3c3c70;
        font-size: 2.3em;
        justify-content: center;
        display: flex;
        margin: 40px;
        font-weight: bold;
    }

    .main_register input {
        width: 60%;
        height: 40px;
        background: #e0dede;
        justify-content: center;
        display: flex;
        margin: 20px auto;
        padding: 10px;
        border: none;
        outline: none;
        border-radius: 5px;
    }

    .main_register button {
        width: 60%;
        height: 40px;
        margin: 10px auto;
        justify-content: center;
        display: block;
        color: #fff;
        background: #6342a0;
        font-size: 1em;
        font-weight: bold;
        margin-top: 20px;
        border: none;
        border-radius: 5px;
        transition: 0.15s ease-in;
        cursor: pointer;
    }

    .main_register button:hover {
        background: #6d44b8;
    }
</style>

<body>
    <header class="" style="background-color: #F05941;">
        <img class="img-fluid mt-5" src="./media/layer.png" alt="" height="100px">
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon m-2"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item m-2">
                        <a class="navilink text-white" aria-current="page" href="../main.php">Home</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="navilink text-white" href="../blog.php">Blogs</a>
                    </li>

                    <li class="nav-item m-2">
                        <a class="text-white" href="../bloggers.php">Bloggers</a>
                    </li>

                    <li class="nav-item m-2">
                        <a class="navilink text-white" href="../photos.php">Gallery</a>
                    </li>

                    <li class="nav-item dropdown m-2">
                        <a class="navilink dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Post
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-white bg-black p-2 mb-2" href="../post_blog.php">Blog</a></li>
                            <li><a class="dropdown-item text-white bg-black p-2 mb-2" href="../blog.php">Photo</a></li>
                        </ul>
                    </li>
                </ul>
                <button class="log text-white border border-light rounded p-2 m-2 float-right" onclick="showForm('login')" style="right: 100px; top: 10px;">Login</button>
                <button class="reg text-white border border-light rounded p-2 m-2 float-right" onclick="showForm('signup')" style="right: 10px; top: 10px;">Sign up</button>
            </div>
        </div>
    </nav>


    <div class="main_login" id="login_popup">
        <div class="login">
            <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
                <h2>Login</h2>
                <input type="email" name="u_email" placeholder="Email" required>
                <input type="password" name="u_pass" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
            </form>
        </div>
    </div>

    <div class="main_register" id="register_popup">
        <div class="signup">
            <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
                <h2>Sign Up</h2>
                <input type="text" name="u_name" placeholder="User name" required>
                <input type="email" name="u_email" placeholder="Email" required>
                <input type="password" name="u_pass" placeholder="Password" required>
                <button type="submit" name="register">Sign up</button>
            </form>
        </div>
    </div>

    <script>
        function showForm(formType) {
            if (formType === 'login') {
                $('#login_popup').show();
                $('#register_popup').hide();
            } else if (formType === 'signup') {
                $('#register_popup').show();
                $('#login_popup').hide();
            }
        }

        $(document).ready(function() {
            $('.log').on('click', function() {
                showForm('login');
            });

            $('.reg').on('click', function() {
                showForm('signup');
            });
        });
    </script>
</body>
