<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\User;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class StatusChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $user = User::all();
        $usersPendente = $user->where('status_cliente_id', 4)->count();
        $usersAnalise = $user->where('status_cliente_id', 3)->count();
        $usersAprovado = $user->where('status_cliente_id', 1)->count();
        $usersNegado = $user->where('status_cliente_id', 2)->count();


        return Chartisan::build()
            ->labels(['Analise', 'Pendentes', 'Autorizado', 'Negado'])
            ->dataset('Sample', [$usersAnalise, $usersPendente, $usersAprovado, $usersNegado]);
    }
}
