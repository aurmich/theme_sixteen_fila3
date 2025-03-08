<?php

declare(strict_types=1);

namespace Modules\Xot\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Datas\XotData;
use Webmozart\Assert\Assert;

/**
 * Trait Updater.
 * https://dev.to/hasanmn/automatically-update-createdby-and-updatedby-in-laravel-using-bootable-traits-28g9.
<<<<<<< HEAD
=======
<<<<<<< HEAD
 *
 * @property int|null $created_by ID dell'utente che ha creato il record
 * @property int|null $updated_by ID dell'utente che ha modificato il record
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
 */
trait Updater
{
    /**
<<<<<<< HEAD
     * Summary of creator.
=======
<<<<<<< HEAD
     * Get the user who created the model.
=======
     * Summary of creator.
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
     *
     * @return BelongsTo<ProfileContract&Model, static>
     */
    public function creator(): BelongsTo
    {
        /** @var class-string<ProfileContract&Model> $profileClass */
        $profileClass = XotData::make()->getProfileClass();

        // @phpstan-ignore return.type
        return $this->belongsTo(
            $profileClass,
            'created_by',
            'user_id'
        );
    }

    /**
     * Get the last user who updated the model.
     *
     * @return BelongsTo<ProfileContract&Model, static>
     */
    public function updater(): BelongsTo
    {
        /** @var class-string<ProfileContract&Model> $profileClass */
        $profileClass = XotData::make()->getProfileClass();

        // @phpstan-ignore return.type
        return $this->belongsTo(
            $profileClass,
            'updated_by',
            'user_id'
        );
    }

    /**
     * bootUpdater function.
     */
    protected static function bootUpdater(): void
    {
        static::creating(
            static function (Model $model): void {
<<<<<<< HEAD
=======
<<<<<<< HEAD
                if ($model->isFillable('created_by')) {
                    $model->setAttribute('created_by', authId());
                }
                if ($model->isFillable('updated_by')) {
                    $model->setAttribute('updated_by', authId());
                }
=======
>>>>>>> origin/master
                // @phpstan-ignore property.notFound
                $model->created_by = authId();
                // @phpstan-ignore property.notFound
                $model->updated_by = authId();
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
            }
        );

        static::updating(
            static function (Model $model): void {
<<<<<<< HEAD
=======
<<<<<<< HEAD
                if ($model->isFillable('updated_by')) {
                    $model->setAttribute('updated_by', authId());
                }
            }
        );

        static::deleting(
            static function (Model $model): void {
                if ($model->isFillable('deleted_by')) {
=======
>>>>>>> origin/master
                // @phpstan-ignore property.notFound
                $model->updated_by = authId();
            }
        );
        /*
         * Deleting a model is slightly different than creating or deleting.
         * For deletes we need to save the model first with the deleted_by field
         */
        static::deleting(
            static function (Model $model): void {
                Assert::isArray($attributes = $model->attributes);

                if (\in_array('deleted_by', array_keys($attributes), false)) {
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
                    $model->update(['deleted_by' => authId()]);
                }
            }
        );
    }
}// end trait Updater
