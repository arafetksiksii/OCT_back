<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestTable extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'C##username.TEST_TABLE'; // Fully qualified table name

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ID'; // Explicitly set primary key

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false; // If ID is not auto-incremented

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ID',
        'NAME',
        'CREATED_AT',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer', // Change to integer since your database stores it as a NUMBER
        'CREATED_AT' => 'datetime', // DateTime field is correct
    ];
}