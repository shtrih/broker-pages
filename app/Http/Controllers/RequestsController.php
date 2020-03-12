<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function index()
    {
        $requestTypes = \DB::table('requests as r')
            ->select(\DB::raw('count(*) as count_all, r.type'))
            ->addSelect([
                'count_day' => \DB::table('requests as r2')
                    ->selectRaw('count(*)')
                    ->whereRaw('r2.type = r.type and r2.created_at > DATE_SUB(NOW(), INTERVAL 1 DAY)'),
                'count_week' => \DB::table('requests as r2')
                    ->selectRaw('count(*)')
                    ->whereRaw('r2.type = r.type and r2.created_at > DATE_SUB(NOW(), INTERVAL 1 WEEK)'),
                'count_month' => \DB::table('requests as r2')
                    ->selectRaw('count(*)')
                    ->whereRaw('r2.type = r.type and r2.created_at > DATE_SUB(NOW(), INTERVAL 1 MONTH)'),
            ])
            ->groupBy(['type'])
            ->get()
        ;

        return view('requests.types', compact('requestTypes'));
    }

    public function requestsByType(string $type)
    {
        if (!in_array($type, \App\Models\Request::TYPES)) {
            abort(404);
        }

        $requests = \App\Models\Request::byType($type)->paginate(6);

        return view('requests.type', compact('requests', 'type'));
    }
}
