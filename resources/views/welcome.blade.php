@extends('layouts.app')
    @section('content')
        {{-- FORM --}}
        <div class="flex justify-center">
            <div class="w-4/12 bg-white p-6 rounded-lg">
                <form action="{{ route('formupload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="sr-only">First Name</label>
                        <input type="text" name="firstname" id="firstname" placeholder="First Name" class="bg-gray-100 border-1 w-full p-4 rounded-lg @error('firstname') border-red-500 @enderror" value="{{ old('firstname') }}">
    
                        @error('firstname')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="lastname" class="sr-only">Last Name</label>
                        <input type="text" name="lastname" id="lastname" placeholder="Last Name" class="bg-gray-100 border-1 w-full p-4 rounded-lg @error('lastname') border-red-500 @enderror" value="{{ old('lastname') }}">
    
                        @error('lastname')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" name="email" id="email" placeholder="E-mail" class="bg-gray-100 border-1 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
    
                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="phone" class="sr-only">Phone number</label>
                        <input type="text" name="phone" id="phone" placeholder="Phone number" class="bg-gray-100 border-1 w-full p-4 rounded-lg @error('phone') border-red-500 @enderror" value="{{ old('phone') }}">
    
                        @error('phone')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    

                    <div class="mb-3">
                        <label for="image" class="sr-only">Image</label>
                        <input type="file" name="image" class="form-control">    
                        @error('image')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
