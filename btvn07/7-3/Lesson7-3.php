<?php


// Add a new item into array.
// Before add, check if new item contain name and age or not.
// If it contain new item, add to array. If not, throw an error

// NOTE: we have the &<variable-name> to said that we will change this variable
// Normally, function in PHP only pass the data to function. The value of the
// old variable will be returned to before it is changed
// function addItem($newItem, &$itemList) {
//     if (array_key_exists("name", $newItem) && array_key_exists("age", $newItem)){
//         $itemList[] = $newItem;
//         return $itemList;
//     }

//     throw new Exception("New item does not contain `name` and `age`");
// }

$item = [
    "name" => "Thanh",
    "age" => 26,
    "job" => "developer"
];

$list = [
    [
        "name" => "Thanh",
        "age" => 27,
        "job" => "developer"
    ],
    [
        "name" => "Minh",
        "age" => 15,
        "job" => "student"
    ],
    [
        "name" => "Vu",
        "age" => 28,
        "job" => "architecture"
    ]
];


function addItem($item,&$list) {
    $check=1;
    foreach($list as $temp) {
        if($item["name"]==$temp["name"] && $item["age"]==$temp["age"]) {
            $check=0;
            break;
        }
    }
    if($check==1) 
        $list[]=$item;
    
    else 
        echo("add item fall");
    
}


try {
    addItem($item, $list);
    echo json_encode($list);   // This time list has been changed. Try using function without '&' and see the difference here. 
    //func2();
    //func3();
} catch (\Throwable $th) {
    echo $th;
}




// ---------



?>