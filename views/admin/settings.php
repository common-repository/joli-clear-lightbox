<div class="wrap">
    <h1 class="h1-title">Joli CLEAR Lightbox</h1>
    <?php settings_errors(); ?>

    <div class="jclb-wrap">
        <header class="joli-header">
            <div class="joli-logo">
                <a href="https://wpjoli.com" title="WPJoli" target="_blank">
                    <img src="<?= $logo_url; ?>" alt="">
                </a>
            </div>
            <div class="joli-nav">
                <?php foreach ($tabs as $id => $title) : ?>
                <a id="tab-<?= $id; ?>" class="joli-nav-item" href="#<?= $id; ?>">
                    <div class="joli-nav-title">
                        <?= $title; ?>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
            <div class="joli-version">
                <div class="joli-submit joli-submit-inline">
                    <div class="joli-save-info">
                        <?php submit_button(__('Save settings', 'joli-clb'), 'primary joli-do-submit', 'submit-menu', false); ?>
                    </div>
                </div>

                <p>v<?= $version; ?></p>
            </div>
        </header>
        <section class="joli-content">
            <form id="jclb-settings" method="post" action="options.php">
                <div class="tab-content joli-tab-content">
                    <p class="joli-title"><span class="joli-styling">Joli</span> CLEAR Lightbox</p>
                    <?php if( jclb_xy()->is_free_plan() ): ?>
                    <p class="joli-gopro-notice">   
                        <?= __('Want more cool features such as the', 'joli-clb'); ?> <strong><a target="_blank" href="<?= $pro_url_v; ?>"><?= __('AmbiBackground™', 'joli-clb'); ?></strong></a> ?
                        <a href="<?= sprintf('%sadmin.php?page=joli_clear_lightbox_settings-pricing', get_admin_url()); ?>" class="button button-primary"><?= __('Go Pro now', 'joli-clb'); ?></a>
                    </p>
                    <?php endif; ?>
                    <div class="joli-quickstart-notice">
                        <p>
                            <?= __('Quick start guide: How to have the CLEAR Lightbox to work?', 'joli-clb'); ?>
                            (<?= sprintf('<a href="%sadmin.php?page=joli_clear_lightbox_user_guide">', get_admin_url()) . __('View full documentation', 'joli-clb') . '</a>)'; ?>
                        </p>
                        <ol>
                            <li><?= __('The lightbox <strong>ONLY WORKS ON IMAGE LINKS</strong>. Static images will not show in the lightbox', 'joli-clb'); ?></li>
                            <li><?= __('Make sure images AND galleries are set to <strong>LINK TO "Media file"</strong>.', 'joli-clb'); ?></li>
                            <li><?= __('Adjust the settings and style to your liking. That\'s it!.', 'joli-clb'); ?></li>
                        </ol>
                    </div>
                    <div id="tab-settings" class="tab-pane">
                        <?php
                        $option_group = JCLB()::SLUG . '_settings';
                        settings_fields($option_group);
                        do_settings_sections($option_group);
                        ?>
                    </div>
                </div>
                <div class="joli-submit">
                    <div class="joli-save-info">
                        <div class="joli-info-text"><?= __('Changes unsaved', 'joli-clb'); ?></div>
                        <?php submit_button(__('Save settings', 'joli-clb'), 'primary', 'submit-float', false); ?>
                    </div>
                </div>
            </form>
        </section>
    </div>

</div>