<?php /* Smarty version Smarty-3.1.18, created on 2014-05-05 12:36:59
         compiled from "/media/jay/Data/apache/skully-admin/Tests/app/public/default/TestApp/views/admin/admins/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:278536632536398b2673d36-25020313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a70b0c952d6403dcf59577f4617581de13315e34' => 
    array (
      0 => '/media/jay/Data/apache/skully-admin/Tests/app/public/default/TestApp/views/admin/admins/index.tpl',
      1 => 1396952806,
      2 => 'file',
    ),
    'b1ab72fead6bde46bea61aa0d6d112bf78de5603' => 
    array (
      0 => '/media/jay/Data/apache/skully-admin/public/admin/wrappers/_main.tpl',
      1 => 1396953647,
      2 => 'file',
    ),
    'e51f1ca04bcb150051cfea3a33c70ddbfaa4e718' => 
    array (
      0 => '/media/jay/Data/apache/skully-admin/public/admin/widgets/alerts/_error.tpl',
      1 => 1393295000,
      2 => 'file',
    ),
    '623c53823711999b0ff971e47bc12fbf0f6c30ba' => 
    array (
      0 => '/media/jay/Data/apache/skully-admin/public/admin/widgets/alerts/_message.tpl',
      1 => 1393295000,
      2 => 'file',
    ),
    '2684052096341b5bc2e43b531e40b16a9a1f0f3a' => 
    array (
      0 => '/media/jay/Data/apache/skully-admin/public/admin/widgets/_alerts.tpl',
      1 => 1393295000,
      2 => 'file',
    ),
    'f43d2d57a08867016cdea130aff50305d7f466e8' => 
    array (
      0 => '/media/jay/Data/apache/skully-admin/public/admin/widgets/crud/widgets/_sortable.tpl',
      1 => 1393295000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278536632536398b2673d36-25020313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_536398b290e3f4_84255792',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536398b290e3f4_84255792')) {function content_536398b290e3f4_84255792($_smarty_tpl) {?><?php if (!is_callable('smarty_function_theme_url')) include '/media/jay/Data/apache/skully-admin/vendor/triodigital/skully/Skully/App/smarty/plugins/function.theme_url.php';
if (!is_callable('smarty_function_url')) include '/media/jay/Data/apache/skully-admin/vendor/triodigital/skully/Skully/App/smarty/plugins/function.url.php';
if (!is_callable('smarty_function_lang')) include '/media/jay/Data/apache/skully-admin/vendor/triodigital/skully/Skully/App/smarty/plugins/function.lang.php';
if (!is_callable('smarty_function_html_table')) include '/media/jay/Data/apache/skully-admin/vendor/triodigital/skully/Skully/Library/Smarty/libs/plugins/function.html_table.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $_smarty_tpl->getSubTemplate ("admin/wrappers/_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
  <title>Admins</title>
  <?php if (!empty($_smarty_tpl->tpl_vars['dragField']->value)) {?>
    <script type='text/javascript' src="<?php echo smarty_function_theme_url(array('path'=>"resources/js/plugins/datatables/dataTables.rowReordering.js"),$_smarty_tpl);?>
"></script>
  <?php }?>

</head>
<body>

<div class="header">
	<a href="<?php echo smarty_function_url(array('path'=>"home/index"),$_smarty_tpl);?>
" class="logo"></a>

	<div class="buttons">
		<div class="popup" id="subNavControll">
			<div class="label"><span class="icos-list"></span></div>
		</div>
		<div class="dropdown">
			<div class="label"><span class="icos-user2"></span></div>
			<div class="body" style="width: 160px;">
				
					
				
				
					
				
				<div class="itemLink">
					<a href="<?php echo smarty_function_url(array('path'=>"admin/admins/edit",'id'=>$_smarty_tpl->tpl_vars['user']->value['id']),$_smarty_tpl);?>
" title="<?php echo smarty_function_lang(array('value'=>"My Settings"),$_smarty_tpl);?>
" data-toggle="dialog"><span class="icon-cog icon-white"></span> <?php echo smarty_function_lang(array('value'=>"My Settings"),$_smarty_tpl);?>
</a>
				</div>
				<div class="itemLink">
					<a href="<?php echo smarty_function_url(array('path'=>"admin/admins/logout"),$_smarty_tpl);?>
"><span class="icon-off icon-white"></span> Logoff</a>
				</div>
			</div>
		</div>
		
			
			
				
				
					
						
							
								
								
								
							
						
					
				
			
		
		<div class="popup">
			<div class="label"><span class="icos-cog"></span></div>
			<div class="body">
				<div class="arrow"></div>
				<div class="row-fluid">
					<div class="row-form">
						<div class="span12">
							<span class="top">Themes:</span>
							<div class="themes">
								<a href="#" data-theme="" class="tip" title="Default"><img src="<?php echo smarty_function_theme_url(array('path'=>"resources/images/admin/themes/default.jpg"),$_smarty_tpl);?>
"/></a>
								<a href="#" data-theme="ssDaB" class="tip" title="DaB"><img src="<?php echo smarty_function_theme_url(array('path'=>"resources/images/admin/themes/dab.jpg"),$_smarty_tpl);?>
"/></a>
								<a href="#" data-theme="ssTq" class="tip" title="Tq"><img src="<?php echo smarty_function_theme_url(array('path'=>"resources/images/admin/themes/tq.jpg"),$_smarty_tpl);?>
"/></a>
								<a href="#" data-theme="ssGy" class="tip" title="Gy"><img src="<?php echo smarty_function_theme_url(array('path'=>"resources/images/admin/themes/gy.jpg"),$_smarty_tpl);?>
"/></a>
								<a href="#" data-theme="ssLight" class="tip" title="Light"><img src="<?php echo smarty_function_theme_url(array('path'=>"resources/images/admin/themes/light.jpg"),$_smarty_tpl);?>
"/></a>
								<a href="#" data-theme="ssDark" class="tip" title="Dark"><img src="<?php echo smarty_function_theme_url(array('path'=>"resources/images/admin/themes/dark.jpg"),$_smarty_tpl);?>
"/></a>
								<a href="#" data-theme="ssGreen" class="tip" title="Green"><img src="<?php echo smarty_function_theme_url(array('path'=>"resources/images/admin/themes/green.jpg"),$_smarty_tpl);?>
"/></a>
								<a href="#" data-theme="ssRed" class="tip" title="Red"><img src="<?php echo smarty_function_theme_url(array('path'=>"resources/images/admin/themes/red.jpg"),$_smarty_tpl);?>
"/></a>
							</div>
						</div>
					</div>
					<div class="row-form">
						<div class="span12">
							<span class="top">Backgrounds:</span>
							<div class="backgrounds">
								<a href="#" data-background="bg_default" class="bg_default"></a>
								<a href="#" data-background="bg_mgrid" class="bg_mgrid"></a>
								<a href="#" data-background="bg_crosshatch" class="bg_crosshatch"></a>
								<a href="#" data-background="bg_hatch" class="bg_hatch"></a>
								<a href="#" data-background="bg_light_gray" class="bg_light_gray"></a>
								<a href="#" data-background="bg_dark_gray" class="bg_dark_gray"></a>
								<a href="#" data-background="bg_texture" class="bg_texture"></a>
								<a href="#" data-background="bg_light_orange" class="bg_light_orange"></a>
								<a href="#" data-background="bg_yellow_hatch" class="bg_yellow_hatch"></a>
								<a href="#" data-background="bg_green_hatch" class="bg_green_hatch"></a>
							</div>
						</div>
					</div>
					<div class="row-form">
						<div class="span12">
							<span class="top">Navigation:</span>
							<input type="radio" name="navigation" id="fixedNav"/> Fixed
							<input type="radio" name="navigation" id="collapsedNav"/> Collapsible
							<input type="radio" name="navigation" id="hiddenNav"/> Hidden
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>

<div class="navigation">

<?php echo $_smarty_tpl->getSubTemplate ("admin/widgets/_mainMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="control"></div>

<div class="submain">

<div id="default">

	<?php echo $_smarty_tpl->getSubTemplate ("admin/widgets/_userInfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="dr"><span></span></div>
	
</div>

</div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin/widgets/_breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content">

	<div class="row-fluid">

		
  <div class="span12">
    <?php /*  Call merged included template "admin/widgets/_alerts.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('admin/widgets/_alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '278536632536398b2673d36-25020313');
content_5367237b59b059_27627064($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "admin/widgets/_alerts.tpl" */?>
    <div class="widget">
      <div class="head dark">
        <div class="icon"><i class="icos-stats-up"></i></div>
        <h2>Admins</h2>
        <ul class="buttons">
          <li><a href="<?php echo smarty_function_url(array('path'=>'admin/admins/add'),$_smarty_tpl);?>
