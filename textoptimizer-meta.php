<?php 
/**
*	@package	Textoptimizer WordPress Plugin
*	@author		Webinfo LTD
*/
?>

<div id="textoptimizer-exec" class="text-center">
	<a class="btn btn_lg2">
		<span style="font-size: 16px;"><img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/premium_icon_white.png" style="max-width: 33px; margin-right: 5px;"> Optimize your Text</span>
	</a>
</div>

<div id="textoptimizer-widget" class="to_plugin_wrapper">
	<a id="close-textoptimizer-widget" href="javascript:void(0);" style="margin: 5px;">x</a>

	<div id="top-banner" class="bg_00afd8 pl10 pr10 inline_block w100pc" style="padding-top: 5px; padding-right: 30px; height: 45px;">
  		<div class="inline_block gohome">
		  	<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/rocket_sm.png" style="max-width: 41px;">
		  	<span class="font20 font600 color_fff pl10">TextOptimizer</span>
	  	</div>
  		<div class="premium_member premium_member2 invisible">
	      	<nbr id="nbr_optimization"></nbr>
	      	<lang class="l_default">optimizations</lang>
      		<lang class="l_french">optimisations</lang>
	      	<span class="uppercase block">
	      		<lang class="l_default">PREMIUM MEMBER</lang>
	      		<lang class="l_french">MEMBRE PREMIUM</lang>
	  		</span>
    	</div>
  	</div>
	<div class="scene" id="first-scene">
		<div class="scene-header">
			
		</div>
		<div class="scene-body">
			<div class="border border2 border_00afd8 rounded p10 p10-sm">
				<div class="text-center">
		          	<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/rocket_launch_small.gif">
	          	</div>
				<h4 class="color_00afd8" style="width: 90%; margin: 20px auto;">
					<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/settings_icon_blue.png">
					<span class="font700 valign_middle pl20" style="font-size: 24px;">Configuration</span>
				</h4>
				<div class="spacer h40"></div>
				<table class="mauto">
					<tbody>
						<tr>
							<th class="pr20 align_r">
								<span class="color_3a4a59 font600" style="font-size: 15px;">Language:</span>
							</th>
							<td style="width: 250px;">
								<select class="nice-select small wide" id="configuration-language">
						        	<option value="en">English</option>
						        	<option value="fr">Français</option>
						        	<option value="nl">Nederlands (translation)</option>
						        	<option value="de">Deutsch (translation)</option>
						        	<option value="it">Italiano (translation)</option>
						        	<option value="pt">Português (translation)</option>
						        	<option value="es">Español (translation)</option>
						        	<option value="zh">中文 (translation)</option>
						        </select>
							</td>
						</tr>
						<tr>
							<td colspan="3" class="h20"></td>
						</tr>
					</tbody>
				</table>
				<div class="spacer h40"></div>
				<div class="text-center">
					<a class="btn btn_sm" id="configuration-save">
						<span style="font-size: 15px;"><i class="fas fa-play"></i> &nbsp;Start</span>
					</a>
				</div>
				<div class="spacer h20"></div>
			</div>
		</div>
		<div class="scene-footer">
			<div class="text-center">
				<span class="terms-policy">
					This tool is provided by <a target="_blank" href="https://textoptimizer.com/">TextOptimizer.com</a>.
					<br>
					By using this tool, you agree to the <a target="_blank" href="https://textoptimizer.com/terms">Terms of Service</a>.
				</span>
			</div>
		</div>
	</div>
	<div class="scene" id="home-scene">
		<div class="scene-header">
			
		</div>
		<div class="scene-body">
			<lang class="l_default">
				<a class="relative btn whitespace_normal enrich_btn enrich_btn2 enrich_btn3 w100pc analyze">
					<table class="w100pc">
						<tbody>
							<tr>
								<td style="width: 70px;">
									<em></em>
								</td>
								<td class="lh24 font24 fl" style="padding-top: 13px;">
									<strong class="font700">ENRICH</strong>
								</td>
								<td class="fl pl20" style="padding-top: 5px;">
									<i class="font_normal font15 font15-sm font700 uppercase block" style="line-height: 120%;">Your<br>
									Text</i>
								</td>
								<td class="relative">
									<div class="info_popup sm" style="top: -28px; right: -15px; z-index: 2;">
										<div class="question_icon question_icon_white" style="background-size: 18px; background-position: top right;"></div>
										<div class="popup" style="width: 430px; max-width: 430px; right: -10px;">
						                    <div class="pop_arw" style="margin-right: 10px;"></div>
			            			        <div class="pop_contain white_box rounded border p50 font400 lh22 color_3a4a59" style="font-size: 15px;">
						                      	Get words related to your text.
					                      		<br>
					                      		<br>
												TextOptimizer identifies the lexical fields of your text and then suggests words that belong to those fields.
						                      	<div class="text-center">
										          	<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/anim_explain_add_content.gif">
									          	</div>
						                    </div>
				                  		</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</a>
				<div class="spacer h30"></div>
				<a class="relative btn btn_orange whitespace_normal optimize_btn optimize_btn2 optimize_btn3 w100pc optimize_text">
					<table class="w100pc">
						<tbody>
							<tr>
								<td style="width: 70px;">
									<em></em>
								</td>
								<td class="lh24 font24 fl" style="padding-top: 13px;">
									<strong class="font700">OPTIMIZE</strong><br> 
									<i class="font_normal font15 font15-sm font500 uppercase">for search engines</i>
								</td>
								<td class="fl pl20" style="padding-top: 5px;">
									<i class="font_normal font15 font15-sm font700 uppercase block" style="line-height: 120%;">Your<br>
									Text</i>
								</td>
								<td class="relative">
									<div class="info_popup sm" style="top: -20px; right: -15px; z-index: 2;">
										<div class="question_icon question_icon_white" style="background-size: 18px; background-position: top right;"></div>
										<div class="popup" style="width: 430px; max-width: 430px; right: -10px;">
					                    	<div class="pop_arw" style="margin-right: 10px;"></div>
					                    	<div class="pop_contain white_box rounded border p50 font400 lh22 color_3a4a59" style="font-size: 15px;">
					                      		Get the words most likely to improve your ranking on a search engine.
					                      		<br>
					                      		<br>
												TextOptimizer identifies the lexical fields used by search engines for your targeted query, and then suggests changes in your text accordingly.
						                      	<div class="text-center">
										          	<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/anim_explain_optimize.gif">
									          	</div>
					                    	</div>
					                  	</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<img style="position: absolute; bottom: 0; right: 0; max-width: 119px;" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/pro3_red.png">
				</a>
			</lang>
			<lang class="l_french">
				<a class="relative btn whitespace_normal enrich_btn enrich_btn2 enrich_btn4 w100pc analyze">
					<table class="w100pc">
						<tbody>
							<tr>
								<td style="width: 70px;">
									<em></em>
								</td>
								<td class="lh24 font24 fl" style="padding-top: 13px;">
									<strong class="font700">ENRICHISSEZ</strong>
								</td>
								<td class="fl pl20" style="padding-top: 10px;">
									<i class="font_normal font15 font15-sm font700 uppercase block" style="line-height: 100%;">Votre<br>
									Texte</i>
								</td>
								<td class="relative">
									<div class="info_popup sm" style="top: -28px; right: -15px; z-index: 2;">
										<div class="question_icon question_icon_white" style="background-size: 18px; background-position: top right;"></div>
										<div class="popup" style="width: 430px; max-width: 430px; right: -10px;">
						                    <div class="pop_arw" style="margin-right: 10px;"></div>
			            			        <div class="pop_contain white_box rounded border p50 font400 lh22 color_3a4a59" style="font-size: 15px;">
						                      	Obtenez des mots en rapport avec votre texte.
					                      		<br>
					                      		<br>
												1.fr identifie les champs lexicaux de votre texte et suggère des mots appartenant aux principaux champs de votre texte.
						                      	<div class="text-center">
										          	<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/anim_explain_add_content.gif">
									          	</div>
						                    </div>
				                  		</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</a>
				<div class="spacer h30"></div>
				<a class="relative btn btn_orange whitespace_normal optimize_btn optimize_btn2 optimize_btn4 w100pc optimize_text">
					<table class="w100pc">
						<tbody>
							<tr>
								<td style="width: 70px;">
									<em></em>
								</td>
								<td class="lh24 font24 fl" style="padding-top: 13px;">
									<strong class="font700">OPTIMISER</strong><br> 
									<i class="font_normal font11 font500 uppercase">pour un moteur de recherche</i>
								</td>
								<td class="fl pl20" style="padding-top: 10px;">
									<i class="font_normal font15 font15-sm font700 uppercase block" style="line-height: 100%;">Votre<br>
									Texte</i>
								</td>
								<td class="relative">
									<div class="info_popup sm" style="top: -20px; right: -15px; z-index: 2;">
										<div class="question_icon question_icon_white" style="background-size: 18px; background-position: top right;"></div>
										<div class="popup" style="width: 430px; max-width: 430px; right: -10px;">
					                    	<div class="pop_arw" style="margin-right: 10px;"></div>
					                    	<div class="pop_contain white_box rounded border p50 font400 lh22 color_3a4a59" style="font-size: 15px;">
					                      		Obtenez les mots les plus susceptibles d'améliorer votre classement sur un moteur de recherche.
					                      		<br>
					                      		<br>
												1.fr identifie les champs lexicaux utilisés par le moteur de recherche pour votre requête cible, puis suggère des modifications dans votre texte en conséquence.
						                      	<div class="text-center">
										          	<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/anim_explain_optimize.gif">
									          	</div>
					                    	</div>
					                  	</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<img style="position: absolute; bottom: 0; right: 0; max-width: 119px;" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/pro3_red.png">
				</a>
			</lang>
		</div>
		<div class="scene-footer">
			<div class="scene-footer-objects">
				<div class="scene-footer-btns">
					<a class="signin" scene="home">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/signin-icon.png">
					</a>
					<a class="setting" scene="home">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/settings-icon.png">
					</a>
					<a class="help">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/help-icon.png">
					</a>
				</div>
				<img class="logo gohome" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/textoptimizer_logo.png">
			</div>
			<div class="scene-footer-about">
				<span class="terms-policy">
					<lang class="l_default">By using this tool, you agree to the </lang>
					<lang class="l_french">En utilisant ce service, vous acceptez les </lang>
					<a class="terms" target="_blank" href="https://textoptimizer.com/terms">
						<lang class="l_default">Terms of Service</lang>
						<lang class="l_french">conditions d'utilisation</lang>
					</a>.
				</span>
			</div>
		</div>
	</div>
	<div class="scene" id="main-scene">
		<div class="scene-header">
			
		</div>
		<div class="scene-body">
			<div class="main-scene-body-widget" id="main-scene-timeout">
				<a class="btn refresh" style="font-size: 22px; padding: 8px 13px;">
					<i class="fas fa-sync-alt"></i>
					<lang class="l_default"> Retry</lang>
					<lang class="l_french"> Réessayer</lang>
				</a>
				<div class="spacer h30"></div>
				<div class="message important rounded align_l">
			      	<table class="w100pc">
			      		<tbody>
			      			<tr>
			      				<td class="valign_top" style="width: 90px;">
			      					<img class="bordered_bot border_fff" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/Animation1_Haveanidea.gif" style="width: 96px; margin-top:-40px; margin-left:-40px;">
			      				</td>
						      	<td class="pt20 pb20">
						      		<p class="block mb18" style="font-size: 14px;">
						      			<span class="block">
							        		<lang class="l_default">Service did not respond in a timely fashion.</lang>
							        		<lang class="l_french">Le service n'a pas répondu dans le temps imparti.</lang>
							        	</span>
							        	<strong>
							        		<lang class="l_default">Solution: you can retry in a few seconds.</lang>
							        		<lang class="l_french">Solution: vous pouvez réessayer dans quelques secondes.</lang>
							        	</strong>
						      		</p>
						      	</td>
						    </tr>
					  	</tbody>
					</table>
		      	</div>
			</div>
		</div>
		<div class="scene-footer">
			<div class="scene-footer-objects">
				<div class="scene-footer-btns">
					<a class="gohome">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/home-icon.png">
					</a>
					<a class="signin" scene="main">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/signin-icon.png">
					</a>
					<a class="setting" scene="main">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/settings-icon.png">
					</a>
					<a class="help">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/help-icon.png">
					</a>
				</div>
				<img class="logo gohome" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/textoptimizer_logo.png">
			</div>
			<div class="scene-footer-about">
				<span class="terms-policy">
					<lang class="l_default">By using this tool, you agree to the </lang>
					<lang class="l_french">En utilisant ce service, vous acceptez les </lang>
					<a class="terms" target="_blank" href="https://textoptimizer.com/terms">
						<lang class="l_default">Terms of Service</lang>
						<lang class="l_french">conditions d'utilisation</lang>
					</a>.
				</span>
			</div>
		</div>
	</div>
	<div class="scene" id="content-scene">
		<div class="scene-header">
			<div class="scene-header-btns">
				<a class="btn btn_sm analyze">
					<span style="padding: 2px 13px;">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/refresh_icon.png" style="max-width: 18px;"> &nbsp;
						<lang class="l_default">UPDATE WORDS</lang>
						<lang class="l_french">METTRE À JOUR LES MOTS</lang>
					</span>
				</a>
				<div class="btn-shortcut">
					<img class="refresh" style="margin-left: 5px;" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/reload_icon.png">
					<img class="upload-text" style="margin-left: 15px;" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/upload_icon.png">
				</div>
			</div>
		</div>
		<div class="scene-body">
			<div class="message success notificationOnSelection">
		      	<table>
		      		<tbody>
		      			<tr>
		      				<td>
					        	<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/text-selection_icon.png" style="max-width: 20px; margin-right: 24px;">
					      	</td>
					      	<td style="font-size: 15px;">
					        	<lang class="l_default">Limited to the text you selected.</lang>
	        					<lang class="l_french">Limité au texte que vous avez sélectionné.</lang>
					      	</td>
					    </tr>
				  	</tbody>
				</table>
	      	</div>
			<div id="main-wrapper"></div>
			<div id="loadtext-widget" style="margin-top: 15px;">
				<a class="btn btn_sm upload-text">
					<span style="padding: 2px 13px;">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/load-text_icon.png" style="max-width: 24px;"> &nbsp;
						<lang class="l_default">LOAD YOUR TEXT</lang>
						<lang class="l_french">CHARGER VOTRE TEXTE</lang>
					</span>
				</a>
			</div>
			<div id="optimizer-widget">
				<div class="pt60 pb80">
			  		<table class="input_group input_group_sm mauto" style="width: 80%;">
				      	<tbody>
				      		<tr>
						        <td>
						          	<input type="text" placeholder="Fill in terms to optimize for..." class="optimize-query" style="font-size: 16px;">
						        </td>
						        <td>
						          	<a class="btn" id="refresh-optimize">
						          		<span>
						          			<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/refresh_icon.png" style="max-width: 20px;"> &nbsp;
						          			<strong>
						          				<lang class="l_default">Refresh</lang>
						          				<lang class="l_french">Rafraîchir</lang>
						          			</strong>
						          		</span>
						          	</a>
						        </td>
					      	</tr>
				   		 </tbody>
				   	</table>
			  	</div>
			</div>
			<div class="tip-box" id="clickcopy-tip">
				<div class="rounded bg_007aab p20 pr30">
					<table class="w100pc">
						<tbody>
							<tr>
								<td class="w49">
									<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/lightbulb_orange.png">
								</td>
								<td class="pl20 pr20 font26 lh26 font14-sm lh17-sm font600 color_fff">
									<div style="max-width: 350px;">
										<lang class="l_default">Click on any words to copy into your clipboard.<br>Then you can paste it into your text.</lang>
						      			<lang class="l_french">Cliquez sur un mot pour le copier dans votre presse-papier.<br>Ensuite, vous pouvez le coller dans votre texte.</lang>
									</div>
								</td>
								<td>
									<a class="btn btn_lg fr clickcopy-validate">
										<span class="font400">
											<i class="fas fa-thumbs-up color_fff"></i>
											<lang class="l_default">Understood</lang>
											<lang class="l_french">Compris</lang>
										</span>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tip-box" id="selection-tip">
				<div class="rounded bg_007aab p20 pr30">
					<table class="w100pc">
						<tbody>
							<tr>
								<td class="w49" rowspan="2">
									<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/lightbulb_orange.png">
								</td>
								<td class="pl20 pr20 font26 lh26 font14-sm lh17-sm font600 color_fff">
									<div style="max-width: 350px;">
										<lang class="l_default">If you select a part of your text, suggestions will be limited to your selection.</lang>
						      			<lang class="l_french">Si vous sélectionnez une partie de votre texte, les suggestions se limiteront à votre sélection.</lang>
									</div>
								</td>
								<td rowspan="2">
									<a class="btn btn_lg fr selection-validate">
										<span class="font400">
											<i class="fas fa-thumbs-up color_fff"></i>
											<lang class="l_default">Understood</lang>
											<lang class="l_french">Compris</lang>
										</span>
									</a>
								</td>
							</tr>
							<tr>
								<td style="padding: 0.5em 0.5em 0 0.5em;">
									<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/anim_copy_text.gif">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tip-box" id="secure-tip">
				<div class="rounded bg_007aab p20 pr30">
					<table class="w100pc">
						<tbody>
							<tr>
								<td class="w49">
									<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/lightbulb_orange.png">
								</td>
								<td class="pl20 pr20 font26 lh26 font14-sm lh17-sm font600 color_fff">
									<div style="max-width: 350px;">
										<lang class="l_default">To protect your privacy, texts are sent to our servers using a secure connection. Your text is not stored.</lang>
						      			<lang class="l_french">Pour protéger votre vie privée, votre texte est envoyé vers les serveurs d'analyse 1.fr via une connexion sécurisée. Votre texte n'est pas stocké.</lang>
									</div>
								</td>
								<td>
									<a class="btn btn_lg fr secure-validate">
										<span class="font400">
											<i class="fas fa-thumbs-up color_fff"></i>
											<lang class="l_default">Understood</lang>
											<lang class="l_french">Compris</lang>
										</span>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tip-box" id="recommend-tip">
				<div class="rounded bg_00afd8 p20 pr30">
					<table class="w100pc">
						<tbody>
							<tr>
								<td class="w49">
									<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/lightbulb_blue.png">
								</td>
								<td class="pl20 pr20 font40 lh40 font20-sm lh20-sm font600 color_fff">
									<div style="max-width: 300px;">
										<lang class="l_default">Would you recommend this plugin to a friend?</lang>
						      			<lang class="l_french">Recommanderiez-vous ce plugin à un ami?</lang>
									</div>
								</td>
								<td>
									<table class="fr">
										<tbody>
											<tr>
												<td>
													<a class="btn btn_lg btn_dark_blue fr recommend-yes">
														<span class="font400">
															<i class="far fa-smile color_fff"></i>
															<lang class="l_default">Yes</lang>
															<lang class="l_french">Oui</lang>
														</span>
													</a>
												</td>
												<td class="pl10"></td>
												<td>
													<a class="btn btn_lg btn_dark_blue fr recommend-no">
														<span class="font400">
															<i class="far fa-frown color_fff"></i>
															<lang class="l_default">No</lang>
															<lang class="l_french">Non</lang>
														</span>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tip-box" id="rate-tip">
				<div class="rounded bg_7f8a94 p20 pr30">
					<table class="w100pc">
						<tbody>
							<tr>
								<td class="w49">
									<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/lightbulb_gray.png">
								</td>
								<td class="pl20 pr20 font26 lh26 font14-sm lh17-sm font600 color_fff">
									<div style="max-width: 300px;">
										<lang class="l_default">Thank you for your support.<br>Would you please rate us?</lang>
						      			<lang class="l_french">Merci pour votre soutien.<br>Accepteriez-vous de nous évaluer?</lang>
									</div>
								</td>
								<td>
									<table class="fr">
										<tbody>
											<tr>
												<td>
													<a class="btn btn_lg btn_white fr rate-yes">
														<span class="font400" style="color: #35b073;">
															<i class="far fa-smile"></i>
															<lang class="l_default">Yes</lang>
															<lang class="l_french">Oui</lang>
														</span>
													</a>
												</td>
												<td class="pl10"></td>
												<td>
													<a class="btn btn_lg btn_white fr rate-no">
														<span class="font400" style="color: #f14a4a;">
															<i class="far fa-frown"></i>
															<lang class="l_default">No</lang>
															<lang class="l_french">Non</lang>
														</span>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div id="optimize-button">
				<a class="relative btn whitespace_normal optimize_btn optimize_text">
					<table class="w100pc">
						<tbody>
							<tr>
								<td style="width: 25px; padding-right: 0.8em;">
									<i class="fas fa-cogs"></i>
								</td>
								<td class="lh17" style="padding-right: 30px;">
									<lang class="l_default"><strong>OPTIMIZE</strong> for Search Engine</lang>
									<lang class="l_french"><strong>OPTIMISER</strong> pour une recherche</lang>
								</td>
							</tr>
						</tbody>
					</table>
					<img style="position:absolute; top:0; right:0; height:100%;" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/pro.png">
				</a>
			</div>
		</div>
		<div class="scene-footer">
			<div class="scene-footer-objects">
				<div class="scene-footer-btns">
					<a class="gohome">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/home-icon.png">
					</a>
					<a class="signin" scene="content">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/signin-icon.png">
					</a>
					<a class="setting" scene="content">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/settings-icon.png">
					</a>
					<a class="help">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/help-icon.png">
					</a>
				</div>
				<img class="logo gohome" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/textoptimizer_logo.png">
			</div>
			<div class="scene-footer-about">
				<span class="terms-policy">
					<lang class="l_default">By using this tool, you agree to the </lang>
					<lang class="l_french">En utilisant ce service, vous acceptez les </lang>
					<a class="terms" target="_blank" href="https://textoptimizer.com/terms">
						<lang class="l_default">Terms of Service</lang>
						<lang class="l_french">conditions d'utilisation</lang>
					</a>.
				</span>
			</div>
		</div>
	</div>
	<div class="scene" id="upload-text-scene">
		<div class="scene-header">
			<div class="scene-header-btns visible-widget">
				<a class="btn btn_sm upload-text">
					<span style="padding: 2px 13px;">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/load-text_icon.png" style="max-width: 24px;"> &nbsp;
						<lang class="l_default">LOAD YOUR TEXT</lang>
						<lang class="l_french">CHARGER VOTRE TEXTE</lang>
					</span>
				</a>
			</div>
		</div>
		<div class="scene-body">
			<div class="message success notificationOnSelection visible-widget">
		      	<table>
		      		<tbody>
		      			<tr>
		      				<td>
					        	<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/text-selection_icon.png" style="max-width: 20px; margin-right: 24px;">
					      	</td>
					      	<td style="font-size: 15px;">
					        	<lang class="l_default">Limited to the text you selected.</lang>
	        					<lang class="l_french">Limité au texte que vous avez sélectionné.</lang>
					      	</td>
					    </tr>
				  	</tbody>
				</table>
	      	</div>
      		<div class="retry-widget visible-widget">
      			<div style="text-align: center; margin: 2em 0em;">
      				<a class="btn refresh" style="font-size: 22px; padding: 8px 13px;">
						<i class="fas fa-sync-alt"></i>
						<lang class="l_default">Retry</lang>
						<lang class="l_french">Réessayer</lang>
					</a>
      			</div>
      		</div>
      		<div class="setting-widget visible-widget">
      			<div style="text-align: center; margin: 2em 0em;">
      				<a class="btn setting" scene="upload-text" style="font-size: 22px; padding: 8px 13px;">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/settings_icon_white.png" style="max-width: 24px;">
						<lang class="l_default">Settings</lang>
						<lang class="l_french">Paramètres</lang>
					</a>
      			</div>
      		</div>
      		<div class="error-message visible-widget" style="padding-left: 15px;">
      		</div>
			<div class="border border2 border_00afd8 rounded p60 paste-box-widget visible-widget">
				<h4 class="mb20">
					<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/upload_icon.png" style="max-width: 41px;">
					<span class="font700 valign_middle pl20" style="font-size: 24px;">
						<lang class="l_default">Your text</lang>
						<lang class="l_french">Charger votre texte</lang>
					</span>
				</h4>
				<div class="spacer h40"></div>
				<div class="relative">
		          	<div class="kwrd_pop" style="max-width:270px; width:100%; top:-20px; left:10px; bottom: inherit;">
			            <div>
			              	<a class="close_popup_btn close_popup_btn2">x</a>
			              	<p>
			              		<lang class="l_default">Paste your text content here.</lang>
			              		<lang class="l_french">Collez votre contenu textuel ici.</lang>
			              	</p>
			              	<span class="triangle"></span>
			            </div>
		          </div>
		        </div>
				<textarea id="upload-text-content" style="height: 170px; resize: none;"></textarea>
				<div class="spacer h20"></div>
				<div id="upload-text-optimize-box" style="display: none;">
					<h4 class="color_00afd8 mb0">
						<span class="font700" style="font-size: 18px; line-height: 30px;">
							<lang class="l_default">Search terms to optimize your text for?</lang>
							<lang class="l_french">Recherche des internautes sur laquelle optimiser votre texte ?</lang>
						</span>
					</h4>
					<table class="input_group input_group_sm mauto">
			      		<tbody>
			      			<tr>
						        <td>
						          	<input class="optimize-query" type="text" placeholder="Enter item to optimize" style="font-size: 16px;">
						        </td>
			      			</tr>
			    		</tbody>
			    	</table>
			    	<div class="spacer h50"></div>
				</div>
				<div class="text-center">
					<a class="relative btn btn_orange w100pc upload-text-analyze" id="upload-text-getcontent">
						<span style="font-size: 18px; font-weight: 800; line-height: 48px;">
							<lang class="l_default">Find Words</lang>
		              		<lang class="l_french">Trouvez les mots</lang>
						</span>
					</a>
					<a class="relative btn btn_orange w100pc upload-text-analyze" id="upload-text-optimize" style="display: none;">
						<span style="font-size: 18px; font-weight: 800; line-height: 48px;">
							<lang class="l_default">Optimize</lang>
		              		<lang class="l_french">Optimiser</lang>
						</span>
					</a>		
				</div>
			</div>
			<div style="max-width: 400px;" class="mauto selection_help_video visible-widget">
				<div class="spacer h40"></div>
  				<video muted="" autoplay="" loop="" width="100%" height="auto">
		            <source src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/select_text_and_copy.mp4" type="video/mp4">
          		</video>
        	</div>
		</div>
		<div class="scene-footer">
			<div class="scene-footer-objects">
				<div class="scene-footer-btns">
					<a class="gohome">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/home-icon.png">
					</a>
					<a class="signin" scene="upload-text">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/signin-icon.png">
					</a>
					<a class="setting" scene="upload-text">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/settings-icon.png">
					</a>
					<a class="help">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/help-icon.png">
					</a>
				</div>
				<img class="logo gohome" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/textoptimizer_logo.png">
			</div>
			<div class="scene-footer-about">
				<span class="terms-policy">
					<lang class="l_default">By using this tool, you agree to the </lang>
					<lang class="l_french">En utilisant ce service, vous acceptez les </lang>
					<a class="terms" target="_blank" href="https://textoptimizer.com/terms">
						<lang class="l_default">Terms of Service</lang>
						<lang class="l_french">conditions d'utilisation</lang>
					</a>.
				</span>
			</div>
		</div>
	</div>
	<div class="scene" id="googlebing-scene">
		<div class="scene-header">
			
		</div>
		<div class="scene-body">
			<div class="bg_rocket_sm border border2 border_00afd8 rounded p15 p15-sm relative">
				<h4 class="mb30 pt20">
					<table>
						<tbody>
							<tr>
								<td class="valign_top">
									<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/search-engine_icon.png" style="max-width: 43px;">
								</td>
								<td style="padding-left: 25px;">
									<span class="font18-sm">
										<lang class="l_default">Search Engine to optimize your text for?</lang>
										<lang class="l_french">Pour quel moteur de recherche optimiser votre texte?</lang>
									</span>
								</td>
							</tr>
						</tbody>
					</table>
				</h4>
				<div class="spacer h30"></div>
				<table class="mauto">
					<tbody>
						<tr>
							<td style="max-width: 190px;">
								<a class="btn_check btn_check_sm no_underline w100pc" engine="google" style="max-width: 250px;">
						          	<table>
						            	<tbody>
						            		<tr>
								              	<td>
								                	<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/icon_google.png" style="max-width: 32px;">
								              	</td>
								              	<td class="pl10">
								                	<span class="font600 color_3a4a59">Google</span>
								              	</td>
						            		</tr>
						          		</tbody>
						          	</table>
				        		</a>
				      		</td>
					      	<td>
					      		&nbsp;&nbsp;&nbsp;&nbsp;
					      		<strong class="color_3a4a59">
						      		<lang class="l_default">OR</lang>
						      		<lang class="l_french">OU</lang>
					      		</strong>
					      		&nbsp;&nbsp;&nbsp;&nbsp;
					      	</td>
					      	<td style="max-width: 190px;">
						        <a class="btn_check btn_check_sm no_underline w100pc" engine="bing" style="max-width: 250px;">
						          	<table>
						            	<tbody>
						            		<tr>
								              	<td>
								                	<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/icon_bing.png" style="max-width: 26px;">
								              	</td>
								              	<td class="pl10">
								                	<span class="font600 color_3a4a59">Bing</span>
								              	</td>
								            </tr>
						          		</tbody>
						          	</table>
						        </a>
					      	</td>
				    	</tr>
			  		</tbody>
			  	</table>
       			<div class="spacer h150"></div>
       			<div class="spacer h80"></div>
			</div>
			<div class="box bg_f5f7f7 rounded" style="margin-top: 30px;">
		        <div class="p60" style="display: flex;">
		          	<div class="col-md-2">
		            	<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/icon_conversation.png" style="max-width: 60px;">
		          	</div>
		          	<div class="col-md-10">
		            	<h5 class="mb18">
		            		<lang class="l_default">Help</lang>
		            		<lang class="l_french">Aide</lang>
		            	</h5>
		            	<div class="font16 lh26">
		              		<p class="mb10">
		              			<lang class="l_default">Not all search engines have the same expectations.</lang>
		              			<lang class="l_french">Tous les moteurs de recherche n'attendent pas la même chose de votre texte.</lang>
		              			<br>
		              			<lang class="l_default">Please select the search engine you wish to improve your ranking for.</lang>
		              			<lang class="l_french">Sélectionnez le moteur de recherche pour lequel vous souhaitez améliorer votre classement.</lang>
		              		</p>
		            	</div>
		          	</div>
		        </div>
	      	</div>
		</div>
		<div class="scene-footer">
			<div class="scene-footer-objects">
				<div class="scene-footer-btns">
					<a class="gohome">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/home-icon.png">
					</a>
					<a class="signin" scene="googlebing">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/signin-icon.png">
					</a>
					<a class="setting" scene="googlebing">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/settings-icon.png">
					</a>
					<a class="help">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/help-icon.png">
					</a>
				</div>
				<img class="logo gohome" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/textoptimizer_logo.png">
			</div>
			<div class="scene-footer-about">
				<span class="terms-policy">
					<lang class="l_default">By using this tool, you agree to the </lang>
					<lang class="l_french">En utilisant ce service, vous acceptez les </lang>
					<a class="terms" target="_blank" href="https://textoptimizer.com/terms">
						<lang class="l_default">Terms of Service</lang>
						<lang class="l_french">conditions d'utilisation</lang>
					</a>.
				</span>
			</div>
		</div>
	</div>
	<div class="scene" id="searchterms-scene">
		<div class="scene-header">
			
		</div>
		<div class="scene-body">
			<div class="bg_rocket_btm_l border border2 border_00afd8 rounded p15 p15-sm">
				<h4 class="mb30 pt20">
					<table>
						<tbody>
							<tr>
								<td class="valign_top">
									<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/search-terms_icon.png" style="max-width: 53px;">
								</td>
								<td style="padding-left: 25px;">
									<span class="font18-sm lh22 lh22-sm">
										<lang class="l_default">Search query (as searched by <span class="search-engine">Google</span>™ users)<br>to optimize your text for?</lang>
										<lang class="l_french">Pour quelle recherche des internautes dans <span class="search-engine">Google</span>™ optimiser votre texte?</lang>
									</span>
								</td>
							</tr>
						</tbody>
					</table>
				</h4>
				<div class="spacer h20-sm"></div>
				<table class="input_group input_group_sm mauto">
		      		<tbody>
		      			<tr>
					        <td>
					          	<input id="search-term" type="text" placeholder="Fill in your search query" class="optimize-query" style="font-size: 16px;">
					        </td>
					        <td>
					          	<input type="submit" value="GO" id="submit_searchterm">
					        </td>
		      			</tr>
		    		</tbody>
		    	</table>
		    	<div class="spacer h10"></div>
		    	<span class="font14" id="search-term-ex-widget">
		    		<strong>
		    			<lang class="l_default">Free examples:</lang>
		    			<lang class="l_french">Exemples gratuits:</lang>
		    		</strong>&nbsp;&nbsp;
                	'<a class="no_underline search-term-ex" rel="nofollow" href="#">solar panel</a>',&nbsp;&nbsp;&nbsp;
                    '<a class="no_underline search-term-ex" rel="nofollow" href="#">bitcoin</a>'
              	</span>
		    	<div class="spacer" style="height: 110px;"></div>
			</div>
			<div class="box bg_f5f7f7 rounded" style="margin-top: 30px;">
		        <div class="p60" style="display: flex;">
		          	<div class="col-md-2">
		            	<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/icon_conversation.png" style="max-width: 60px;">
		          	</div>
		          	<div class="col-md-10">
		            	<h5 class="mb18">
		            		<lang class="l_default">Help</lang>
		            		<lang class="l_french">Aide</lang>
		            	</h5>
		            	<div class="font16 lh26">
		              		<p class="mb10">
		              			<lang class="l_default">Example: You wish a better ranking of your webpage when people search for "best solar panel" in their search engine?</lang>
		              			<lang class="l_french">Exemple : vous souhaitez que votre page web soit mieux classée lorsque les internautes recherchent "meilleur panneau solaire" dans les moteurs de recherche?</lang>
		              			<br>
		              			<lang class="l_default">In the form above, fill in "best solar panel".</lang>
		              			<lang class="l_french">Dans le formulaire précédent, entrez: "meilleur panneau solaire".</lang>
		              		</p>
		            	</div>
		          	</div>
		        </div>
	      	</div>
		</div>
		<div class="scene-footer">
			<div class="scene-footer-objects">
				<div class="scene-footer-btns">
					<a class="gohome">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/home-icon.png">
					</a>
					<a class="signin" scene="searchterms">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/signin-icon.png">
					</a>
					<a class="setting" scene="searchterms">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/settings-icon.png">
					</a>
					<a class="help">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/help-icon.png">
					</a>
				</div>
				<img class="logo gohome" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/textoptimizer_logo.png">
			</div>
			<div class="scene-footer-about">
				<span class="terms-policy">
					<lang class="l_default">By using this tool, you agree to the </lang>
					<lang class="l_french">En utilisant ce service, vous acceptez les </lang>
					<a class="terms" target="_blank" href="https://textoptimizer.com/terms">
						<lang class="l_default">Terms of Service</lang>
						<lang class="l_french">conditions d'utilisation</lang>
					</a>.
				</span>
			</div>
		</div>
	</div>
	<div class="scene" id="setting-scene">
		<div class="scene-header">
			
		</div>
		<div class="scene-body">
			<div class="border border2 border_00afd8 rounded p10 p10-sm">
				<h4 style="width: 90%; margin: 20px auto;">
					<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/settings_icon_blue.png">
					<span class="font700 valign_middle pl20" style="font-size: 24px;">
						<lang class="l_default">Settings</lang>
						<lang class="l_french">Paramètres</lang>
					</span>
				</h4>
				<div class="spacer h40"></div>
				<table class="mauto" style="width: 90%;">
					<tbody>
						<tr>
							<th class="pr20">
								<span class="color_3a4a59 font600" style="font-size: 15px;">
									<lang class="l_default">Language</lang>
									<lang class="l_french">Langue</lang>:
								</span>
								<div class="inline_block relative valign_middle" style="margin-bottom: -5px;">
						      		<div class="info_popup2 right sm">
					              	<div class="question_icon" style="background-size: 17px;"></div>
						              	<div class="popup" style="width: 330px;">
						                	<div class="pop_arw"></div>
						                	<div class="pop_contain white_box rounded border p30 font400 lh22 color_3a4a59" style="font-size: 15px;">
						                  		<lang class="l_default">Your language preference for editorial suggestions offered by TextOptimizer.</lang>
						                  		<lang class="l_french">Votre préférence de langue pour les suggestions éditoriales proposées par TextOptimizer.</lang>
						                	</div>
						              	</div>
						            </div>
						      	</div>
							</th>
							<td style="width: 65%;">
								<select class="nice-select wide small" id="setting-language">
						        	<option value="en">English</option>
						        	<option value="fr">Français</option>
						        	<option value="nl">Nederlands (translation)</option>
						        	<option value="de">Deutsch (translation)</option>
						        	<option value="it">Italiano (translation)</option>
						        	<option value="pt">Português (translation)</option>
						        	<option value="es">Español (translation)</option>
						        	<option value="zh">中文 (translation)</option>
						        </select>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="spacer h20"></div>
				<div class="accordion location-widget">
					<div class="spacer h30"></div>
					<div class="color_3a4a59 font600 mauto" style="width: 90%; font-size: 15px;">
						<lang class="l_default">Audience location:</lang>
						<lang class="l_french">Audience ciblée :</lang>
						<div class="inline_block relative valign_middle" style="margin-bottom: -5px;">
				      		<div class="info_popup2 right sm">
			              	<div class="question_icon" style="background-size: 17px;"></div>
				              	<div class="popup" style="width: 290px;">
				                	<div class="pop_arw"></div>
				                	<div class="pop_contain white_box rounded border p30 font400 lh22 color_3a4a59">
				                  		<lang class="l_default">Your editorial suggestions will be adapted based on your targeted audience location.</lang>
				                  		<lang class="l_french">Vos suggestions éditoriales seront adaptées à l'emplacement de votre public cible.</lang>
				                	</div>
				              	</div>
				            </div>
				      	</div>
					</div>
					<div class="spacer h30"></div>
					<div class="mauto" style="width: 90%;">
						<select class="nice-select wide small" id="setting-location">
		
				        </select>
					</div>
				</div>
				<div class="spacer h40"></div>
				<div class="text-center">
					<a class="btn btn_sm" id="setting-save" style="font-size: 15px;">
						<span>
							<lang class="l_default">Save</lang>
							<lang class="l_french">Enregistrer</lang>
						</span>
					</a>
					<a class="no_underline pl20 pr20" id="setting-cancel" style="font-size: 14px;" href="#">
						<lang class="l_default">Cancel</lang>
						<lang class="l_french">Annuler</lang>
					</a>
				</div>
				<div class="spacer h20"></div>
			</div>
		</div>
		<div class="scene-footer">
			<div class="scene-footer-objects">
				<div class="scene-footer-btns">
					<a class="gohome">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/home-icon.png">
					</a>
					<a class="signin" scene="setting">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/signin-icon.png">
					</a>
					<a class="help">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/help-icon.png">
					</a>
				</div>
				<img class="logo gohome" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/textoptimizer_logo.png">
			</div>
			<div class="scene-footer-about">
				<span class="terms-policy">
					<lang class="l_default">By using this tool, you agree to the </lang>
					<lang class="l_french">En utilisant ce service, vous acceptez les </lang>
					<a class="terms" target="_blank" href="https://textoptimizer.com/terms">
						<lang class="l_default">Terms of Service</lang>
						<lang class="l_french">conditions d'utilisation</lang>
					</a>.
				</span>
			</div>
		</div>
	</div>
	<div class="scene" id="small-limitation-scene">
		<div class="scene-header">
			
		</div>
		<div class="scene-body">
			<div class="limitation-warning">
				<div class="message important rounded align_l">
			      	<table class="w100pc">
			      		<tbody>
			      			<tr>
			      				<td class="valign_top" style="width: 90px;">
			      					<img class="bordered_bot border_fff" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/Animation1_Haveanidea.gif" style="width: 96px; margin-top:-40px; margin-left:-40px;">
			      				</td>
				      			<td class="pt20 pb20 message-content">
				      				<p class="block mb18" style="font-size: 14px;">
				      					<span class="block">
								        	<lang class="l_default">No more free analysis for today.</lang>
								        	<lang class="l_french">Fin des analyses gratuites pour aujourd'hui.</lang>
								        </span>
								        <strong>
								        	<lang class="l_default">Solution: come back tomorrow or sign up for 10 more free analyses.</lang>
								        	<lang class="l_french">Solution: revenez demain ou inscrivez-vous pour 10 analyses gratuites supplémentaires.</lang>
								        </strong>
				      				</p>
						      	</td>
						    </tr>
					  	</tbody>
				  	</table>
	      		</div>
			</div>
			<div class="border border2 border_00afd8 rounded p15 p15-sm" style="padding: 3em 0 2em 0;">
				<table class="w100pc">
					<tbody>
						<tr>
							<td class="text-center pl20 pr20" style="border-right: 1px solid #e6e6e6;">
								<div class="relative">
									<img style="position: absolute; top: -15px; margin-left: -15px;" width="76" height="41" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/free_try.png">
									<img style="max-height: 70px; width: auto" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/icon_user.png">
								</div>
								<div class="spacer pt15 pb15 h60">
									<span class="lh16 font700 color_3a4a59 inline_block" style="font-size: 15px;">
										<lang class="l_default">I am a new user</lang>
										<lang class="l_french">Nouvel utilisateur</lang>
									</span>
								</div>
								<a class="btn btn_sm btn_orange display-signup" style="font-size: 15px;">
									<span>
										<lang class="l_default">Sign Up</lang>
										<lang class="l_french">Je m'enregistre</lang>
									</span>
								</a>
							</td>
							<td class="text-center pl20 pr20">
								<img style="max-height: 70px; width: auto;" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/icon_account.png">
								<div class="spacer pt15 pb15 h60">
									<span class="lh16 font700 color_3a4a59 inline_block" style="font-size: 15px;">
										<lang class="l_default">I have an account</lang>
										<lang class="l_french">Je suis enregistré</lang>
									</span>
								</div>
								<a class="btn btn_sm display-signin" style="font-size: 15px;">
									<span>
										<lang class="l_default">Sign In</lang>
										<lang class="l_french">Connexion</lang>
									</span>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="spacer h20"></div>
			</div>
		</div>
		<div class="scene-footer">
			<div class="scene-footer-objects">
				<div class="scene-footer-btns">
					<a class="gohome">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/home-icon.png">
					</a>
					<a class="signin" scene="small-limitation">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/signin-icon.png">
					</a>
					<a class="setting" scene="small-limitation">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/settings-icon.png">
					</a>
					<a class="help">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/help-icon.png">
					</a>
				</div>
				<img class="logo gohome" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/textoptimizer_logo.png">
			</div>
			<div class="scene-footer-about">
				<span class="terms-policy">
					<lang class="l_default">By using this tool, you agree to the </lang>
					<lang class="l_french">En utilisant ce service, vous acceptez les </lang>
					<a class="terms" target="_blank" href="https://textoptimizer.com/terms">
						<lang class="l_default">Terms of Service</lang>
						<lang class="l_french">conditions d'utilisation</lang>
					</a>.
				</span>
			</div>
		</div>
	</div>
	<div class="scene" id="big-limitation-scene">
		<div class="scene-header">
			
		</div>
		<div class="scene-body">
			<div class="limitation-warning">
				<div class="message important rounded align_l">
			      	<table class="w100pc">
			      		<tbody>
			      			<tr>
			      				<td class="valign_top" style="width: 90px;">
			      					<img class="bordered_bot border_fff" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/Animation1_Haveanidea.gif" style="width: 96px; margin-top:-40px; margin-left:-40px;">
			      				</td>
				      			<td class="pt20 pb20">
				      				<p class="block mb18" style="font-size: 14px;">
				      					<span class="block">
					      					<lang class="l_default">No more free analysis for today.</lang>
							      			<lang class="l_french">Fin des analyses gratuites pour aujourd'hui.</lang>	
					      				</span>
							      		<strong>
							      			<lang class="l_default">Solution: come back tomorrow or go PRO!</lang>
							      			<lang class="l_french">Solution: revenez demain ou souscrivez un abonnement PRO!</lang>
							      		</strong>
				      				</p>
						      	</td>
						    </tr>
					  	</tbody>
					</table>
	      		</div>
			</div>
			<div class="border border2 border_00afd8 rounded p15 p15-sm mauto" style="width: 450px;">
				<div class="spacer h40"></div>
				<div class="text-center">
		  			<a class="btn btn_orange unlock-pro">
		  				<span>
		  					<i class="fas fa-unlock-alt"></i> &nbsp; 
		  					<lang class="l_default">Unlock PRO features</lang>
		  					<lang class="l_french">Déverrouiller les fonctionnalités PRO</lang>
		  				</span>
		  			</a>
	  			</div>
	  			<div class="spacer h50"></div>
	  			<div class="text-center" style="padding-bottom: 1em;">
	  				<div class="relative">
		  				<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/screen4.png" style="max-width: 340px;">
		  				<div class="horizontal_middle" style="position: absolute; top: 3px; width: 300px;">
			  				<video id="big-limitation-scene-body-video" controls="true" playsinline="" autoplay="" loop="" muted="" width="100%" height="auto">
					            <source src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/en3_900x557.mp4" type="video/mp4">
			          		</video>
			        	</div>
			      	</div>
	  			</div>
			</div>
		</div>
		<div class="scene-footer">
			<div class="scene-footer-objects">
				<div class="scene-footer-btns">
					<a class="gohome">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/home-icon.png">
					</a>
					<a class="signin" scene="big-limitation">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/signin-icon.png">
					</a>
					<a class="setting" scene="big-limitation">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/settings-icon.png">
					</a>
					<a class="help">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/help-icon.png">
					</a>
				</div>
				<img class="logo gohome" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/textoptimizer_logo.png">
			</div>
			<div class="scene-footer-about">
				<span class="terms-policy">
					<lang class="l_default">By using this tool, you agree to the </lang>
					<lang class="l_french">En utilisant ce service, vous acceptez les </lang>
					<a class="terms" target="_blank" href="https://textoptimizer.com/terms">
						<lang class="l_default">Terms of Service</lang>
						<lang class="l_french">conditions d'utilisation</lang>
					</a>.
				</span>
			</div>
		</div>
	</div>
	<div class="scene" id="signin-scene">
		<div class="scene-header">
			
		</div>
		<div class="scene-body">
			<div class="border border2 border_00afd8 rounded p30 p30-sm pt20 pt20-sm pb20 pb20-sm">
				<div class="spacer h20"></div>
				<strong class="font24 font24-sm mb25 mb25-sm block">
					<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/icon_sign_in.png" style="max-width:41px; margin-right: 9px;">
					<span class="pl10 valign_middle font600 color_3a4a59">
						<lang class="l_default">Sign In</lang>
						<lang class="l_french">Connexion</lang>
					</span>
				</strong>
				<table class="mauto">
					<tbody>
						<tr>
							<th class="pr20 align_r">
								<span class="color_3a4a59 font600" style="font-size: 15px;">Email:</span>
							</th>
							<td>
								<input type="text" id="signin-email">
							</td>
						</tr>
						<tr>
							<td colspan="3" class="h20"></td>
						</tr>
						<tr>
							<th class="pr20 align_r">
								<span class="color_3a4a59 font600" style="font-size: 15px;">
									<lang class="l_default">Password</lang>
									<lang class="l_french">Mot de passe</lang>:
								</span>
							</th>
							<td>
								<input type="password" id="signin-password">
							</td>
						</tr>
					</tbody>
				</table>
				<div class="spacer h40"></div>
				<div class="text-center">
					<a class="btn btn_sm" id="signin-submit">
						<span style="font-size: 15px;">
							<lang class="l_default">Sign In</lang>
							<lang class="l_french">Connexion</lang>
						</span>
					</a>
					<a href="https://textoptimizer.com/password_restore" target="_blank" class="font16 no_underline pl60 pr20">
						<lang class="l_default">Forgot password?</lang>
						<lang class="l_french">Mot de passe perdu?</lang>
					</a>
					<a class="font16 no_underline pl20 pr20" id="signin-cancel" href="#">
						<lang class="l_default">Cancel</lang>
						<lang class="l_french">Annuler</lang>
					</a>
				</div>
				<div class="spacer h30"></div>
			</div>
		</div>
	</div>
	<div class="scene" id="signup-scene">
		<div class="scene-header">
			
		</div>
		<div class="scene-body">
			<div class="border border2 border_00afd8 rounded p30 p30-sm pt20 pt20-sm pb20 pb20-sm">
				<div class="spacer h20"></div>
				<strong class="font24 font24-sm mb25 mb25-sm block">
					<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/icon_sign_in.png" style="max-width: 41px; margin-right: 9px;">
					<span class="pl10 valign_middle font600 color_3a4a59">
						<lang class="l_default">Sign Up</lang>
						<lang class="l_french">Je m'enregistre</lang>
					</span>
				</strong>
				<table class="mauto">
					<tbody>
						<tr>
							<th class="pr20 align_r">
								<span class="color_3a4a59 font600 nowrap" style="font-size: 15px;">
									<lang class="l_default">Your profile</lang>
									<lang class="l_french">Votre profil</lang>:
								</span>
							</th>
							<td style="min-width: 295px;">
								<select id="signup-profile" class="nice-select wide">
									<option value="copywriter">Copywriter</option>
									<option value="seo">Seo expert</option>
									<option value="website owner">Website Owner</option>
									<option value="marketing professional">Marketing Professional</option>
									<option value="content strategist">Content Strategist</option>
									<option value="Student">Student</option>
									<option value="other">Other</option>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="2" class="h20"></td>
						</tr>
						<tr>
							<th class="pr20 align_r">
								<span class="color_3a4a59 font600" style="font-size: 15px;">Email:</span>
							</th>
							<td>
								<input type="text" id="signup-email">
							</td>
						</tr>
						<tr>
							<td colspan="2" class="h20"></td>
						</tr>
						<tr>
							<th class="pr20 align_r">
								<span class="color_3a4a59 font600 nowrap" style="font-size: 15px;">
									<lang class="l_default">Password</lang>
									<lang class="l_french">Mot de passe</lang>:
								</span>
							</th>
							<td>
								<input type="password" id="signup-password">
							</td>
						</tr>
						<tr>
							<td colspan="2" class="h40"></td>
						</tr>
						<tr>
							<td colspan="2">
								<div style="float: left; width: 40px;">
									<input type="checkbox" name="termsagree" style="/*border: none;*/ box-shadow: none; outline: none; float: right; margin-right: 15px;">
								</div>
								<div style="float: left; width: calc(100% - 40px);">
									<span class="font16 lh16-sm inline_block fl">
										<lang class="l_default">I have read and agreed with the</lang>
										<lang class="l_french">J'accepte les</lang> 
										<a href="https://textoptimizer.com/terms" class="terms no_underline" target="_blank">
											<lang class="l_default">Terms of Service</lang>
											<lang class="l_french">conditions d'utilisation</lang>
										</a> 
										<lang class="l_default">and</lang>
										<lang class="l_french">et la</lang> 
										<a class="policy no_underline" href="https://textoptimizer.com/privacy" target="_blank">
											<lang class="l_default">Privacy Policy</lang>
											<lang class="l_french">politique de confidentialité</lang>
										</a>. 
										<lang class="l_default">I agree to receive emails, from which I can unsubscribe.</lang>
										<lang class="l_french">J'accepte de recevoir des courriels que je peux désabonner.</lang>
									</span>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="2" class="h40"></td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="g-recaptcha" data-sitekey="6LePB-oZAAAAAMq88M40Btby1pUcCKe_8jU6ITPs" style="display: flex; justify-content: center;"></div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="spacer h40"></div>
				<div class="text-center">
					<a class="btn btn_sm" id="signup-submit" style="font-size: 15px;">
						<span>
							<lang class="l_default">Sign Up</lang>
							<lang class="l_french">Je m'enregistre</lang>
						</span>
					</a>
					<a class="no_underline pl20 pr20" id="signup-cancel" style="font-size: 14px;" href="#">
						<lang class="l_default">Cancel</lang>
						<lang class="l_french">Annuler</lang>
					</a>
				</div>
				<div class="spacer h30"></div>
			</div>
		</div>
	</div>
	<div class="scene" id="help-scene">
		<div class="scene-header">
			
		</div>
		<div class="scene-body">
			<div class="border border2 border_00afd8 rounded p40">
				<strong class="font24 font24-sm mb25 mb25-sm block">
					<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/icon_help.png" style="max-width:41px; margin-right: 9px;">
					<span class="pl10 valign_middle font600 color_3a4a59">
						<lang class="l_default">Help</lang>
						<lang class="l_french">Aide</lang>
					</span>
				</strong>
				<div class="accordion sm">
			        <button class="accordion_top">
			        	<lang class="l_default">How can I limit the analysis to a part of my text?</lang>
			        	<lang class="l_french">Comment limiter l'analyse à une partie de mon texte seule ?</lang>
			        </button>
			        <div class="panel">
			          	<lang class="l_default">Select only the part of your text that you want to analyze, then start the analysis.</lang>
			          	<lang class="l_french">Sélectionner uniquement la partie de votre texte que vous souhaitez analyser, puis lancer l'analyse.</lang>
			          	<div class="mauto" style="max-width: 480px;">
				          	<video muted="" autoplay="" loop="" width="100%" height="auto">
					            <source src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/select_text_and_copy.mp4" type="video/mp4">
			          		</video>
			          	</div>
			        </div>
			        <button class="accordion_top">
			        	<lang class="l_default">Any tips on selecting suggested words ?</lang>
			        	<lang class="l_french">Des conseils sur la sélection des mots suggérés ?</lang>
			        </button>
			        <div class="panel">
			        	<ul>
			        		<lang class="l_default">
				        		<li>Choose the most suitable words for your text, from a reader’s point of view.</li>
				        		<li>Modify your text to add the words you selected.</li>
				        		<li>You may modify sentences or write new ones.</li>
				        		<li>Be natural in your writing. Avoid keyword stuffing.</li>
				        		<li>Repeat until you reach an 80% content rating.</li>
				        	</lang>
				        	<lang class="l_french">
				        		<li>Choisissez les mots les plus adaptés à votre texte. Les mots ne sont pas classés, restez naturel.</li>
				        		<li>Modifiez votre texte pour ajouter les mots sélectionnés (modifiez vos phrases ou écrivez-en de nouvelles).</li>
				        		<li>Relancez l'analyse jusqu'à atteindre un score de 80%.</li>
				        	</lang>
			        	</ul>
			        </div>
			        <button class="accordion_top">
			        	<lang class="l_default">Contact Us</lang>
			        	<lang class="l_french">Contactez-nous</lang>
			        </button>
			        <div class="panel">
			          	<lang class="l_default">You can contact us by email : </lang>
			          	<lang class="l_french">Vous pouvez nous contacter par email : </lang>
			          	<a href="mailto:contact@webinfo-ltd.com?subject=TextOptimizer" target="_blank">contact@webinfo-ltd.com</a>
			        </div>
		      	</div>
			</div>
		</div>
		<div class="scene-footer">
			<div class="scene-footer-objects">
				<div class="scene-footer-btns">
					<a class="gohome">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/home-icon.png">
					</a>
					<a class="signin" scene="help">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/signin-icon.png">
					</a>
					<a class="setting" scene="help">
						<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/settings-icon.png">
					</a>
				</div>
				<img class="logo gohome" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/textoptimizer_logo.png">
			</div>
			<div class="scene-footer-about">
				<span class="terms-policy">
					<lang class="l_default">By using this tool, you agree to the </lang>
					<lang class="l_french">En utilisant ce service, vous acceptez les </lang>
					<a class="terms" target="_blank" href="https://textoptimizer.com/terms">
						<lang class="l_default">Terms of Service</lang>
						<lang class="l_french">conditions d'utilisation</lang>
					</a>.
				</span>
			</div>
		</div>
	</div>
	<div id="message-template">
		<div class="message success" style="border: 2px solid green;">
	        <table>
	      		<tbody>
	      			<tr>
	      				<td>
				        	<i class="fas fa-thumbs-up"></i>
				      	</td>
				      	<td>
				        	<span>Success message.</span>
				      	</td>
				    </tr>
			  	</tbody>
			</table>
      	</div>
		<div class="message error" style="border: 2px solid darkred;">
			<table>
	      		<tbody>
	      			<tr>
	      				<td>
				        	<i class="fas fa-exclamation-triangle"></i>
				      	</td>
				      	<td>
				        	<span>Error message!</span>
				      	</td>
				    </tr>
			  	</tbody>
			</table>
	  	</div>	
	  	<div class="message important" style="border: 2px solid darkorange;">
	  		<table>
	      		<tbody>
	      			<tr>
	      				<td>
				        	<i class="fas fa-info-circle"></i>
				      	</td>
				      	<td>
				        	<span>Important message!</span>
				      	</td>
				    </tr>
			  	</tbody>
			</table>
      	</div>
	</div>
	<div class="loading-screen">
		<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/close_popup_btn.png" class="cancel_loading">
		<div class="loading-girl">
			<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/loading_1.png" width="300">
		</div>
		<div class="loading-gif">
			<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/progress_bar.gif">
		</div>
	</div>
	<div class="default_popup textoptimizer_popup video-popup">
  		<div class="bg_fff mauto rounded overflow_hidden relative" style="width:440px; margin-top:10px;">
  			<div style="padding: 30px 40px 40px 40px;">
  				<a class="close_popup_btn">x</a>
	  			<div class="row" style="padding-bottom: 20px;">
		          	<div class="col-xs-11">
		            	<table>
		            		<tbody>
		            			<tr>
			            			<td>
						            	<img style="max-width: 99px; margin-left: -10px; margin-right: 20px;" src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/strong-text_icon.png">
						            </td>
						            <td>
						            	<strong class="font600 block color_3a4a59" style="font-size: 18px; line-height: 24px;">
						            		<lang class="l_default">Is your text optimized for Search Engines?</lang>
		            						<lang class="l_french">Votre texte est-il optimisé pour les moteurs de recherche?</lang>
						            	</strong>
						            </td>
					          	</tr>
					        </tbody>
					    </table>
		          	</div>
	        	</div>
	        	<div style="display: flex; justify-content: center; align-items: center;" class="color_3a4a59">
	        		<span class="font600 font14 font14-sm lh16">
	        			<lang class="l_default">YOUR<br>TEXT</lang>
	        			<lang class="l_french">VOTRE<br>TEXTE</lang>
	        		</span>
	        		<span style="background: url('<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/circles_icon.png') no-repeat center top; min-width: 170px; height: 126px; background-size: 170px; margin: 0 10px;">
	        		</span>
	        		<span class="font600 font14 font14-sm lh16">
	        			<lang class="l_default">SEARCH ENGINE<br>EXPECTATIONS</lang>
	        			<lang class="l_french">ATTENTES DES MOTEURS<br>DE RECHERCHE</lang>
	        		</span>
        		</div>
		  		<div class="spacer h30-sm"></div>
		  		<div class="text-center">
		  			<a class="btn proof-of-concept" href="https://textoptimizer.com/h3" target="_blank">
		  				<span style="padding: 15px; font-size: 16px; line-height: 16px;">
		  					<table class="w100pc">
								<tbody>
									<tr>
										<td style="width: 41px; padding-right: 1em;">
											<i class="fas fa-info-circle" style="font-size: 30px;"></i>
										</td>
										<td class="lh20 whitespace_normal align_l">
											<lang class="l_default">How does optimizing your text can improve your rankings?</lang>
			  								<lang class="l_french">Découvrez pourquoi optimiser vos textes peut améliorer vos classements.</lang>
										</td>
									</tr>
								</tbody>
							</table>
		  				</span>
					</a>
		  			<div class="spacer h20-sm"></div>
		  			<a class="btn btn_orange unlock-pro">
	  					<span style="padding: 15px 20px; font-size: 16px; line-height: 16px;">
	  						<table class="w100pc">
								<tbody>
									<tr>
										<td style="width: 41px; padding-right: 1em;">
											<i class="fas fa-unlock-alt" style="font-size: 30px;"></i>
										</td>
										<td class="lh20 whitespace_normal align_l">
											<lang class="l_default">Unlock PRO features</lang>
	  										<lang class="l_french">Déverrouiller les <b>fonctionnalités PRO</b></lang>
			  							</td>
										<td>
											<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/rocket4.png" style="max-width:126px; margin:0 -30px -40px -20px;">
										</td>
									</tr>
								</tbody>
							</table>
	  					</span>
	  				</a>
	  			</div>
	  		</div>
  			<div class="text-center" style="padding-bottom: 1em;">
  				<div class="relative">
	  				<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/screen4.png" style="max-width: 430px;">
	  				<div class="horizontal_middle" style="position: absolute; top: 3px; width: 390px;">
		  				<video id="video-popup-video" controls="true" playsinline="" autoplay="" loop="" muted="" width="100%" height="auto">
				            <source src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/en3_900x557.mp4" type="video/mp4">
		          		</video>
		        	</div>
		      	</div>
  			</div>
  		</div>
  	</div>
	<script type="text/x-underscore-template" id="unlock-pro-form-template">
		<form id="unlock-pro-form" action="https://textoptimizer.com/offers" method="POST" target="_blank" style="display: none;">
			<input type="text" name="api_key" value="api_key">
			<input type="submit" value="Submit">
		</form>
	</script>
	<div class="processing-screen">
		<img src="<?php echo esc_url(TEXTOPTIMIZER_PLUGIN_URL); ?>i_extension/loading.gif">
	</div>
</div>