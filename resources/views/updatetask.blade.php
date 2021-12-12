<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Task</title>
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
    <div class="text-center">
        <h1>Daily Task</h1>
                <div class="row">
                    <div class="col-md-8 pr-2">
                        <div class="form-group">
        
                            @foreach($errors->all() as $error)
    
                                <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                </div>
    
                            @endforeach
    
                            <form method="post" action="/updateTask">
                            {{csrf_field()}}
    
                            <input type="text" class="form-control" value="{{$taskdata->task}}" name="task"/>
                            <input type="hidden" name="id" value="{{$taskdata->id}}"/>
                                <br>
                                <input type="submit" class="btn btn-primary" value="UPDATE"/>
                                &nbsp;&nbsp; 
                                <input type="button" class="btn btn-danger" value="CANCEL"/>
    
                            </form>

                        </div>
                    </div>
                </div>
        
        

    </div>
    
</body>
</html>