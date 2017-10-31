<div>
    <b>Database DB1:</b>
    <ul>
        @foreach($db1 as $key => $value)
            <li>{{ $key }}: {{ $value }}</li>
        @endforeach
    </ul>
    <hr>
    <b>Database DB2:</b>
    <ul>
        @foreach($db2 as $key => $value)
            <li>{{ $key }}: {{ $value }}</li>
        @endforeach
    </ul>
</div>