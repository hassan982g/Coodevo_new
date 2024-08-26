<?php

use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;

use function Livewire\Volt\rules;
use function Livewire\Volt\state;

state(['email' => '']);

rules(['email' => ['required', 'string', 'email']]);

$sendPasswordResetLink = function () {
    $this->validate();

    // We will send the password reset link to this user. Once we have attempted
    // to send the link, we will examine the response then see the message we
    // need to show to the user. Finally, we'll send out a proper response.
    $status = Password::sendResetLink(
        $this->only('email')
    );

    if ($status != Password::RESET_LINK_SENT) {
        $this->addError('email', __($status));

        return;
    }

    $this->reset('email');

    Session::flash('status', __($status));
};

?>

<div class="account-login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                @if(session('status'))
                    <x-alert message="{{ session('status') }}" variant="indigo" role="alert" />
                @endif
                <form class="card login-form inner-content" wire:submit="sendPasswordResetLink">
                    <div class="card-body">
                        <div class="title">
                            <h3>Reset Password</h3>
                            <p>Need to reset your password? No problem! Just enter your email & click the button
                                below.</p>
                        </div>
                        <div class="input-head">
                            <div class="form-group input-group mb-0">
                                <label><i class="lni lni-envelope"></i></label>
                                <input class="form-control" wire:model="email" name="email" id="reg-email"
                                    placeholder="Enter your email">
                            </div>
                            @error('email')
                                <span class="mt-2 text-sm text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="button" style="margin-top: 20px;">
                            <button class="btn" type="submit">{{ __('Email Password Reset Link') }}</button>
                        </div>
                        <h4 class="create-account">Login to your account <a wire:navigate href="{{ route('login') }}">Click here</a>
                        </h4>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
