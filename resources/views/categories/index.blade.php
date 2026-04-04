@foreach($categories as $key => $categoryArray)
    <h1>{{ $key }}</h1>
    @foreach($categoryArray as $categoryName)
        <h3>{{ $categoryName }}</h3>
    @endforeach
    <hr>
@endforeach
