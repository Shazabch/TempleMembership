<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class membership extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'gvBrowseCode',
        'gvBrowseCompanyName',
        'gvBrowseAttention',
        'gvBrowseUDF_TEMPATLAHIR',
        'gvBrowseUDF_ICNO',
        'gvBrowsePhone1',
        'gvBrowseAddress1',
        'area_id',
        'gvBrowseUDF_DOB',
        'gvBrowseUDF_NOAHLISKMC',
        'gvBrowseUDF_TARIKHMEMOHON',
        'gvBrowseUDF_PEKERJAAN',
        'gvBrowseUDF_JANTINA',
        'status',
        'item_id',
        
    ];
    public function item()
    {
        return $this->belongsTo(item::class);
    }
    public function area()
    {
        return $this->belongsTo(area::class)->withDefault();
    }
    public function payments()
    {
        return $this->hasMany(payment::class, 'member_id');
    }
}
