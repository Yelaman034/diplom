@extends('layouts.master')
@section("content")
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>График</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/children/{{$child2->id}}/profile">Хүүхэд</a></div>
              <div class="breadcrumb-item">График</div>
            </div>
          </div>
          <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
                  <div class="card-header">
                    <h4>Хүүхдийн өсөлтийн график
                    </h4>
                  </div>
                  <div class="card-body">
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Өндөр / Нас</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Жин / Нас</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">БЖИ</a>
                      </li> -->
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div id="chartContainer" style="height: 400px; width: 1200px; margin: 0px auto;">
                      </div>
                      
                      <div class="row">
             
                            
                        </div>
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div id="chartContainer2" style="height: 400px; width: 1200px; margin: 0px auto;">
                      <div class="row">
                        </div>
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      
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
Highcharts.chart('chartContainer2', {
    chart: {
        type: 'line'
    },
    title: {
        text: '{{$child2->gender}} хүүхдийн өсөлтийн график' 
    },
    subtitle: {
        text: 'эх сурвалж'
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
            enableMouseTracking: true
        }
    },
    series: [ {
        name: '3',
        data: {!!json_encode($lenght3)!!}
    },
    {
       name: '-3',
       data: {!!json_encode($lenght_3)!!}
    },
    
     {
        name: '0',
        data: {!!json_encode($lenght)!!}
    },
    {
        name: '{{$child2->lname}}',
        data: {!!json_encode($undurs)!!}
    }
    ]
});
              
</script> 

<!-- 2 -->
<script>
window.onload = function () {

var data = [];
{{json_encode($undurs)}}.map((el,index) => {
  
  data.push({
          x: {{json_encode($nas)}}[index],  
          y: el
      });
})
var normal = [];
{{json_encode($lenght)}}.map((el,index) => {
  
  normal.push({
          x: {{json_encode($age)}}[index],  
          y: el
      });
})
console.log(normal);

var l3 = [];
{{json_encode($lenght3)}}.map((el,index) => {
  
  l3.push({
          x: {{json_encode($age)}}[index],  
          y: el
      });
})
console.log(l3);
var l_3 = [];
{{json_encode($lenght_3)}}.map((el,index) => {
  
  l_3.push({
          x: {{json_encode($age)}}[index],  
          y: el
      });
})
console.log(l_3);






var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  title:{
      text: "{{$child2->gender}} хүүхдийн өсөлтийн график"
  },
  axisX: {
		title: "Сар"
	},
	axisY: {
		title: "Өндөр",
	},
  legend:{
      cursor: "pointer",
      fontSize: 16,
      itemclick: toggleDataSeries
  },
  data: [{
      name: "0",
      type: "line",
      showInLegend: true,
      color:"#00FF00",
      dataPoints: normal
  },
  {
      name: "+3",
      type: "spline",
      showInLegend: true,
      color:"#D23F15",
      dataPoints: l3
  },
  {
      name: "-3",
      type: "spline",
      showInLegend: true,
      color:"#D23F15",
      dataPoints: l_3
  },
  {
      name: "{{$child2->lname}}",
      type: "spline",
      color:"#1140bf",
      showInLegend: true,
      dataPoints: data
  }]
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
