<!DOCTYPE html>
<html>
 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
<title>
NBTS - Sri Lanka &#9825  
</title>
    
    
     <link rel="icon" href="images/favicon_image.png" sizes="16x16" type="image/png"> <!--favicon-->
 
<style>
    
     html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
    } /*edit*/
    
     img {
        display: table-cell;
        vertical-align: top;
        width:100%;
        height: auto;
    }/*edit*/
    
    
    .navbar{
        overflow: hidden;
        background-color: #C31F1F;
        position: sticky;
        top: 0;
        width: 100%;
        font-family:Lucida Sans Unicode;
        font-weight: 700;
        
    }
    
    .navbar a {
          float: left;
          display: block;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
    }
    
    .navbar a:hover {
          background: white;
          color: #C31F1F;
    }
    
    
    
.adminbutton{
  background-color: #f44336;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
    border-radius: 8px;
    border: 2px solid #e7e7e7
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
    cursor: pointer; }
    
    
    
    .centerpart {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 20px;
  /*border: 3px solid red;*/ 
}
     
    body {
  background-color: lightgrey;
  color: blue;
}

h1 {
  background-color: black;
  color: white;
    text-align: center;
}


.centerpart {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 20px;
  /*border: 3px solid red;*/ 
}
    
    
</style>    
</head>

<body margin="0" style="font-family:Lucida Sans Unicode">
    
    
 <div>
    <h1>This is the post-login page</h1>
    
    
    </div> 

<div class="centerpart">   
    <input type="button" value="LOGOUT" class="adminbutton" id="btnHome" 
onClick="document.location.href='logout.php'" />
   </div>

</body>
