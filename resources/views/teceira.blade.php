 @extends('teste')
 
 @section('sidebar')
    @parent
 @endsection
 
 @section('content')
   @if($id <= 10)
    @for($i = 0; $i<$id; $i++)
     <p>Você digitou {{$id}} isso é menor que 10</p>
    @endfor
   @elseif($id > 10)
    @for($i = 0; $i<$id; $i++)
     <p>Você digitou {{$id}} isso é maior que 10</p>
    @endfor
   @else
     <p></p>
   @endif
 @endsection
 