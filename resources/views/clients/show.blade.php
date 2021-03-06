@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url()->previous() }}" class="btn btn-primary float-right">Back to List</a>
                    Client Details
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form>
                        <div class="form-group mb-3">
                            <label for="Name">Name</label>
                            <input type="text" readonly class="form-control" id="Name" value="{{ $client->name }}">
                            <div class="invalid-feedback">
                                Please enter the client's name.
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Address1">Address1</label>
                            <input type="text" readonly class="form-control" id="Address1" value="{{ $client->address1 }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Address2">Address2</label>
                            <input type="text" readonly class="form-control" id="Address2" value="{{ $client->address2 }}">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label for="City">City</label>
                                <input type="text" readonly class="form-control" id="City" value="{{ $client->city }}">
                            </div>
                            <div class="form-group col-md-3 mb-3">
                                <label for="State">State</label>
                                <input type="text" readonly class="form-control" id="State" value="{{ $client->state }}">
                            </div>
                            <div class="form-group col-md-3 mb-3">
                                <label for="PostalCode">PostalCode</label>
                                <input type="text" readonly class="form-control" id="PostalCode" value="{{ $client->postalcode }}">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Country">Country</label>
                            <input type="text" readonly class="form-control" id="Country" value="{{ $client->country }}">
                        </div>
                        <div class="row">
                            <div class="from-group col-md-8 mb-3">
                                <label for="Email">Email</label>
                                <input type="text" readonly class="form-control" id="Email" value="{{ $client->email }}">
                            </div>
                            <div class="form-group col-md-4 mb-3">
                                <label for="Phone">Phone</label>
                                <input type="text" readonly class="form-control" id="Phone" value="{{ $client->phone }}">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Notes">Notes</label>
                            <textarea readonly class="form-control" id="Notes">{{ $client->notes }}</textarea>
                        </div>
                    </form>

                    <a href="{{ url()->previous() }}" class="btn btn-primary float-right">Back to List</a>
{{--                     <a href="{{ URL::to('/clients/{{ $client->id }}' . $next ) }}">Next</a>
 --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
