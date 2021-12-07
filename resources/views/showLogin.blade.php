@extends('templates.master')
@section('header')
<center> <img src="https://cdn.discordapp.com/attachments/752319635491127377/912781079155441694/HARPPY.png" width="300px" /></center>
<hr>
 @stop
@section('contenido')
    </div>

    

      <h2><em>{{$msg}}</em></h2>
    </div>
 @stop
@section('barra')
<br>
<center>
   <br>
   <form action="{{route('whoB')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">¿Quienes somos?</button>
   </form>
   <br>
   <form action="{{route('login')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Atras</button>
   </form>
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