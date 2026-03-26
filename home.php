<?php
    $companyName = "Royal Institute of Technology & Engineering - Tinotel";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName; ?></title>
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/styles/home.css">
</head>
<body>
    <div class="header">
        <h1 class="main-title"><?php echo $companyName; ?></h1>
    </div>

    <div class="presentations-container">

        <div class="presentation-card secadmin-card" onclick="navigateToPresentation('ai-for-secretaries-and-admin.php')">
            <div class="card-icon secadmin-icon">SA</div>
            <h2 class="card-title">Day 1: AI for Secretaries & Admin</h2>
            <p class="card-description">
                Empower your modern office workflow using generative AI for intelligent scheduling, rapid email triage, and professional correspondence.
            </p>
            <ul class="card-features">
                <li>Prompt engineering strategies</li>
                <li>Email management & triage</li>
                <li>AI meeting assistants</li>
                <li>Generative itinerary planning</li>
                <li>Cultural nuance in communication</li>
            </ul>
            <button class="start-button">Start AI Admin</button>
        </div>

        <div class="presentation-card report-card" onclick="navigateToPresentation('ai-for-report-writing-and-minute-taking.php')">
            <div class="card-icon report-icon">AT</div>
            <h2 class="card-title">Day 2: Advanced AI Tools & Workflows</h2>
            <p class="card-description">
                Master specialized AI for professional administration across all industries using document automation, multilingual processing, and intelligent workflow integration.
            </p>
            <ul class="card-features">
                <li>Advanced document automation systems</li>
                <li>Data visualization & analytics AI</li>
                <li>Multilingual AI processing excellence</li>
                <li>Workflow automation & integration</li>
                <li>Professional AI ethics & leadership</li>
            </ul>
            <button class="start-button">Start Advanced AI</button>
        </div>

        <div class="presentation-card seccyber-card" onclick="navigateToPresentation('cybersecurity-for-secretaries-and-admin.php')">
            <div class="card-icon seccyber-icon">SC</div>
            <h2 class="card-title">Day 3: Cybersecurity for Secretaries & Admin</h2>
            <p class="card-description">
                Become the ultimate digital gatekeeper. Learn to identify phishing, manage passwords, and protect sensitive organizational data.
            </p>
            <ul class="card-features">
                <li>Social engineering defense</li>
                <li>Phishing identification</li>
                <li>Password management & MFA</li>
                <li>Physical office security</li>
                <li>POPIA compliance basics</li>
            </ul>
            <button class="start-button">Start Sec Cyber</button>
        </div>

        <!--
        <div class="presentation-card hardware-card" onclick="navigateToPresentation('hardware-analyst.php')">
            <div class="card-icon hardware-icon">HW</div>
            <h2 class="card-title">Hardware Cybersecurity Analyst</h2>
            <p class="card-description">
                Secure the physical perimeter. Learn to detect supply chain attacks, configure TPMs, and analyze hardware Trojans.
            </p>
            <ul class="card-features">
                <li>Secure Boot & TPM integration</li>
                <li>UART & JTAG physical debugging</li>
                <li>Supply chain interdiction defense</li>
                <li>Hardware encryption (SEDs/HSMs)</li>
                <li>Component visual auditing</li>
            </ul>
            <button class="start-button">Start Hardware Sec</button>
        </div>

        <div class="presentation-card software-card" onclick="navigateToPresentation('software-analyst.php')">
            <div class="card-icon software-icon">SW</div>
            <h2 class="card-title">Software Cybersecurity Analyst</h2>
            <p class="card-description">
                Shift left and secure code before it deploys. Master AppSec, DevSecOps pipelines, and OWASP Top 10 vulnerabilities.
            </p>
            <ul class="card-features">
                <li>Secure PHP & JS Code Review</li>
                <li>Content Security Policy (CSP)</li>
                <li>CI/CD Pipeline Automation (SAST/DAST)</li>
                <li>Dependency Vulnerability Audits</li>
                <li>Secrets management & detection</li>
            </ul>
            <button class="start-button">Start AppSec</button>
        </div>

        <div class="presentation-card network-card" onclick="navigateToPresentation('network-analyst.php')">
            <div class="card-icon network-icon">NW</div>
            <h2 class="card-title">Network Cybersecurity Analyst</h2>
            <p class="card-description">
                Defend the wire. Master Next-Gen Firewalls, Zero Trust Architecture, packet analysis, and NOC operations.
            </p>
            <ul class="card-features">
                <li>Wireshark & PCAP analysis</li>
                <li>Firewall Rule Configuration</li>
                <li>VLAN Segmentation & Subnetting</li>
                <li>DDoS & MitM Incident Response</li>
                <li>Zero Trust Network Access (ZTNA)</li>
            </ul>
            <button class="start-button">Start Network Sec</button>
        </div>

        <div class="presentation-card aisec-card" onclick="navigateToPresentation('ai-for-cybersecurity-analyst.php')">
            <div class="card-icon aisec-icon">AI</div>
            <h2 class="card-title">AI for Cybersecurity Analysts</h2>
            <p class="card-description">
                Leverage Generative AI in the SOC while defending against adversarial ML, deepfakes, and prompt injection.
            </p>
            <ul class="card-features">
                <li>Prompt Injection mitigations</li>
                <li>SOC Copilot threat hunting</li>
                <li>Defeating voice-clone deepfakes</li>
                <li>LLM security architectures</li>
                <li>Defensive prompt engineering</li>
            </ul>
            <button class="start-button">Start AI Sec</button>
        </div>

        <div class="presentation-card ai-card" onclick="navigateToPresentation('ai-for-hr.php')">
            <div class="card-icon ai-icon">HR</div>
            <h2 class="card-title">Artificial Intelligence in HR</h2>
            <p class="card-description">
                Discover how AI is revolutionizing recruitment, employee engagement, and performance management in modern HR departments.
            </p>
            <ul class="card-features">
                <li>AI-powered recruitment and screening</li>
                <li>Intelligent employee matching</li>
                <li>Automated performance analysis</li>
                <li>Predictive workforce analytics</li>
                <li>Chatbots and virtual HR assistants</li>
            </ul>
            <button class="start-button">Start HR AI</button>
        </div>

        <div class="presentation-card analytics-card" onclick="navigateToPresentation('data-analytics-for-hr.php')">
            <div class="card-icon analytics-icon">DA</div>
            <h2 class="card-title">Data Analytics for HR</h2>
            <p class="card-description">
                Learn how data-driven insights are transforming HR decision-making, employee retention, and organizational efficiency.
            </p>
            <ul class="card-features">
                <li>Employee performance metrics</li>
                <li>Turnover prediction models</li>
                <li>Compensation analysis</li>
                <li>Workforce planning insights</li>
                <li>Real-time HR dashboards</li>
            </ul>
            <button class="start-button">Start Analytics</button>
        </div>

        <div class="presentation-card security-card" onclick="navigateToPresentation('cybersecurity-for-hr.php')">
            <div class="card-icon security-icon">CS</div>
            <h2 class="card-title">Cybersecurity in HR</h2>
            <p class="card-description">
                Understand the critical importance of securing sensitive employee data and implementing robust HR cybersecurity measures.
            </p>
            <ul class="card-features">
                <li>Employee data protection</li>
                <li>Secure HR information systems</li>
                <li>Privacy compliance (GDPR, etc.)</li>
                <li>Identity and access management</li>
                <li>HR security awareness training</li>
            </ul>
            <button class="start-button">Start HR Security</button>
        </div>

        <div class="presentation-card literacy-card" onclick="navigateToPresentation('computer-literacy-and-ai.php')">
            <div class="card-icon literacy-icon">CL</div>
            <h2 class="card-title">Computer Literacy & AI</h2>
            <p class="card-description">
                Master essential GUI tools like Word and Excel while supercharging your workflow using ChatGPT as your intelligent assistant.
            </p>
            <ul class="card-features">
                <li>GUI Word Processing & AI drafting</li>
                <li>Spreadsheet formulas with ChatGPT</li>
                <li>Smart Web Search & Research</li>
                <li>AI-powered document formatting</li>
                <li>Prompt engineering basics</li>
            </ul>
            <button class="start-button">Start Literacy</button>
        </div>

        <div class="presentation-card excel-card" onclick="navigateToPresentation('advanced-microsoft-excel.php')">
            <div class="card-icon excel-icon">XL</div>
            <h2 class="card-title">Advanced Microsoft Excel</h2>
            <p class="card-description">
                Unlock the full potential of Excel with advanced data modeling, automation, and business intelligence techniques.
            </p>
            <ul class="card-features">
                <li>Advanced Formulas & Logic Arrays</li>
                <li>Power Query & Data Modeling</li>
                <li>Pivot Tables & Interactive Dashboards</li>
                <li>VBA Macros & Workflow Automation</li>
                <li>What-If Analysis & Forecasting</li>
            </ul>
            <button class="start-button">Start Excel</button>
        </div>

        <div class="presentation-card techsupport-card" onclick="navigateToPresentation('technical-support.php')">
            <div class="card-icon techsupport-icon">TS</div>
            <h2 class="card-title">Technical Support & Helpdesk</h2>
            <p class="card-description">
                Master IT Helpdesk excellence, methodical troubleshooting strategies, and effective customer communication.
            </p>
            <ul class="card-features">
                <li>SLA & Ticket Priority Management</li>
                <li>CompTIA Troubleshooting Methodology</li>
                <li>Network & System Diagnostics</li>
                <li>Remote Support Best Practices</li>
                <li>Knowledge Base & Incident Management</li>
            </ul>
            <button class="start-button">Start Support</button>
        </div>
        -->
    </div>

    <div class="footer">
        <a href="https://fcsholdix.co.za" style="color: #ff9d00ff;">Powered by Fhatani Communications & Services CC.<br> All Rights Reserved.</a>
    </div>

    <div class="particles" id="particles"></div>

    <script src="js/home.js"></script>
</body>
</html>