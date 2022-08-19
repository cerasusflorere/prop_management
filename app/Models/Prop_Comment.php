<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prop_Comment extends Model
{
    /** 取得時にJSONに含める属性 */
    protected $visible = [
        'id', 'prop_id', 'memo',
    ];

    /** JSONに含める属性 */
    protected $fillable = [
        'prop_id', 'memo',
    ];

    /**
     * リレーションシップ - propsテーブル
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function prop()
    {
        return $this->belongsTo('App\Models\Prop');
    }
}
