@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Skills</h1>
    <a href="{{ route('skills.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Skill</a>

    <div class="mt-4">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 text-left">No</th>
                    <th class="py-2 px-4 text-left">Name</th>
                    <th class="py-2 px-4 text-left">Employees</th>
                    <th class="py-2 px-4 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                <tr>
                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="border px-4 py-2">{{ $skill->name }}</td>
                    <td class="border px-4 py-2">
                        @foreach ($skill->employees as $employee)
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs mr-1">
                                {{ $employee->name }}
                            </span>
                        @endforeach
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('skills.edit', $skill->id) }}" class="text-indigo-600">Edit</a> | 
                        <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
