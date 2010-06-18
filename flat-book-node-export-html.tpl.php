<?php
/**
 * @file flat-book-node-export-html.tpl.php
 * Default theme implementation for rendering a flattened node and 
 * its children.
 *
 * @see book-node-export-html.tpl.php
 * Where it is collected and printed out.
 *
 * Available variables:
 * - $flatten_depth: Depth at which this menu tree was flattened.
 * - $depth: Depth of the current node inside the outline.
 * - $title: Node title.
 * - $content: Node content.
 * - $children: All the child nodes recursively rendered through this file.
 *
 * @see template_preprocess_book_node_export_html()
 */
?>
<div id="booknode-<?php print $node->nid; ?>" class="section-<?php print $depth; ?>">
<h2 class="book-heading"><?php print $title; ?></h2>
<?php print $content; ?>
<div class="back-to-top"><a href="#content"><?php print t('Back to Top'); ?></a></div>
<?php print $children; ?>
</div>
