<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>03_CalculateInterest</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="03_CalculateInterest.php" method="post">
        <label for="amount"> Enter Amount
            <input type="text" name="amount" />
        </label> <br>

        <label for="usd">
            <input type="radio" name="currency" id="usd" value="$"/>
            USD
        </label>

        <label for="eur">
            <input type="radio" name="currency" id="eur" value="€"/>
            EUR
        </label>

        <label for="bgn">
            <input type="radio" name="currency" id="bgn" value="BGN"/>
            BGN
        </label> <br>

        <label>Compound Interest Amount
            <input type="text" name="interestAmount" />
        </label> <br>

        <select name="period">
            <option value="0.5">6 Months</option>
            <option value="1">1 Year</option>
            <option value="2">2 Years</option>
            <option value="5">5 Years</option>
        </select>

        <input type="submit" name="submit" value="Calculate"/>
    </form>

    <?php
        //A = P (1 + r) ^ t ; A = 5000 (1 + 0.05 / 12) ^ 12(10);
        if(isset($_POST['submit'])) {
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            $interestAmount = $_POST['interestAmount'];
            $interestAmount = ($interestAmount / 100) / 12;
            $period = $_POST['period'];
            $result = $amount * pow((1 + $interestAmount), (12 * $period));
            $result = round($result, 2);
            echo ($currency.$result);
        }
    ?>
</body>
</html>