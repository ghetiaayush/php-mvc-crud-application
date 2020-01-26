<?php 
//echo "<pre>";
//print_r($data);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<table border="1" align="center" class="table table-bordered">
	<tr>
    	<td>First Name</td>
        <td><input type="text" name="fname" value="<?php echo $data['fname']; ?>" /></td>
    </tr>
    <tr>
    	<td>Last Name</td>
        <td><input type="text" name="lname" value="<?php echo $data['lname']; ?>" /></td>
    </tr>
    <tr>
    	<td>Email</td>
        <td><input type="text" name="email" value="<?php echo $data['email']; ?>" /></td>
    </tr>
    <tr>
    	<td>Password</td>
        <td><input type="password" name="password" value="<?php echo $data['password']; ?>" /></td>
    </tr>
    <tr>
    	<td>Role</td>
        <td><input type="text" name="role" value="<?php echo $data['role']; ?>"  /> </td>
    </tr>
    <tr>
		<td colspan="2"><input type="submit" name="update_btn" class="btn btn-danger" /></td>
    </tr>
</table>
</form>
</body>
</html>