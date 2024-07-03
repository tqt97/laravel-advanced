@foreach ($todos as $todo)
    <tr>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $todo->user_id }}</td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $todo->title }}</td>
    </tr>
@endforeach
