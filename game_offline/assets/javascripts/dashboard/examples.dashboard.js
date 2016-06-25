/*
Name: 			Dashboard - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	1.4.1
*/

(function( $ ) {

	'use strict';
	/*
	Sales Selector
	*/
	$('#salesSelector').themePluginMultiSelect().on('change', function() {
		var rel = $(this).val();
		$('#salesSelectorItems .chart').removeClass('chart-active').addClass('chart-hidden');
		$('#salesSelectorItems .chart[data-sales-rel="' + rel + '"]').addClass('chart-active').removeClass('chart-hidden');
	});
	$("#salesSelector > option[value=total").attr("selected", "true");
	$('#salesSelector').trigger('change');
	$('#salesSelectorWrapper').addClass('ready');
	$('#querySearchType').themePluginMultiSelect().on('change', function() {
		var param = {
				querySearchType : $(this).val(),
				start_time: $('#start_time1').val(),
				end_time : $('#end_time1').val()
		};
		$.getJSON(host + '/admin/statistics/game_play_ajax_chart_data',param,function(result){
			var total_profit = result.total_profit;
			var pt_profit = result.pt_profit;
			var mg_profit = result.mg_profit;
			
			var total_profit_int_array = new Array();
			var mg_profit_int_array = new Array();
			var pt_profit_int_array = new Array();
			    
			var flotDashSales1Data  = new Array();
			flotDashSales1Data[0] = new Object();
			
			flotDashSales1Data[0].data = new Array();
			flotDashSales1Data[0].color = "#0088cc";
			
			for(var r = 0; r < total_profit.length ; r++){
				flotDashSales1Data[0].data[r] = new Array(total_profit[r].day, total_profit[r].win_amount);
				total_profit_int_array.push(total_profit[r].win_amount);
			}
			
			var flotDashSales2Data  = new Array();
			flotDashSales2Data[0] = new Object();
			
			flotDashSales2Data[0].data = new Array();
			flotDashSales2Data[0].color = "#2baab1";
			
			for(var i = 0; i < mg_profit.length ; i++){
				flotDashSales2Data[0].data[i] = new Array(mg_profit[i].day, mg_profit[i].win_amount);
				mg_profit_int_array.push(mg_profit[i].win_amount);
			}
			
			var flotDashSales3Data  = new Array();
			flotDashSales3Data[0] = new Object();
			
			flotDashSales3Data[0].data = new Array();
			flotDashSales3Data[0].color = "#734ba9";
			
			for(var j = 0; j < pt_profit.length ; j++){
				flotDashSales3Data[0].data[j] = new Array(pt_profit[j].day, pt_profit[j].win_amount);
				pt_profit_int_array.push(pt_profit[j].win_amount);
			}
		    
			if (total_profit_int_array.length == 1){	
				total_profit_int_array.push(total_profit_int_array[0]);
			}
			
			if (mg_profit_int_array.length == 1){
				mg_profit_int_array.push(mg_profit_int_array[0]);
			}
			
			if (pt_profit_int_array.length == 1){
				pt_profit_int_array.push(pt_profit_int_array[0]);
			}
			
			Array.max = function( array ){
				return Math.max.apply( Math, array );
			};
			
			Array.min = function( array ){
				return Math.min.apply( Math, array );
			};
			/*
			Flot: Sales 1
			*/
			var flotDashSales1 = $.plot('#flotDashSales1', flotDashSales1Data, {
				series: {
					lines: {
						show: true,
						lineWidth: 2
					},
					points: {
						show: true
					},
					shadowSize: 0
				},
				grid: {
					hoverable: true,
					clickable: true,
					borderColor: 'rgba(0,0,0,0.1)',
					borderWidth: 1,
					labelMargin: 15,
					backgroundColor: 'transparent'
				},
				yaxis: {
					max: Array.max(total_profit_int_array) + 30,
					min: Array.min(total_profit_int_array) - 30,
					color: 'rgba(0,0,0,0.1)'
				},
				xaxis: {
					mode: 'categories',
					color: 'rgba(0,0,0,0)'
				},
				legend: {
					show: false
				},
				tooltip: true,
				tooltipOpts: {
					content: '%x: %y',
					shifts: {
						x: -30,
						y: 25
					},
					defaultTheme: false
				}
			});

			/*
			Flot: Sales 2
			*/
			var flotDashSales2 = $.plot('#flotDashSales2', flotDashSales2Data, {
				series: {
					lines: {
						show: true,
						lineWidth: 2
					},
					points: {
						show: true
					},
					shadowSize: 0
				},
				grid: {
					hoverable: true,
					clickable: true,
					borderColor: 'rgba(0,0,0,0.1)',
					borderWidth: 1,
					labelMargin: 15,
					backgroundColor: 'transparent'
				},
				yaxis: {
					max: Array.max(mg_profit_int_array) + 30,
					min: Array.min(mg_profit_int_array) - 30,
					color: 'rgba(0,0,0,0.1)'
				},
				xaxis: {
					mode: 'categories',
					color: 'rgba(0,0,0,0)'
				},
				legend: {
					show: false
				},
				tooltip: true,
				tooltipOpts: {
					content: '%x: %y',
					shifts: {
						x: -30,
						y: 25
					},
					defaultTheme: false
				}
			});

			/*
			Flot: Sales 3
			*/
			var flotDashSales3 = $.plot('#flotDashSales3', flotDashSales3Data, {
				series: {
					lines: {
						show: true,
						lineWidth: 2
					},
					points: {
						show: true
					},
					shadowSize: 0
				},
				grid: {
					hoverable: true,
					clickable: true,
					borderColor: 'rgba(0,0,0,0.1)',
					borderWidth: 1,
					labelMargin: 15,
					backgroundColor: 'transparent'
				},
				yaxis: {
					max: Array.max(pt_profit_int_array) + 30,
					min: Array.min(pt_profit_int_array) - 30,
					color: 'rgba(0,0,0,0.1)'
				},
				xaxis: {
					mode: 'categories',
					color: 'rgba(0,0,0,0)'
				},
				legend: {
					show: false
				},
				tooltip: true,
				tooltipOpts: {
					content: '%x: %y',
					shifts: {
						x: -30,
						y: 25
					},
					defaultTheme: false
				}
			});
		});
	});
	$('#querySearchType').trigger('change');
	$('#querySearchType2').themePluginMultiSelect().on('change', function() {
		var param = {
				querySearchType : $(this).val(),
				start_time: $('#start_time2').val(),
				end_time : $('#end_time2').val()
		};
		$.getJSON(host+ '/admin/statistics/deposit_withdraw_chart_data', param, function(result){
			var morrisBarData = new Array();
			var morrisDonutData = new Object();
			morrisDonutData.element = 'morrisBar2';
			morrisDonutData.data = new Array();
			
			for(var i =0; i < result.length ; i++){
				var o = new Object();
				o.y = result[i].day;
				o.a = result[i].deposit_total;
				o.b = result[i].withdraw_total;
				o.c = result[i].bonus_total;
				morrisBarData[i] = o;
//				
//				var o1 = new Object();
//				o1.label = result[i].day;
//				o1.value = result[i].deposit_total;
//				morrisDonutData.data.push(o1);
			}
			$('#morrisBar').empty();
			/*
			Morris: Bar
			*/
			Morris.Bar({
				resize: true,
				xLabelMargin: 10,
				axes : true,
				grid :true,
				element: 'morrisBar',
				data: morrisBarData,
				xkey: 'y',
				ykeys: ['a','b','c'],
				labels: ['Deposit', 'Withdraw','bonus'],
				hideHover: true,
				barColors: ['#1E90FF','#DC143C','#8A2BE2']
			});
//			Morris.Donut(morrisDonutData);
		});
	});
	$("#querySearchType2 > option[value=monthly").attr("selected", "true");
	$('#querySearchType2').trigger('change');
	$('#salesSelectorWrapper2').addClass('ready');
}).apply( this, [ jQuery ]);




