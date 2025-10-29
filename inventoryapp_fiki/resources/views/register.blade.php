<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

    <form method="POST" action="/welcome">
        @csrf
        
        <label>First name:</label><br/><br/>
        <input type="text" name="first_name" required placeholder="Input first name"/><br/>
        <br/>
        
        <label>Last name:</label><br/><br/>
        <input type="text" name="last_name" required placeholder="Input last name"/><br/>
        <br/>
        
        <label>Gender:</label><br/><br/>
        <input type="radio" name="gender" value="male"/>Male<br/>
        <input type="radio" name="gender" value="female"/>Female<br/>
        <input type="radio" name="gender" value="other"/>Other<br/>
        <br/>
        
        <label>Nationality:</label><br/><br/>
        <select name="country">
            <option value="indonesia">Indonesia</option>
            <option value="prancis">Prancis</option>
            <option value="usa">USA</option>
        </select>
        <br/><br/>
        
        <label>Language Spoken:</label><br/><br/>
        <input type="checkbox" name="language[]" value="bahasa_indonesia"/>Bahasa Indonesia<br/>
        <input type="checkbox" name="language[]" value="english"/>English<br/>
        <input type="checkbox" name="language[]" value="other"/>Other<br/>
        <br/>
        
        <label>Bio:</label><br/><br/>
        <textarea name="bio" cols="30" rows="10"></textarea><br/>

        <input type="submit" value="Sign Up">
    </form>

</body>
</html>