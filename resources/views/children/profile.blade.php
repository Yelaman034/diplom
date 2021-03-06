@extends('layouts.master')

@section("content")
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Хүүхдийн профайл</h1>
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
                      <img alt="image" src="{{asset('newTemplate/assets/img/avatar/4-01.jpg')}}" class="rounded-circle author-box-picture">
                      <div class="clearfix"></div>
                      <!-- <a href="#" class="btn btn-primary mt-3 follow-btn" data-follow-action="alert('follow clicked');" data-unfollow-action="alert('unfollow clicked');">{{$child->lname}}</a> -->
                    </div>
                    <div class="author-box-details">
                      <div class="author-box-name">
                        <h4>{{$child->fname}} овогтой {{$child->lname}}</h4>
                      </div>
                      <?php
                       $birth = new DateTime($child->date_of_birth);
                       $today = new DateTime();
                       $interval = $birth->diff($today);
                      ?>
                     <div class="author-box-job"><h5>{{$interval->format('%y нас %m сар ба %d өдөр')}}</h5></div>
                     <br>
                      <div class="author-box-description" >
                        <p><strong>Хүүхдийн мэдээлэл</strong></p>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><strong>Төрсөн огноо:</strong>{{$child->date_of_birth}}</li>
                          <li class="list-group-item"> <strong>Регистер дугаар:</strong>
                            {{$child->register_number}}</li>
                          <li class="list-group-item"> <strong>Хүйс:</strong> {{$child->gender}}</li>
                        </ul>
                      </div>
                      
                      
                      <div class="w-100 d-sm-none"></div>
                      <div class="float-right mt-sm-0 mt-3">
                        <a href="/children/{{$child->id}}/edit" class="btn btn-outline-primary">Хүүхдийн мэдээлэл засах <i class="fas fa-chevron-right"></i></a>
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
                      <table id="datatable" class="table table-striped table-md">
                        <thead>
                          <tr>
                              <th>Сар</th>
                              <th>Жин (кг)</th>
                              <th>Өндөр (см)</th>
                              <th>БЖИ</th>
                              <th>Үйлдэл</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($growth as $datas)
                        <tr>
                            <td>{{$datas->age}}</td>
                            <td>{{$datas->jin}}</td>
                            <td>{{$datas->undur}}</td>
                            <td>{{$datas->bmi}}</td>
                            <td>
                            <a  class="btn btn-icon btn-outline-primary" data-myage="{{$datas->age}}" data-myjin="{{$datas->jin}}" data-myundur="{{$datas->undur}}" data-datasid="{{$datas->id}}" data-toggle="modal" data-target="#edit">
                            <i class="far fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-outline-danger" data-datasid="{{$datas->id}}" data-toggle="modal" data-target="#delete">
                            <i class="fas fa-times"></i></a>
                            </td>
                            
                        </tr>
                       @endforeach
                      </tbody>
                      </table>
                      
                    </div>
                    
                  </div>
                  <div class="card-footer text-right">
                  
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                      {{$growth->links()}}
                      </ul>
                    </nav>
                    <a href="/children/{{$child->id}}/profile/chart" class="btn btn-outline-primary ">График шалгах</a>
                  </div>
                  
                  
                  
                </div>
            </div>
          </div>
          
          <div class="row">
          <div class="col-12 col-md-6 col-lg-8">
          <div class="card">
                  <div class="card-header">
                    <h4>Вакцинууд</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              ^
                            </th>
                            <th>Вакцин Нэр</th>
                            <th>Вакцинжуулах огноо</th>
                            <th>Үйлдэл</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($vaccines as $item)
                          <tr>
                            <td>
                            <?php
                          $found = false;
                          ?>
                            @foreach($dataVaccRegInfo as $vaccRegInfo)
                            @if($item->id == $vaccRegInfo->vaccine_id)
                            <div class="badge badge-success"><i class="fas fa-check"></i></div>
                            
                         <?php
                          $found = true;
                         ?>
                            @break
                            @endif
                            @endforeach
                            @if(!$found)
                            <div class="badge badge-warning" ><i class="fas fa-exclamation-triangle"></i></div>
                            
                            @endif
                            
                            </td>
                            <td>{{$item['name']}}</td>
                            <td>
                            <?php
                            $birth = $child->date_of_birth;
                            $days = $item['day'];

                            $birth2 = strtotime($birth);
                            $birth2 = strtotime("+$days day", $birth2);
                            
                            ?>
                            <strong>{{date('Y/m/d', $birth2)}}</strong>
                            </td>
                            <td>
                            <?php
                          $found = false;
                          ?>
                            @foreach($dataVaccRegInfo as $vaccRegInfo)
                            @if($item->id == $vaccRegInfo->vaccine_id)
            <!-- <a href="/children/{{$child->id}}/vaccineReg/{{$vaccRegInfo->id}}/edit" class="btn btn-success">Бүртгэсэн</a> -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editVaccineReg" data-myvaccineregid="{{$vaccRegInfo->id}}"
             data-myvaccinename="{{$vaccRegInfo->vaccine_name}}" data-myvaccinegivedate="{{$vaccRegInfo->give_date}}" data-myvaccinehospital="{{$vaccRegInfo->hospital}}" data-myvaccineid="{{$item['id']}}">
             Бүртгэсэн
            </button>
                         <?php
                          $found = true;
                         ?>
                            @break
                            @endif
                            @endforeach
                            @if(!$found)
                            <!-- <a href="/children/{{$child->id}}/profile/vaccine/{{$item['id']}}" class="btn  btn-primary">Бүртгэх</a> -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vaccineReg" data-myvaccinename="{{$item['name']}}"
                            data-myvaccineid="{{$item['id']}}">
                            Бүртгэх
                            </button>
                            @endif
                            
                            
                            </td>
                            
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Вакцин түүх</h4>
                  </div>
                  <div class="card-body">

                  
                    
                    <div class="table-responsive">
                      <table class="table  table-md">
                        <tbody>
                        <tr>
                        </tr>
                        @foreach ($dataVaccRegInfo as $item)
                        <tr>
                          <td>{{$item->vaccine_name}}</td>
                          <td>
                          <div class="badge badge-success"><i class="fas fa-check"></i></div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody></table>
                    </div>
                    <div>
                    
                    
               
                  
                   
                   
                  </div>
                </div>
              </div>
            </div>
        </section>
      </div>
      <!-- edit Vaccine Reg  -->
      <div class="modal fade" id="editVaccineReg" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editlabel">Дархлаажуулалтын мэдээлэл бүртгэх</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/children/{{$child->id}}/vaccRecordEdit" method="POST">
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
          <input type="hidden" class="form-control" id="vaccinereg_id" name="vaccinereg_id" value="">
          <input type="hidden" class="form-control" id="vacc_id" name="vacc_id" value="">
          <div class="form-group">
                      <label>Вакцины төрөл</label>
                      <input type="text" readonly class="form-control-plaintext" id="vaccine_name" name = "vaccine_name" value="">
          </div>
            
          <div class="form-group">
                        <label for="exampleInputEmail1">Вакцинжуулсан огноо</label>
                        <input type="date" name = "give_date" class="form-control" id="give_date"  placeholder="Enter date" value=""
                         >
                    </div>
            <div class="form-group">
                        <label for="exampleInputEmail1">Дархлаажуулалт хийсэн байгууллага</label>
                        <input type="text" name = "hospital" class="form-control" id="hospital"  placeholder="дархлаажуулалт хийсэн эрүүл мэндийн байгууллага оруулна уу"  value=""
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
 <!-- vaccine Reg      -->
 <div class="modal fade" id="vaccineReg" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editlabel">Дархлаажуулалтын мэдээлэл бүртгэх</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/children/{{$child->id}}/vaccRecord" method="POST">
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
          <input type="hidden" class="form-control" id="vaccine_id" name="vaccine_id" value="">
          <div class="form-group">
                      <label>Вакцины төрөл</label>
                      <input type="text" readonly class="form-control-plaintext" id="vaccine_name" name = "vaccine_name" value="">
          </div>
            
          <div class="form-group">
                        <label for="exampleInputEmail1">Вакцинжуулсан огноо</label>
                        <input type="date" name = "give_date" class="form-control" id="date"  placeholder="Enter date"
                         >
                    </div>
            <div class="form-group">
                        <label for="exampleInputEmail1">Дархлаажуулалт хийсэн байгууллага</label>
                        <input type="text" name = "hospital" class="form-control" id="hospital"  placeholder="дархлаажуулалт хийсэн эрүүл мэндийн байгууллага оруулна уу"  
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
  <!-- delete -->
  <div class="modal  fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editlabel">Хэмжилтийг устгах</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/delete" method="post">
      @csrf

      <div class="modal-body">
      
      <div class="container">

        <div class="panel panel-default">
          <div class="panel-body">
              <input type="hidden" class="form-control" id="datas_id" name="id" value="">
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

     
  <!-- edit growth -->
  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editlabel">Хүүхдийн хэмжилт засах</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/children/{{$child->id}}/growth/edit" method="post">
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
              <input type="hidden" class="form-control" id="datas_id" name="id" value="">
            
          <div class="form-group">
              <label for="studentId">Сар</label>
              <input type="text" class="form-control" id="age" name="age" placeholder="хүүхдийн жингээ оруулна уу">
            </div>
            <div class="form-group">
              <label for="studentId">Жин (кг)</label>
              <input type="number" class="form-control" id="jin" name="jin" placeholder="хүүхдийн жингээ оруулна уу">
            </div>
            <div class="form-group">
              <label for="studentId">Урт, өндөр (см)</label>
              <input type="number" class="form-control" id="undur" name="undur" placeholder="хүүхдийн урт, өндөрөө оруулна уу">
            </div>
          </div>
          </div>
          </div>

        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Гарах</button>
        <button type="submit" name="submit" class="btn btn-success">Шинэчлэх</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- add growth Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Хүүхдийн өсөлтийн таларх мэдээлэл</h5>
        
      </div>
        <!-- FORM -->
        <form action="/children/{{$child->id}}/profile/addGrowth" method="post">
      @csrf
        <div class="modal-body">
        <!-- FORM -->
        <div class="container">
      
        <div class="panel panel-default">
          
          <div class="panel-body">
          <div class="form-row">
              <!-- <div class="form-group col-md-6">
                <label for="inputCity">Нас</label>
                <select id="inputState" class="form-control" name="year" required>
                  <option selected="">-</option>
                  <option value=0>0</option>
                  <option value=1>1</option>
                  <option value=2>2</option>
                  <option value=3>3</option>
                  <option value=4>4</option>
                  </select>
                </div> -->
              <div class="form-group col-md-12">
                  <label for="inputState">Сар</label>
                  <select id="inputState" class="form-control" name="month" required>
                  <option selected="">--Сонгох--</option>
                  <option value=0>0</option>
                  <option value=1>1</option>
                  <option value=2>2</option>
                  <option value=3>3</option>
                  <option value=4>4</option>
                  <option value=5>5</option>
                  <option value=6>6</option>
                  <option value=7>7</option>
                  <option value=8>8</option>
                  <option value=9>9</option>
                  <option value=10>10</option>
                  <option value=11>11</option>
                  <option value=11>12</option>
                  <option value=11>13</option>
                  <option value=11>14</option>
                  <option value=11>15</option>
                  <option value=11>16</option>
                  <option value=11>17</option>
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label for="studentId">Жин (кг)</label>
              <input type="number" class="form-control" id="jin" name="jin" placeholder="хүүхдийн жингээ оруулна уу">
            </div>
            <div class="form-group">
              <label for="studentId">Урт, өндөр (см)</label>
              <input type="number" class="form-control" id="undur" name="undur" placeholder="хүүхдийн урт, өндөрөө оруулна уу">
            </div>
          </div>
          </div>
          </div>

        </div>
      
        <!-- FORM -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-success">НЭМЭХ</button>
      </div>
      </form>
    </div>
  </div>

 

@endsection
