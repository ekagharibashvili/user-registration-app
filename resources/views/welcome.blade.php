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
                    <hr>
                    <input type="text" placeholder="Name" name="name" id="name" required>
                    <hr>
                    <input type="text" placeholder="country" name="country" id="country" required>
                    <hr>
                    <input type="text" placeholder="Date of Birth" name = "date" id = "date" onfocus="(type='date')">
                    <hr>
                    <button type="submit" class="save">SAVE</button>

                </div>
            </div>

           </form>
        </div>

    </div>

    <script src ="js/app.js"></script>
</body>
</html>