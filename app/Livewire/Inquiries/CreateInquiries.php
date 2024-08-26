<?php

namespace App\Livewire\Inquiries;

use App\Jobs\InquiryJobToAdmin;
use App\Jobs\InquiryJobToUser;
use App\Models\Inquiry;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CreateInquiries extends Component
{

    public string $name = '';
    public string $subject = '';
    public string $email = '';
    public string $phone = '';
    public string $message = '';
    public int $is_read = 0;
    public $g_recaptcha_response;

    public function save()
    {
        $this->sanitize();
        $this->validate();

        $recaptchaResponse = $this->g_recaptcha_response;
        $recaptchaSecret = env('RECAPTCHA_SECRET_KEY');

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $recaptchaSecret,
            'response' => $recaptchaResponse,
        ]);

        $recaptchaResult = $response->json();

        if (!$recaptchaResult['success'] || $recaptchaResult['score'] < 0.5) {
            $this->addError('g_recaptcha_response', 'ReCAPTCHA validation failed. Please try again.');
            return;
        }

        $inquiry = Inquiry::create($this->all());
        session()->flash('status', 'Your inquiry submitted successfully.');
        InquiryJobToUser::dispatch($inquiry)->delay(now()->addSeconds(10));
        InquiryJobToAdmin::dispatch($inquiry)->delay(now()->addSeconds(10));
        $this->reset();

    }

    public function render()
    {
        return view('livewire.inquiries.create-inquiries');
    }

    protected function rules(): array
    {
        return [
            'name' => [
                'string',
                'required',
                'max:255'
            ],
            'subject' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'required',
                'string',
                'email:rfc',
                'max:255'
            ],
            'phone' => [
                'required',
                'string',
                'regex:/^(\+\d{1,3}\s?)?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/',
                'max:255'
            ],
            'message' => [
                'required',
                'string',
            ],
            'g_recaptcha_response' => [
                'required',
            ],
        ];
    }

    public function sanitize()
    {
        $this->name = trim(strip_tags($this->name));
        $this->subject = trim(strip_tags($this->subject));
        $this->email = trim(strip_tags($this->email));
        $this->phone = trim(strip_tags($this->phone));
        $this->message = trim(strip_tags($this->message));
    }
}
