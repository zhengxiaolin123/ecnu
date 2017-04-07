<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

	zenlike1.0 by nodethirtythree design
	http://www.nodethirtythree.com

-->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Bisimulation</title>
<link type="text/css" rel="stylesheet" href="styles/reset.css">
	<link type="text/css" rel="stylesheet" href="styles/main.css">
		<meta name="keywords" content="start" />
		<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="js/ie6Fixpng.js"></script>
<![endif]-->

</head>
<body>

	<div id="upbg"></div>


	<div class="upper">


		<div id="header">
			<div id="headercontent">
				<h1>Bisimulation</h1>
				<h2>Bisimulation is a binary relation between state transition
					systems, associating systems that behave in the same way in the
					sense that one system simulates the other and vice versa.</h2>
			</div>
			<!--<div id="search">
        <form action="/doku.php" accept-charset="utf-8" class="search" id="dw__search" method="get"><div class="no"><input type="hidden" name="do" value="search" /><input type="text" id="qsearch__in" accesskey="f" name="id" class="edit" title="[F]" /><input type="submit" value="Search" class="button" title="Search" /><div id="qsearch__out" class="ajax_qsearch JSpopup"></div></div></form>&nbsp;
	</div>-->

		</div>


		<div id="headerpic"></div>

		<div id="menu">
			<!-- HINT: Set the class of any menu link below to "active" to make it appear active -->
			<ul>

				<li><a href="./doku.php" class="active">Home</a></li>
				<li><a href="./doku.php?id=tools"> Tools</a></li>
				<li><a href="./doku.php?id=pubs">Reference</a></li>
				<li><a href="./doku.php?id=bench">Benchmarks</a></li>

			</ul>


		</div>
		<div id="menubottom"></div>

	</div>




	<div class="dokuwiki">
		<div id="content">
	<?php
