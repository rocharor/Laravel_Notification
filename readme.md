<p>Projeto criado para demonstrar o funcionamento do sistema de notificação do Laravel</p>

<b>Arquivos alterados:</b>
<ul>
    <li>app/Notification/NotifyMyAccount</li>
    <li>database/migrations/create_notifications_table.php</li>
    <li>routes/web.php</li>
    <li>resources/views/welcome.blade.php</li>
</ul>

<p>Criado tabela notification para guardar as notificações geradas</p>

<p><b>Instalação</b></p>
<p>Rodar o php artisan make:notification xxxx (irá criar a estrutura de pastas (app/Notification) ).</p>
<p>Rodar o php artisan notification:table (irá criar a migrate de notificação).</p>
<p>Depois rodar o php artisan migrate (irá criar as tabelas).</p>

<p><b>Modo de usar DATABASE</b></p>
<p>Seta uma nova notificação => <b>Auth::user()->notify(new NotifyMyAccount('xxx'));</b> (Ao setar a notificação é chmado a classe criada e é chamado o método "toDatabase")</p>
<p>Marca notificação como lida => <b>Auth::user()->notifications[0]->markAsRead();</b> </p>
<p>Traz as notificações não lidas => <b>Auth::user()->unreadNotifications;</b> </p>
<p>Traz todas as notificações => <b>Auth::user()->notifications;</b> </p>

Link da informação ( https://laravel.com/docs/5.4/notifications#creating-notifications ).
