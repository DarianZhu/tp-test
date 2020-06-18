<?php
/**
 * @author: 朱正健
 * Time: 2020/6/18 20:30
 */


namespace aibayanyu\jwt\command;


use think\console\Command;
use think\console\Input;
use think\console\Output;

class TestCommand extends Command
{
    protected function configure()
    {
        $this->setName("jwt:test")
            ->setDefinition("this is my test");
    }

    protected function execute(Input $input, Output $output)
    {
        $output->writeln("this is a test");
    }

}
