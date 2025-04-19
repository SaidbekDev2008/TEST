<x-layouts.menu>
    <x-slot:title>
        Login
    </x-slot:title>
    <body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-sm">
        <h1 class="text-2xl font-bold mb-4">Login</h1>
        <form action="{{route('login.auth')}}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" class="w-full p-2 border rounded mb-3" required>
            <input type="password" name="password" class="w-full p-2 border rounded mb-3" required placeholder="Password">
            <button class="w-full bg-green-500 text-white p-2 rounded" type="submit">Login</button>
        </form>
    </div>
</body>

</x-layouts.menu>
