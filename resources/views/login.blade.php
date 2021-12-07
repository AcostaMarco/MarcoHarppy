@extends('templates.master')
@section('header')
<center> <img src="https://cdn.discordapp.com/attachments/752319635491127377/912781079155441694/HARPPY.png" width="300px" /></center>
<hr>
 @stop
@section('contenido')
<form action="{{route('sesion')}}" method="POST">
    {{csrf_field()}}
    <div class="ab-3">
       <label for="inuser" class="form-label">Usuario</label>
       <input type="text" class="form-control" name="inuser" id="inuser">
    </div>
    <div class="ab-3">
       <label for="inpass" class="form-label">Contraseña</label>
       <input type="password" class="form-control" name="inpass" id="inpass">
    </div>
       <center><button type="submit" class="btn btn-outline-dark">Iniciar sesión</button></center>
    </form>
 @stop
@section('barra')
<br>
<center>
   <br>
   <form action="{{route('whoC')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">¿Quienes somos?</button>
   </form>
</center>
<br>
  

@stop
 
 @section('footer')
 <br>
 <center>
 <hr>
     <img src="https://cdn.discordapp.com/attachments/752319635491127377/912781079155441694/HARPPY.png" width="200px" />
 <br>
 ©️ 2021 by Rito Cortez, Marco Acosta, Diego Jimenez, Víctor Hernández
 </center>
 @stop