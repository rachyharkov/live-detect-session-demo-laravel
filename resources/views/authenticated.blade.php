<!DOCTYPE html>
<html>

<head>
    <title>Authenticated!</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
        {{-- <input type="checkbox" id="chk" aria-hidden="true"> --}}

        <div class="signup">
            <form>
                <label for="chk" aria-hidden="true">Welcome!</label>
                <div style="display: flex; flex-direction: column; align-items: center;">
                    <h1>{{ Auth::user()->name }}</h1>
                </div>
                <form method="POST" action="{{ route('auth.destroy', 'owo') }}">
                    @csrf
                    <button>Logout</button>
                </form>
            </form>
        </div>

        {{-- <div class="login">
            <form>
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pswd" placeholder="Password" required="">
                <button>Login</button>
            </form>
        </div> --}}
    </div>
</body>

</html>
