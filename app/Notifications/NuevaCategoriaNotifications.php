<?php

namespace App\Notifications;

use App\Categoria;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackMessage;

class NuevaCategoriaNotifications extends Notification
{
    use Queueable;

    protected $categoria;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'slack'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Se agreo una nueva categoria: ' . $this->categoria->name)
            ->action($this->categoria->name, url('/' . $this->categoria->name))
            ->line('Información de la categoria:')
            ->markdown('mail.nuevaCategoria', [
                'slot' => 'Pagina de prueba',
                'url' => 'local.laravel-a.com',
                'categoria' => $this->categoria
            ])
            ->line('Gracias por su visita')
            ;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

     /**
     * Get the Slack representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\SlackMessage
     */
    public function toSlack($notifiable)
    {
        $categoria = $this->categoria;
        return (new SlackMessage)
            ->success()
            ->content("Se creo una nueva categoria")
            ->attachment(function ($attachment) use ($categoria) {
                $attachment->title($categoria->name, route('slack', $categoria->id))
                    ->content($categoria->comment);
            });
    }
}
