<h1>For loop</h1>
@for ($i=1; $i<=10; $i++)
    {{ $i.' ' }}
@endfor

<br/>

<h1>While Loop</h1>
@php
$i=40; //raw data pass by laravel blade
@endphp

@while ($i<=50)
    {{ $i.' ' }}
    @php
     $i++;
    @endphp
@endwhile

<h1>Foreach Loop</h1>
@php
    $interns = ['BALAJI','SHEIK DAWOODU','PRASHANTH GUNASHEELAN', 'HARI KRISHNAN','KATHIR PANNEERSELVAM','JOEAL CHRISH','GARUNYA'];
@endphp

@foreach ($interns as $interns)
    INTERN : {{ $interns }} <br/>
@endforeach

<h1>Forelse Loop</h1>
@php
$i = [1,2,3,4,5,6,7,8,9];
//$i=[];
@endphp

@forelse ($i as $item)
    ITEM : {{ $item }} <br/>
@empty
    ITEM BUCKET IS EMPTY
@endforelse
