<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\Candidate;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AlertOfNewsCandidates extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $count_today = Candidate::where('created_at','>=', date('Y-m-d'))->count();
        return $this->from('mail@example.com', 'Mailtrap')
            ->subject('Relatório de Novos candidatos')
            ->markdown('mails.cand_notify')
            ->with([
                'count' => $count_today,
                'link' => 'http://localhost:8001/admin/candidates'
            ]);
    }
}
