
<!DOCTYPE html>
<html>
<title>MMIS 6391 - Jordan Mixon</title>
        <p>
          <form action="response2.php" target="_blank" method="post">
            How great are you at Photoshop?<br>
            <input type="range" name="ps"><br><br>
            First Name:<br>
            <input type="text" name="fname"><br><br>
            Grade Level (between 1 - 12):<br>
            <input type="number" name="grade" min="1" max="12"><br><br>
            Password REQUIRED (5 digits):<br>
            <input type="password" name="pwd" minlength="5" required><br><br>
            Favorite Car:<br>
            <select name="cars">
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="fiat">Fiat</option>
              <option value="audi">Audi</option>
            </select><br><br>
            <textarea name="jobdesc" rows="10" columns="30">
              This has 10 rows and 30 cols.
            </textarea><br><br>
            Gender:<br>
            <input type="radio" name="gender" value="Male">Male<br>
            <input type="radio" name="gender" value="Female">Female<br>
            <input type="radio" name="gender" value="Other">Other<br><br>
            Select your favorite color:<br>
            <input type="color" name="favcolor" value="#ff0000"><br><br>
            Select your birthday REQUIRED:<br>
            <input type="date" name="bday"><br><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
          </form>
        </p>
</html>
