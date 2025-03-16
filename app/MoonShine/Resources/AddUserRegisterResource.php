<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\AddUserRegister;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<AddUserRegister>
 */
class AddUserRegisterResource extends ModelResource
{
    protected string $model = AddUserRegister::class;

    protected string $title = 'AddUserRegisters';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('First Name'),
            Text::make('Last Name')->nullable(),
            Text::make('Phone Number'),
            Text::make('Password'),
            Text::make('Address')->nullable(),
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
                Text::make('First Name'),
                Text::make('Last Name')->nullable(),
                Text::make('Phone Number'),
                Text::make('Password'),
                Text::make('Address')->nullable(),

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
            Text::make('First Name'),
            Text::make('Last Name')->nullable(),
            Text::make('Phone Number'),
            Text::make('Password'),
            Text::make('Address')->nullable(),

        ];
    }

    /**
     * @param AddUserRegister $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'first_name' => ['required', 'string'],
            'last_name' => ['nullable', 'string'],
            'phone_number' => ['required', 'string'],
            'password' => ['required', 'string'],
            'address' => ['nullable', 'string'],
        ];
    }
}
