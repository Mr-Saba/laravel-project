<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .field {
            display: block;
            margin-right: auto;
            margin-left: auto;
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <form enctype="multipart/form-data" action="{{ url()->current() }}" method="POST">
        {{-- @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>

        @endif --}}
        {{ csrf_field() }}
        <h1 style="text-align: center">{{ trans('website.addUser')}}</h1>
        <input type="text" class="field" name="name" value="{{old('name')}}" placeholder="enter name" />
        @error('name')
        <div class="alert alert-danger" style="text-align:center; color:red">{{$message}}</div>
        @enderror
        <input type="text" class="field" name="surname" value="{{old('surname')}}" placeholder="enter surname" />
        @error('surname')
        <div class="alert alert-danger" style="text-align:center; color:red">{{$message}}</div>
        @enderror
        <input type="email" class="field" name="email" value="{{old('email')}}" placeholder="enter email" />
        @error('email')
        <div class="alert alert-danger" style="text-align:center; color:red">{{$message}}</div>
        @enderror
        <input type="password" class="field" name="password" placeholder="enter password" />
        @error('password')
        <div class="alert alert-danger" style="text-align:center; color:red">{{$message}}</div>
        @enderror
        <input type="file" class="field" name="photo" />
        @error('photo')
        <div class="alert alert-danger" style="text-align:center; color:red">{{$message}}</div>
        @enderror
        <select name="year_of_birth" class="field">
            @for($i=1920; $i< 2010; $i++) <option value={{ $i }}>{{ $i }}</option>
                @endfor
        </select>
        <button type="submit" class="field">{{trans('website.create')}}</button>
    </form>
</body>

</html>