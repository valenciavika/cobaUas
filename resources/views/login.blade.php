<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session()->has('LoginError'))
            <div class="alert_login_failed" role="alert">
                {{ session('LoginError') }}
            </div>
    @endif
    <form action="/login" method="post">
        @csrf
        <div>
            <label for="email">{{__('form.input.email')}}</label>
            <input type="email" name="email" id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
        </div>
        @error('email')
            {{$message}}
        @enderror

        <div>
            <label for="password">{{__('form.input.password')}}</label>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        @error('password')
            {{$message}}
        @enderror

        <button type="submit">Login</button>
    </form>



</body>
</html>
