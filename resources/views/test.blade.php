@include('headers')

<h1>Test Blade</h1>

@php
    $name = 'jennifer';
    $fruits = array('Mango','Apple','Banana','Pineapple');
    $age = 18;
@endphp

<h2>{{$name}}</h2>

<h1>Fruits</h1>

@foreach ($fruits as $fruit)
    <ul>
        <li>{{$fruit}}</li>
    </ul>
@endforeach

<br/>

@for ($i = 1; $i <=10; $i++)
    {{$i}} <br/>
@endfor

@if (count($fruits)==1)
    Single fruit
@elseif(count($fruits)>1)
    More than one Fruits
@else
    No Fruit
@endif

{{$age>=18?'You are adult':'You are not adult'}}