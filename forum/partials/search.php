<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Search results</title>
  </head>
  <body>
  
    <?php include '_dbconnect.php'?>
    <div class="container mt-5">
    <h3 class="text-success mb-4">Search results for "<em><?php echo $_GET['search']?></em>"</h3>
    <div class="container mt-5" id="ques">
        

        <div class="alert alert-success" role="alert">
<div class="row">
<?php
$s=$_GET['search'];
$noResult=true;
$sql="SELECT * FROM threads WHERE MATCH (thread_title,thread_desc) AGAINST ('$s' IN NATURAL LANGUAGE MODE)";

$result=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_assoc($result)) {
    $noResult=false;
    # code...
    
    echo'<div class="col-md-9">
    <a href="/forum/thread.php?threadid=15" style="text-decoration:none;"><h3 class="my-3 text-success">'.$row['thread_title'].'</h3></a>
    <p>'.$row['thread_desc'].'</p>
</div>';
}

if ($noResult) {
    # code...
    echo'<div class="col-md-9">
    <p class="lead">No results found.</p>
</div>';

}


?>
    
</div>
</div>



    </div>
    
    </div>
   

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>



<!-- ALTER TABLE threads ADD FULLTEXT(`thread_title`,`thread_desc`) -->
<!-- sql query to enable full text search on specific columns. -->