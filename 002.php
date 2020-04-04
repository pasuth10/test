<html>
<body>
    ผู้ใช้กรอกได้ 1 ช่อง
    <style>
table {
    width: 800px;
}
table, th, td {
    border: 1px solid black;
  
}
</style>
    <table>
        <tr>
            <th>
            100
            </th>
            <th>
            7
            </th>
            <th>
            107
            </th>
            <th>
            3
            </th>
            <th>
            104
            </th>
        </tr>

        <tr>
            <th>
            <input type="text" name="box1" >
            </th>
            <th>
            <input type="text" name="box2" >
            </th>
            <th>
            <input type="text" name="box3" >
            </th>
            <th>
            <input type="text" name="box4" >
            </th>
            <th>
            <input type="text" name="box5" >
            </th>
        </tr>
    </table>
<br>
<button name="bt" onclick="gen()"> GO</button> 
<a href>Clear</a>

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>

function gen() {
  var value = $('[name=box1]').val()*1;
  var v7 = $('[name=box2]').val()*1;
  var sumv7 = $('[name=box3]').val()*1;
  var dis3 = $('[name=box4]').val()*1;
  var total = $('[name=box5]').val()*1;

if(value != 0  ){
  v7=(value*7)/100;
  sumv7=value+v7;
  dis3=(value*3)/100;
  total=sumv7-dis3;

}
else if(v7 != 0){
 value=(v7/7)*100;
 sumv7=value+v7;
  dis3=(value*3)/100;
  total=sumv7-dis3;
}
else if(sumv7 != 0){
 value=sumv7/1.07;
 v7=(value*7)/100; 
 dis3=(value*3)/100;
 total=sumv7-dis3; 
}
else if(dis3 != 0){
 value=(dis3/3)*100;
 v7=(value*7)/100;
 sumv7=value+v7; 
 total=sumv7-dis3;
}
else if(total != 0){
 value=total/1.04;
 v7=(value*7)/100;
 sumv7=value+v7;
 dis3=(value*3)/100;
}
else {

}
$('[name=box1]').val(value)
$('[name=box2]').val(v7)
$('[name=box3]').val(sumv7)
$('[name=box4]').val(dis3)
$('[name=box5]').val(total)


}

</script>