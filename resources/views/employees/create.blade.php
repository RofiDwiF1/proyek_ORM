@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Add Employee</h1>
    
    <form action="{{ route('employees.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 mb-2">Name</label>
            <input type="text" name="name" id="name" class="w-full border rounded px-3 py-2" required>
        </div>
        
        <div class="mb-4">
            <label for="company_id" class="block text-gray-700 mb-2">Company</label>
            <select name="company_id" id="company_id" class="w-full border rounded px-3 py-2" required>
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 mb-2">Skills</label>
            <div class="grid grid-cols-3 gap-2">
                @foreach ($skills as $skill)
                    <div>
                        <input type="checkbox" name="skills[]" id="skill_{{ $skill->id }}" value="{{ $skill->id }}">
                        <label for="skill_{{ $skill->id }}">{{ $skill->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>
        
        <div class="flex items-center">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save Employee</button>
            <a href="{{ route('employees.index') }}" class="ml-4 text-gray-600">Cancel</a>
        </div>
    </form>
</div>
@endsection
