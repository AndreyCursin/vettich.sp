<?
if(!check_bitrix_sessid()) return;
IncludeModuleLangFile(__FILE__);

if($ex = $APPLICATION->GetException()) {
	echo CAdminMessage::ShowMessage(Array(
		'TYPE' => 'ERROR',
		'MESSAGE' => GetMessage('MOD_INST_ERR'),
		'DETAILS' => $ex->GetString(),
		'HTML' => true,
	));
} else {
	echo CAdminMessage::ShowNote(GetMessage('VETTICH_SP_MOD_INST_OK'));
}
?>

<a href="/bitrix/admin/settings.php?lang=<?=LANG?>&mid=vettich.sp&mid_menu=1">
	<?=GetMessage('VETTICH_SP_GOTO_SETTINGS')?>
</a>
<br><br>
<form action="<?=$APPLICATION->GetCurPage()?>">
	<input type="hidden" name="lang" value="<?=LANG?>">
	<input type="submit" name="" value="<?=GetMessage('MOD_BACK')?>">
<form>
