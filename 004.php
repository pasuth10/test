<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>

$(document).ready(function(){
    $.get("https://www.trcloud.co/test/api.php", 
    function(res) { 
       var city =[];
       var pop =[];
      var data = JSON.parse(res);
      $.each(data, function(k, v) {
        
        city.push(v['City'])
        pop.push(v['Population'])
      })
      console.log(city,pop)

      gen_chart('myChart','bar', city, pop);
      // Chart
      gen_chart('myChart2','pie', city, pop);
    } );
  
});

function gen_chart(id,t,la,da){
      var ctx = document.getElementById(id).getContext('2d');
      var chart = new Chart(ctx, {
          // The type of chart we want to create
          type: t,

          // The data for our dataset
          data: {
              labels: la,
              datasets: [{
                  label: 'My First dataset',
                  backgroundColor: 'rgb(150, 99, 100)',
                  borderColor: 'rgb(255, 99, 132)',
                  data: da
              }]
          },
          // Configuration options go here
          options: {}
        });
  
}

</script>
</head>
<body>
<div style='width:800px;height800px;'>
<canvas id="myChart" ></canvas>
<canvas id="myChart2" ></canvas>
</div>
</body>
</html>