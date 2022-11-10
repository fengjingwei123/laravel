<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HelloMessage extends Command
{
    /**
     * The name and signature of the console command.
     *这里是命令名称
     * @var string // 参数
    // protected $signature = 'test:send {name}'; // 必填参数
    // protected $signature = 'test:send {arg?}'; //必填参数
    // protected $signature = 'test:send {name=test}'; // 默认参数
    // protected $signature = 'test:send {name*}'; // 数组参数

    // 选项
    // protected $signature = 'test:send {--id}'; // 不接受值的选项
    // protected $signature = 'test:send {--id=}'; // 需要接收值的选项
    // protected $signature = 'test:send {--id=0}'; // 选项默认值
    // protected $signature = 'test:send {--id=*}'; // 选项数组

    ————————————————
    版权声明：本文为CSDN博主「深漂小码哥」的原创文章，遵循CC 4.0 BY-SA版权协议，转载请附上原文出处链接及本声明。
    原文链接：https://blog.csdn.net/qq2942713658/article/details/120107601
     */
    protected $signature = 'Hello:info {name=test} {--id=}';

    /**
     * The console command description.
     *这里是命令描述
     * @var string
     */
    protected $description = 'hello massage';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        dd($this->options());
        $this->info('hello'.$this->argument('name').'sex:'. $this->option('sex'));
//        return 0;
    }
}
