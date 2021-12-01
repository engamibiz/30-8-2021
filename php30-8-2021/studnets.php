<?php
$students = [
    ['name'=>'Ahmed Mahmoud','result'=>64],
    ['name'=>'Esaam Ezzat','result'=>73],
    ['name'=>'Medhat Adam','result'=>82],
    ['name'=>'Mossa Morad','result'=>88],
    ['name'=>'Ahmed Mousa','result'=>48],
    ['name'=>'Sammer Omaran','result'=>30],
    ['name'=>'Taleb Wahsh','result'=>25],
];
function checkDegree($result){
    if($result > 85){
        echo '<span style="color:red"> A </span>';
    }elseif($result > 75){
        echo '<span style="color:orange"> B </span>';
    }elseif($result > 65){
        echo '<span style="color:blue"> C </span>';
    }elseif($result > 50){
        echo '<span style="color:green"> D </span>';
    }elseif($result < 50){
        echo '<span style="color:purple"> F </span>';
    }
}

?>
<style>
    table,td,th{
      border:1px solid;
        border-collapse: collapse;
    }
</style>
<table >
    <tr>
        <th>Name</th>
        <th>Result</th>
        <th>Degree</th>
    </tr>
    <?php  foreach ($students as $student){  ?>
    <tr>
        <td><?= $student['name'] ?></td>
        <td><?= $student['result'] ?></td>
        <td><?php checkDegree($student['result']);
        if($student['result'] < 50){ echo 'you are Fail'; } ?>
        </td>
    </tr>
    <?php } ?>
</table>

