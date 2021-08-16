<?php
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
use Hyperf\Cache\Annotation\Cacheable;

class CateGory extends Model
{
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    protected $dateFormat = 'U';//时间格式-时间戳
    protected $table = 'category';
    /*不允许批量写入的字段*/
    protected $guarded = [];

    /**
     *
     * @return array
     * Date: 8/16/21 3:08 PM
     * Create by mark.zhang <mark.zhang@transn.com>
     * @Cacheable(prefix="cate_gory", ttl=9000)
     */
    public function getList(){
        $list = $this
            ->where('delete_time',0)
            ->where('status',10)
            ->orderBy('sort','desc')->get();

        return $list ? $list->toArray() : [];
    }
}