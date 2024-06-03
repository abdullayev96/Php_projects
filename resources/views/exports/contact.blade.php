<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Last name</th>
        <th>Phone</th>
        <th>Category_id</th>

    </tr>
    </thead>
    <tbody>
    @foreach($contact as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->firstname }}</td>
            <td>{{ $item->lastname }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->category_id}}</td>
        </tr>
    @endforeach
    </tbody>
</table>


