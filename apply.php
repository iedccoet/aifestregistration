
<?php
	
	$first_name1 = pickup('first_name1');
	$last_name1 = pickup('last_name1');
	$email1 = pickup('email1');
	$mobile1 = pickup_3('mobile1');	
	$tshirt1 = pickup_2('group31');
	
	$first_name2 = pickup('first_name2');
	$last_name2 = pickup('last_name2');
	$email2 = pickup('email2');
	$mobile2 = pickup_3('mobile2');	
	$tshirt2 = pickup_2('group32');

	$first_name3 = pickup('first_name3');
	$last_name3 = pickup('last_name3');
	$email3 = pickup('email3');
	$mobile3 = pickup_3('mobile3');	
	$tshirt3 = pickup_2('group33');

	$first_name4 = pickup('first_name4');
	$last_name4 = pickup('last_name4');
	$email4 = pickup('email4');
	$mobile4 = pickup_3('mobile4');	
	$tshirt4 = pickup_2('group34');

	$first_name5 = pickup('first_name5');
	$last_name5 = pickup('last_name5');
	$email5 = pickup('email5');
	$mobile5 = pickup_3('mobile5');	
	$tshirt5 = pickup_2('group35');

	$first_name6 = pickup('first_name6');
	$last_name6 = pickup('last_name6');
	$email6 = pickup('email6');
	$mobile6 = pickup_3('mobile6');	
	$tshirt6 = pickup_2('group36');

	$project = pickup('project_name');	
	$project_desc = pickup('project_desc');	
	$accomodation = pickup('accomodation');
	$link = pickup('video_link');

	include_once('conn.php');

	$date = date('Y-m-d');

	mysqli_query($con, "INSERT INTO register_stall(first_name1, last_name1 , email1, mobile1, tshirt1, first_name2, last_name2 , email2, mobile2,tshirt2, first_name3, last_name3 , email3, mobile3, tshirt3, first_name4, last_name4 , email4, mobile4, tshirt4, first_name5, last_name5 , email5, mobile5, tshirt5, first_name6, last_name6 , email6, mobile6, tshirt6, project_name, project_desc,link,accomodation1 ,date_tab)
		
		VALUES('$first_name1', '$last_name1','$email1','$mobile1', '$tshirt1','$first_name2', '$last_name2','$email2','$mobile2', '$tshirt2', '$first_name3', '$last_name3','$email3','$mobile3', '$tshirt3', '$first_name4', '$last_name4','$email4','$mobile4', '$tshirt4', '$first_name5', '$last_name5','$email5','$mobile5', '$tshirt5', '$first_name6', '$last_name6','$email6','$mobile6', '$tshirt6', '$project', '$project_desc','$link','$accomodation','$date')") or die("<script>
		alert('Unable to register. Please try again.');
		window.location.href='index.php';
		</script>");


	echo "<script>
		alert('Registration is succesfully recorded.');
		window.location.href='index.php';
		</script>";

	die("Thanks for applying");

	function pickup($box){
		if(!isset($_POST[$box])){
			$data = "NIL";
			return $data;
		}
		$data = $_POST[$box];
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	function pickup_2($box){
		if(isset($_POST[$box])){
			$data = $_POST[$box];
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$data ="NIL";
		return $data;
	}

	function pickup_3($box){
		if(!isset($_POST[$box])){
			$data = 000;
			return $data;
		}
		$data = $_POST[$box];
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>