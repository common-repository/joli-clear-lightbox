<div class="joli-admin-widget-wrap">

    <?php
    //custom settings
    $data = get_post_meta($post->ID, $setting_name, true);
    // var_dump($data);
    ?>
    <!-- OPTION Disable-->
    <input type="checkbox" name="<?= $setting_name; ?>[disable_lb]" id="<?= $setting_name; ?>[disable_lb]" <?= isset($data['disable_lb']) ? ($data['disable_lb'] == 'on' ? 'checked' : '') : ''; ?>>
    <label for="<?= $setting_name; ?>[disable_lb]">
        <?= esc_html__('Disable Joli CLEAR Lightbox', 'joli-clb') ?>
    </label>
    <p class="description">
        <?= esc_html__('This will deactivate the lightbox on this post.', 'joli-clb') ?>
    </p>
    <!-- /OPTION -->

    <!-- OPTION Enable-->
    <input type="checkbox" name="<?= $setting_name; ?>[enable_lb]" id="<?= $setting_name; ?>[enable_lb]" <?= isset($data['enable_lb']) ? ($data['enable_lb'] == 'on' ? 'checked' : '') : ''; ?>>
    <label for="<?= $setting_name; ?>[enable_lb]">
        <?= esc_html__('Enable Joli CLEAR Lightbox', 'joli-clb') ?>
    </label>
    <p class="description">
        <?= esc_html__('This will force the lightbox on this post.', 'joli-clb') ?>
    </p>
    <!-- /OPTION -->

    <!-- OPTION Theme-->
    <label for="<?= $setting_name; ?>[enable_lb]">
        <?= esc_html__('Theme', 'joli-clb') ?>
    </label>
    <select name="<?= $setting_name; ?>[theme]" id="<?= $setting_name; ?>[theme]">
        <option value="">[<?= __('Use global settings', 'joli-clb'); ?>]</option>
        <?php foreach ($themes as $key => $name) : ?>
            <option <?= isset($data['theme']) ? ($data['theme'] == $key ? ' selected' : '') : ''; ?> value="<?= $key; ?>"><?= $name; ?></option>
        <?php endforeach; ?>
    </select>
    <p class="description">
        <?= esc_html__('This will override the global theme option for this post.', 'joli-clb') ?>
    </p>
    <!-- /OPTION -->
</div>