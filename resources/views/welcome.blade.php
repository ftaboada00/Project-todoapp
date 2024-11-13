@extends('\layouts.main') 

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5"> 
        <div class="h2">Tareas</div>
        <a href="{{route("todo.create")}}" class="btn btn-primary btn-lg">Agregar Tarea</a>
    </div>
   


 <table class="table table-stripped table-dark">
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Fecha de Vencimiento</th>
            <th>Acción</th>
        </tr>
        @foreach($todos as $todo)
            <tr>
                <td>{{$todo->name}}</td>
                <td>{{$todo->work}}</td>
                <td>{{$todo->duedate}}</td>
                <td>
                    <a href="{{route("todo.edit",$todo->id)}}" class="btn btn-
                     success btn-sm">Actualizar</a>
                    <a href="{{route("todo.delete",$todo->id)}}" class="btn 
                     btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>
        @endforeach        
    </table>
</div>

@endsection