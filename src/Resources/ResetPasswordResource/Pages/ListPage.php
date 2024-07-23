<?php

namespace Moox\Security\Resources\ResetPasswordResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Moox\Security\Models\Security;
use Moox\Security\Resources\ResetPasswordResource;
use Moox\Security\Resources\ResetPasswordResource\Widgets\ResetPasswordWidgets;

class ListPage extends ListRecords
{
    public static string $resource = ResetPasswordResource::class;

    public function getActions(): array
    {
        return [];
    }

    public function getHeaderWidgets(): array
    {
        return [
            ResetPasswordWidgets::class,
        ];
    }

    public function getTitle(): string
    {
        return __('security::translations.title');
    }

    //    protected function getHeaderActions(): array
    //    {
    //        return [
    //            CreateAction::make()
    //                ->using(function (array $data, string $model): Security {
    //                    return $model::create($data);
    //                }),
    //        ];
    //    }
}
