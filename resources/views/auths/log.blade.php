<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Нэвтрэх</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('newTemplate/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('newTemplate/assets/css/components.css')}}">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="{{asset('newTemplate/assets/img/logo1.png')}}" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal"> ^<span class="font-weight-bold">Хүүхдийн өсөлт ба дархлажуулалт</span></h4>
            <p class="text-muted">Эхлэхээсээ өмнө бүртгэл байхгүй бол нэвтрэх эсвэл бүртгүүлэх шаардлагатай.</p>
            <form method="POST" action="postlogin" class="needs-validation" novalidate="">
              @csrf
              @if(session('aldaa'))
              <div class="alert alert-danger" role="alert">
              {{session('aldaa')}}
              </div>
              @endif
              <div class="form-group">
                <label for="email">Имэйл</label>
                <input id="email" type="email" class="form-control" name="email"placeholder="email@example.com"  tabindex="1" required autofocus>
                <div class="invalid-feedback">
                имэйлээ оруулна уу
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Нууц үг</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" placeholder="нууг үг" required>
                <div class="invalid-feedback">
                нууц үгээ оруулна уу
                </div>
              </div>

              <div class="form-group text-right">
              
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Нэвтрэх
                </button>
              </div>

              <div class="mt-5 text-center">
              Та системд бүртгэл үүсгээгүй бол? <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                  Бүртгүүлэх
                </button>
                
              </div>
            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; Your Company. 
              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="{{asset('newTemplate/assets/img/unsplash/growth.png')}}">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Өглөөний мэнд</h1>
                <h5 class="font-weight-normal text-muted-transparent">Улаанбаатар, Монголия</h5>
              </div>
              Dev <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Yelaman</a> ..<a class="text-light bb" target="_blank" href="https://unsplash.com">..</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div>
  @if($errors->any())
  @foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{$error}}
  </div>
  @endforeach
  @endif
  </div>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Бүртгүүлэх</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action='register' method="POST" class="needs-validation" novalidate=""> 
    <div class="form-group">
        @csrf
        <label for="exampleInputEmail1">Овог</label>
        <input type="text" name = "first_name" class="form-control" id="first_name" placeholder="Овогоо оруулна уу" tabindex="1" required autofocus>
        <div class="invalid-feedback">
          овогоо үгээ оруулна уу
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Нэр</label>
        <input type="text" name = "last_name" class="form-control" id="last_name"  placeholder="нэр оруулна уу" tabindex="2" required autofocus>
        <div class="invalid-feedback">
          нэрээ үгээ оруулна уу
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Утасны дугаар</label>
        <input type="text" name = "phone_number" class="form-control" id="phone_number"  placeholder="утасны дугаараа оруулна уу" tabindex="3" required autofocus>
        <div class="invalid-feedback">
          утасны дугаараа оруулна уу
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Имэйл</label>
        <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="имэйлээ оруулна уу" tabindex="4" required autofocus>
        <div class="invalid-feedback">
          имэйлээ үгээ оруулна уу
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword9">Нууц үг</label>
        <input type="password" name="password" class="form-control" id="password2" placeholder="нууц үг" tabindex="4" required autofocus>
        <div class="invalid-feedback">
          нууц үг үгээ оруулна уу
        </div>
    </div>
    
    
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Бүртгүүлэх</button>
        </form> 
      </div>
    </div>
  </div>
</div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{asset('newTemplate/assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{asset('newTemplate/assets/js/scripts.js')}}"></script>
  <script src="{{asset('newTemplate/assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
</body>
</html>
