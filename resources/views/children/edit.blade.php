@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
								
                <div class="card">
                  <form action="/children/{{$child->id}}/update" method="post" class="needs-validation" novalidate="">
                  @csrf
                    <div class="card-header">
                      <h4>Хүүхдийн мэдээлэлээ засах</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Овог</label>
                            <input name="ovog" type="text" class="form-control" value="{{$child->ovog}}" required="">   
                            <div class="invalid-feedback">
                              овогоо оруулна уу
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Нэр</label>
                            <input name="ner" type="text" class="form-control" value="{{$child->ner}}" required="">
                            <div class="invalid-feedback">
                              нэрээ оруулна уу
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-7 col-12">
                            <label>Төрсөн өдөр</label>
                            <input name="date_of_birth" type="date" class="form-control" value="{{$child->date_of_birth}}" required="">
                            <div class="invalid-feedback">
                              төрсөн өдөрөө оруулна уу
                            </div>
                          </div>
                          <div class="form-group col-md-5 col-12">
                            <label>Регистер дугаар</label>
                            <input name="r_number" type="text" class="form-control" value="{{$child->r_number}}">
                            <div class="invalid-feedback">
                              регистер оруулна уу
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                            <label>Хүйс</label>
                            <select class="form-control" id="Gender" name="hvis">
                                <option>-- Сонгох --</option>
                                <option value="male"   @if($child->hvis == "male") selected @endif>Эр</option>
                                <option value="female" @if($child->hvis == "female") selected @endif>Эм</option>
                              </select>
                              <div class="invalid-feedback">
                              хүйсээ оруулна уу
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
        </div>   
    </div> 
</div>
@stop
@section("content1")
    <h1>Хүүхдийн мэдээлэлийн засах</h1>
        <!-- Alert -->
        @if(session('success'))
            <div class="alert alert-success" role="alert">
            {{session('success')}}
            </div>
        @endif
        <!-- Alert -->
        <div class="row">
        <div class="col-lg-12">
        <div class="container">
      <form action="/children/{{$child->id}}/update" method="post">
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
              <label for="studentLName">Овог</label>
              <input type="text" class="form-control" id="LName" name="ovog" placeholder="Жишээ: Лхагвасүрэн" value="{{$child->ovog}}">
            </div>
            <div class="form-group">
              <label for="studentFName">Нэр</label>
              <input type="text" class="form-control" id="FName" name="ner" placeholder="Жишээ: Батбаяр" value="{{$child->ner}}">
            </div>
            <div class="form-group">
            <label for="birthday">Төрсөн өдөр</label>
            <input type="date" class="form-control" id="birthday" name="date_of_birth" value="{{$child->date_of_birth}}">
            </div>
            <div class="form-group">
              <label for="studentId">Регистер дугаар</label>
              <input type="text" class="form-control" id="rId" name="r_number" placeholder="Регистер дугаар" value="{{$child->r_number}}">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="studentGender">Хүйс</label>
              <select class="form-control" id="Gender" name="hvis">
                <option>-- Сонгох --</option>
                <option value="male"   @if($child->hvis == "male") selected @endif>Эр</option>
                <option value="female" @if($child->hvis == "female") selected @endif>Эм</option>

              </select>
            </div>
            <div class="panel-footer" style="background-color: white;">
              <button type="submit" name="submit" class="btn btn-success">Update</button>
          </div>
          </form>
            
          </div>
          
        </div>
        </div>
        
        </div>

@endsection
