<x-layout>
    <x-slot:title>Login</x-slot:title>

    <div class="flex justify-center items-center w-full md:mt-3">
        <div class="w-full bg-white p-5 rounded-lg shadow border max-w-screen-md">
            <div class="flex flex-col">
                <form method="POST">
                    @csrf

                    <div class="mb-5">
                        @php $value = app()->environment('local') === true ? 'test@example.com' : old('email') @endphp
                        <x-form.input type="text" id="email" description="E-Mail" :value="$value"/>
                    </div>

                    <div class="mb-5">
                        @php $value = app()->environment('local') === true ? 'Password12345' : null @endphp
                        <x-form.input type="password" id="password" description="Passwort" :value="$value"/>
                    </div>

                    <div>
                        <x-form.button-primary type="submit" id="login" description="Login"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
