<!doctype html>
    <html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sorting Multidimensional Arrays</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php
$students = array(
    256=>array('name'=>'Jon','grade'=>98.5),
    2 => array('name' => 'Vance','grade' => 85.1),
    9 => array('name' => 'Stephen','grade' =>94.0),
    364 => array('name' => 'Steven','grade' => 85.1),
    68 => array('name' => 'Rob','grade' => 74.6)
);
function name_sort($x,$y) {
    //strcasecmp 二进制安全比较字符串（不区分大小写）a小于b返回小于0
    return strcasecmp($x['name'],$y['name']);
}
function grade_sort($x,$y) {
    return ($x['grade'] < $y['grade']);
}
echo '<h2>Array As Is</h2><pre>' . print_r($students,1) . '</pre>';
uasort($students,'name_sort');
echo '<h2>Array sorted by name</h2><pre>' . print_r($students,1) . '</pre>';
/*
 * usort 根据数值进行排序，但不保存关键字
 * uasort 关键字将会被保存
 * uksort 排序基于关键字
 * */
uasort($students,'grade_sort');
echo '<h2>Array sorted by grade</h2><pre>' . print_r($students,1) . '</pre>';
?>
</body>