@include('user.in')
<div class="container flex-center">
<form  action="{{url('/user')}}" method="post" ectype="multipart/form-data">
{{csrf_field()}}

<label for="nombre">{{'Nombre'}}</label>
<input type="text" name="nombre" id="nombre" placeholder="" value="">
<br>
<label for="aPaterno">{{'Apellido Paterno'}}</label>
<input type="text" name="aPaterno" id="aPaterno" placeholder="" value="">
<br>
<label for="aMaterno">{{'Apellido Materno'}}</label>
<input type="text" name="aMaterno" id="aMaterno" placeholder="" value="">
<br>
<label for="edad">{{'Edad'}}</label>
<input type="text" name="edad" id="edad" placeholder="" value="">
<br>
<label for="calle">{{'Calle'}}</label>
<input type="text" name="calle" id="calle" placeholder="" value="">
<br>
<label for="colonia">{{'Colonia'}}</label>
<input type="text" name="colonia" id="colonia" placeholder="" value="">
<br>
<label for="delegacion">{{'Delegación'}}</label>
<input type="text" name="delegacion" id="delegacion" placeholder="" value="">
<br>
<label for="numero">{{'Numero'}}</label>
<input type="text" name="numero" id="numero" placeholder="" value="">
<br>
<input type="submit" value="Agregar">
</form>
</div>
