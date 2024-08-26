<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;

use function Livewire\Volt\form;

form(LoginForm::class);

    $login = function () {
    $this->validate();

    $this->form->authenticate();

    Session::regenerate();

    $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
};

?>

<div class="account-login section">
    @if(session('status'))
        <x-alert message="{{ session('status') }}" variant="indigo" role="alert" />
    @endif

            <!-- Section Space -->
            <div class="section-space">
                <div class="container">
                    <div class="mx-auto max-w-[856px]">
                        <!-- Section Block -->
                        <div class="section-block mx-auto mb-10 max-w-[650px] text-center xl:max-w-[870px]">
                            <h2 class="jos mb-6">Welcome back</h2>
                        </div>
                        <!-- Section Block -->
                        <div class="rounded-[10px] border border-black p-10">
                            <!-- Contact Form -->
                            <form action="#" method="post" class="flex flex-col gap-y-6" wire:submit="login">
                                <!-- Form Group -->
                                <div>
                                    <label for="sign-in-email" class="mb-3 block text-base font-bold">Enter email address</label>
                                    <input wire:model="form.email" type="email" name="email" id="reg-email" placeholder="example@gmail.com" class="w-full rounded-[50px] border border-black bg-colorIvory px-8 py-4 text-base tracking-[0.5px]" required />
                                    @error('form.email')
                                    <span class="mt-2 text-sm text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <!-- Form Group -->
                                <div>
                                    <label for="sign-in-password" class="mb-3 block text-base font-bold">Enter Password</label>
                                    <input wire:model="form.password" type="password" name="password" id="reg-pass" class="w-full rounded-[50px] border border-black bg-colorIvory px-8 py-4 text-base tracking-[0.5px]" required />
                                    @error('form.password')
                                    <span class="mt-2 text-sm text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <!-- Form Group -->
                                <div class="flex flex-wrap items-center justify-between">

                                    <div class="flex items-center">
                                        <input type="checkbox" name="remember" wire:model="form.remember" id="sign-in-terms" class="h-4 w-4 rounded-[3px] border-[#7F8995] accent-colorLightLime checked:border-black checked:text-black" />
                                        <label for="remember" class="ml-2 inline-block text-base">Remember me</label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class='text-base -tracking-[0.5px]' href='{{ route('password.request') }}' wire:navigate>{{ __('Forgot your password?') }}</a>
                                    @endif
                                </div>
                                <!-- Form Group -->
                                <!-- Form Group -->
                                <div>
                                    <button type="submit" class="btn-black w-full">
                                        Sign in
                                    </button>
                                </div>
                                <!-- Form Group -->
                            </form>
                            <!-- Contact Form -->


                            <!-- Text Link -->
                            <p class="mt-10 text-center text-base hidden">
                                Not a member yet?
                                <a class='font-bold underline-offset-2 hover:underline' wire:navigate href="{{ route('register') }}">Sign up here</a>
                            </p>
                            <!-- Text Link -->
                        </div>
                    </div>
                </div>

            </div>
            <!-- Section Space -->
</div>
