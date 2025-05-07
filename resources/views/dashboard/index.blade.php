@extends('layouts.app')

@section('content')
<div class="dashboard-container px-4 py-6">

    <!-- Dashboard Header -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mb-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Company Dashboard</h1>
                <p class="text-gray-600 dark:text-gray-300 mt-1">Overview of your organization's performance and statistics</p>
            </div>
            <div class="mt-4 md:mt-0">
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-500 dark:text-gray-400">
                        Last updated: {{ date('d M Y, h:i A') }}
                    </span>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                        Refresh
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Key Metrics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">

        <!-- Total Employees -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 dark:bg-blue-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500 dark:text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m0-4a4 4 0 100-8 4 4 0 000 8zm6 4a4 4 0 100-8 4 4 0 000 8z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Total Employees</p>
                    <p class="text-xl font-semibold text-gray-800 dark:text-white">{{ $totalEmployees ?? 0 }}</p>
                    <p class="text-sm text-green-500">+12% from last month</p>
                </div>
            </div>
        </div>

        <!-- Companies -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 dark:bg-purple-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-500 dark:text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10c0 .55.45 1 1 1h3v-4h8v4h3c.55 0 1-.45 1-1V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Companies</p>
                    <p class="text-xl font-semibold text-gray-800 dark:text-white">{{ $companiesCount ?? 0 }}</p>
                    <p class="text-sm text-blue-500">Stable</p>
                </div>
            </div>
        </div>

        <!-- Total Skills -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 dark:bg-yellow-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500 dark:text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Total Skills</p>
                    <p class="text-xl font-semibold text-gray-800 dark:text-white">{{ $skillsCount ?? 0 }}</p>
                    <p class="text-sm text-green-500">+5% new skills added</p>
                </div>
            </div>
        </div>

        <!-- Avg. Employees/Company -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 dark:bg-green-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 dark:text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.11 0-2 .89-2 2v1H9v4h1v1c0 1.11.89 2 2 2s2-.89 2-2v-1h1v-4h-1v-1c0-1.11-.89-2-2-2z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Avg. Employees/Company</p>
                    <p class="text-xl font-semibold text-gray-800 dark:text-white">{{ $avgEmployeesPerCompany ?? 0 }}</p>
                    <p class="text-sm text-green-500">+0.5 increase</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">

        <!-- Employee Distribution -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 lg:col-span-2">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Employee Distribution by Company</h2>
            <div class="h-80 w-full">
                <canvas id="employeeDistributionChart" width="400" height="200"></canvas>
            </div>
        </div>

        <!-- Top Skills -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Top Skills</h2>
            <div class="h-80 w-full">
                <canvas id="skillsDistributionChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>

    <!-- Recent Activities -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 lg:col-span-2">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Recent Activities</h2>
                <a href="#" class="text-blue-500 hover:text-blue-600 text-sm">View All</a>
            </div>
            <div class="space-y-4">
                @if(isset($recentActivities) && count($recentActivities) > 0)
                    @foreach($recentActivities as $activity)
                        <div class="flex items-start">
                            <div class="bg-blue-100 dark:bg-blue-900 p-2 rounded-full mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 dark:text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-800 dark:text-white font-medium">{{ $activity->title }}</p>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">{{ $activity->description }}</p>
                                <p class="text-gray-400 dark:text-gray-500 text-xs mt-1">{{ $activity->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-gray-500 dark:text-gray-400 text-sm">No recent activities available.</p>
                @endif
            </div>
        </div>
    </div>

</div>
@endsection
