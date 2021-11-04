<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/images/avatar2.jpeg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Boshqaruv', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Menyu',
                        'icon' => 'bars',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Bosh menyu', 'icon' => 'th-list', 'url' => ['/cms/menu/index?slug=main']],
                            ['label' => 'Pastki menyu', 'icon' => 'th-list', 'url' => ['/cms/menu/index?slug=footer-main']],
                            ['label' => 'Bosh sahifadagi kartochkalar', 'icon' => 'th-large', 'url' => ['/cms/items/index?slug=main-cards']],
                            ['label' => 'Interaktiv xizmatlar', 'icon' => 'th', 'url' => ['/cms/items/index?slug=interactive-services']],
                        ]
                    ],
                    ['label' => '', 'options' => ['class' => 'header']],
                    [ 
                        'label' => 'Qabul komissiyasi',
                        'icon' => 'bars',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Mavsumlar', 'icon' => 'users', 'url' => ['/cms/options/index?slug=admission']],
                            ['label' => 'Sahifalar', 'icon' => 'font', 'url' => ['/cms/items/index?slug=admission-pages']],
                        ]
                    ],
                    ['label' => '', 'options' => ['class' => 'header']],

                    ['label' => 'Sayt bo`limlari', 'icon' => 'list-alt', 'url' => ['/cms/options/index?slug=site-sections']],
                    ['label' => 'Sahifalar', 'icon' => 'font', 'url' => ['/cms/items/index?slug=pages']],
                    ['label' => '', 'options' => ['class' => 'header']],

                    [
                        'label' => 'Qoldirilgan fikrlar',
                        'icon' => 'envelope-o', 'url' => ['/contacts'],
                    ],

                    ['label' => 'Blog', 'icon' => 'edit', 'url' => ['/cms/items/index?slug=blog']],
                    ['label' => 'Fotogalereya', 'icon' => 'image', 'url' => ['/cms/items/index?slug=photo-gallery']],
                    ['label' => 'Video galereya', 'icon' => 'youtube-play', 'url' => ['/cms/items/index?slug=video-gallery']],
                    ['label' => '', 'options' => ['class' => 'header']],

                    ['label' => 'Fakultetlar', 'icon' => 'list', 'url' => ['/cms/options/index?slug=faculties']],
                    ['label' => 'Kafedralar', 'icon' => 'list', 'url' => ['/cms/items/index?slug=cathedra']],
                    ['label' => 'Xodimlar', 'icon' => 'user', 'url' => ['/cms/items/index?slug=staff']],
                    ['label' => '', 'options' => ['class' => 'header']],

                    [
                        'label' => 'Boks',
                        'icon' => 'bars',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Video gallereya', 'icon' => 'th-list', 'url' => ['/cms/items/index?slug=boxing-videogallery']],
                            ['label' => 'Fayllar', 'icon' => 'th-list', 'url' => ['/cms/items/view?id=228&slug=pages']],
                        ]
                    ],
                    ['label' => 'Davlat ramzlari', 'icon' => 'flag', 'url' => ['/cms/items/index?slug=state-symbols']],
                    ['label' => 'Hamkorlar', 'icon' => 'tags', 'url' => ['/cms/items/index?slug=partners']],
                    ['label' => 'Axborot resurslari', 'icon' => 'link', 'url' => ['/cms/items/index?slug=resources']],
                    ['label' => 'Qo`shimcha ma`lumotlar', 'icon' => 'plus-circle', 'url' => ['/cms/unit-categories/unit?slug=settings']],
                    ['label' => 'Raqamli statistika', 'icon' => 'square', 'url' => ['/cms/unit-categories/unit?slug=counts']],
                    ['label' => 'Fayllar', 'icon' => 'file', 'url' => ['/cms/file']],
                ],
            ]
        ) ?>
    </section>
</aside>
