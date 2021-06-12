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

<table id = "unique">
  <tr>
    <th>Name</th>
    <th class = "country">Country</th>
    <th class= "date">Date of Birth</th>
  </tr>

  @foreach ($list as $item)
  <tr>
    <td>{{ $item->name }}</td>
    <td class = "country">{{ $item->country }}</td>
    <td class ="date">{{ $item->date }}</td>
  </tr>
 @endforeach
</table>

</div>
</body>
</html>
