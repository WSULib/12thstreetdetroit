<?php
echo head(array(
    'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
    'bodyclass' => 'exhibits show'));
    $exhibitNavOption = get_theme_option('exhibits_nav');
?>

<?php if ($exhibitNavOption == 'full'): ?>
<nav id="exhibit-pages" class="full">
    <?php echo exhibit_builder_page_nav(); ?>
</nav>
<?php endif; ?>

<h1><span class="exhibit-page"><?php echo metadata('exhibit_page', 'title'); ?></h1>

<?php if (count(exhibit_builder_child_pages()) > 0 && $exhibitNavOption == 'full'): ?>
<nav id="exhibit-child-pages" class="secondary-nav">
    <?php echo exhibit_builder_child_page_nav(); ?>
</nav>
<?php endif; ?>

<div id="exhibit-blocks">
    <?php exhibit_builder_render_exhibit_page(); ?>
</div>

<div id="exhibit-page-navigation">
    <?php if ($prevLink = exhibit_builder_link_to_previous_page()): ?>
    <div id="exhibit-nav-prev">
    <?php echo $prevLink; ?>
    </div>
    <?php endif; ?>
    <?php if ($nextLink = exhibit_builder_link_to_next_page()): ?>
    <div id="exhibit-nav-next">
    <?php echo $nextLink; ?>
    </div>
    
    <!-- next exhibit -->
    <?php 
        else:

        // determine what exhibit is next
        if (strpos($_SERVER['REQUEST_URI'], "beforeunrest") !== false){
            $next_exhibit_title = "Part 2, July 23 - August 4, 1967 →";
            $next_exhibit_url = "/12thstreetdetroit/exhibits/show/july23_aug41967";
        }
        if (strpos($_SERVER['REQUEST_URI'], "july23_aug41967") !== false){
            $next_exhibit_title = "Part 3, Aftermath of Unrest: 1967-1974 →";
            $next_exhibit_url = "/12thstreetdetroit/exhibits/show/aftermathofunrest";
        }
        if (strpos($_SERVER['REQUEST_URI'], "aftermathofunrest") !== false){
            $next_exhibit_title = "Suggested Reading →";
            $next_exhibit_url = "/12thstreetdetroit/suggested_reading";
        }

    ?>

    <div id="next-exhibit">
        <a href="<?php echo $next_exhibit_url; ?>"><?php echo $next_exhibit_title; ?></a>
    </div>
    
    <?php endif; ?>
    <div id="exhibit-nav-up">
    <?php echo exhibit_builder_page_trail(); ?>
    </div>
</div>

<?php if ($exhibitNavOption == 'side'): ?>
<nav id="exhibit-pages" class="side">
    <h4><?php echo exhibit_builder_link_to_exhibit($exhibit); ?></h4>
    <?php echo exhibit_builder_page_tree($exhibit, $exhibit_page); ?>
</nav>
<?php endif; ?>

<?php echo foot(); ?>
