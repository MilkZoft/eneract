    <link href="<?php echo $this->themePath; ?>/css/morris-0.4.3.min.css" rel="stylesheet">
    <link href="<?php echo $this->themePath; ?>/css/timeline.css" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo $this->themePath; ?>/css/sb-admin.css" rel="stylesheet">
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <?php
                        echo '<img src="' . SESSION('ZanAvatar') . '" style="float: left; padding: 2px; border: 1px solid #ccc; max-width: 50px">';
                        echo '<h3 style="float: left; margin-top: 9px; margin-left: 10px;">' . SESSION('ZanName') . '</h3>';
                        echo '<div style="clear: both;"></div>';
                    ?>
                    <h1>3,400 Negawatts</h1>
                    <a href="<?php echo path("reward"); ?>" class="btn btn-warning">Redeem</a>
                </div>
                <div class="col-lg-6">
                <span style="float:right">
                    <img src="<?php echo $this->themePath; ?>/img/hex-this-month.png" title="Negawatss this month"/>&nbsp;&nbsp;
                    <img src="<?php echo $this->themePath; ?>/img/hex-all-time.png" title="Negawatss this month"/>
                </span> 
                <div style="clear:both"></div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div>
           <div class="row">
                <div class="col-md-3 portfolio-item">
                   <div class="col-lg-12" id="pie_2" style="min-width: 200px; height: 220px; margin: 0 auto"></div>
                </div>
    
                <div class="col-md-3 portfolio-item">
                   <div class="col-lg-12" id="pie_3" style="min-width: 200px; height: 220px; margin: 0 auto"></div>
                </div>
    
                <div class="col-md-3 portfolio-item">
                    <div class="col-lg-12" id="pie_4" style="min-width: 200px; height: 220px; margin: 0 auto"></div>
                </div>
                <div class="col-md-3 portfolio-item">
                    <div class="col-lg-12" id="pie_1" style="min-width: 200px; height: 220px; margin: 0 auto"></div>
                </div>
    
            <div class="row">
                <div class="col-lg-12">
                    <div id="graph_2"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="graph_1"></div>
                </div>
            </div>
            
                
        <!-- /#page-wrapper -->
    </div>
    <script src="<?php echo $this->themePath; ?>/js/highcharts/highcharts.js"></script>
    <!-- Core Scripts - Include with every page -->
     <script src="/highcharts/modules/exporting.js"></script>

<script>
$(function () {
    $('#pie_1').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false,
            backgroundColor: 'none'
        },
        colors: [
            '#38BFC3',
            '#cccccc'],
        title: {
            text: '<div style="font-size: 18px;">Energy<br>1.2k KhW<br><div style="margin-top: 10px; font-size: 12px;">Low: 300k</div><br><div style="font-size: 12px;">High: 2.4k</div>',
            align: 'center',
            verticalAlign: 'middle',
            y:30
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white',
                        textShadow: '0px 1px 2px black'
                    }
                },
                startAngle: -125,
                endAngle: 125,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            innerSize: '70%',
            data: [
                ['',   45.0],
                ['', 26.8],
            ]
        }]
    });
});
    
$(function () {
    $('#pie_2').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false,
            backgroundColor: 'none'
        },
        colors: [
            '#38BFC3',
            '#cccccc'],
        title: {
            text: '<div style="font-size: 18px;">Bus<br>7 trips<br><div style="margin-top: 10px; font-size: 12px;">Low: 1 trip</div><br><div style="font-size: 12px;">High: 20 trips</div>',
            align: 'center',
            verticalAlign: 'middle',
            y:30
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white',
                        textShadow: '0px 1px 2px black'
                    }
                },
                startAngle: -125,
                endAngle: 125,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            innerSize: '70%',
            data: [
                ['',   7],
                ['', 20],
            ]
        }]
    });
});
    
$(function () {
    $('#pie_3').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false,
            backgroundColor: 'none'
        },
        colors: [
            '#38BFC3',
            '#cccccc'],
        title: {
            text: '<div style="font-size: 18px;">Bike<br>7 mi<br><div style="margin-top: 10px; font-size: 12px;">Low: 1 mi</div><br><div style="font-size: 12px;">High: 20 mi</div>',
            align: 'center',
            verticalAlign: 'middle',
            y:30
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white',
                        textShadow: '0px 1px 2px black'
                    }
                },
                startAngle: -125,
                endAngle: 125,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            innerSize: '70%',
            data: [
                ['',   7],
                ['', 20],
            ]
        }]
    });
});
    
$(function () {
    $('#pie_4').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false,
            backgroundColor: 'none'
        },
        colors: [
            '#38BFC3',
            '#cccccc'],
        title: {
            text: '<div style="font-size: 18px;">Walk<br>2.8 mi<br><div style="margin-top: 10px; font-size: 12px;">Low: .3 mi</div><br><div style="font-size: 12px;">High: 5 mi</div>',
            align: 'center',
            verticalAlign: 'middle',
            y:30
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white',
                        textShadow: '0px 1px 2px black'
                    }
                },
                startAngle: -125,
                endAngle: 125,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            innerSize: '70%',
            data: [
                ['',   2.8],
                ['', 5],
            ]
        }]
    });
});
    

$(function () {
        Highcharts.setOptions({
            colors: ['#38BFC3', '#2d999c', '#216d6f', '#154546']
        });
        $('#graph_1').highcharts({
            chart: {
                type: 'line'
            },
            title: {
                text: 'Monthly Energy Consumption'
            },
            subtitle: {
                text: 'Source: data.gov'
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Energy Consumed (in kWh)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} kWh</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'You',
                data: [852.3, 831.1, 754.2, 700.7, 651.0, 650.7, 711.3, 650.5, 625.1, 650.3, 675.0, 691.0]
    
            }, {
                name: 'Average Consumer',
                data: [853.3, 825.3, 621.6, 669.9, 701.1, 763.6, 800.0, 775.1, 713.0, 725.0, 751.0, 724.4]
    
            }]
        });
    });
    
$(function () {
    $('#graph_2').highcharts({
        chart: {
            type: 'area'
        },
        colors: [
            '#38BFC3',
            '#2d999c',
            '#216d6f',
            '#154546'],
        title: {
            text: 'Negawatts Trends'
        },
        legend: {
            borderWidth: 0
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            tickmarkPlacement: false,
            title: {
                enabled: false
            }
        },
        yAxis: {
            title: {
                text: ' Negawatts'
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: ' Negawatts'
        },
        plotOptions: {
            area: {
                stacking: 'normal',
                lineColor: '#666666',
                lineWidth: 0,
                marker: {
                    lineWidth: 0,
                    lineColor: '#666666'
                }
            }
        },
        series: [{
            name: 'Bike',
            data: [200, 200, 100, 200, 100, 200, 200, 100, 200, 200, 100, 200],
            marker: {
                enabled: false,
                symbol: 'square',
                lineWidth: 0
            }
        }, {
            name: 'Bus',
            data: [200, 200, 300, 300, 200, 300, 200, 100, 300, 200, 400, 200],
            marker: {
                enabled: false,
                symbol: 'square',
                lineWidth: 0
            }
        }, {
            name: 'Hybrid',
            data: [200, 200, 200, 200, 200, 200, 200, 200, 200, 200, 200, 200],
            marker: {
                enabled: false,
                symbol: 'square',
                lineWidth: 0
            }
        }, {
            name: 'Energy Savings',
            data: [200, 300, 400, 700, 750, 800, 900, 900, 1000, 1100, 1200, 1300],
            marker: {
                enabled: false,
                symbol: 'square'
            }
        }]
    });
});
</script>