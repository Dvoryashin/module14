<?php
$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];
header('Content-Type: text/html; charset=utf-8');
function getFullnameFromParts($name, $surname, $patronomyc){
    $human = $name. ' ' .$surname. ' ' .$patronomyc;
    echo $human;
}

function getPartsFromFullname($human){
    $human =  explode(' ' , $human);
    $ar['name'] = $human[0];
    $ar['surname'] = $human[1];
    $ar['patronomyc'] = $human[2];
    return $ar;
}

function getShortName($human){
    $arrayHuman[0] = stristr($human, ' ');
    $human =  explode(' ' , $human);
    $firstSymmbol = mb_substr($human[1], 0, 1);
    echo $human[0]. ' ' .$firstSymmbol. '.';
}

function getGenderFromName($human){
    $ar = getPartsFromFullname($human);
    $name = $ar['name'];
    $surname = $ar['surname'];
    // $lastSymmbol = substr($ar['surname'], -1);
    $t = mb_substr($surname, -1);
    if($t != "а"){
        return 1;
    }else{
        return -1;
    }
}
function getGenderDescription($humans){
    print_r($humans[0]['fullname']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    getFullnameFromParts("Иван", "Иванов", "Иванович");
    echo "</br>";
    print_r(getPartsFromFullname('Иван Иванов Иванович'));
    echo "</br>";
    getShortName('Иван Иванов Иванович');
    echo "</br>";
    echo getGenderFromName('Иван Иванов Иванович');
    echo getGenderDescription($example_persons_array);
    ?>
</body>
</html>