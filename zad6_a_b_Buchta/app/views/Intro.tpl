{extends file="main.tpl"}
{block name=intro}
    
    <header id="header">
    
<div class="logo">
							<span class="fa fa-calculator" ></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Kalkulator Kredytowy</h1>
								<p> Kredyt bankowy – kwota pieniędzy dostarczonych przez bank na określony czas i na określonych warunkach, 
                                                                    technologia zaspokajająca potrzeby finansowe zadeklarowane przez pożyczkobiorcę. 
                                                                    Umowa zawarta w formie pisemnej między bankiem a kredytobiorcą. </p>
							</div>
						</div>
						<nav>
							<ul>
								<form method="post" action="{$conf->action_root}licz">
								<li><input type="submit" value="Oblicz Rate"  /></li>
                                                                </form>
								
							</ul>
						</nav>
         </header>
         
         
      
         
         
         {/block}