<?php

require '../libs/Form.php';

if(isset($_REQUEST['run'])){
 $form = new Form();
 
 $form  -> post('name')-> val('minlength',3);
 $form  -> post('age')->val('digit');
 $form  -> post('gender');
 $a = $form->fetch();
 $b = $form->fetch('age');
 print_r($a);
}
?>

<form method="post" action="?run">
    Name <input type="text" name="name"/>
    Age <input type="text" name="age"/>
    Gender <select name="gender">
        <option value="m">Male</option>
        <option value="f">Female</option>
    </select>
    <input type="submit" />
</form>

