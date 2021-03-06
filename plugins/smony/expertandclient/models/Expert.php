<?php namespace Smony\Expertandclient\Models;

use Model;

/**
 * Expert Model
 */
class Expert extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'smony_expertandclient_experts';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = ['attachments' => ['System\Models\File']];
    public $attachMany = [];

}