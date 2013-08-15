<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.20437500 1376607271";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:85:"/data/web/virtuals/47669/virtual/www/subdom/daty/app/templates/Homepage/default.latte";i:2;i:1376607270;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"80a7e46 released on 2013-08-08";}}}?><?php

// source file: /data/web/virtuals/47669/virtual/www/subdom/daty/app/templates/Homepage/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '28w6s1vwmd')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb79b3cf2ddb_content')) { function _lb79b3cf2ddb_content($_l, $_args) { extract($_args)
?>	<table>
		<tr>
			<th>ID</th>
			<th>Okres</th>
			<th>IČ</th>
			<th>Datum narození</th>
			<th>Jméno</th>
			<th>Adresa</th>
			<th style="width:100px">Dlužné celkem</th>
		</tr>
<?php $iterations = 0; foreach ($rows as $row): ?>		<tr>
			<td><?php echo Nette\Templating\Helpers::escapeHtml($row['id'], ENT_NOQUOTES) ?></td>
			<td><?php echo Nette\Templating\Helpers::escapeHtml($row['region'], ENT_NOQUOTES) ?></td>
			<td><?php echo Nette\Templating\Helpers::escapeHtml($row['org_id'], ENT_NOQUOTES) ?></td>
<?php if ($row['birthday'] ==0): ?>			<td style="text-align:center;color:#ccc">---</td>
<?php endif ;if ($row['birthday'] > 0): ?>			<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($row['birthday'], 'j. n. Y'), ENT_NOQUOTES) ?></td>
<?php endif ?>
			<td><?php echo Nette\Templating\Helpers::escapeHtml($row['name'], ENT_NOQUOTES) ?></td>
			<td><?php echo Nette\Templating\Helpers::escapeHtml($row['address'], ENT_NOQUOTES) ?></td>
			<td><?php echo Nette\Templating\Helpers::escapeHtml($template->number($row['debt_total'], 0, ',', ' '), ENT_NOQUOTES) ?> Kč</td>
		</tr>
<?php $iterations++; endforeach ?>
	</table>

	<ul class="paginator">
<?php for ($page=1;$page<ceil($paginator->getItemCount()/$paginator->getItemsPerPage());$page++): ?>
		<li<?php if ($_l->tmp = array_filter(array(($page == $paginator->page) ? 'active':null))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>>
			<a href="<?php echo htmlSpecialChars($_control->link("Homepage:default", array($page))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($page, ENT_NOQUOTES) ?></a>
		</li>
<?php endfor ?>
	</ul>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 