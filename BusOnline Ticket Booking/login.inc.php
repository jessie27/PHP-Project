


<?php
if(isset($_POST['username'])&& isset($_POST['password'])){
    $username=$_POST['username'];
    $password= $_POST['password'];
    
    $password_hash=  md5($password);
    
    if(!empty($username)&& !empty($password)){
        
        $query= "SELECT userid FROM user WHERE username='".mysql_real_escape_string($username)."' AND password='".mysql_real_escape_string($password_hash)."'";  
        if($query_run=mysql_query($query)){
            $query_num_rows=mysql_num_rows($query_run);
            if($query_num_rows==0){
                echo 'Sorry!Invalid Username/Password Combination!!';
            
			} else if($query_num_rows==1) {
	          $user_id = mysql_result($query_run, 0, 'userid');
			  $_SESSION['user_id']=$user_id;
			  header('Location: loginsource.php');
	} 
             
        }
    }
 else {
        echo 'You must supply an username and a password!';
    }
}


?>

<form action="<?php echo $current_file; ?>" method="POST">
    
	    <div align="center" style="vertical-align:bottom">
        <div align="center" style="vertical-align:bottom">
 <table cellpadding='0'cellspacing='0' border='1'>
<tr>
<td>Username   </td>
<td>  :  </td>
<td><input type="text" name="username" placeholder="username" ></td>
</tr>
<td>Password   </td>
<td>  :  </td>
<td><input type="password" name="password" placeholder="password" ></td>
</tr>
        
        <tr>
		<td>
            <td colspan="2"><input type="submit" value=  "Log In"></td>
        </tr>
    </table>
    </div>
</form>