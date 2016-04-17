<?php namespace Smony\Head\Models;

use Model;

/**
 * Head Model
 */
class Head extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'smony_head_heads';

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