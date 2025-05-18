<?php

namespace App\Filament\Resources\MemberResource\Pages;

use App\Filament\Resources\MemberResource;
use Filament\Actions;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ListRecords;

class ListMembers extends ListRecords
{
    protected static string $resource = MemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make('Add a member'),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
        ->schema([
            ImageEntry::make('avatar')
        ]);
    }
}
