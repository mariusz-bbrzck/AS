{extends file="main.tpl"}
{* przy zdefiniowanych folderach nie trzeba już podawać pełnej ścieżki *}

{block name=footer}{/block}

{block name=content}



		<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
			<fieldset>

			<label for="x">Kwota</label>
			<input id="x" type="text" placeholder="wprowadz kwote" name="x" value="{$form->x}">

			<label for="op">Oprocentowanie</label>
			<input id="op" type="text" placeholder="wprowadz %" name="op" value="{$form->op}">
		
			<label for="y">Lata</label>
			<input id="y" type="text" placeholder="wprowadz lata" name="y" value="{$form->y}">

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>


{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>
</div>

{/block}