<?php

/**
 * @see https://github.com/DutchCodingCompany/filament-socialite
 */

declare(strict_types=1);

namespace Modules\User\Actions\Socialite;

// use DutchCodingCompany\FilamentSocialite\FilamentSocialite;
use Laravel\Socialite\Contracts\User as SocialiteUserContract;
use Modules\User\Models\SocialiteUser;
use Spatie\QueueableAction\QueueableAction;

class RetrieveSocialiteUserAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $provider, SocialiteUserContract $user): ?SocialiteUser
    {
<<<<<<< HEAD
        $res = SocialiteUser::query()
=======
<<<<<<< HEAD
        $res = SocialiteUser::query()
=======
        dddx($user);

        return SocialiteUser::query()
>>>>>>> 38b878581 (up)
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
            ->with(['user'])
            ->where('provider', $provider)
            ->where('provider_id', $user->getId())
            ->first();

        $res?->update([
            // @phpstan-ignore property.notFound
            'token' => $user->token,
        ]);

        return $res;
    }
}
