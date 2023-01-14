<?php
$con = mysqli_connect("localhost","root","","phptutorials");

if(isset($_GET['search']))
{
   $filtervalues = $_GET['search'];
   $query = "SELECT * FROM users WHERE CONCAT(firstname,lastname,email) LIKE '%$filtervalues%' ";
   $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
    foreach($query_run as $items)
    {
    }
    
    ?>

