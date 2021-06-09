<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style> 
</head>
<body>

<h2></h2>

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

</body>
</html>
