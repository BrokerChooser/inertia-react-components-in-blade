<?php

namespace BrokerChooser\InertiaReactComponentsInBlade\Commands;

use Illuminate\Console\Command;

class InertiaReactComponentsInBladeCommand extends Command
{
    public $signature = 'inertia-react-components-in-blade';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
