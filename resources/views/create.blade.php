    @extends('\layouts.main')

    @section('main-section')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5"> <!-- Margin 5-->
            <div class="h2">Agregar Tarea</div>
            <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Volver</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{route("todo.store")}}" method="post">
                    @csrf
                    <label for="" class="form-label mt-4">Nombre</label>
                    <input type="text" name="name" class="form-control" id="">
                    <div class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </div>
                    <label for="" class="form-label mt-4">Descripción</label>
                    <input type="text" name="work" class="form-control" id="">
                    <div class="text-danger">
                        @error('work')
                        {{$message}}
                        @enderror
                    </div>
                    <label for="" class="form-label mt-4">Fecha de Finalización</label>
                    <input type="date" name="duedate" class="form-control" id="">
                    <div class="text-danger">
                        @error('duedate')
                        {{$message}}
                        @enderror
                    </div>
                    <label for="" class="form-label mt-4">Estado</label>
                    <select class="form-control" name="status" id="">
                        <option value="pending">Pendiente</option>
                        <option value="completed">Finalizado</option>
                    </select>
                    <button class="btn btn-primary btn-lg mt-4">Agregar Tarea</button>
                </form>
            </div>
        </div>
    </div>

    @endsection