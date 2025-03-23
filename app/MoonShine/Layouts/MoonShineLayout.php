<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Components\Layout\{Locales, Notifications, Profile, Search};
use MoonShine\UI\Components\{Breadcrumbs,
    Components,
    Layout\Flash,
    Layout\Div,
    Layout\Body,
    Layout\Burger,
    Layout\Content,
    Layout\Footer,
    Layout\Head,
    Layout\Favicon,
    Layout\Assets,
    Layout\Meta,
    Layout\Header,
    Layout\Html,
    Layout\Layout,
    Layout\Logo,
    Layout\Menu,
    Layout\Sidebar,
    Layout\ThemeSwitcher,
    Layout\TopBar,
    Layout\Wrapper,
    When};
use App\MoonShine\Resources\PostCategoryResource;
use MoonShine\MenuManager\MenuItem;
use App\MoonShine\Resources\PostResource;
use App\MoonShine\Resources\PaymentResource;
use App\MoonShine\Resources\HomeworkResource;
use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\ProductVolumesResource;
use App\MoonShine\Resources\ProductsResource;
use App\MoonShine\Resources\UserResource;

final class MoonShineLayout extends AppLayout
{
    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            ...parent::menu(),
            MenuItem::make('Post Categories', PostCategoryResource::class),
            MenuItem::make('Posts', PostResource::class),
            MenuItem::make('Users', UserResource::class),
            MenuItem::make('Categories', CategoryResource::class),
            MenuItem::make('Payments', PaymentResource::class),
            MenuItem::make('Homework', HomeworkResource::class),
            MenuItem::make('ProductVolumes', ProductVolumesResource::class),
            MenuItem::make('Products', ProductsResource::class),
        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }

    public function build(): Layout
    {
        return parent::build();
    }
}
