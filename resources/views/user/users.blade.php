<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Users</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <section style='padding-top:60px'>
    <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>ALL USERS</strong> <a href="/create" class="btn btn-success">Add Detail</a>
                        </div>
                        <div class="card-body">
                            @if(session('User_deleted'))
                                 <div class="alert alert-success" role="alert">    
                                        {{session('User_deleted')}}
                                    </div>  
                            @endif
                         <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>S/N </th>
                                    <th>NAME </th>
                                    <th>EMAIL ADDRESS</th>
                                    <th>PHONE NUMBER</th>
                                    <th>&nbsp&nbsp&nbsp ACTION</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($post as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->phone}}</td>
                                    <td>
                                        <a href="/edit/{{$data->id}}" class="btn btn-info">Edit</a>
                                        <a href="/delete/{{$data->id}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                         </table>
                         </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>
</section>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>