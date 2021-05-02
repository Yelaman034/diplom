@extends('layouts.master')
@section("content")
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Вакцин</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/children/{{$child2->id}}/profile">Профайл</a></div>
              <div class="breadcrumb-item">Вакцин</div>
            </div>
          </div>
          <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
                  <div class="card-header">
                    <h4>
                    <?php
                            $birth = $child2->date_of_birth;
                            $days = $vaccine->day;

                            $birth2 = strtotime($birth);
                            $birth2 = strtotime("+$days day", $birth2);
                            
                            ?>
                            Хийлгэх шаардлагатай огноо : {{date('Y/m/d', $birth2)}}
                    </h4>
                  </div>
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Тухай</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Вакцин товлол ба тун</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Хариу урвал</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        {{$vaccine->about}}
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      {{$vaccine->dose}}
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      {{$vaccine->side_effects}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
              <div class="card">
                  <div class="card-header">
                    <h4>Дархлажуулалтын мэдээлэл</h4>
                  </div>
                  <div class="card-body">
        <form action="/children/{{$child2->id}}/profile/vaccine/{{$vaccine->id}}/record" method="POST">
                    <!-- <div class="alert alert-info">
                      <b>Note!</b> Not all browsers support HTML5 type input.
                    </div> -->
                    @csrf
                    <div class="form-group">
                      <label>Вакцины төрөл</label>
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" name = "vaccine_name" value="{{$vaccine->name}}">
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
                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Хадгалах</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                  </div>    
                  </form>
                </div>
              </div>
            </div>
    
    </section>
</div>

@endsection
