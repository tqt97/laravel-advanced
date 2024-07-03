<select name="{{ $field ?? 'title' }}" id="{{ $field ?? 'title' }}"
    class="text-black/70 bg-white px-3 py-2 transition-all cursor-pointer hover:border-blue-600/30 border border-gray-200 rounded-lg outline-blue-600/50 appearance-none invalid:text-black/30">
    <option value="">Select a title</option>
    @foreach ($todos as $todo)
        <option value="{{ $todo->title }}">{{ $todo->title }}</option>
    @endforeach
</select>
