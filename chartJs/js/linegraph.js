$(document).ready(function(){
	$.ajax({
		url :"http://localhost//JSP/chartJs/salesdatagraph.php",
		type:"GET",
		success :function(data){
			console.log(data);

			var date =[];
			var fse1_sales =[];
			var fse4_sales =[];
			var fse6_sales =[];
			var fse7_sales =[];
			var fse8_sales =[];

			for(var i in data){
				date.push(data[i].Date);
				fse1_sales.push(data[i].FSE1);
				fse4_sales.push(data[i].FSE4);
				fse6_sales.push(data[i].FSE6);
				fse7_sales.push(data[i].FSE7);
				fse8_sales.push(data[i].FSE8);
			}

			var chartdata={
				labels:date,
				datasets:[
				{
					label:"FSE1",
					fill: false,
					lineTension: 0.1,
					backgroundColor: "rgba(59,89,152,0.75)",
					borderColor:"rgba(59,89,152,1)",
					pointHoverBackgroundColor:"rgba(59,89,152,1)",
					pointHoverBorderColor:"rgba(59,89,152,1)",
					data:fse1_sales

					
				},
				{
					label:"FSE4",
					fill: false,
					lineTension: 0.1,
					backgroundColor: "rgba(29,202,255,0.75)",
					borderColor:"rgba(29,202,255,1)",
					pointHoverBackgroundColor:"rgba(29,202,255,1)",
					pointHoverBorderColor:"rgba(29,202,255,1)",
					data:fse4_sales

					},
				{
					label:"FSE6",
					fill: false,
					lineTension: 0.1,
					backgroundColor: "rgba(211,72,54,0.75)",
					borderColor:"rgba(211,72,54,1)",
					pointHoverBackgroundColor:"rgba(211,72,54,1)",
					pointHoverBorderColor:"rgba(211,72,54,1)",
					data:fse6_sales

					},


				{
					label:"FSE7",
					fill: false,
					lineTension: 0.1,
					backgroundColor: "rgba(0,0,0,0.75)",
					borderColor:"rgba(0,0,0,1)",
					pointHoverBackgroundColor:"rgba(0,0,0,1)",
					pointHoverBorderColor:"rgba(0,0,0,1)",
					data:fse7_sales

					},

					



				{
					label:"FSE8",
					fill: false,
					lineTension: 0.1,
					backgroundColor: "rgba(0,128,0,0.75)",
					borderColor:"rgba(0,128,0,1)",
					pointHoverBackgroundColor:"rgba(0,128,0,1)",
					pointHoverBorderColor:"rgba(0,128,0,1)",
					data:fse8_sales

					}





				]
			};
			var ctx=$("#mycanvas");
			var LineGraph = new Chart(ctx,{
				type: 'line',
				data: chartdata
			})
		},
		error :function(data){

		}

	});
});