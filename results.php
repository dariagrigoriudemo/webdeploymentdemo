<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <h2> Summary of Responses</h2>
        <ol>
            <li> Feature: <?php echo $_POST['q1']; ?>. </li>
            <li> Improvements: <?php echo htmlspecialchars($_POST['q2']); ?> </li>
        </ol>

        Thank you for your survey participation! 

		<h2>Configuration</h2>
		<?php 

$variabe_name = 'DEPLOYMENT_ENVIRONMENT';
$config_value = getenv($variabe_name);
echo "<b>[$variabe_name:]</b>$config_value<br>";

		?>

    </body>
</html>
