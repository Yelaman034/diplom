@extends('layouts.master')

@section("content")
<div class="main-content">
        <section class="section">
        <!-- header -->
          <div class="section-header">
            <h1>Вакцинууд</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/children">Хүүхэд</a></div>
              <div class="breadcrumb-item">Вакцинууд</div>
            </div>
          </div>
        <!-- section -->
          <div class="section-body">
          <div class="row">
              <!-- card -->
              @foreach($vaccines as $item)
              <div class="col-12 col-sm-6 col-lg-6">
              <div class="card">
                  <div class="card-header">
                    <h4>{{$item->name}}</h4>
                  </div>
                  <div class="card-body">
                    {{$item->dose}} 
                    <div class="text-right">
                    <a href="/vaccine/{{$item->id}}" class="btn btn-primary ">Дэлгэрэнгүйг харах</a>
                    </div>
                  </div>
                </div>
                </div>
                <!-- card -->
                @endforeach
            </div>
        </div>
            <!-- section -->
        </section>
      </div>

 
@endsection
