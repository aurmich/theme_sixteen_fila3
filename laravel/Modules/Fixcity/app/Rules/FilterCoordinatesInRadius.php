<?php

namespace Modules\Fixcity\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
<<<<<<< HEAD
use Modules\Fixcity\Models\Ticket;
use Modules\Geo\Actions\FilterCoordinatesInRadiusAction as CoordinatesFilter;
=======
use Modules\Geo\Actions\FilterCoordinatesInRadiusAction as CoordinatesFilter;
use Modules\Fixcity\Models\Ticket;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
use Webmozart\Assert\Assert;

class FilterCoordinatesInRadius implements ValidationRule
{
    /**
     * Run the validation rule.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        Assert::isArray($value);
        Assert::keyExists($value, 'lat');
        Assert::keyExists($value, 'lng');
        Assert::numeric($value['lat']);
        Assert::numeric($value['lng']);

        $latitude = (float) $value['lat'];
        $longitude = (float) $value['lng'];

<<<<<<< HEAD
        $coordinatesArray = Ticket::where('latitude', '!=', null)
            ->where('longitude', '!=', null)
            ->select('id', 'latitude', 'longitude')->get()->toArray();
        // $ticket_vicini = app(CoordinatesFilter::class)->execute($value['lat'], $value['lng'], $coordinatesArray, 1);
        $ticket_vicini = app(CoordinatesFilter::class)->execute($latitude, $longitude, $coordinatesArray, 1);

=======

        $coordinatesArray = Ticket::where('latitude', '!=', null)
                    ->where('longitude', '!=', null)
                    ->select('id', 'latitude', 'longitude')->get()->toArray();
        // $ticket_vicini = app(CoordinatesFilter::class)->execute($value['lat'], $value['lng'], $coordinatesArray, 1);
        $ticket_vicini = app(CoordinatesFilter::class)->execute($latitude, $longitude, $coordinatesArray, 1);


>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
        // dddx([$value['lat'], $value['lng'], $coordinatesArray, $ticket_vicini]);
        if (count($ticket_vicini) > 0) {
            $fail('Ci sono già '.(string) count($ticket_vicini).' ticket in questa posizione');
        }
    }
}
