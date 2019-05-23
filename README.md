# omdb

api from http://www.omdbapi.com/

$get = file_get_contents("https://www.omdbapi.com/?t=".$movie."&apikey=".$apikey."");
    Note:Replace apikey variable to run for found in p@ssword.php before deployment

php:
$movie = urlencode(trim(fgets(STDIN,1024)));
    urlencde to replace unsafe data
    trim to remove extra spaces
    fgets to get input from file pointer



to run:

  Clone git repo

  sudo docker-compose build

  sudo docker images to find <image id>

  sudo docker run -it --name cli <image id> /bin/bash

  php -f cli.php

  type movie names

to exit: 
  type "exit" or ^C
