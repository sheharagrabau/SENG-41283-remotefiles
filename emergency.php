<!DOCTYPE html>
<html>
 
<head>
    
<title>
NBTS - Sri Lanka &#9825    
</title>
<link rel="stylesheet" type="text/css" href="styles.css"> 
    <link rel="icon" href="images/favicon_image.png" sizes="16x16" type="image/png"> <!--favicon-->
</head>

<script>
    
 function validate(){
        if(validateForm()){
            return validateNIC();
            return true;
        }
       
        return false;
    }
    
    
 function validateForm(){
         var a = document.forms["urgent_blood"]["firstname_patient"].value;
         var b = document.forms["urgent_blood"]["surname_patient"].value;
         var c = document.forms["urgent_blood"]["dr_name"].value;
         var d = document.forms["urgent_blood"]["blood_type_urgent"].value;
         var e = document.forms["urgent_blood"]["firstname_req"].value;
         var f = document.forms["urgent_blood"]["surname_req"].value;
            var x = document.forms["urgent_blood"]["nic_req"].value;
            var y = document.forms["urgent_blood"]["mob_no"].value;
         var emptyField = "";
         
         if(a == "" || b =="" || c =="" || d =="none" || e =="" || f ==""  || x=="" || y==""){
             if(a==""){emptyField+= "*Patient's first name \n";}
             if(b==""){emptyField+= "*Patient's surname \n"; }
             if(c==""){emptyField += "*Doctor's name \n";}
             if(d=="none"){emptyField += "*Patient's blood type \n";}
             if(e==""){emptyField += "*Requester's first name \n";}
             if(f==""){emptyField += "*Requester's surname \n";}
             if(x==""){emptyField += "*Requester's NIC \n";}
             if(y==""){emptyField += "*Requester's mobile no. \n";}
             
             alert("Following fields are mandatory: \n\n" + emptyField);
             return false;
         }
         
         return true;
         
     } 
    
function validateNIC(){
            var p= document.forms["urgent_blood"]["nic_req"].value;
            
            if(isNaN(p)){alert("Invalid NIC format");
                        return false;}
            
            else if(p.length!==9){alert("NIC should be NINE numbers");
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
        
    The National Blood Transfusion Service - Sri Lanka is responsible for the timely distribution and issue of blood and blood components. In case of an emergency blood need, a patient's relative or a close party may fill the form below and request for blood. <br><br> Please give accurate and mobile numbers that are easily reachable to help us process your request fast. 
        
    NBTS will contact you and deliver the blood to the requested hospital at its earliest.<br><br><br>
        
        
    <div class="row">
    <div  class="column left">    
        
    <fieldset style="font-family: sans-serif"><legend style="color: #C31F1F; font-weight: 500; font-family: sans-serif; font-size: 40px;" class="emergency">FOR URGENT   BLOOD NEEDS</legend> 
        
            <form name="urgent_blood" action="emergencydb.php" onsubmit="return validate()" method="POST">
            <table width="100%" cellpadding="5">
                
                <tr>
                <td colspan="2"><b>PARTICULARS OF PATIENT</b></td>
                </tr>
                
                <tr>
                    <td>Firstname: <span class="asterisk">*</span></td>
                    <td><input type="text" size="35" name="firstname_patient" id="firstname_patient"></td>
                </tr> 
                
                <tr>
                    <td>Surname: <span class="asterisk">*</span></td>
                    <td><input type="text" size="35" name="surname_patient" id="surname_patient"></td>
                </tr>
                
                 <tr>
                    <td>National ID No: <span class="asterisk">(if available)</span></td>
                    <td><input type="text" size="35" name="nic_patient"> v</td>                      
                </tr>
                
                 <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="sex" value="male" checked>Male<input type="radio" name="sex" value="female">Female</td>
                </tr>
                        
                <tr>
                    <td>Hospital:</td>
                    <td><input type="text" size="35" name="hospital"></td>
                </tr>    
                
                <tr>
                    <td>Doctor's name: <span class="asterisk">*</span></td>
                    <td><input type="text" size="35" name="dr_name"></td>
                </tr>
                
                <tr>
                    <td>Blood type: <span class="asterisk">*</span></td>
                    <td><select name="blood_type_urgent">
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
                    <td colspan="2" style="padding-top: 12px;"><b>PARTICULARS OF REQUESTER</b></td>
                </tr>
                
                <tr>
                <td>Title</td>
                <td>
                    <select name="title">
                        <option value="none" selected>-</option>
                        <option value="rev">Rev.</option>
                        <option value="mr">Mr.</option>
                        <option value="mrs">Mrs.</option>
                        <option value="miss">Miss.</option>
                    </select>
                </td>   
                </tr>
                
                <tr>
                    <td>Firstname: <span class="asterisk">*</span></td>
                    <td><input type="text" size="35" name="firstname_req" id="firstname_req"></td>
                </tr>
                
                <tr>
                    <td>Surname: <span class="asterisk">*</span></td>
                    <td><input type="text" size="35" name="surname_req" id="surname_req"></td>
                </tr>
                
                
                <tr>
                    <td>National ID No: <span class="asterisk">*</span></td>
                    <td><input type="text" size="35" name="nic_req"> v</td>                      
                </tr>
                
                <tr>
                    <td>Personal Mobile No: <span class="asterisk">*</span><br>(Please provide a number<br> that can be used to easily reach you )</td>
                    <td><input type="text" size="35" name="mob_no"></td>
                </tr>
                
                <tr>
                    <td>Home No:</td>
                    <td><input type="text" size="35" name="home_req"></td>
                </tr>
                
                <tr>
                    <td>Work No:</td>
                    <td><input type="text" size="35" name="work_req"></td>
                </tr>
                
                <tr>
                    <td>e-mail Address:</td>
                    <td><input type="text" size="35" name="email"></td>
                </tr>
                
                <tr>
                    <td>Relationship with the patient: </td>
                    <td><input type="text" size="35" name="relationship"></td>
                </tr>
                
                <tr>
                    <td>&nbsp;</td>
                    <td align="left" style="padding-right: 30px; padding-top: 50px;"><input type="submit" class="form_button" value="Request Blood" > <input type="reset" class="form_button"></td>
                </tr>
                
                
                
            </table> 
            </form>
        
    </fieldset>
        
    </div>
    
    <div class="column right"><img src="images/ask_4.png" width="500" height="500"></div>
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