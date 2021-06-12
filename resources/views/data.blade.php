<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/app.css">
    <title>Data Page</title>
</head>
<body>
<div class = "data-container">
<h1 class = "data-heading">User Data Table</h1>

<table>
  <tr>
    <th>Name</th>
    <th>Country</th>
    <th>Date of Birth</th>
  </tr>

  @foreach ($list as $item)
  <tr>
    <td>{{ $item->name }}</td>
    <td>{{ $item->country }}</td>
    <td>{{ $item->date }}</td>
  </tr>
 @endforeach
</table>

</div>
</body>
</html>
