@extends('layout')

@section('title', 'Home')



@section('content')
    

<div class="row pt-10 ">  
@foreach($user as $user)
      @foreach($user->posts as $post)  

          <div class="col-4 " style="padding: 100px ;">
          <!-- {{$post->title }}
          {{$post->description }} -->
          <img src="/storage/{{$post->image}}">
          </div>
          
     @endforeach

@endforeach
</div>

@endsection
