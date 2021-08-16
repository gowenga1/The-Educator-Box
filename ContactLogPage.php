<?php
include("dbsqlconnection.php");

function getData(){
    $data = array();
    $data[1] =$_POST['logid'];
    $data[2] =$_POST['date'];
    $data[3] =$_POST['pphon'];
    $data[4] =$_POST['studentid'];
    $data[5] =$_POST['slname'];
    $data[6] =$_POST['sfname'];
    $data[7] =$_POST['grd'];
    $data[8] =$_POST['subject'];
    $data[9] =$_POST['pname'];
    $data[10] =$_POST['Relation'];
    $data[11] =$_POST['reason'];
    $data[12] =$_POST['ContactType'];
    $data[13] =$_POST['pcomment'];
     return $data;
}
If(isset($_POST['insert'])){
    $info = getData();
    $insert = "INSERT INTO [ContactLog] ([LogID]
    ,[Date]
    ,[ParentPhoneNo]
    ,[StudentID]
    ,[StudentLN]
    ,[StudentFN]
    ,[Grade]
    ,[Subject]
    ,[ParentName]
    ,[Relationship]
    ,[ReasonForContact]
    ,[ContactType]
    ,[Comment]) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]','$info[11]','$info[12]','$info[13]')";
    $result = sqlsrv_connect( $serverName, $connectionInfo);

    
    
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

<body>
<header> 
    <h1> Contact Log </h1>
</header>

<div class="body">    
        <!--Parent Teacher conference contacts -->       
        <form method = "POST" name = "ContactLogForm">    
                <div class = "content_container">
                <div class = "content_form">    
                    <label>Log ID:</label>    
                    <input type = "text" id = "logid" name = "logid" value = "" required/>    
                </div>
                <div class = "content_form">    
                    <label>Date:</label>    
                    <input type = "datetime-local" id = "date" name = "date" value = "" required/>    
                </div>
                <div class = "content_form">    
                    <label>Parent PhoneNo:</label>    
                    <input type = "int" id = "pphon" name = "pphon" value = "" required/>    
                </div>
                <div class = "content_form">    
                    <label>Student ID:</label>    
                    <input type = "int" id = "studentid" name = "studentid" value = "" required/>    
                </div>
                <div class = "content_form">    
                    <label>Student Last Name:</label>    
                    <input type = "text" id = "slname" name = "slname" value = "" required/>    
                </div>      
                <div class = "content_form">    
                    <label>Student First Name:</label>    
                    <input type = "text" id = "sfname" name = "sfname" value = "" required/>    
                </div>    
                <div class = "content_form">    
                    <label>Grade:</label>    
                    <input type = "int" id = "grd" name = "grd" value = "" required/>    
                </div>
                <div class = "content_form">    
                    <label>Subject:</label>    
                    <input type = "text" id = "subject" name = "subject" value = "" required/>    
                </div>      
                <div class = "content_form">    
                    <label>Parent Name:</label>    
                    <input type = "text" id = "pname" name = "pname" value = "" required/>    
                </div>    
                <div class = "content_form">    
                    <label> Relationship:</label>
                    <select type="text" id ="Relation" name ="Relation" value="" required>
                        <option>Mother</option>
                        <option>Father</option>
                        <option>Grandparent</option>
                        <option>Sibling</option>
                        <option>Aunt</option>
                        <option>Uncle</option>
                        <option>Other</option>
                    </select>   
                </div>
                <div class = "content_form">    
                    <label>Reason for contact:</label>    
                    <input textarea = "text" id = "reason" name = "reason" value = "" required/>    
                </div>
                <div class = "content_form">    
                    <label> Type of contact:</label>
                    <select type="text" id = "ContactType" name = "ContactType" value="" required>
                        <option>Phone call</option>
                        <option>Text message</option>
                        <option>Email</option>
                        <option>Face to face</option>
                        <option>Virtual Conference</option>
                    </select>   
                </div> 
                <div class = "content_form">    
                    <label>Parent comment:</label>    
                    <input type = "text" id = "pcomment" name = "pcomment" value = "" required/>    
                </div> 
                </div>
                <div class="btn-group btn-group-lg">
                    <button class="ready">New</button>
                    <button class="update">Edit</button>
                    <button type="submit" class="success" name="insert">Save</button> 
                </div>
        </form>  
       
    </body>

    <div class="footer">
         <!--Footer with links to documentation for the application -->  
        <a href="2021 TheEducatorBox.html" aria-label="Read more about The Educator Box">2021 TheEducatorBox</a>
        <a href="TermsofUse.html" aria-label="Read more about the terms of using this website">Terms of Use</a> 
        <a href="PrivacyPolicy.html" aria-label="Read more about the privacy policy">Privacy Policy</a> 
        <a href="SiteMap.html" aria-label="View the site map of the website">Site Map</a> 
    </footer>    