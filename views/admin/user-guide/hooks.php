<h2><?= __('Safely adding content to the table of contents using the hooks', 'joli-clb'); ?></h2>
<p><?= __('Because of the way Joli CLEAR Lightbox has been designed, you must use the "joli-div" class to any of the content you may want to add or it will break the normal behaviour of the plugin.', 'joli-clb'); ?></p>

<h4>Do:</h4>
<code style="color: darkgreen;"><?= esc_html('<div class="joli-div">My content</div>') ?></code>

<h4>Don't:</h4>
<code style="color: red;"><?= esc_html('<div>My content</div>') ?></code>

<h2><?= __('Hooks', 'joli-clb'); ?></h2>
<p><?= __('Joli CLEAR Lightbox is developer friendly and allows you to hook onto it.', 'joli-clb'); ?></p>
<p><?= __('You can use the following hooks:', 'joli-clb'); ?></p>

<h3><?= __('Actions:', 'joli-clb'); ?></h3>
<ul>
    <li><code>joli_clear_lightbox_before_table_of_contents</code></li>
    <li><code>joli_clear_lightbox_before_title</code></li>
    <li><code>joli_clear_lightbox_after_title</code></li>
    <li><code>joli_clear_lightbox_after_headings</code></li>
    <li><code>joli_clear_lightbox_after_table_of_contents</code></li>
</ul>

<p><img src="<?= JCLB()->url('assets/admin/img/' . 'wpjoli-joli-clb-hooks-action' . '.png') ?>" alt=""></p>

<h4><?= __('Example: adding a horizontal bar after the title', 'joli-clb'); ?></h4>
<p><?= __('Copy & paste the following code into your theme\'s function.php file:', 'joli-clb'); ?></p>
<p>
    <pre>
        add_action( 'joli_clear_lightbox_after_title', 'echo_hr' );
        
        function echo_hr(){
            echo <?= esc_html('<hr class="joli-div">') ?>;
        }
    </pre>
</p>
<p class="warning">Do not forget to add the "joli-div" class to your content</p>

<h3><?= __('Filters:', 'joli-clb'); ?></h3>
<p><?= __('Use the following filters to customize the Table of contents toggle button', 'joli-clb'); ?></p>

<h4><?= __('Customize the "expand" button toggle', 'joli-clb'); ?></h4>
<p><?= __('Copy & paste the following code into your theme\'s function.php file:', 'joli-clb'); ?></p>
<code><?= esc_html("add_filter('joli_clear_lightbox_expand_str', function(){ return '>';});") ?></code>
<p><?= __('If you are use Font awesome, you can use the icons like so:', 'joli-clb'); ?></p>
<code><?= esc_html("add_filter('joli_clear_lightbox_expand_str', function(){ return '<i class=\"fa fa-caret-down\"></i>';});") ?></code>

<h4><?= __('Customize the "collapse" button toggle', 'joli-clb'); ?></h4>
<p><?= __('Copy & paste the following code into your theme\'s function.php file:', 'joli-clb'); ?></p>
<code><?= esc_html("add_filter('joli_clear_lightbox_collapse_str', function(){ return '˅';});") ?></code>
<p><?= __('If you are use Font awesome, you can use the icons like so:', 'joli-clb'); ?></p>
<code><?= esc_html("add_filter('joli_clear_lightbox_collapse_str', function(){ return '<i class=\"fa fa-caret-right\"></i>';});") ?></code>

<hr>
<h4><?= __('Filter out the headings input', 'joli-clb'); ?></h4>
<p><?= __('Before processing the TOC, an array of headings is passed after the content has been analyzed', 'joli-clb'); ?></p>
<p><?= __('This array looks like as follows and can be modified easily to meet your needs', 'joli-clb'); ?></p>
<pre>
Array
(
    [0] => Array
        (
            [id] => my-title-1
            [title] => My title 1
            [icon] => 
            [depth] => 2
        )

    [1] => Array
        (
            [id] => my-title-2
            [title] => My title 2 
            [icon] => 
            [depth] => 3
        )
        ...
)
</pre>
<p><?= __('Copy & paste the following code into your theme\'s function.php file:', 'joli-clb'); ?></p>
<h5><?= __('Ex 1: Removing every first heading', 'joli-clb'); ?></h5>
<pre>
add_filter('joli_clear_lightbox_headings', 'filter_headings', 10, 2);

function filter_headings( $headings ){ 
    //Removes the first element
    array_shift($headings);
    return $headings;
}
</pre>

<h5><?= __('Ex 2: Adds " - AWESOME!" as a suffix for every h2 title', 'joli-clb'); ?></h5>
<pre>
add_filter('joli_clear_lightbox_headings', 'filter_headings', 10, 2);

function filter_headings( $headings ){ 
    //Adds ' - AWESOME!' as a prefix for every h2 title
    array_shift($headings);
    $headings = array_map(function($heading){
        //Target H2s only
        if ($heading['depth'] == 2){
            $heading['title'] .= ' - AWESOME!';
        }
        return $heading;
    }, $headings);
    
    return $headings;
}
</pre>
