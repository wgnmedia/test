<?php
// $Id: node.tpl.php,v 1.4 2007/08/07 08:39:36 goba Exp $
?>
<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
<div class="box3">
<div class="tail-right">
<div class="corner-bottom-right">
<div class="corner-bottom-left">
<div class="corner-top-right">
<div class="corner-top-left">
<div class="wrapper">
<div class="indent">
	<?php if ($page == 0): ?>
        <div class="bg-h">
            <?php print $picture ?>
            <h1 class="title"><a href="<?php print $node_url ?>"><?php print $title ?></a></h1>
			<div class="submit"><span class="submitted"><?php print $submitted ?></span></div>
        </div>
    <?php endif; ?>
    <div class="taxonomy"><?php print $terms ?></div>
  
    <div class="content">
        <?php print $content ?>
    </div>
    <?php if ($links): ?>
        <div class="links-indent">
            <div class="bg-links">
                <div class="links-left">
                    <div class="links-right">
                        <div class="links"><?php print $links ?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>