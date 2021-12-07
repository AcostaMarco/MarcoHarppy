@extends('templates.master')

@section('barra')
<br>
<center>
   <form action="{{route('login')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Cerrar Sesión</button>
   </form>
   <br>
   <form action="{{route('random')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Recuerdo Aleatorio</button>
   </form>
   <br>
   <form action="{{route('list')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Lista de Recuerdos</button>
   </form>
   <br>
   <form action="{{route('who')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">¿Quienes somos?</button>
   </form>
</center>
   
@stop

@section('header')
<center> <img src="https://cdn.discordapp.com/attachments/752319635491127377/912781079155441694/HARPPY.png" width="300px" /></center>
<hr>
 @stop

 @section('nav')
 <img src="https://media.discordapp.net/attachments/779519197847748660/915815757198295060/export202112012050511620.png?width=412&height=585" width="300px" />
 

 </font>
 @stop


 @section('content')


   <form action="{{route('showRec')}}" method="POST">
    {{csrf_field()}}
    <div class="ab-3">
       <label for="inrec" class="form-label">Recuerdo</label>
       <input type="text" class="form-control" name="inrec" placeholder="Ingresa un recuerdo feliz" id="inrec" required>
    </div>
       <label for="indate" class="form-label">Fecha</label>
       <input type="date" class="form-control" name="indate" id="indate" required>
       <center><button type="submit" class="btn btn-outline-dark">Enviar</button></center>
    </form>
    

</font>

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