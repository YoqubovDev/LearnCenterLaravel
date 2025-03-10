<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Faker\Provider\Text;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostCategory;

use MoonShine\Laravel\Fields\Relationships\HasMany;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;

/**
 * @extends ModelResource<PostCategory>
 */
class PostCategoryResource extends ModelResource
{
    protected string $model = PostCategory::class;

    protected string $title = 'Categories';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            \MoonShine\UI\Fields\Text::make('Title','name')->sortable(),
            Date::make('Created At','created_at')->sortable(),
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
                \MoonShine\UI\Fields\Text::make('Title','name'),
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
            \MoonShine\UI\Fields\Text::make('Title','name'),
            Date::make('Created At','created_at'),
            HasMany::make('Posts','posts',PostCategory::class)
        ];
    }

    /**
     * @param PostCategory $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
