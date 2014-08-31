<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 3 - Handlebars</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        table ,td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: #f3c4e9;
        }
        td, th {
            width: 100px;
        }
        form {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<form method="post" action="03_AnnualExpenses.php">
    <label for="years">
        Enter number of years:
        <input type="text" name="years" />
    </label>
    <input type="submit" name="submit" value="Show costs" />
</form>

<?php
if(isset($_POST['submit']) && !empty($_POST['years'])):
    $numberOfYears = htmlentities($_POST['years']);
    $years = [];
    $thisYear = date('Y');

    for($i = 0; $i < $numberOfYears; $i++) {
        $currentYear = $thisYear - $i;
        $years[$i] = $currentYear;
    }?>

    <table>
    <tr><th>Year</th><th>January</th><th>February</th><th>March</th><th>April</th><th>May</th><th>June</th><th>July</th><th>August</th><th>September</th><th>October</th><th>November</th><th>December</th><th>Total</th></tr>
<?php
    foreach($years as $year) :
        $currentTotalSum = 0; ?>
        <tr><th><?= $year ?></th>
            <td><?php $currentRandMonth = rand(0, 999); $currentTotalSum += $currentRandMonth; echo $currentRandMonth ?></td>
            <td><?php $currentRandMonth = rand(0, 999); $currentTotalSum += $currentRandMonth; echo $currentRandMonth ?></td>
            <td><?php $currentRandMonth = rand(0, 999); $currentTotalSum += $currentRandMonth; echo $currentRandMonth ?></td>
            <td><?php $currentRandMonth = rand(0, 999); $currentTotalSum += $currentRandMonth; echo $currentRandMonth ?></td>
            <td><?php $currentRandMonth = rand(0, 999); $currentTotalSum += $currentRandMonth; echo $currentRandMonth ?></td>
            <td><?php $currentRandMonth = rand(0, 999); $currentTotalSum += $currentRandMonth; echo $currentRandMonth ?></td>
            <td><?php $currentRandMonth = rand(0, 999); $currentTotalSum += $currentRandMonth; echo $currentRandMonth ?></td>
            <td><?php $currentRandMonth = rand(0, 999); $currentTotalSum += $currentRandMonth; echo $currentRandMonth ?></td>
            <td><?php $currentRandMonth = rand(0, 999); $currentTotalSum += $currentRandMonth; echo $currentRandMonth ?></td>
            <td><?php $currentRandMonth = rand(0, 999); $currentTotalSum += $currentRandMonth; echo $currentRandMonth ?></td>
            <td><?php $currentRandMonth = rand(0, 999); $currentTotalSum += $currentRandMonth; echo $currentRandMonth ?></td>
            <td><?php $currentRandMonth = rand(0, 999); $currentTotalSum += $currentRandMonth; echo $currentRandMonth ?></td>
            <th><?php echo $currentTotalSum ?></th>
        </tr>

<?php endforeach;
endif;
?>

</table>

</body>
</html>
