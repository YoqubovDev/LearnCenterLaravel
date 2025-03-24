<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Fields\Relationships\HasMany;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Category>
 */
class CategoryResource extends ModelResource
{
    protected string $model = Category::class;

    protected string $title = 'Categories';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Name'),
            BelongsTo::make('parent','parent',fn($item)=>"$item->id . $item->name",CategoryResource::class)->nullable(),
//            HasMany::make('Images','images')
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Name'),
                BelongsTo::make('parent','parent',fn($item)=>"$item->id . $item->name",CategoryResource::class)->nullable(),
//                HasMany::make('Images','images')
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Name'),
            BelongsTo::make('parent','parent',fn($item)=>"$item->id . $item->name",CategoryResource::class)->nullable(),
            HasMany::make('Lessons', 'lessons', fn($item)=>"$item->id. $item->name",
                LessonResource::class),
//            HasMany::make('Images','images')
        ];
    }

    /**
     * @param Category $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
