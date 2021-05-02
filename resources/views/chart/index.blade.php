@extends('layouts.master')
@section("content")
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <!-- <h1>Вакцин</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/children/{{$child2->id}}/profile">Профайл</a></div>
              <div class="breadcrumb-item">Вакцин</div>
            </div>
          </div> -->
          <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
                  <div class="card-header">
                    <h4>Хүүхдийн өсөлтийн график
                    </h4>
                  </div>
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Өндөр</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Жин</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">БЖИ</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div id="chartContainer" style="height: 400px; width: 1200px; margin: 0px auto;">
                      </div>
                      
                      <div class="row">
             
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card card-success">
                                <div class="card-header">
                                    <h4>Анхны өндөр</h4>
                                </div>
                                <div class="card-body">
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card card-light">
                                <div class="card-header">
                                    <h4>Одоогийн өндөр</h4>
                                </div>
                                <div class="card-body">
                                    
                            
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card card-dark">
                                <div class="card-header">
                                    <h4>Өөрчлөлт</h4>
                                </div>
                                <div class="card-body">
                                </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="row">
             
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card card-success">
                                <div class="card-header">
                                    <h4>Анхны жин</h4>
                                </div>
                                <div class="card-body">
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card card-light">
                                <div class="card-header">
                                    <h4>Одоогийн жин</h4>
                                </div>
                                <div class="card-body">
                            
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card card-dark">
                                <div class="card-header">
                                    <h4>Өөрчлөлт</h4>
                                </div>
                                <div class="card-body">
                                </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      <div id="chartContainer2" style="height: 400px; width: 1200px; margin: 0px auto;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
    
    </section>
    
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script>
Highcharts.chart('chartContainer', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Monthly Average Temperature'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    
    xAxis: 
        {
        categories: {!!json_encode($age)!!},
    },
    yAxis: {
        title: {
            text: 'Өндөр'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: false
            },
            enableMouseTracking: false
        }
    },
    series: [ {
        name: '3',
        data: {!!json_encode($lenght3)!!}
    },
    {
        name: '2',
        data: {!!json_encode($lenght2)!!}
    },
    {
        name: '0',
        data: {!!json_encode($lenght)!!}
    },
    {
        name: '-2',
        data: {!!json_encode($lenght_2)!!}
    },
    {
        name: '-3',
        data: {!!json_encode($lenght_3)!!}
    },
    {
        name: 'yela',
        data: {!!json_encode($undurs)!!}
    }
    ]
});
              
</script> 

<!-- 2 -->
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title:{
		text: "Daily High Temperature at Different Beaches"
	},
	legend:{
		cursor: "pointer",
		fontSize: 16,
		itemclick: toggleDataSeries
	},
	toolTip:{
		shared: false
	},
	data: [{
		name: "Myrtle Beach",
		type: "spline",
		showInLegend: true,
		dataPoints: [
			{ x:0, y: 49.9 },
			{ x: 0.1, y: 54.7 },
			{ x: 0.2, y: 58.4 },
			{ x: 0.3, y: 61.4 },
			{ x: 0.4, y: 63.9 },
			{ x: 0.5, y: 65.9 },
			{ x: 0.6, y: 67.6 }
		]
	},
	{
		name: "Martha Vineyard",
		type: "spline",
		showInLegend: true,
		dataPoints: [
			{ x:0, y: 53.7 },
			{ x: 0.1, y: 58.6 },
			{ x: 0.2, y: 62.4 },
			{ x: 0.3, y: 65.5 },
			{ x: 0.4, y: 68 },
			{ x: 0.5, y: 70.1 },
			{ x: 0.6, y: 71.9 }
		]
	},
   
    
	]
});
chart.render();

function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
@endsection
