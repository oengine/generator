<?php

namespace OEngine\Generator\Commands\Module;

use Illuminate\Console\Command;
use OEngine\Generator\Traits\WithGeneratorStub;
use Symfony\Component\Console\Input\InputArgument;

class MiddlewareMakeCommand extends Command
{
    use WithGeneratorStub;

    /**
     * The name of argument name.
     *
     * @var string
     */
    protected $argumentName = 'name';

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'module:make-middleware';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new middleware class for the specified module.';
   
    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the command.'],
            ['module', InputArgument::OPTIONAL, 'The name of module will be used.'],
        ];
    }
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->bootWithGeneratorStub();
        $this->GeneratorFileByStub('middleware');
        return 0;
    }
}
