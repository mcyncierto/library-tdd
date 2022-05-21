@extends('layouts.app')

@section('content')
    <div class="w-50 bg-gray-100 mx-auto p-6 shadow">
        <form action="/authors" method="post" class="flex flex-column items-center">
            @csrf
            <p class="font-semibold">Add New Author</p>

            <div class="pt-4">
                <input type="text" name="name" placeholder="Full Name" class="rounded py-2 px-4 w-64">
                @error('name') <p class="text-danger">{{ $message }}</p> @enderror
            </div>
            <div class="pt-4">
                <input type="text" name="dob" placeholder="Date of Birth" class="rounded py-2 px-4 w-64">
                @error('dob') <p class="text-danger">{{ $message }}</p> @enderror
            </div>
            <div class="pt-4">
                <button class="bg-primary text-white rounded py-2 px-4">Add New Author</button>
            </div>
        </form>
    </div>
@endsection