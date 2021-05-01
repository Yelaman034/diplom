<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Хүүхдийн</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  
  
  
  @yield('headers')

  

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('newTemplate/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('newTemplate/assets/css/components.css')}}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      {{View::make('layouts.topNav')}}

      {{View::make('layouts.sideNav')}}

      <!-- Main Content -->
      @yield('content')
      <!-- <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer> -->
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{asset('newTemplate/assets/js/stisla.js')}}"></script>

  
  <!-- EDITfORM -->

  <script>
    $('#edit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var age = button.data('myage') // Extract info from data-* attributes
    var jin = button.data('myjin')
    var undur = button.data('myundur')
    var datas_id = button.data('datasid')
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-body #age').val(age)
    modal.find('.modal-body #jin').val(jin)
    modal.find('.modal-body #undur').val(undur)
    modal.find('.modal-body #datas_id').val(datas_id)
})
$('#delete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var datas_id = button.data('datasid')
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-body #datas_id').val(datas_id)
})
$('#vinfo').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var about = button.data('myabout') // Extract info from data-* attributes
    var side = button.data('myside')
    var dose = button.data('mydose')

    var modal = $(this)
    modal.find('.modal-body #about').val(about)
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    
})
  </script>

  
  

  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <!-- Template JS File -->
  <script src="{{asset('newTemplate/assets/js/scripts.js')}}"></script>
  <script src="{{asset('newTemplate/assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
</body>
</html>
