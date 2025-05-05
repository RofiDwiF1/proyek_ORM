@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Skill</h1>
    
    <form action="{{ route('skills.update', $skill->id) }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700 mb-2">Name</label>
            <input type="text" name="name" id="name" value="{{ $skill->name }}" class="w-full border rounded px-3 py-2" required>
        </div>
        
        <div class="flex items-center">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Skill</button>
            <a href="{{ route('skills.index') }}" class="ml-4 text-gray-600">Cancel</a>
        </div>
    </form>
</div>
@endsection
