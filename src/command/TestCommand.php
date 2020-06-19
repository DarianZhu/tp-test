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
        $this->setName("yanyu:test")
            ->setDescription("test Aibayanyu");
    }

    protected function execute(Input $input, Output $output)
    {
        $output->writeln("this is a test");
    }

}
