<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirePillar extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pillarhydrantexport140820';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'gid';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
