<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Carbon;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Modules\Xot\Contracts\ProfileContract;
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Carbon;
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Carbon;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)

/**
 * Modules\Gdpr\Models\Treatment.
 *
 * @property string                          $id
 * @property int                             $active
 * @property int                             $required
 * @property string                          $name
 * @property string                          $description
 * @property string|null                     $documentVersion
 * @property string|null                     $documentUrl
 * @property int                             $weight
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
 *                                                            =======
 * @property string                          $id
 * @property int                             $active
 * @property int                             $required
 * @property string                          $name
 * @property string                          $description
 * @property string|null                     $documentVersion
 * @property string|null                     $documentUrl
 * @property int                             $weight
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 *
 * @method static \Modules\Gdpr\Database\Factories\TreatmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDocumentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDocumentVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereWeight($value)
 *
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDocumentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDocumentVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDocumentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDocumentVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDocumentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDocumentVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereUpdatedBy($value)
 *
 * @property string|null $deleted_by
 *
 * @method static \Modules\Gdpr\Database\Factories\TreatmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDocumentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDocumentVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereWeight($value)
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
=======
>>>>>>> origin/master
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
 * @property Carbon|null                     $created_at
 * @property Carbon|null                     $updated_at
 *
 * @method static \Modules\Gdpr\Database\Factories\TreatmentFactory factory($count = null, $state = [])
 * @method static Builder|Treatment                                 newModelQuery()
 * @method static Builder|Treatment                                 newQuery()
 * @method static Builder|Treatment                                 query()
 * @method static Builder|Treatment                                 whereActive($value)
 * @method static Builder|Treatment                                 whereCreatedAt($value)
 * @method static Builder|Treatment                                 whereDescription($value)
 * @method static Builder|Treatment                                 whereDocumentUrl($value)
 * @method static Builder|Treatment                                 whereDocumentVersion($value)
 * @method static Builder|Treatment                                 whereId($value)
 * @method static Builder|Treatment                                 whereName($value)
 * @method static Builder|Treatment                                 whereRequired($value)
 * @method static Builder|Treatment                                 whereUpdatedAt($value)
 * @method static Builder|Treatment                                 whereWeight($value)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
 *
 * @mixin \Eloquent
 */
class Treatment extends BaseModel
{
    use HasUuids;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
    // protected $table = 'treatment';
    public $incrementing = false;

    protected $fillable = [''];
=======
>>>>>>> origin/master
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    protected $fillable = [
        'active',
        'required',
        'name',
        'description',
        'documentVersion',
        'documentUrl',
        'weight'
    ];

    // protected $table = 'treatment';
    public $incrementing = false;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
}
