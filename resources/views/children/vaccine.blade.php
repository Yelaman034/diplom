@extends('layouts.master')
@section("content")
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Профайл</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/children">Хүүхэд</a></div>
              <div class="breadcrumb-item">Профайл</div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>{{$vaccine->date_of_give}}</h4>s
                  </div>
                  <div class="card-body">
                    <a href="#" class="btn btn-primary btn-icon icon-left btn-lg btn-block mb-4 d-md-none" data-toggle-slide="#ticket-items">
                      <i class="fas fa-list"></i> All Tickets
                    </a>
                    <div class="tickets">
                      
                      <div class="ticket-content">
                        <div class="ticket-header">
                          <div class="ticket-sender-picture img-shadow">
                            <img src="{{asset('newTemplate/assets/img/avatar/724319.png')}}" alt="image">
                          </div>
                          <div class="ticket-detail">
                            <div class="ticket-title">
                              <h4>{{$vaccine->name}}</h4>
                            </div>
                            <div class="ticket-info">
                              <div class="font-weight-600">Farhan A. Mujib</div>
                              <div class="bullet"></div>
                              <div class="text-primary font-weight-600">2 min ago</div>
                            </div>
                          </div>
                        </div>
                        <div class="ticket-description">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                          <!-- <div class="gallery">
                            <div class="gallery-item" data-image="../assets/img/news/img01.jpg" data-title="Image 1" href="../assets/img/news/img01.jpg" title="Image 1" style="background-image: url(&quot;../assets/img/news/img01.jpg&quot;);"></div>
                            <div class="gallery-item" data-image="../assets/img/news/img02.jpg" data-title="Image 2" href="../assets/img/news/img02.jpg" title="Image 2" style="background-image: url(&quot;../assets/img/news/img02.jpg&quot;);"></div>
                            <div class="gallery-item" data-image="../assets/img/news/img03.jpg" data-title="Image 3" href="../assets/img/news/img03.jpg" title="Image 3" style="background-image: url(&quot;../assets/img/news/img03.jpg&quot;);"></div>
                            <div class="gallery-item gallery-more" data-image="../assets/img/news/img04.jpg" data-title="Image 4" href="../assets/img/news/img04.jpg" title="Image 4" style="background-image: url(&quot;../assets/img/news/img04.jpg&quot;);">
                              <div>+2</div>
                            </div>
                          </div> -->
                          <div class="form-group text-right">
                            <button type="button"class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal{{$vaccine->id}}">
                               Вакциныг бүртгэх
                              </button>
                              </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </section>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$vaccine->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/children/{{$child2->id}}/profile/vaccine/{{$vaccine->id}}/save_vaccine" method="POST">
                            <div class="form-group">
                              @csrf
                                <label for="exampleInputEmail1">Вакцины төрөл</label>
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" name = "v_ner" value="{{$vaccine->name}}">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Өндөр (см)</label>
                                <input type="text" name = "undur" class="form-control" id="date"  placeholder="Enter undur">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Жин (кг)</label>
                                <input type="text" name = "jin" class="form-control" id="date"  placeholder="Enter jin">
                              </div>
                              <div class="form-group">
                                <label for="studentGender">Шалтгаан</label>
                                <select class="form-control" id="shaltgan" name="shaltgan">
                                  <option>-- Сонгох --</option>
                                  <option value="sh1">Шалтгаан1</option>
                                  <option value="sh2">Шалтгаан2</option>
                                  <option value="sh3">Шалтгаан3</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Хийлгэсэн огноо</label>
                                <input type="date" name = "hiisen_ognoo" class="form-control" id="date"  placeholder="Enter date">
                              </div>
                              <div class="form-group text-right">
                                <button class="btn btn-primary btn-lg">
                                Хадгалах
                                </button>
                              </div>
                            </form>
      </div>
      
    </div>
  </div>
</div>
@endsection
