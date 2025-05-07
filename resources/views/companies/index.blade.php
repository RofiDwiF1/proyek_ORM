@extends('layouts.app')

@section('content')
@php
    $company = $companies->first();
    $employeeCount = $company->employees->count();
    $skillCount = $company->employees->flatMap->skills->pluck('name')->unique()->count();
@endphp

<div class="max-w-6xl mx-auto px-6 py-8">
    <div class="bg-white rounded-xl shadow p-6 mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $company->name }}</h1>
        <p class="text-gray-600 mb-1">🏢 <strong>Company Overview</strong></p>
        <div class="flex space-x-6 mt-4">
            <div class="bg-blue-100 text-blue-800 px-4 py-2 rounded-lg shadow">
                <p class="text-sm">Total Employees</p>
                <p class="text-xl font-semibold">{{ $employeeCount }}</p>
            </div>
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded-lg shadow">
                <p class="text-sm">Unique Skills</p>
                <p class="text-xl font-semibold">{{ $skillCount }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">👨‍💼 Employees & Skills</h2>
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-3 text-left">No</th>
                    <th class="px-4 py-3 text-left">Name</th>
                    <th class="px-4 py-3 text-left">Skills</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($company->employees as $employee)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3 font-medium text-gray-900">{{ $employee->name }}</td>
                    <td class="px-4 py-3 text-gray-700">
                        @if ($employee->skills->isEmpty())
                            <span class="text-gray-400 italic">No skills</span>
                        @else
                            <ul class="list-disc list-inside space-y-1">
                                @foreach ($employee->skills as $skill)
                                    <li>{{ $skill->name }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
    <!-- Footer only for Companies page -->
    <footer class="bg-white dark:bg-gray-800 p-6 mt-8 shadow-inner rounded-t-lg w-full" >
        <div class="max-w-7xl mx-auto text-center text-gray-500 dark:text-gray-400">
            <p>Laravel ORM Relationships Demo &copy; 2025</p>
            <p class="mt-2">Made with 💙 by ORMAS Team</p>
        </div>
    </footer>
@endsection
