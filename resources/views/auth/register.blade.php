<x-guest-layout>
    <x-auth-card>

        <div class="flex" style="justify-content: space-around; display: flex">
            <div class="flex-col" style="width: 420px;">
                <h1>Supply chain management</h1>
                <img src="/img/supply-chain-management-illustration.png" style="width: 100%"/>
            </div>
            <div class="flex-col" style="width: 420px">

                <div class="shadow-box" style="padding: 2em 1.5em; width: 420px">
                    <x-slot name="logo"></x-slot>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <h2 style="text-align: center; margin-bottom: 1.2em">Register</h2>
                    <form accept-charset="UTF-8" role="form"  method="POST" action="{{ route('register') }}">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" id="name" type="name" name="name" :value="old('name')" required autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" id="email" type="email" name="email" :value="old('email')">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value=""
                                       id="password"
                                       required autocomplete="current-password" >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Confirm password" name="password_confirmation" type="password" value=""
                                       id="password_confirmation"
                                       required autocomplete="current-password" >
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Register">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

    </x-auth-card>
</x-guest-layout>
