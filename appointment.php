<!DOCTYPE html>
<html>
 
<head>
    
<title>
NBTS - Sri Lanka &#9825    
</title>

<link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="images/favicon_image.png" sizes="16x16" type="image/png"> <!--favicon-->
</head>

    <script type="text/javascript">
        
    function validate(){
        if(validateForm()){
            return validateNIC();
            return true;
        }
       
        return false;
    }
        
        
       
   function validateForm(){
         var a = document.forms["app_form"]["firstname"].value;
         var b = document.forms["app_form"]["surname"].value;
         var c = document.forms["app_form"]["nic"].value;
         var d = document.forms["app_form"]["dob"].value;
         var e = document.forms["app_form"]["mob_no"].value;
         var f = document.forms["app_form"]["blood_type_appointment"].value;
         var emptyField = "";
         
         if(a == "" || b =="" || c =="" || d =="" || e =="" || f =="none"){
             if(a==""){emptyField+= "*First name \n";}
             if(b==""){emptyField+= "*Surname \n"; }
             if(c==""){emptyField += "*NIC \n";}
             if(d==""){emptyField += "*Date of birth \n";}
             if(e==""){emptyField += "*Mobile No. \n";}
             if(f=="none"){emptyField += "*Donor blood type \n";}
             
             alert("Following fields are mandatory: \n\n" + emptyField);
             return false;
         }
         
         return true;
         
     }  
        
        
        function validateNIC(){
            var g= document.forms["app_form"]["nic"].value;
            
            if(isNaN(g)){alert("Invalid NIC format");
                        return false;}
            
            else if(g.length!==9){alert("NIC should be NINE numbers");
                                 return false;}
            
            return true;
        }
        
        
</script>

<body>

    <table width="100%">
    <tr>
    <td width="40%"><img src="images/NBTS-Logo.png" width="100" height="100"></td>
        <td width="60%" align="right" valign="bottom" class="top"><span class="capital">N</span>ATIONAL <span class="capital">B</span>LOOD <span class="capital">T</span>RANSFUSION <span class="capital">S</span>ERVICES - SRI LANKA</td>
    </tr>    
    </table>
     
    <div class="navbar">
        <a href="main.php">HOME</a>
        <a href="about.php">ABOUT</a>
        <a href="why.php">WHY GIVE BLOOD?</a>
        <a href="who.php">WHO CAN DONATE?</a>
        <a href="where.php">WHERE TO DONATE?</a>
        <a href="appointment.php">APPOINTMENT TO DONATE</a>
        <a href="emergency.php">EMERGENCY BLOOD NEEDS</a>
        <a href="contact.php" style="float:right">CONTACT US &#9743</a>
    </div>
    
   <div style="padding-left: 20px; padding-right: 20px;">
       <br><br>
       Make an appointment to donate your precious blood and help us save 3 lives. Please pick <u style="color: #C31F1F; font-weight: 600;">any 3 dates</u> convenient to you for your appointment. You will be contacted by the closest service center to confirm the appointment.
       
       <br><br><br>
       <div class="row">
       
        <div  class="column left"> 
        
                <fieldset style="font-family: sans-serif"><legend style="font-family: sans-serif; font-size: 35px">Personal Details For Appointment</legend>
                <form action="appointmentdb.php" name="app_form" onsubmit="return validate()" method="POST">
                    <table width="100%" cellpadding="5">
                        
                        <tr>
                            <td>Title</td>
                            <td><select name="title">
                                    <option value="none" selected>-</option>
                                    <option value="rev">Rev.</option>
                                    <option value="mr">Mr.</option>
                                    <option value="mrs">Mrs.</option>
                                    <option value="miss">Miss.</option>
                                </select>
                                </td>
                        </tr>
                        
                        <tr>
                            <td>First Name: <span class="asterisk">*</span></td>
                            <td><input type="text" size="35" name="firstname" id="firstname"></td>
                        </tr>
                        
                        <tr>
                            <td>Surname: <span class="asterisk">*</span></td>
                            <td><input type="text" size="35" name="surname" id="surname"></td>                    
                        </tr>
                        
                        <tr>
                            <td>National ID No: <span class="asterisk">*</span></td>
                            <td><input type="text" size="35" name="nic" id="nic"> v</td>                      
                        </tr>
                        
                        <tr>
                            <td>Date of birth: <span class="asterisk">*</span></td>
                            <td><input type=date name="dob" id="dob"></td>
                        </tr>
                        
                        <tr>
                            <td>Gender:</td>
                            <td><input type="radio" name="sex" value="male" checked>Male<input type="radio" name="sex" value="female">Female</td>
                        </tr>
                        
                        <tr>
                            <td>Personal Mobile No: <span class="asterisk">*</span><br>(Please provide a number<br> that we can use to confirm the appointment )</td>
                            <td><input type="text" size="35" name="mob_no" id="mob_no"></td>
                        </tr>
                        
                        <tr>
                            <td>Home No:</td>
                            <td><input type="text" size="35" name="home_no"></td>
                        </tr>
                        
                        <tr>
                            <td>Work No:</td>
                            <td><input type="text" size="35" name="work_no"></td>
                        </tr>
                        
                        <tr>
                            <td>Postal Address:</td>
                            <td><textarea cols="27" rows="5" name="address"></textarea></td>
                        </tr>
                        
                        <tr>
                            <td>e-mail Address:</td>
                            <td><input type="text" size="35" name="email"></td>
                        </tr>
                        
                        <tr>
                            <td>Blood Type: <span class="asterisk">*</span></td>
                            <td><select name="blood_type_appointment" id="blood_type_appointment">
                                    <option value="none" selected>-</option>
                                    <option value="a_pos">A+</option>
                                    <option value="a_neg">A-</option>
                                    <option value="b_pos">B+</option>
                                    <option value="b_neg">B-</option>
                                    <option value="ab_pos">AB+</option>
                                    <option value="ab_neg">AB-</option>
                                    <option value="o_pos">O+</option>
                                    <option value="o_neg">O-</option>
                                </select></td>
                        </tr>
                        
                        <tr>
                            <td>Pick date 1 for appointment:</td>
                            <td><input type="date" name="date1"></td>
                        </tr>
                        
                        <tr>
                            <td>Pick date 2 for appointment:</td>
                            <td><input type="date" name="date2"></td>
                        </tr>
                        
                        <tr>
                            <td>Pick date 3 for appointment:</td>
                            <td><input type="date" name="date3"></td>
                        </tr>
                        
                        <tr>
                            <td>Contact person in case of an emergency:</td>
                            <td><input type="text" size="35" name="emer_person"></td>
                        </tr>
                        
                        <tr>
                            <td>Mobile No. of contact person:</td>
                            <td><input type="text" size="35" name="emer_no"></td>
                        </tr>
                        
                        
                        
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" style="padding-right: 30px; padding-top: 50px;"><input type="submit" class="form_button" value="Request Appointment" > <input type="reset" class="form_button"></td>
                        </tr>
                    
                    </table>
            
                </form>
                </fieldset>
                
            
        </div> 
           
        <div class="column right"><img src="images/give.jpg" width="500" height="500"></div>
          
       
       </div> 
    
