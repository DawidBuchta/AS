{extends file="main.tpl"}



<!-- Calculator -->
{block name=calculator}
  

<h2 class="content-head is-center">Prosty kalkulator</h2>


	<!-- Contact -->
							<article id="contact">
								<h2 class="major">Kalkulator kredytowy</h2>
                                                                <form method="post" action="{$conf->action_root}wynik">
									<div class="fields">
										<div class="field third">
											<label for="Kwota">Kwota w tysiacach </label>
                                                                                        <input type="text" name="x" id="x" value="{$form->x}" />
										</div>
										<div class="field third">
											<label for="lat">Ile lat?</label>
											<input type="text" name="y" id="y" value="{$form->y}" />
										</div>
										<div class="field third">
											<label for="procent">Ile procent?</label>
											<input type="text" name="z" id="z" value="{$form->z}" ></input>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Oblicz" class="primary" /></li>
										
									</ul>
								</form>
								
							</article>

<div class="komunikat">

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
	<h4>Rata miesieczna</h4>
	<p class="res">
        {$res->result|round:"2"} PLN
        </p>

{/if}


{if isset($res->summary)}
	<h4>Wynik</h4>
	<p class="res">
        {$res->summary} PLN
	</p>
{/if}


{if isset($res->odsetki)}
	<h4>Wynik</h4>
	<p class="res">
        {$res->odsetki} PLN
	</p>
{/if}


</div>



    
   
{/block}

