@extends('dash_main')

@section('content')
<br>
<br>
<br>
<br>
<form class="form-horizontal" method="post" action="/new/event/store">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Event name:</label>
        <div class="col-sm-10">
            <input type="event" class="form-control" id="email" placeholder="Enter event" name="name" value="{{isset($event) ? $event->name : ''}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="date">Date:</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="date" name="date" placeholder="Enter event date" value="{{isset($event) ? $event->date : ''}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="date">Venue:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="venue" name="venue" placeholder="Enter venue" value="{{isset($event) ? $event->venue : ''}}">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="date">Contact person:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Enter contact person's name" value="{{isset($event) ? $event->contact_name : ''}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="date">Contact email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="contact_email" name="contact_email"  placeholder="" value="{{isset($event) ? $event->contact_email : ''}}">
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>


@endsection