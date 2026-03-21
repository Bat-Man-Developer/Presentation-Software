<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Support & IT Helpdesk Best Practices</title>
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/technical-support.css">
</head>
<body>
    <div class="presentation-container">
        <div class="slide-counter">
            <span id="currentSlide">1</span> / <span id="totalSlides"></span>
        </div>

        <div class="slide active">
            <div class="title-slide">
                <div class="ai-icon">🛠️</div>
                <h1>Technical Support Mastery</h1>
                <p class="subtitle">IT Helpdesk Excellence & Troubleshooting Strategies</p>
                
                <div class="highlight">
                    <h3>Comprehensive Training Program for Support Professionals</h3>
                    <p>Building Customer Trust through Rapid Resolution</p>
                    <p><strong>Hands-On Learning with Real-World Scenarios</strong></p>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Session 1: The Core Principles of IT Support</h1>
            
            <h2>Essential Skills for Support Technicians</h2>
            <ul>
                <li><strong>Empathy & Active Listening:</strong> Understand the user's frustration before addressing the tech.</li>
                <li><strong>Clear Communication:</strong> Avoid technical jargon when speaking to end-users.</li>
                <li><strong>Methodical Troubleshooting:</strong> Don't guess; follow a structured process.</li>
                <li><strong>Time Management:</strong> Juggle multiple tickets prioritizing based on impact and urgency.</li>
                <li><strong>Documentation:</strong> "If it isn't in the ticket, it didn't happen."</li>
            </ul>

            <div class="highlight">
                <h2>Service Level Agreements (SLAs)</h2>
                <p>An SLA is a contract between the IT provider and the customer defining expected response and resolution times. Failing to meet SLAs reduces trust and can result in financial penalties for Managed Service Providers (MSPs).</p>
            </div>

            <h1>🔬 Hands-On Lab: Ticket Priority Assessment</h1>
            <div class="interactive-lab">
                <div class="practice-exercise">
                    <div class="practice-title">Calculate the Ticket SLA Priority</div>
                    <div class="two-column">
                        <div class="security-checklist">
                            <h3>Impact (How much of the business is affected?)</h3>
                            <div class="checklist-item">
                                <input type="radio" name="impact" class="impact-radio" id="impact3" value="3">
                                <label for="impact3">High (Entire company or site down)</label>
                            </div>
                            <div class="checklist-item">
                                <input type="radio" name="impact" class="impact-radio" id="impact2" value="2">
                                <label for="impact2">Medium (Department or critical team down)</label>
                            </div>
                            <div class="checklist-item">
                                <input type="radio" name="impact" class="impact-radio" id="impact1" value="1">
                                <label for="impact1">Low (Single user affected)</label>
                            </div>
                        </div>
                        <div class="security-checklist">
                            <h3>Urgency (How quickly does business halt?)</h3>
                            <div class="checklist-item">
                                <input type="radio" name="urgency" class="urgency-radio" id="urgency3" value="3">
                                <label for="urgency3">High (Financial loss / total work stoppage)</label>
                            </div>
                            <div class="checklist-item">
                                <input type="radio" name="urgency" class="urgency-radio" id="urgency2" value="2">
                                <label for="urgency2">Medium (Work severely impaired, no workaround)</label>
                            </div>
                            <div class="checklist-item">
                                <input type="radio" name="urgency" class="urgency-radio" id="urgency1" value="1">
                                <label for="urgency1">Low (Workaround exists / minor annoyance)</label>
                            </div>
                        </div>
                    </div>
                    
                    <button class="simulation-button" onclick="calculateTicketPriority()">Calculate Priority & SLA</button>
                    <div id="priority-assessment-result" class="simulation-result"></div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Session 2: The Troubleshooting Methodology</h1>
            
            <h2>The CompTIA 6-Step Process</h2>
            
            <ul>
                <li><strong>1. Identify the Problem:</strong> Gather info, duplicate the issue, question users, identify symptoms.</li>
                <li><strong>2. Establish a Theory of Probable Cause:</strong> Question the obvious (Is it plugged in?).</li>
                <li><strong>3. Test the Theory:</strong> Determine the cause. If theory confirmed, move to step 4. If not, re-establish a new theory.</li>
                <li><strong>4. Establish a Plan of Action:</strong> Plan the fix and implement the solution safely.</li>
                <li><strong>5. Verify Full System Functionality:</strong> Have the user test it. Implement preventive measures.</li>
                <li><strong>6. Document Findings:</strong> Record actions, outcomes, and write knowledge base (KB) articles.</li>
            </ul>

            <h1>🎯 Workshop: Customer Communication</h1>
            <div class="hands-on-section">
                <div class="practice-exercise">
                    <div class="practice-title">Drafting a Response to a Frustrated User</div>
                    <p><strong>Scenario:</strong> A user submits a ticket stating: "My computer is completely broken! I have a deadline in an hour and IT always ruins everything! Fix this NOW!"</p>
                    
                    <div class="demo-box">
                        <h4>📧 Helpdesk Response Builder</h4>
                        <textarea id="support-email" style="width: 100%; height: 150px; padding: 10px; border: 2px solid #3498db; border-radius: 8px;" placeholder="Draft your response here..."></textarea>
                        <br><br>
                        <button class="simulation-button" onclick="validateTechSupportEmail()">Review Response Quality</button>
                        <div id="email-validation" class="simulation-result"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Session 3: Tools & Diagnostics</h1>

            <h2>Diagnostic Utilities</h2>
            <ul>
                <li><strong>ping:</strong> Tests reachability and latency to a destination.</li>
                <li><strong>tracert / traceroute:</strong> Shows the pathway packets take to a destination.</li>
                <li><strong>ipconfig / ifconfig:</strong> Displays network adapter configurations.</li>
                <li><strong>Event Viewer:</strong> Windows tool for reviewing system and application error logs.</li>
                <li><strong>Task Manager:</strong> Identify processes consuming high CPU/Memory.</li>
            </ul>

            <div class="hands-on-section">
                <div class="hands-on-title">IP Diagnostic Tool</div>
                <div class="demo-box">
                    <h4>Analyze IP for Troubleshooting Routing</h4>
                    <input type="text" id="ip-test" placeholder="e.g. 192.168.1.5 or 8.8.8.8" style="width: 70%; padding: 10px; border: 2px solid #ccc; border-radius: 5px; margin-right: 10px;">
                    <button class="simulation-button" onclick="testNetworkDiagnostics()" style="padding: 10px 15px;">Analyze Address</button>
                    <div id="diagnostic-result" class="simulation-result"></div>
                </div>
            </div>

            <div class="hands-on-section">
                <div class="hands-on-title">Remote Support Deployment Checklist</div>
                <div class="practice-exercise">
                    <div class="security-checklist">
                        <div class="checklist-item">
                            <input type="checkbox" class="setup-checkbox" id="setup1">
                            <label for="setup1">Verify user's machine is powered on and connected to internet</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="setup-checkbox" id="setup2">
                            <label for="setup2">Provide session code or connection link to end-user</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="setup-checkbox" id="setup3">
                            <label for="setup3">Request remote viewing / control permissions explicitly</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="setup-checkbox" id="setup4">
                            <label for="setup4">Elevate privileges (Run as Admin) if system changes are needed</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="setup-checkbox" id="setup5">
                            <label for="setup5">End session clearly and inform user you are disconnecting</label>
                        </div>
                    </div>
                    <div id="setup-progress" class="progress-tracker" style="margin-top:15px;">
                        <div class="progress-bar" style="background:#eee; border-radius:10px; overflow:hidden;">
                            <div class="progress-fill" style="background:#3498db; color:white; padding:5px; text-align:center; width:0%; transition: width 0.3s;">0% Complete</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Session 4: Knowledge Base & Escalations</h1>
            
            <div class="two-column">
                <div class="solution-box">
                    <div class="solution-title">The Value of the Knowledge Base</div>
                    <p>A well-maintained KB prevents engineers from "reinventing the wheel." It standardizes fixes, reduces onboarding time for new techs, and improves first-call resolution (FCR) rates.</p>
                </div>
                <div class="solution-box" style="border-color: #e74c3c; background: #fdf2f2;">
                    <div class="solution-title" style="color: #c0392b;">Major Incident Management</div>
                    <p>When critical infrastructure fails, standard ticketing stops. Major incidents require "All Hands on Deck," conference bridge setups, rapid vendor escalation, and frequent management updates.</p>
                </div>
            </div>

            <div class="hands-on-section">
                <div class="hands-on-title">KB Article Template Generator</div>
                <div class="demo-box">
                    <p>Select required fields for standard technical documentation:</p>
                    <div class="security-checklist">
                        <div class="checklist-item"><input type="checkbox" class="kb-checkbox" checked> <label>Symptom / Problem Description</label></div>
                        <div class="checklist-item"><input type="checkbox" class="kb-checkbox" checked> <label>Environment / Affected Systems</label></div>
                        <div class="checklist-item"><input type="checkbox" class="kb-checkbox"> <label>Root Cause (Optional)</label></div>
                        <div class="checklist-item"><input type="checkbox" class="kb-checkbox" checked> <label>Step-by-Step Resolution</label></div>
                        <div class="checklist-item"><input type="checkbox" class="kb-checkbox" checked> <label>Verification / Testing Steps</label></div>
                    </div>
                    <button class="simulation-button" onclick="generateKBArticle()" style="margin-top:15px;">Generate KB Template</button>
                    <div id="kb-article-result" class="simulation-result"></div>
                </div>
            </div>

            <div class="hands-on-section">
                <div class="hands-on-title">Major Incident Simulator</div>
                <button class="simulation-button" onclick="runMajorIncidentSimulation()">Trigger Random P1 Outage</button>
                <div id="incident-result" class="simulation-result"></div>
            </div>
        </div>

        <div class="slide">
            <h1>Technical Support & Helpdesk Assessment</h1>
            <p>Test your knowledge of troubleshooting, SLAs, and IT support concepts. You must answer all 20 questions.</p>
            
            <div class="quiz-container">
                <div class="question" id="q1">
                    <h4>1. According to standard IT methodology, what is the absolute first step in troubleshooting?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Establish a theory of probable cause</li>
                        <li data-answer="correct">Identify the problem</li>
                        <li data-answer="wrong">Test the theory</li>
                        <li data-answer="wrong">Escalate to Tier 2</li>
                    </ul>
                </div>
                
                <div class="question" id="q2">
                    <h4>2. In IT Service Management, what does SLA stand for?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">System Local Area</li>
                        <li data-answer="correct">Service Level Agreement</li>
                        <li data-answer="wrong">Software License Authorization</li>
                        <li data-answer="wrong">Standard Level Access</li>
                    </ul>
                </div>

                <div class="question" id="q3">
                    <h4>3. What is the best initial approach when dealing with a highly agitated or angry customer?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Tell them to calm down so you can fix it</li>
                        <li data-answer="wrong">Immediately transfer them to a manager</li>
                        <li data-answer="correct">Empathize, listen actively, and assure them you will help</li>
                        <li data-answer="wrong">Place them on hold until they cool off</li>
                    </ul>
                </div>

                <div class="question" id="q4">
                    <h4>4. In the context of a Helpdesk, what is a Knowledge Base (KB)?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">A list of all employee passwords</li>
                        <li data-answer="correct">A centralized repository for troubleshooting articles and documentation</li>
                        <li data-answer="wrong">The server room where physical hardware is stored</li>
                        <li data-answer="wrong">A tool used to remotely control user desktops</li>
                    </ul>
                </div>

                <div class="question" id="q5">
                    <h4>5. What does the term "Escalation" mean in ticketing?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">Transferring the ticket to a higher tier or more specialized group</li>
                        <li data-answer="wrong">Increasing the volume of the user's headset</li>
                        <li data-answer="wrong">Closing the ticket immediately</li>
                        <li data-answer="wrong">Demanding the user reboot their machine</li>
                    </ul>
                </div>

                <div class="question" id="q6">
                    <h4>6. What is the primary use of the "ping" command line utility?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">To format a hard drive</li>
                        <li data-answer="wrong">To safely remove hardware</li>
                        <li data-answer="correct">To test network connectivity between two devices</li>
                        <li data-answer="wrong">To find a lost file on the network</li>
                    </ul>
                </div>

                <div class="question" id="q7">
                    <h4>7. What is the main function of tools like TeamViewer or AnyDesk?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">To scan for viruses</li>
                        <li data-answer="correct">To access and control a user's device over the network</li>
                        <li data-answer="wrong">To chat with other support technicians</li>
                        <li data-answer="wrong">To monitor server temperature</li>
                    </ul>
                </div>

                <div class="question" id="q8">
                    <h4>8. When a user reports their PC "won't turn on at all," what should you check first?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Check if the OS is corrupted</li>
                        <li data-answer="wrong">Ask them to re-install Windows</li>
                        <li data-answer="correct">Verify power and physical connections first</li>
                        <li data-answer="wrong">Check their network connection</li>
                    </ul>
                </div>

                <div class="question" id="q9">
                    <h4>9. Why is it vital to document every ticket thoroughly?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">To punish users for breaking things</li>
                        <li data-answer="wrong">Because it slows down the resolution process</li>
                        <li data-answer="correct">To provide a history for future reference and identify recurring problems</li>
                        <li data-answer="wrong">Only to prove to management that you are working</li>
                    </ul>
                </div>

                <div class="question" id="q10">
                    <h4>10. What is an IP address?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">A unique numerical identifier assigned to a device on a network</li>
                        <li data-answer="wrong">A physical burned-in address on the motherboard</li>
                        <li data-answer="wrong">A password for the router</li>
                        <li data-answer="wrong">An Intelligent Protocol for monitors</li>
                    </ul>
                </div>

                <div class="question" id="q11">
                    <h4>11. The phrase "Have you tried turning it off and on again" refers to what technical process?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Defragmentation</li>
                        <li data-answer="correct">Power cycling / Rebooting</li>
                        <li data-answer="wrong">Safe Mode</li>
                        <li data-answer="wrong">System Restore</li>
                    </ul>
                </div>

                <div class="question" id="q12">
                    <h4>12. What is "Phishing" in an IT context?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Searching the network for lost files</li>
                        <li data-answer="correct">Social engineering aimed at stealing credentials or sensitive data</li>
                        <li data-answer="wrong">A tool to test internet speed</li>
                        <li data-answer="wrong">Dropping a physical cable behind a desk</li>
                    </ul>
                </div>

                <div class="question" id="q13">
                    <h4>13. What is an example of "Active Listening"?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Typing loudly while the user speaks</li>
                        <li data-answer="correct">Paraphrasing the user's issue back to them to ensure accurate understanding</li>
                        <li data-answer="wrong">Interrupting to give the solution immediately</li>
                        <li data-answer="wrong">Putting them on mute</li>
                    </ul>
                </div>

                <div class="question" id="q14">
                    <h4>14. What is "Safe Mode" in the Windows operating system?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">A mode that prevents the user from going online</li>
                        <li data-answer="wrong">An antivirus scan state</li>
                        <li data-answer="correct">A diagnostic startup mode loading only essential drivers</li>
                        <li data-answer="wrong">A password-protected desktop</li>
                    </ul>
                </div>

                <div class="question" id="q15">
                    <h4>15. What does DNS stand for in networking?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Dynamic Network Storage</li>
                        <li data-answer="correct">Domain Name System</li>
                        <li data-answer="wrong">Direct Node Server</li>
                        <li data-answer="wrong">Digital Network Security</li>
                    </ul>
                </div>

                <div class="question" id="q16">
                    <h4>16. What does Tier 1 / Level 1 Support typically handle?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Server migrations and database engineering</li>
                        <li data-answer="correct">Basic troubleshooting, password resets, and ticket routing</li>
                        <li data-answer="wrong">Writing code for new company applications</li>
                        <li data-answer="wrong">Purchasing hardware from vendors</li>
                    </ul>
                </div>

                <div class="question" id="q17">
                    <h4>17. What is the primary use case for a VPN for a corporate employee?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Making their computer run faster</li>
                        <li data-answer="correct">Securely accessing a corporate network from a remote location over the internet</li>
                        <li data-answer="wrong">Bypassing the HR web filter</li>
                        <li data-answer="wrong">Formatting USB drives safely</li>
                    </ul>
                </div>

                <div class="question" id="q18">
                    <h4>18. What does a "Blue Screen of Death" (BSOD) usually indicate?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">Critical operating system error, often hardware or driver related</li>
                        <li data-answer="wrong">The monitor is broken</li>
                        <li data-answer="wrong">A normal system update is processing</li>
                        <li data-answer="wrong">The user typed the wrong password</li>
                    </ul>
                </div>

                <div class="question" id="q19">
                    <h4>19. How does a MAC address differ from an IP address?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">It is only used on Apple computers</li>
                        <li data-answer="correct">It is a physical, permanent hardware address assigned to a network interface</li>
                        <li data-answer="wrong">It changes every time you reboot</li>
                        <li data-answer="wrong">It dictates what websites you can visit</li>
                    </ul>
                </div>

                <div class="question" id="q20">
                    <h4>20. What is the FINAL step of the IT troubleshooting methodology?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Test the theory</li>
                        <li data-answer="correct">Document findings, actions, and outcomes</li>
                        <li data-answer="wrong">Verify full system functionality</li>
                        <li data-answer="wrong">Establish a plan of action</li>
                    </ul>
                </div>

                <button class="submit-btn" onclick="submitQuiz()">Submit Assessment</button>
                
                <div id="quiz-result" class="quiz-result" style="display: none;"></div>
                
                <div id="corrections" class="correction-section" style="display: none;">
                    <h3>Areas for Review</h3>
                    <div id="correction-content"></div>
                </div>
            </div>
        </div>

        <div class="navigation">
            <button id="prevBtn" class="nav-btn" onclick="changeSlide(-1)" disabled>Previous</button>
            <button id="nextBtn" class="nav-btn" onclick="changeSlide(1)">Next</button>
            <button id="printBtn" class="print-btn" onclick="printPresentation()">Print Presentation</button>
        </div>
    </div>

    <script src="js/technical-support.js"></script>
</body>
</html>