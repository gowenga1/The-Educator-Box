<?php
include("dbsqlconnection.php");

function getData(){
    $data = array();
    $data[1] = $_POST['CRid'];
    $data[2] = $_POST['date']; 
    $data[3] = $_POST['date'];
    $data[4] = $_POST['sid'];
    $data[5] = $_POST['slname'];
    $data[6] = $_POST['sfname'];
    $data[7] = $_POST['id'];
    $data[8] = $_POST['lname'];
    $data[9] = $_POST['fname'];
    $data[10] = $_POST['comment'];
     return $data;
    
} 
if (isset($_POST['insert'])){
    $info = getData();
    $insert = "INSERT INTO [ ConferenceRequest ] ([ConferenceID]
    ,[StudentID]
    ,[RequestDate]
    ,[AppointmentDate]
    ,[StudentLN]
    ,[StudentFN]
    ,[TeacherID]
    ,[TeacherLN]
    ,[TeacherFN]
    ,[Comment]) VALUES ($info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]')";
    $result = sqlsrv_connect($serverName, $connectionInfo);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Educator Box</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="TheEducatorBoxUIStyleGuide.css ">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


<div body class="body">
    <header> 
        <h1> Parent Teacher Conference Request </h1>
    </header>

        <!--Parent Teacher conference request entry  -->       
        <form name = "ConferenceRequestForm" method = "POST" enctype = "multipart/form-data" >    
            <div class = "content_container">
                <div class = "content_form">    
                    <label>Conference ID:</label>    
                    <input type="int" id="CRid" name="CRid"/>    
                </div>
                <div class = "content_form">    
                    <label>Request Date:</label>  <!--date when request is made-->   
                    <input type="datetime-local" id="date" name="date"/>    
                </div>
                <div class = "content_form">    
                    <label>Conference Date:</label>  <!--date when conference will be held-->   
                    <input type="datetime-local" id="date" name="date"/>    
                </div>
                <div class = "content_form">    
                    <label>Student ID:</label>    
                    <input type ="int" id="sid" name="sid" />    
                </div>
                <div class = "content_form">    
                    <label>Student Last Name:</label>    
                    <input type="text" id="slname" name="slname"/>    
                </div>      
                <div class = "content_form">    
                    <label>Student First Name:</label>    
                    <input type="text" id="sfname" name="sfname"/>    
                </div>    
                <div class = "content_form">    
                    <label>Teacher ID:</label>    
                    <input type="int" id="id" name="id"/>    
                </div>
                <div class = "content_form">    
                    <label>Teacher Last Name:</label>    
                    <input type="text" id="lname" name="lname"/>    
                </div>      
                <div class = "content_form">    
                    <label>Teacher First Name:</label>    
                    <input type="text" id="fname" name="fname"/>    
                </div>    
                <div class = "content_form">    
                    <label>Comment:</label>    
                    <input type="text" id="comment" name="comment" value = ""/>    
                </div>
            </div>    
            <!--buttons to input and manage data  -->
            <button type="submit" class="success" name="insert"> Save</button> 
            <button class="update">Edit</button>
            <button class="danger">Delete</button>
           
        </form> 
         
    </body>

    <div class="footer">
         <!--Footer with links to documentation for the application -->  
        <a href="2021 TheEducatorBox.html" aria-label="Read more about The Educator Box">2021 TheEducatorBox</a>
        <a href="TermsofUse.html" aria-label="Read more about the terms of using this website">Terms of Use</a> 
        <a href="PrivacyPolicy.html" aria-label="Read more about the privacy policy">Privacy Policy</a> 
        <a href="SiteMap.html" aria-label="View the site map of the website">Site Map</a> 
    </footer>    
</html>     