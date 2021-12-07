@extends('templates.master')
@section('header')
<center> <img src="https://cdn.discordapp.com/attachments/752319635491127377/912781079155441694/HARPPY.png" width="300px" /></center>
<hr>
 @stop
@section('contenido')

<table border="2px" class="default">
    <caption>Listado de Recuerdos</caption>
       <tr>
       <th>Id</th>
       <th>Recuerdo</th>
       <th>Fecha</th>
       </tr>
       @foreach($recuerdos as $rec)
       <tr>
       <td>{{$rec->idRec}}</td>
       <td>{{$rec->recuerdo}}</td>
       <td>{{$rec->date}}</td>
       </tr>
       @endforeach
</table>

 @stop


@section('barra')
<br>
<center>
   <form action="{{route('login')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Cerrar Sesión</button>
   </form>
   <br>
   <form action="{{route('list')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Lista de Recuerdos</button>
   </form>
   <br>
   <form action="{{route('who')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">¿Quienes somos?</button>
   </form>
   <br>
   <form action="{{route('menuP')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Volver a ingresar un recuerdo</button>
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