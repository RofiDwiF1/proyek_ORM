<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel ORM Relationships</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md p-4">
        <div class="max-w-7xl mx-auto flex justify-between">
            <div class="text-xl font-bold">Laravel ORM Demo</div>
            <div class="space-x-4">
                <a href="{{ route('companies.index') }}" class="hover:text-blue-500">Companies</a>
                <a href="{{ route('employees.index') }}" class="hover:text-blue-500">Employees</a>
                <a href="{{ route('skills.index') }}" class="hover:text-blue-500">Skills</a>
            </div>
        </div>
    </nav>
    
    <main class="py-6">
        @yield('content')
    </main>
    
    <footer class="bg-white p-4 mt-8 shadow-inner">
        <div class="max-w-7xl mx-auto text-center text-gray-500">
            Laravel ORM Relationships Demo &copy; 2025
        </div>
    </footer>
</body>
</html>
