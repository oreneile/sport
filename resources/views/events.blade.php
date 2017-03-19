@extends('main')

@section('banner')

<br>
<br>
<br>
<br>
<style>
    .event-table{
        background-image: url("/images/banner.jpg");
    }
</style>
<table class="table table-hover ">
    <thead>
    <tr>
        <th>#</th>
        <th>Event</th>
        <th>Date</th>
        <th>Venue</th>
        <th>Contact</th>

    </tr>
    </thead>
    <tbody class="event-table">
        <?php $events = \App\Event::all();
        ?>
    @if(count($events) > 0 )
       @foreach($events as $event)
        <tr style="color: white">
            <td>{{$event->id}}</td>
            <td>{{$event->name}}</td>
            <td>{{$event->date}}</td>
            <td>{{$event->venue}}</td>
            <td>{{$event->contact_name}} - {{$event->contact_email}}</td>

        </tr>
       @endforeach

    @endif

    </tbody>
</table>



@endsection