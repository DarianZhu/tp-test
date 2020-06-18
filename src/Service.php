<?php
/**
 * @author: 朱正健
 * Time: 2020/6/18 20:19
 */


namespace aibayanyu\jwt;


use aibayanyu\jwt\command\TestCommand;

class Service extends \think\Service
{
    public function boot()
    {
        $this->commands(TestCommand::class);
    }
}