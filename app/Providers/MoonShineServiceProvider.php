<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\PostCategoryResource;
use App\MoonShine\Resources\PostResource;
use App\MoonShine\Resources\UserResource;
use App\MoonShine\Resources\PaymentResource;
use App\MoonShine\Resources\HomeworkResource;
use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\ProductVolumesResource;
use App\MoonShine\Resources\ProductsResource;
use App\MoonShine\Resources\UserResultResource;
use App\MoonShine\Resources\LessonResource;
use App\MoonShine\Resources\VideUpLoadResource;
use App\MoonShine\Resources\ImageResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        // $config->authEnable();

        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                PostCategoryResource::class,
                PostResource::class,
                UserResource::class,
                PaymentResource::class,
                HomeworkResource::class,
                CategoryResource::class,
                ProductVolumesResource::class,
                ProductsResource::class,
                UserResultResource::class,
                LessonResource::class,
                VideUpLoadResource::class,
                ImageResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ])
        ;
    }
}
