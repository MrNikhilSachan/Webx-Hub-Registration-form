<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Registration Form</title>
<link rel="stylesheet" href="style.css">
</head>
 
<body>
<h3>Student Registration Form Using Table in HTML</h3>


<table class="bg-colour" align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input class="textbox" type="text" name="First_Name" placeholder="Enter your First Name" maxlength="50"/>
(Max 50 Characters Allowed)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" placeholder="Enter Your Last Name" maxlength="50"/>
(Max 30 Characters Allowed)
</td>
</tr>
  
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="Email_Id" placeholder="abc@gmail.com" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" placeholder="9793******" maxlength="10" />
(10 Digits Allowed)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
<!----- Date Of Birth -------------------------------------------------------->
<tr>
    <td>DATE OF BIRTH</td>
     
    <td>
    <select name="Birthday_day" id="Birthday_Day">
    <option value="-1">Day:</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
     
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
     
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
     
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
     
    <option value="31">31</option>
    </select>
     
    <select id="Birthday_Month" name="Birthday_Month">
    <option value="-1">Month:</option>
    <option value="January">Jan</option>
    <option value="February">Feb</option>
    <option value="March">Mar</option>
    <option value="April">Apr</option>
    <option value="May">May</option>
    <option value="June">Jun</option>
    <option value="July">Jul</option>
    <option value="August">Aug</option>
    <option value="September">Sep</option>
    <option value="October">Oct</option>
    <option value="November">Nov</option>
    <option value="December">Dec</option>
    </select>
     
    <select name="Birthday_Year" id="Birthday_Year">
     
    <option value="-1">Year:</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
     
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
     
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    </select>
    </td>
    </tr>
    
 
<!----- Address ---------------------------------------------------------->
<tr>
<td class="add">ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="8" cols="30"></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="City" placeholder="kanp**" maxlength="50" />
(Max 50 Characters Allowed)
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text"  placeholder="2080**" name="Pin_Code" maxlength="6" />
(Max 6 Number Allowed)
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="State" placeholder="uttar*******" maxlength="50" />
(mMax 50 Characters Allowed)
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><input type="text" name="Country" placeholder="India" value="India" readonly="readonly" /></td>
</tr>
 
<!----- Hobbies ---------------------------------------------------------->
 
<tr>
<td>HOBBIES <br /><br /><br /></td>
 
<td>
<input type="checkbox" name="Hobby_Drawing" value="Drawing" />
Drawing
<input type="checkbox" name="Hobby_Singing" value="Singing" />
Singing
<input type="checkbox" name="Hobby_Dancing" value="Dancing" />
Dancing
<input type="checkbox" name="Hobby_Sketching" value="Sketching" />
Sketching
<br />
<input type="checkbox" name="Hobby_Other" value="Other">
Others
<input type="text" name="Other_Hobby" maxlength="50" />
(Max 50 Characters Allowed)
</td>
</tr>
 
<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /></td>
<td>
    <input type="checkbox" name="High_School" value="10th" />
    High School(10th)<br>
    <input type="checkbox" name="Higher_School" value="12th" />
    Higher School(12th)<br>
    <input type="checkbox" name="Graduation" value="Bachelors" />
        Graduation(Bachelors)<br>
        <input type="checkbox" name="Post_Graduate" value="Masters" />
        Post Graduate(Masters)<br>
        <input type="checkbox" name="Phd" value="Phd" />
            Phd
</td>
    

</tr>
 
<!----- Course ---------------------------------------------------------->
<tr>
<td>COURSES<br />APPLIED FOR</td>
<td>
    <input type="radio" name="Course_BCA" value="BCA">
BCA(Bachelors of Computer science)<br>
<input type="radio" name="Course_BCom" value="B.Com">
B.Com(Bachelors Of Commerece)<br>
<input type="radio" name="Course_BSc" value="B.Sc">
B.Sc(Bachelors Of science) <br>
<input type="radio" name="Course_BA" value="B.A">
B.A (Bachelors Of Arts)<br>
<input type="radio" name="Course_Mca" value="MCA">
MCA(Masters of Computer science)<br>
<input type="radio" name="Course_M.Com" value="M.Com">
M.Com(Masters of Commerece)<br>
<input type="radio" name="Course_M.Sc" value="M.Sc">
M.Sc(Masters of Science)<br>
<input type="radio" name="Course_MA" value="M.A">
MA(Masters of Arts)
</td>
</tr>
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input class="textbox" type="submit" value="Submit">
<input class="textbox" type="reset" value="Reset">
</td>
</tr>
</table>

