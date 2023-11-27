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
                                        <h1 class="crayon challenge-titre-97 ">FTP - authentication</h1>
                                    </div>
                                    <div class="columns small-12">
                                        <h2 class="crayon challenge-score-96 ">5&nbsp;Points&nbsp;&nbsp;
                                            <a><img src="/public/img/network.png" alt="0x0" class="vmiddle" width="32" height="32"></a>
                                        </h2>
                                        <h3 class="crayon challenge-soustitre-97">Packet capture analysis</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns small-6 medium-3">
                                        <h4>Author</h4>
                                        <span><a class=" txt_0minirezo" title="profil of g0uZ">g0uZ</a></span>,&nbsp;&nbsp;<time datetime="2023-11-25T03:59:43+01:00">30&nbsp;August 2010</time>
                                    </div>
                                    <div class="columns small-6 medium-3">
                                        <h4>Level&nbsp;&nbsp;
                                            <a class="mediabox pageajax cboxElement hasbox"><img src="/public/img/question.png" width="16" height="16" alt="Difficulty"></a>
                                        </h4>
                                        <a class="difficulte difficulte1   difficulte1a" style="min-width: 12px; height: 0.75rem;" title="Very easy : First level of the challenge"></a>
                                        <a class="difficulte difficulte2 " style="min-width: 12px; height: 1rem;" title="Easy : 2nd level of the challenge"></a>
                                        <a class="difficulte difficulte3 " style="min-width: 12px; height: 1.25rem;" title="Medium : 3rd level of the challenge"></a>
                                        <a class="difficulte difficulte4 " style="min-width: 12px; height: 1.5rem;" title="Hard : 4th level of the challenge"></a>
                                        <a class="difficulte difficulte36 " style="min-width: 12px; height: 1.75rem;" title="Very hard : Last level of the challenge"></a>
                                    </div>
                                    <div class="columns small-6 medium-3">
                                        <h4>Validations</h4>
                                        <span class="left">
                                            <a class="mediabox pageajax cboxElement hasbox">91699&nbsp;Challengers</a>
                                        </span>
                                        <span class="left gras" style="margin-left: 1rem; border-radius: 5px; padding-left: 5px; width: 15%; background-color: #ff9c70;">30%</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns small-12">
                                        <h4>Statement</h4>
                                        <div class="crayon challenge-descriptif-97 ">
                                            <p>An authenticated file exchange achieved through FTP. Recover the password used by the user.</p>
                                        </div>
                                        <a class="button small radius" target="_BLANK" href="http://challenge01.root-me.org/reseau/ch1/ch1.pcap">Start the challenge</a>
                                        <div class="ajax-form-container">
                                            <div id="validation_challenge">
                                                <a name="validation_challenge"></a>
                                                <div class="formulaire_spip formulaire_validation_challenge formulaire_editer_message_validation_challenge" id="formulaire_validation_challenge">
                                                    <br class="bugajaxie">
                                                    <h4>Validation</h4>
                                                    <form name="formulaire_validation_challenge" method="post"><input type="hidden" name="var_ajax" value="form">
                                                        <span class="form-hidden"><input name="formulaire_action" type="hidden" value="validation_challenge"><input name="formulaire_action_args" type="hidden"><input name="formulaire_action_sign" type="hidden"></span>
                                                        <fieldset>
                                                            <div class="editer-groupe">
                                                                <div class="editer saisie_passe obligatoire">
                                                                    <label for="passe">Enter password</label>
                                                                    <input type="password" autocomplete="off" name="passe" id="passe" length="30" class="spip_bouton" required="required" autocapitalize="off" autocorrect="off">
                                                                </div>
                                                            </div>
                                                        </fieldset>
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
                                                    <td class="hide-for-small-only"><a class="ajax bind-ajax">Validations</a></td>
                                                    <td><a class="ajax bind-ajax">Number of points</a>&nbsp;&nbsp;
                                                        <a class="mediabox pageajax cboxElement hasbox" title="Explanation for the scores"><img src="/public/img/question.png" width="16" height="16" alt="Explanation for the scores"></a>
                                                    </td>
                                                    <td class="text-center show-for-medium-up"><a class="ajax bind-ajax">Difficulty</a>&nbsp;&nbsp;
                                                        <a class="mediabox pageajax cboxElement hasbox"><img src="/public/img/question.png" width="16" height="16" alt="Difficulty"></a>
                                                    </td>
                                                    <td class="text-center show-for-large-up"><a class="ajax bind-ajax">Author</a></td>
                                                    <td class="show-for-large-up"><a class="ajax bind-ajax">Solution</a></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                    </td>
                                                    <td class="text-left">
                                                        <a title="Packet capture analysis">FTP - authentication</a>
                                                    </td>
                                                    <td class="hide-for-small-only text-left">
                                                        <span class="gras left text-left" style="display: inline-block; border-radius: 5px; padding: 2px; width: 30%; background-color: #ff9c70;">30%</span>
                                                        <span class="right">
                                                            <a class="txs gris mediabox pageajax cboxElement hasbox">91699</a>
                                                        </span>
                                                    </td>
                                                    <td>5</td>
                                                    <td class="show-for-medium-up">
                                                        <a title="Very easy : First level of the challenge">
                                                            <span class="difficulte difficulte1   difficulte1a" style="height: 0.2rem;"></span><span class="difficulte difficulte2 " style="height: 0.4rem;"></span><span class="difficulte difficulte3 " style="height: 0.6rem;"></span>
                                                            <span class="difficulte difficulte4 " style="height: 0.8rem;"></span><span class="difficulte difficulte36 " style="height: 1rem;"></span></a>
                                                    </td>
                                                    <td class="show-for-large-up">
                                                        <a class="txt_0minirezo" title="profil of g0uZ">g0uZ</a>
                                                    </td>
                                                    <td class="show-for-large-up">8</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                    </td>
                                                    <td class="text-left">
                                                        <a title="Packet capture analysis">TELNET - authentication</a>
                                                    </td>
                                                    <td class="hide-for-small-only text-left">
                                                        <span class="gras left text-left" style="display: inline-block; border-radius: 5px; padding: 2px; width: 27%; background-color: #ff9c70;">27%</span>
                                                        <span class="right">
                                                            <a class="txs gris mediabox pageajax cboxElement hasbox">81525</a>
                                                        </span>
                                                    </td>
                                                    <td>5</td>
                                                    <td class="show-for-medium-up">
                                                        <a title="Very easy : First level of the challenge"><span class="difficulte difficulte1   difficulte1a" style="height: 0.2rem;"></span><span class="difficulte difficulte2 " style="height: 0.4rem;"></span><span class="difficulte difficulte3 " style="height: 0.6rem;"></span><span class="difficulte difficulte4 " style="height: 0.8rem;"></span><span class="difficulte difficulte36 " style="height: 1rem;"></span></a>
                                                    </td>
                                                    <td class="show-for-large-up">
                                                        <a class="txt_0minirezo" title="profil of g0uZ">g0uZ</a>
                                                    </td>
                                                    <td class="show-for-large-up">10</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                    </td>
                                                    <td class="text-left">
                                                        <a title="Frame analysis">ETHERNET - frame</a>
                                                    </td>
                                                    <td class="hide-for-small-only text-left">
                                                        <span class="gras left text-left" style="display: inline-block; border-radius: 5px; padding: 2px; width: 22%; background-color: #ff9c70;">22%</span>
                                                        <span class="right">
                                                            <a class="txs gris mediabox pageajax cboxElement hasbox">65396</a>
                                                        </span>
                                                    </td>
                                                    <td>10</td>
                                                    <td class="show-for-medium-up">
                                                        <a title="Very easy : First level of the challenge"><span class="difficulte difficulte1   difficulte1a" style="height: 0.2rem;"></span><span class="difficulte difficulte2 " style="height: 0.4rem;"></span><span class="difficulte difficulte3 " style="height: 0.6rem;"></span><span class="difficulte difficulte4 " style="height: 0.8rem;"></span><span class="difficulte difficulte36 " style="height: 1rem;"></span></a>
                                                    </td>
                                                    <td class="show-for-large-up">
                                                        <a class="txt_6forum" title="profil of abu_youssef">abu_youssef</a>
                                                    </td>
                                                    <td class="show-for-large-up">12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                    </td>
                                                    <td class="text-left">
                                                        <a title="Packet capture analysis">Twitter authentication</a>
                                                    </td>
                                                    <td class="hide-for-small-only text-left">
                                                        <span class="gras left text-left" style="display: inline-block; border-radius: 5px; padding: 2px; width: 23%; background-color: #ff9c70;">23%</span>
                                                        <span class="right">
                                                            <a class="txs gris mediabox pageajax cboxElement hasbox">70736</a>
                                                        </span>
                                                    </td>
                                                    <td>15</td>
                                                    <td class="show-for-medium-up">
                                                        <a title="Easy : 2nd level of the challenge"><span class="difficulte difficulte1 " style="height: 0.2rem;"></span><span class="difficulte difficulte2   difficulte2a" style="height: 0.4rem;"></span><span class="difficulte difficulte3 " style="height: 0.6rem;"></span><span class="difficulte difficulte4 " style="height: 0.8rem;"></span><span class="difficulte difficulte36 " style="height: 1rem;"></span></a>
                                                    </td>
                                                    <td class="show-for-large-up">
                                                        <a class="txt_0minirezo" title="profil of g0uZ">g0uZ</a>
                                                    </td>
                                                    <td class="show-for-large-up">7</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                    </td>
                                                    <td class="text-left">
                                                        <a title="Google is your friend">Bluetooth - Unknown file</a>
                                                    </td>
                                                    <td class="hide-for-small-only text-left">
                                                        <span class="gras left text-left" style="display: inline-block; border-radius: 5px; padding: 2px; width: 9%; background-color: #ff4b4b;">9%</span>
                                                        <span class="right">
                                                            <a class="txs gris mediabox pageajax cboxElement hasbox">27329</a>
                                                        </span>
                                                    </td>
                                                    <td>15</td>
                                                    <td class="show-for-medium-up">
                                                        <a title="Easy : 2nd level of the challenge"><span class="difficulte difficulte1 " style="height: 0.2rem;"></span><span class="difficulte difficulte2   difficulte2a" style="height: 0.4rem;"></span><span class="difficulte difficulte3 " style="height: 0.6rem;"></span><span class="difficulte difficulte4 " style="height: 0.8rem;"></span><span class="difficulte difficulte36 " style="height: 1rem;"></span></a>
                                                    </td>
                                                    <td class="show-for-large-up">
                                                        <a class="txt_6forum" title="profil of Neptune">Neptune</a>
                                                    </td>
                                                    <td class="show-for-large-up">5</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                    </td>
                                                    <td class="text-left">
                                                        <a title="It's not always a hash.">CISCO - password</a>
                                                    </td>
                                                    <td class="hide-for-small-only text-left">
                                                        <span class="gras left text-left" style="display: inline-block; border-radius: 5px; padding: 2px; width: 15%; background-color: #ff4b4b;">15%</span>
                                                        <span class="right">
                                                            <a class="txs gris mediabox pageajax cboxElement hasbox">45926</a>
                                                        </span>
                                                    </td>
                                                    <td>15</td>
                                                    <td class="show-for-medium-up">
                                                        <a title="Easy : 2nd level of the challenge"><span class="difficulte difficulte1 " style="height: 0.2rem;"></span><span class="difficulte difficulte2   difficulte2a" style="height: 0.4rem;"></span><span class="difficulte difficulte3 " style="height: 0.6rem;"></span><span class="difficulte difficulte4 " style="height: 0.8rem;"></span><span class="difficulte difficulte36 " style="height: 1rem;"></span></a>
                                                    </td>
                                                    <td class="show-for-large-up">
                                                        <a class="txt_6forum" title="profil of Thanat0s">Thanat0s</a>
                                                    </td>
                                                    <td class="show-for-large-up">10</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                    </td>
                                                    <td class="text-left">
                                                        <a title="Network service">DNS - zone transfert</a>
                                                    </td>
                                                    <td class="hide-for-small-only text-left">
                                                        <span class="gras left text-left" style="display: inline-block; border-radius: 5px; padding: 2px; width: 8%; background-color: #ff4b4b;">8%</span>
                                                        <span class="right">
                                                            <a class="txs gris mediabox pageajax cboxElement hasbox">22417</a>
                                                        </span>
                                                    </td>
                                                    <td>15</td>
                                                    <td class="show-for-medium-up">
                                                        <a title="Easy : 2nd level of the challenge"><span class="difficulte difficulte1 " style="height: 0.2rem;"></span><span class="difficulte difficulte2   difficulte2a" style="height: 0.4rem;"></span><span class="difficulte difficulte3 " style="height: 0.6rem;"></span><span class="difficulte difficulte4 " style="height: 0.8rem;"></span><span class="difficulte difficulte36 " style="height: 1rem;"></span></a>
                                                    </td>
                                                    <td class="show-for-large-up">
                                                        <a class="txt_0minirezo" title="profil of g0uZ">g0uZ</a>
                                                    </td>
                                                    <td class="show-for-large-up">10</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                    </td>
                                                    <td class="text-left">
                                                        <a title="Packet capture analysis">IP - Time To Live</a>
                                                    </td>
                                                    <td class="hide-for-small-only text-left">
                                                        <span class="gras left text-left" style="display: inline-block; border-radius: 5px; padding: 2px; width: 14%; background-color: #ff4b4b;">14%</span>
                                                        <span class="right">
                                                            <a class="txs gris mediabox pageajax cboxElement hasbox">41882</a>
                                                        </span>
                                                    </td>
                                                    <td>15</td>
                                                    <td class="show-for-medium-up">
                                                        <a title="Easy : 2nd level of the challenge"><span class="difficulte difficulte1 " style="height: 0.2rem;"></span><span class="difficulte difficulte2   difficulte2a" style="height: 0.4rem;"></span><span class="difficulte difficulte3 " style="height: 0.6rem;"></span><span class="difficulte difficulte4 " style="height: 0.8rem;"></span><span class="difficulte difficulte36 " style="height: 1rem;"></span></a>
                                                    </td>
                                                    <td class="show-for-large-up">
                                                        <a class="txt_0minirezo" title="profil of g0uZ">g0uZ</a>
                                                    </td>
                                                    <td class="show-for-large-up">5</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                    </td>
                                                    <td class="text-left">
                                                        <a title="Network service">LDAP - null bind</a>
                                                    </td>
                                                    <td class="hide-for-small-only text-left">
                                                        <span class="gras left text-left" style="display: inline-block; border-radius: 5px; padding: 2px; width: 5%; background-color: #ff4b4b;">5%</span>
                                                        <span class="right">
                                                            <a class="txs gris mediabox pageajax cboxElement hasbox">13769</a>
                                                        </span>
                                                    </td>
                                                    <td>15</td>
                                                    <td class="show-for-medium-up">
                                                        <a title="Easy : 2nd level of the challenge"><span class="difficulte difficulte1 " style="height: 0.2rem;"></span><span class="difficulte difficulte2   difficulte2a" style="height: 0.4rem;"></span><span class="difficulte difficulte3 " style="height: 0.6rem;"></span><span class="difficulte difficulte4 " style="height: 0.8rem;"></span><span class="difficulte difficulte36 " style="height: 1rem;"></span></a>
                                                    </td>
                                                    <td class="show-for-large-up">
                                                        <a class="txt_0minirezo" title="profil of g0uZ">g0uZ</a>
                                                    </td>
                                                    <td class="show-for-large-up">7</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                    </td>
                                                    <td class="text-left">
                                                        <a title="Authentication Message-digest">OSPF - Authentication</a>
                                                    </td>
                                                    <td class="hide-for-small-only text-left">
                                                        <span class="gras left text-left" style="display: inline-block; border-radius: 5px; padding: 2px; width: 1%; background-color: #ff4b4b;">1%</span>
                                                        <span class="right">
                                                            <a class="txs gris mediabox pageajax cboxElement hasbox">1186</a>
                                                        </span>
                                                    </td>
                                                    <td>15</td>
                                                    <td class="show-for-medium-up">
                                                        <a title="Easy : 2nd level of the challenge"><span class="difficulte difficulte1 " style="height: 0.2rem;"></span><span class="difficulte difficulte2   difficulte2a" style="height: 0.4rem;"></span><span class="difficulte difficulte3 " style="height: 0.6rem;"></span><span class="difficulte difficulte4 " style="height: 0.8rem;"></span><span class="difficulte difficulte36 " style="height: 1rem;"></span></a>
                                                    </td>
                                                    <td class="show-for-large-up">
                                                        <a class="txt_6forum" title="profil of Tidusrose">Tidusrose</a>
                                                    </td>
                                                    <td class="show-for-large-up">2</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                    </td>
                                                    <td class="text-left">
                                                        <a title="Secured authentication">POP - APOP</a>
                                                    </td>
                                                    <td class="hide-for-small-only text-left">
                                                        <span class="gras left text-left" style="display: inline-block; border-radius: 5px; padding: 2px; width: 2%; background-color: #ff4b4b;">2%</span>
                                                        <span class="right">
                                                            <a class="txs gris mediabox pageajax cboxElement hasbox">6031</a>
                                                        </span>
                                                    </td>
                                                    <td>15</td>
                                                    <td class="show-for-medium-up">
                                                        <a title="Easy : 2nd level of the challenge"><span class="difficulte difficulte1 " style="height: 0.2rem;"></span><span class="difficulte difficulte2   difficulte2a" style="height: 0.4rem;"></span><span class="difficulte difficulte3 " style="height: 0.6rem;"></span><span class="difficulte difficulte4 " style="height: 0.8rem;"></span><span class="difficulte difficulte36 " style="height: 1rem;"></span></a>
                                                    </td>
                                                    <td class="show-for-large-up">
                                                        <a class="txt_6forum" title="profil of lutzenfried">lutzenfried</a>
                                                    </td>
                                                    <td class="show-for-large-up">5</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                    </td>
                                                    <td class="text-left">
                                                        <a title="First steps in radiofrequencies">RF - AM Transmission</a>
                                                    </td>
                                                    <td class="hide-for-small-only text-left">
                                                        <span class="gras left text-left" style="display: inline-block; border-radius: 5px; padding: 2px; width: 1%; background-color: #ff4b4b;">1%</span>
                                                        <span class="right">
                                                            <a class="txs gris mediabox pageajax cboxElement hasbox">1869</a>
                                                        </span>
                                                    </td>
                                                    <td>15</td>
                                                    <td class="show-for-medium-up">
                                                        <a title="Easy : 2nd level of the challenge"><span class="difficulte difficulte1 " style="height: 0.2rem;"></span><span class="difficulte difficulte2   difficulte2a" style="height: 0.4rem;"></span><span class="difficulte difficulte3 " style="height: 0.6rem;"></span><span class="difficulte difficulte4 " style="height: 0.8rem;"></span><span class="difficulte difficulte36 " style="height: 1rem;"></span></a>
                                                    </td>
                                                    <td class="show-for-large-up">
                                                        <a class="txt_0minirezo" title="profil of Podalirius">Podalirius</a>
                                                    </td>
                                                    <td class="show-for-large-up">4</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                    </td>
                                                    <td class="text-left">
                                                        <a title="Modulation basics">RF - FM Transmission</a>
                                                    </td>
                                                    <td class="hide-for-small-only text-left">
                                                        <span class="gras left text-left" style="display: inline-block; border-radius: 5px; padding: 2px; width: 1%; background-color: #ff4b4b;">1%</span>
                                                        <span class="right">
                                                            <a class="txs gris mediabox pageajax cboxElement hasbox">456</a>
                                                        </span>
                                                    </td>
                                                    <td>20</td>
                                                    <td class="show-for-medium-up">
                                                        <a title="Easy : 2nd level of the challenge"><span class="difficulte difficulte1 " style="height: 0.2rem;"></span><span class="difficulte difficulte2   difficulte2a" style="height: 0.4rem;"></span><span class="difficulte difficulte3 " style="height: 0.6rem;"></span><span class="difficulte difficulte4 " style="height: 0.8rem;"></span><span class="difficulte difficulte36 " style="height: 1rem;"></span></a>
                                                    </td>
                                                    <td class="show-for-large-up">
                                                        <a class="txt_0minirezo" title="profil of Podalirius">Podalirius</a>
                                                    </td>
                                                    <td class="show-for-large-up">1</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                    </td>
                                                    <td class="text-left">
                                                        <a title="Remote lockpicking">RF - Key Fixed Code</a>
                                                    </td>
                                                    <td class="hide-for-small-only text-left">
                                                        <span class="gras left text-left" style="display: inline-block; border-radius: 5px; padding: 2px; width: 1%; background-color: #ff4b4b;">1%</span>
                                                        <span class="right">
                                                            <a class="txs gris mediabox pageajax cboxElement hasbox">342</a>
                                                        </span>
                                                    </td>
                                                    <td>20</td>
                                                    <td class="show-for-medium-up">
                                                        <a title="Easy : 2nd level of the challenge"><span class="difficulte difficulte1 " style="height: 0.2rem;"></span><span class="difficulte difficulte2   difficulte2a" style="height: 0.4rem;"></span><span class="difficulte difficulte3 " style="height: 0.6rem;"></span><span class="difficulte difficulte4 " style="height: 0.8rem;"></span><span class="difficulte difficulte36 " style="height: 1rem;"></span></a>
                                                    </td>
                                                    <td class="show-for-large-up">
                                                        <a class="txt_0minirezo" title="profil of Podalirius">Podalirius</a>
                                                    </td>
                                                    <td class="show-for-large-up">1</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="vmiddle" src="/public/img/close.png" width="12" height="12" alt="pas_valide">
                                                    </td>
                                                    <td class="text-left">
                                                        <a title="Packet capture analysis">SIP - authentication</a>
                                                    </td>
                                                    <td class="hide-for-small-only text-left">
                                                        <span class="gras left text-left" style="display: inline-block; border-radius: 5px; padding: 2px; width: 11%; background-color: #ff4b4b;">11%</span>
                                                        <span class="right">
                                                            <a class="txs gris mediabox pageajax cboxElement hasbox">32109</a>
                                                        </span>
                                                    </td>
                                                    <td>20</td>
                                                    <td class="show-for-medium-up">
                                                        <a title="Easy : 2nd level of the challenge"><span class="difficulte difficulte1 " style="height: 0.2rem;"></span><span class="difficulte difficulte2   difficulte2a" style="height: 0.4rem;"></span><span class="difficulte difficulte3 " style="height: 0.6rem;"></span><span class="difficulte difficulte4 " style="height: 0.8rem;"></span><span class="difficulte difficulte36 " style="height: 1rem;"></span></a>
                                                    </td>
                                                    <td class="show-for-large-up">
                                                        <a class="txt_0minirezo" title="profil of g0uZ">g0uZ</a>
                                                    </td>
                                                    <td class="show-for-large-up">3</td>
                                                </tr>
                                            </tbody>
                                        </table>
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