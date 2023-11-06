<x-layout>
    <x-slot:title>Login</x-slot:title>

    <div class="flex justify-center items-center w-full md:mt-3">
        <div class="w-full bg-white p-5 rounded-lg shadow border max-w-screen-md">
            <div class="flex flex-col">
                <form method="POST">
                    @csrf

                    <div class="mb-5">
                        <label for="email">E-Mail</label>
                        <input type="text"
                               id="email"
                               name="email"
                               class="block w-full rounded-md bg-gray-50 @error('email') border-red-300 @else border-gray-300 @enderror focus:border-indigo-400 focus:ring-indigo-200 focus:ring-2"
                               @if(app()->environment('local') === true) value="test@example.com" @endif
                        >
                        @error('email')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="password">Passwort</label>
                        <input type="password"
                               id="password"
                               name="password"
                               class="block w-full rounded-md bg-gray-50 @error('password') border-red-300 @else border-gray-300 @enderror focus:border-indigo-400 focus:ring-indigo-200 focus:ring-2"
                               @if(app()->environment('local') === true) value="Password12345" @endif
                        >
                        @error('password')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div>
                        <x-form.button-primary type="submit" id="login" description="Login"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
