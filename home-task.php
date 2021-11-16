<?php

include "solution.php";
$repeat = true;
$inputStr = implode(array_slice($argv, 1));
while ($repeat){
    if ($inputStr == "")
        $inputStr = readline();
    if (preg_match("/\\[(\d{1,}, *){1,}\d{1,}\\]/", $inputStr)){  //[[](\d{1,}\, ){1,}\d[]]        [(\d{1,}, ){1,}\d{1,}]      \[(\d{1,}, ){1,}\d{1,}\]
        $strArr = explode(',', $inputStr);
        for ($i = 0; $i < count($strArr); $i++){
            if ($strArr[$i][0] == "[" || $strArr[$i][0] == " ")
            $strArr[$i] = ltrim($strArr[$i], $strArr[$i][0]);
        }
        $strArr[count($strArr)-1] = rtrim($strArr[count($strArr)-1], $strArr[count($strArr)-1][strlen($strArr[count($strArr)-1])-1]);
        $intArr = array_map('intval', $strArr);
        echo "Answer is: " . solution($intArr);
        $repeat = false;
    }
    elseif ($inputStr == "Exit")
        return 0;
    else{
        $inputStr = "";
        echo "Неверный ввод!\n Попробуйте снова или введите \"Exit\", чтобы выйти: ";
    }
}