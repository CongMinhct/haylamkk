<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <table border="1">

        <tr>
        
        <th>STT</th>
        
        <th>Name</th>
        
        <th>Description</th>
        
        <th width="280px">Action</th>
        
        </tr>
        
        @foreach ($categories as $key => $value)
        
        <tr>
        
        <td>{{ $key+1 }}</td>
        
        <td>{{ $value->category_name }}</td>
        
        <td>{{ $value->category_description}}</td>
        
        <td>
        
        <a href="{{asset('categoryy/edit/'.$value->category_id)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
        
        <a href="{{asset('categoryy/delete/'.$value->category_id)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>
        
        </td>
        
        </tr>
        
        @endforeach
        
        </table>
</body>
</html>