<x-guest-layout>
    <x-jet-authentication-card>
        
<img src="https://static.wixstatic.com/media/4bdd77_d8f0ff0492f84ec39c67a31971f9e88a~mv2.png/v1/fill/w_1737,h_498,al_c,q_90/4bdd77_d8f0ff0492f84ec39c67a31971f9e88a~mv2.webp" alt="">
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

            

            <div class="flex items-center justify-end mt-4">
                

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
