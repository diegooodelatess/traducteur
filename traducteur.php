<?php
 
$dico = [
    "chat" => "cat",
    "chien" => "dog",
    "maison" => "house",
    "voiture" => "car",
    "arbre" => "tree",
    "soleil" => "sun",
    "lune" => "moon",
    "mer" => "sea",
    "montagne" => "mountain",
    "ordinateur" => "computer",
    "telephone" => "phone",
    "table" => "table",
    "chaise" => "chair",
    "porte" => "door",
    "fenetre" => "window",
    "livre" => "book",
    "stylo" => "pen",
    "ville" => "city",
    "pays" => "country",
    "ecole" => "school",
    "ami" => "friend",
    "famille" => "family",
    "professeur" => "teacher",
    "eleve" => "student",
    "travail" => "work",
    "argent" => "money",
    "eau" => "water",
    "feu" => "fire",
    "terre" => "earth",
    "vent" => "wind",
    "rouge" => "red",
    "bleu" => "blue",
    "vert" => "green",
    "noir" => "black",
    "blanc" => "white",
    "beau" => "beautiful",
    "rapide" => "fast",
    "lent" => "slow",
    "fort" => "strong",
    "faible" => "weak",
    "grand" => "tall",
    "petit" => "small",
    "froid" => "cold",
    "chaud" => "hot",
    "manger" => "eat",
    "boire" => "drink",
    "marcher" => "walk",
    "parler" => "talk",
    "dormir" => "sleep"
];
 
$mot = strtolower($_POST["word"]);
$direction = $_POST["direction"];
 
if ($direction == "toEnglish") {
 
    $result = $dico[$mot] ?? "Mot non trouvé";
 
} else {
 
    $result = array_search($mot, $dico);
 
    if ($result === false) {
        $result = "Mot non trouvé";
    }
}
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Résultat</title>
</head>
<body>
 
<h1>Résultat :</h1>
<p><strong><?php echo $result; ?></strong></p>
 
<a href="traducteur.html">Nouvelle traduction</a>
 
</body>
</html>