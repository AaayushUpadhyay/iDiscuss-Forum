<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Welcome to iDiscuss - Coding Forums</title>
    <style>
    #ques{
        min-height:633px;
    }
    #footer{
        padding:2px;
    }
    </style>
</head>

<body>

    <?php include 'partials/_nav.php'?>
    <?php include 'partials/_dbconnect.php'?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider-3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container mb-3">
        <h2 class="text-center">Welcome to iDiscuss - Browse Categories</h2>
        <div class="row" id="ques">
        <?php
          
          $sql ="SELECT * FROM `categories`";
          $result=mysqli_query($conn,$sql);
          while ($row=mysqli_fetch_assoc($result)) {
            echo '<div class="col-md-4 my-3">
            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/500x400/?'.$row['category_name'].',programming" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">'.$row['category_name'].'</h5>
                    <p class="card-text">'.substr($row['category_description'],0,70).'...</p>
                    <a href="threadlist.php?cid='.$row['category_id'].'" class="btn btn-primary">View Threads</a>
                </div>
            </div>
        </div>';
        }
         
        
        
        
        
        ?>
            






        </div>
    </div>

    <?php include 'partials/_footer.php'?>


    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</body>

</html>