<?php
            require ('connection.php');
            
            if (isset($_REQUEST['First_Name'])) {
                // removes backslashes
                $First_Name = stripslashes($_REQUEST['First_Name']);
                //escapes special characters in a string
                $First_Name = mysqli_real_escape_string($con, $First_Name);
                $Last_Name    = stripslashes($_REQUEST['Last_Name']);
                $Last_Name = mysqli_real_escape_string($con, $Last_Name);
                $email    = stripslashes($_REQUEST['Email_Id']);
                $email = mysqli_real_escape_string($con, $email);
                $Mobile_Number    = stripslashes($_REQUEST['Mobile_Number']);
                $Mobile_Number = mysqli_real_escape_string($con, $Mobile_Number);
                $Gender    = stripslashes($_REQUEST['Gender']);
                $Gender = mysqli_real_escape_string($con, $Gender);
                // ---------------------------------------------


                $Birthday_day    = stripslashes($_REQUEST['Birthday_day']);
                $Birthday_day    = mysqli_real_escape_string($con, $Birthday_day);
                $Birthday_Month    = stripslashes($_REQUEST['Birthday_Month']);
                $Birthday_Month    = mysqli_real_escape_string($con, $Birthday_Month);
                $Birthday_Year    = stripslashes($_REQUEST['Birthday_Year']);
                $Birthday_Year    = mysqli_real_escape_string($con, $Birthday_Year);

                $dob = $Birthday_day."-".$Birthday_Month."-".$Birthday_Year;

                //----------------------------------------------------------------------------------



                $Address = stripslashes($_REQUEST['Address']);
                $Address = mysqli_real_escape_string($con, $Address);
                
                $City = stripslashes($_REQUEST['City']);
                $City = mysqli_real_escape_string($con, $City);

                $Pin_Code = stripslashes($_REQUEST['Pin_Code']);
                $Pin_Code = mysqli_real_escape_string($con, $Pin_Code);

                $State = stripslashes($_REQUEST['State']);
                $State = mysqli_real_escape_string($con, $State);

                $Country = stripslashes($_REQUEST['Country']);
                $Country = mysqli_real_escape_string($con, $Country);

                //-------------------------------------------------------------------------------

                $Hobby_Drawing    = stripslashes($_REQUEST['Hobby_Drawing']);
                $Hobby_Singing    = mysqli_real_escape_string($con, $Hobby_Singing);
                $Hobby_Dancing    = stripslashes($_REQUEST['Hobby_Dancing']);
                $Hobby_Sketching    = stripslashes($_REQUEST['Hobby_Sketching']);
                $Other_Hobby    = stripslashes($_REQUEST['Other_Hobby']);
                

                $Hobby = $Hobby_Drawing."-".$Hobby_Singing."-".$Hobby_Dancing."-".$Hobby_Sketching."-".$Other_Hobby;


                //-------------------------------------------------------------------------------

                $High_School    = stripslashes($_REQUEST['High_School']);
                $Higher_School    = mysqli_real_escape_string($con, $Higher_School);
                $Graduation    = stripslashes($_REQUEST['Graduation']);
                $Post_Graduate    = stripslashes($_REQUEST['Post_Graduate']);
                $Phd            = stripslashes($_REQUEST['Phd']);
                

                $QUALIFICATION = $High_School."-".$Higher_School."-".$Graduation."-".$Post_Graduate."-".$Phd;

                 //-------------------------------------------------------------------------------

                 $Course_BCA    = stripslashes($_REQUEST['Course_BCA']);
                 $Course_BCom    = stripslashes($_REQUEST['Course_BCom']);
                 $Course_BSc    = stripslashes($_REQUEST['Course_BSc']);
                 $Course_BA    = stripslashes($_REQUEST['Course_BA']);
                 $Course_Mca    = stripslashes($_REQUEST['Course_Mca']);
                 $Course_MCom    = stripslashes($_REQUEST['Course_M.Com']);
                 $Course_MSc    = stripslashes($_REQUEST['Course_M.Sc']);
                 $Course_MA    = stripslashes($_REQUEST['Course_MA']);
                 
 
                 $Course = $Course_BCA."-".$Course_BCom."-".$Course_BSc."-".$Course_BA."-".$Course_Mca."-".$Course_MCom."-".$Course_MSc."-".$Course_MA;


                  //-------------------------------------------------------------------------------

                $create_datetime = date("Y-m-d H:i:s");
                $query    = "INSERT into `student_register` (first_name, last_name, email,mobile_no,gender,date_of_birth,city,pin_code,state,hobbies,qualification,courses_applied, create_datetime)
                             VALUES ('$First_Name', '$Last_Name', '$email','$Mobile_Number',' $Gender',' $dob',' $City', ' $Pin_Code',' $State',' $Country','$Hobby','$QUALIFICATION',' $Course','$create_datetime')";
                $result   = mysqli_query($con, $query);
                if ($result) {
                    echo "<div class='form text-center alert'>
                          <h3>form are Submitted successfully.</h3><br/>
                          <p class='link'>Click here to <a href='login.php'>Login</a></p>
                          </div>";
                } else {
                    echo "<div class='form'>
                          <h3>Required fields are missing.</h3><br/>
                          <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                          </div>";
                }
            }            
            
            ?>
 

 
</body>
</html>