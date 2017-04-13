<?php
/**
 *  QueryList使用示例
 *  
 * 入门教程:http://doc.querylist.cc/site/index/doc/4
 * 
 * QueryList::Query(采集的目标页面,采集规则[,区域选择器][，输出编码][，输入编码][，是否移除头部])
* //采集规则
* $rules = array(
*   '规则名' => array('jQuery选择器','要采集的属性'[,"标签过滤列表"][,"回调函数"]),
*   '规则名2' => array('jQuery选择器','要采集的属性'[,"标签过滤列表"][,"回调函数"]),
*    ..........
*    [,"callback"=>"全局回调函数"]
* );
 */

require 'vendor/autoload.php';

use QL\QueryList;

//采集某页面所有的图片
$data = QueryList::Query('http://cms.querylist.cc/bizhi/453.html',array(
    'image' => array('img','src')
    ))->data;
//打印结果
print_r($data);

/*************************************************/


