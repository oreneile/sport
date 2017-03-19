@extends('dash_main')

@section('content')

<br>
<br>

<form action="/dashboard/about/store" method="post">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">


    <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea class="form-control" rows="5" id="comment" placeholder="Enter your website summary here" name="about" required></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>@endsection