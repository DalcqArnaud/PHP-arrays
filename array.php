<?php 
    $me = [
        "firstname" => "Arnaud",
        "lastname" => "Dalcq",
        "age" => 24,
        "favoriteSeason" => "Winter",
        "LikeSoccer" => false,
        "hobbies" => ["Streaming", "Draw", "Play video-games"]];

    $myMother = [
        "firstname" => "Muriel",
        "lastname" => "Wullus",
        "age" => 53,
        "favoriteSeason" => "Summer",
        "LikeSoccer" => false,
        "hobbies" => ["Chill on Facebook", "Watch criminal series", "Gardening"]];

    $me["mother"] = $myMother;    

    echo '<pre>';
    print_r($me);
    echo '</pre>';

    $myHobbiesAmount = count($me["hobbies"]);
    $myMotherHobbiesAmount = count($myMother["hobbies"]);

    echo "My mother hobbies amount : $myMotherHobbiesAmount<br>";
    echo "My hobbies amount : $myHobbiesAmount <br>";
    echo "Total hobbies amount : " . ($myHobbiesAmount + $myMotherHobbiesAmount);
?>