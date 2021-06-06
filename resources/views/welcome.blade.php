<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/app.css">
    <title>User Registration</title>
</head>
<body>

    <div class = "container">

        <div class ="greeting">
            <div class = "text">
                <h1 class = "hello" >Hello Friend!</h1>
                <p class = "paragraph">Enter your personal details and start journy with us!<p>
            </div>
        </div> 

        <div class = "registration-form">

          <form>

            <div class = "form">

                <div class ="form-container">
                    <h1 class = "add-user">Add a User</h1>
                    <p class = "add-info">Type in your info</p>

                    <label for="name"></label>
                    <input type="text" placeholder="Name" name="name" id="name" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
                    <hr>
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                    <button type="submit" class="registerbtn">Register</button>

                </div>
            </div>

           </form>
        </div>

    </div>
</body>
</html>