<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model{
    use HasFactory;
    use SoftDeletes;
    protected $table = "news";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
    protected $fillable = [
        'title',
        'category_id',
        'description',
        'news_image',
        'is_default',
        'is_active',
        'created_by',
        'commenter_name',
        'comment',
        'comment_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('news');
    }

    public function category(){
        return $this->belongsTo('App\Models\NewsCategory','category_id');
    }
}

