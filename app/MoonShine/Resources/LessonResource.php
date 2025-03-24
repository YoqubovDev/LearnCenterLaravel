<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lesson;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Lesson>
 */
class LessonResource extends ModelResource
{
    protected string $model = Lesson::class;

    protected string $title = 'Lessons';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Title'),
            TinyMce::make('Description'),
            BelongsTo::make('Category',
            'lessonCategory',
            fn($item)=>"$item->id. $item->name",
            CategoryResource::class)->afterFill(
                fn($field)=>$field->setColumn('category_id')->nullable(),
            )
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
                Text::make('Title'),
                TinyMce::make('Description'),
                BelongsTo::make('Category',
                'lessonCategory',
                fn($item)=>"$item->id. $item->name",
                CategoryResource::class)->afterFill(
                    fn($field)=>$field->setColumn('category_id')->nullable(),
                )
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
            Text::make('Title'),
            TinyMce::make('Description'),
            BelongsTo::make('Category',
            'lessonCategory',
            fn($item)=>"$item->id. $item->name",
            CategoryResource::class)->afterFill(
                fn($field)=>$field->setColumn('category_id')->nullable(),
            )
        ];
    }

    /**
     * @param Lesson $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
