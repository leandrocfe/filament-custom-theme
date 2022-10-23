<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\DB;

class UserOverview extends BaseWidget
{
    protected static ?string $pollingInterval = null;

    protected function getCards(): array
    {
        $users = User::select(DB::raw('
            count(*) as total,
            SUM(CASE WHEN active = 1 THEN 1 ELSE 0 END) as active,
            SUM(CASE WHEN is_admin = 1 THEN 1 ELSE 0 END) as admin
        '))->first();

        return [

            Card::make(__('Total users'), $users->total)
                ->description(__('Total users'))
                ->chart([1, 1])
                ->color('primary'),

            Card::make(__('Active users'), $users->active)
                ->description(__('Active users'))
                ->chart([1, 1])
                ->color('success'),

            Card::make(__('Admin users'), $users->admin)
                ->description(__('Admin users'))
                ->chart([1, 1])
                ->color('secondary'),
        ];
    }
}
