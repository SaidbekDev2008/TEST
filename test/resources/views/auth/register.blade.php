<x-layouts.menu>
    <x-slot:title>
        Register
    </x-slot:title>
    <body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-sm">
        <h1 class="text-2xl font-bold mb-4">Register</h1>
        <form method="POST" action="{{route('register.auth')}}">
            @csrf
            <input type="text" placeholder="Name" class="w-full p-2 border rounded mb-3" name="name">
            <input type="email" placeholder="Email" class="w-full p-2 border rounded mb-3" name="email">
            <input type="password" placeholder="Password" class="w-full p-2 border rounded mb-3" name="password">
            <select name="role" class="w-full p-2 border rounded mb-3">
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
            </select>
            <button class="w-full bg-green-500 text-white p-2 rounded" type="submit">Register</button>
        </form>
    </div>
</body>

</x-layouts.menu>
