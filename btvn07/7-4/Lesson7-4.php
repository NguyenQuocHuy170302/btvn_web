<?php

require 'Lesson7-42.php';
function countSameName($list) {
    $arrsaveSameName=[];
    for($index1=0;$index1<count($list)-1;$index1++) {
        if(!in_array($list[$index1]["name"],$arrsaveSameName)) {
            for($index2=$index1+1;$index2<count($list);$index2++) {
                if($list[$index1]["name"]===$list[$index2]["name"]) {
                    $arrsaveSameName[]=$list[$index1]["name"];
                    break;
                }
            }
        }
    }
return count($arrsaveSameName);
}

echo countSameName($list);

?>