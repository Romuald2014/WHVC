@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MY DETAILS</div>

                <div class="card-body">
                        <table class="table">
                            <tbody>
                            <tr><td>MEMBERSHIP PLAN:</td><th>{{ $member->membership->type }}</th> </tr>
                            <tr><td>SESSION FEE:</td><th>{{ $member->membership->each_payment }}</th> </tr>
                            <tr><td>POSITION</td><th>{{ $member->position }}</th> </tr>
                            <tr><td>ACTIVITY</td><th>{{ $member->activity }}</th> </tr>
                            <tr><td>STATUS</td><th>{{ $member->status }}</th> </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MY TEAM: <strong>{{ $member->team->title }}</strong></div>
                <div class="card-body">
                        <table class="table">
                            <tbody>
                                @foreach ($team->member->sortBy('first_name') as $object)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $object->first_name }} {{ $object->last_name }}</td>
                                        <td>{{ $object->position }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">UPCOMING EVENTS: </strong></div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                        @foreach ($event as $object)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $object->title }}</td>
                                <td>{{ $object->type }}</td>
                                <td>{{ $object->start }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
