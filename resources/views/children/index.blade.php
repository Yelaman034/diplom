@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
				<div class="card">
                  <div class="card-header">
                    <h4>Хүүхдийн жагсаалт</h4>
                    <div class="card-header-action">
                    <button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#exampleModal">
                Хүүхэд нэмэх
                </button>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped" id="sortable-table">
                        <thead>
                        <tr>
												<th>Овог</th>
												<th>Нэр</th>
												<th>Төрсөн огноо</th>
												<th>Регистер</th>
                        <th>Хүйс</th>
                        <th>Үйлдэл</th>
											</tr>
                        </thead>
                        <tbody>
                        @foreach($child as $child_data)
                  <tr>
                    <td>{{$child_data->ovog}}</td>
                    <td>{{$child_data->ner}}</td>
                    <td>{{$child_data->date_of_birth}}</td>
                    <td>{{$child_data->r_number}}</td>
                    <td>{{$child_data->hvis}}</td>
                    <td>
                    <!-- <a href="/children/{{$child_data->id}}/edit" class="btn btn-warning btn-sm">Засах</a>
                    <a href="/children/{{$child_data->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Хүүхдийн мэдээлэлээ устгах уу?')">Устгах</a> -->
                    <a href="/children/{{$child_data->id}}/profile" class="btn btn-outline-primary btn-sm">Дэлгэрэнгүй</a>
                    </td>
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
      <form action="/children/create" method="post">
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
              <input type="text" class="form-control" id="LName" name="ovog" placeholder="Жишээ: Лхагвасүрэн">
            </div>
            <div class="form-group">
              <label for="studentFName">Нэр</label>
              <input type="text" class="form-control" id="FName" name="ner" placeholder="Жишээ: Батбаяр">
            </div>
            <div class="form-group">
            <label for="birthday">Төрсөн өдөр</label>
            <input type="date" class="form-control" id="birthday" name="date_of_birth">
            </div>
            <div class="form-group">
              <label for="studentId">Регистер дугаар</label>
              <input type="text" class="form-control" id="rId" name="r_number" placeholder="Регистер дугаар">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="studentGender">Хүйс</label>
              <select class="form-control" id="Gender" name="hvis">
                <option>-- Сонгох --</option>
                <option value="Хүү">Хүү</option>
                <option value="Охин">Охин</option>
              </select>
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
@section("content1")
        <!-- Alert -->
        @if(session('success'))
            <div class="alert alert-success" role="alert">
            {{session('success')}}
            </div>
        @endif
        <!-- Alert -->
        <div class="row">
            <div class="col-6">
                <h1>Хүүхдийн жагсаалт</h1>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
               <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                Хүүхэд нэмэх
                </button>
            </div>
            <table class='table table-hover'>
                <tr>
                    <th>Овог</th>
                    <th>Нэр</th>
                    <th>Төрсөн огноо</th>
                    <th>Регистер</th>
                    <th>Хүйс</th>
                    <th>Үйлдэл</th>
                </tr>
                @foreach($child as $child_data)
                <tr>
                    <td>{{$child_data->ovog}}</td>
                    <td>{{$child_data->ner}}</td>
                    <td>{{$child_data->date_of_birth}}</td>
                    <td>{{$child_data->r_number}}</td>
                    <td>{{$child_data->hvis}}</td>
                    <td>
                    <a href="/children/{{$child_data->id}}/edit" class="btn btn-warning btn-sm">Засах</a>
                    <a href="/children/{{$child_data->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Хүүхдийн мэдээлэлээ устгах уу?')">Устгах</a>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>

   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- FORM -->
        <div class="container">
      <form action="/children/create" method="post">
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
              <input type="text" class="form-control" id="LName" name="ovog" placeholder="Жишээ: Лхагвасүрэн">
            </div>
            <div class="form-group">
              <label for="studentFName">Нэр</label>
              <input type="text" class="form-control" id="FName" name="ner" placeholder="Жишээ: Батбаяр">
            </div>
            <div class="form-group">
            <label for="birthday">Төрсөн өдөр</label>
            <input type="date" class="form-control" id="birthday" name="date_of_birth">
            </div>
            <div class="form-group">
              <label for="studentId">Регистер дугаар</label>
              <input type="text" class="form-control" id="rId" name="r_number" placeholder="Регистер дугаар">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="studentGender">Хүйс</label>
              <select class="form-control" id="Gender" name="hvis">
                <option>-- Сонгох --</option>
                <option value="male">Эр</option>
                <option value="female">Эм</option>
              </select>
            </div>
            
          </div>
          
        </div>
      
    </div>
        <!-- FORM -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <div class="panel-footer" style="background-color: white;">
              <button type="submit" name="submit" class="btn btn-success">НЭМЭХ</button>
          </div>
          </form>
      </div>
    </div>
  </div>

@endsection