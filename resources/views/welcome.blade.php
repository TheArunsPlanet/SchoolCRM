<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to {{ config('app.name', 'School CRM') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Welcome to School CRM</h1>
        <p class="text-lg text-gray-600 mb-8">Manage your school's activities efficiently with our comprehensive solution.</p>
        
        <div class="space-x-4">
            @auth
                <a href="{{ url('/dashboard') }}" 
                   class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md transition-colors">
                    Go to Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" 
                   class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md transition-colors">
                    Log in
                </a>
                
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" 
                       class="bg-white hover:bg-gray-50 text-gray-700 font-medium py-2 px-6 border border-gray-300 rounded-md transition-colors">
                        Register
                    </a>
                @endif
            @endauth
        </div>
    </div>
</body>
</html>
