@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
								
                <div class="card">
                  <form action="" method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Хүүхдийн мэдээлэлээ засах</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Овог</label>
                            <input name="ovog" type="text" class="form-control"  required="">   
                            <div class="invalid-feedback">
                              овогоо оруулна уу
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Нэр</label>
                            <input name="ner" type="text" class="form-control"  required="">
                            <div class="invalid-feedback">
                              нэрээ оруулна уу
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-7 col-12">
                            <label>Төрсөн өдөр</label>
                            <input name="date_of_birth" type="date" class="form-control"  required="">
                            <div class="invalid-feedback">
                              төрсөн өдөрөө оруулна уу
                            </div>
                          </div>
                          <div class="form-group col-md-5 col-12">
                            <label>Регистер дугаар</label>
                            <input name="r_number" type="text" class="form-control" >
                            <div class="invalid-feedback">
                              регистер оруулна уу
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                            <label>Хүйс</label>
                            
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

@endsection
