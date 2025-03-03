<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example Package</title>
</head>
<body>
    <h1>Example Data</h1>
    <ul>
        @foreach($examples as $example)
            <li>{{ $example->name }} - {{ $example->description }}</li>
        @endforeach
    </ul>
</body>
</html>
