
<html>
<body>

<?php
$array1 = [];
$array1[0] = [ 'code' => '101', 'name' => 'AAA' ];
$array1[1] = [ 'code' => '102', 'name' => 'BBB' ];
$array1[2] = [ 'code' => '103', 'name' => 'CCc' ];

$array2 = [];
$array2[0] = [ 'code' => '103', 'city' => 'Singapore'];
$array2[1] = [ 'code' => '102', 'city' => 'Tokyo'];
$array2[2] = [ 'code' => '101', 'city' => 'Bangkok'];




// foreach($array2 as $item) {
//     echo $item['code'],$item['city'].'<br>';
// }
?>
<style>
table {
    width: 100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>


<b>Array1</b>
<table style="width:250px">
  <tr>
    <th>Code</th>
    <th>Name</th>
  </tr>
  <?php
foreach($array1 as $key => $item) {
    
    echo  "<tr>
             <th> {$item['code']}</th>
             <th> {$item['name']}</th>
        </tr>";

}
?>
</table>
<br><br>


<b>Array2</b>
<table style="width:250px">
  <tr>
    <th>Code</th>
    <th>City</th>
  </tr>
  <?php
foreach($array2 as $item) {
    
    echo  "<tr>
             <th> {$item['code']}</th>
             <th> {$item['city']}</th>
        </tr>";

}
?>
</table>


<br><br>
<hr>
<br><br>
<b>Output</b>
<table style="width:250px">
  <tr>
    <th>Code</th>
    <th>Name</th>
    <th>City</th>
  </tr>
  <?php
foreach($array1 as $item) {
    foreach($array2 as $item2){
        if ($item['code'] == $item2['code']){
            echo "<tr>
                    <th> {$item['code']} </th>
                    <th> {$item['name']} </th>
                    <th> {$item2['city']} </th>
                  </tr>";
        }
    }
}
?>
</table>


</body>
</html>