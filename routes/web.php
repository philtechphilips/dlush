<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/event-planning', function () {
    return view('event-plaaning');
});


Route::get('/venue-decoration', function () {
    return view('venue-decoration');
});

Route::get('/rental-services', function () {
    return view('rental-services');
});


Route::get('/event-planning', function () {
    return view('event-plaaning');
});

Route::get('/faqs', function () {
    return view('faq');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/terms-and-condition', function () {
    return view('terms');
});


Route::post('/contact-submit', function () {
    $validated = request()->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'event_date' => 'nullable|date',
        'message' => 'required|string|max:1000',
        'g-recaptcha-response' => 'required'
    ]);

        // Verify reCAPTCHA v3
        $recaptchaResponse = request('g-recaptcha-response');
        $secretKey = config('services.recaptcha.secret_key');

        $recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptchaData = [
            'secret' => $secretKey,
            'response' => $recaptchaResponse,
            'remoteip' => request()->ip()
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($recaptchaData)
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($recaptchaUrl, false, $context);
        $recaptchaResult = json_decode($result, true);

        if (!$recaptchaResult['success']) {
            return response()->json([
                'success' => false,
                'message' => 'reCAPTCHA verification failed. Please try again.'
            ], 400);
        }


        // Check reCAPTCHA v3 score (0.0 to 1.0, higher is better)
        $score = $recaptchaResult['score'] ?? null;
        $hostname = $recaptchaResult['hostname'] ?? '';

        // If using test keys (testkey.google.com), always pass
        if ($hostname === 'testkey.google.com') {
            \Log::info('Using reCAPTCHA test keys - bypassing score check');
        } else {
            // For real keys, check the score
            $minimumScore = 0.3; // Adjust this threshold as needed

            if ($score === null || $score < $minimumScore) {
                return response()->json([
                    'success' => false,
                    'message' => 'reCAPTCHA verification failed. Score: ' . ($score ?? 'null') . ' (minimum: ' . $minimumScore . ')'
                ], 400);
            }
        }

    try {
        // Send email notification
        \Mail::to('folake02@yahoo.com')->send(new \App\Mail\ContactMail($validated));

        // Optional: Send confirmation email to the customer
        \Mail::to($validated['email'])->send(new \App\Mail\ContactConfirmationMail($validated));

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your message! We\'ll get back to you shortly!.'
        ]);
    } catch (\Exception $e) {
        \Log::error('Contact form submission failed: ' . $e->getMessage());

        return response()->json([
            'success' => false,
            'message' => 'Sorry, there was an error sending your message. Please try again or contact us directly.'
        ], 500);
    }
})->name('contact.submit');
