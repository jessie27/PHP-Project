<?php
if(isset($_POST['admin_name'])&& isset($_POST['password'])){
    $admin_name=$_POST['admin_name'];
    $password= $_POST['password'];
    
    $password_hash=  md5($password);
    
    if(!empty($admin_name)&& !empty($password)){
        
        $query= "SELECT adminid FROM admin WHERE admin_name='".mysql_real_escape_string($admin_name)."' AND password='".mysql_real_escape_string($password_hash)."'";  
        if($query_run=mysql_query($query)){
            $query_num_rows=mysql_num_rows($query_run);
            if($query_num_rows==0){
                echo 'Sorry!Invalid Username/Password Combination!!';
            
			} else if($query_num_rows==1) {
	          $admin_id = mysql_result($query_run, 0, 'adminid');
			  $_SESSION['admin_id']=$admin_id;
			  header('Location: checkloginsource.php');
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
<td>Admin name   </td>
<td>  :  </td>
<td><input type="text" name="admin_name" placeholder="name" ></td>
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