<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CV Generator</title>
    <link rel="stylesheet" href="styles.css">
    <style>

        fieldset {
            width: 750px;
            background-color: #f4d6ed;
            padding: 10px;
        }

        legend {
            font-size: 20px;
            color: #be58a7;
            font-weight: bold;
        }

        select {
            width: 179px;
            height: 25px;
        }

        input[type="email"], input[type="tel"], input[type="text"] {
            width: 175px;
            height: 20px;
            margin-bottom: 5px;
        }

        button {
            width: 179px;
            height: 25px;
        }

        td, th, table{
            border: 1px solid blue;
            border-collapse: collapse;
            padding: 5px;
        }

    </style>
    <script>
        var nextId = 0;
        var next = 0;
        function addInput() {
            nextId++;
            var newDiv = document.createElement('div');
            newDiv.setAttribute('id',("inputBox" + nextId));
            newDiv.innerHTML =
                "<input type='text' required='required' name='computerLanguages[]'/>" +
                "<select name='levelOfComputerSkills[]'> " +
                "<option value='Beginner'>Beginner</option>" +
                "<option value='Programmer'>Programmer</option>" +
                "<option value='Ninja'>Ninja</option></select>";
            document.getElementById('parent').appendChild(newDiv);
        }

        function removeInput(id) {
            var id = "inputBox" + nextId;
            var inputBox = document.getElementById(id);
            document.getElementById('parent').removeChild(inputBox);
            nextId--;
        }
    </script>
</head>


<body>

<form method="post">
    <fieldset>
        <legend>Personal information</legend>
            <input type="text" name="firstName" placeholder="First name"/><br>
            <input type="text" name="lastName" placeholder="Last name"/><br>
            <input type="email" name="email" placeholder="Email"/><br>
            <input type="tel" name="tel" placeholder="Phone number"/><br>
            Female <input type="radio" name="gender" value="female"/>
            Male <input type="radio" name="gender" value="male"/> <br>
            <label for="birthDate"> Birth Date <br>
                <input type="date" id="birthDate" name="birthDate" />
            </label><br>
            <label for="nationality"> Nationality
                <br>
                <select id="nationality" name="nationality">
                    <option value="Bulgarian">Bulgarian</option>
                    <option value="Indian">Indian</option>
                    <option value="Britisher">Britisher</option>
                    <option value="Frenchman">Frenchman</option>
                    <option value="German">German</option>
                </select>
            </label>
    </fieldset>

    <fieldset>
        <legend>Last work position</legend>
        <label for="companyName">Company name
            <input type="text" name="companyName"/>
        </label><br>
        <label for="from"> From
            <input type="date"  name="from" />
        </label><br>
        <label for="to"> To
            <input type="date" name="to" />
        </label><br>
    </fieldset>

    <fieldset>
        <legend>Computer skills</legend>
        <div id="parent">
            <!--Programing Languages
            <br>
            <input type="text" name="computerLanguages"/>
            <select name="levelOfComputerSkills">
                <option value="Beginner">Beginner</option>
                <option value="Programmer">Programmer</option>
                <option value="Ninja">Ninja</option>
            </select>-->
        </div>
        <br>
        <script>addInput()</script>
        <button><a href="javascript: addInput()">Add Language</a></button>
        <button><a href="javascript: removeInput(nextId)">Remove Language</a></button>
    </fieldset>

    <fieldset>
        <legend>Other skills</legend>
        <label for="Languages"> Languages <br>
            <input type="text" name="Languages"/>
        </label>
        <select name="comprehensions">
            <option value="comprehensions">-comprehensions-</option>
            <option value="Beginner">Beginner</option>
            <option value="Programmer">Intermediate</option>
            <option value="Ninja">Advanced</option>
        </select>
        <select name="reading">
            <option value="reading">-reading-</option>
            <option value="Beginner">Beginner</option>
            <option value="Programmer">Intermediate</option>
            <option value="Ninja">Advanced</option>
        </select>
        <select name="writing">
            <option value="writing">-writing-</option>
            <option value="Beginner">Beginner</option>
            <option value="Programmer">Intermediate</option>
            <option value="Ninja">Advanced</option>
        </select>
        <br>
        <button>Remove Languages</button>
        <button>Add Language</button>
        <p>Drivers License</p>
        <label for="B">B
            <input type="checkbox" name="license[]" value="B" >
        </label>
        <label for="A">A
            <input type="checkbox" name="license[]" value="A" >
        </label>
        <label for="C">C
            <input type="checkbox" name="license[]" value="C" >
        </label>
    </fieldset>

    <input type="submit" value="Generate CV" name="submit"/>
