<?php $this->beginContent('@app/views/layouts/main.php'); ?>

    <div class="row">
        <div class="col-md-3">
            <div class="widget">
                <div class="widget-content">
                    <div class="widget-content__social-icons">
                        <a href="https://youtube.com/dignityinside" target="_blank" rel="nofollow" title="Канал на YouTube"><i class="fa fa-youtube"></i></a>
                        <a href="https://t.me/phpland_chat" target="_blank" rel="nofollow" title="Telegram чат"><i class="fa fa-telegram"></i></a>
                        <a href="https://vk.com/phpland" target="_blank" rel="nofollow" title="Группа ВК"><i class="fa fa-vk"></i></a>
                        <a href="https://mastodon.social/@phplandorg" rel="me nofollow" target="_blank" title="Mastodon"><i class="fab fa-mastodon"></i></a>
                        <a href="https://phpland.slack.com" target="_blank" rel="nofollow" title="Slack"><i class="fa fa-slack"></i></a>
                        <a href="https://discord.gg/PPtFTZh" target="_blank" rel="nofollow" title="Discord"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget">
                <div class="widget-title">
                    <i class="fa fa-globe widget-icon"></i> Планета
                </div>
                <div class="widget-content">
                    <p>Наша планета собирает интересные статьи из различных источников и объединяет их в одну ленту. Которую можно читать на нашем сайте.</p>
                    <p><?= \yii\helpers\Html::a('Подробнее »', '/planet')?></p>
                </div>
            </div>
            <div class="widget">
                <div class="widget-title">
                    <i class="fa fa-users widget-icon""></i> Сообщество
                </div>
                <div class="widget-content">
                    <p>Наше сообщество славится своим дружелюбием и стремлением делиться приобретённым опытом с
                        новыми веб-разработчиками и пользователями ОС Linux.</p>
                    <p>Любой желающий может совершенно свободно
                        зарегистрироваться на нашем сайте и принять активное участия в жизни сообщества!</p>
                    <p><?= \yii\helpers\Html::a('Подробнее »', '/about')?></p>
                </div>
            </div>
            <div class="widget">
                <div class="widget-title">
                    <i class="fas fa-donate widget-icon"></i> Donate
                </div>
                <div class="widget-content">
                    <p>Мы с удовольствием и благодарностью примем любое пожертвования.</p>
                    <p><?= \yii\helpers\Html::a('Подробнее »', '/donate')?></p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <?= $content; ?>
        </div>
    </div>

<?php $this->endContent(); ?>