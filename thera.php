<?php 
echo "IMPORTED THIS </br>";

//get thera JSON data from eve-scout and parse into DB
//checks last modified to figure out if new data needs to be added to DB
function theraJson()
{
	
}


//retrieve JSON from eve-scout and save as session object?
function getThera()
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://www.eve-scout.com/api/wormholes");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	curl_close($ch);
	echo $output;
	
	
}


//get data from DB and return as JSON (probably no longer needed)
function parThera()
{
	
}

//takes form data, converts to system ID and passes to getJumps to query API
function distCalc()
{
	
}

//queries the ESI api to get the number of jumps between two system ID
function getJumps($origin,$dest)
{
	
	
}

//query DB to return sys ID from name provided
function getsysID($find)
{
	
}

//query DB to return sys name from ID provided
function getsysNam($find)
{
	
}




?>