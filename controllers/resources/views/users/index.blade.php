<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>

<body>
    <h1>User list:</h1>
    {{-- @if ($users->isEmpty())
        <p>The user list is empty</p>
    @else
        <ul>
            @foreach ($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul> --}}
    {{-- @endif --}}

    <ul>
        @forelse ($users as $user)
            <li>{{ $user->name }} Edad: {{ $user->age }}</li>
        @empty
            <li>List Empty</li>
        @endforelse
    </ul>

    {{-- @switch($age)
     @case(18)
      <h1>18 years old</h1>
     @break
     @default
    @endswitch --}}
</body>

</html>
