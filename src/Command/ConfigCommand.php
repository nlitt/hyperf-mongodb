<?php

declare(strict_types = 1);

namespace Nlitt\Mongodb\Command;

use Hyperf\Command\Annotation\Command;
use Hyperf\Command\Command as HyperfCommand;
use Symfony\Component\Console\Input\InputOption;

/**
 * @Command()
 */
class ConfigCommand extends HyperfCommand
{
    /**
     * 执行的命令行
     *
     * @var string
     */
    protected $name = 'mongodb:publish';

    public function handle()
    {
        // 从 $input 获取 config 参数
        $argument = $this->input->getOption('config');
        if ($argument) {
            copy(__DIR__ . '/../../publish/mongodb.php', BASE_PATH . '/config/autoload/mongodb.php');
            $this->line('mongodb配置创建成功!!!', 'info');
        }
    }

    protected function getOptions()
    {
        return [
            ['config', null, InputOption::VALUE_NONE, '推送mongodb配置文件'],
        ];
    }
}
