<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
.header{
	width:100%;
	height:150px;

	background-color:#CC3300;
	float:left;
	text-align:center;
	color:#09F;
		}
	.menu{
	width:100%;
	height:50px;

	background-color:#666699;
	float:left;
	text-align:center;
	color:#09F;
		}
		.image{
	width:100%;
	height:200px;
    background-image:url(.2.png);
	float:left;
	text-align:center;
	color:#09F;
		}
		.left{
	width:49.99%;
	height:200px;
    background-color:#66FFFF;
	float:left;
	text-align:center;
	color:#09F;
		}
			.right{
	width:49.99%;
	height:200px;
    background-color:#CCFFCC;
	float:left;
	text-align:center;
	color:#09F;
		}
		.footer{
	width:100%;
	height:150px;

	background-color:#993366;
	float:left;
	text-align:center;
	color:#CCCCFF;
		}
</style>
</head>

<body>
<div class="header">
THIS IS MY HEADER DIV
</div>
<div class="menu">
HOME MENU
</div>
<div class="image">

</div>
<div class="left">
</div>
<div class="right">
<form method="POST">
<div class="frontform"><input type="text" name="uname" placeholder="Your Name" required="required"  /></div>
<div class="frontform"><input type="email" name="uemail" placeholder="Your Email" required="required"  /></div>
<div class="frontform"><input type="text" name="contact" id="contact" placeholder="Your Contact" maxlength="10" onkeyup="f3()" required="required"  /></div>
<div class="frontform">Male: <input type="radio" name="gender" value="male" /> |
Fe-Male: <input type="radio" name="gender" value="female" /></div>
<div class="frontform">Tech. Prob.<input type="checkbox" value="techproblem" name="techproblem" /> |
Tutorial Prob.<input type="checkbox" name="tutorialproblem" value="tutorialproblem" /> |
Tutor Prob.<input type="checkbox" name="tutorproblem" value="tutorproblem" /> |
Other<input type="checkbox" name="other" value="other" />
</div>
<div class="frontform"><textarea name="problem" required="required"> Problem ? </textarea></div>

<div class="frontform">
<select name="city" required="required">
<option value="">Select City </option><option value="Delhi">Delhi</option><option value="Meerut">Meerut</option>
</select>
<input type="submit" name="submit"  />
</div>
</div>
</form>
</div>
<div class="footer">
footer
</div>
</body>
</html>
