<form method="post" action="{{ route('test.store') }}">
    @csrf
    <label>Name</label>
    <input name="name" type="text">
    <label>Grade</label>
    <input name="grade" type="number">
    <button type="submit">Submit</button>
</form>
@if($errors->any())
    <h1> {{ $errors->first() }}</h1>
@endif
