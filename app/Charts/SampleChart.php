<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\User;
use Carbon\Carbon;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $user = User::all();
        $today = Carbon::now();
        $userCreated = $user->count();
        $userCreatedToday = DB::table('users')->whereDate('created_at', $today)->count();

        return Chartisan::build()
            ->labels(['Usuários Cadastro', 'Cadastrado no Dia', ])
            ->dataset('usuarios', [$userCreated, $userCreatedToday]);
    }
}
