<?php
//all the variables defined here are accessible in all the files that include this one
$con= new mysqli('ec2-18-204-74-74.compute-1.amazonaws.com','dd532lh7c1453p','5e1cd8822a827e657d0b9d3e1585afb08e0cb7d9989b9039416969eb8db66011','heroku pg:psql postgresql-shaped-66569 --app onlineexamination537')or die("Could not connect to mysql".mysqli_error($con));

?>
