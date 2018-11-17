<?php $this->beginContent('@app/views/layouts/main.php'); ?>

    <div class="row">
        <div class="col-md-3">
            <div class="widget">
                <div class="widget-title">
                    Наше сообщество
                </div>
                <div class="widget-content">
                    <div class="widget-content__social-icons">
                        <a href="https://youtube.com/dignityinside" target="_blank" rel="nofollow" title="Канал на YouTube"><i class="fa fa-youtube"></i></a>
                        <a href="https://t.me/phpland" target="_blank" rel="nofollow" title="Telegram канал"><i class="fa fa-telegram"></i></a>
                        <a href="https://t.me/phpland_chat" target="_blank" rel="nofollow" title="Telegram чат"><i class="fa fa-users"></i></a>
                        <a href="https://phpland.slack.com" target="_blank" rel="nofollow" title="Slack"><i class="fa fa-slack"></i></a>
                        <a href="https://discord.gg/PPtFTZh" target="_blank" rel="nofollow" title="Slack"><i class="fab fa-discord"></i></a>
                        <a href="https://vk.com/phpland" target="_blank" rel="nofollow" title="Группа ВК"><i class="fa fa-vk"></i></a>
                        <a href="https://twitter.com/phplandorg" target="_blank" rel="nofollow" title="Микроблог в Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://mastodon.social/@phplandorg" rel="me nofollow" target="_blank"><i class="fab fa-mastodon"></i></a>
                        <a href="https://github.com/phpland" target="_blank" rel="nofollow" title="Исходный код на Github"><i class="fa fa-github"></i></a>
                        <a href="https://instagram.com/phpland" target="_blank" rel="nofollow" title="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget">
                <div class="widget-title">
                    Donate
                </div>
                <div class="widget-content">
                    <p>Я с удовольствием и благодарностью приму маленькие пожертвования.</p>
                    <p><?= \yii\helpers\Html::a('Подробнее »', '/donate')?></p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <?= $content; ?>
        </div>
    </div>

<?php $this->endContent(); ?>