<?php

	include ('db.php');

	if(isset($_POST["query"]))
	{
		$output = '';
		$query = "SELECT * FROM places WHERE Title LIKE '%".$_POST["query"]."%'";
 		$result = mysqli_query($con, $query);
 		$output = '<ul class="list-unstyled">';

 		if(mysqli_num_rows($result) > 0)
 		{
 			while ($row = mysqli_fetch_array($result))
 			{
 				$output .= '<li>'.$row["Title"].'</li>';
 			}
 		}
 		else
 		{
 			$output .= '<li>Place not found.</li>';
 		}

 		$output .= '</ul>';
 		echo $output;
	}

?>