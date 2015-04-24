<h1>Edit Account!</h1>
<?php print_r($this->account);?>
<form method='post' action="<?php echo URL;?>account/saveInfoChange/<?php echo $this->account['id'];?>">
    <table>
        <tr>
            <td><label>User</label></td>
            <td><input type="text" name="user" value="<?php echo $this->account['user'];?>" /></td>
        </tr>   
        <tr>
            <td><label>Password</label></td>
            <td><input type="password" name="password" /></td>
        </tr>    
        <tr>
            <td><label>Role</label></td>
            <td>
                <select name="role">
                    <option value="default">Default</option>
                    <option value="owner" <?php if($this->account['role']=='owner') echo 'selected';?> >Owner</option>
                    <option value="admin" <?php if($this->account['role']=='admin') echo 'selected';?>>Admin</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="1"><input type='submit'/></td>
        </tr>
    </table>
</form>