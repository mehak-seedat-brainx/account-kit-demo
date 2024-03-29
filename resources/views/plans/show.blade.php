@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="">
                    <p>You will be charged ${{ number_format($plan->cost, 2) }} for {{ $plan->name }} Plan</p>
                </div>
                <div class="card">
                    <form action="/subscription" method="post" id="payment-form">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="card-header">
                                <label for="card-element">
                                    Enter your credit card information
                                </label>
                            </div>
                            <div class="card-body">
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>
                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                                <input type="hidden" name="plan" value="{{ $plan->id }}" />
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-dark" type="submit">Pay</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
