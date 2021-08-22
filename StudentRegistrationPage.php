<?php
include("dbsqlconnection.php");

function getData(){
    $data = array();
    $data[1] =$_POST["sid"];
    $data[2] =$_POST["lname"];
    $data[3] =$_POST["fname"];
    $data[4] =$_POST["grade"];
    $data[5] =$_POST["eml"];
    $data[6] =$_POST["uname"];
    $data[7] =$_POST["pwd"];
    $data[8] =$_POST["parnam"];
    $data[9] =$_POST["Relation"];
    $data[10] =$_POST["paremail"];
    $data[11] =$_POST["parentphon"];
      return $data;
}

If(isset($_POST['insert'])){
    $info = getData();
    $insert = "INSERT INTO [Student] ([StudentID]
    ,[StudentLN]
    ,[StudentFN]
    ,[Grade]
    ,[StudentEmail]
    ,[StudentUserName]
    ,[StudentPassword]
    ,[ParentName]
    ,[RelationshipType]
    ,[ParentEmail]
    ,[ParentPhoneNo]) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]','$info[11]')";
    $result = sqlsrv_connect($insert, $connectionInfo);
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

<div class="body">
<header> 
    <h1> Student Registration </h1>
</header> 
        <!--Register students as users of the application -->   
        <form name = "StudentRegistrationForm" method = "POST" enctype = "multipart/form-data" >    
            <div class = "login_container">
                <div class = "login_form">    
                    <label>Student ID:</label>    
                    <input type = "int" id = "sid" name = "sid" value = "" required/>    
                </div>
                <div class = "login_form">    
                    <label>Last Name:</label>    
                    <input type = "text" id = "lname" name = "lname" value = "" required/>    
                </div>      
                <div class = "login_form">    
                    <label>First Name:</label>    
                    <input type = "text" id = "fname" name = "fname" value = "" required/>    
                </div>    
                <div class = "login_form">    
                    <label>Grade:</label>    
                    <input type = "int" id = "grade" name = "grade" value = "" required/>    
                </div>   
                <div class = "login_form">    
                    <label>Email:</label>    
                    <input type = "text" id = "eml" name = "eml" value = "" required/>    
                </div>
                <div class = "login_form">    
                    <label>Username:</label>    
                    <input type = "text" id = "uname" name = "uname" value = "" required/>    
                </div> 
                <div class = "login_form">    
                    <label>Password:</label>    
                    <input type = "text" id = "pwd" name = "pwd" value = "" required/>    
                </div>
                <div class = "login_form">    
                    <label>ParentName:</label>    
                    <input type = "text" id = "parnam" name = "parnam" value = "" required/>    
                </div>
                <div class = "login_form">
                    <label> Relationship:</label>
                    <select type="text" id="Relation" name="Relation" value="" required>
                        <option>Mother</option>
                        <option>Father</option>
                        <option>Grandparent</option>
                        <option>Sibling</option>
                        <option>Aunt</option>
                        <option>Uncle</option>
                        <option>Other</option>
                    </select>
                </div> 
                <div class = "login_form">    
                    <label>ParentEmail:</label>    
                    <input type = "text" id = "paremail" name = "paremail" value = "" required/>    
                </div>
                <div class = "login_form">    
                    <label>ParentPhoneNo.:</label>    
                    <input type = "int" id = "parentphon" name = "parentphon" value = "" required/>    
                </div> 
            </div>    
            <button type="submit" class="success" name="insert">Save</button>
            <button class="update">Edit</button>
            <button class="danger">Cancel</button> 
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