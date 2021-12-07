@extends('templates.master')
@section('header')
<center> <img src="https://cdn.discordapp.com/attachments/752319635491127377/912781079155441694/HARPPY.png" width="300px" /></center>
<hr>
 @stop
@section('contenido')
¿QUIENES SOMOS?
<br>Somos un grupo de estudiantes de nivel medio superior del plantel CBTis 122 cursando la carrera de programación, este es un prototipo de página web....</h1>

 @stop


@section('barra')
<br>
<center>
   <form action="{{route('login')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Atras
   
   </button>
   </form>
   <br>
   
</center>
   
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