<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Prop extends Model
{
    /** 取得時にJSONに含める属性 */
    protected $visible = [
        'id', 'name', 'owner_id', 'public_id',
        'url', 'usage',
    ];
 
    /** 登録時にJSONに含める属性 */
    protected $fillable = [
        'name', 'owner_id', 'public_id',
        'url', 'usage',
    ];

    /**
     * リレーションシップ - ownersテーブル
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo('App\Models\Owner');
    }

    /**
     * リレーションシップ - scenesテーブル
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function scenes()
    {
        return $this->hasMany('App\Models\Scene')->orderBy('id', 'desc');
    }

    /**
     * リレーションシップ - props_commetsテーブル
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prop_comment()
    {
        return $this->hasMany('App\Models\Prop_Comment')->orderBy('id', 'desc');
    }
}
