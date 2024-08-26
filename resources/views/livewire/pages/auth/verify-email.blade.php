<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

$sendVerification = function () {
    if (Auth::user()->hasVerifiedEmail()) {
        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);

        return;
    }

    Auth::user()->sendEmailVerificationNotification();

    Session::flash('status', 'verification-link-sent');
};

$logout = function (Logout $logout) {
    $logout();

    $this->redirect('/', navigate: false);
};

?>

<div class="maill-success">
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container">
          <div class="success-content">
            <h1>Verify Your Email</h1>
            @if(session('status') == 'verification-link-sent')
              <x-alert message="A new verification link has been sent to the email address you provided during registration." variant="indigo" role="alert" />
          @endif
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            <div class="d-block d-md-flex justify-content-center mt-3">
                <div class="button">
                    <button wire:click="sendVerification" class="btn">{{ __('Resend Verification Email') }}</button>
                </div>
                <div class="button mt-2 mt-md-0" style="margin-left: 1rem !important;">
                    <button wire:click="logout" class="btn">
                        {{ __('Log Out') }}
                    </button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
