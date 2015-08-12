$(function ()  
				{
   $("#chartContainer").dxRangeSelector({
    margin: {
        top: 0
    },
    scale: {
        minorTickInterval: "day",
        majorTickInterval: {
            days: 7
        }
    },
    size: {
        height: 200
    },
    dataSource: [
        { t: new Date(2011, 11, 22), views: 19, uniques: 18 },
        { t: new Date(2011, 11, 29), views: 27, uniques: 12 },
        { t: new Date(2012, 0, 5),   views: 30,   uniques: 5 },
        { t: new Date(2012, 0, 12), views: 26, uniques: 6 },
        { t: new Date(2012, 0, 19), views: 18, uniques: 10 },
        { t: new Date(2012, 0, 26), views: 15, uniques: 15 },
        { t: new Date(2012, 1, 2), views: 14, uniques: 21 },
        { t: new Date(2012, 1, 9), views: 14, uniques: 25 }
    ],
    chart: {
    	 commonSeriesSettings: {
            argumentField: 't', opacity:1
        },
        series: [
            { argumentField: "t", valueField: "views", color: '#50cedd' },
            { argumentField: "t", valueField: "uniques", color: '#a9e4e8' }
        ],
        valueAxis: {
            min: 0
        }
    },
    selectedRange: {
        startValue: new Date(2011, 11, 1),
        endValue: new Date(2012, 0, 1)
    }
});

}

);

/** Donut **/
$(function ()  
				{
   var dataSource = [
  { country: "USA", medals: 110 },
  { country: "China", medals: 100 },
  { country: "Russia", medals: 72 },
  { country: "Britain", medals: 47 },
  { country: "Australia", medals: 46 },
  { country: "Germany", medals: 41 },
  { country: "France", medals: 40 },
  { country: "South Korea", medals: 31 }
];

$("#chartContainer2").dxPieChart({
    dataSource: dataSource,
    legend: {
        horizontalAlignment: "right",
        verticalAlignment: "top",
        margin: 0
    },
    pointClick: function(point) {
        point.select();
    },
    series: [{
      type: "doughnut",
      argumentField: "country",
      valueField: "medals",
      hoverStyle: {
        color: "#50cedd" 
      }
    }]
});
}

);

