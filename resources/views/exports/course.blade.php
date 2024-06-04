<table>
    <thead>
    <tr>
        <th>Category_id</th>
        <th>Course_name</th>
        <th>Course_time</th>
        <th>Course_practice</th>
        <th>Course_bonus</th>
        <th>Course_bonus</th>

    </tr>
    </thead>
    <tbody>
    @foreach($course as $item)
        <tr>
            <td>{{ $item->category_id }}</td>
            <td>{{ $item->course_name }}</td>
            <td>{{ $item->course_time }}</td>
            <td>{{ $item->course_practice }}</td>
            <td>{{ $item->course_bonus }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
