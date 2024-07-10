<!DOCTYPE html>
<html>

<head>
    <title>Authenticated!</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div class="main">
        {{-- <input type="checkbox" id="chk" aria-hidden="true"> --}}

        <div class="signup">
            <label for="chk" aria-hidden="true">Welcome!</label>
            <div style="display: flex; flex-direction: column; align-items: center;">
                <h1>{{ Auth::user()->name }}</h1>

                {{-- show session expired --}}
                <h3>
                    Your session will expire in few seconds.
                </h3>
            </div>
            <form method="POST" action="{{ route('auth.destroy', 'owo') }}" id="logout-form" x-data x-on:submit="clearTimeout(timer)">
                @csrf
                @method('DELETE')
                <button type="submit">Logout</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    const random_between = (min, max) => Math.floor(Math.random() * (max - min + 1) + min);

    let timer = null;

    const initiate = (timeout) => {
        timer = setTimeout(() => {
            $.get("{{ route('session.index') }}", function(data) {
                console.log(data);
                initiate(random_between(1000, 5000));
            })
            .fail(function() {
                $("#logout-form").submit();
            });
        }, timeout);
    }

    initiate(random_between(1000, 5000));

</script>
</html>
