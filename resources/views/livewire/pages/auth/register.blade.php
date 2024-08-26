<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use function Livewire\Volt\rules;
use function Livewire\Volt\state;

state([
    'name' => '',
    'email' => '',
    'password' => '',
    'password_confirmation' => ''
]);

rules([
    'name' => ['required', 'string', 'max:255'],
    'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
    'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
]);

$register = function () {
    $validated = $this->validate();

    $validated['password'] = Hash::make($validated['password']);

    event(new Registered($user = User::create($validated)));

    Auth::login($user);

    $this->redirect(route('dashboard', absolute: false), navigate: true);
};

?>

<div class="account-login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                <form class="card login-form inner-content" wire:submit="register">
                    <div class="card-body">
                        <div class="title">
                            <h3>Sign Up Now</h3>
                            <p>Use the form below to create your account.</p>
                        </div>
                        <div class="alt-option d-none">
                            <span class="small-title">Sign up with your work email</span>
                            <a href="javascript:void(0)" class="option-button"><img
                                    src="{{ asset('assets/images/account-login/google.png') }}" alt="#">Sign
                                Up With Google
                            </a>
                        </div>
                        <div class="or"><span></span></div>
                        <div class="input-head">
                            <div class="form-group input-group mb-0">
                                <label><i class="lni lni-user"></i></label>
                                <input class="form-control" wire:model="name" type="text" placeholder="Your name" autofocus autocomplete="name">
                            </div>
                            @error('name')
                                <span class="mt-2 text-sm text-danger">{{ $message }}</span>
                            @enderror
                            <div class="mt-3 form-group input-group mb-0">
                                <label><i class="lni lni-envelope"></i></label>
                                <input class="form-control" wire:model="email" name="email" placeholder="Your email" autocomplete="username">
                            </div>
                            @error('email')
                                <span class="mt-2 text-sm text-danger">{{ $message }}</span>
                            @enderror
                            <div class="mt-3 form-group input-group mb-0">
                                <label><i class="lni lni-lock-alt"></i></label>
                                <input class="form-control" type="password" wire:model="password" id="password" name="password" autocomplete="off" placeholder="Your password">
                            </div>
                            @error('password')
                                <span class="mt-2 text-sm text-danger">{{ $message }}</span>
                            @enderror
                            <div class="mt-3 form-group input-group mb-0">
                                <label><i class="lni lni-lock-alt"></i></label>
                                <input class="form-control" type="password" wire:model="password_confirmation" id="password_confirmation" name="password_confirmation" autocomplete="off" placeholder="Confirm password">
                            </div>
                            @error('password_confirmation')
                                <span class="mt-2 text-sm text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="button">
                            <button class="btn" type="submit">{{ __('Register') }}</button>
                        </div>
                        <h4 class="create-account">Already have an account? <a href="{{ route('login') }}" wire:navigate>Sign In</a>
                        </h4>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
