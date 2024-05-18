<?php

namespace App\Filament\Resources\VisitorResource\Widgets;

use App\Models\Visitor;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class VisitorStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Visiteurs Unique', Visitor::count())
                ->icon('heroicon-s-eye')
                ->chartColor('primary')
                //chart take float array, sum visitor by day
                ->chart($this->getVisitorByDay())
                ->description('Nombre total de visiteurs uniques')
                ->descriptionIcon('heroicon-s-information-circle')
                ->descriptionColor('info')
                ->color('primary'),

            Stat::make('Total Visites', Visitor::sum('visits'))
                ->icon('heroicon-s-eye')
                ->description('Nombre total de visites sur le site')
                ->chart($this->getVisitsByDay())
                ->descriptionIcon('heroicon-s-information-circle')
                ->descriptionColor('info')
                ->color('success'),
            //this year
            Stat::make('Visiteurs Cette Année', Visitor::whereYear('created_at', now())->count())
                ->icon('heroicon-s-eye')
                ->chart($this->getYearVisitorByMonth())
                ->description('Nombre de visiteurs cette année')
                ->descriptionIcon('heroicon-s-information-circle')
                ->descriptionColor('info')
                ->color('danger'),
            // this month 
            Stat::make('Visiteurs Ce Mois', Visitor::whereMonth('created_at', now())->count())
                ->icon('heroicon-s-eye')
                ->chart($this->getMonthVisitorByDay())
                ->description('Nombre de visiteurs ce mois')
                ->descriptionIcon('heroicon-s-information-circle')
                ->descriptionColor('danger')
                ->color('danger'),

            // this week
            Stat::make('Visiteurs Cette Semaine', Visitor::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count())
                ->icon('heroicon-s-eye')
                ->chart($this->getWeekVisitorByDay())
                ->description('Nombre de visiteurs cette semaine')
                ->descriptionIcon('heroicon-s-information-circle')
                ->descriptionColor('warning')
                ->color('warning'),
            // today
            Stat::make('Visiteurs Aujourd\'hui', Visitor::whereDate('created_at', now())->count())
                ->icon('heroicon-s-eye')
                ->chart($this->getTodayVisitor())
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
            ->pluck('total')
            ->toArray();
        return $visitorByDay;
    }

    protected function getVisitsByDay(): array
    {
        $visitsByDay = Visitor::selectRaw('DATE(created_at) as date, sum(visits) as total')
            ->groupBy('date')
            ->get()
            ->pluck('total')
            ->toArray();
        return $visitsByDay;
    }

    protected function getYearVisitorByMonth(): array
    {
        $visitorByMonth = Visitor::selectRaw('MONTH(created_at) as month, count(id) as total')
            ->whereYear('created_at', now())
            ->groupBy('month')
            ->get()
            ->pluck('total')
            ->toArray();
        return $visitorByMonth;
    }

    protected function getMonthVisitorByDay(): array
    {
        $visitorByDay = Visitor::selectRaw('DAY(created_at) as day, count(id) as total')
            ->whereMonth('created_at', now())
            ->groupBy('day')
            ->get()
            ->pluck('total')
            ->toArray();
        return $visitorByDay;
    }

    protected function getWeekVisitorByDay(): array
    {
        $visitorByDay = Visitor::selectRaw('DAY(created_at) as day, count(id) as total')
            ->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])
            ->groupBy('day')
            ->get()
            ->pluck('total')
            ->toArray();
        return $visitorByDay;
    }

    protected function getTodayVisitor(): array
    {
        $visitorByDay = Visitor::selectRaw('HOUR(created_at) as hour, count(id) as total')
            ->whereDate('created_at', now())
            ->groupBy('hour')
            ->get()
            ->pluck('total')
            ->toArray();
        return $visitorByDay;
    }

    protected function getYesterdayVisitor(): array
    {
        $visitorByDay = Visitor::selectRaw('HOUR(created_at) as hour, count(id) as total')
            ->whereDate('created_at', now()->subDay())
            ->groupBy('hour')
            ->get()
            ->pluck('total')
            ->toArray();
        return $visitorByDay;
    }

    protected function getThisMonthVisitor(): array
    {
        $visitorByDay = Visitor::selectRaw('DAY(created_at) as day, count(id) as total')
            ->whereMonth('created_at', now())
            ->groupBy('day')
            ->get()
            ->pluck('total')
            ->toArray();
        return $visitorByDay;
    }

    protected function getLastMonthVisitor(): array
    {
        $visitorByDay = Visitor::selectRaw('DAY(created_at) as day, count(id) as total')
            ->whereMonth('created_at', now()->subMonth())
            ->groupBy('day')
            ->get()
            ->pluck('total')
            ->toArray();
        return $visitorByDay;
    }

    protected function getThisYearVisitor(): array
    {
        $visitorByMonth = Visitor::selectRaw('MONTH(created_at) as month, count(id) as total')
            ->whereYear('created_at', now())
            ->groupBy('month')
            ->get()
            ->pluck('total')
            ->toArray();
        return $visitorByMonth;
    }

    protected function getLastYearVisitor(): array
    {
        $visitorByMonth = Visitor::selectRaw('MONTH(created_at) as month, count(id) as total')
            ->whereYear('created_at', now()->subYear())
            ->groupBy('month')
            ->get()
            ->pluck('total')
            ->toArray();
        return $visitorByMonth;
    }
}
