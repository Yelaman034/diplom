@extends('layouts.master')
@section('content')
<div class="main">
<div class="main-content" style="min-height: 511px;">
        <section class="section">
          <div class="section-header">
            <h1>Профайл</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/children">Хүүхэд</a></div>
              <div class="breadcrumb-item">Профайл</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title"><small>САЙН БАЙНА УУ !</small>
, {{$data->last_name}}</h2>

            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="{{asset('newTemplate//assets/img/avatar/avatar-1.png')}}" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <!-- <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Posts</div>
                        <div class="profile-widget-item-value">187</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Followers</div>
                        <div class="profile-widget-item-value">6,8K</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Following</div>
                        <div class="profile-widget-item-value">2,1K</div>
                      </div> -->
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">Ujang Maman <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Web Developer</div></div>
                    Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.
                  </div>
                  <div class="card-footer text-center">
                    <div class="font-weight-bold mb-2">Follow Ujang On</div>
                    <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-github mr-1">
                      <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
              <div>
                    @if($errors->any())
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                      {{$error}}
                    </div>
                    @endforeach
                    @endif
                  </div>
                <div class="card">
                  <form method="post" action="/profile/{{$data->id}}/update" >
                  @csrf
                    <div class="card-header">
                      <h4>Хэрэглэгчийн мэдээлэл засах</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-12 col-12">
                            <label>Овог</label>
                                    <input type="text" name="first_name" class="form-control" value={{$data->first_name}} required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                          <div class="form-group col-md-12 col-12">
                            <label>Нэр</label>
                            <input type="text" name="last_name" class="form-control" value={{$data->last_name}} required="">
                            <div class="invalid-feedback">
                              Please fill in the last name
                            </div>
                          </div>
                          <div class="form-group col-md-12 col-12">
                            <label>Утасны дугаар</label>
                            <input type="text" name="phone_number" class="form-control" value={{$data->phone_number}} required="">
                            <div class="invalid-feedback">
                              Please fill in the last name
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="form-group col-md-12 col-12">
                            <label>Имэйл</label>
                            <input type="email" name="email" class="form-control" value={{$data->email}} required="">
                            <div class="invalid-feedback">
                              Please fill in the email
                            </div>
                          </div>
                          
                        </div>
                    </div>
                    
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Хадгалах</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
</div>

@endsection
