
<section>
@if(session('status'))
    <x-alert message="{{ session('status') }}" variant="indigo" role="alert" />
@endif

<form method="POST" wire:submit="save" class="flex flex-col gap-y-6">
    @csrf
    <div class="grid grid-cols-1 gap-x-6 gap-y-6 md:grid-cols-2">
        <div>
            <label for="contact-name" class="mb-3 block pl-6 text-base font-bold">Your Name</label>
            <input type="text" wire:model="name" name="name" id="name" class="w-full rounded-[50px] border border-black bg-colorIvory px-8 py-4 text-base font-bold" />

            @error('name')
            <span class="mt-2 text-sm text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="contact-name" class="mb-3 block pl-6 text-base font-bold">Subject</label>
            <input type="text" wire:model="subject" name="subject" id="subject" class="w-full rounded-[50px] border border-black bg-colorIvory px-8 py-4 text-base font-bold" />
            @error('subject')
            <span class="mt-2 text-sm text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="email" class="mb-3 block pl-6 text-base font-bold">Email Address</label>
            <input type="email" wire:model="email" name="email" id="email" class="w-full rounded-[50px] border border-black bg-colorIvory px-8 py-4 text-base font-bold" />
            @error('email')
            <span class="mt-2 text-sm text-danger">{{ $message }}</span>
            @enderror

        </div>

        <div>
            <label for="phone" class="mb-3 block pl-6 text-base font-bold">Phone No</label>
            <input type="tel" placeholder="+92300 11 11 111" wire:model="phone" name="phone" id="phone" class="w-full rounded-[50px] border border-black bg-colorIvory px-8 py-4 text-base font-bold" />
            @error('phone')
            <span class="mt-2 text-sm text-danger">{{ $message }}</span>
            @enderror

        </div>

    </div>


    <div>
        <label for="massage" class="mb-3 block pl-6 text-base font-bold">Write your message here...</label>
        <textarea name="massage" placeholder="Your Message" wire:model="message" id="massage" class="min-h-52 w-full rounded-[20px] border border-black bg-colorIvory px-8 py-4 text-base font-bold"></textarea>
    
        @error('message')
            <span class="mt-2 text-sm text-danger">{{ $message }}</span>
        @enderror
        @error('g_recaptcha_response')
            <span class="mt-2 text-sm text-danger">{{ $g_recaptcha_response }}</span>
        @enderror

    </div>
    <div>
        <button id="submit-button" type="submit" class="btn-black">
            Send Message
        </button>
    </div>
</form>
</section>

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
    <script>
        document.getElementById('submit-button').addEventListener('click', function(event) {
            event.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'submit'}).then(function(token) {
                    @this.set('g_recaptcha_response', token);
                    @this.call('save');
                });
            });
        });
    </script>
@endpush

