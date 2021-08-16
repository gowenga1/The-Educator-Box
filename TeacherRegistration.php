<?php
include("dbsqlconnection.php");

function getData(){
    $data = array();
    $data[1] =$_POST["id"];
    $data[2] =$_POST["lname"];
    $data[3] =$_POST["fname"];
    $data[4] =$_POST["department"];
    $data[5] =$_POST["eml"];
    $data[6] =$_POST["phon"];
    $data[7] =$_POST["uname"];
    $data[8] =$_POST["pwd"];
      return $data;
}

If(isset($_POST['insert'])){
    $info = getData();
    $insert = "INSERT INTO [Teacher] ([TeacherID],[TeacherLN],[TeacherFN],[Department],[TeacherEmail],[TeacherPhoneNo],[TeacherUserName],[TeacherPassword]) 
    VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]')";
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

<body>
<header> 
    <h1> Teacher Registration </h1>
</header>

<div class="body">     
        <!--Registration form for new user -->   
        <h2>Sign Up</h2>    
        <form method = "POST" name = "RegistrationForm">    
            <div class = "login_container">
                <div class = "login_form">    
                    <label>Teacher ID:</label>    
                    <input type = "text" id = "id" name = "id" value = "" required/>    
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
                    <label> Department</label>
                    <select type="text" id="department" name="department" value="" required>
                        <option>ENGLISH</option>
                        <option>MATHEMATICS</option>
                        <option>PHYSICAL EDUCATION</option>
                        <option>SCIENCE</option>
                        <option>WORLD LANGUAGES</option>
                        <option>FINE AND PERFORMING ARTS</option>
                        <option>WRITING RUBRICS</option>
                        <option>COMPUTER SCIENCE</option>
                        <option>PERSONAL FINANCE</option>
                        <option>SOCIAL STUDIES</option>
                    </select>
                </div>
                <div class = "login_form">    
                    <label>Email:</label>    
                    <input type = "text" id = "eml" name = "eml" value = "" required/>    
                </div>
                <div class = "login_form">    
                    <label>PhoneNo.:</label>    
                    <input type = "text" id = "phon" name = "phon" value = "" required/>    
                </div> 
                <div class = "login_form">    
                    <label>Username:</label>    
                    <input type = "text" id = "uname" name = "uname" value = "" required/>    
                </div> 
                <div class = "login_form">    
                    <label>Password:</label>    
                    <input type = "text" id = "pwd" name = "pwd" value = "" required/>    
                </div>    
            
            </div>
            <div class="btn-group btn-group-lg">
            <button type="submit" class="success" name="insert">Submit</button> 
            <button class="danger">Cancel</button>
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
</html>     