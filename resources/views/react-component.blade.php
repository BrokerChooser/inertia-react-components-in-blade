@php
    /** @var string $reactComponentName */
    /** @var \Illuminate\Contracts\Support\Arrayable<string, mixed>|array<string, mixed> $props */

    \Inertia\Inertia::setRootView(\BrokerChooser\InertiaReactComponentsInBlade\InertiaReactComponentsInBladeServiceProvider::NAMESPACE.'::react-component-ssr');
@endphp

{!! \Inertia\Inertia::render($reactComponentName, $props)->toResponse(request())->getContent() !!}
