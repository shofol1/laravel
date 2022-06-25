<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Multy</h1>


 
 @if($result%2==0)
<h1> {{"even "}}</h1>
 @else
    <h1>{{"odd"}}</h1>
 @endif

 @switch($result)
   @case(24)
  <h3> {{"twenty four"}}</h3>
  @break
   @case(25)
  <h3> {{"twenty five"}}</h3>
  @break
  @default
  <h3>{{"not found"}}</h3>
  @break
 @endswitch


<!-- @if(count($data)>0)
@foreach($data as $value)
 <h3 style="background:red">{{$value}}</h3>
@endforeach
@else
{{"no data found"}}
@endif -->


@forelse($data as $key=> $value)
<h3 {{ $loop -> first? "style=background:green;" : "style=background:red;"}}> {{$value}}</h3>
@empty
<strong>


    
{{"no data found"}}

</strong>
@endforelse


</body>
</html>