" title="Add Store" data-toggle="dialog"><span class="icos-plus1"></span></a></li>
        </ul>
      </div>
      <div class="block-fluid">
        <?php if (!empty($_smarty_tpl->tpl_vars['dragField']->value)) {?>
          <?php $_smarty_tpl->tpl_vars['sortableTable'] = new Smarty_variable('sortableTable initialized', null, 0);?>
        <?php }?>
        <?php ob_start();?><?php echo smarty_function_url(array('path'=>'admin/admins/index'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_html_table(array('loop'=>'','table_attr'=>(((('class="').($_smarty_tpl->tpl_vars['sortableTable']->value)).(' aTable in table-hover" rel="')).($_tmp1)).('"style="width: 100%;"'),'th_attr'=>$_smarty_tpl->tpl_vars['thAttributes']->value,'cols'=>$_smarty_tpl->tpl_vars['columns']->value),$_smarty_tpl);?>

      </div>
    </div>
  </div>


	</div>
	

</div>

  <script type="text/javascript">
    <?php if (!empty($_smarty_tpl->tpl_vars['columnDefs']->value)) {?>
    var _columnDefs = <?php echo $_smarty_tpl->tpl_vars['columnDefs']->value;?>
;
    <?php }?>
  </script>
  <?php /*  Call merged included template "admin/widgets/crud/widgets/_sortable.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("admin/widgets/crud/widgets/_sortable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '278536632536398b2673d36-25020313');
content_5367237b60ca22_11781644($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "admin/widgets/crud/widgets/_sortable.tpl" */?>

<div class="loadingframe"></div>
</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-05-05 12:36:59
         compiled from "/media/jay/Data/apache/skully-admin/public/admin/widgets/_alerts.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5367237b59b059_27627064')) {function content_5367237b59b059_27627064($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
	<?php /*  Call merged included template "admin/widgets/alerts/_error.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("admin/widgets/alerts/_error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '278536632536398b2673d36-25020313');
content_5367237b5a7470_00460312($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "admin/widgets/alerts/_error.tpl" */?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['message']->value)) {?>
	<?php /*  Call merged included template "admin/widgets/alerts/_message.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("admin/widgets/alerts/_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '278536632536398b2673d36-25020313');
content_5367237b5bc953_82330940($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "admin/widgets/alerts/_message.tpl" */?>
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-05-05 12:36:59
         compiled from "/media/jay/Data/apache/skully-admin/public/admin/widgets/alerts/_error.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5367237b5a7470_00460312')) {function content_5367237b5a7470_00460312($_smarty_tpl) {?><div class="alert alert-error">
	<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-05-05 12:36:59
         compiled from "/media/jay/Data/apache/skully-admin/public/admin/widgets/alerts/_message.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5367237b5bc953_82330940')) {function content_5367237b5bc953_82330940($_smarty_tpl) {?><div class="alert alert-success">
	<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-05-05 12:36:59
         compiled from "/media/jay/Data/apache/skully-admin/public/admin/widgets/crud/widgets/_sortable.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5367237b60ca22_11781644')) {function content_5367237b60ca22_11781644($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/media/jay/Data/apache/skully-admin/vendor/triodigital/skully/Skully/App/smarty/plugins/function.url.php';
?><script type="text/javascript">
  <?php if (!empty($_smarty_tpl->tpl_vars['dragField']->value)) {?>
    var dragField = '<?php echo $_smarty_tpl->tpl_vars['dragField']->value;?>
';

    var sorting = [];
    var table = $('.sortableTable');
    table.find('th').each(function (index, el) {
      // Get sorting classes in table's th elements:
      // If class contains 'sort_asc', sort ascending.
      // If class contains 'sort_desc', sort descending.
      if ($(el).hasClass('sort_asc')) {
        sorting[sorting.length] = [index, 'asc'];
      }
      else if ($(el).hasClass('sort_desc')) {
        sorting[sorting.length] = [index, 'desc'];
      }

    });

    $(document).bind('changed', function(e) {
      if (!table.hasClass('tableInitialized')) {
        table.addClass('tableInitialized');
        $._oTable = table.dataTable({
          "bAutoWidth": true,
          "bLengthChange": true,
          "iDisplayLength": 10,
          "aLengthMenu": [10,25,50,100],
          "sPaginationType": "full_numbers",
          "bProcessing": true,
          "sAjaxSource": table.attr('rel'),
          "aoColumnDefs": <?php echo $_smarty_tpl->tpl_vars['columnDefs']->value;?>
,
          "fnDrawCallback": function() {
            $(document).trigger('changed');
          },
          "fnServerData": function ( sSource, aoData, fnCallback ) {
            /* Add some extra data to the sender */
  //						aoData.push( { "name": "more_data", "value": "my_value" } );
            $.getJSON( sSource, aoData, function (json) {
              /* Do whatever additional processing you want on the callback, then tell DataTables */
              fnCallback(json);
              $(document).trigger('changed');
            } );
          },
          "fnInitComplete": function() {
            $(document).trigger("datatableLoaded");
          },
          "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
            // Add styling on each td:
            // Get hidden columns, then iterate each column, if column is hidden, move to next index
            var columns = this.dataTableSettings[0].aoColumns;

            var i = 0;
            for(var i2=0;i2<columns.length;i2++) {
              var column = columns[i2];
              if (column.bVisible) {
                var td = $('td',nRow).slice(i,(i+1));
                if (typeof aData[i2]=='object' && aData[i2]!=null){
                  if (typeof aData[i2].style!='undefined'){
                    td.attr('style',aData[i2].style);
                  }
                  if (typeof aData[i2].class!='undefined'){
                    td.removeClass(aData[i2].class);
                    td.addClass(aData[i2].class);
                  }
                  td.html('');
                  if (typeof aData[i2].data!='undefined'){
                    td.html(aData[i2].data);
                  }
                }
                i++;
              }
            }

            /* set tr id. */
            var id = aData[<?php echo $_smarty_tpl->tpl_vars['sortableIdColumnIndex']->value;?>
];
            $(nRow).attr("id",id);
            return nRow;
          }
        }).rowReordering({
              sURL: '<?php echo smarty_function_url(array('path'=>((string)$_smarty_tpl->tpl_vars['reorderPath']->value)),$_smarty_tpl);?>
',
              iIndexColumn: 0,
              sRequestType: "POST"
            });
        table.fnSort(sorting);
      }
    });
  <?php }?>
</script><?php }} ?>