<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $socialiteUser = Socialite::driver($provider)->user();

        if ($provider == 'facebook')
        {
            $newname = str_replace(' ', '_', $socialiteUser->getName());

            $user = User::firstOrCreate(
                [
                    'provider' => $provider,
                    'provider_id' => $socialiteUser->getId(),
                ],

                [
                    'username' => $newname,
                    'email' => $socialiteUser->getEmail(),
                    'avatar' => $socialiteUser->getName(),
                ]
            );
        }

        $user = User::firstOrCreate(
            [
                'provider' => $provider,
                'provider_id' => $socialiteUser->getId(),
            ],

            [
                'username' => $socialiteUser->getNickname(),
                'email' => $socialiteUser->getEmail(),
                'avatar' => $socialiteUser->getAvatar()
            ]
        );

        // Log the user in
        Auth::login($user, true);

        // Redirect to dashboard
        return redirect('home');
    }

}
