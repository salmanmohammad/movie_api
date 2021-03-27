<?php
include('config.php');
include('make_curl_call.php');
class Movies
{
	public $api_key;
	function __construct()
	{
		$this->api_key = MOVIE_API_KEY;
	}
	
	function getTopRatedMovies()
	{
		$movies = curl_call("https://api.themoviedb.org/3/movie/top_rated?api_key=".$this->api_key);
		return $movies;
	}
	
	function getUpcomingMovies()
	{
		$movies = curl_call("https://api.themoviedb.org/3/movie/upcoming?api_key=".$this->api_key);
		return $movies;
	}
}
?>
