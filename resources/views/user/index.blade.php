@include('user.in')
<a href="{{ url('user/create')}}" class="btn btn-primary">Agregar usuario</a>
<div class="container flex-center">
<table class="table table-light">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>A. paterno</th>
            <th>A. materno</th>
            <th>Edad</th>
            <th>Calle</th>
            <th>Colonia</th>
            <th>Delegación</th>
            <th>Número</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
           <td><p>{{$loop->iteration}}</p></td>
           <td><p>{{ $usuario->nombre}}</p></td>
           <td>{{ $usuario->aPaterno}}</td>
           <td>{{ $usuario->aMaterno}}</td>
           <td>{{ $usuario->edad}}</td>
           <td>{{ $usuario->calle}}</td>
           <td>{{ $usuario->colonia}}</td>
           <td>{{ $usuario->delegacion}}</td>
           <td>{{ $usuario->numero}}</td>
           <td>
           <a href="{{ url('/user/'.$usuario->id.'/edit') }}" class="btn btn-success">
            EDITAR
            </a>
           <form action="{{ url('/user/'. $usuario->id)}}" method="post">
                {{csrf_field()}}
                {{ method_field('DELETE')}}
                <button type="submit" onclick="return confirm('¿Borrar?');" class="btn btn-warning">Borrar</button>
            </form>
           </td>
           
        </tr>
        @endforeach
    </tbody>
</table>

</div>