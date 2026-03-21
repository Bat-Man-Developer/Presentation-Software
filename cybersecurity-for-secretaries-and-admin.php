<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersecurity Fundamentals for Secretaries & Administrators</title>
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/cybersecurity-for-secretaries-and-admin.css">
    <style>
        .slide-image {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            margin: 24px 0;
            box-shadow: 0 4px 16px rgba(60, 64, 67, 0.15);
            display: block;
        }
    </style>
</head>
<body>
    <div class="presentation-container">
        <div class="slide-counter">
            <span id="currentSlide">1</span> / <span id="totalSlides">20</span>
        </div>

        <div class="slide active">
            <div class="title-slide">
                <h1>Cybersecurity Fundamentals</h1>
                <p class="subtitle">Empowering the Office Gatekeepers</p>
                <div class="xhosa-proverb">
                    "Ukhuseleko luqala ngawe."
                    <br>
                    <small>(Protection begins with you.)</small>
                </div>
                <img src="" alt="Secure and modern office environment with digital lock symbols" class="slide-image">
                <div class="highlight">
                    <h3>Practical Training Workshop</h3>
                    <p>Equipping administrative professionals with the knowledge to identify, prevent, and respond to modern digital threats in the workplace.</p>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>The Administrator as the Digital Gatekeeper</h1>
            <p>Secretaries and administrators are the nerve center of any organization. Because you handle schedules, communications, and sensitive documents, you are often the primary target for cybercriminals.</p>
            
            <img src="" alt="Administrative professional confidently working at a computer with a glowing security shield graphic in the background" class="slide-image">

            <h2>Your Critical Role:</h2>
            <ul>
                <li><strong>First Line of Defense:</strong> You process external communications before they reach executives.</li>
                <li><strong>Access Control:</strong> You often manage visitor access and meeting room credentials.</li>
                <li><strong>Information Hub:</strong> You handle sensitive financial, strategic, and personal data daily.</li>
            </ul>
        </div>

        <div class="slide">
            <h1>The Threat Landscape: What Are We Protecting Against?</h1>
            <p>Understanding the enemy is the first step in digital defense.</p>

            <img src="" alt="Conceptual diagram detailing three cybersecurity pillars: Malware, Phishing, and Ransomware" class="slide-image">

            <div class="two-column">
                <div class="highlight">
                    <h3>Common Threats</h3>
                    <p><strong>Malware:</strong> Malicious software designed to damage or gain unauthorized access to computer systems.</p>
                    <p><strong>Ransomware:</strong> A type of malware that locks your computer or files until a sum of money is paid.</p>
                </div>
                <div class="highlight" style="border-left-color: var(--secondary-color);">
                    <h3>The Main Delivery Method</h3>
                    <p><strong>Phishing:</strong> Fraudulent communications appearing to come from a reputable source, designed to steal sensitive data or deploy malware.</p>
                    <p>Over 80 percent of cyber attacks begin with a phishing email.</p>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Social Engineering: Hacking the Human</h1>
            
            <div class="xhosa-proverb">
                "Lumka ungakhweli kwesikaNonyanya."
                <br>
                <small>(Beware of falling into a trap - criminals use our natural helpfulness against us.)</small>
            </div>

            <img src="" alt="Illustration of social engineering concepts like a hacker manipulating a user over the phone or via email" class="slide-image">

            <p>Social engineering manipulates people into giving up confidential information. Cybercriminals exploit principles like authority, urgency, and our natural instinct to be helpful (Ubuntu).</p>

            <h2>Common Tactics:</h2>
            <ul>
                <li><strong>CEO Fraud:</strong> An attacker pretends to be the boss asking for an urgent wire transfer or purchase of gift cards.</li>
                <li><strong>Baiting:</strong> Leaving an infected USB drive on a desk hoping someone will plug it in out of curiosity.</li>
                <li><strong>Pretexting:</strong> An attacker calls pretending to be IT support needing your password to "fix an issue."</li>
            </ul>
        </div>

        <div class="slide">
            <h1>Recognizing Phishing Emails: Red Flags</h1>
            <p>Always pause and verify before clicking links or downloading attachments.</p>

            <img src="" alt="Annotated sample email highlighting specific phishing indicators like misspelled domains and urgent language" class="slide-image">

            <h2>What to Look For:</h2>
            <ul>
                <li><strong>Urgent or Threatening Language:</strong> "Your account will be suspended in 24 hours."</li>
                <li><strong>Suspicious Sender Address:</strong> Look closely at the email domain (e.g., billing@microsoft-support-team.com instead of billing@microsoft.com).</li>
                <li><strong>Generic Greetings:</strong> "Dear Customer" or "Dear Employee" instead of your actual name.</li>
                <li><strong>Unexpected Attachments:</strong> Especially unexpected invoices, receipts, or shipping documents in ZIP or PDF format.</li>
            </ul>
        </div>

        <div class="slide">
            <h1>Hands-On Lab: Spot the Phishing Attempt</h1>
            <div class="interactive-lab">
                <div class="lab-title">Email Analysis Simulation</div>
                <p>Review the following email. Is it legitimate or a phishing attempt?</p>
                
                <div style="background: var(--bg-primary); padding: var(--space-md); border: 1px solid var(--border-medium); border-radius: var(--radius-sm); margin-bottom: var(--space-md); font-family: monospace;">
                    <strong>From:</strong> IT-Helpdesk@company-admin-portal.com<br>
                    <strong>Subject:</strong> URGENT: Mandatory Password Reset Required<br>
                    <strong>Date:</strong> March 21, 2026<br><br>
                    Dear Staff Member,<br><br>
                    Due to a recent security update, your office account access will be terminated at 5:00 PM today unless you verify your credentials.<br><br>
                    Please click the secure link below to log in and keep your account active:<br>
                    <u>http://secure-login-update.net/verify</u><br><br>
                    Thank you,<br>
                    The IT Team
                </div>

                <div style="margin: 15px 0;">
                    <input type="radio" id="phish_legit" name="phishPrompt">
                    <label for="phish_legit">Legitimate Email</label><br><br>
                    
                    <input type="radio" id="phish_scam" name="phishPrompt">
                    <label for="phish_scam">Phishing Attempt</label>
                </div>

                <button class="simulation-button" onclick="checkPhishing()">Analyze Choice</button>
                <div id="phishing-result" class="simulation-result"></div>
            </div>
        </div>

        <div class="slide">
            <h1>Password Security and Management</h1>
            <p>Your password is the front door to the organization's data.</p>

            <img src="" alt="Strong password conceptual graphic showing a mix of symbols, letters, and numbers" class="slide-image">

            <h2>Password Best Practices:</h2>
            <ul>
                <li><strong>Length over Complexity:</strong> A passphrase (e.g., "BlueCoffeeTableWalksFast") is better and easier to remember than a short, complex password.</li>
                <li><strong>No Recycling:</strong> Never use the same password for multiple accounts. If one is breached, they all are.</li>
                <li><strong>Use a Password Manager:</strong> Tools like Bitwarden, 1Password, or LastPass store your passwords securely so you only need to remember one master password.</li>
                <li><strong>Never Share:</strong> Do not write passwords on sticky notes under your keyboard or share them via email.</li>
            </ul>
        </div>

        <div class="slide">
            <h1>Hands-On Lab: Password Strength Tester</h1>
            <div class="interactive-lab">
                <div class="lab-title">Evaluate Password Strength</div>
                <p>Type a sample password to see how quickly a computer could crack it. (Do not type your real passwords here).</p>
                
                <input type="text" id="password-input" class="form-input" placeholder="Enter a sample password...">
                
                <button class="simulation-button" onclick="testPassword()">Test Strength</button>
                <div id="password-result" class="simulation-result"></div>
            </div>
        </div>

        <div class="slide">
            <h1>Multi-Factor Authentication (MFA)</h1>
            <p>Passwords alone are no longer sufficient. MFA adds an essential layer of security.</p>

            <img src="" alt="Diagram showing the three factors of multi-factor authentication: Something you know, something you have, and something you are" class="slide-image">

            <div class="two-column">
                <div>
                    <h3>What is MFA?</h3>
                    <p>MFA requires two or more independent credentials to verify your identity. It combines:</p>
                    <ul>
                        <li>Something you <strong>know</strong> (password)</li>
                        <li>Something you <strong>have</strong> (a code on your phone)</li>
                        <li>Something you <strong>are</strong> (fingerprint or face scan)</li>
                    </ul>
                </div>
                <div class="highlight">
                    <h3>Why it matters:</h3>
                    <p>Even if a hacker steals your password, they cannot access your account without your secondary device. MFA blocks 99.9 percent of automated cyber attacks.</p>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Physical Security in the Office</h1>
            <p>Cybersecurity extends beyond the digital realm. Protecting physical devices and documents is equally important.</p>

            <img src="" alt="Split screen comparing a cluttered, insecure desk with sticky notes to a clean, secure desk environment" class="slide-image">

            <h2>The Clean Desk Policy:</h2>
            <ul>
                <li><strong>Lock Your Screen:</strong> Always press Windows + L (or Command + Control + Q on Mac) when stepping away from your desk.</li>
                <li><strong>Clear the Clutter:</strong> Do not leave sensitive printed documents, flash drives, or notes on your desk overnight.</li>
                <li><strong>Beware of Tailgating:</strong> Do not hold secure doors open for people you do not recognize. Ensure visitors sign in properly.</li>
            </ul>
        </div>

        <div class="slide">
            <h1>Secure Document Handling & Disposal</h1>
            
            <div class="xhosa-proverb">
                "Oko kubhaliweyo kuhlala kuhleli."
                <br>
                <small>(What is written remains - Ensure confidential writing is disposed of properly.)</small>
            </div>

            <img src="" alt="Paper document going through a cross-cut shredder and a secure printing station with a PIN pad" class="slide-image">

            <p>Administrators handle contracts, HR records, and financial statements that must be protected lifecycle-wide.</p>
            
            <ul>
                <li><strong>Printing:</strong> Use secure print functions where you must enter a PIN at the printer to release the document. Never leave sensitive documents sitting on the printer tray.</li>
                <li><strong>Disposal:</strong> Never throw sensitive documents into the regular recycling bin. Always use cross-cut shredders or designated secure destruction bins.</li>
                <li><strong>Digital Sharing:</strong> Use secure, encrypted file-sharing links rather than attaching sensitive PDFs directly to emails.</li>
            </ul>
        </div>

        <div class="slide">
            <h1>Data Privacy & POPIA Compliance</h1>
            <p>In South Africa, the Protection of Personal Information Act (POPIA) mandates how organizations must handle personal data.</p>

            <img src="" alt="Compliance checklist document outlining data privacy and protection standards" class="slide-image">

            <h2>Administrator Responsibilities under POPIA:</h2>
            <ul>
                <li><strong>Consent:</strong> Ensure you have the right to process or share a person's information.</li>
                <li><strong>Minimization:</strong> Only collect the information strictly necessary for the task at hand.</li>
                <li><strong>Security:</strong> Take reasonable measures to prevent loss, damage, or unauthorized access to personal information (like ID numbers, addresses, and health records).</li>
            </ul>
        </div>

        <div class="slide">
            <h1>Safe Browsing & Public Wi-Fi</h1>
            <p>When working remotely or traveling for business, connectivity can pose severe risks.</p>

            <img src="" alt="Conceptual diagram showing a Virtual Private Network (VPN) creating a secure encrypted tunnel over a public Wi-Fi network" class="slide-image">

            <h2>The Dangers of Public Wi-Fi:</h2>
            <ul>
                <li>Public networks at cafes or airports are often unencrypted. Hackers on the same network can intercept your data (Man-in-the-Middle attacks).</li>
                <li><strong>The Solution:</strong> Always use a Virtual Private Network (VPN) when connecting to public Wi-Fi to encrypt your connection.</li>
                <li><strong>Mobile Hotspot:</strong> If a VPN is unavailable, tethering to your smartphone's cellular data is significantly safer than using public Wi-Fi.</li>
            </ul>
        </div>

        <div class="slide">
            <h1>Hands-On Lab: Network Safety Assessment</h1>
            <div class="interactive-lab">
                <div class="lab-title">Choosing a Connection</div>
                <p>You are at a coffee shop waiting for a flight and need to send an urgent financial report to the CEO. Which connection method should you choose?</p>
                
                <div style="margin: 15px 0;">
                    <input type="radio" id="net_cafe" name="netPrompt">
                    <label for="net_cafe">Connect to "Free_Airport_WiFi" because it has the strongest signal.</label><br><br>
                    
                    <input type="radio" id="net_vpn" name="netPrompt">
                    <label for="net_vpn">Connect to the public Wi-Fi but activate your company-approved VPN first.</label><br><br>
                    
                    <input type="radio" id="net_open" name="netPrompt">
                    <label for="net_open">Ask the barista for their private network password.</label>
                </div>

                <button class="simulation-button" onclick="checkNetwork()">Submit Choice</button>
                <div id="network-result" class="simulation-result"></div>
            </div>
        </div>

        <div class="slide">
            <h1>The Risks of Removable Media (USB Drives)</h1>
            <p>USB flash drives are convenient but represent a massive security vulnerability for organizations.</p>

            <img src="" alt="USB flash drive with a glowing warning symbol indicating potential hidden malware" class="slide-image">

            <h2>USB Security Protocols:</h2>
            <ul>
                <li><strong>Malware Transmission:</strong> USB drives can automatically execute malicious code the moment they are plugged in.</li>
                <li><strong>Data Loss:</strong> They are easily lost or stolen. If they contain sensitive data and are unencrypted, it results in a data breach.</li>
                <li><strong>Best Practice:</strong> Use company-approved, encrypted flash drives only. Never plug in a USB drive you found in the parking lot or at a conference.</li>
            </ul>
        </div>

        <div class="slide">
            <h1>Incident Reporting: When Mistakes Happen</h1>
            <p>Even with the best training, human error occurs. How you respond is what matters.</p>

            <img src="" alt="Office worker urgently but calmly calling the IT helpdesk to report a suspected cybersecurity incident" class="slide-image">

            <div class="highlight" style="border-left-color: var(--accent-red);">
                <h3>Speed is Critical</h3>
                <p>If you click a bad link, download a suspicious file, or realize you sent data to the wrong person, report it immediately.</p>
            </div>

            <h2>Creating a Safe Culture:</h2>
            <ul>
                <li><strong>Do Not Hide It:</strong> Trying to fix or hide a cyber mistake allows the attack to spread.</li>
                <li><strong>Contact IT Promptly:</strong> Disconnect from the network (unplug the internet cable or turn off Wi-Fi) and call the IT helpdesk immediately.</li>
                <li><strong>No Blame Culture:</strong> Organizations should foster an environment where employees feel safe reporting mistakes without fear of immediate termination.</li>
            </ul>
        </div>

        <div class="slide">
            <h1>Social Media Awareness for Administrators</h1>
            <p>What you share online can be weaponized by cybercriminals.</p>

            <div class="xhosa-proverb">
                "Unyikima ukho."
                <br>
                <small>(Danger is present - Be mindful of the digital footprints you leave.)</small>
            </div>

            <img src="" alt="Social media profile interface highlighting the risks of oversharing personal and corporate information online" class="slide-image">

            <h2>Oversharing Risks:</h2>
            <ul>
                <li><strong>Reconnaissance:</strong> Attackers scour LinkedIn and Facebook to learn about company hierarchies, identifying who reports to whom to craft convincing CEO fraud emails.</li>
                <li><strong>Office Photos:</strong> Posting a picture of your desk might inadvertently reveal passwords on sticky notes or confidential documents on your screen.</li>
                <li><strong>Travel Plans:</strong> Announcing that executives are traveling makes the company vulnerable to targeted scams during their absence.</li>
            </ul>
        </div>

        <div class="slide">
            <h1>90-Day Cybersecurity Action Plan</h1>
            <p>Practical steps to secure your administrative workflow.</p>

            <img src="" alt="90-day cybersecurity implementation roadmap timeline showing steps to secure administrative workflows" class="slide-image">

            <ul>
                <li><strong>Days 1-30: Audit & Secure.</strong> Change any reused passwords. Enroll in a password manager. Ensure MFA is activated on all your work accounts.</li>
                <li><strong>Days 31-60: Physical Environment.</strong> Implement a strict clean desk policy. Set your computer to auto-lock after 3 minutes of inactivity. Locate your nearest secure shredder.</li>
                <li><strong>Days 61-90: Advocacy.</strong> Review your department's data handling processes for POPIA compliance. Share your cybersecurity knowledge with junior administrative staff.</li>
            </ul>
        </div>

        <div class="slide">
            <h1>Knowledge Assessment</h1>
            <p>Test your understanding of Cybersecurity Fundamentals.</p>

            <div class="quiz-container">
                <div class="question" id="q1">
                    <h4>1. If you receive an urgent email from the CEO asking you to buy gift cards immediately, you should:</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Buy the gift cards immediately to be helpful.</li>
                        <li data-answer="wrong">Reply to the email asking if it is really them.</li>
                        <li data-answer="correct">Call the CEO or speak to them in person to verify the request.</li>
                    </ul>
                </div>

                <div class="question" id="q2">
                    <h4>2. What is the most secure way to manage your passwords?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Write them in a notebook kept in your desk drawer.</li>
                        <li data-answer="correct">Use a reputable password manager to generate and store unique passwords.</li>
                        <li data-answer="wrong">Use a single, very complex password for all your accounts.</li>
                    </ul>
                </div>

                <div class="question" id="q3">
                    <h4>3. You accidentally clicked a suspicious link in an email. What is your first step?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">Disconnect from the network and contact IT immediately.</li>
                        <li data-answer="wrong">Delete the email and hope nothing happens.</li>
                        <li data-answer="wrong">Restart your computer to clear the virus.</li>
                    </ul>
                </div>

                <button class="submit-btn" onclick="submitAssessment()">Submit Assessment</button>
                <div id="quiz-final-result" class="quiz-result" style="display: none;"></div>
            </div>
        </div>

        <div class="slide">
            <h1>Conclusion & Enkosi</h1>
            <div class="xhosa-proverb">
                "Zikhusele kwiintshaba. Enkosi ngokuthatha inxaxheba."
                <br>
                <small>(Protect yourself from enemies. Thank you for participating.)</small>
            </div>

            <img src="" alt="Secure and confident administrative professional standing in a modern office, representing digital vigilance" class="slide-image">

            <h2>Final Thoughts:</h2>
            <ul>
                <li>Technology alone cannot stop cyber attacks. Human vigilance is the strongest firewall.</li>
                <li>Take a moment to verify before you trust.</li>
                <li>Lead by example in your office by adhering to secure physical and digital practices.</li>
            </ul>

            <div class="highlight">
                <p style="text-align: center; font-weight: bold;">Stay alert, stay secure.</p>
            </div>
        </div>

    </div>

    <div class="navigation">
        <button class="nav-btn" onclick="window.location.href='home.php'">Home</button>
        
        <button class="nav-btn" id="prevBtn" onclick="changeSlide(-1)">Previous</button>
        <button class="nav-btn" id="nextBtn" onclick="changeSlide(1)">Next</button>
        <button class="print-btn" id="printBtn" onclick="window.print()" style="display: none;">Print as PDF</button>
    </div>

    <script src="js/cybersecurity-for-secretaries-and-admin.js"></script>
</body>
</html>