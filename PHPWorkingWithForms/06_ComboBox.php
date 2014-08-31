<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>03_CalculateInterest</title>
</head>
<script>
    /*function changeSelectedOption(){
        var continents = ["Australia","Europa","Africa","Asia","North America","South America","Antarctica"];
        var value = document.getElementById('continents').value;
        var length = document.getElementById('continents').options.length;
        document.myForm.continents.options.length = 0;
        var master = document.getElementById('continents');
        for(var i = 0; i < length; i++){
            if(continents[i] !== value) {
                master.options[i] = new Option(continents[i], continents[i], true, true);
            }
        }
        master.options[i] = new Option(value, value, 'selected', true);

    }

    function createOptions() {
        var continents = ["Australia","Europa","Africa","Asia","North America","South America","Antarctica"];
        var length = 7;
        document.myForm.continents.options.length = 0;
        var master = document.getElementById('continents');

        for(var i = 0; i < length; i++){
            master.options[i] = new Option(continents[i], continents[i], true, true);
        }
    }
    //new Option(text, value, defaultSelected, selected);*/

</script>
<body>
<form method="post" name="myForm">
    <select name="continents" id="continents">
        <option value="Australia">Australia</option>
        <option value="Europa">Europa</option>
        <option value="Africa">Africa</option>
        <option value="Asia">Asia</option>
        <option value="North America">North America</option>
        <option value="South America">South America</option>
        <option value="Antarctica">Antarctica</option>
    </select>


    <select name="countries">
        <option>Countries</option>

        <?php

        if(isset($_POST['submit'])) {
            $continent = htmlentities($_POST['continents']);
            switch($continent) {
                case "Australia":
                    echo "<option>$continent</option>";
                    break;
                case "Africa":
                    $countries =  file_get_contents('countriesOfAfrica.txt');
                    $countries = explode("\r\n", $countries);
                    showCountries($countries);
                    break;
                case "Europa":
                    $countries =  file_get_contents('countriesOfEuropa.txt');
                    $countries = explode("\r\n", $countries);
                    showCountries($countries);
                    break;
                case "Asia":
                    $countries =  file_get_contents('countriesOfAsia.txt');
                    $countries = explode("\r\n", $countries);
                    showCountries($countries);
                    break;
                case "North America":
                    $countries =  file_get_contents('countriesOfNorthAmerica.txt');
                    $countries = explode("\r\n", $countries);
                    showCountries($countries);
                    break;
                case "South America":
                    $countries =  file_get_contents('countriesOfSouthAmerica.txt');
                    $countries = explode("\r\n", $countries);
                    showCountries($countries);
                    break;
                default: break;
            }
        }

        function showCountries($countries) {
            foreach($countries as $country) {
                echo "<option>$country</option>";
            }
        }
        ?>

    </select>
    <input type="submit" name="submit"/>
</form>

</body>
</html>
