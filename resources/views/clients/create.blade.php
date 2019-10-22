@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add a Client</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form
                            method="POST"
                            action="/clients"
                        >
                            @csrf

                            {{-- @include('clients._form') --}}

                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" required autofocus>
                                <div class="invalid-feedback">
                                    Please enter the client's name.
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="address1">Address Line 1 <span> - optional</span></label>
                                <input type="text" class="form-control" name="address1" id="address1">
                            </div>

                            <div class="form-group mb-3">
                                <label for="address2">Address Line 2 <span> - optional</span></label>
                                <input type="text" class="form-control" name="address2" id="address2">
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="city">City <span> - optional</span></label>
                                    <input type="text" class="form-control" name="city" id="city">
                                </div>

                                <div class="form-group col-md-3 mb-3">
                                    <label for="state">State <span> - optional</span></label>
                                    <input type="text" class="form-control" name="state" id="state">
                                </div>

                                <div class="form-group col-md-3 mb-3">
                                    <label for="postalcode">Postal Code <span> - optional</span></label>
                                    <input type="text" class="form-control" name="postalcode" id="postalcode">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="country">Country <span> - optional</span></label>
                                <input type="text" class="form-control" name="country" id="country">
                            </div>

                            <div class="row">
                                <div class="from-group col-md-8 mb-3">
                                    <label for="email">Email <span> - optional</span></label>
                                    <input type="text" class="form-control" name="email" id="email">
                                </div>

                                <div class="form-group col-md-4 mb-3">
                                    <label for="phone">Phone <span> - optional</span></label>
                                    <input type="text" class="form-control" name="phone" id="phone">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="notes">Notes <span> - optional</span></label>
                                <textarea class="form-control" name="notes" id="notes"></textarea>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Add Client</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
