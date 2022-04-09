<?php 

    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $gender = $_REQUEST['gender'];
    $roles = $_REQUEST['roles'];
    $country = $_REQUEST['country'];
    $observation = $_REQUEST['observation'];

    $image = $_FILES['image'];
    $path = $_SERVER['DOCUMENT_ROOT'].'/23-forms/images'.'/'.$image['name'];

    echo "username: $name <br>";
    echo "age: $age <br>";
    echo "gender: $gender <br>";
    echo "roles: <br>";

    echo "<ul>";
    foreach ($roles as $key => $role) {
        echo "<li> $role </li>";
    }
    echo "</ul> <br>";

    echo "country: $country <br>";
    echo "observations: $observation <br>";

    // echo $path.'<br>';
    // var_dump($image);

    move_uploaded_file($image['tmp_name'], $path);
?>