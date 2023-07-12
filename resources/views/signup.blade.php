<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/" method="post">
        @csrf
        <div>
            <label for="email">{{__("form.input.email")}}</label>
            <input type="email" name="email" id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
        </div>
        @error('email')
            {{$message}}
        @enderror

        <div>
            <label for="password">{{__("form.input.password")}}</label>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        @error('password')
            {{$message}}
        @enderror

        <div>
            <label for="confirm_password">{{__("form.input.confirm")}}</label>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Password">
        </div>
        @error('confirm_password')
            {{$message}}
        @enderror

        <div>
            <label for="fullname">{{__("form.input.nama")}}</label>
            <input type="text" name="fullname" id="fullname" placeholder="Full name">
        </div>
        @error('fullname')
            {{$message}}
        @enderror

        

        <button type="submit">Sign Up</button>
    </form>

</body>
</html>