</form>
<?php
    if(isset($_POST['submit']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['Languages'])&&
    isset($_POST['companyName']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['gender']) &&
    isset($_POST['birthDate']) && isset($_POST['nationality']) && isset($_POST['from']) && isset($_POST['to']) &&
    isset($_POST['computerLanguages']) && isset($_POST['levelOfComputerSkills']) && isset($_POST['Languages']) &&
    isset($_POST['comprehensions']) &&  isset($_POST['reading']) && isset($_POST['writing']) && isset($_POST['license'])) {

    $firstName = htmlentities($_POST['firstName']);
    $lastName = htmlentities($_POST['lastName']);
    $languages = htmlentities($_POST['Languages']);
    $companyName = htmlentities($_POST['companyName']);
    $phoneNumber = htmlentities($_POST['tel']);
    $email = htmlentities($_POST['email']);
    $gender = htmlentities($_POST['gender']);
    $birthDate = htmlentities($_POST['birthDate']);
    $nationality = htmlentities($_POST['nationality']);
    $from = htmlentities(($_POST['from']));
    $to = htmlentities(($_POST['to']));
    $programLanguages = ($_POST['computerLanguages']);
    $computerSkills = ($_POST['levelOfComputerSkills']);
    $comprehensions = ($_POST['comprehensions']);
    $reading = ($_POST['reading']);
    $writing = ($_POST['writing']);
    $license = ($_POST['license']);
    $licenseToString = join(',', $license);

    if((strlen($firstName) < 2 && strlen($firstName) > 20) && empty($firstName))
    {
        echo "The first name must be between 2 and 20 symbols!";
    }
    elseif((strlen($lastName) < 2 && strlen($lastName) > 20) && empty($lastName))
    {
        echo "The last name must be between 2 and 20 symbols!";
    }
    elseif((strlen($languages) < 2 && strlen($languages) > 20) && empty($languages))
    {
        echo "The languages must be between 2 and 20 symbols!";
    }
    elseif((strlen($companyName) < 2 && strlen($companyName) > 20) &&
        (!preg_match('/^[A-za-z ]{2,20}$/', $companyName)) &&
        empty($companyName))
    {
        echo "The Company name is not correct! It must contain only letters or digits, between 2 and 20 symbols!";
    }
    elseif(!preg_match('/^(\+{0,}[\d- ]+)$/', $phoneNumber) && empty($phoneNumber))
    {
        echo "The phone number is not correct! It must contain only digits and symbols: '+' '-'!";
    }
    elseif(!preg_match('/^[^@]+@[^@]+\.[^@]+$/', $email) && empty($email))
    {
        echo "The email is not correct! It must contain only digits, letters, only one @ and only one dot!";
    }
    else {?>
         <br>
            <table>
                  <tr><th colspan='2'>Personal Information</th></tr>
                  <tr><td>First Name</td><td><?=$firstName?></td></tr>
                  <tr><td>Last Name</td><td><?=$lastName?></td></tr>
                  <tr><td>Email</td><td><?=$email?></td></tr>
                  <tr><td>Phone Number</td><td><?=$phoneNumber?></td></tr>
                  <tr><td>Gender</td><td><?=$gender?></td></tr>
                  <tr><td>Birth Date</td><td><?=$birthDate?></td></tr>
                  <tr><td>Nationality</td><td><?=$nationality?></td></tr>
              </table>
        <br>
        <table>
                  <tr><th colspan='2'>Last Work Position</th></tr>
                  <tr><td>Company name</td><td><?=$companyName?></td></tr>
                  <tr><td>From</td><td><?=$from?></td></tr>
                  <tr><td>To</td><td><?=$to?></td></tr>
              </table>
        <br>
        <table>
                  <tr><th colspan='2'>Computer Skills</th></tr>
                  <tr>
                      <td>Programing Languages</td>
                      <td>
                          <table>
                                <tr><th>Language</th><th>Skill Level</th></tr>
                                <?php
                                    $programLanguages = $_POST['computerLanguages'];
                                    $computerSkills = $_POST['levelOfComputerSkills'];
                                    $length = count($programLanguages);
                                    for($i=0; $i < $length; $i++):
                                    ?>
                                    <tr><td><?=htmlentities($programLanguages[$i]) ?></td><td><?=htmlentities($computerSkills[$i]) ?></td></tr>
                                    <?php
                                    endfor;
                                    ?>


                          </table>
                      </td>
                  </tr>
              </table>
            <br>
            <table>
                  <tr><th colspan='2'>Other Skills</th></tr>
                  <tr>
                      <td>Languages</td>
                      <td>
                          <table>
                                <tr><th>Language</th><th>Comprehension</th><th>Reading</th><th>Writing</th></tr>
                                <tr><td><?=$languages?></td><td><?=$comprehensions?></td><td><?=$reading?></td><td><?=$writing?></td></tr>
                          </table>
                      </td>
                  </tr>
                  <tr>
                      <td>Driver's License</td>
                      <td>
                          <?php echo $licenseToString ?>
                      </td>
                  </tr>
            </table>

<?php }}?>
