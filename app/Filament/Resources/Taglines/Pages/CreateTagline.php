<?php

namespace App\Filament\Resources\Taglines\Pages;

use App\Filament\Resources\Taglines\TaglineResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTagline extends CreateRecord
{
    protected static string $resource = TaglineResource::class;
}
