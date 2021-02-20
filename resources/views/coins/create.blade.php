<h1>Crate your coin here</h1>
<form action="{{ route('coins.store') }}" method="POST">
    @csrf
    <div>
        Nombre corto: <input type="text" name="short_name">
    </div>
    <div>
        Nombre largo: <input type="text" name="name">
    </div>
    <button type="submit" value="Create">Submit</button>
</form>