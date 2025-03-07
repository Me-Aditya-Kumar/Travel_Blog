<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudfl are.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        video {
            position: absolute;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
            border-bottom: 100px solid transparent;
            border-image: url(./media/ad.png) 500 round;
        }

        .overlay {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay h1 {
            background: #000;
            color: tan;
            font-weight: 600;
            margin: 2rem 3rem 0;
            mix-blend-mode: overlay;
            padding: 5px 15px;
            text-align: center;
        }

        .exp:hover {
            text-decoration: none;
            color: rgb(255, 255, 255);
        }

        .exp {
            text-decoration: none;
            color: tan;
        }

    </style>
</head>

<body>
    <?php
    include './includes/headnav.php';
    ?>

    <video playsinline autoplay muted loop>
        <source src="./media/mountainl.mp4" type="video/mp4">
    </video>
    <div class="overlay" style="min-height:100vh ;">
        <h1>DREAM . <a href="../blog.php" class="exp">EXPLORE</a> . DISCOVER</h1><br>
    </div>

    <div id="car1" class="carousel slide carousel-fade " data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active mt-4">
                <img src="https://travel.destinationcanada.com/_next/image?url=https%3A%2F%2Fadmin.destinationcanada.com%2Fsites%2Fdefault%2Ffiles%2F2023-06%2FQC-Chateau-Frontenac_hero.jpg&w=1920&q=75" alt="image" width="80%" height="500" class="mx-auto" style="display: block;">
                <div class="carousel-caption">
                    <h3>Quebec City and around</h3>
                    <p>Are there ghosts in Château Frontenac? If so, we could get help from Scooby-Doo When we left
                        Ottawa we headed northeast towards Quebec. It was a bit too far for us to drive all the way in
                        one day so we stopped for the night in a motel, Motel Normandie in Louiseville. It was an
                        awesome place. Staying there felt like getting warped back in time to the 1950-ies...</p>
                </div>
            </div>
            <div class="carousel-item mt-4">
                <img src="https://images.squarespace-cdn.com/content/v1/5f4bbf11a23dbb3ab86d9729/1598890567587-EO4ZOCPODCRLM3D375Q1/Allen-estate-ledgers-cross-monuments-mount-hope-cemetery.png" alt="Berlin" width="80%" height="500" class="mx-auto" style="display: block;">
                <div class="carousel-caption">
                    <h3>Hello, Great Grandma</h3>
                    <p>Established by the British colonial government in the 1920s, the 200 hectare Bukit Brown Cemetery
                        nestled in the center of Singapore is the final resting place for many of Singapore’s prominent
                        ethnic Chinese pioneers. Rather interestingly, the class conscious British were horrified that
                        many poor Chinese were not buried after they died, so they earmarked the lower reaches of the
                        cemetery as a "paupers' section...</p>
                </div>
            </div>
            <div class="carousel-item mt-4">
                <img src="https://media.audleytravel.com/-/media/images/home/africa/tanzania/activities/shutterstock_1229213020_stone_town_zanzibar_3000x1000.jpg?q=79&w=1920&h=640" alt="Zurich" width="80%" height="500" class="mx-auto" style="display: block;">
                <div class="carousel-caption">
                    <h3> Tanzania - Stone Town</h3>
                    <p>At 9:00 (a luxuriously late start), we climbed onto a large air-conditioned bus. No more safari
                        trucks! Our drive took us through the forest, where Taib, our local guide, described the special
                        growing conditions in Zanzibar. Many kinds of trees grow interspersed on the same land, and they
                        grow tallest in the island centre, which is a rainforest....</p>
                </div>
            </div>
            <div class="carousel-item mt-4">
                <img src="https://notanotherbackpacker.com/wp-content/uploads/2023/03/nachtleben-in-koh-lanta.jpg" alt="Venice" width="80%" height="500" class="mx-auto" style="display: block;">
                <div class="carousel-caption">
                    <h3>Christmas and New Year on Ko Lanta, Thailand</h3>
                    <p>That time of year has come around again when we feel the need to escape the British winter
                        weather. This time we were lucky enough to be able to catch up with Sharon , Scott, Kyla and
                        Jake. They were on a two week vacation for the Christmas...</p>
                </div>
            </div>

            <a class="carousel-control-prev" href="#car1" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
            </a>
            <a class="carousel-control-next" href="#car1" data-slide="next">
                <span class="carousel-control-next-icon " aria-hidden="true" style="filter: invert(1);"></span>
            </a>
        </div>

        <?php
        include './includes/footer.php'
        ?>
</body>

</html>