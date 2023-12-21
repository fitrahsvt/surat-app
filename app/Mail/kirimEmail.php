<?php 
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class kirimEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $suratKeluar;

    /**
     * Create a new message instance.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return void
     */
    public function __construct($suratKeluar)
    {
        $this->suratKeluar = $suratKeluar;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $hasil = $this->suratKeluar;
        return $this->view('mail.kirimEmail', compact('hasil'));
    }
}

?>