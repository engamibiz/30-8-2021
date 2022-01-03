<style>
    table,td,th{
        border:1px solid gray;
        border-collapse: collapse;
    }
    table{
        width: 100%;
    }
</style>
<table >
    <tr>
        <th>id</th>
        <th>name</th>
        <th>grade</th>
        <th>Result</th>
        <th>Action</th>
    </tr>
    @foreach($tests as $test)
    <tr>
        <td>{{ $test->id }}</td>
        <td>{{ $test->name }}</td>
        <td>{{ $test->grade }}</td>
        <td>
            @if($test->grade > 85)
                A
            @elseif($test->grade > 75)
                B
            @elseif($test->grade > 65)
                C
            @elseif($test->grade > 50)
                D
            @else
                <span style="color:red">F</span>
            @endif
        </td>
        <td>
            <a href="{{ route('test.view',$test->id) }}">View</a>
            <a href="{{ route('test.edit',$test->id) }}">Edit</a>
            <form method="post" action="{{ route('test.delete',$test->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
