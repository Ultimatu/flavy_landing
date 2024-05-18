<?php

namespace App\Filament\Resources\VisitorResource\Widgets;

use App\Models\Visitor;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class VisitorStats extends BaseWidget
{
    protected function getStats(): array
    {
        dd($this->getVisitorByDay());
        return [
            Stat::make('Total Visiteurs Unique', Visitor::count())
                ->icon('heroicon-s-eye')
                ->chartColor('primary')
                //chart take float array, sum visitor by day
                ->chart([4, 5, 6, 7, 8, 9, 10])
                ->description('Nombre total de visiteurs uniques')
                ->descriptionIcon('heroicon-s-information-circle')
                ->descriptionColor('info')
                ->color('primary'),

            Stat::make('Total Visites', Visitor::sum('visits'))
                ->icon('heroicon-s-eye')
                ->description('Nombre total de visites sur le site')
                ->descriptionIcon('heroicon-s-information-circle')
                ->descriptionColor('info')
                ->color('success'),
            //this year
            Stat::make('Visiteurs Cette Année', Visitor::whereYear('created_at', now())->count())
                ->icon('heroicon-s-eye')
                ->description('Nombre de visiteurs cette année')
                ->descriptionIcon('heroicon-s-information-circle')
                ->descriptionColor('info')
                ->color('danger'),
            // this month 
            Stat::make('Visiteurs Ce Mois', Visitor::whereMonth('created_at', now())->count())
                ->icon('heroicon-s-eye')
                ->description('Nombre de visiteurs ce mois')
                ->descriptionIcon('heroicon-s-information-circle')
                ->descriptionColor('danger')
                ->color('danger'),

            // this week
            Stat::make('Visiteurs Cette Semaine', Visitor::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count())
                ->icon('heroicon-s-eye')
                ->description('Nombre de visiteurs cette semaine')
                ->descriptionIcon('heroicon-s-information-circle')
                ->descriptionColor('warning')
                ->color('warning'),
            // today
            Stat::make('Visiteurs Aujourd\'hui', Visitor::whereDate('created_at', now())->count())
                ->icon('heroicon-s-eye')
                ->description('Nombre de visiteurs aujourd\'hui')
                ->descriptionIcon('heroicon-s-information-circle')
                ->descriptionColor('warning')
                ->color('warning'),
        ];
    }


    protected function getVisitorByDay(): array
    {
        $visitorByDay = Visitor::selectRaw('DATE(created_at) as date, count(id) as total')
            ->groupBy('date')
            ->get()
            ->pluck('total', 'date')
            ->toArray();
        return $visitorByDay;
    }
}
