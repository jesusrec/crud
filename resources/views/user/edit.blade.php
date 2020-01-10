@include('user.in')
<div class="container flex-center">
<form  action="{{url('/user/'.$usuario->id)}}" method="post" ectype="multipart/form-data">
{{csrf_field()}}
{{method_field('PUT')}}

<label for="nombre">{{'Nombre'}}</label>
<input type="text" name="nombre" id="nombre" placeholder="" value="{{ $usuario->nombre}}">
<br>
<label for="aPaterno">{{'Apellido Paterno'}}</label>
<input type="text" name="aPaterno" id="aPaterno" placeholder="" value="{{ $usuario->aPaterno }}">
<br>
<label for="aMaterno">{{'Apellido Materno'}}</label>
<input type="text" name="aMaterno" id="aMaterno" placeholder="" value="{{ $usuario->aMaterno }}">
<br>
<label for="edad">{{'Edad'}}</label>
<input type="text" name="edad" id="edad" placeholder="" value="{{ $usuario->edad }}">
<br>
<label for="calle">{{'Calle'}}</label>
<input type="text" name="calle" id="calle" placeholder="" value="{{ $usuario->calle }}">
<br>
<label for="colonia">{{'Colonia'}}</label>
<input type="text" name="colonia" id="colonia" placeholder="" value="{{ $usuario->colonia }}">
<br>
<label for="delegacion">{{'Delegación'}}</label>
<input type="text" name="delegacion" id="delegacion" placeholder="" value="{{ $usuario->delegacion }}">
<br>
<label for="numero">{{'Numero'}}</label>
<input type="text" name="numero" id="numero" placeholder="" value="{{ $usuario->numero }}">
<br>
<input type="submit" value="Editar">
</form>
</div>
