<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
        {{-- <input type="checkbox" id="chk" aria-hidden="true"> --}}
        @if(session('error'))
            <div style="color: red; font-size: 20px; margin-bottom: 20px; text-align: center; width: 100%;">
                {{ session('error') }}
            </div>
        @endif

        <div class="signup">
            <form method="POST" action="{{ route('auth.store') }}">
                <label for="chk" aria-hidden="true">Login</label>
                <div style="display: flex; flex-direction: column;">
                    @csrf
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="password" name="password" placeholder="Password" required="">
                    <button>Enter</button>
                </div>
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
