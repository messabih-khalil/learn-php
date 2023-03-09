<?php

    if (isset($_POST)) {
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST["age"]);
        echo $name;
        echo $age;
    }
?>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

    <div>
        <label for="name">
            NAME : 
        </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">
            AGE : 
        </label>
        <input type="text" name="age">
    </div>

    <input type="submit" value="Submit" name="submit">
</form>