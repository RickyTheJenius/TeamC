<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <form method="post" action="http://localhost/php/FinalProject02/login.php">
        <div class="container">
          <div class="head">
            <h2>Login Form</h2>
          </div>
          <select name="role">
            <option value="admin">Admin</option>
            <option value="students">Students</option>
          </select>
          <br>
          <input  type="text" name="id" placeholder="id" /><br />
          <input type="password" name="pass" placeholder="Password" /><br />
          <button id="submit" type="submit">
            Login
          </button>
        </div>
      </form>
</body>
</html>