</div>

<br><br><br>  
 <footer style="background:brown">

    <table border="0" width="100%">
    <tr>

    <td width="25%"><pre class="foot">
    
    
    
    
        
        <b>Postal Address:</b>
        
    
        National Blood Center,
        No. 555/5D, Elvitigala Mawatha,
        Narahenpita,Colombo 05,
        Sri Lanka.
        
        
        <b>Email us at:</b>
        
        
        <a class="email" href="mailto:info@nbts.health.gov.lk">info@nbts.health.gov.lk</a>
        </pre></td>
        
        <td width="25%"><pre class="foot">
        <b>Telephone:</b>
        
    
        General: +94112369931-4
        Donor Section: +94117220677
        Fax Number: +941123699939
        
        
        </pre></td>
        
        
        <td width="25%"><pre class="foot">
        
        
        <a href="main.php" class="footnav"><b>Home</b></a>
        
        <a href="about.php" class="footnav">About NBTS</a>
        <a href="why.php" class="footnav">Why give blood?</a>
        <a href="who.php" class="footnav">Who can donate?</a>
        <a href="where.php" class="footnav">Where to donate?</a>
        <a href="appointment.php" class="footnav">Make an appointment to donate</a>
        <a href="emergency.php" class="footnav">Emergency blood needs</a>
        
        <a href="contact.php" class="footnav">Contact Us</a>
        
        </pre></td>
        
        <td width="25%" class="foot"><i>"To ensure the quality, safety, adequacy<br> and cost effectiveness of the blood supply and related laboratory, clinical, academic and research services in accordance with national requirements and <br>
WHO recommendations"</i></td>

    
        
    </tr>
    <tr></tr>
    
    <tr>
        <td colspan="4" align="center"><p class="foot"><i>Copyright &copy; 2020 National Blood Transfusion Service - Sri Lanka. All Rights Reserved</i></p>
        </td>
    </tr>
        
    </table>
    
</footer>
</body>    
    
</html>