<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="serve.php" method="POST" enctype="multipart/form-data">
        <label>
            Name :
            <input type="text" name="name">
        </label>

        <hr>
        
        <label>
            Age :
            <input type="number" name="age">
        </label>

        <hr>

        <p>Gender:</p>
        
        <label>
            <input type="radio" name="gender" value="male">
            Male
        </label>
        <label>
            <input type="radio" name="gender" value="female">
            Female
        </label>

        <hr>

        <p>Roles</p>

        <label>
            <input type="checkbox" name="roles[]" value="administrator">
            Administrator
        </label>
        <label>
            <input type="checkbox" name="roles[]" value="editor">
            Editor
        </label>
        <label>
            <input type="checkbox" name="roles[]" value="Moderator">
            Moderator
        </label>

        <hr>

        <p>Image: </p>
        <input type="file" name="image">

        <hr>

        <p>Country: </p>
        <select name="country" >
            <option value="mexico" selected>México</option>
            <option value="united states">United States</option>
            <option value="canada">Canada</option>
        </select>

        <hr>

        <p>Observations</p>
        <textarea name="observation" cols="30" rows="5"></textarea>

        <hr>

        <Button type="submit">Enviar</Button>
        
    </form>
</body>
</html>