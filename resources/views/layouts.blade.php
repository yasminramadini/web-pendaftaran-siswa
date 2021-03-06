<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>SMP Laravel | Pendaftaran Siswa Baru</title>
  </head>
  <body>
    
    @include('section.navbar', ['pengaturan' => App\Models\Pengaturan::select('nama_sekolah', 'logo', 'tema')->first()])
     
     <div class="container" style="margin: 100px 0;">
       @yield('content')
     </div>
     
     <script src="{{ asset('js/script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src="//cdn.jsdelivr.net/npm/eruda"></script>
    <script>eruda.init();</script>
    
    @include('section.footer', ['pengaturan' => App\Models\Pengaturan::select('nama_sekolah')->first()])
  </body>
</html>