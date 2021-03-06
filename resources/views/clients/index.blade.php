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

                    <a href="{{ route('clients.create') }}" class="btn btn-primary mb-3 float-right">Add a Client</a>

                    {{ $clients->links() }}

                    <table class="table table-bordered table-striped table-responsive table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Actions</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address&nbsp;1</th>
                                <th scope="col">Address&nbsp;2</th>
                                <th scope="col">City</th>
                                <th scope="col">State</th>
                                <th scope="col">Postal&nbsp;Code</th>
                                <th scope="col">Country</th>
                            </tr>
                        </thead>

                        @foreach ($clients as $client)
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="dropdown" style="text-align: center;">
                                          <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-lg"></i>
                                          </a>

                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="{{ route('clients.show', $client) }}"><i class="fal fa-eye fa-lg" style="color: dodgerblue;"></i>&nbsp;View</a>
                                            <a class="dropdown-item" href="{{ route('clients.edit', $client) }}"><i class="fal fa-edit fa-lg" style="color: green;"></i>&nbsp;Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ route('clients.destroy', $client) }}"><i class="fal fa-trash-alt fa-lg" style="color: tomato;"></i>&nbsp;Delete</a>
                                          </div>
                                        </div>
                                    </td>
                                    <td><a href="{{ route('clients.show', $client) }}">{{ $client->name }}</a></td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->phone }}</td>
                                    <td>{{ $client->address1 }}</td>
                                    <td>{{ $client->address2 }}</td>
                                    <td>{{ $client->city }}</td>
                                    <td>{{ $client->state }}</td>
                                    <td>{{ $client->postalcode }}</td>
                                    <td>{{ $client->country }}</td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>

                    <a href="{{ route('clients.create') }}" class="btn btn-primary mb-3 float-right">Add a Client</a>

                    {{ $clients->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
