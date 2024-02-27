<!DOCTYPE html>
<html>

<script src="https://www.gstatic.com/charts/loader.js"></script>

<body>
<div
id="myChart" style="width:1500px;margin-top:300px; margin-left:500px; max-width:1000px; height:500px;">
</div>
<?php $bieudo = thongke() ?>
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  <?php foreach($bieudo as $bd):
    
  ?>
  ['<?php echo $bd['name'] ?>',<?php echo $bd['soluong'] ?>],
  <?php endforeach ?>
  
]);

// Set Options
const options = {
  title:'thong ke hang hoa theo danh muc'
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>

</body>
</html>