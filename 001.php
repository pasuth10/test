<html>
<body>
    <input type="text" name="box" >
    <button name ="bt" onclick="gen()">123</button>
    <br><br>
    <div style='border: 1px solid;' id='app'>
    </div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function gen() {
  var value = $('[name=box]').val();
  var aa = '';
// test2
// test
if (value % 2 == 0){
    for(i = 0; i < value; i++) {
        for(j = 0; j <= i; j++){
            aa += "*"
        }
        aa += '<br>';
    }
}
else { 
  for(i = value; i > 0; i--){
       for(j = 0; j <i; j++){
           aa +="*"
     }
     aa += '<br>';

  };
}


  $('#app').html(aa)
}

//$(document).ready(function(){
 //   var aa = '';
    // for(i = 0; i < 5; i++) {
    //     for(j = 0; j <= i; j++){
    //         aa += "*"
    //     }
    //     aa += '<br>';
    // }

  //  for(i = 5; i >= 0; i--){
   //     for(j = 0; j <=i; j++){
  //          aa +="*"
   //     }
   //     aa += '<br>';

  //  }

//  $('#app').html(aa)
// });
</script>