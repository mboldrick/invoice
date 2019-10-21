@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Client List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ $clients->links() }}

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                            </tr>
                        </thead>

                        @foreach ($clients as $client)
                            <tbody>
                                <tr>
                                    <td><a href="/clients/{{ $client->id }}">{{ $client->name }}</a></td>
{{--                                     <td><a href="{{ route('clients.show') }}">{{ $client->name }}</a></td>
 --}}                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->phone }}</td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>

                    {{ $clients->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
