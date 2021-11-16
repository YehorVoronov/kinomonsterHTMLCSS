<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<form action="/" method="post">
	<input type="text" name="name" placeholder="wpisz name">

	<br />


	<input type="text" name="descriptions" placeholder="wpisz descriptions">
	<br />

	<input type="text" name="year" placeholder="wpisz year">
	<br />

	<input type="text" name="category" placeholder="wpisz category(1/2)">
	<br/>
	<input type="submit" value="send"><br />

</form> 

</body>
</html>

<?php 


/*1------------------*/
/*print_r($_POST);
echo "</br>";

echo $_POST['name']."</br>".$_POST['descriptions']."</br>".$_POST['year']."</br>".$_POST['category']."</br>";
echo "</br>";


echo "</br>";*/
	/*1.2-----------------*/

function insert($name,$desc,$year,$rating,$poster,$category_id){
		
	

	$mysqli = new mysqli('localhost', 'root', '', 'kinomonster');

	if(mysqli_connect_errno()) {
		prinf("Соеденение не установлено", mysqli_connect_error());
		exit();
	}

	$mysqli->set_charset('utf8');

 
	$query = "INSERT INTO movie VALUES (null, '$name', '$desc', '$year', '$rating' ,'$poster', Now(), '$category_id')";
	$result = false;
	if( $mysqli->query($query)){
		$result = true;
	}
   return $result;

 }





/*
	1-------------------------------------------------
*/
/*	$name=$_POST['name'];
$descriptions=$_POST['descriptions'];
$year=$_POST['year'];
$category=$_POST['category'];

 
$query = "INSERT INTO movie VALUES(null, '$name', '$descriptions', '$year', Now(), '$category')";
$mysqli->query($query);*/
	/*1.2------------------------------------------------*/


/*	$query = $mysqli->query('SELECT * FROM movie');

	while ( $row =mysqli_fetch_assoc($query) ) {
		echo $row['name'].$row['year']."<br>";
	}*/

	//$query = "INSERT INTO movie VALUES(null, 'Безумный Макс', 'Описание фильма безумный Макс', '2015', Now())";
	//$mysqli->query($query);

	//$query = "UPDATE movie SET year = 1990 WHERE id = 3";
	//$mysqli->query($query);

	/*$query = "DELETE FROM movie WHERE id = 3";
	$mysqli->query($query);*/


	
	// name
	// author 
	// отправить






	$xml = simplexml_load_file("xml_files/movies.xml") or die("Error:cannot create object");	
	$xml2 = simplexml_load_file("xml_files/serials.xml") or die("Error:cannot create object2");
	echo count($xml);
	echo count($xml2);

	
/*
	echo "<pre>";
	print_r($xml);
	echo "</pre>";*/


	$title = null;
	$title_orign = null;
	$post = null;
	$rating = null;
	$year = null;


	foreach ($xml as $movie_key => $movie) {
		/*echo $movie->title_russian."<br>";*/

	$title = $movie->title_russian;
	$title_orign = $movie->title_original;
	$year = $movie->year;

			foreach ($movie->poster->big->attributes() as $poster_key => $poster) {
				$post=$poster;
			}


			if ($movie->imdb ) {
				$rating = $movie->imdb->attributes()['rating'];
			}else{
				$rating = null;
			}

			insert($title,$title_orign,$year,$rating,$post,1);
	}






	
	/*$title = null;
	$title_orign = null;
	$post = null;
	$rating = null;
	$year = null;*/


	foreach ($xml2 as $movie_key => $movie) {
		/*echo $movie->title_russian."<br>";*/

	$title = $movie->title_russian;
	$title_orign = $movie->title_original;
	$year = $movie->year;

			foreach ($movie->poster->big->attributes() as $poster_key => $poster) {
				$post=$poster;
			}


			if ($movie->imdb ) {
				$rating = $movie->imdb->attributes()['rating'];
			}else{
				$rating = null;
			}

			insert($title,$title_orign,$year,$rating,$post,2);
	}



	/*$mysqli->close();*/

?>
