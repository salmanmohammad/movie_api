<?php
include('config.php');
include('make_curl_call.php');
class upcomingMovies
{
	public $api_key;
	function __construct()
	{
		$this->api_key = MOVIE_API_KEY;
	}
	
	function getupcomingMovies()
	{
		$movies = curl_call("https://api.themoviedb.org/3/movie/upcoming?api_key=".$this->api_key);
		return $movies;
	}
}
?>