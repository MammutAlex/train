<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 09.02.19
 * Time: 15:16
 */

namespace App\Http\Controllers;


use App\Http\Requests\TicketRequest;
use App\Ticket;
use App\Http\Resources\Ticket as TicketResource;

class TicketController extends Controller
{
    public function store(TicketRequest $request)
    {
        return new TicketResource(Ticket::create($request->all()));
    }

    public function show(Ticket $ticket)
    {
        return view('ticket', [
            'ticket' => $ticket
        ]);
    }
}
