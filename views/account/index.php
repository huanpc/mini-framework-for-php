<h1>Account Management</h1>
<div id="NewAccount">
<h4>Add new account</h4>
        <form method='post' action="<?php echo URL;?>account/create">
        <table>
            <tr>
                <td><label>User</label></td>
                <td><input type="text" name="user" required="true"/></td>
            </tr>   
            <tr>
                <td><label>Password</label></td>
                <td><input type="password" name="password" required="true"/></td>
            </tr>    
            <tr>
                <td><label>Role</label></td>
                <td>
                    <select name="role">
                        <option value="default">Default</option>
                        <option value="owner">Owner</option>
                        <option value="admin">Admin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type='submit' value="Submit"/></td>
            </tr>
        </table>
        </form>
</div>
<div id="AccountList">
        <h4>Account exist:</h4>
        <table>
        <?php 
            echo '<tb>';
            foreach($this->accountList as $key=>$value){
                echo '<tr>';
                echo '<td>'.$value['id'].'</td>';
                echo '<td>'.$value['user'].'</td>';
                echo '<td>'.$value['role'].'</td>';        
                echo '<td><a href="'.URL.'account/edit/'.$value['id'].'">Edit</a> '
                .' <a href="'.URL.'account/delete/'.$value['id'].'">Delete</a></td>';        
                echo '</tr>';
            }
        ?>   
        </table>
</div>        
        