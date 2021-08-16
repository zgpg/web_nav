<?php
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
use Hyperf\Cache\Annotation\Cacheable;

class Link extends Model
{
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    protected $dateFormat = 'U';//时间格式-时间戳
    protected $table = 'link';
    /*不允许批量写入的字段*/
    protected $guarded = [];

    /**
     *
     * @param int $cate_id
     * @return array
     * Date: 8/16/21 3:08 PM
     * Create by mark.zhang <mark.zhang@transn.com>
     * @Cacheable(prefix="link", ttl=9000)
     */
    public function getList(int $cate_id=0){
        $mdl = $this
            ->where('delete_time',0)
            ->where('status',10)
            ->orderBy('sort','desc');
        if($cate_id > 0){
            $mdl->where('cate_id','=',$cate_id);
        }

        $list = $mdl->get();

        return $list ? $list->toArray() : [];
    }
}