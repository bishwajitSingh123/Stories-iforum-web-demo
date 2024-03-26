<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories Website</title>
    <!-- bootstarp css cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- font aweesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/sm-6 mb-5.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include './partials/connect.php'; ?>
    <?php include './partials/header.php'; ?>

    <!-- php code -->

    <?php
    $id = $_GET['story_id'];
    $sql = "select * from `topics` where topic_id='$id' ";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $topic_name = $row['topic_name'];
        $topic_desc = $row['topic_desc'];
        $topic_image = $row['topic_image'];
    }


    ?>

    <!-- jumbotron -->
    <div class="container-fluid mb-4">
        <div class="jumbotron bg-warning rounded">
            <div class="container">
                <h1 class="display-4"><?php echo $topic_name;  ?></h1>
                <p class="lead"><?php echo $topic_desc;  ?></p>
                <button class="btn btn-dark mb-2"><a class="text-light" href="#reading" role="button">Continue Reading</a></button>

            </div>
        </div>
    </div>
    <!-- crousel -->
    <div class="container-fluid slider">

        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/img11.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/img10.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/img3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>

        </div>
    </div>


    <!-- rreading -->
    <div class="container" id="reading">
        <div class="container-fluid mb-4">
            <div class="jumbotron jumbotron-fluid bg-warning rounded p-0">
                <div class="container">
                    <h1 class="display-4 text-center">Enjoy Reading</h1>
                    <img src=<?php echo $topic_image;  ?> class="" alt="">
                    <p class="lead pb-3">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas dolorum cumque repudiandae aliquid tenetur fugit officiis autem? Magni, reiciendis esse. Maiores nostrum dicta ex voluptate alias veniam a dolorum quod illum veritatis iste cum vel, quam odio possimus recusandae at! Consectetur magni odio repellat ipsum illo. Laborum sunt, optio itaque voluptatum vitae veniam sint porro velit praesentium officia perferendis, id pariatur voluptatibus, quas vero reiciendis esse illo saepe. Atque vitae nostrum est cupiditate distinctio dolorem beatae quaerat sed. Quod, ex reprehenderit! Dolor repudiandae perspiciatis, quibusdam possimus dolorem, alias at cumque hic voluptatum nulla nihil, porro eligendi deserunt doloremque amet minus. Quam fugit eligendi exercitationem excepturi quo, ex libero magni! Rem exercitationem repellendus excepturi repellat expedita cumque esse ratione debitis recusandae at. Adipisci natus consequuntur nisi praesentium maiores odit nesciunt necessitatibus! Quam, aspernatur ipsa nulla asperiores cupiditate accusamus quibusdam magni fuga vero! Dolores nisi reprehenderit, quo asperiores eveniet officia cumque consequuntur provident ad fugiat optio minus aperiam libero omnis dolorum quasi facilis suscipit deleniti obcaecati reiciendis voluptate nulla eligendi quia architecto! Error, debitis maiores? Non fugiat modi nam facere temporibus eum commodi sint quis amet, consequatur dolor maiores, obcaecati sapiente? Nam perspiciatis nemo, ad commodi molestias fuga doloribus porro rem dolore!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- thank you text -->
    <div class="container-fluid mb-4">
        <h2 class="text-center display-4">Thank you for your timr 😘</h2>
    </div>

    <?php include './partials/footer.php'; ?>

</body>

</html>