if (! isset($_GET['id'])) {
    ?> 
	<div class="breadcrumbs">

				<span class="bchead">Trace:</span> <a href="#tiaozhuan_1"> Partition
					Refinement - branching bisimulation</a> <span class="bcsep">•</span>
				<a href="#tiaozhuan_2">Partition Refinement - strong bisimulation</a>
				<span class="bcsep">•</span> <a href="#tiaozhuan_3">On the Fly</a> <span
					class="bcsep">•</span> <a href="#tiaozhuan_4">Quasi-local</a>
			</div>
			<div class="divider1"></div>
			<!-- Normal content: Stuff that's not going to be put in the left or right column. -->
			<div id="normalcontent">


				<h1 class="sectionedit1">
					<a name="#tiaozhuan_1"
						id="Partition_Refinement_branching_bisimulation">Partition
						Refinement - branching bisimulation</a>
				</h1>
				<div class="level1">
					<p class="textstyle">
						&nbsp&nbsp&nbsp&nbspGW provide a new algorithm to determine
						stuttering equivalence with time complexity O(mlog n), where n is
						the number of states and m is the number of transitions of a
						Kripke structure. This algorithm can also be used to determine
						branching bisimulation in O(m(log|Act|+log n)) time where Act is
						the set of actions in a labelled transition system.<br />
						&nbsp&nbsp&nbsp&nbspTheoretically, this algorithm substantially
						improves upon existing algorithms which all have time complexity
						O(mn) at best. Moreover, it has better or equal space complexity.
						Practical results confirm these findings showing that this
						algorithm can outperform existing algorithms with orders of
						magnitude, especially when the sizes of the Kripke structures are
						large.<br /> &nbsp&nbsp&nbspThe importance of GW algorithm
						stretches far beyond stuttering equivalence and branching
						bisimulation. The known O(mn) algorithms were already far more
						efficient (both in space and time) than most other algorithms to
						determine behavioural equivalences (including weak bisimulation)
						and therefore it was often used as an essential preprocessing
						step. This new algorithm makes this use of stuttering equivalence
						and branching bisimulation even more attractive.
					</p>
					<p class="textstyle">
						Jan Friso Groote and Anton Wijs.<br /> Department of Mathematics
						and Computer Science, Eindhoven University of Technology
						<p>
							.................................................................................................
						</p>
						<img src="./images/pdf.jpg"></img> <a
							href="/lib/exe/fetch.php?media=quasi-local.pdf"
							class="media mediafile mf_pdf" title="quasi-local.pdf">An O(mlog
							n) Algorithm for Stuttering Equivalence and Branching
							Bisimulation</a> <br /> <br />

					</p>
					<ul type='square'>
						<li class="level1"><div class="li">
								<strong><a href="/Bisimulation/ecnu/doku.php?id=ramseysimsub"
									class="textstyle" " title="ramseysimsub">Example</a></strong>
							</div></li>
						<li class="level1"><div class="li">
								<strong><a href="/doku.php?id=nfasimsub" class="textstyle"
									title="nfasimsub">Experimental Data </a></strong>
							</div></li>
					</ul>
					<h1 class="sectionedit1">
						<a name="#tiaozhuan_2"
							id="Partition_Refinement_strong_bisimulation">Partition
							Refinement - strong bisimulation</a>
					</h1>
					<div class="level1">
						<p class="textstyle">&nbsp&nbsp&nbsp&nbspA new algorithm for
							bisimilarity minimization of labelled directed graphs is
							presented. Its time consumption is O(mlog n), where n is the
							number of states and m is the number of transitions. Unlike
							earlier algorithms, it meets this bound even if the number of
							different labels of transitions is not fixed. It is based on
							refining a partition of states with respect to the labelled
							transitions. A splitter is a pair consisting of a label and a set
							in the partition. A transition belongs to a splitter, if and only
							if it has the same label and its end state is in the set. Earlier
							algorithms consume lots of time in scanning splitters that have
							no transitions. The new algorithm avoids this by maintaining also
							a partition of transitions. To facilitate this, a refinable
							partition data structure with amortized constant time operations
							is used. Detailed pseudocode of all nontrivial details is
							presented. Novel simplifications are applied that both reduce the
							practical memory consumption and shorten the program code.</p>
						<p class="textstyle">
							Antti Valmari.<br /> Tampere University of Technology
							<p>
								.................................................................................................
							</p>

							<img src="./images/pdf.jpg"></img> <a
								href="/lib/exe/fetch.php?media=quasi-local.pdf"
								class="media mediafile mf_pdf" title="quasi-local.pdf">Bisimilarity
								Minimization in O(mlog n) Time</a> <br /> <br />

						</p>
						<ul type='square'>
							<li class="level1"><div class="li">
									<strong><a href="/Bisimulation/ecnu/doku.php?id=ramseysimsub"
										class="textstyle" " title="ramseysimsub">Details</a></strong>
								</div></li>
							<li class="level1"><div class="li">
									<strong><a href="/doku.php?id=nfasimsub" class="textstyle"
										title="nfasimsub">Experimental Data </a></strong>
								</div></li>
						</ul>
						<h1 class="sectionedit1">
							<a name="#tiaozhuan_3" id="on_the_fly">On the Fly</a>
						</h1>
						<div class="level1">
							<p class="textstyle">&nbsp&nbsp&nbsp&nbspA new algorithm does not
								need to previously construct the two transition systems the
								verification can be performed during their generation. The
								algorithm analyze the pair of target states on LTS, combine the
								checking of the bisimulation with generation of the system's
								state space. To determine whether the initial states are
								bisimilarity, the algorithm attempts to construct a relation
								relating the states of the LTSs incrementally starting with the
								pair of initial states. This algorithm generates the product
								dynamically so it is also called "on-the-fly" verification
								algorithm. In fact, the procedure of searching may have to
								execute several times to get the answer.</p>
							<p class="textstyle">
								Jean-Claude
								Fernandez.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLaurent
								Mounier.<br /> LGI-IMAG BP 53X 38041 GRENOBLE Cedex



							</p>

							<p>................................................</p>

							<p>
								<img src="./images/pdf.jpg"></img> <a
									href="http://www-verimag.imag.fr/PEOPLE/mounier/Papers/Fernandez-Mounier-90.pdf"
									class="media mediafile mf_pdf" title="slides2014.pdf"
									target="_blank">Verifying Bisimulations "On the Fly"</a>
							</p>

							<p></p>
							<ul type="square">
								<li class="level1"><div class="li">
										<strong><a href="/Bisimulation/ecnu/doku.php?id=onthefly"
											class="textstyle" title="onthefly">Details</a></strong>
									</div></li>
								<li class="level1"><div class="li">
										<strong><a href="./doku.php?id=oed" class="textstyle"
											title="oed">Experimental Data </a></strong>
									</div></li>
							</ul>

							<h1 class="sectionedit1">
								<a name="#tiaozhuan_4" id="quasi_local">Quasi-local</a>
							</h1>
							<div class="level1">

								<p class="textstyle">
									&nbsp&nbsp&nbsp&nbspDecision algorithms for bisimilarity in
									finite state systems are usually classified into two
									kinds:global algorithms are generally efficint but require to
									generate the whole state spaces in advance,local algorithms
									combine the verification of a system's behaviour with the
									generate of the system's state space,which is often more
									effective to determine that one system fails to be related to
									another.<br /> &nbsp&nbsp&nbsp&nbspThe quasi-local algorithm
									that checks if two LTSs are related by bisimilarity or
									similarity whith the worst case time complexity O(m1m2),where
									m1 and m2 are the numbers of transitions of the two LTSs.In the
									particular case of verifying bisimilarity or similarity on
									deterministic LTSs,the algorithm can be simplified and only
									takes time O(min(m1,m2)). We have implemented our algorithm and
									tested it in a few simple examples like the jobshop and the
									alternating-bit protcol where good performance of the algorithm
									is boserved. In the example of alternating-bit protocol we show
									that an implementation of protocol is weak bisimilar to its
									specification. In order to use our algorithm for checking weak
									transitions;computing the weak transition is acheiced by a
									transitive closure algorithm.
								</p>
								<p class="textstyle">
									Yuxin Deng.&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									Wenjie Du.<br /> Shanghai Normal University,China
									&nbsp&nbsp&nbsp&nbsp Shanghai Normal University,China
								</p>

								<p>
									.................................................................................................
								</p>



								<p>
									<img src="./images/pdf.jpg"></img> <a
										href="http://basics.sjtu.edu.cn/~yuxin/publications/checkbisi.pdf?origin=publication_detail"
										class="media mediafile mf_pdf" title="quasi-local.pdf"
										target="_blank">A Quasi-local Algorithm for Checking
										Bisimilarity</a> <br /> <br />

								</p>
								<ul type='square'>
									<li class="level1"><div class="li">
											<strong><a href="/Bisimulation/ecnu/doku.php?id=quasilocal"
												class="textstyle" " title="quasilocal">Details</a></strong>
										</div></li>
									<li class="level1"><div class="li">
											<strong><a href="./doku.php?id=qed" class="textstyle"
												title="qed">Experimental Data </a></strong>
										</div></li>

								</ul>

							</div>
							<br /> <br />
						</div>

					</div>
					<div class="meta">
						<div class="user"></div>
						<div class="doc"></div>
					</div>

				</div>

				<!--   <div class="bar" id="bar__bottom">
      <div class="bar-left" id="bar__bottomleft">
        <form class="button btn_source" method="post" action="/doku.php">
         <div class="no">
         <input type="hidden" name="do" value="edit" />
         <input type="hidden" name="rev" value="" />
         <input type="hidden" name="id" value="start" />
         <input type="submit" value="Show pagesource" class="button" accesskey="v" title="Show pagesource [V]" />
         </div>
         </form>    
          <form class="button btn_revs" method="get" action="/doku.php"><div class="no"><input type="hidden" name="do" value="revisions" /><input type="hidden" name="id" value="start" /><input type="submit" value="Old revisions" class="button" accesskey="o" title="Old revisions [O]" /></div></form>              </div>
      <div class="bar-right" id="bar__bottomright">
       <form class="button btn_login" method="get" action="/doku.php"><div class="no"><input type="hidden" name="do" value="login" /><input type="hidden" name="sectok" value="d17de2af108b446d2dd13b46eb2f19f0" /><input type="hidden" name="id" value="start" /><input type="submit" value="Login" class="button" title="Login" /></div></form>        <form class="button btn_index" method="get" action="/doku.php"><div class="no"><input type="hidden" name="do" value="index" /><input type="hidden" name="id" value="start" /><input type="submit" value="Sitemap" class="button" accesskey="x" title="Sitemap [X]" /></div></form>        <a class="nolink" href="#dokuwiki__top"><input type="button" class="button" value="Back to top" onclick="window.scrollTo(0, 0)" title="Back to top" /></a>&nbsp;
      </div>
      <div class="clearer"></div>
    </div>
  -->
				
<?php
} else {
    $id = $_GET['id'];
    if ($id == 'quasilocal') {
        ?>
    
<div class="level1">

				<p>
					In the DLTS described by Figure 1 (c), the only state with label 0
					is (s3||t4). Clearly, s3
					&nsim;
					t4 because s3 can exhibit action b while t4 cannot. We now look at
					the state (s2||t2) which is the unique predecessor of (s3||t4).
					Here it happens that (s3||t4) is the unique successor of (s2||t2)
					with the ﬁrst component being s3. In other words, the underlying
					fact is that if the state s2 in L1 makes the transition s2 b −→ s3,
					the only possibility for t2 in L2 to match up is to make the
					transition t2 b −→ t4. As we already know that s3 6 t4, we can
					draw the conclusion that s2 6 t2 either. Therefore, the original
					label, which is 1, for the state (s2||t2) is not accurate, and we
					should change it into 0, i.e. paint (s2||t2) red. This observation
					leads us to let the DLTS in Figure 1 (c) evolve into the one in
					Figure 2 (a); the latter has one more 0-labelled state than the
					former. With a similar backward analysis we ﬁnd that the state
					(s1||t1), the only predecessor of (s2||t2) should be relabelled 0,
					thus yielding Figure 2 (b). Repeating this procedure, which is
					convergent because the number of 1-labels is decreasing, and
					eventually we reach the stable situation in Figure 2 (c). Now
					(s0||t0) is labelled 0, indicating that s0
					&nsim;
					t0.

				</p>


				<div id="explain">
					<img width="500" src="./images/quasi-loacl1.png" alt="quasi-local1" />
					<img width="500" src="./images/quasi-loacl2.png" alt="quasi-local2" />
				</div>
<?php }?>
   
<?php
    
    if ($id == 'onthefly') {
        ?>
    <p>
					The local algorithm was first put forward by Fernandez and Mounier,
					The algorithm need used DFS to traverse, check for the two
					transition system initial state. Then based on it subsequent sates
					extension of the LTS. This algorithm verified equivalence relation
					while increasing to investigate, So named on the fly. This
					algorithm has a feature that without explicitly constructing the
					two graphs. This procedure is based on the exploration of all the
					execution sequences of the product of the two labeled transition
					system. We assumed that two labeled transition system S<sub>1</sub>
					and S<sub>2</sub> by means of the product S<sub>1</sub> × S<sub>2</sub>.



					<ul>
						<li>If one of the two labeled transition system is deterministic,
							then S<sub>1</sub> &sim; S<sub>2</sub> if and only if the state
							fail does not belong to S<sub>1</sub> × S<sub>2</sub>.
							<li>In the general case, S<sub>1</sub> &sim; S<sub>2</sub> if and
								only if cannot find an execution sequence &sigma; of S<sub>1</sub>
								× S<sub>2</sub> which contains the state $fail$ and which is
								such that all the states (q<sub>1</sub>,q<sub>2</sub>) of
								&sigma; verify q<sub>1</sub> &nsim; q<sub>2</sub>.
					
					</ul>
					<p></p>
					<p>
						We assumed the state q_1 is belong to S<sub>1</sub> and the state
						q<sub>2</sub> is belong to S<sub>2</sub>, and when they all can
						perform a transition labeled by a, that we can make a state (q<sub>1</sub>,q<sub>2</sub>).
						If and only if one of the two states (q<sub>1</sub> or q<sub>2</sub>)
						can perform a transition labeled by a, then the product has a
						transition form (q<sub>1</sub>,q<sub>2</sub>) to the sink state
						noted fail. We need to build a couple ((p,q),l) in the algorithm,
						where (p,q) is a state and l the list of its direct successors
						which have not yet been encountered in the currently analyzed
						execution sequence.
					</p>
				</p>
				<div id="explain"></div>
    
    
    
<?php
    }
    if ($id == 'pubs') {
        ?>
    <div id="normalcontent">
					<h1 class="sectionedit1">
						<a name="publications" id="publications">Reference</a>
						<div class="level1"></div>
					</h1>
					<!-- <h4><a name="reference" id="reference">Reference</a></h4>-->
					<div class="level4">
						<ul class="ul1">
							<li class="level1">
								<div class="li">
									R. Milner. <a titile="Communiction and Concurrency"
										class="urlextern" href="Communiction and Concurrency.pdf"
										rel="nofollow"> Communiction and Concurrency</a> . Prentice.
									Hall,1989.
								</div>
							</li>
							<li class="level1">
								<div class="li">
									A. Dovier, C. Plazza A. Policriti. <a
										titile="An efficient algorithm for computing bisimulation equivalence"
										class="urlextern"
										href="An efficient algorithm for computing bisimulation equivalence.pdf"
										rel="nofollow"> An efficient algorithm for computing
										bisimulation equivalence </a> . Theoretical Computer Science,
									311(1-3):221-256, 2004.
								</div>
							</li>
							<li class="level1">
								<div class="li">
									K. Fisler and M. Y. Vardi. <a
										titile="Bisimulation minimization and symbolic model checking."
										class="urlextern"
										href="Bisimulation minimization and symbolic model checking.pdf"
										rel="nofollow"> Bisimulation minimization and symbolic model
										checking.</a> Formal Method in System Design, 21(1):39-78,
									2002.
								</div>
							</li>
							<li class="level1">
								<div class="li">
									Nikola Tracka. <a
										titile="Strong, Weak and Branching Bisimulation for Transition System and Markov Reward Chains: A Unifying Matrix Approach."
										class="urlextern"
										href="https://core.ac.uk/download/pdf/2094966.pdf"
										rel="nofollow"> Strong, Weak and Branching Bisimulation for
										Transition System and Markov Reward Chains: A Unifying Matrix
										Approach.</a> In: Proc. First workshop on quantitative formal
									methods: theory and application, EPTCS, vol13.pp. 55-65,2009.
								</div>
							</li>
							<li class="level1">
								<div class="li">
									J.-C. Fernandex and L. Mounier. <a
										titile="Verifying bisimulations “on the fly”."
										class="urlextern"
										href="http://www-verimag.imag.fr/PEOPLE/mounier/Papers/Fernandez-Mounier-90.pdf"
										rel="nofollow"> Verifying bisimulations “on the fly”.</a>
									Proceedings of the 3rd International Conference on Formal
									Description Techniques for Distributed Systems and
									Communication Protocols, page 95-110. North-Holland, 1990.
								</div>
							</li>
							<li class="level1">
								<div class="li">
									R. Milner. <a titile="Communiction and Concurrency"
										class="urlextern" href="Communiction and Concurrency.pdf"
										rel="nofollow"> Communiction and Concurrency</a> . Prentice.
									Hall,1989.
								</div>
							</li>
							<li class="level1">
								<div class="li">
									Deng Y, Du W. <a
										titile=" A Quasi-local Algorithm for Checking Bisimilarity"
										class="urlextern"
										href="http://basics.sjtu.edu.cn/~yuxin/publications/checkbisi.pdf?origin=publication_detail"
										rel="nofollow"> A Quasi-local Algorithm for Checking
										Bisimilarity.</a> IEE International Conference on Computer
									Science $ \& $ Automation Engineering 2011,2:1-5.
								</div>
							</li>
							<li class="level1">
								<div class="li">
									Garavel H, Lang F, Mateescu R, Serwe W: <a titile="CADP"
										class="urlextern" href="http://cadp.inria.fr/" rel="nofollow">
										CADP</a> 2011: A Toolbox for the Construction and Analysis of
									Distributed Processes International Journal on Software Tools
									for Technology Transfer (STTT), 15(2):89-107, April 2013.
								</div>
							</li>
							<li class="level1">
								<div class="li">
									R. Paigge and R. E. Tarjan. <a
										titile="Three partition refinement algorithms. SIAM Journal on Computing"
										class="urlextern"
										href="Three partition refinement algorithms. SIAM Journal on Computing.pdf"
										rel="nofollow"> Three partition refinement algorithms. SIAM
										Journal on Computing</a> , 16(6):973-989, 1987.
								</div>
							</li>
							<li class="level1">
								<div class="li">
									U. Celikkan. <a
										titile=" Semantic Preorders in the Automated Verification of Concurrent Systems"
										class="urlextern"
										href=" Semantic Preorders in the Automated Verification of Concurrent Systems.pdf"
										rel="nofollow"> Semantic Preorders in the Automated
										Verification of Concurrent Systems.</a> PhD thesis, North
									Carolina State University, 1995.
								</div>
							</li>
							<li class="level1">
								<div class="li">
									Christel Baier, Joost-Pieter Katoen. <a
										titile="Principless of Model Checking," class="urlextern"
										href="Principless of Model Checking,.pdf" rel="nofollow">
										Principless of Model Checking,</a> 2008(6):19,449-467.
								</div>
							</li>
							<li class="level1">
								<div class="li">
									Katoen J.22. <a titile="  Labelled Transition Systems"
										class="urlextern" href="  Labelled Transition Systems.pdf"
										rel="nofollow"> Labelled Transition Systems[J].</a>
									Model-Based Testing of Reactive System,LNCS,2005,3472:615-616.
								</div>
							</li>
							<li class="level1">
								<div class="li">
									Park D. <a
										titile="  Concurrency and automata on infinite sequences"
										class="urlextern"
										href="Concurrency and automata on infinite sequences.pdf"
										rel="nofollow"> Concurrency and automata on infinite
										sequences[J]</a> . Theoretical computer science,1981:167-183.
								</div>
							</li>

						</ul>
					</div>

				</div>
    
    <?php
    }
    ?>
<?php

    if ($id == 'qed') {
        ?>
   <p>
					We assumed that n<sub>1</sub> as <em>States</em> of <em>S</em>, m<sub>1</sub>
					as <em>Transitions</em> of <em>S</em>(Similarly, n<sub>2</sub> and
					m<sub>2</sub> indicate <em>States</em> and <em>Transitions</em> of
					<em>T</em>).
				</p>

				<table width="800" border="1" bordercolor="black" cellspacing="0"
					style="text-align: center">
					<caption align="center">Quasi-local Algorithm Experimental Data</caption>

					<tr>
						<th>Data(states,edges，labels，initial-0)</th>
						<th>n1</th>
						<th>m1</th>
						<th>n2</th>
						<th>m2</th>
						<th>Quasi-local DFS</th>
						<th>Quasi-local WFS</th>
					</tr>
					<tr>
						<td>vasy_0_1_1(289,1224,3)</td>
						<td>289</td>
						<td>1224</td>
						<td>9</td>
						<td>20</td>
						<td>0.015s</td>
						<td>0.015s</td>

					</tr>
					<tr>
						<td>vasy_1_4_1(1183，4464，6)</td>
						<td>1183</td>
						<td>4464</td>
						<td>28</td>
						<td>59</td>
						<td>0.013s</td>
						<td>0.014s</td>

					</tr>
					<tr>
						<td>vasy_5_9_1（5486,9676,31)</td>
						<td>5486</td>
						<td>9676</td>
						<td>145</td>
						<td>284</td>
						<td>0.042s</td>
						<td>0.040s</td>
					</tr>
					<tr>
						<td>cwi_3_14_1(3996,14552,2)</td>
						<td>3996</td>
						<td>14552</td>
						<td>62</td>
						<td>61</td>
						<td>0.030s</td>
						<td>0.030s</td>

					</tr>
					<tr>
						<td>vasy_25_25_1(25217,25216，25217)</td>
						<td>25217</td>
						<td>25216</td>
						<td>25217</td>
						<td>25216</td>
						<td>0.081s</td>
						<td>0,085s</td>

					</tr>
					<tr>
						<td>cwi_1_2_1（1952,2387,26）</td>
						<td>1952</td>
						<td>2387</td>
						<td>1132</td>
						<td>1432</td>
						<td>0.077s</td>
						<td>0.077s</td>

					</tr>
					<tr>
						<td>vasy_8_38_1（8921,38424,81）</td>
						<td>8921</td>
						<td>38424</td>
						<td>219</td>
						<td>838</td>
						<td>0.069s</td>
						<td>0.068s</td>

					</tr>
					<tr>
						<td>vasy_8_24_1(8879,24411,11)</td>
						<td>8879</td>
						<td>24411</td>
						<td>416</td>
						<td>1193</td>
						<td>0.100s</td>
						<td>0.095s</td>

					</tr>
					<tr>
						<td>vasy_10_56_1(10849,56156,12)</td>
						<td>10849</td>
						<td>56156</td>
						<td>2112</td>
						<td>11372</td>
						<td>0.098s</td>
						<td>0.106s</td>

					</tr>
					<tr>
						<td>vasy_40_60_1(40006,60007,3)</td>
						<td>40006</td>
						<td>60007</td>
						<td>40006</td>
						<td>60007</td>
						<td>0.110s</td>
						<td>0.123s</td>

					</tr>
					<tr>
						<td>vasy_157_297_1(157604,297000,235)</td>
						<td>157604</td>
						<td>297000</td>
						<td>4289</td>
						<td>13642</td>
						<td>0.444s</td>
						<td>0.474s</td>

					</tr>
					<tr>
						<td>vasy_69_520_1（69754,520633,135）</td>
						<td>69754</td>
						<td>520633</td>
						<td>69754</td>
						<td>520633</td>
						<td>2.012s</td>
						<td>1.993s</td>

					</tr>
					<tr>
						<td>vasy_18_73_1(18746,73043,17)</td>
						<td>18746</td>
						<td>73043</td>
						<td>4087</td>
						<td>16444</td>
						<td>1.390s</td>
						<td>1.408s</td>

					</tr>
					<tr>
						<td>vasy_83_325_1(83436,325584，211）</td>
						<td>83436</td>
						<td>325584</td>
						<td>83436</td>
						<td>325584</td>
						<td>9.362s</td>
						<td>9.902s</td>

					</tr>
					<tr>
						<td>vasy_66_1302_1(66929,1308664,81)</td>
						<td>66929</td>
						<td>1302664</td>
						<td>66929</td>
						<td>1302664</td>
						<td>9.861s</td>
						<td>12.413s</td>

					</tr>
					<tr>
						<td>vasy_166_651(166464,651168,211)</td>
						<td>166464</td>
						<td>651168</td>
						<td>83436</td>
						<td>325584</td>
						<td>36.494s</td>
						<td>36.847s</td>

					</tr>
				</table>
				<div id="explain">
					<img width="800" src="./images/table2.png" alt="quasi-localdata" />

				</div>
   <?php
    }
    ?>
<?php

    if ($id == 'oed') {
        ?>
      <p>
					We assumed that n<sub>1</sub> as <em>States</em> of <em>S</em>, m<sub>1</sub>
					as <em>Transitions</em> of <em>S</em>(Similarly, n<sub>2</sub> and
					m<sub>2</sub> indicate <em>States</em> and <em>Transitions</em> of
					<em>T</em>).
				</p>


				<table width="800" border="1" bordercolor="black" cellspacing="0"
					style="text-align: center">
					<caption align="center">On the Fly Algorithm Experimental Data</caption>
					<tr>
						<th>Data(states,edges，labels，initial-0)</th>
						<th>n1</th>
						<th>m1</th>
						<th>n2</th>
						<th>m2</th>
						<th>On the Fly DFS</th>
						<th>On the Fly WFS</th>
					</tr>
					<tr>
						<td>vasy_0_1_1(289,1224,3)</td>
						<td>289</td>
						<td>1224</td>
						<td>9</td>
						<td>20</td>
						<td>0.020s</td>
						<td>0.031s</td>

					</tr>
					<tr>
						<td>vasy_1_4_1(1183，4464，6)</td>
						<td>1183</td>
						<td>4464</td>
						<td>28</td>
						<td>59</td>
						<td>0.025s</td>
						<td>0.027s</td>

					</tr>
					<tr>
						<td>vasy_5_9_1（5486,9676,31)</td>
						<td>5486</td>
						<td>9676</td>
						<td>145</td>
						<td>284</td>
						<td>0.054s</td>
						<td>0.073s</td>
					</tr>
					<tr>
						<td>cwi_3_14_1(3996,14552,2)</td>
						<td>3996</td>
						<td>14552</td>
						<td>62</td>
						<td>61</td>
						<td>0.043s</td>
						<td>0.083s</td>

					</tr>
					<tr>
						<td>vasy_25_25_1(25217,25216，25217)</td>
						<td>25217</td>
						<td>25216</td>
						<td>25217</td>
						<td>25216</td>
						<td>1.112s</td>
						<td>1.326s</td>

					</tr>
					<tr>
						<td>cwi_1_2_1（1952,2387,26）</td>
						<td>1952</td>
						<td>2387</td>
						<td>1132</td>
						<td>1432</td>
						<td>0.109s</td>
						<td>0.437s</td>

					</tr>
					<tr>
						<td>vasy_8_38_1（8921,38424,81）</td>
						<td>8921</td>
						<td>38424</td>
						<td>219</td>
						<td>838</td>
						<td>0.100s</td>
						<td>0.255s</td>

					</tr>
					<tr>
						<td>vasy_8_24_1(8879,24411,11)</td>
						<td>8879</td>
						<td>24411</td>
						<td>416</td>
						<td>1193</td>
						<td>0.157s</td>
						<td>1.334s</td>

					</tr>
					<tr>
						<td>vasy_10_56_1(10849,56156,12)</td>
						<td>10849</td>
						<td>56156</td>
						<td>2112</td>
						<td>11372</td>
						<td>0.216s</td>
						<td>1.195s</td>

					</tr>
					<tr>
						<td>vasy_40_60_1(40006,60007,3)</td>
						<td>40006</td>
						<td>60007</td>
						<td>40006</td>
						<td>60007</td>
						<td>5.563s</td>
						<td>0.193s</td>

					</tr>
					<tr>
						<td>vasy_157_297_1(157604,297000,235)</td>
						<td>157604</td>
						<td>297000</td>
						<td>4289</td>
						<td>13642</td>
						<td>0.779s</td>
						<td>387.939s</td>

					</tr>
					<tr>
						<td>vasy_69_520_1（69754,520633,135）</td>
						<td>69754</td>
						<td>520633</td>
						<td>69754</td>
						<td>520633</td>
						<td>1.697s</td>
						<td>204.964s</td>

					</tr>
					<tr>
						<td>vasy_18_73_1(18746,73043,17)</td>
						<td>18746</td>
						<td>73043</td>
						<td>4087</td>
						<td>16444</td>
						<td>8.113s</td>
						<td>86.282s</td>

					</tr>
					<tr>
						<td>vasy_83_325_1(83436,325584，211）</td>
						<td>83436</td>
						<td>325584</td>
						<td>83436</td>
						<td>325584</td>
						<td>10.955s</td>
						<td>4.23328e+03s</td>

					</tr>
					<tr>
						<td>vasy_66_1302_1(66929,1308664,81)</td>
						<td>66929</td>
						<td>1302664</td>
						<td>66929</td>
						<td>1302664</td>
						<td>3.056s</td>
						<td>215.607s</td>

					</tr>
					<tr>
						<td>vasy_166_651(166464,651168,211)</td>
						<td>166464</td>
						<td>651168</td>
						<td>83436</td>
						<td>325584</td>
						<td>45.938s</td>
						<td>1.44099e+03s</td>

					</tr>
				</table>
				<div id="explain">
					<img width="800" src="./images/table3.png" alt="quasi-localdata" />

				</div>
    
    
 <?php
    }
    ?>
 <?php
    if ($id == 'tools') {
        ?>
        	<div class="breadcrumbs">

					<span class="bchead">Trace:</span> <a href="#cadp"> CADP</a> <span
						class="bcsep">•</span><a href="#bcg">The BCG format</a>
				</div>

				<div class="divider1"></div>
				<div id="normalcontent">
					<div>
						<h1 class="sectionedit1">
							<a name="tools" id="tools">Tools</a>
						</h1>
						<div class="level1"></div>
						<div class="level4">
							<h3 class="sectionedit2">
								<a name="#cadp" id="cadp" href="http://cadp.inria.fr/">CADP</a>
							</h3>
							<div class="level3">
								<p>CADP("Construction and Analysis of Distributed Processes",
									formerly known as "CAESAR/ALDEBARAN Development Package") is a
									popular toolbox for the design of asynchronous concurrent
									systems, such as communication protocols, distributed systems,
									asynchronous circuits, multiprocessor architectures, web
									services, etc.</p>
								<p>CADP offers a wide set of functionalities, ranging from
									step-by-step simulation to massively parallel model-checking.
									It is the only toolbox to offer:</p>
								<ul>
									<li>Compilers for several input formalisms, e.g.:
										<ul>
											<li>High-level descriptions written in various languages,
												such as LOTOS (ISO International Standard 8807), LNT, FSP,
												pi-calculus, etc. The CADP toolbox provides compilers
												(CAESAR, CAESAR.ADT, LNT2LOTOS, FSP2LOTOS, etc.) that
												translate high-level descriptions into C code to be used for
												simulation, verification, and testing purposes;</li>
											<li>Low-level descriptions specified as automata (i.e.,
												finite state machines) and networks of communicating
												automata that run in parallel, synchronize, and communicate
												using process algebra operators or synchronization vectors.
											</li>
										</ul>
									</li>
									<li>Several equivalence checking tools (minimization and
										comparisons modulo bisimulation relations), such as BCG_MIN
										and BISIMULATOR.</li>
									<li>Several model-checkers for various temporal logic and
										mu-calculus, such as EVALUATOR and XTL.</li>
									<li>Several verification algorithms combined together:
										enumerative verification, on-the-fly verification, symbolic
										verification using binary decision diagrams, compositional
										minimization, partial orders, distributed model checking, etc.
									</li>
									<li>Plus a bunch of other tools with advanced functionalities
										such as visual checking, performance evaluation, etc.</li>

								</ul>
								<p>CADP is designed in a modular way and puts the emphasis on
									intermediate formats and programming interfaces (such as the
									BCG and OPEN/CAESAR software environments), which allow the
									CADP tools to be combined with other tools and adapted to
									various specification languages.</p>
							</div>

							<h3 class="sectionedit4">
								<a name="#bcg" id="bcg" href="http://cadp.inria.fr/man/bcg.html">The
									BCG format</a>
							</h3>
							<div class="level3">
								<p>bcg, BCG - Binary Coded Graphs: binary file format for
									labelled transition systems</p>
								<p>The acronym BCG stands for Binary Coded Graphs. It refers
									both to a format and a software environment. The BCG format is
									a computer representation for labelled transition systems,
									Kripke structures, and, more generally, state/transition models
									(hereafter called graphs) which are generated from higher-level
									models of concurrent systems. Compared to other existing
									formats with similar purposes, the BCG format combines several
									advantages:</p>
								<p>
									<ul>
										<li>The BCG format is independent from any particular
											model-based verification technique; it can be used either by
											tools performing graph comparison and reduction modulo
											equivalence relations, or by tools checking properties
											expressed in temporal logics. It can also be used in other
											contexts: graph exploration, graph drawing, etc.</li>
										<li>The BCG format is independent from the language used to
											describe the concurrent system to be analyzed. It was
											designed so as to allow the representation of graphs
											generated from various concurrent languages.</li>
										<li>The BCG format provides sophisticated mechanisms to keep
											track of source-level information. This is especially useful,
											since it is possible to establish a connection between the
											behaviour of a BCG graph and the source program from which
											the BCG graph was generated.</li>
										<li>The BCG format uses a binary representation of the LTS
											together with ad-hoc compression algorihms, leading to very
											compact files. Graphs with millions of states and transitions
											can be represented using only a few megabytes of disk space.
										</li>

									</ul>

								</p>
								<p>Moreover, the BCG format is supported by an efficient and
									extensive software implementation, the BCG environment.</p>

								<p>
									In the BCG environment, the programs dealing with graphs
									encoded in the BCG format are called ``application tools''.
									These programs can be either binary programs or shell-scripts.<a
										href="http://cadp.inria.fr/man/bcg.html#sect2">Application
										Tools</a>
								</p>
							</div>
						</div>

					</div>
     
     
     
     
     
 <?php
    }
    if ($id == 'bench') {
        ?>
 <div class="breadcrumbs">

						<span class="bchead">Trace:</span> <a href="#what">What is the
							VLTS benchmark suite</a> <span class="bcsep">•</span> <a
							href="#why">Why the VLTS benchmark suite</a><span class="bcsep">•</span>
						<a href="#how">How to use the VLTS benchmark suite</a>
					</div>

					<div class="divider1"></div>
					<div id="normalcontent">
						<div>
							<h1 class="sectionedit1">
								<a name="tools" id="tools">Benchmark</a>
							</h1>
							<div class="level1"></div>
							<div class="level4">
								<h3 class="sectionedit2">
									<a name="#what" id="cadp" href="http://cadp.inria.fr/">What is
										the VLTS benchmark suite</a>
								</h3>
								<div class="level3">
									<p>The VLTS acronym stands for "Very Large Transition Systems".</p>
										<p>The VLTS benchmark suite is a collection of Labelled
										Transition Systems (hereafter called benchmarks). Each
										Labelled Transition System is a directed, connected graph,
										whose vertices are called states and whose edges are called
										transitions. There is one distinguished vertex called the
										initial state. Each transition is labelled by a character
										string called action or label. There is one distinguished
										label noted "i" that is used for so-called invisible
										transitions (also known as hidden transitions or
										tau-transitions). </p>
										<p>The VLTS benchmarks have been obtained from
										various case studies about the modelling of communication
										protocols and concurrent systems. Many of these case studies
										correspond to real life, industrial systems.</p>
								</div>
								<h3 class="sectionedit3">
									<a name="#why" id="benchmarks"
										href="http://cadp.inria.fr/resources/vlts/">Why the VLTS
										benchmark suite</a>

								</h3>
								<div class="level3">
									<p>
										The VLTS benchmark suite is designed to be a reference
										criterion for scientific assessment of algorithms and tools
										operating on large graphs. In particular, this encompasses
										algorithms and tools for explicit state verification of
										concurrent systems, including:
										<ul>
											<li>model checkers,</li>
											<li>equivalence checkers (comparison and minimization tools,
												etc.),</li>
											<li>graph visualization tools,</li>
											<li>formats for representing transitions systems,</li>
											<li>etc.</li>
										</ul>
										<p>Algorithms and tools operating on more general graphs than
										transition systems may also benefit from the VLTS benchmark
										suite by simply discarding label information attached to
										transitions. The need for the VLTS benchmark suite was
										recognized in several places, e.g., by Agostino Dovier, Carla
										Piazza, and Alberto Policriti in their CAV'2001 paper ("A Fast
										Bisimulation Algorithm"):<p>
										  <p> <em>To the best of our knowledge
											there is no `official' set of benchmarks for testing an
											algorithm such as the one we propose in our paper. We decided
											to test our implementation in the context of formal
											verification using model checkers and considering the
											transition graphs they generate from a given program [...].
											Usually, the graphs generated consist of a unique strongly
											connected component and the set of possible labels is huge. </em></p>

                                      <p>
										The VLTS benchmark suite intends to fill this gap by providing
										a comprehensive set of benchmarks. We hope that it will be as
										useful as other standard benchmarks, such as those developed,
										e.g., to assess Binary Decision Diagrams packages.
									</p>
								</div>
								<h3 class="sectionedit4">
									<a name="#how" id="bcg"
										href="http://cadp.inria.fr/man/bcg.html">How to use the VLTS
										benchmark suite</a>
								</h3>
								<div class="level3">
									<p>All the graphs are encoded in the <em>BCG</em> (Binary-Coded Graphs)
										format, then compressed using the bzip2 tool. To our
										knowledge, this is up to now the most compact way for storing
										Very Large Transition Systems.</p>
										 <p>First, we should make sure
										that us are working on a machine with enough free disk space
										available (at least 500 megabytes, 1 gigabyte to be safe). You
									    should have already the CADP tools installed on your
										machine, registrate from <a href="http://cadp.inria.fr/registration/">CADP</a>. 
										After downloading a graph,
										say "graph.bcg.bz2", from the Table below, you must first
										uncompress it using the bunzip2 tool:  <em> bunzip2</em>
										graph.bcg.bz2 This will produce a BCG graph named "graph.bcg".
										You can read and process "graph.bcg" from a computer program
										in two different ways: You can use the bcg_read API
										(Application Programming Interface), which provides a simple
										set of functions for handling BCG graphs. You will have to
										link your computer program against the BCG binary libraries.</p>

										<p>
										You can use the <em>bcg_io</em> tool, which converts BCG graphs into a
										dozen of other formats (mostly textual formats). To avoid disk
										space overflow, it is recommended to use this tool in pipe
										mode, so that the converted graph is not written to disk. For
										instance: <em>bcg_io graph.bcg -aldebaran - | more Note:</em>
										In addition to the VLTS benchmarks, you might be interested by
										the various classes of `regular' benchmarks produced by the
										bcg_graph tool.</p>
                                     </div>
								</div>
							</div>

						</div>
     
     
 
 
    
<?php
 }
}

?>
       
				<div id="footer">
					<div class="left"></div>
					<div class="right">
						<div class="license">
						   <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                             <a href="http://www.ecnu.edu.cn/" rel="license" class="urlextern">ECNU</a> reserves the right of final explanation and revision for the web.
						</div>
					</div>
				</div>

			</div>

			<div class="no">
				<img src="#" width="2" height="1" alt="" />
			</div>




</body>
</html>

