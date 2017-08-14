function drawChart() {
		var jsonData = $.ajax({
		url: "temperature_h2.php",
		dataType: "json",
		async: false
		}).responseText;
		var data = new google.visualization.DataTable(jsonData);
		var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));

    var options = {
		  width: 1000, 
		  height: 400,
		  title: 'Lämpötila',
		};
		chart.draw(data, options);
		var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
		chart.draw(data, options);

	  }

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
