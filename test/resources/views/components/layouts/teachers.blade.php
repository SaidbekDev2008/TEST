<body class="p-6 bg-gray-100">


  <div class="overflow-x-auto max-w-4xl mx-auto">
    <table class="w-full bg-white border border-gray-300 text-sm">
      <thead class="bg-gray-200">
        <tr>
          <th class="py-2 px-4 border text-left">Name</th>
          <th class="py-2 px-4 border text-left">Students</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($teachers as $teacher)
        <tr>
          <td class="py-2 px-4 border">{{ $teacher->name }}</td>
          <td class="py-2 px-4 border">{{ $teacher->students->count() }}</td>
          <td class="py-2 px-4 border">
            <form action="{{ route('follow',$teacher) }}" method="POST">
                @csrf
                <button type="submit">Follow</button>
            </form>
          </td>
        </tr>
        @endforeach


    </table>
  </div>
</body>
