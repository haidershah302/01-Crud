<!DOCTYPE html>
<html data-theme="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.js')
    @inertiaHead
    @routes
</head>
<body>
    <div class="mobile-screen scrollbar-none">
        @inertia
    </div>
</body>
</html>
