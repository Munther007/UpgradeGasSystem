<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <a href="#header" class="logo"><img src="logo.png" alt="" class="img_logo" style="width:200px; height:200px"></a>

            <!--<x-jet-authentication-card-logo />-->
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>


<!--    <!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <title>Login V1</title>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!--===============================================================================================-->
<!--    <link rel="icon" type="image/png" href="{{asset("images/icons/favicon.ico")}}"/>-->
    <!--===============================================================================================-->
<!--    <link rel="stylesheet" type="text/css" href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}">-->
    <!--===============================================================================================-->
<!--    <link rel="stylesheet" type="text/css" href="{{asset("fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">-->
    <!--===============================================================================================-->
<!--    <link rel="stylesheet" type="text/css" href="{{asset("vendor/animate/animate.css")}}">-->
    <!--===============================================================================================-->
<!--    <link rel="stylesheet" type="text/css" href="{{asset("vendor/css-hamburgers/hamburgers.min.css")}}">-->
    <!--===============================================================================================-->
<!--    <link rel="stylesheet" type="text/css" href="{{asset("vendor/select2/select2.min.css")}}">-->
    <!--===============================================================================================-->
<!--    <link rel="stylesheet" type="text/css" href="{{asset("css/util.css")}}">-->
<!--    <link rel="stylesheet" type="text/css" href="{{asset("css/main.css")}}">-->
    <!--===============================================================================================-->
<!--</head>-->
<!--<body>-->

<!--<div class="limiter">-->
<!--    <div class="container-login100">-->
<!--        <div class="wrap-login100">-->
<!--            <div class="login100-pic js-tilt" data-tilt>-->
<!--                <img src="{{asset("images/img-01.png")}}" alt="IMG">-->
<!--            </div>-->

<!--            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">-->
<!--                @csrf-->
<!--					<span class="login100-form-title">-->
<!--						Member Login-->
<!--					</span>-->

<!--                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">-->
<!--                    <input class="input100" for="email" type="text" name="email" value="{{ __('Email') }}" placeholder="">-->
<!--                    <span class="focus-input100"></span>-->
<!--                    <span class="symbol-input100">-->
<!--							<i class="fa fa-envelope" aria-hidden="true"></i>-->
<!--						</span>-->
<!--                </div>-->

<!--                <div class="wrap-input100 validate-input" data-validate = "Password is required">-->
<!--                    <input class="input100" for="password" type="password" name="pass" value="{{ __('Password') }}" />-->
<!--                    <span class="focus-input100"></span>-->
<!--                    <span class="symbol-input100">-->
<!--							<i class="fa fa-lock" aria-hidden="true"></i>-->
<!--						</span>-->
<!--                </div>-->

<!--                <div class="container-login100-form-btn">-->
<!--                    <button class="login100-form-btn">-->
<!--                        {{ __('Log in') }}-->
<!--                    </button>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->




<!--===============================================================================================-->
<!--<script src="{{asset("vendor/jquery/jquery-3.2.1.min.js")}}"></script>-->
<!--===============================================================================================-->
<!--<script src="{{asset("vendor/bootstrap/js/popper.js")}}"></script>-->
<!--<script src="{{asset("vendor/bootstrap/js/bootstrap.min.js")}}"></script>-->
<!--===============================================================================================-->
<!--<script src="{{asset("vendor/select2/select2.min.js")}}"></script>-->
<!--===============================================================================================-->
<!--<script src="{{asset("vendor/tilt/tilt.jquery.min.js")}}"></script>-->
<!--<script >-->
<!--    $('.js-tilt').tilt({-->
<!--        scale: 1.1-->
<!--    })-->
<!--</script>-->
<!--===============================================================================================-->
<!--<script src="{{asset("js/main.js")}}"></script>-->

<!--</body>-->
<!--</html>-->


