@extends('layouts.master')

@section("content")
<div class="main-content">
        <section class="section">
        <!-- header -->
          <div class="section-header">
            <h1>Вакцин</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/vaccines">Вакцинууд</a></div>
              <div class="breadcrumb-item">Вакцин</div>
            </div>
          </div>
        <!-- section -->
          <div class="section-body">
         <!-- one -->
         <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Заавал</h4>
                  </div>
                  <div class="card-body">
                    <div class="tickets">
                      
                      <div class="ticket-content" style="width:100%;">
                        <div class="ticket-header">
                          <div class="ticket-sender-picture img-shadow">
                            <img src="{{asset('newTemplate/assets/img/avatar/724319.png')}}" alt="image">
                          </div>
                          <div class="ticket-detail">
                            <div class="ticket-title">
                              <h4>{{$vaccine->name}} (tun)</h4>
                            </div>
                            <div class="ticket-info">
                              <div class="bullet"></div>
                              <div class="text-primary font-weight-600">{{$vaccine->dose}}</div>
                            </div>
                          </div>
                        </div>
                        <div class="ticket-description">
                            <h5>Тухай</h5>
                          <p>{{$vaccine->about}}</p>
                          <h5>Хариу урвал</h5>
                          <p>{{$vaccine->side_effects}}</p>

                         


                          
                              
                              <div class="form-group text-left">
                                <a href="/vaccines"class="btn btn-primary btn-lg">
                                  БУЦАХ
                                </a>
                              </div>
                            
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
         <!-- one -->
        </div>
            <!-- section -->
        </section>
      </div>

 
@endsection
