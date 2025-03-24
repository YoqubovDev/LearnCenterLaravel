<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Components\Layout\{Locales, Notifications, Profile, Search};
use MoonShine\UI\Components\{Breadcrumbs,
    Layout\Layout,
 };
use App\MoonShine\Resources\PostCategoryResource;
use App\MoonShine\Resources\PostResource;
use App\MoonShine\Resources\PaymentResource;
use App\MoonShine\Resources\HomeworkResource;
use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\ProductVolumesResource;
use App\MoonShine\Resources\ProductsResource;
use App\MoonShine\Resources\UserResource;
use App\MoonShine\Resources\RoleResource;
use MoonShine\MenuManager\MenuGroup;
use MoonShine\MenuManager\MenuItem;
use Sweet1s\MoonshineRBAC\Resource\PermissionResource;
use App\MoonShine\Resources\UserResultResource;
use App\MoonShine\Resources\LessonResource;
use App\MoonShine\Resources\VideUpLoadResource;
use App\MoonShine\Resources\ImageResource;

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
            MenuGroup::make('System', [
                MenuItem::make('Admins', MoonShineUserResource::class),
                MenuItem::make('Roles', MoonShineUserRoleResource::class),
                MenuItem::make('Permissions', PermissionResource::class),
            ]),

            MenuGroup::make('Posts', [
                MenuItem::make('Post Categories', PostCategoryResource::class),
                MenuItem::make('Posts', PostResource::class),
            ]),
            MenuGroup::make('Lessons',[
                MenuItem::make('Categories', CategoryResource::class),
                MenuItem::make('Images', ImageResource::class),
                MenuItem::make('Lessons', LessonResource::class),
                MenuItem::make('VideUpLoads', VideUpLoadResource::class),
            ]),
            MenuGroup::make('Students', [
                MenuGroup::make("Data's", [
                    MenuItem::make('Users', UserResource::class),
                ]),
                MenuGroup::make('Homework and Result', [
                    MenuItem::make('Homework', HomeworkResource::class),
                    MenuItem::make('Results', UserResultResource::class),
                ]),
            ]),
            MenuItem::make('Payments', PaymentResource::class),

        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

         $colorManager->primary('#4c51bf');
            $colorManager->secondary('#f3f4f6');
    }

    public function build(): Layout
    {
        return parent::build();
    }
}
