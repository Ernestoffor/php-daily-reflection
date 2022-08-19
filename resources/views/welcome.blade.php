@extends('layout')

@section('title', 'Home')

<div class="d-flex justify-content-between align-items-baseline" >
<!-- @section('date') -->
@section('content')
    <div style=" text-align:right; padding-top: 20px; padding-right: 20px">
        <p>
        {{date('l') . ", ". date('F j, Y')}}     
         
        </p>
    </div>



<div style="padding: 10px 5px 5px 50px">
        <div style="padding: 10px 5px 5px 50px;">
          <h2 style=" text-align:center">This is the home Page. </h2>
        </div>
    </div>

    <div  style="display: flex; justify-content: center;">
        <img src="/assets/church1.jpeg" style="padding: 5px 50px 5px 50px ; height:300px; 
                width: 500px ">
    </div>
           
@endsection
</div>