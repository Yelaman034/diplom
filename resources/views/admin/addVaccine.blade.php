@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
				<div class="card">
                  <div class="card-header">
                    <h4>Вакцин жагсаалт</h4>
                    <div class="card-header-action">
                    <button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#exampleModal">
                    Вакцин нэмэх
                </button>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped" id="sortable-table">
                        <thead>
                        <tr>
												<th>Нэр</th>
												<th>Тухай</th>
												<th>Вакцины товлол</th>
                        <th>Хариу урвал</th>
                        <th>Өдөр</th>
                        <th>Үйлдэл</th>
											</tr>
                      </thead>
                        <tbody>
                        @foreach($vaccine as $vacc)
                  <tr>
                    <td>{{$vacc->name}}</td>
                    <td>{{$vacc->about}}</td>
                    <td>{{$vacc->dose}}</td>
                    <td>{{$vacc->side_effects}}</td>
                    <td>{{$vacc->day}}</td>
                    <td>
                    <a href="/children/{{$vacc->id}}/edit" class="btn btn-warning btn-sm">Засах</a>
                    <a href="/children/{{$vacc->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Хүүхдийн мэдээлэлээ устгах уу?')">Устгах</a>
                    <!-- <a href="/vacc/{{$vacc->id}}/detail" class="btn btn-outline-primary btn-sm">Detail</a>
                    </td> -->
                </tr>
                @endforeach
                        </tbody>
                        
                      </table>
                      
                    </div>
                  </div>
                </div>
				</div>	
			</div>
		</div>
	</div>
</div>

   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Хүүхэд нэмэх</h5>
        
      </div>
        <!-- FORM -->
        <div class="modal-body">
      <form action="/vaccine/create" method="post">
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
              <label for="vaccineName">Нэр</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="вакцин нэрээ оруулна уу">
            </div>
            <div class="form-group">
              <label for="studentFName">Тухай</label>
              <input type="text" class="form-control" id="about" name="about" placeholder="вакцины тайлбар оруулна уу">
            </div>
            <div class="form-group">
              <label for="studentFName">Вакцины товлол</label>
              <input type="text" class="form-control" id="dose" name="dose" placeholder="вакцины хэддүгээр тун оруулна уу">
            </div>
            <div class="form-group">
              <label for="studentFName">Хариу урвал</label>
              <input type="text" class="form-control" id="side_effects" name="side_effects" placeholder="вакцины хэддүгээр тун оруулна уу">
            </div>
            <div class="form-group">
            <label for="birthday">Өдөр</label>
            <input type="number" class="form-control" id="day" name="day"
            placeholder="хэдэн өдрийн дараа хийх ">
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

@stop