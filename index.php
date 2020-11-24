<?php
$age = 18;
$gender = 'homme';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2 exo2</title>
</head>
<body>
    <?php
if ($age >= 18 && $gender == 'homme') {
    echo 'Vous êtes un homme et vous êtes majeur.';
}
else if ($age >= 18 && $gender == 'femme') {
    echo 'Vous êtes une femme et vous êtes majeur.';
}
else if ($age < 18 && $gender == 'homme') {
    echo 'vous êtes un homme et vous êtes mineur.';
}
else {
    echo 'Vous êtes une femme et vous êtes mineur.';
}
    ?>

<!-- version 2 -->
    
</body>
</html>