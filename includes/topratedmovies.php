<?php
include('config.php');
include('make_curl_call.php');
class topRatedMovies
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
}
?>