@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
				    <div class="card">
            <div>
                    @if($errors->any())
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                      {{$error}}
                    </div>
                    @endforeach
                    @endif
                  </div>
                  <div class="card-header">
                    <h4>Вакцины жагсаалт</h4>
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
                    <td>{{$vacc->day}}</td>
                    <td>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editVaccine" data-myvaccineid="{{$vacc->id}}"
                    data-myvaccinename="{{$vacc->name}}" data-myvaccineabout="{{$vacc->about}}" data-myvaccinedose="{{$vacc->dose}}" data-myvaccineside="{{$vacc->side_effects}}" data-myvaccineday="{{$vacc->day}}">
                    Засах
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteVaccine" data-myvaccineid="{{$vacc->id}}">
                    Устгах
                    </button>
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
<!-- delete vaccine -->
<div class="modal  fade" id="deleteVaccine" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editlabel">Вакциныг устгах</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/vaccine/delete" method="post">
      @csrf

      <div class="modal-body">
      
      <div class="container">

        <div class="panel panel-default">
          <div class="panel-body">
              <input type="hidden" class="form-control" id="vacc_id" name="vacc_id" value="">
            <text class="center">
            Та үргэлжлүүлэхийг хүсч байна уу? 
            </text>
            
          </div>
          </div>
          </div>

        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Үгүй</button>
        <button type="submit" name="submit" class="btn btn-danger">Тийм</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- edit Vaccine   -->
<div class="modal fade" id="editVaccine" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editlabel">Дархлаажуулалтын мэдээлэл бүртгэх</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/vaccine/update" method="POST">
      @csrf
      <div class="modal-body">
      
      <div class="container">

        <div class="panel panel-default">
          <!-- <div class="panel-heading" style="background-color: white;">
            <div class="row">
              <div class="col-xs-6">
                  <h4>Хүүхдийн мэдээлэл нэмэх</h4>
              </div>
              </div>
          </div> -->
          <div class="panel-body">
          <input type="hidden" class="form-control" id="vacc_id" name="vacc_id" value="">
          <div class="form-group">
                      <label>Вакцины төрөл</label>
                      <input type="text"  class="form-control" id="vacc_name" name = "name" value="">
          </div>
            
          <div class="form-group">
                        <label for="exampleInputEmail1">Тухай</label>
                        <input type="text" name = "about" class="form-control" id="vacc_about"  placeholder="Enter date" value=""
                         >
                    </div>
            <div class="form-group">
                        <label for="exampleInputEmail1">Вакцины товлол</label>
                        <input type="text" name = "dose" class="form-control" id="vacc_dose"  placeholder="дархлаажуулалт хийсэн эрүүл мэндийн байгууллага оруулна уу"  value=""
                        >
              </div>
              <div class="form-group">
                        <label for="exampleInputEmail1">Хариу урвал</label>
                        <input type="text" name = "side_effects" class="form-control" id="vacc_side"  placeholder="дархлаажуулалт хийсэн эрүүл мэндийн байгууллага оруулна уу"  value=""
                        >
              </div>
              <div class="form-group">
                        <label for="exampleInputEmail1">Төрсөн дараа хийлгэх өдөр</label>
                        <input type="text" name = "day" class="form-control" id="vacc_day"  placeholder="дархлаажуулалт хийсэн эрүүл мэндийн байгууллага оруулна уу"  value=""
                        >
              </div>
          </div>
          </div>
          </div>

        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Гарах</button>
        <button type="submit" name="submit" class="btn btn-success">Хадгалах</button>
      </div>
      </form>
    </div>
  </div>
</div>

   <!-- vaccine create -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Вакцин нэмэх</h5>
        
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
            <label for="birthday">Төрсөн дараа хийлгэх өдөр</label>
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