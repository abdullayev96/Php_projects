<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Slug</th>
    </tr>
    </thead>
    <tbody>
    @foreach($category as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->slug }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
