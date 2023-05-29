        @extends('layouts.main')

        @section ('title','HDC Events')

        @section('content')
        <h1>Algum título</h1>
        <img src="/img/banner.jpg" alt="Imagem do Banner">
        @if(10>15)
         <p>A condicao true</p>
        @endif



        @if($nome2 ==='Pedro')
         <p>O nome é Pedro</p>
        @elseif ($nome2 ==='Matheus')
        <p> O nome é {{$nome2}} e ele tem {{$idade}} anos, e trabalha com {{$profissao}} </p>
        @else
         <p>O nome não é Matheus</p>
        @endif

        @for($i=0;$i < count($arr);$i++)
         <p>{{$arr[$i]}} - {{$i}} </p>
         @if($i == 2)
         <p>O i é 2</p>
         @endif
        @endfor

        @php
          $name= "João";
          echo $name;
        @endphp

        {{-- Este é um comentário --}}

        @endsection
