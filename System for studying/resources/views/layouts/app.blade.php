<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <!-- Add your stylesheets here -->
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav>
            <!-- Add your header links here -->
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/courses') }}">Courses</a></li>
            </ul>
        

            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ route('admin.dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin</a>
                            @if (Route::has('logout'))
                                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
                                        Logout
                                    </button>
                                </form>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                
            </div>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; {{ date('Y') }} My Laravel App. All rights reserved.</p>
    </footer>

    <!-- Add your scripts here -->
</body>
</html>
