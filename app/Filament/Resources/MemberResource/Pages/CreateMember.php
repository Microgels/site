<?php

namespace App\Filament\Resources\MemberResource\Pages;

use App\Filament\Resources\MemberResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Hash;

class CreateMember extends CreateRecord
{
    protected static string $resource = MemberResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $user = new User();
        $user->name = $data["name"];
        $user->email = $data["email"];
        $user->password = Hash::make('microgels@17');
        $user->avatar = $data['avatar'];
        $user->save();
        return $data;
    }
}
