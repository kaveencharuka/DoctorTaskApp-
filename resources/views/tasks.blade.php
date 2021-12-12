<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daily Task App</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />

</head>
<body>
    <div class="panel-header panel-header-sm">
    </div>
    <div class="container">
    <div class="text-center">
    <h1>Daily Tasks</h1>
            <div class="row">
                <div class="col-md-10 pr-1">
                    <div class="form-group">
    
                        @foreach($errors->all() as $error)

                            <div class="alert alert-danger" role="alert">
                                {{$error}}
                            </div>

                        @endforeach

                        <form method="post" action="/tasks">
                        {{csrf_field()}}

                        <input type="text" class="form-control" placeholder="Enter Your Task Today" name="task">
                            <br>
                            <input type="submit" class="btn btn-primary" value="SAVE"> 
                            <input type="button" class="btn btn-warning" value="CLEAR">

                        </form>
                        <table class="table table-dark">
                            <th>ID</th>
                            <th>Task</th>
                            <th>Completed</th>
                            <th>Action</th>

                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{$task->id}}</td>
                                    <td>{{$task->task}}</td>

                                    <td>
                                        @if($task->iscompleted)   
                                            <button class="btn btn-success">Completed</button>
                                        @else   
                                            <button class="btn btn-warning">Not Completed</button>
                                        @endif
                                    </td>

                                    <td>
                                        @if(!$task->iscompleted)   
                                            <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a> 
                                        @else   
                                            <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark As Not Completed</a> 
                                        @endif

                                        <a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a>
                                        <a href="/updatetask/{{$task->id}}" class="btn btn-success">Update</a>
                                    </td>
                                        
                                </tr>
                            @endforeach

                        </table>
                        

                    </div>
                </div>
            </div>
    </div>
    </div>
</body>
</html>