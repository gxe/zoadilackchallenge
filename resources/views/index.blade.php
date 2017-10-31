@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Database DB1</h4>
                <ul>
                    @foreach($db1 as $key => $value)
                        <li>{{ $key }}: {{ $value }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Database DB2</h4>
                <ul>
                    @foreach($db2 as $key => $value)
                        <li>{{ $key }}: {{ $value }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <hr>
        <form action="{{ url('/zoadilack/notify') }}" method="POST">
            {{ csrf_field() }}

            <p>Want to send all this connection info to us? Input the email address you wish to send the email from!</p><br>
            <b>A total of {{ $emailCount }} emails have been sent.</b>
            <div class="form-group">
                <label for="address">Email Address</label>
                <input type="text" name="address" class="form-control" placeholder="you@example.net" required>
            </div>
            <button type="submit" class="btn btn-success">Send</button>
            @if($errors->any())
                <div class="clearfix"></div>
                <br>
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('success'))
                <div class="clearfix"></div>
                <br>
                <div class="alert alert-success alert-dismissable">
                    {{ Session::get('success') }}
                </div>
            @endif
        </form>
    </div>
@endsection