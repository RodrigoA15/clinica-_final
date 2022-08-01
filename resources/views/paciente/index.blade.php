
  @extends('layout.layouts')
 @section('content')
 <div class="container">
  <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nombre paciente</th>
          <th scope="col">Apellido Paciente</th>
          <th scope="col">Tipo documento</th>
          <th scope="col">Telefono Paciente</th>
          <th scope="col">Direccion</th>
          <th scope="col">Acciones</th>


          

        </tr>
      </thead>
      <tbody>
       @foreach ($paciente as $pacientes)
       <tr>
          <th scope="row">{{ $pacientes->id}}</th>

          <td scope="row">{{ $pacientes->nombre_paciente }}</td>
          <td scope="row">{{ $pacientes->apellido_paciente }}</td>
          <td scope="row">{{ $pacientes->tipo_documento}}</td>
          <td scope="row">{{ $pacientes->telefono_paciente }}</td>
          <td scope="row">{{ $pacientes->direccion_paciente }}</td>
          <td>
              <a href="{{route('pacientes.edit', $pacientes)}}" class="btn btn-warning">Editar</a>


              <form action="{{ route('pacientes.destroy', $pacientes)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>

          </td>

          
          <td>
            <a  href="{{route('atencion.index')}}" class="btn btn-primary">Historia Clinica</a>
            </td>
          
        </tr>
        
       @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-center">{{ $paciente->links() }}</div>
</div>
 @endsection