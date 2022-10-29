{extends file="../templates/main.tpl"}



<!-- Calculator -->
{block name=calculator}
  

<h2 class="content-head is-center">Prosty kalkulator</h2>


	<!-- Contact -->
							<article id="contact">
								<h2 class="major">Kalkulator kredytowy</h2>
								<form method="post" action="{$app_url}/app/calc.php">
									<div class="fields">
										<div class="field third">
											<label for="Kwota">Kwota w tysiacach </label>
											<input type="text" name="x" id="x" value="{$form['x']}" />
										</div>
										<div class="field third">
											<label for="lat">Ile lat?</label>
											<input type="text" name="y" id="y" value="{$form['y']}" />
										</div>
										<div class="field third">
											<label for="procent">Ile procent?</label>
											<input type="text" name="z" id="z" value="{$form['z']}" ></input>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Oblicz" class="primary" /></li>
										
									</ul>
								</form>
								
							</article>

<div class="komunikat">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($messages)}
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $messages as $msg}
		{strip}
			<li style="color:rgb(255, 139, 139)">{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if isset($infos)}
	{if count($infos) > 0} 
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $infos as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($result)}
	<h4>Rata miesieczna</h4>
	<p class="res">
	{$result|round:"2"} pln
	</p>
{/if}
{if isset($summary)}
	<h4>Łącznie</h4>
	<p class="res">
	{$summary} pln
	</p>
{/if}
{if isset($odsetki)}
	<h4>Odsetki</h4>
	<p class="res">
	{$odsetki} pln
	</p>
{/if}

</div>



    
    
</article>
{/block}

