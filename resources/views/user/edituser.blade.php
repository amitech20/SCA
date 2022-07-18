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
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>EDIT YOUR DETAILS <a href="/" class="btn btn-info" style="color:green;"> Back</a></strong>
                        </div>
                        <div class="card-body">
                        @if(session('edit_user'))
                                <div class="alert alert-success" role="alert">
                                    {{session('edit_user')}}
                                </div>

                            @endif 
                            <form method="POST" action="{{route('edit.user')}}">
                                @csrf
                                <input type="hidden" name="id" value='{{$post->id}}'>
                                <div class="form-group">
                                    <strong><label for="name">Name:</label></strong>
                                    <input type="text" name="name" class="form-control" value='{{$post->name}}'>
                                </div>

                                <div class="form-group">
                                    <strong><label for="email">Email:</label></strong>
                                    <input type="email" name="email" class="form-control" value='{{$post->email}}'>
                                </div>

                                <div class="form-group">
                                    <strong><label for="number">Phone Number:</label></strong>
                                    <input type="number" name="number" class="form-control" value='{{$post->phone}}'>
                                </div>
                                <button type="submit" class="btn btn-success"> Update User</button>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
    </div>
</section>
</body>
</html>