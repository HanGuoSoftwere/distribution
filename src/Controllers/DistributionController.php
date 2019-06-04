<?php

/**
 * Created by PhpStorm.
 * User: AltiraPendragon
 * Date: 2019/6/4
 * Time: 17:00
 */
namespace HanGuoSoft\Distribution\Controllers;

class DistributionControlle extends Controller
{
    /**
     * 测试分销
     * @param array $people
     * @param array $scale
     * @param int $money
     * @return array
     */
    public function StartDistribution($people = [] ,$scale = [],$money = 0){
        foreach($people as $key => &$value){
            $value['money'] = bcmul($money,$scale[$key]);
        }
        return $people;
    }
}