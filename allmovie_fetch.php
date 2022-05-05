 <?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM add_movie WHERE status = '1'
	";
	
	if(isset($_POST["categroy"]))
	{
		$categroy_filter = implode("','", $_POST["categroy"]);
		$query .= "
		 AND categroy IN('".$categroy_filter."')
		";
	}
	if(isset($_POST["language"]))
	{
		$language_filter = implode("','", $_POST["language"]);
		$query .= "
		 AND language IN('".$language_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			if($row['action']== "running"){
			$output .= '
			<div class="col-lg-4 col-md-5 col-sm-6">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:1px; height:450px;">
					<img src="admin/image/'. $row['image'] .'" alt="" class="resize" style="height:200px;" >
					<p align="center"><strong><h4>'. $row['movie_name'] .'</h4></strong></p>
					
					Directer : '. $row['directer'] .' <br />
					Categroy : '. $row['categroy'] .'<br />
					Language : '. $row['language'] .'</p>
					
				</div>
					<a href="movie_details.php?pass='.$row['id'].'" class="btn btn-primary" style="margin-left: 40px;margin-top: -80px;">Book Now</a>
			</div>
			';

		}

		if($row['action']== "upcoming"){
			$output .= '
			<div class="col-lg-4 col-md-5 col-sm-6">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:1px; height:450px;">
					<img src="admin/image/'. $row['image'] .'" alt="" class="resize" style="height:200px;" >
					<p align="center"><strong><h4>'. $row['movie_name'] .'</h4></strong></p>
					
					Directer : '. $row['directer'] .' <br />
					Categroy : '. $row['categroy'] .'<br />
					Language : '. $row['language'] .'</p>
					
				</div>
					<a href="movie_details.php?pass='.$row['id'].'" class="btn btn-primary" style="margin-left: 40px;margin-top: -80px;">Upcoming</a>
			</div>
			';
		}
	}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>