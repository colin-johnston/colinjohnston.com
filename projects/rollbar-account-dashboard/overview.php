<div class="overview animate">
    <!-- overview-main -->
    <div class="c-project__body">
        <p>Rollbar is a real-time error alerting and debugging tool for software developers.</p>
        <p>I led the design effort to create a new view in the web app that provides users visibility into errors across multiple Rollbar projects.</p>
        <ul class="o-tabs" data-tab>
            <li class="o-tabs__tab-title  active">
                <a href="#overview">
                    <?php echo $overview_tab ?>
                </a>
            </li>
            <!-- <li class="o-tabs__tab-title ">
                <a href="#process">
                    <?php //echo $process_tab ?>
                </a>
            </li> -->
        </ul>
        <ul class="o-tabs__tab-content">
            <li class="active"  id="overviewTab">
                <div class="overview-content">
                    <!-- overview-sidebar -->
                    <p>The Account Dashboard is a new view in the Rollbar web app specifically designed to give engineers and managers a complete picture of all active projects. </p>
                    <h4>Challenge</h4>
                    <p>Many Rollbar users are developing products composed of numerous applications and services, but without a comprehensive overview of these separate Rollbar projects it's difficult to see the overall health of an application. </p>
                    <p>Customer goals:</p>
                    <ul>
                    <li>Provide greater leverage to engineering teams for mitigating expensive failures.</li>
                    <li>Shorten the time it takes to solve complex issues.</li>
                    <li>Increase engineering team efficiency.</li>
                    </ul>
                    <h4>Solution</h4>
                    <p>Starting with a simple prototype that aggregated project data onto a single view, we tested the interface with a small number of customers. One of the most interesting outcomes of these tests is that we discovered there were two distinct use cases: <em>reporting</em>, and <em>triage</em>. One group of users wanted to see easily configurable reports of overall status, the other group wanted a way to quickly locate problem areas to solve problems more efficiently. For the initial version of the view we decided to provide a basic tool that would solve both problems.</p>
                    <ul>
                    <li>Provide a dedicated view showing all the projects in an account.</li>
                    <li>Present a clear visual representation of the health of selected projects.</li>
                    <li>Surface all filters available in the individual project view, making it easy to for teams to drill down into issues across languages, environments, and error levels.</li>
                    </ul>
                    <h4>Results</h4>
                    <p>The first release of the Account Dashboard helped Rollbar customers achieve their previously unmet goals immediately. By providing insight into individual trends alongside potential correlated patterns, engineering teams could now quickly see how performance of various applications and services affects the health of their overall product. When a team can more efficiently triage and solve errors in complex systems they are more effective at maintaining high quality experience for their users.</p>
                    <div class="panel radius"><p>&ldquo;The Account Dashboard makes it even easier than before to understand the overall health of the Instacart product as well as individual teams/systems that make up Instacart. It also makes it dead simple to know where our engineering time has the highest leverage regarding issues affecting our customers and shoppers.&rdquo;</p>
                    <p>&mdash;Jason Kozemczak, Tech Lead at Instacart</p></div>
                    <h4>Demo</h4>
                    <p>You can view a limited demo of the Account Dashboard in the Rollbar Demo account <a href="https://rollbar.com/demo/?level=30%2C40%2C50&duration=24h&tz=US%2FPacific&sort=total&order=desc" title="Rollbar Demo" target="_blank" rel="noopener noreferrer">here</a>.</p>
                    <div class="c-link-pagination">
                        <!-- <a class="c-link-pagination--next" href="#process">See Process &amp; Artifacts</a> -->
                    </div>
                </div>
            </li>
            <li class=""  id="processTab">
                <div class="overview-content">
                    <h4>Some Background</h4>
                    <p>At Solano Labs I helped move the product development process to SCRUM and two week sprints. My goal was to restructure the product development process to allow for more design thinking to happen earlier in the cycle.</p>
                    <p>To accomplish this, I adapted the Design Sprint process to run my own sprints alongside engineering. This allowed for proper research and validation of hypotheses before diving into implementation; the output of a completed design sprint went directly into the engineering backlog, with the benefit of providing developers with a well-defined goal.</p>
                    <p><strong><a href="#discover">Discover</a> &gt; <a href="#define">Define</a> &gt; <a href="#ideate">Ideate</a> &gt; <a href="#prototype">Prototype</a> &gt; <a href="#validate">Validate</a></strong></p>
                    <h4 id="discover">Discover</h4>
                    <p><em>Research, analysis, exploration; the bedrock of subsequent design activities.</em></p>
                    <p>Through research and user testing sessions, I helped the team better understand how the interface was solving problems for customers, and how it was falling short. Digging deeper below issues of cluttered visual presentation and confusing interactions, I got to the root of a critical issue users were having: <em>they were not seeing a complete and accurate view into the state of their build</em>. </p>

                    <h5>Use Cases</h5>
                    <p>During my research I captured input from users about the specific UI issues they had. I made notations on printouts of the existing session view.</p>
                    <!-- solanolabs-sessionview-research-notations -->
                    <div class="c-imagebox">
                        <a href="#" data-reveal-id="solanolabs-sessionview-research-notations">
                            <img srcset="/images/solanolabs-sessionview-research-notations_small.jpg 400w,
                        /images/solanolabs-sessionview-research-notations_medium.jpg 800w,
                        /images/solanolabs-sessionview-research-notations_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/solanolabs-sessionview-research-notations_medium.jpg" alt="<?php echo $slcs; ?> - Research Notes on v1.5 Layouts" title="<?php echo $slcs; ?> - Research Notes on v1.5 Layouts">
                        </a>
                    </div>
                    <p class="c-imagebox--caption">
                        <?php echo $slcs; ?> - Research Notes on v1.5 Layouts <span class="hide-for-small">/ <a href="#" data-reveal-id="solanolabs-sessionview-research-notations">View Larger Image</a></span></p>

                    <p><strong><span class="activities-label">Activities &amp; Outputs:</span></strong> User Research, Use Cases, Usability Testing, Interviews, Concept Maps. </p>
                    <p><a class="link--to-top" href="#">TOP</a></p>
                    <h4 id="define">Define</h4>
                    <p><em>Clarity and focus; framing the problem to create a solution</em></p>
                    <p>I facilitated development of an internal prototype (running with live data) to validate new reporting outputs. I used this information later in the project to construct an improved real-time status report model.</p>
                    <h5>Personas</h5>
                    <p>I had previously developed with the team a set of personas that profiled new and existing customers. These were hybrid marketing and design personas that gave us clear idea of our users goals and pain points. Reinforced by the deeper research done for this specific project, the picture that emerged helped me get buy-in on making broader changes to the product.</p>
                    <!-- solanolabs-sessionview-personas -->
                    <div class="c-imagebox">
                        <a href="#" data-reveal-id="solanolabs-sessionview-personas">
                            <img srcset="/images/solanolabs-sessionview-personas_small.jpg 400w,
                        /images/solanolabs-sessionview-personas_medium.jpg 800w,
                        /images/solanolabs-sessionview-personas_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/solanolabs-sessionview-personas_medium.jpg" alt="<?php echo $slcs; ?> - Personas" title="<?php echo $slcs; ?> - Personas">
                        </a>
                    </div>
                    <p class="c-imagebox--caption">
                        <?php echo $slcs; ?> - Personas <span class="hide-for-small">/ <a href="#" data-reveal-id="solanolabs-sessionview-personas">View Larger Image</a></span></p>
                    
                    <h5>Sketches</h5>
                    <p>One of the biggest challenges of this project was to figure out how to re-structure the presentation of session status. Most of these rough layouts were done with pencil and paper; many were done on whiteboards with the Product Manager, especially when design decisions might impact other views in the product. </p>
                
                    <!-- solanolabs-sessionview-sketches -->
                    <div class="c-imagebox">
                        <a href="#" data-reveal-id="solanolabs-sessionview-sketches">
                            <img srcset="/images/solanolabs-sessionview-sketches_small.jpg 400w,
                        /images/solanolabs-sessionview-sketches_medium.jpg 800w,
                        /images/solanolabs-sessionview-sketches_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/solanolabs-sessionview-sketches_medium.jpg" alt="<?php echo $slcs; ?> - Sketches" title="<?php echo $slcs; ?> - Sketches">
                        </a>
                    </div>
                    <p class="c-imagebox--caption">
                        <?php echo $slcs; ?> - Sketches <span class="hide-for-small">/ <a href="#" data-reveal-id="solanolabs-sessionview-sketches">View Larger Image</a></span></p>
                        
                    <p><strong><span class="activities-label">Activities &amp; Outputs:</span></strong> Personas, Use Cases, User Flows, Sketches, Lo-fi Wireframes.</p>
                    <p><a class="link--to-top" href="#">TOP</a></p>
                    <h4 id="ideate">Ideate</h4>
                    <p><em>Concepts for outcomes; combine understanding of the problem with imagination.</em></p>
                    <h5>Wireframes</h5>
                    <p>I iterated through a series of wireframes showing all possible configurations of a session view (there are twelve!). Previously, less common session types had inconsistent layouts; I refined the structure to present all sessions consistently.</p>
                    <!-- solanolabs-sessionview-wireframe1 -->
                    <div class="c-imagebox">
                        <a href="#" data-reveal-id="solanolabs-sessionview-wireframe1">
                            <img srcset="/images/solanolabs-sessionview-wireframe1_small.jpg 400w,
                        /images/solanolabs-sessionview-wireframe1_medium.jpg 800w,
                        /images/solanolabs-sessionview-wireframe1_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/solanolabs-sessionview-wireframe1_medium.jpg" alt="<?php echo $slcs; ?> - Wireframe of Base Layout" title="<?php echo $slcs; ?> - Wireframe of Base Layout">
                        </a>
                    </div>
                    <p class="c-imagebox--caption">
                        <?php echo $slcs; ?> - Wireframe of Base Layout <span class="hide-for-small">/ <a href="#" data-reveal-id="solanolabs-sessionview-wireframe1">View Larger Image</a></span></p>
                    <h5>UI Design</h5>
                    <p>The visual and interface design came from my work-in-progress style guide and design system.</p>
                    <p>Working with my Sketch mockups from the previous design update, I adapted these styles to new elements and components for a more consistent and cleaner interface.</p>
                    <p>I also selected icons that would help communicate the detailed status of the build, and refined the color scheme for the build lifecycle stages.</p>
                    <p>I applied these styles to the clickable prototype that would serve as a final mockup of the UI design.</p>
                    <!-- solanolabs-sessionview-styleguide -->



                    <p><strong><span class="activities-label">Activities &amp; Outputs:</span></strong> Wireframes, Paper Prototypes, Style Tiles, UI Design, Lo-fi Mockups, Art Direction, Content Strategy.</p>
                    <p><a class="link--to-top" href="#">TOP</a></p>
                    <h4 id="prototype">Prototype</h4>
                    <p><em>If a picture is worth a thousand words, a prototype is worth a thousand pictures.</em></p>
                    <p>Since we had very hi-fidelity wireframes and a defined set of styles for the UI components, it was more efficient to create a clickable prototype rather than static mockups.</p>
                    <p>The purpose of this prototype was two-fold:</p>
                    <ol>
                        <li>Simulate a build running in the new UI, showing all the visual feedback in action</li>
                        <li>Create front-end hooks for the engineers to being wiring up the data to the view.</li>
                        <li>This proved to be a very effective step in the process. Engineers got a head start on implementation planning while we continued to refine the visual presentation.</li>
                    </ol>
                    <!-- solanolabs-sessionview-prototype -->
                    <div class="c-imagebox">
                        <a href="#" data-reveal-id="solanolabs-sessionview-prototype-codepen">
                            <img srcset="/images/solanolabs-sessionview-prototype-codepen_small.jpg 400w,
                        /images/solanolabs-sessionview-prototype-codepen_medium.jpg 800w,
                        /images/solanolabs-sessionview-prototype-codepen_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/solanolabs-sessionview-prototype-codepen_medium.jpg" alt="<?php echo $slcs; ?> - Codepen Prototype" title="<?php echo $slcs; ?> - Codepen Prototype">
                        </a>
                    </div>
                    <p class="c-imagebox--caption">
                        <?php echo $slcs; ?> - Prototype in Codepen <span class="hide-for-small">/ <a href="#" data-reveal-id="solanolabs-sessionview-prototype-codepen">View Larger Image</a> - </span> <a href="http://codepen.io/electronspin/pen/95a6ac01710fd019c2723fe5a68d0a7b" target="_blank">Open Codepen</a></p>
                    <p><strong><span class="activities-label">Activities &amp; Outputs:</span></strong> Mockups, Clickable Prototypes, Heuristics, Interactions</p>
                    <p><a class="link--to-top" href="#">TOP</a></p>
                    <h4 id="validate">Validate</h4>
                    <p><em>Prototype as if you know you’re right, but test as if you know you’re wrong</em></p>
                    <p>There was no practical way to deliver our initial prototype to customers using real-time data, so the engineering team built the new session view into the production app. We then allowed users to test it as an ‘alpha’ feature (behind a feature flag).</p>
                    <p>Making full use of the Agile philosophy, we had working software. But in the spirit of Design Thinking, we were still in the design phase. </p>
                    <p>Now the process of moderated and unmoderated user testing can reveal where we hit the mark with our solution, and where it might need improvement.</p>
                    <p>And by monitoring analytics we can uncover usage patterns than will help us improve the user experience even more in future versions of the app.</p>
                    <p><strong><span class="activities-label">Activities &amp; Outputs:</span></strong> Usability Tests, Analytics, QA</p>
                    <p><a class="link--to-top" href="#">TOP</a></p>
                    
                    <div class="c-link-pagination">
                                <!-- <a class="c-link-pagination" href="#overview" onclick="$('.tabs a[href=\'#overview\']').click()">Read Project Overview</a> -->
                                <a class="c-link-pagination--prev" href="#overview">Read Project Overview</a>
                    </div>

                </div>
            </li>
        </ul>
    </div>
</div>