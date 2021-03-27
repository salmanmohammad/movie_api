<?php
include("includes/topratedmovies.php");
$trm = new topratedmovies();

$movies = $trm->getTopRatedMovies();
$movies_array = json_decode($movies,true);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Top Rated Movies</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" />
        
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>
   
    <header class="header-area">
                
        <div id="home" class="header-hero bg_cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s" style="text-align: center;">Top Rated Movies</h3>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!--datatable-->
						<table id="movies_table" style="background-color:#ffff">
						<thead>
							<th>
								Image
							</th>
							<th>
								Title
							</th>
							<th>
								Description
							</th>
							<th>
								Release Date
							</th>
							<th>
								Rating
							</th>
						</thead>
						<tbody>
						
							<?php
							foreach($movies_array['results'] as $movie)
							{
							?>
							<tr>
								<td><img src="https://www.themoviedb.org/t/p/w220_and_h330_face/<?php echo $movie['poster_path']?>" width="100px"></td>
								<td><?php echo $movie['original_title']?></td>
								<td><?php echo $movie['overview']?></td>
								<td><?php echo $movie['release_date']?></td>
								<td><?php echo $movie['vote_average']?></td>
							</tr>
							<?php } ?>
						</tbody>
						</table>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>
<!--====== Jquery js ======-->
    <script src="https://ajax.googleapis.com//ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
	$(document).ready(function(){
		$("#movies_table").dataTable();
	});
	</script>
</body>
</html>
