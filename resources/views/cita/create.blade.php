@extends('layout.layouts')

@section('content')
<div class="container">
    <form action="{{route('citas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label  class="form-label">Fecha</label>
          <input type="date" class="form-control" id="fecha_cita" name="fecha_cita">
        </div>
 
        <div class="mb-3">
            <label  class="form-label">Doctor</label>
            <input type="text" class="form-control" id="doctor_id" name="doctor_id">
          </div>

          <div class="mb-3">
            <label  class="form-label">Paciente</label>
            <input type="text" class="form-control" id="paciente_id" name="paciente_id">
          </div>
   
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection