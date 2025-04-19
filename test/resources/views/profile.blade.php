<x-layouts.menu>
    <x-slot:title>
        Profile
    </x-slot:title>
    <x-layouts.navbar></x-layouts.navbar>
    <body class="p-6 bg-white">
    <h2 class="text-2xl font-bold mb-4">Edit Profile</h2>
    <form class="space-y-4">
        <input type="text" value="John Doe" class="w-full p-2 border rounded">
        <input type="email" value="john@example.com" class="w-full p-2 border rounded">
        <button class="bg-yellow-500 text-white px-4 py-2 rounded" type="submit">Save Changes</button>
    </form>
</x-layouts.menu>
