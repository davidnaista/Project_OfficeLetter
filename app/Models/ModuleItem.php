<?php
/*
 * This file is part of the api package.
 *
 * (c) Eduostia Corporation <http://eduostia.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


/**
 * @author      : Aji G. P <aji.gumelar@eduostia.com>
 * @created     : 7/30/15
 */
class ModuleItem extends Model {

    protected $table = 'module_item';

    /*
     * generate tree module
     */
    public static function getRecursive($parentID = 0, $arr = NULL) {

        $results = self::all()
            ->where('module_item_parent_id', $parentID)
            ->where('module_item_status', 'y')
            ->toArray();

        if($results) {

            $i = 0;
            foreach($results as $idx=>$val) {

                $arr[$i] = $val;
                $arr[$i]['children'] =  self::getRecursive($results[$idx]['module_item_id']);

                $i++;
                //
            }
        }else {

            return null;
        }

        return $arr;
    }
}