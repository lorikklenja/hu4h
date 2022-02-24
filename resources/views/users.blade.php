@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="flex justify-center">
            <div class="w-12/12 bg-white p-6 rounded-lg">
                <h3 class="text-green-600">You have succesfully completed the task</h1>
                    <p>Firstname: {{ $param['firstname'] }}</p>
                    <p>Lastname: {{ $param['lastname'] }}</p>
                    <p>Email: {{ $param['email'] }}</p>
                    <p>Phone: {{ $param['phone'] }}</p>
                    <p>Image:</p><img src="{{ asset('storage/' . $image_url) }}" style="max-width: 50%" alt="">
            </div>
        </div>
    </div>
@endsection
