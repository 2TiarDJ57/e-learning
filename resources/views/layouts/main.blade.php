<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Learning UMJ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
    {{-- End My CSS --}}

    {{-- Trix Editor --}}
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/trix.css') }}">
      <script type="text/javascript" src="/js/trix.js"></script>
    {{-- End Trix Editor --}}

    {{-- Date Picker --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
    </script>
    {{-- End Date Picker --}}


  </head>
  <body>
      
      @include('header.navbar')
      
      

      <div class="container">
        <div class="row">
          <div class="col-md-4">
            @include('partials.navigator')
            @include('partials.datepicker')
            <hr>
            @include('partials.helpus')
          </div>
          <div class="col-md-8">
            <div class="shadow p-3 mb-5 bg-body-tertiary rounded my-3">
              @include('partials.carousel')
            </div>
            
            <div class="input-group mb-3">
              <input type="text" class="form-control border-primary" placeholder="Cari Fakultas, Prodi, Matakuliah" aria-label="Recipient's username" aria-describedby="button-addon2" autofocus>
              <button class="btn btn-outline-primary" type="button" id="button-addon2">Search</button>
            </div>

            <div class="shadow content p-3 mb-5 bg-body-tertiary rounded my-3">
              @yield('content')
            </div>
          </div>
        </div>
       
      </div>
      
      
      @include('footer.footer')
      
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>