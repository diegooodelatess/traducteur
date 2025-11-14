<?php
 
// --- DICTIONNAIRE INTEGRE ---

function getDictionary() {

    return [

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

}
 
// --- NORMALISATION ---

function normalizeWord($word) {

    return strtolower(trim($word));

}
 
// --- SELECTION DU DICTIONNAIRE SELON LA DIRECTION ---

function getWord($direction) {

    $dict = getDictionary();

    if ($direction === "toEnglish") return $dict;

    if ($direction === "toFrench") return array_flip($dict);

    return [];

}
 
// --- TRADUCTION ---

function translateWord($word, $direction) {

    $word = normalizeWord($word);

    $dictionary = getWord($direction);

    return $dictionary[$word] ?? "Mot non trouvé";

}
 
// --- RECUPERATION DU FORMULAIRE ---

$word = $_POST['word'] ?? "";

$direction = $_POST['direction'] ?? "";
 
$result = translateWord($word, $direction);

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

 