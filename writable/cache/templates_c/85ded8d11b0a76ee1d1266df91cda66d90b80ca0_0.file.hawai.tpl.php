<?php
/* Smarty version 4.0.4, created on 2022-02-21 03:51:06
  from 'C:\MAMP\htdocs\ardis\app\Views\hawai.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6213608a0ab8b7_99056674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85ded8d11b0a76ee1d1266df91cda66d90b80ca0' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ardis\\app\\Views\\hawai.tpl',
      1 => 1645437062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6213608a0ab8b7_99056674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12797412306213608a0a0e06_34265137', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_12797412306213608a0a0e06_34265137 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12797412306213608a0a0e06_34265137',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<article>
    <div class="container-fluid ">
        <img class="image_<?php echo $_smarty_tpl->tpl_vars['hotel_info']->value[0]->hotel_nom;?>
" src="<?php echo (base_url('assets/Images/nos_hotels')).('/');
echo $_smarty_tpl->tpl_vars['hotel_info']->value[0]->hotel_image;?>
" alt="image <?php echo $_smarty_tpl->tpl_vars['hotel_info']->value[0]->hotel_nom;?>
 hotel">
                <div class="row ">
            <h1>Hotel <?php echo $_smarty_tpl->tpl_vars['hotel_info']->value[0]->hotel_nom;?>
</h1>
            <i class="fas fa-map-marker-alt gps_icone "></i>
            <p class="city_hotel "><?php echo $_smarty_tpl->tpl_vars['hotel_info']->value[0]->hotel_pays;?>
/ <?php echo $_smarty_tpl->tpl_vars['hotel_info']->value[0]->hotel_ville;?>
</p>
            <div class="start ">
                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['hotel_info']->value[0]->hotel_note+1 - (1) : 1-($_smarty_tpl->tpl_vars['hotel_info']->value[0]->hotel_note)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                    <i class="fas fa-star "></i>
                <?php }
}
?>
            </div>
            <div class="localisation_hotel ">
            <p><?php echo $_smarty_tpl->tpl_vars['hotel_info']->value[0]->hotel_contenue;?>
</p>
            <p>A partir de <span style='color: #ff00aa;'><?php echo $_smarty_tpl->tpl_vars['hotel_info']->value[0]->hotel_price;?>
€</span></p>
            <a href="<?php echo base_url('galerie_photo');?>
" class=" btn galerie_photo ">Galerie_photo</a>
        </div>
        
        <div class="presentation ">
            <p>Pour les activités, nous vous proposerons du ski et de la luge et une visite guide dû la chocolaterie Lindt.</p>
            <a href="<?php echo base_url('reserver');?>
" class=" btn reserver-btn  ">Réserver</a>
        </div>
    </div>
</article>
<?php
}
}
/* {/block 'content'} */
}
