<!-- delete overview div -->
    <div class="c-project__body"> <!-- was overview-main -->
        <div class="c-project__intro">
        <p>Moovweb is an Enterprise software solution for delivering customized mobile experiences from a single
            codebase.</p>
        <p>As lead product designer, I collaborated with product owners and engineering leads to redesign the primary
            Moovweb application management interface. </p>
        </div>
        <ul class="o-tabs" data-tab>
            <li class="o-tabs__tab-title active">
                <a href="#overview">
                    <?php echo $overview_tab ?>
                </a>
            </li>
            <li class="o-tabs__tab-title">
                <a href="#process">
                    <?php echo $process_tab ?>
                </a>
            </li>
        </ul>
        <!-- <ul class="o-tabs__tab-content"> -->
            <ul class="o-tabs__tab-content">
            <li class="active" id="overviewTab">
                <div class="">
                    <p>Moovweb is an Enterprise software solution for delivering customized mobile experiences from a
                        single codebase. The Moovweb Control Center is an application for managing Moovweb projects in
                        the cloud. The primary tools are domain management, routing logic, security, and user
                        management.</p>
                    <h4><?php echo $overview_section_a; ?></h4>
                    <p>I was hired by Moovweb to create a user-friendly, visually coherent interface for a complex
                        system of tools. The initial v4 build was top-to-bottom redesign of all interfaces as well as a
                        rethinking of all content strategy for developer onboarding (this lead to the creation of the
                        Developer Center). The v5 build was a complete rebuild of the platform with an array of powerful
                        new features which required a rethinking of many interfaces, and provided an opportunity to
                        enhance visual design and user experience on many areas of the system.
                    </p>
                    <h4><?php echo $overview_section_b; ?></h4>
                    <!-- c-project-sidebar -->
                    <?php include('project-sidebar.php') ?>
                    <p>As the sole designer in the Engineering/Product Management group, I collaborated closely with
                        product managers, front-end developers, and engineers to iterate on requirements, design
                        deliverables, and prototypes, and provided a framework for user experience and interface design
                        best practices. For the v5 redesign, after the adoption of Agile processes and integration of
                        more user-centric practices, I contributed considerable product strategy while PM and
                        Engineering staff contributed valuable ideas for better user experience design. The development
                        of a complex, multilayered system required us to devise a complex, multilayered collaborative
                        process.
                    </p>
                    <h4><?php echo $overview_section_c; ?></h4>
                    <p>While the Control Center remains in continuous development, the foundation for consistent visual
                        design, the well-structured information architecture, and the clear user flows and interfaces I
                        built with the the Moovweb team helped the company provide better tools that sit at the core of
                        their business.
                    </p>
                    <div class="c-panel">
                        <p>One of the key accomplishments of the Moovweb 4 redesign was the creation of
                            <?php echo $moovui ?>, a modular pattern library and styleguide built with Sass. This
                            allowed us to quickly iterate on the styling of UI components and critical interaction
                            patterns, as well as greatly increased the speed by which developers could integrate new
                            features. It was initially included as a Git submodule on Moovweb v4, and has now been
                            packaged as a Ruby Gem for Moovweb v5.</p>
                    </div>
                    <p>To view the
                                <?php echo $mwcc ?> go to <a href="http://console.moovweb.com/downloads" name="" target="_blank">console.moovweb.com</a> and create a free account. You can view demo projects under the account 'Moovweb Demos' to see the interface live.</p>
                            </p>
                </div>
            </li>
            <li class="" id="processTab">
                <!-- c-project-sidebar -->
                <div class="overview-content">
                    <h3><?php echo $casetitle1 ?></h3>
                    <p>
                        <?php echo $casesub1 ?>
                    </p>
                    <p>Please note that there are artifacts for both v4 and v5 of the Moovweb Control Center below, and
                        they are not presented exactly in the sequence they were produced.</p>
                    <a name="mockups"></a>
                    <h4>Mockups - Moovweb v4</h4>
                    <p>For the earliest iterations of the v4 interfaces I worked first with low-fidelity mockups,
                        enhancing detail progressively until we developed a prototype. We had not yet created the MoovUI
                        style guide. (By the time we began work on v5 I had adjusted our process to include iterations
                        of wireframes before producing refined mockups, or, ideally, MoovUI-based prototypes.</p>
                    <div class="c-imagebox">
                        <img  
                            data-sizes="(min-width: 48em) 66.6vw, 100vw"
                            data-src="/www/images/cc-v4-r2-projects-list-mockup_small.png"
                            data-srcset="/www/images/cc-v4-r2-projects-list-mockup_small.png 400w,
                          /www/images/cc-v4-r2-projects-list-mockup_medium.png 800w,
                          /www/images/cc-v4-r2-projects-list-mockup_large.png 1200w"
                            class="lazyload"
                            alt="Control Center v4 Project Page Mockup - Early Stages">
                    </div>
                    <p class="c-imagebox__caption">Control Center v4 Project Page Mockup - Early Round 2 Design | <a href="#"
                            data-reveal-id="cc-v4-r2-projects-list-mockup">View Larger</a></p>
                    <div class="c-imagebox">
                        <img 
                            data-sizes="(min-width: 48em) 66.6vw, 100vw"
                            data-src="/www/images/cc-v4-r5-projects-list-mockup_small.png"
                            data-srcset="/www/images/cc-v4-r5-projects-list-mockup_small.png 400w,
                          /www/images/cc-v4-r5-projects-list-mockup_medium.png 800w,
                          /www/images/cc-v4-r5-projects-list-mockup_large.png 1200w"
                            class="lazyload" 
                            alt="Moovweb Control Center v4 Project Page Mockup">
                    </div>
                    <p class="c-imagebox__caption">Control Center v4 Project Page Mockup - Early Round 5 Design | <a href="#"
                            data-reveal-id="cc-v4-r5-projects-list-mockup">View Larger</a></p>
                    <a name="v4"></a>
                    <h4>Prototype - Moovweb 4</h4>
                    <p>Using the first production release of
                        <?php echo $moovui ?>.</p>
                    <div class="c-imagebox">
                        <img 
                            data-sizes="(min-width: 48em) 66.6vw, 100vw"
                            data-src="/www/images/cc-v4-project-page_small.png"
                            data-srcset="/www/images/cc-v4-project-page_small.png 400w,
                          /www/images/cc-v4-project-page_medium.png 800w,
                          /www/images/cc-v4-project-page_large.png 1200w" 
                            class="lazyload"
                            alt="Moovweb Control Center v4 Project Page">
                    </div>
                    <p class="c-imagebox__caption">Final Prototype Control Center v4 Project Page Interface <span
                            class="hide-for-small">/ <a href="#" data-reveal-id="cc-v4-project-page">View
                                Larger</a></span></p>
                    <a name="wf-v5"></a>
                    <h4>Wireframes - Moovweb 5</h4>
                    <p>Initial wireframes of the new Modes Routing interface.</p>
                    <div class="row">
                        <div class="six columns">
                            <!-- half-width -->
                            <div class="c-imagebox">
                                <img 
                                    data-sizes="(min-width: 48em) 66.6vw, 100vw"
                                    data-src="/www/images/cc-v5-r1-wireframe-modes-p4_small.png"
                                    data-srcset="/www/images/cc-v5-r1-wireframe-modes-p4_small.png 400w,
                          /www/images/cc-v5-r1-wireframe-modes-p4_medium.png 800w,
                          /www/images/cc-v5-r1-wireframe-modes-p4_large.png 1200w"
                                    class="lazyload" 
                                    alt="Moovweb Control Center v5 Wireframes Modes Routing 1">
                            </div>
                            <p class="c-imagebox__caption">Wireframe of 'Add Rule' screen for Modes Routing rule configuration
                                <span class="hide-for-small">/ <a href="#"
                                        data-reveal-id="cc-v5-r1-wireframe-modes-p4">View Larger</a></span></p>
                        </div>
                        <div class="six columns">
                            <!-- half-width -->
                            <div class="c-imagebox">
                                <img 
                                    data-sizes="(min-width: 48em) 66.6vw, 100vw"
                                    data-src="/www/images/cc-v5-r1-wireframe-modes-p5_small.png"
                                    data-srcset="/www/images/cc-v5-r1-wireframe-modes-p5_small.png 400w,
                          /www/images/cc-v5-r1-wireframe-modes-p5_medium.png 800w,
                          /www/images/cc-v5-r1-wireframe-modes-p5_large.png 1200w"
                                    class="lazyload" 
                                    alt="Moovweb Control Center v5 Wireframes Modes Routing 2">
                            </div>
                            <p class="c-imagebox__caption">Wireframe of 'Rules Overview' screen in Modes Routing rule
                                management <span class="hide-for-small">/ <a href="#"
                                        data-reveal-id="cc-v5-r1-wireframe-modes-p5">View Larger</a></span></p>
                        </div>
                    </div>
                    <a name="v5"></a>
                    <h4>Final Design - Moovweb 5</h4>
                    <p>The initial release of the new Modes Routing tools.</p>
                    <div class="c-imagebox">
                        <img 
                        data-sizes="(min-width: 48em) 66.6vw, 100vw"
                        data-src="/www/images/cc-v5-modes-add-rule_small.png"
                        data-srcset="/www/images/cc-v5-modes-add-rule_small.png 400w,
                          /www/images/cc-v5-modes-add-rule_medium.png 800w,
                          /www/images/cc-v5-modes-add-rule_large.png 1200w" 
                            class="lazyload" 
                            alt="Moovweb Control Center v5 Modes Routing Screen">
                    </div>
                    <p class="c-imagebox__caption">Final Design of the new Modes Routing interface for Control Center v5 <span
                            class="hide-for-small">/ <a href="#" data-reveal-id="cc-v5-modes-add-rule">View
                                Larger</a></span></p>
                </div>
            </li>
        </ul>
    </div>
