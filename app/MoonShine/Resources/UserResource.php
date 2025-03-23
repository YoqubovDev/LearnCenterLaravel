<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\AddStudentOrTeacher;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\PasswordRepeat;
use MoonShine\UI\Fields\Phone;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<AddStudentOrTeacher>
 */
class UserResource extends ModelResource
{
    protected string $model = User::class;

    protected string $title = 'Add Users Register';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('First Name'),
            Text::make('Last Name')->nullable(),
            Phone::make('Student Phone Number'),
            Select::make('Role')->options([
                'Teacher'=>'Teacher',
                'Student'=>'Student',
                'Admin'=>'Admin',
                'SMM'=>'SMM',
            ])->nullable(),
            Select::make('Status')->sortable()
            ->options([
                'Active'=>'Active',
                'No Active'=>'No Active',
            ])->nullable(),
            Text::make('Studying')->nullable(),
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
                Phone::make('Student Phone Number'),
                Select::make('Role')->options([
                    'Teacher'=>'Teacher',
                    'Student'=>'Student',
                    'Admin'=>'Admin',
                    'SMM'=>'SMM',
                ])->nullable(),
                Select::make('Status')->sortable()
                ->options([
                    'Active'=>'Active',
                    'No Active'=>'No Active',
                ])->nullable(),
                Text::make('Studying')->nullable(),
                Text::make('Password'),
                PasswordRepeat::make('Password repeat', 'password_repeat'),
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
            Phone::make('Student Phone Number'),
            Select::make('Role')->options([
                'Teacher'=>'Teacher',
                'Student'=>'Student',
                'Admin'=>'Admin',
                'SMM'=>'SMM',
            ])->nullable(),
            Select::make('Status')->sortable()
            ->options([
                'Active'=>'Active',
                'No Active'=>'No Active',
            ])->nullable(),
            Text::make('Studying')->nullable(),
            Text::make('Password'),
            Text::make('Address')->nullable(),

        ];
    }

    /**
     * @param AddStudentOrTeacher $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'first_name' => ['required', 'string'],
            'last_name' => ['nullable', 'string'],
            'student_phone_number' => ['nullable', 'string'],
            'password' => ['required', 'string'],
            'address' => ['nullable', 'string'],
            'role' => ['required', 'string'],
            'status' => ['required', 'string'],
            'studying' => ['nullable', 'string'],
        ];
    }
}
