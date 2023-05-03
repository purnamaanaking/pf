<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel Routing</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container m-5">
        <h1>Belajar Laravel Routing</h1>

        <div class="list-group mt-4">
            <a href="{{ url('/bootstrap_clone') }}" target="_blank" class="list-group-item list-group-item-action">
                Tugas (Bootstrap Clone)
            </a>
        </div>

        <div class="list-group list-group-numbered mt-4">
            <a href="{{ url('/basic_routing') }}" class="list-group-item list-group-item-action">
                Basic Routing (No View, No Controller)
            </a>
            <a href="{{ url('/view_route') }}" class="list-group-item list-group-item-action">
                View Route
            </a>
            <a href="{{ url('/controller_route') }}" class="list-group-item list-group-item-action">
                Controller Route
            </a>
            <a href="{{ url('/') }}" class="list-group-item list-group-item-action">
                Redirect Route
            </a>
            <a href="{{ url('/user/12345') }}" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 1
            </a>
            <a href="{{ url('/posts/01/comments/20') }}" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 2
            </a>
            <a href="{{ url('/username') }}" class="list-group-item list-group-item-action">
                Route Parameter (Optional Parameter)
            </a>
            <a href="{{ url('/title/this-is-my-title') }}" class="list-group-item list-group-item-action">
                Route With Regular Expression Constraints
            </a>
            <a href="{{ route('profileRouteName', ['profileId' => '123456']) }}" class="list-group-item list-group-item-action">
                Named Route
            </a>
            <a href="{{ url('/route_priority/user') }}" class="list-group-item list-group-item-action">
                Route Priority
            </a>
            <a href="{{ url('/asdqwezxc') }}" class="list-group-item list-group-item-action">
                Fallback Routes
            </a>
        </div>

        <h6 class="mt-4">Route Groups (Route Prefixes & Route Name Prefixes)</h6>
        <div class="list-group list-group-numbered mt-4">
            <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">
                Admin Dashboard
            </a>
            <a href="{{ route('admin.users') }}" class="list-group-item list-group-item-action">
                Admin Users
            </a>
            <a href="{{ route('admin.items') }}" class="list-group-item list-group-item-action">
                Admin Items
            </a>
        </div>

        <h6 class="mt-4">View Route List</h6>
        <div class="bg-light px-3 py-2 border rounded">
            <code>php artisan route:list</code>
        </div>

        <h6 class="mt-4">Route Caching</h6>
        <div class="bg-light px-3 py-2 border rounded">
            <code>php artisan route:cache</code>
        </div>
        <div class="bg-light px-3 py-2 border rounded mt-3">
            <code>php artisan route:clear</code>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
