@extends('layouts.master')
@section("content")
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Профайл</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/children">Хүүхэд</a></div>
              <div class="breadcrumb-item">Профайл</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
			  <div class="card author-box card-primary">
                  <div class="card-body">
                    <div class="author-box-left">
                      <img alt="image" src="{{asset('newTemplate/assets/img/avatar/avatar-1.png')}}" class="rounded-circle author-box-picture">
                      <div class="clearfix"></div>
                      <a href="#" class="btn btn-primary mt-3 follow-btn" data-follow-action="alert('follow clicked');" data-unfollow-action="alert('unfollow clicked');">{{$child->ner}}</a>
                    </div>
                    <div class="author-box-details">
                      <div class="author-box-name">
                        <h4>{{$child->ovog}} овогтой {{$child->ner}}</h4>
                      </div>
                      <?php
                       $birth = new DateTime($child->date_of_birth);
                       $today = new DateTime();
                       $interval = $birth->diff($today);
                      ?>
                     <div class="author-box-job"><h5>{{$interval->format('%y нас %m сар ба %d өдөр')}}</h5></div>
                      <div class="author-box-description">
                        <p>Хүүхдийн мэдээлэл</p>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><strong>Төрсөн огноо:</strong>{{$child->date_of_birth}}</li>
                          <li class="list-group-item"> <strong>Регистер дугаар:</strong>
                            {{$child->r_number}}</li>
                          <li class="list-group-item"> <strong>Хүйс:</strong> {{$child->hvis}}</li>
                        </ul>
                      </div>
                      
                      
                      <div class="w-100 d-sm-none"></div>
                      <div class="float-right mt-sm-0 mt-3">
                        <a href="/children/{{$child->id}}/edit" class="btn btn-warning">Edit child <i class="fas fa-chevron-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
			  <div class="card">
            <div class="card-header">
				  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				  Хүүхдийн өсөлтийн мэдээлэл нэмэх
				</button>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <tbody>
                          <tr>
                              <th>Өсөлтийн үнэлгээнд <br>
                              хамрагдсан хугацаа</th>
                              <th>Жин (кг)</th>
                              <th>Урт, өндөр (см)</th>
                              <th>БЖИ (кг,м^2)</th>
                              <th>График</th>
                        </tr>
                        @foreach($growth as $datas)
                        <tr>
                            <td>{{$datas->date_of_visit}}</td>
                            <td>{{$datas->jin}}</td>
                            <td>{{$datas->undur}}</td>
                            <td>{{$datas->bmi}}</td>
                            <td><!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal100">
                              шалгах
                            </button></td>
                        </tr>
                       @endforeach
                      </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
            </div>
          </div>
          <div id="container">
          <div class="row">
              <div class="col-12 col-md-6 col-lg-8">
                <h1>Vaccination Record</h1>
                  
            </div>
    </div>  
          </div>
        </section>
      </div>
      <!-- modal3 -->
      <!-- Modal -->
<div class="modal fade" id="exampleModal{{$child->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
      <!-- modal3 -->
<!-- modal2 -->
<div class="modal fade" id="exampleModal100" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
      <div id="chartContainer" style="height: 400px; width: 600px; margin: 0px auto;"></div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- modal2 -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Хүүхдийн өсөлтийн таларх мэдээлэл</h5>
        
      </div>
        <!-- FORM -->
        <div class="modal-body">
        <!-- FORM -->
        <div class="container">
      <form action="/children/{{$child->id}}/profile/add" method="post">
      @csrf
        <div class="panel panel-default">
          <!-- <div class="panel-heading" style="background-color: white;">
            <div class="row">
              <div class="col-xs-6">
                  <h4>Хүүхдийн мэдээлэл нэмэх</h4>
              </div>
              </div>
          </div> -->
          <div class="panel-body">
            <div class="form-group">
            <label for="birthday">Өсөлтийн үнэлгээнд хамрагдсан хугацаа</label>
            <input type="date" class="form-control" id="date_of_visit" name="date_of_visit">
            </div>
            <div class="form-group">
              <label for="studentId">Жин (кг)</label>
              <input type="text" class="form-control" id="jin" name="jin" placeholder="хүүхдийн жингээ оруулна уу">
            </div>
            <div class="form-group">
              <label for="studentId">Урт, өндөр (см)</label>
              <input type="text" class="form-control" id="undur" name="undur" placeholder="хүүхдийн урт, өндөрөө оруулна уу">
            </div>
          </div>
          </div>
          </div>

        </div>
      
        <!-- FORM -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-success">НЭМЭХ</button>
          </form>
      </div>
    </div>
  </div>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js"></script>
  <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Daily High Temperature at Different Beaches"
	},
	axisX: {
		title: "age (months)",
		includeZero: false,
		suffix: " months"
	},		
	axisY: {
		title: "Weigth",
		includeZero: false,
		suffix: " kg"
	},
	legend:{
		cursor: "pointer",
		fontSize: 16,
		itemclick: toggleDataSeries
	},
	toolTip:{
		shared: true
	},
	data: [
	
	{
		name: "Nantucket",
		type: "spline",
		yValueFormatString: "#0.## °C",
		showInLegend: true,
		dataPoints: [
			{ x: 0, y: 2.5 },
			{ x: 1, y: 3 },
			{ x: 2, y: 3.5 },
			{ x: 3, y: 4 },
			{ x: 4, y: 4.5 },
			{ x: 5, y: 5 },
			{ x: 6, y: 5.5 },
			{ x: 7, y: 6 },
			{ x: 8, y: 6.5 },
			{ x: 9, y: 7 },
			{ x: 10, y: 7.5 },
      { x: 11, y: 7.7 },
      { x: 12, y: 7.85 },
      { x: 13, y: 7.9 },
      { x: 14, y: 8.2 },
      { x: 15, y: 8.4 },
      { x: 16, y: 8.5 },
      { x: 17, y: 8.7 },
      { x: 18, y: 8.8 },
      { x: 19, y: 8.9 },
      { x: 20, y: 9 },
      
		]
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
