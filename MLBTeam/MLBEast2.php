<?php
require_once ("MLBHeader2.php");
?>
<html>
<head>
<script type="text/javascript"
	src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript"
	src="http://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript"
	src="http://www.amcharts.com/lib/3/themes/none.js"></script>
<div id="chartdiv"></div>
</head>
<script type="text/javascript">
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "none",
    "dataProvider": [{
        "team": "Braves",
        "B_AVG": 0.249
    }, {
        "team": "Mets",
        "B_AVG": 0.237
    }, {
        "team": "Nationals",
        "B_AVG": 0.251
    }, {
        "team": "Phillies",
        "B_AVG": 0.248
    }, {
        "team": "Marlins",
        "B_AVG": 0.231
    },],
    "valueAxes": [{
        "gridColor":"#FFFFFF",
		"gridAlpha": 0.2,
		"dashLength": 0
    }],
    "gridAboveGraphs": true,
    "startDuration": 1,
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillAlphas": 0.8,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "B_AVG"		
    }],
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
    },
    "categoryField": "team",
    "categoryAxis": {
        "gridPosition": "start",
        "gridAlpha": 0
        
    },
	"exportConfig":{
	  "menuTop": 0,
	  "menuItems": [{
      "icon": 'images/export.png',
      "format": 'png'	  
      }]  
	}
});
</script>
<body>
</body>
</html>
<?php
require_once ("MLBFooter.php");
?>