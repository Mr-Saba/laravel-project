<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        h1 {
            text-align: center;
        }
        .user {
            display: block;
            margin: 40px;
        }
    </style>
</head>
<body>
    <h1>{{trans('website.registeredUsers')}}</h1>
    @foreach($users as $accounts)
<div class="user">
    <div> <strong>Name and Username:</strong>
        {{$accounts->name }}
        {{$accounts->surname }}
    </div>
    <div> <strong>Email:</strong>
         {{$accounts->email }}
    </div>
    <div><strong>Password:</strong>
         {{bcrypt($accounts->passwoord) }}
    </div>
        <img src="{{$accounts->photo}}"  title="{{$accounts->name }}"/>
    <div>
        <strong>Year of Birth:</strong> {{$accounts->year_of_birth }} 
    </div>
</div>
    @endforeach
</body>
</html>