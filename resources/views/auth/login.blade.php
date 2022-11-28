<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label>NIS</label>
        <input id="nis" type="number" class="form-control @error('nis') is-invalid @enderror" name="nis" required  autofocus>
        @error('nis')
            <span>
            <strong>{{ $message }}</strong>
            </span>
        @enderror
        </br>
        <label>Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <span>
            <strong>{{ $message }}</strong>
            </span>
        @enderror
        </br>
        <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </button>
    </form>
</body>
</html>