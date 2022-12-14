<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="{{route('pacientes.index')}}" class="nav-link px-2 text-white">Pacientes</a></li>
              <li><a href="{{route('doctores.create')}}" class="nav-link px-2 text-white">Medicos</a></li>

              <li><a href="{{route('citas.create')}}" class="nav-link px-2 text-white">Citas</a></li>
              
    
            </ul>
    
          
    
            <div class="text-end">
              <button type="button" class="btn btn-outline-light me-2">Login</button>
            
            </div>
          </div>
        </div>

      </header>
      <div class="container">
        @yield('content')
    </div>

</body>
</html>