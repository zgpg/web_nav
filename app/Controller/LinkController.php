<?php
declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\Model\CateGory;
use App\Model\Link;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\Di\Annotation\Inject;

/**
 * 链接
 * @AutoController()
 */

class LinkController
{

    public function getLists()
    {

        $cateArr = (new CateGory())->getList();
        $list = (new Link())->getList();
        foreach ($cateArr as $k=>$v){
            foreach ($list as $k1=>$v1){
                if($v['id'] == $v1['cate_id']){
                    $cateArr[$k]['link'][] = $v1;
                }
            }

        }
        return ['code'=>0,'status'=>1,'data'=>$cateArr,'msg'=>'成功'];
    }

}
