<?php


$userListInput = [
    [
        "username" => "Karl",
        "language" => "en"
    ],[
        "username" => "Tam",
        "language" => "vi"
    ],[
        "username" => "Kazuki",
        "language" => "ja"
    ]
];

// // Check username with username in the list
// // If match, return a welcome message following the language of that user
// // inside the data in the list.

function selectWelcomMessage ($username, $language) {
    if($language=="vi") {
        echo ("xin chao $username");
    }

    elseif( $language=="en") {
        echo ("hello $username");
    }
    
    else {
        echo ("$username san hajimemashite");
    }
}

function wellcomMessage($userList,$name) {
    foreach($userList as $temp) {
        if($name==$temp["username"]) {
            selectWelcomMessage($name,$temp["language"]);
        }
    }
}

$username="Tam";
wellcomMessage($userListInput,$username);

function factorial($k,$n) {
    if($k==$n||$k==0)
        return 1;
    else {
        return factorial($k-1,$n-1)+factorial($k,$n-1);
    }    
}

echo factorial(1,50);


?>