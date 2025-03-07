<style>li {
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
        .log:hover,
        .reg:hover {
            text-decoration: none;
            transition: 200ms;
            background-color: rgb(54, 54, 54);
        }</style>
<header class="" style="background-color: #F05941;">
        <img class=" img-fluid mt-5 " src="./media/layer.png" alt="" height="100px">
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon m-2"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ">
                    <li class="nav-item m-2" >
                        <a class="navilink text-white" aria-current="page" href="../main.php">Home</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="navilink text-white" href="../blog.php">Blogs</a>
                    </li>
                    
                    <li class="nav-item m-2">
                        <a class="navilink text-white" href="../bloggers.php">Bloggers</a>
                    </li>

                    <li class="nav-item m-2">
                        <a class="navilink text-white" href="../photos.php">Gallery</a>
                    </li>

                    <li class="nav-item dropdown m-2">
                        <a class="navilink dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Post
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-white bg-black p-2 mb-2" href="../post_blog.php">Blog</a></li>
                            <li><a class="dropdown-item text-white bg-black p-2  mb-2" href="../post_photo.php">Photo</a></li>
                        </ul>
                    </li>

                </ul>
                <a class=" text-white p-2 m-2 float-right"  href="../register.php"
                    style="right: 10px; top: 10px;">Register as a Blogger</a>
                <a class="reg text-white border border-light rounded p-2 m-2 float-right" href="../index.php"
                    style="right: 10px; top: 10px;">Log out</a>
            </div>
        </div>
    </nav>