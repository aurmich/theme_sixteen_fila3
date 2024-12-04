<?php

declare(strict_types=1);

namespace Modules\Predict\Models;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Arr;
use Modules\Blog\Models\Article;
use Modules\Predict\Actions\Article\GetOutstanding;
use Modules\Predict\Actions\Stocks\GetCurrentRatingsPrice;
use Modules\Rating\Models\RatingMorph;
use Parental\HasParent;

/**
 * @property float $stocks_value
 */
class Predict extends Article
{
    use HasParent;

    /** @var string */
    protected $connection = 'predict'; // this will use the specified database connection

    protected $fillable = [
        'uuid',
        'user_id',
        'title',
        'slug',
        // 'description',
        'body',
        'images',
        'viewCount',

        'content_blocks',
        'footer_blocks',
        'sidebar_blocks',
        'is_featured',
        'main_image_upload',
        'main_image_url',
        'published_at',
        'closed_at',
        'category_id',
        'type',
        // 'is_closed', => closet_at

        /*
        'title',
        'slug',
        'thumbnail',
        'body',
        'user_id',
        'active',
        'published_at',
        'meta_title',
        'meta_description',

         'author_id',
        'title',
        'slug',
        'content',
        'picture',
        'category_id',
        'status',
        'publish_date',
        'show_on_homepage',
        'author_name',
        'read_time',
        'excerpt',
        */
        'status',
        'status_display',
        'bet_end_date',
        'event_start_date',
        'event_end_date',
        'is_wagerable',
        'brier_score',
        'brier_score_play_money',
        'brier_score_real_money',
        'wagers_count',
        'wagers_count_canonical',
        'wagers_count_total',
        'wagers',
        'volume_play_money',
        'volume_real_money',
        'is_following',
        'rewarded_at',
        'stocks_count', // liquidità iniziale
        'stocks_value', // parametro di liquidità
    ];

    // public function impersonate($article) {
    //     dddx($article);
    // }

    public function orders(): MorphMany
    {
        return $this->morphMany(Order::class, 'model');
    }

    public function getBettingUsers(): int
    {
        return count(RatingMorph::where('model_id', $this->id)
            ->where('user_id', '!=', null)
            ->groupBy('user_id')
            ->get()
            ->toArray());
    }

    public function getVolumeCredit(?int $rating_id = null): float
    {
        $ratings = RatingMorph::where('model_id', $this->id)
            ->where('user_id', '!=', null);

        if (null !== $rating_id) {
            $ratings = $ratings->where('rating_id', $rating_id);
        }

        $ratings = $ratings->get();

        $tmp = 0;

        foreach ($ratings as $rating) {
            $tmp += $rating->value;
        }

        return (int) $tmp;
    }

    public function getRatingsPercentageByVolume(): array
    {
        $ratings_options = $this->getOptionRatingsIdTitle();
        $result = [];

        $total_volume = $this->getVolumeCredit();
        if (0 == $total_volume) {
            $total_volume = 1;
        }

        foreach ($ratings_options as $key => $value) {
            $result[$key] = round(($this->getVolumeCredit($key) * 100) / $total_volume, 0);
        }

        return $result;
    }

    // public function getArrayRatingsWithImage(): array
    // {
    //     $ratings = $this
    //         ->ratings()
    //     // ->with('media')
    //         ->where('user_id', null)
    //         ->get();
    //     // ->toArray()

    //     $ratings_array = [];

    //     foreach ($ratings as $key => $rating) {
    //         $ratings_array[$key] = $rating->toArray();
    //         if (empty($rating->getFirstMediaUrl('rating'))) {
    //             $rating->addMediaFromUrl('https://picsum.photos/id/'.random_int(1, 200).'/300/200')
    //                 ->toMediaCollection('rating');
    //         }
    //         $ratings_array[$key]['image'] = $rating->getFirstMediaUrl('rating');
    //         $ratings_array[$key]['effect'] = false;
    //     }

    //     return $ratings_array;
    // }

    // public function getOptionRatingsIdTitle(): array
    // {
    //     // return $this->ratings()->where('user_id', null)->get();
    //     return Arr::pluck($this->ratings()->where('user_id', null)->get()->toArray(), 'title', 'id');
    // }

    public function getOptionRatingsIdColor(): array
    {
        // return $this->ratings()->where('user_id', null)->get();
        return Arr::pluck($this->ratings()->where('user_id', null)->get()->toArray(), 'color', 'id');
    }

    // public function getRatingsPercentageByUser(): array
    // {
    //     $ratings_options = $this->getOptionRatingsIdTitle();
    //     $result = [];

    //     foreach ($ratings_options as $key => $value) {
    //         $b = RatingMorph::where('model_id', $this->id)
    //             ->where('user_id', '!=', null)
    //             ->count();

    //         if (0 === $b) {
    //             $b = 1;
    //         }

    //         $a = RatingMorph::where('model_id', $this->id)
    //             ->where('user_id', '!=', null)
    //             ->where('rating_id', $key)
    //             ->count();

    //         $result[$key] = round((100 * $a) / $b, 0);
    //     }

    //     return $result;
    // }

    public function getOutstanding(array $rating_opts): array
    {
        // dddx($rating_opts);
        // $rating_opts = array_keys(collect($this->getArrayRatingsWithImage())
        //         ->pluck('title', 'id')->toArray());

        // $ratings_morph = RatingMorph::where('model_type', 'article')->get();
        // $result = [];
        // foreach ($rating_opts as $index) {
        //     // $result[$index] = 0.0;
        //     // $tmp = RatingMorph::where('model_type', 'article')
        //     $tmp = $ratings_morph
        //             ->where('rating_id', $index)
        //             ->sum('value');
        //     $result[$index] = $tmp;
        // }

        // return $result;

        return app(GetOutstanding::class)->execute($rating_opts);
    }

    public function getCurrentPriceRatings(): array
    {
        return app(GetCurrentRatingsPrice::class)->execute($this->stocks_value, $this->id);
    }
}
