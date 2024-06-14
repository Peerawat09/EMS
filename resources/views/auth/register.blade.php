<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: lightblue;
        }

        .warpper {
            width: 420px;
            background: transparent;
            color: white;
            border-radius: 15px;
            padding: 60px 50px;
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .warpper h1 {
            font-size: 36px;
            text-align: center;
        }

        .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            margin: 30px 0;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 40px;
            font-size: 16px;
            color: white;
            padding: 20px 45px 20px 20px;
        }

        .input-box input::placeholder {
            color: #ffffff;
        }

        .input-box i {
            position: absolute;
            right: 20px;
            top: 30%;
            transform: translate(-50%);
            font-size: 20px;
        }

        .btn {
            width: 100%;
            height: 45px;
            border: none;
            outline: none;
            border-radius: 40px;
            cursor: pointer;
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            transition: 0.2s;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .btn:hover {
            color: #000;
            transform: translate(-0.25rem, -0.25rem);
            background: #b9ff90;
            box-shadow: 0.25rem 0.25rem rgba(0, 0, 0, 0.2);
        }

        .btn:active {
            transform: translate(0);
            box-shadow: none;
        }

        .register-link {
            font-size: 14.5px;
            text-align: center;
            margin: 20px 0 15px;
        }

        .register-link p a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link p a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="warpper">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Register</h1>
            <div class="input-box">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <i class='bx bxs-user'></i>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-box">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class='bx bxs-envelope'></i>
            </div>

            <div class="input-box">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <i class='bx bxs-lock-alt'></i>
            </div>


            <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
        </form>
    </div>
</body>

</html>
