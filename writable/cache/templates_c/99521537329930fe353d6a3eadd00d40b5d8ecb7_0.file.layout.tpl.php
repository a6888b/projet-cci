<?php
/* Smarty version 4.0.4, created on 2022-02-23 03:47:10
  from '/var/www/html/ardis/app/Views/base/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6216029eb153c1_79044910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99521537329930fe353d6a3eadd00d40b5d8ecb7' => 
    array (
      0 => '/var/www/html/ardis/app/Views/base/layout.tpl',
      1 => 1645609418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/header.tpl' => 1,
    'file:base/footer.tpl' => 1,
  ),
),false)) {
function content_6216029eb153c1_79044910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:base/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8557925866216029eb14b37_63148079', 'content');
?>


<?php $_smarty_tpl->_subTemplateRender('file:base/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'content'} */
class Block_8557925866216029eb14b37_63148079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8557925866216029eb14b37_63148079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
