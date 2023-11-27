<div id="main_wrapper" class="row">
                <ul id="breadcrumb" class="breadcrumbs">
                    <li>
                        <a title="Challenges"><span>Challenges</span></a>
                        <meta content="1">
                    </li>
                    <li>
                        <a title="Network"><span>Network</span></a>
                        <meta content="2">
                    </li>
                </ul>
                <main id="main">
                    <div class="ajaxbloc bind-ajaxReload">
                        <div class="small-12 columns">
                            <div class="tile">
                                <div class="t-body tb-padding">
                                    <h1 class="crayon rubrique-titre-183 "><img src="/public/img/network.png" alt="Network" width="48" height="48" class="vmiddle" itemprop="image">&nbsp;<span itemprop="headline name">Network</span></h1>
                                    <h3 class="crayon rubrique-descriptif-183 ">Investigate captured traffic, network services and perform packet analysis
                                    </h3>
                                    <div class="texte crayon rubrique-texte-183 ">
                                        <p>The following set of problems deal with network traffic including different protocols. You need to analyse the packet captures to solve these challenges.</p>
                                        <p>Prerequisites:
                                            <br><span class="spip-puce ltr"><b>–</b></span>&nbsp;Knowledge of a network capture analyzing tool.
                                            <br><span class="spip-puce ltr"><b>–</b></span>&nbsp;Knowlege of the most common network protocols.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ajaxbloc ajax-id-liste_challenge bind-ajaxReload">
                            <div class="small-12 columns">
                                <div class="tile">
                                    <div class="t-body tb-padding">
                                        <div class="right">
                                            <form id="filtrer_liste_challenge" method="get">
                                                <input type="search" id="titre_co" name="titre_co" placeholder="Filter">
                                            </form>
                                        </div>
                                        <div class="ajaxbloc ajax-id-liste_challenge_inc bind-ajaxReload">
                                            <h1 id="liste_challenge">
                                                <img src="/public/img/challenge.png" alt="challenges" width="48" height="48" class="vmiddle">&nbsp;<b class="color1">27</b>&nbsp;Challenges
                                            </h1>
                                            <a id="pagination_co" class="pagination_ancre"></a>
                                            <table class="text-center" style="width: 100%">
                                                <thead>
                                                    <tr class="row_first">
                                                        <td>Results</td>
                                                        <td><a class="ajax bind-ajax">Name</a></td>
                                                        <td><a class="ajax bind-ajax">Number of points</a>&nbsp;&nbsp;
                                                            <a class="mediabox pageajax cboxElement hasbox" title="Explanation for the scores"><img src="/public/img/question.png" width="16" height="16" alt="Explanation for the scores"></a>
                                                        </td>
                                                        <td class="text-center show-for-large-up"><a class="ajax bind-ajax">Author</a></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach($data['list_chall'] as $each): ?>
                                                    <tr>
                                                        <td>
                                                            <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                        </td>
                                                        <?php $path = str_replace(' ', '', $each->getChall_name()); ?>
                                                        <td class="text-center">
                                                            <a href="/Challenge/Category/Network/<?php echo $path ?>" title="Packet capture analysis" data-label="Chall_Name"><?php echo $each->getChall_name(); ?></a>
                                                        </td>
                                                        <td data-label="Score"><?php echo $each->getScore(); ?></td>
                                                        <td class="show-for-large-up">
                                                            <a class="txt_0minirezo" title="profil of g0uZ" data-label="Author"><?php echo $each->getAuthor(); ?></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
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