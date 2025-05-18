<?php

namespace App\Filament\Widgets;

use App\Models\Member;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Members', Member::count())
            ->description('microgels team members')
            ->descriptionIcon('heroicon-m-arrow-trending-down'),
            Stat::make('Total Blog posts', '21')
                ->description('latest post')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Total blogs comment', '12')
                ->description('post interactions')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}
