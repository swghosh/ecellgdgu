<?php
$title = 'Campus Ambassadors';
$stylesheets = array('/stylesheets/ambassador.css');
include('header.php');
?>
<div class="background fm">
  <div class="form">
  <h2 align = "center"><a href="\task.php">Already Registerd ?</a></h2>
</div>
<div class="form">
 <form method="post" action="ambassadors_submit.php"  autocomplete="on">

<h1>Want to be your Campus Ambassador? </h1>
<h2>Sign up with your details </h2>
<br>
<input type="text" placeholder="Name" name="name"><br><br>
<input type="email" placeholder="Email Address" name="email"><br><br>
<input type="tel" placeholder="Phone Number" name="phno"><br><br>
<select placeholder="Gender" name="gender">
  <option>-- Select Gender --</option>
  <option value="male">Male</option>
   <option value="female">Female</option>
   <option value="others">Other</option>
 </select><br><br>
<input type="text"  name="city" placeholder="City"> <br><br>
<input type="text" placeholder="Tell us why would you like to enroll?" name="why"><br><br>
<input type="text" name="college"  placeholder="University/College"><br><br>
<input type="text" placeholder="Anything else you would like us to know?" name="other" ><br><br>

<b >  We will keep you posted with further updates and may invite you for our meetups on your provided contact details.
<br><br>
<input id="opt-in" onclick="inchanged()" type="radio" name="opt" value="opt-in" checked="unchecked">Opt-in<br>
<input id="opt-out " checked type="radio" onclick="outchanged()" name="opt" value="opt-out" checked="checked">Opt-out<br>
</b><br>
<input id="Submit" disabled="disabled" type="submit" value="Sign Up">
<br>
</form>
<script>
function outchanged() {
document.getElementById("Submit").disabled=true;
}
function inchanged(){
document.getElementById("Submit").disabled=false;
}
</script>
</div>
</div>
<?php
$scripts = array();
include('footer.php');
?>
