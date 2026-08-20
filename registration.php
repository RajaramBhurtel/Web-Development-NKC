<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="styles/styles.css" >
    <style>
        /* Tag Selector */
        p{
            color: red;
        }

        /* ID Selector */
        #paragraph3{
            color: green;
        }

        /* Class Selector */
        .bca{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h1>Registration Page</h1>
    <form>
        <div>
            <label for="FullName"> Name: </label>
            <input type="text" id="FullName" name="FullName" placeholder="Enter your name">
        </div>
        <div>
            <label for="email"> Email: </label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
        </div>
        <div>
            <label for="phone"> Phone: </label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your Phone">
        </div>
        <div>
            <label for="dob"> DOB: </label>
            <input type="date" id="dob" name="dob">
        </div>
        <div>
            <label for="time"> Time: </label>
            <input type="time" id="time" name="time">
        </div>
        <div>
            <label for="Color"> Color: </label>
            <input type="color" id="Color" name="Color">
        </div>
        <div>
            <label for="gender"> Gender: </label>

            <input type="radio" id="gender" name="gender" value="male">
            <label for="gender"> Male </label>
            <input type="radio" id="gender" name="gender" value="female">
            <label for="gender"> Female </label>
            <input type="radio" id="gender" name="gender" value="others">
            <label for="gender"> Others </label>

        </div>
        <div>
            <label for="hobbies"> Hobbies: </label>

            <input type="checkbox" id="hobbies" name="hobbies" value="coding">
            <label for="hobbies"> Coding </label>
            <input type="checkbox" id="hobbies" name="hobbies" value="movie">
            <label for="hobbies"> Movie </label>
            <input type="checkbox" id="hobbies" name="hobbies" value="singing">
            <label for="hobbies"> Singing </label>

        </div>
        <div>
            <label for="Color"> Color: </label>
            <input type="color" id="Color" name="Color">
        </div>

        <div>
            <input type="submit" id="submit" name="submit" value="Register">
        </div>

    </form>
</body>
</html>