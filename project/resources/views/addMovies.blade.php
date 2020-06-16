<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .field {
            display: block;
            margin-right: auto;
            margin-left: auto;
            margin-top: 40px;
        }
        label {
            margin-left: 635px;
        }
        </style>
</head>
<body>
    <h1 style="text-align: center">Add Movie</h1>
    <form method="POST"  action="{{ url()->current() }}">
        {{ csrf_field() }}
        
        <input type="text" name="name" class="field" placeholder="enter name"/>
        <div style="text-align: center; margin-top: 20px;">Enter Language</div>
        <label for="Georgian">Georgian</label>
        <input type="radio" name="language" value="Georgian" placeholder="enter language"/>
    </br>
        <label for="English">English</label>
        <input type="radio" name="language" value="English" placeholder="enter language"/>
        <textarea name="summary" class="field" placeholder="enter summary" ></textarea>
        <select name="production_year" class="field" >
            @for($i=2020; $i> 1920; $i--) <option value={{ $i }}>{{ $i }}</option>
                @endfor
        </select>
        <input type="text" name="duration" class="field" placeholder="enter duration"/>
        <input type="text" name="genre" class="field" placeholder="enter genre"/>
        <input type="text" name="imdb" class="field" placeholder="enter imdb"/>
        <button type="submit" class="field" class="field">Add Movie</button>
    </form>
</body>
</html>