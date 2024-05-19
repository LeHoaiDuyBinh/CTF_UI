<div id="main_wrapper" class="row">
                <ul id="breadcrumb" class="breadcrumbs">
                    <li>
                        <a title="Challenges"><span>Challenges</span></a>
                        <meta content="2">
                    </li>
                    <li>
                        <a title="Network"><span>Network</span></a>
                        <meta content="3">
                    </li>
                </ul>
                <main id="main">
                    <div class="small-12 columns">
                        <div class="tile">
                            <div class="t-body tb-padding">
                                <div class="row">
                                    <div class="columns medium-10">
                                        <h1 class="crayon challenge-titre-97 "><?php echo $data['chall_details']->getChall_name(); ?></h1>
                                    </div>
                                    <div class="columns small-12">
                                        <h2 class="crayon challenge-score-96 "><?php echo $data['chall_details']->getScore();?>&nbsp;Points&nbsp;&nbsp;
                                            <a><img src="/public/img/network.png" alt="0x0" class="vmiddle" width="32" height="32"></a>
                                        </h2>
                                        <h3 class="crayon challenge-soustitre-97">Packet capture analysis</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns small-6 medium-3">
                                        <h4>Author</h4>
                                        <span><a class=" txt_0minirezo" title="profil of g0uZ"><?php echo $data['chall_details']->getAuthor();?></a></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns small-12">
                                        <h4>Statement</h4>
                                        <div class="crayon challenge-descriptif-97 ">
                                            <p><?php echo $data['chall_details']->getDescription();?></p>
                                        </div>
                                        <?php $pathFile = $data['chall_details']->getChall_path(); ?>
                                        <a class="button small radius" target="_BLANK" href="<?php echo $pathFile ?>">Start the challenge</a>
                                        <div class="ajax-form-container">
                                            <div id="validation_challenge">
                                                <a name="validation_challenge"></a>
                                                <div class="formulaire_spip formulaire_validation_challenge formulaire_editer_message_validation_challenge" id="formulaire_validation_challenge">
                                                    <br class="bugajaxie">
                                                    <h4>Validation</h4>
                                                    <form name="formulaire_validation_challenge" method="post" action="/Api/CheckFlag/" id="formFlag">
                                                    <?php if(isset($_SESSION['message'])): ?>
                                                        <div style="width: 100%; text-align: center;  font-style:italic; font-size: 16px;" class="alert alert-danger"><?php echo $_SESSION['message']; ?></div>
                                                            <?php unset($_SESSION['message']); ?>
                                                        <?php endif; ?>
                                                        <input type="hidden" id = "id_chall" name="id_chall" value="<?php echo $data['chall_details']->getChall_id(); ?>">      
                                                        <input type="hidden" id = "score_chall" name="score_chall" value="<?php echo $data['chall_details']->getScore(); ?>">                        
                                                        <input type="hidden" id = "username" name="username" value="<?php echo $_SESSION['usr']; ?>">                        
                                                        <label for="passe">Enter flag</label>
                                                        <input type="text" autocomplete="off" name="FLAG" id="FLAG" length="30" class="spip_bouton" required="required" autocapitalize="off" autocorrect="off">                                                         
                                                        <p class="boutons"><input type="submit" value="Send" class="submit"></p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <div style="background: var(--light);color: var(--dark);">
                    <table width="100%" id="myTable">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th style="width: 50px;"><span class="las la-sort"></span> Username</th>
                                <th style="width: 50px;"><span class="las la-sort"></span> Submit time</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <?php if($data['user_submitted'] != "None"){ ?>
                                <?php foreach($data['user_submitted'] as $usr): ?>
                                    <tr> 
                                        <td data-label="Username"><?php echo $usr->getUsername(); ?></td>
                                        <td data-label="Submit"><?php echo $usr->getSubmit_time(); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php } else { ?>
                                <tr>
                                    <td data-label="User" colspan="2" style="font-style: italic;">None</td>
                                </tr> 
                             <?php   };?>
                        </tbody>
                    </table>
                </div>
                <footer id="footer" role="contentinfo">
                    <div class="text-center">
                        <div class="columns small-12">
                            <img src="/public/img/Logo_PTIT.png" class="vmiddle" alt="Root-Me" width="48" height="48">
                        </div>
                        <div class="columns small-12">
                            <a class="gris2" title="Confidentiality">Confidentiality</a> &nbsp;|&nbsp;
                            <a class="gris2" title="Legal Disclaimer">Legal Disclaimer</a> &nbsp;|&nbsp;
                            <a class="gris2" title="Terms of Service">Terms of Service</a><br> Root Me : Hacking and Information Security learning platform<br> ©&nbsp;2010&nbsp;-&nbsp;2023
                            <br>
                            <hr>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="small-10 large-3 small-centered columns">
                            <div class="small-2 columns">
                                <a title="Twitch"><img src="/public/img/twitch.png" alt="Twitch" class="vmiddle grayscale grayscale_hoveroff" width="24" height="24"></a>
                            </div>
                            <div class="small-2 columns">
                                <a title="Youtube"><img src="/public/img/youtube.png" alt="Youtube" class="vmiddle grayscale grayscale_hoveroff" width="24" height="24"></a>
                            </div>
                            <div class="small-2 columns">
                                <a title="Twitter"><img src="/public/img/tiwiter.png" alt="Twitter" class="vmiddle grayscale grayscale_hoveroff" width="24" height="24"></a>
                            </div>
                            <div class="small-2 columns">
                                <a title="Linkedin"><img src="/public/img/linkedin.png" alt="Linkedin" class="vmiddle grayscale grayscale_hoveroff" width="24" height="24"></a>
                            </div>
                            <div class="small-2 columns">
                                <a title="Dynamic Stream"><img src="/public/img/dynamic.png" alt="Dynamic Stream" class="vmiddle grayscale grayscale_hoveroff" width="24" height="24"></a>
                            </div>
                            <div class="small-2 columns">
                                <a title="Discord"><img src="/public/img/discord.png" alt="Discord" class="vmiddle grayscale grayscale_hoveroff" width="24" height="24"></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>