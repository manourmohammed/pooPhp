<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f3f4f6;
        }
        .signup-container {
            background-color: #ffffff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .login-link {
            text-align: center;
            margin-top: 15px;
        }
        .login-link a {
            color: #4CAF50;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php 
    include("Config.php");
    ?>
    <div class="signup-container">
        <h2>Inscription</h2>
        <form action="" method="post">
            <label >Nom d'utilisateur</label>
            <input type="text" id="username" name="username" />
            <span style = "color:red"><?php echo $name?><span>


            <label>Email</label>
            <input type="text" id="email" name="email" />
            <span style = "color:red"><?php echo $email?><span>

            <label >Mot de passe</label>
            <input type="password" id="password" name="password" />
            <span style = "color:red"><?php echo $password?><span>


            <label >Confirmer le mot de passe</label>
            <input type="password" id="confirm_password" name="confirm_password" />
            <span  style = "color:red"><?php echo $confirme?><span>


            <input type="submit" value="S'inscrire" name="submiteValue">
        </form>
       
    </div>
</body>
</html>
