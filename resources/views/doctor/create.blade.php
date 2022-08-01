@extends('layout.layouts')

@section('content')
<div class="container">
    <form action="{{route('doctores.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label  class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre_doctor" name="nombre_doctor">
        </div>
        <div class="mb-3">
            <label  class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido_doctor" name="apellido_doctor">
          </div> 
          <div class="mb-3">
            <label  class="form-label">Tipo Documento</label>
            <input type="text" class="form-control" id="tipo_documento" name="tipo_documento">
          </div> 
          <div class="mb-3">
            <label  class="form-label">Telefono Paciente</label>
            <input type="text" class="form-control" id="telefono_doctor" name="telefono_doctor">
          </div>
          <div class="mb-3">
            <label  class="form-label">Direccion Paciente</label>
            <input type="text" class="form-control" id="direccion_doctor" name="direccion_doctor">
          </div>
          <div class="mb-3">
            <label  class="form-label">Especialidad</label>
            <input type="text" class="form-control" id="especialidad" name="especialidad">
          </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection