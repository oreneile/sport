@extends('dash_main')

@section('content')

<h3> EVENTS</h3>
<table class="table table-hover ">
    <thead>
    <tr>
        <th>#</th>
        <th>Event</th>
        <th>Date</th>
        <th>Venue</th>
        <th>Contact</th>
        <td><a href="/new/event" class="btn btn-success">New</a> </td>

    </tr>
    </thead>
    <tbody class="event-table">
    <?php $events = \App\Event::all();
    ?>
    @if(count($events) > 0 )
    @foreach($events as $event)
    <tr style="color:">
        <td>{{$event->id}}</td>
        <td>{{$event->name}}</td>
        <td>{{$event->date}}</td>
        <td>{{$event->venue}}</td>
        <td>{{$event->contact_name}} - {{$event->contact_email}}</td>
        <td><a href="/delete/event/{{$event->id}}" class="btn btn-danger"> Delete</a> </td>

    </tr>
    @endforeach

    @endif

    </tbody>
</table>


@endsection