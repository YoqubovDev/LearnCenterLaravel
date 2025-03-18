<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Homework;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\File;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Homework>
 */
class HomeworkResource extends ModelResource
{
    protected string $model = Homework::class;

    protected string $title = 'Homework';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Title'),
            Text::make('Description'),
            File::make('File')
            ->disk('public')
            ->allowedExtensions(['pdf','txt','word','jpg'])->nullable(),
            Date::make('Dead Line')
            ->withTime(),
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
                Text::make('Description'),
                File::make('File')
                ->disk('public')
                ->allowedExtensions(['pdf','txt','word','jp->$this->nullable()g']),
                Date::make('Dead Line')
                ->withTime(),
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
            Text::make('Description'),
            File::make('File')
            ->disk('public')
            ->allowedExtensions(['pdf','txt','word','jpg'])->nullable(),
            Date::make('Dead Line')
            ->withTime(),
        ];
    }

    /**
     * @param Homework $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'file' => ['nullable', 'file', 'mimes:pdf,txt,doc,docx,jpg', 'max:10240'],
        ];
    }
}
