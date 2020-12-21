<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>
        <div class="flex" style="justify-content: space-around; display: flex">
            <div class="flex-col" style="width: 420px;">
                <h1>Supply chain management</h1>
                <img src="/img/supply-chain-management-illustration.png" style="width: 100%"/>
            </div>
            <div class="flex-col" style="width: 420px">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <div class="shadow-box" style="padding: 2em 1.5em; width: 420px">
                    <h2 style="text-align: center; margin-bottom: 1.2em">Login</h2>
                    <form accept-charset="UTF-8" role="form"  method="POST" action="{{ route('login') }}">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" id="email" type="email" name="email" :value="old('email')" required autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value=""
                                       id="password"
                                       required autocomplete="current-password" >
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

    </x-auth-card>
</x-guest-layout>
