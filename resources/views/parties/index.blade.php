<h1>Parties</h1>

@foreach($parties as $party)
    <div>
        <h3>{{ $party->title }}</h3>
        <p>{{ $party->location }}</p>
        <p>{{ $party->date_time }}</p>
    </div>
@endforeach