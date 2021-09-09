<?php
/**
 * Auth配置
 */
return [
        //认证开关
        'AUTH_ON' => true, 
        // 认证方式，1为时时认证；2为登录认证。
        'AUTH_TYPE' => 1, 
         //用户组数据表名
        'AUTH_GROUP' => 'auth_group',
        //用户组明细表
        'AUTH_GROUP_ACCESS' => 'auth_group_access', 
        //权限规则表
        'AUTH_RULE' => 'auth_rule',
        //用户信息表
        'AUTH_USER' => 'administrator'
];