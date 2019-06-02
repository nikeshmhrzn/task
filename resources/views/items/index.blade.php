@extends('layouts.app')
@section('content')

<div class="container">
    <h3><a href ="{{url('items/create')}}">Create Items</a></h3>


<table border="1" class="table table-striped" >

<thead  style="background-color:grey; font-size:18px;">
<tr>
    <th>id</th>
    <th>Name</th>
    <th>Brand</th>
    <th>RAM</th>
    <th>CPU</th>
    <th>Size</th>
    <th>Color</th>
</tr>
</thead>


<tbody style="font-size:18px;">
    @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}} </td>
            <td>{{$item->brand}} </td>
            <td>{{$item->ram}} </td>
            <td>{{$item->cpu}} </td>
            <td>{{$item->size}} </td>
            <td>{{$item->color}} </td>


</tr>

   @endforeach

</table>
</div>
@endsection
