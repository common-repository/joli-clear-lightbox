<h2><?= __('How to set up an image so that it shows in the lightbox ?', 'joli-clb'); ?></h2>
<p><?= __('Normal images do not trigger the lightbox upon clicking them.', 'joli-clb'); ?></p>
<p><?= __('To display in the lightbox, an image must contain a link, here is how to do it:', 'joli-clb'); ?></p>
<p><?= __('The following example uses native Gutenberg Blocks', 'joli-clb'); ?></p>
<h3>1. <?= __('While editing a post/page, add a new Image Block', 'joli-clb'); ?></h3>
<p>><?= __('Then choose an image from your existing medias or upload a new one.', 'joli-clb'); ?></p>
<p><img src="<?= JCLB()->url('assets/admin/img/' . 'howto-image-01' . '.jpg') ?>" alt=""></p>

<h3>2. <?= __('Select an image, and optionally write a caption', 'joli-clb'); ?></h3>
<p><?= __('Click select to continue to the next step.', 'joli-clb'); ?></p>
<p><img src="<?= JCLB()->url('assets/admin/img/' . 'howto-image-02' . '.jpg') ?>" alt=""></p>

<h3>3. <?= __('Insert a link to your image', 'joli-clb'); ?></h3>
<p><?= __('To ensure the image will display in the lightbox, you need to link your image to "Media File".', 'joli-clb'); ?></p>
<p><?= __('DO NOT FORGET THIS STEP.', 'joli-clb'); ?></p>
<p><?= __('This link points to the original image, in its full size, regardless of its current display size.', 'joli-clb'); ?></p>
<p><img src="<?= JCLB()->url('assets/admin/img/' . 'howto-image-03' . '.jpg') ?>" alt=""></p>

<h3>3. <?= __('Make sure you have the following, and you\'re done!', 'joli-clb'); ?></h3>
<p><?= __('Save your post, that\'s it!', 'joli-clb'); ?></p>
<p><img src="<?= JCLB()->url('assets/admin/img/' . 'howto-image-04' . '.jpg') ?>" alt=""></p>

