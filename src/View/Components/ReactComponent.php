<?php

namespace BrokerChooser\InertiaReactComponentsInBlade\View\Components;

use BrokerChooser\InertiaReactComponentsInBlade\InertiaReactComponentsInBladeServiceProvider;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

abstract class ReactComponent extends Component
{
    public readonly string $reactComponentName;

    public function __construct(
        /** @var Arrayable<string, mixed>|array<string, mixed> */
        public $props = [],
    ) {
        $this->reactComponentName = $this->getReactComponentName();
    }

    final public function render(): View|string
    {
        if (! $this->shouldRender()) {
            return '';
        }

        return view(InertiaReactComponentsInBladeServiceProvider::NAMESPACE.'::react-component');
    }

    protected function getReactComponentName(): string
    {
        return class_basename($this);
    }
}
