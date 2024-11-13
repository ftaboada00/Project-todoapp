@extends('\layouts.main')

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">Actualizar Tarea</div>
        <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Volver</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{route("todo.updateData")}}" method="post">
                @csrf
                <label for="" class="form-label mt-4">Nombre</label>
                <input type="text" name="name" class="form-control" id="" value="{{$todo->name}}">
                <label for="" class="form-label mt-4">Descripción</label>
                <input type="text" name="work" class="form-control" id="" value="{{$todo->work}}">
                <label for="" class="form-label mt-4">Fecha de Finalización</label>
                <input type="date" name="duedate" class="form-control" id="" value="{{$todo->duedate}}">
                <input type="number" name="id" value="{{$todo->id}}" hidden>
                <label for="" class="form-label mt-4">Estado</label>
                <select class="form-control" id="" name="status">
                    <option value="pending" @if ($todo->status == 'pending') selected @endif>Pending</option>
                    <option value="completed" @if ($todo->status == 'completed') selected @endif>Completed</option>
                </select>
                <button class="btn btn-primary btn-lg mt-4">Actualizar Tarea</button>
            </form>
        </div>
    </div>
</div>

@endsection