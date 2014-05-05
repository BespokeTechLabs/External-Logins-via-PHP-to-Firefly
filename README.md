External-Logins-via-PHP-to-Firefly
==================================

PHP Firefly External Logon Authoriser
Written by Lewis Smallwood on 5th May 2014 - http://www.lewistech.co.uk/

The PHP file called loginHandler.php will interpret HTTP POST requests containing the users authentication data.

This file generally should be stored on a separate server to your firefly virtual machine where you wish to pull the request.

This code was originally used as a method of authicating users on a separate web interface. This code takes the username and password input from your HTML form and then POSTS the contents to the loginHandler.php page which sends a server side network request to the specified Firefly server. The local script will then return if Firefly logged in successfully or received an error returning the state to the local script.

The local login form should take the following syntax:

	<form method="post" action="loginHandler.php">
	   <center><p>Please enter your username and password.</p></center>
	   <center><table border="0" cellspacing="0px" cellpadding="5px" bgcolor="#FFFFFF">
		<tr>
		   <td width="50px">Username: </td>
		   <td><input type="text" name="username" style="width: 200px;" /></td>
		</tr>
		<tr>
		   <td width="50px">Password: </td>
		   <td><input type="password" name="password" style="width: 200px;" /></td>
		</tr>
	   </table></center>
	   <center></br><input type="submit" name="submit" style="width: 290px;" value="Submit" /></br></br></center>
	</form>

I would like to point out that this code is still used for testing purposes within a school enviroment and could change depending on Firefly Encryptions and Updates. But for a "stumble in the dark" I hope this may solve some challenges other developers may be facing with implementation within School's or Businesses :)

Finally, Firefly is the respective property of Firefly Solutions LLP. (2014). I would highly suggest crediting them whenever this is used.

Lewis Smallwood
