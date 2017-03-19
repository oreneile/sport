@extends('main')

@section('banner')
<br>
<br>
<br>
<br>
<style>
    .about-text{
        background-image: url("/images/banner.jpg");
    }
</style>
<div class="about-text" >

       <h2 style="text-align: center;color: orangered" >About SMU sport</h2>
        <br>
        @if(count(\App\About::all()) > 0)
         <h4 style="color: whitesmoke">{{(\App\About::find(1))->text}}</h4>
         @endif
</div>

@endsection