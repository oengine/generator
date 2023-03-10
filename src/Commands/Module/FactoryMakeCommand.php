<?php

namespace OEngine\Generator\Commands\Module;

use Illuminate\Console\Command;
use OEngine\Generator\Traits\WithGeneratorStub;
use Symfony\Component\Console\Input\InputArgument;

class FactoryMakeCommand extends Command
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
    protected $name = 'module:make-factory';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new model factory for the specified module.';

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the model.'],
            ['module', InputArgument::OPTIONAL, 'The name of module will be used.'],
        ];
    }

    public function handle(): int
    {
        $this->bootWithGeneratorStub();
        $this->GeneratorFileByStub('factory');
        return 0;
    }
    /**
     * Get replacement for $MODEL_NAMESPACE$.
     *
     * @return string
     */
    protected function getModelNamespaceReplacement()
    {
        return $this->getNamespaceByPath('model');
    }
}
