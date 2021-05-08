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
                    <h4>Хүүхдийн жагсаалт</h4>
                    <div class="card-header-action">
                    <button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#exampleModal">
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
                    <td>{{$child_data->fname}}</td>
                    <td>{{$child_data->lname}}</td>
                    <td>{{$child_data->date_of_birth}}</td>
                    <td>{{$child_data->register_number}}</td>
                    <td>{{$child_data->gender}}</td>
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
      <form action="/children/create" method="post" id="validate_form">
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
            <div class="form-group has-error">
              <label for="studentLName">Овог</label>
              <input type="text" class="form-control" id="fname" name="fname" placeholder="Жишээ: Лхагвасүрэн" required data-parsley-pattern="[A-Z]" data-parsley-trigger="keyup">
            </div>
            <div class="form-group">
              <label for="studentFName">Нэр</label>
              <input type="text" class="form-control" id="lname" name="lname" placeholder="Жишээ: Батбаяр" required data-parsley-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup">
            </div>
            <div class="form-group">
            <label for="birthday">Төрсөн өдөр</label>
            <input type="date" class="form-control" id="birthday" name="date_of_birth" required>
            </div>
            <div class="form-group">
              <label for="studentGender">Хүйс</label>
              <select class="form-control" id="Gender" name="gender" required>
                <option>-- Сонгох --</option>
                <option value="Эрэгтэй">Эрэгтэй</option>
                <option value="Эмэгтэй">Эмэгтэй</option>
              </select>
            </div>
            <div class="form-group">
              <label for="studentId">Регистер дугаар</label>
              <div class="form-row">
              <div class="form-group col-md-2">
                <select class="form-control" id="r1" name="r1" required>
                <option>-</option>
                <option value="А">А</option>
                <option value="Б">Б</option>
                <option value="В">В</option>
                <option value="Г">Г</option>
                <option value="Д">Д</option>
                <option value="Е">Е</option>
                <option value="Ё">Ё</option>
                <option value="Ж">Ж</option>
                <option value="З">З</option>
                <option value="И">И</option>
                <option value="Й">Й</option>
                <option value="К">К</option>
                <option value="Л">Л</option>
                <option value="М">М</option>
                <option value="Н">Н</option>
                <option value="О">О</option>
                <option value="Ө">Ө</option>
                <option value="П">П</option>
                <option value="Р">Р</option>
                <option value="С">С</option>
                <option value="Т">Т</option>
                <option value="У">У</option>
                <option value="Ү">Ү</option>
                <option value="X">X</option>
                <option value="Ц">Ц</option>
                <option value="Ч">Ч</option>
                <option value="Ш">Ш</option>
                <option value="Щ">Щ</option>
                <option value="Ь">Ь</option>
                <option value="Ь">Ь</option>
                <option value="Ъ">Ъ</option>
                <option value="Э">Э</option>
                <option value="Ю">Ю</option>
                <option value="Я">Я</option>
              </select>
                </div>
                <div class="form-group col-md-2">
                <select class="form-control" id="r2" name="r2" required>
                <option>-</option>
                <option value="А">А</option>
                <option value="Б">Б</option>
                <option value="В">В</option>
                <option value="Г">Г</option>
                <option value="Д">Д</option>
                <option value="Е">Е</option>
                <option value="Ё">Ё</option>
                <option value="Ж">Ж</option>
                <option value="З">З</option>
                <option value="И">И</option>
                <option value="Й">Й</option>
                <option value="К">К</option>
                <option value="Л">Л</option>
                <option value="М">М</option>
                <option value="Н">Н</option>
                <option value="О">О</option>
                <option value="Ө">Ө</option>
                <option value="П">П</option>
                <option value="Р">Р</option>
                <option value="С">С</option>
                <option value="Т">Т</option>
                <option value="У">У</option>
                <option value="Ү">Ү</option>
                <option value="X">X</option>
                <option value="Ц">Ц</option>
                <option value="Ч">Ч</option>
                <option value="Ш">Ш</option>
                <option value="Щ">Щ</option>
                <option value="Ь">Ь</option>
                <option value="Ь">Ь</option>
                <option value="Ъ">Ъ</option>
                <option value="Э">Э</option>
                <option value="Ю">Ю</option>
                <option value="Я">Я</option>

              </select>
                </div>
                <div class="form-group col-md-8">
                      <input type="text" class="form-control" id="register_number" name="register_number" placeholder="18031204">
                </div>
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

@stop