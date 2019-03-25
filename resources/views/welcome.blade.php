@extends('layouts.app')

@section('content')
    <input value="+92" id="country_code" />
    <input placeholder="phone number" id="phone_number" value="3214290886"/>
    <input type="hidden" id="state" value="{{csrf_token()}}" />
    <button onclick="smsLogin();">Login via SMS</button>
    <div>OR</div>
    <input placeholder="email" id="email"/>
    <button onclick="emailLogin();">Login via Email</button>
@endsection
