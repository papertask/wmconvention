<?php
/**
 * Superlist child functions and definitions
 *
 * @package Superlist Child
 * @since Superlist Child 1.0.0
 */

// Disable auto-embeds for WordPress >= v3.5

remove_action( 'wp_head', 'wp_generator' ); //移除 WordPress 版本信息

remove_action( 'wp_head', 'rsd_link' ); //移除离线编辑器开放接口

remove_action( 'wp_head', 'wlwmanifest_link' ); //移除Live Writer编辑器开放接

add_filter( 'pre_comment_content', 'wp_specialchars' );

remove_action( 'wp_head', 'feed_links', 2 );

remove_action( 'wp_head', 'feed_links_extra', 3 );

function no_wordpress_errors(){     return 'GET OFF MY LAWN !! RIGHT NOW !!';

}

add_filter( 'login_errors', 'no_wordpress_errors' );

//防止CC攻击
session_start(); //开启session
$timestamp = time();
$ll_nowtime = $timestamp ;
//判断session是否存在 如果存在从session取值，如果不存在进行初始化赋值
if ($_SESSION){
$ll_lasttime = $_SESSION['ll_lasttime'];
$ll_times = $_SESSION['ll_times'] + 1;
$_SESSION['ll_times'] = $ll_times;
}else{
$ll_lasttime = $ll_nowtime;
$ll_times = 1;
$_SESSION['ll_times'] = $ll_times;
$_SESSION['ll_lasttime'] = $ll_lasttime;
}
//现在时间-开始登录时间 来进行判断 如果登录频繁 跳转 否则对session进行赋值
if(($ll_nowtime - $ll_lasttime) < 3){
if ($ll_times>=5){
header("location:http://wmconvention.org/404.html");//可以换成其他链接，比如站内的404错误显示页面(千万不要用动态页面)
exit;
}
}else{
$ll_times = 0;
$_SESSION['ll_lasttime'] = $ll_nowtime;
$_SESSION['ll_times'] = $ll_times;
}




add_filter( 'gform_address_types', 'brazilian_address', 10, 2 );
function brazilian_address( $address_types, $form_id ) {
    $address_types['brazil'] = array(
        'label'       => '中国',
        'country'     => '中国',
        'zip_label'   => '邮编',
	'state_label' => '省',
        'states'      => array(
            '', '北京市', '天津市', '河北省', '山西省', '内蒙古自治区', '辽宁省', '吉林省', '黑龙江省', '上海市', '江苏省', '浙江省', '安徽省', '福建省',
            '江西省', '山东省', '河南省', '湖北省', '湖南省', '广东省', '广西壮族自治区', '海南省', '重庆市', '四川省', '贵州省', '云南省', '西藏自治区', '陕西省', '甘肃省', '青海省', '宁夏回族自治区', '新疆维吾尔自治区', '香港特别行政区', '澳门特别行政区', '台湾', '海外'
        )
    );
 
    return $address_types;
}

add_filter( 'gform_address_display_format', 'address_format' );
function address_format( $format ) {
    return 'zip_before_city';
}
