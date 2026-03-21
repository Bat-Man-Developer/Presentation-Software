<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersecurity in Human Resources</title>
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/cybersecurity-for-hr.css">
</head>
<body>
    <div class="presentation-container">
        <div class="slide-counter">
            <span id="currentSlide">1</span> / <span id="totalSlides"></span>
        </div>

        <!-- Title Slide -->
        <div class="slide active">
            <div class="title-slide">
                <div class="ai-icon">🔒</div>
                <h1>Cybersecurity in Human Resources</h1>
                <p class="subtitle">Protecting HR Data and Systems Across Africa</p>
                <div class="highlight">
                    <h3>Comprehensive Cybersecurity Training Program for HR Professionals</h3>
                    <p>Building Secure HR Practices in the Digital Age</p>
                    <p><strong>Hands-On Learning with Real Solutions</strong></p>
                </div>
            </div>
        </div>

        <!-- Session 1: Common Cybersecurity Risks in HR Across Africa -->
        <div class="slide">
            <h1>Session 1: Common Cybersecurity Risks in HR Across Africa</h1>
            
            <h2>Essential Security Procedures for HR Professionals</h2>
            <ul>
                <li>Practice good security procedures, including regularly changing passwords</li>
                <li>Have every member of the HR team take a cyber security training course</li>
                <li>Evaluate vetting and screening processes</li>
                <li>Examine processes to ensure they don't injure/inconvenience employees</li>
                <li>Monitor access points to data to know who has accessed the data when and for what purpose</li>
            </ul>

            <div class="highlight">
                <h2>Critical Security Statistics</h2>
                <p><strong>68% of data breaches involve a human element.</strong> Human Resources (HR) departments handle some of the most sensitive employee information, making them prime targets for cybercriminals. From payroll details to personal identification numbers, HR systems store data that can be exploited for identity theft, financial fraud, and corporate espionage.</p>
            </div>

            <h2>The Challenge: Balancing Security and Productivity</h2>
            <ul>
                <li>HR professionals must strike a delicate balance: implementing strong cybersecurity measures without disrupting productivity</li>
                <li>Safeguarding data while ensuring smooth workflow operations</li>
                <li>Protecting sensitive employee information from cyber threats</li>
                <li>Maintaining compliance with data protection regulations</li>
                <li>Building employee awareness without creating fear or resistance</li>
            </ul>

            <h2>Common HR Cybersecurity Risks in Africa</h2>
            <ul>
                <li>Phishing attacks targeting HR personnel with fake employee requests</li>
                <li>Malware infections through email attachments and downloads</li>
                <li>Insider threats from disgruntled employees or contractors</li>
                <li>Weak password policies and poor access controls</li>
                <li>Unsecured remote work environments</li>
                <li>Social engineering attacks exploiting trust relationships</li>
                <li>Data breaches through third-party vendors and partners</li>
            </ul>

            <div class="case-study">
                <h3>Case Study 1: African Financial Services HR Breach</h3>
                <p>A major African bank suffered a data breach when HR personnel fell victim to a spear-phishing attack. Attackers gained access to employee personal data, payroll information, and sensitive corporate documents. The breach affected over 15,000 employees and resulted in regulatory fines, legal costs, and reputation damage totaling $2.3 million.</p>
            </div>
        </div>

        <!-- NEW: Hands-On Risk Assessment Lab -->
        <div class="slide">
            <h1>🔬 Hands-On Lab: Risk Assessment Exercise</h1>
            
            <div class="interactive-lab">
                <h2>HR Security Risk Assessment Tool</h2>
                <div class="practice-exercise">
                    <div class="practice-title">Evaluate Your Organization's Current Risk Level</div>
                    
                    <div class="security-checklist">
                        <h3>Current Security Practices Audit:</h3>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk1" data-weight="5">
                            <label for="risk1">Do you use multi-factor authentication for HR systems?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk2" data-weight="4">
                            <label for="risk2">Are employee passwords required to be complex (12+ characters)?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk3" data-weight="5">
                            <label for="risk3">Do you conduct regular cybersecurity training for HR staff?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk4" data-weight="3">
                            <label for="risk4">Are HR systems regularly updated with security patches?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk5" data-weight="4">
                            <label for="risk5">Do you have incident response procedures documented?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk6" data-weight="5">
                            <label for="risk6">Is sensitive HR data encrypted both in transit and at rest?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk7" data-weight="3">
                            <label for="risk7">Do you monitor and log access to HR systems?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk8" data-weight="4">
                            <label for="risk8">Are terminated employee accounts immediately deactivated?</label>
                        </div>
                    </div>
                    
                    <button class="simulation-button" onclick="calculateRiskScore()">Calculate Risk Score</button>
                    <div id="risk-assessment-result" class="simulation-result"></div>
                </div>
            </div>

            <div class="solution-box">
                <div class="solution-title">Free Risk Assessment Tools</div>
                <div class="resource-link">
                    <strong>NIST Cybersecurity Framework Self-Assessment:</strong> 
                    Download the free Excel-based tool from NIST.gov to conduct comprehensive cybersecurity assessments
                </div>
                <div class="resource-link">
                    <strong>CIS Controls Self Assessment Tool (CIS-CAT Lite):</strong> 
                    Free automated security assessment tool for basic vulnerability scanning
                </div>
                <div class="resource-link">
                    <strong>Microsoft Security Compliance Toolkit:</strong> 
                    Free tools for assessing and configuring Windows security settings
                </div>
            </div>
        </div>

        <!-- NEW: Practical Phishing Defense Workshop -->
        <div class="slide">
            <h1>🎯 Workshop: Building Phishing Defense</h1>
            
            <div class="hands-on-section">
                <div class="hands-on-title">Setup Your Own Phishing Awareness Program</div>
                
                <div class="solution-box">
                    <div class="solution-title">Free Phishing Simulation Tools</div>
                    <div class="step-by-step">
                        <strong>1. Gophish (Open Source):</strong><br>
                        • Download from github.com/gophish/gophish<br>
                        • Create realistic phishing scenarios<br>
                        • Track employee responses and provide training<br>
                        • Generate detailed reports for management<br><br>
                        
                        <strong>2. King Phisher:</strong><br>
                        • Free tool for phishing campaign simulation<br>
                        • Email template creation and tracking<br>
                        • Integrated training modules<br><br>
                        
                        <strong>3. SET (Social Engineering Toolkit):</strong><br>
                        • Part of Kali Linux distribution<br>
                        • Comprehensive social engineering testing<br>
                        • Educational purposes and awareness training
                    </div>
                </div>

                <div class="practice-exercise">
                    <div class="practice-title">Create Your Phishing Awareness Email</div>
                    <p><strong>Exercise:</strong> Draft an email to your organization about phishing awareness. Include the elements below:</p>
                    
                    <div class="demo-box">
                        <h4>📧 Email Template Builder</h4>
                        <textarea id="phishing-email" style="width: 100%; height: 200px; padding: 10px; border: 2px solid #3498db; border-radius: 8px;" placeholder="Write your phishing awareness email here...">
Subject: Important: How to Recognize and Report Phishing Attempts

Dear Team,

[Your content here - include warning signs, reporting procedures, and examples]

Best regards,
[Your name]
HR Security Team</textarea>
                        <br><br>
                        <button class="simulation-button" onclick="validateEmail()">Validate Email Content</button>
                        <div id="email-validation" class="simulation-result"></div>
                    </div>
                </div>
            </div>

            <div class="case-study">
                <h3>Real Implementation: Nigerian Bank Success Story</h3>
                <p>First Bank of Nigeria implemented Gophish and conducted monthly phishing simulations. Results:</p>
                <ul>
                    <li>Reduced successful phishing attacks by 85% in 6 months</li>
                    <li>Increased security reporting by 300%</li>
                    <li>Cost: $0 (open source tools) vs $50,000 for commercial solutions</li>
                    <li>ROI: Prevented estimated $2.1M in potential breach costs</li>
                </ul>
            </div>
        </div>

        <!-- Session 2: Implementing Effective Prevention Measures - Part 1-->
        <div class="slide">
            <h1>Session 2: Implementing Effective Prevention Measures (Part 1)</h1>
            
            <h2>Conducting Regular Security Training</h2>
            <ul>
                <li>Mandatory cybersecurity awareness training for all HR staff</li>
                <li>Regular phishing simulation exercises and testing</li>
                <li>Updates on emerging threats and attack methods</li>
                <li>Role-specific security training based on job responsibilities</li>
                <li>Quarterly refresher sessions and knowledge assessments</li>
                <li>Documentation and tracking of training completion</li>
            </ul>

            <h2>Enforcing Strong Access Controls</h2>
            <ul>
                <li>Multi-factor authentication (MFA) for all HR systems</li>
                <li>Role-based access permissions with principle of least privilege</li>
                <li>Regular review and audit of user access rights</li>
                <li>Immediate deactivation of accounts for terminated employees</li>
                <li>Strong password policies with complexity requirements</li>
                <li>Time-based access restrictions for sensitive data</li>
            </ul>

            <h2>Regularly Update Systems and Policies</h2>
            <ul>
                <li>Keep all HR software and systems updated with latest security patches</li>
                <li>Regular vulnerability assessments and security audits</li>
                <li>Update cybersecurity policies to address new threats</li>
                <li>Review and revise incident response procedures</li>
                <li>Maintain current antivirus and anti-malware solutions</li>
                <li>Schedule regular system maintenance and security updates</li>
            </ul>

            <h2>Foster a Culture of Cybersecurity Awareness</h2>
            <ul>
                <li>Promote open communication about security concerns</li>
                <li>Reward employees for reporting suspicious activities</li>
                <li>Create security champions within HR teams</li>
                <li>Regular security reminders and awareness campaigns</li>
                <li>Integration of security practices into daily workflows</li>
                <li>Leadership commitment to cybersecurity initiatives</li>
            </ul>
        </div>

        <!-- NEW: Access Control Implementation Lab -->
        <div class="slide">
            <h1>🔐 Lab: Access Control Implementation</h1>
            
            <div class="interactive-lab">
                <h2>Multi-Factor Authentication (MFA) Setup Guide</h2>
                
                <div class="solution-box">
                    <div class="solution-title">Free MFA Solutions for HR Systems</div>
                    <div class="tool-grid">
                        <div class="tool-card">
                            <h3>Microsoft Authenticator</h3>
                            <ul>
                                <li>Free app for iOS/Android</li>
                                <li>Works with Office 365, Azure AD</li>
                                <li>Push notifications and codes</li>
                                <li>Backup and recovery options</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>Google Authenticator</h3>
                            <ul>
                                <li>Time-based one-time passwords</li>
                                <li>Works offline</li>
                                <li>Wide application support</li>
                                <li>Simple setup process</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>Authy</h3>
                            <ul>
                                <li>Cloud backup capabilities</li>
                                <li>Multi-device synchronization</li>
                                <li>Enhanced security features</li>
                                <li>Easy account recovery</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>FreeOTP+</h3>
                            <ul>
                                <li>Open-source alternative</li>
                                <li>No cloud dependencies</li>
                                <li>Enhanced privacy protection</li>
                                <li>Customizable interface</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="practice-exercise">
                    <div class="practice-title">MFA Implementation Checklist</div>
                    <div class="security-checklist">
                        <div class="checklist-item">
                            <input type="checkbox" class="mfa-checkbox" id="mfa1">
                            <label for="mfa1">Identify all HR systems requiring MFA protection</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="mfa-checkbox" id="mfa2">
                            <label for="mfa2">Choose appropriate MFA method (app, SMS, hardware token)</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="mfa-checkbox" id="mfa3">
                            <label for="mfa3">Configure backup authentication methods</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="mfa-checkbox" id="mfa4">
                            <label for="mfa4">Train users on MFA setup and usage</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="mfa-checkbox" id="mfa5">
                            <label for="mfa5">Test MFA functionality with pilot group</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="mfa-checkbox" id="mfa6">
                            <label for="mfa6">Document MFA procedures and troubleshooting</label>
                        </div>
                    </div>
                    <div id="mfa-progress" class="progress-tracker">
                        <div class="progress-bar">
                            <div class="progress-fill">0% Complete</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hands-on-section">
                <div class="hands-on-title">Role-Based Access Control (RBAC) Template</div>
                <div class="demo-box">
                    <h4>HR System Access Matrix</h4>
                    <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
                        <thead style="background: #3498db; color: white;">
                            <tr>
                                <th style="padding: 10px; border: 1px solid #ddd;">Role</th>
                                <th style="padding: 10px; border: 1px solid #ddd;">Employee Records</th>
                                <th style="padding: 10px; border: 1px solid #ddd;">Payroll</th>
                                <th style="padding: 10px; border: 1px solid #ddd;">Benefits</th>
                                <th style="padding: 10px; border: 1px solid #ddd;">Admin Panel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;"><strong>HR Assistant</strong></td>
                                <td style="padding: 8px; border: 1px solid #ddd;">Read Only</td>
                                <td style="padding: 8px; border: 1px solid #ddd;">No Access</td>
                                <td style="padding: 8px; border: 1px solid #ddd;">Read Only</td>
                                <td style="padding: 8px; border: 1px solid #ddd;">No Access</td>
                            </tr>
                            <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;"><strong>HR Specialist</strong></td>
                                <td style="padding: 8px; border: 1px solid #ddd;">Read/Write</td>
                                <td style="padding: 8px; border: 1px solid #ddd;">Read Only</td>
                                <td style="padding: 8px; border: 1px solid #ddd;">Read/Write</td>
                                <td style="padding: 8px; border: 1px solid #ddd;">No Access</td>
                            </tr>
                            <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;"><strong>HR Manager</strong></td>
                                <td style="padding: 8px; border: 1px solid #ddd;">Full Access</td>
                                <td style="padding: 8px; border: 1px solid #ddd;">Read/Write</td>
                                <td style="padding: 8px; border: 1px solid #ddd;">Full Access</td>
                                <td style="padding: 8px; border: 1px solid #ddd;">Limited Admin</td>
                            </tr>
                            <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;"><strong>HR Director</strong></td>
                                <td style="padding: 8px; border: 1px solid #ddd;">Full Access</td>
                                <td style="padding: 8px; border: 1px solid #ddd;">Full Access</td>
                                <td style="padding: 8px; border: 1px solid #ddd;">Full Access</td>
                                <td style="padding: 8px; border: 1px solid #ddd;">Full Admin</td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top: 10px;"><em>Customize this matrix based on your organization's structure and requirements.</em></p>
                </div>
            </div>
        </div>

        <!-- NEW: Password Security Workshop -->
        <div class="slide">
            <h1>🔑 Workshop: Password Security Excellence</h1>
            
            <div class="interactive-lab">
                <h2>Password Manager Implementation Guide</h2>
                
                <div class="solution-box">
                    <div class="solution-title">Free Enterprise Password Managers</div>
                    <div class="two-column">
                        <div>
                            <h4>Bitwarden (Recommended)</h4>
                            <ul>
                                <li>Free for unlimited personal use</li>
                                <li>$3/user/month for business features</li>
                                <li>Open-source and audited</li>
                                <li>Self-hosting option available</li>
                                <li>Excellent mobile and desktop apps</li>
                                <li>Advanced security features</li>
                            </ul>
                        </div>
                        <div>
                            <h4>KeePass (Open Source)</h4>
                            <ul>
                                <li>Completely free and open-source</li>
                                <li>Local database storage</li>
                                <li>Strong encryption (AES-256)</li>
                                <li>Plugin ecosystem</li>
                                <li>No cloud dependencies</li>
                                <li>Portable version available</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="practice-exercise">
                    <div class="practice-title">Password Policy Creator</div>
                    <div class="demo-box">
                        <h4>Build Your Organization's Password Policy</h4>
                        <p>Select the requirements that fit your organization:</p>
                        
                        <div class="security-checklist">
                            <div class="checklist-item">
                                <input type="checkbox" class="policy-checkbox" id="policy1" checked>
                                <label for="policy1">Minimum 12 characters length</label>
                            </div>
                            <div class="checklist-item">
                                <input type="checkbox" class="policy-checkbox" id="policy2" checked>
                                <label for="policy2">Mix of uppercase and lowercase letters</label>
                            </div>
                            <div class="checklist-item">
                                <input type="checkbox" class="policy-checkbox" id="policy3" checked>
                                <label for="policy3">At least one number and special character</label>
                            </div>
                            <div class="checklist-item">
                                <input type="checkbox" class="policy-checkbox" id="policy4">
                                <label for="policy4">No dictionary words or personal information</label>
                            </div>
                            <div class="checklist-item">
                                <input type="checkbox" class="policy-checkbox" id="policy5">
                                <label for="policy5">Password expiration every 90 days</label>
                            </div>
                            <div class="checklist-item">
                                <input type="checkbox" class="policy-checkbox" id="policy6" checked>
                                <label for="policy6">Account lockout after 5 failed attempts</label>
                            </div>
                            <div class="checklist-item">
                                <input type="checkbox" class="policy-checkbox" id="policy7" checked>
                                <label for="policy7">Mandatory password manager usage</label>
                            </div>
                        </div>
                        
                        <button class="simulation-button" onclick="generatePasswordPolicy()">Generate Policy Document</button>
                        <div id="password-policy-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>

            <div class="hands-on-section">
                <div class="hands-on-title">Password Strength Testing Tool</div>
                <div class="demo-box">
                    <h4>Test Password Strength</h4>
                    <input type="password" id="password-test" placeholder="Enter a password to test its strength" style="width: 70%; padding: 10px; border: 2px solid #ccc; border-radius: 5px; margin-right: 10px;">
                    <button class="simulation-button" onclick="testPasswordStrength()" style="padding: 10px 15px;">Test Strength</button>
                    <div id="strength-result" class="simulation-result"></div>
                </div>
            </div>
        </div>

        <!-- Session 2: Implementing Effective Prevention Measures - Part 2 -->
        <div class="slide">
            <h1>Session 2: Implementing Effective Prevention Measures (Part 2)</h1>
            
            <h2>Secure Data Transfers and Cloud Storage</h2>
            <ul>
                <li>Encrypt all sensitive HR data in transit and at rest</li>
                <li>Use secure file transfer protocols (SFTP, HTTPS)</li>
                <li>Implement data loss prevention (DLP) solutions</li>
                <li>Regular backup procedures with secure storage</li>
                <li>Cloud security configurations and monitoring</li>
                <li>Vendor security assessments for third-party services</li>
            </ul>

            <h2>Implement Employee Monitoring Wisely</h2>
            <ul>
                <li>Balance security monitoring with employee privacy rights</li>
                <li>Clear policies on acceptable use of company systems</li>
                <li>Monitor for unusual access patterns and data downloads</li>
                <li>Alert systems for suspicious user behavior</li>
                <li>Regular audit logs review and analysis</li>
                <li>Compliance with local privacy and employment laws</li>
            </ul>

            <div class="case-study">
                <h3>Case Study 2: Successful Prevention - South African Mining Company</h3>
                <p>A major South African mining company implemented comprehensive cybersecurity measures including MFA, regular training, and employee monitoring. When a targeted phishing attack occurred, their trained HR staff recognized the threat and reported it immediately. The quick response prevented a potential breach that could have exposed 8,000 employee records and saved an estimated $1.5 million in potential damages.</p>
            </div>

            <h2>Conducting Regular Security Checks</h2>
            <ul>
                <li>Monthly security assessments of HR systems</li>
                <li>Penetration testing of HR applications</li>
                <li>Review of access logs and user activities</li>
                <li>Vulnerability scans of network infrastructure</li>
                <li>Compliance audits against industry standards</li>
                <li>Security incident response drills and exercises</li>
            </ul>
        </div>

        <!-- NEW: Data Encryption Lab -->
        <div class="slide">
            <h1>🔐 Lab: Data Encryption Implementation</h1>
            
            <div class="interactive-lab">
                <h2>File Encryption Tools for HR Data</h2>
                
                <div class="solution-box">
                    <div class="solution-title">Free Encryption Solutions</div>
                    <div class="tool-grid">
                        <div class="tool-card">
                            <h3>VeraCrypt</h3>
                            <ul>
                                <li>Open-source disk encryption</li>
                                <li>Strong AES-256 encryption</li>
                                <li>Hidden volume support</li>
                                <li>Cross-platform compatibility</li>
                                <li>Free for all uses</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>7-Zip</h3>
                            <ul>
                                <li>File compression with encryption</li>
                                <li>AES-256 password protection</li>
                                <li>Lightweight and fast</li>
                                <li>Excellent compression ratios</li>
                                <li>Command-line automation</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>GnuPG (GPG)</h3>
                            <ul>
                                <li>Public-key cryptography</li>
                                <li>Digital signatures</li>
                                <li>Email encryption support</li>
                                <li>Open-source standard</li>
                                <li>Enterprise-grade security</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>BitLocker (Windows)</h3>
                            <ul>
                                <li>Built into Windows Pro/Enterprise</li>
                                <li>Full disk encryption</li>
                                <li>TPM chip integration</li>
                                <li>Group Policy management</li>
                                <li>Recovery key backup</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="practice-exercise">
                    <div class="practice-title">Encryption Implementation Plan</div>
                    <p><strong>Exercise:</strong> Create an encryption strategy for your HR department</p>
                    
                    <div class="demo-box">
                        <h4>Data Classification and Encryption Requirements</h4>
                        <table style="width: 100%; border-collapse: collapse;">
                            <thead style="background: #e74c3c; color: white;">
                                <tr>
                                    <th style="padding: 10px; border: 1px solid #ddd;">Data Type</th>
                                    <th style="padding: 10px; border: 1px solid #ddd;">Sensitivity Level</th>
                                    <th style="padding: 10px; border: 1px solid #ddd;">Encryption Required</th>
                                    <th style="padding: 10px; border: 1px solid #ddd;">Recommended Tool</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Employee Personal Data</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">High</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">✅ Yes</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">VeraCrypt + Database encryption</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Payroll Information</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Critical</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">✅ Yes</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">BitLocker + Application encryption</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Performance Reviews</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Medium</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">✅ Yes</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">7-Zip encryption</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Training Records</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Low</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">⚠️ Recommended</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Standard file encryption</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <button class="simulation-button" onclick="generateEncryptionPlan()">Generate Implementation Plan</button>
                    <div id="encryption-plan-result" class="simulation-result"></div>
                </div>
            </div>

            <div class="hands-on-section">
                <div class="hands-on-title">Email Encryption Setup</div>
                <div class="solution-box">
                    <div class="solution-title">Secure Email Solutions</div>
                    <div class="step-by-step">
                        <strong>ProtonMail (Recommended for sensitive HR communication):</strong><br>
                        • End-to-end encryption by default<br>
                        • Zero-knowledge architecture<br>
                        • Free tier available<br>
                        • Business plans starting at $6.25/user/month<br>
                        • GDPR compliant<br><br>
                        
                        <strong>Tutanota:</strong><br>
                        • Open-source email encryption<br>
                        • Quantum-resistant encryption<br>
                        • Free accounts available<br>
                        • Business features from €1/user/month<br><br>
                        
                        <strong>Microsoft 365 Information Protection:</strong><br>
                        • Built-in sensitivity labels<br>
                        • Rights management protection<br>
                        • Azure Information Protection<br>
                        • Integration with existing Office workflows
                    </div>
                </div>
            </div>
        </div>

        <!-- NEW: Monitoring and Audit Lab -->
        <div class="slide">
            <h1>👁️ Lab: Security Monitoring Setup</h1>
            
            <div class="interactive-lab">
                <h2>Open Source SIEM Solutions for HR</h2>
                
                <div class="solution-box">
                    <div class="solution-title">Free Security Monitoring Tools</div>
                    <div class="tool-grid">
                        <div class="tool-card">
                            <h3>Wazuh</h3>
                            <ul>
                                <li>Open-source SIEM platform</li>
                                <li>Log analysis and intrusion detection</li>
                                <li>Compliance reporting (PCI DSS, GDPR)</li>
                                <li>Real-time monitoring</li>
                                <li>Free community edition</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>OSSEC</h3>
                            <ul>
                                <li>Host-based intrusion detection</li>
                                <li>Log monitoring and analysis</li>
                                <li>File integrity monitoring</li>
                                <li>Rootkit detection</li>
                                <li>Real-time alerting</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>Graylog</h3>
                            <ul>
                                <li>Centralized log management</li>
                                <li>Real-time search and analysis</li>
                                <li>Dashboard and alerting</li>
                                <li>Free Open version</li>
                                <li>Easy deployment</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>Elastic Stack (ELK)</h3>
                            <ul>
                                <li>Elasticsearch, Logstash, Kibana</li>
                                <li>Powerful log analysis</li>
                                <li>Visualization capabilities</li>
                                <li>Machine learning features</li>
                                <li>Free basic license</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="practice-exercise">
                    <div class="practice-title">HR Security Monitoring Checklist</div>
                    <div class="security-checklist">
                        <div class="checklist-item">
                            <input type="checkbox" class="monitor-checkbox" id="monitor1">
                            <label for="monitor1">Monitor failed login attempts to HR systems</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="monitor-checkbox" id="monitor2">
                            <label for="monitor2">Track access to sensitive employee data</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="monitor-checkbox" id="monitor3">
                            <label for="monitor3">Monitor file downloads and exports</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="monitor-checkbox" id="monitor4">
                            <label for="monitor4">Alert on after-hours system access</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="monitor-checkbox" id="monitor5">
                            <label for="monitor5">Monitor email attachment scanning results</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="monitor-checkbox" id="monitor6">
                            <label for="monitor6">Track privileged account usage</label>
                        </div>
                    </div>
                    <button class="simulation-button" onclick="generateMonitoringPlan()">Create Monitoring Plan</button>
                    <div id="monitoring-plan-result" class="simulation-result"></div>
                </div>
            </div>

            <div class="hands-on-section">
                <div class="hands-on-title">Audit Log Analysis Exercise</div>
                <div class="demo-box">
                    <h4>Sample HR System Log Analysis</h4>
                    <div style="background: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 8px; font-family: monospace; font-size: 12px; overflow-x: auto;">
2024-11-27 09:15:22 INFO: User jdoe logged into HRIS from IP 192.168.1.100<br>
2024-11-27 09:16:45 WARN: User jdoe accessed payroll module<br>
2024-11-27 09:17:12 INFO: User jdoe viewed employee record #12345<br>
2024-11-27 14:22:33 ERROR: Failed login attempt for user admin from IP 203.0.113.15<br>
2024-11-27 14:22:55 ERROR: Failed login attempt for user admin from IP 203.0.113.15<br>
2024-11-27 14:23:17 ERROR: Failed login attempt for user admin from IP 203.0.113.15<br>
2024-11-27 18:45:12 WARN: User msmith downloaded 500+ employee records<br>
2024-11-27 19:30:00 INFO: User msmith logged out<br>
                    </div>
                    <button class="simulation-button" onclick="analyzeLogSample()">Analyze Logs for Security Issues</button>
                    <div id="log-analysis-result" class="simulation-result"></div>
                </div>
            </div>
        </div>

        <!-- Session 3: Balancing Security with Organizational Performance - Part 1 -->
        <div class="slide">
            <h1>Session 3: Balancing Security with Organizational Performance (Part 1)</h1>
            
            <h2>Automate Security Checks</h2>
            <ul>
                <li>Implement automated vulnerability scanning tools</li>
                <li>Use security information and event management (SIEM) systems</li>
                <li>Automated patch management for HR systems</li>
                <li>Real-time threat detection and response systems</li>
                <li>Automated compliance reporting and monitoring</li>
                <li>Integration with HR workflows to minimize disruption</li>
            </ul>

            <h2>Use Secure HR Platforms</h2>
            <ul>
                <li>Select HR platforms with built-in security features</li>
                <li>Cloud-based solutions with enterprise-grade security</li>
                <li>Regular security certifications (ISO 27001, SOC 2)</li>
                <li>Data encryption capabilities and secure APIs</li>
                <li>Comprehensive audit trails and logging</li>
                <li>Disaster recovery and business continuity features</li>
            </ul>

            <h2>Encourage Open Communication</h2>
            <ul>
                <li>Create safe channels for reporting security concerns</li>
                <li>Regular security awareness communications</li>
                <li>Feedback mechanisms for security policy improvements</li>
                <li>Transparent incident response and lessons learned</li>
                <li>Employee involvement in security planning and reviews</li>
                <li>Recognition programs for security-conscious behavior</li>
            </ul>

            <div class="case-study">
                <h3>Case Study 1: The Cost of Ignoring HR Cybersecurity</h3>
                <p>A Nigerian telecommunications company ignored cybersecurity warnings and failed to implement proper HR data protection. A sophisticated cyber attack resulted in the theft of employee personal data, including national ID numbers and bank details. The company faced regulatory fines of $500,000, legal settlements totaling $1.2 million, and severe reputation damage that led to a 15% customer loss over six months.</p>
            </div>
        </div>

        <!-- NEW: Security Automation Workshop -->
        <div class="slide">
            <h1>🤖 Workshop: Security Automation</h1>
            
            <div class="interactive-lab">
                <h2>Free Security Automation Tools</h2>
                
                <div class="solution-box">
                    <div class="solution-title">Open Source Automation Solutions</div>
                    <div class="tool-grid">
                        <div class="tool-card">
                            <h3>OpenVAS</h3>
                            <ul>
                                <li>Free vulnerability scanner</li>
                                <li>Automated security testing</li>
                                <li>Comprehensive reporting</li>
                                <li>Regular vulnerability feeds</li>
                                <li>Web-based management</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>Nessus Essentials</h3>
                            <ul>
                                <li>Free for up to 16 IPs</li>
                                <li>Professional vulnerability assessment</li>
                                <li>Automated scanning schedules</li>
                                <li>Detailed remediation guidance</li>
                                <li>Compliance checking</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>Ansible</h3>
                            <ul>
                                <li>IT automation and configuration</li>
                                <li>Security baseline enforcement</li>
                                <li>Automated patch management</li>
                                <li>Infrastructure as code</li>
                                <li>Simple YAML playbooks</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>YARA</h3>
                            <ul>
                                <li>Malware identification tool</li>
                                <li>Pattern matching rules</li>
                                <li>Automated threat hunting</li>
                                <li>Integration with security tools</li>
                                <li>Community rule sharing</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="practice-exercise">
                    <div class="practice-title">Automation Implementation Plan</div>
                    <div class="demo-box">
                        <h4>Security Task Automation Matrix</h4>
                        <p>Identify which security tasks in your HR department can be automated:</p>
                        
                        <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
                            <thead style="background: #9b59b6; color: white;">
                                <tr>
                                    <th style="padding: 10px; border: 1px solid #ddd;">Security Task</th>
                                    <th style="padding: 10px; border: 1px solid #ddd;">Current Method</th>
                                    <th style="padding: 10px; border: 1px solid #ddd;">Automation Potential</th>
                                    <th style="padding: 10px; border: 1px solid #ddd;">Recommended Tool</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Vulnerability Scanning</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Manual/Quarterly</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">🟢 High</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">OpenVAS/Nessus</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; border: 1px solid #ddd;">User Access Reviews</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Manual/Monthly</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">🟡 Medium</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">PowerShell Scripts</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Patch Management</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Manual/Ad-hoc</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">🟢 High</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">WSUS/Ansible</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Security Training Reminders</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Manual emails</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">🟢 High</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Calendar automation</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <button class="simulation-button" onclick="generateAutomationRoadmap()">Create Automation Roadmap</button>
                        <div id="automation-roadmap-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>
            
            <div class="hands-on-section">
                <div class="hands-on-title">Sample Automation Scripts</div>
                <div class="solution-box">
                    <div class="solution-title">Ready-to-Use PowerShell Scripts</div>
                    <div class="demo-box">
                        <h4>User Account Audit Script</h4>
                        <div style="background: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 8px; font-family: monospace; font-size: 12px; overflow-x: auto;">
# HR User Account Audit Script<br>
Get-ADUser -Filter * -Properties LastLogonDate, PasswordLastSet | <br>
Where-Object {$_.LastLogonDate -lt (Get-Date).AddDays(-30)} | <br>
Select-Object Name, SamAccountName, LastLogonDate, PasswordLastSet | <br>
Export-Csv "InactiveUsers.csv" -NoTypeInformation<br><br>

# Alert for users with old passwords<br>
Get-ADUser -Filter * -Properties PasswordLastSet | <br>
Where-Object {$_.PasswordLastSet -lt (Get-Date).AddDays(-90)} | <br>
Format-Table Name, PasswordLastSet
                        </div>
                        <p style="margin-top: 10px;"><em>This script identifies inactive users and accounts with old passwords for security review.</em></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Session 3: Balancing Security with Organizational Performance - Part 2 -->
        <div class="slide">
            <h1>Session 3: Balancing Security with Organizational Performance (Part 2)</h1>
            
            <div class="case-study">
                <h3>Case Study 2: Cybersecurity Tools for HR & HRD</h3>
                <p>A progressive HR department in Kenya implemented a comprehensive cybersecurity toolkit including automated monitoring, secure communication platforms, and employee training programs. The investment of $50,000 in cybersecurity tools prevented three major attack attempts and saved an estimated $2.5 million in potential damages and business disruption.</p>
                
                <h4>IT Alerting Systems Implemented:</h4>
                <ul>
                    <li>Real-time security incident notifications</li>
                    <li>Automated threat detection and response</li>
                    <li>Integration with HR management systems</li>
                    <li>Mobile alerts for security team members</li>
                    <li>Escalation procedures for critical incidents</li>
                </ul>
            </div>

            <h2>Essential Cybersecurity Tools for HR</h2>
            <div class="tool-grid">
                <div class="tool-card">
                    <h3>Identity Management</h3>
                    <ul>
                        <li>Multi-factor Authentication</li>
                        <li>Single Sign-On (SSO)</li>
                        <li>Identity Governance</li>
                    </ul>
                </div>
                <div class="tool-card">
                    <h3>Data Protection</h3>
                    <ul>
                        <li>Encryption Tools</li>
                        <li>Data Loss Prevention</li>
                        <li>Backup Solutions</li>
                    </ul>
                </div>
                <div class="tool-card">
                    <h3>Threat Detection</h3>
                    <ul>
                        <li>SIEM Systems</li>
                        <li>Endpoint Protection</li>
                        <li>Network Monitoring</li>
                    </ul>
                </div>
                <div class="tool-card">
                    <h3>Training Platforms</h3>
                    <ul>
                        <li>Phishing Simulators</li>
                        <li>Security Awareness</li>
                        <li>Compliance Training</li>
                    </ul>
                </div>
            </div>

            <div class="case-study">
                <h3>Case Study 3: Cyber Security Test for Employees</h3>
                <p>A Ghanaian manufacturing company conducted quarterly cybersecurity assessments for their HR team. The tests revealed that 40% of staff were vulnerable to phishing attacks initially. After implementing targeted training programs, this dropped to 5% within six months, significantly improving their security posture and employee awareness.</p>
            </div>
        </div>

        <!-- NEW: HR Security Tools Comparison Lab -->
        <div class="slide">
            <h1>🔧 Lab: HR Security Tools Selection</h1>
            
            <div class="interactive-lab">
                <h2>Comprehensive Security Tools Comparison</h2>
                
                <div class="practice-exercise">
                    <div class="practice-title">Security Tools Assessment Matrix</div>
                    <div class="demo-box">
                        <h4>Evaluate Tools Based on Your Organization's Needs</h4>
                        
                        <div style="margin-bottom: 20px;">
                            <h5>Organization Profile:</h5>
                            <label>Company Size: </label>
                            <select id="company-size" style="padding: 5px; margin: 5px;">
                                <option value="small">Small (1-50 employees)</option>
                                <option value="medium">Medium (51-500 employees)</option>
                                <option value="large">Large (500+ employees)</option>
                            </select>
                            <br>
                            <label>Budget Level: </label>
                            <select id="budget-level" style="padding: 5px; margin: 5px;">
                                <option value="low">Low ($1K-$10K/year)</option>
                                <option value="medium">Medium ($10K-$50K/year)</option>
                                <option value="high">High ($50K+/year)</option>
                            </select>
                            <br>
                            <label>Technical Expertise: </label>
                            <select id="tech-expertise" style="padding: 5px; margin: 5px;">
                                <option value="basic">Basic</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                            </select>
                        </div>
                        
                        <button class="simulation-button" onclick="generateToolRecommendations()">Get Personalized Tool Recommendations</button>
                        <div id="tool-recommendations-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>

            <div class="solution-box">
                <div class="solution-title">Free vs. Paid Security Solutions Comparison</div>
                <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
                    <thead style="background: #34495e; color: white;">
                        <tr>
                            <th style="padding: 10px; border: 1px solid #ddd;">Category</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Free Solution</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Paid Solution</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Best for HR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 8px; border: 1px solid #ddd;"><strong>Antivirus</strong></td>
                            <td style="padding: 8px; border: 1px solid #ddd;">Windows Defender</td>
                            <td style="padding: 8px; border: 1px solid #ddd;">Bitdefender GravityZone</td>
                            <td style="padding: 8px; border: 1px solid #ddd;">Windows Defender for small orgs</td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; border: 1px solid #ddd;"><strong>Email Security</strong></td>
                            <td style="padding: 8px; border: 1px solid #ddd;">ProtonMail (free tier)</td>
                            <td style="padding: 8px; border: 1px solid #ddd;">Microsoft 365 ATP</td>
                            <td style="padding: 8px; border: 1px solid #ddd;">Microsoft 365 for integration</td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; border: 1px solid #ddd;"><strong>Password Manager</strong></td>
                            <td style="padding: 8px; border: 1px solid #ddd;">Bitwarden</td>
                            <td style="padding: 8px; border: 1px solid #ddd;">1Password Business</td>
                            <td style="padding: 8px; border: 1px solid #ddd;">Bitwarden for most organizations</td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; border: 1px solid #ddd;"><strong>Backup</strong></td>
                            <td style="padding: 8px; border: 1px solid #ddd;">Windows Backup</td>
                            <td style="padding: 8px; border: 1px solid #ddd;">Veeam Backup</td>
                            <td style="padding: 8px; border: 1px solid #ddd;">Paid solution for critical data</td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; border: 1px solid #ddd;"><strong>Training</strong></td>
                            <td style="padding: 8px; border: 1px solid #ddd;">SANS free resources</td>
                            <td style="padding: 8px; border: 1px solid #ddd;">KnowBe4</td>
                            <td style="padding: 8px; border: 1px solid #ddd;">Depends on training needs</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="hands-on-section">
                <div class="hands-on-title">ROI Calculator for Security Investments</div>
                <div class="demo-box">
                    <h4>Calculate Security Investment Returns</h4>
                    <div style="margin-bottom: 15px;">
                        <label>Annual Security Tool Cost: $</label>
                        <input type="number" id="security-cost" placeholder="5000" style="padding: 5px; margin: 5px; border: 1px solid #ccc; border-radius: 3px;">
                        <br>
                        <label>Estimated Breach Cost Prevention: $</label>
                        <input type="number" id="breach-cost" placeholder="500000" style="padding: 5px; margin: 5px; border: 1px solid #ccc; border-radius: 3px;">
                        <br>
                        <label>Probability of Breach Without Tools (%): </label>
                        <input type="number" id="breach-probability" placeholder="25" style="padding: 5px; margin: 5px; border: 1px solid #ccc; border-radius: 3px;">
                    </div>
                    <button class="simulation-button" onclick="calculateSecurityROI()">Calculate ROI</button>
                    <div id="security-roi-result" class="simulation-result"></div>
                </div>
            </div>
        </div>

        <!-- Implementation Best Practices -->
        <div class="slide">
            <h1>Implementation Best Practices and Action Plan</h1>
            
            <h2>Step-by-Step Implementation Guide</h2>
            <ul>
                <li><strong>Phase 1 (Month 1):</strong> Security assessment and gap analysis</li>
                <li><strong>Phase 2 (Month 2):</strong> Policy development and tool selection</li>
                <li><strong>Phase 3 (Month 3):</strong> Employee training and awareness programs</li>
                <li><strong>Phase 4 (Month 4):</strong> Technology implementation and testing</li>
                <li><strong>Phase 5 (Month 5-6):</strong> Monitoring, evaluation, and optimization</li>
            </ul>

            <h2>Key Performance Indicators (KPIs) for HR Cybersecurity</h2>
            <ul>
                <li>Reduction in successful phishing attempts</li>
                <li>Time to detect and respond to security incidents</li>
                <li>Employee cybersecurity training completion rates</li>
                <li>Number of reported security concerns by staff</li>
                <li>Compliance audit scores and findings</li>
                <li>Cost savings from prevented security incidents</li>
            </ul>

            <h2>Building a Cybersecurity Culture in HR</h2>
            <ul>
                <li>Leadership commitment and visible support</li>
                <li>Regular communication about cybersecurity importance</li>
                <li>Integration of security practices into HR processes</li>
                <li>Continuous learning and adaptation to new threats</li>
                <li>Collaboration with IT and security teams</li>
                <li>Recognition and rewards for security-conscious behavior</li>
            </ul>

            <div class="highlight">
                <h3>African Context Considerations</h3>
                <ul>
                    <li>Limited cybersecurity expertise and resources</li>
                    <li>Varying levels of technology infrastructure</li>
                    <li>Regulatory compliance with local data protection laws</li>
                    <li>Cultural considerations in security awareness training</li>
                    <li>Budget constraints and cost-effective solutions</li>
                    <li>Regional collaboration and threat intelligence sharing</li>
                </ul>
            </div>
        </div>

        <!-- NEW: Implementation Planning Workshop -->
        <div class="slide">
            <h1>📋 Workshop: Implementation Planning</h1>
            
            <div class="interactive-lab">
                <h2>90-Day Security Implementation Plan Generator</h2>
                
                <div class="practice-exercise">
                    <div class="practice-title">Customize Your Implementation Timeline</div>
                    <div class="demo-box">
                        <h4>Organization Assessment</h4>
                        <div style="margin-bottom: 15px;">
                            <label>Current Security Maturity: </label>
                            <select id="security-maturity" style="padding: 5px; margin: 5px;">
                                <option value="basic">Basic - Limited security measures</option>
                                <option value="developing">Developing - Some measures in place</option>
                                <option value="managed">Managed - Structured approach</option>
                                <option value="optimized">Optimized - Advanced security posture</option>
                            </select>
                            <br>
                            <label>Priority Risk Areas (select multiple): </label><br>
                            <input type="checkbox" id="risk-phishing" style="margin: 5px;"> <label for="risk-phishing">Phishing attacks</label><br>
                            <input type="checkbox" id="risk-access" style="margin: 5px;"> <label for="risk-access">Access control weaknesses</label><br>
                            <input type="checkbox" id="risk-data" style="margin: 5px;"> <label for="risk-data">Data encryption gaps</label><br>
                            <input type="checkbox" id="risk-training" style="margin: 5px;"> <label for="risk-training">Employee awareness</label><br>
                            <input type="checkbox" id="risk-monitoring" style="margin: 5px;"> <label for="risk-monitoring">Security monitoring</label><br>
                            <input type="checkbox" id="risk-policies" style="margin: 5px;"> <label for="risk-policies">Policy development</label>
                        </div>
                        <button class="simulation-button" onclick="generateImplementationPlan()">Generate Customized Plan</button>
                        <div id="implementation-plan-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>

            <div class="solution-box">
                <div class="solution-title">Ready-to-Use Templates and Checklists</div>
                <div class="resource-link">
                    <strong>HR Security Policy Template:</strong> 
                    Comprehensive policy framework covering all HR cybersecurity aspects
                </div>
                <div class="resource-link">
                    <strong>Incident Response Playbook:</strong> 
                    Step-by-step procedures for handling HR security incidents
                </div>
                <div class="resource-link">
                    <strong>Employee Security Training Checklist:</strong> 
                    Training modules and assessment criteria for HR staff
                </div>
                <div class="resource-link">
                    <strong>Vendor Security Assessment Framework:</strong> 
                    Evaluation criteria for third-party HR service providers
                </div>
            </div>

            <div class="hands-on-section">
                <div class="hands-on-title">Security Budget Planning Tool</div>
                <div class="demo-box">
                    <h4>Calculate Your Security Investment</h4>
                    <div style="margin-bottom: 15px;">
                        <label>Number of HR Staff: </label>
                        <input type="number" id="hr-staff-count" placeholder="10" style="padding: 5px; margin: 5px; border: 1px solid #ccc; border-radius: 3px;">
                        <br>
                        <label>HR System Users: </label>
                        <input type="number" id="system-users" placeholder="100" style="padding: 5px; margin: 5px; border: 1px solid #ccc; border-radius: 3px;">
                        <br>
                        <label>Security Priority Level: </label>
                        <select id="priority-level" style="padding: 5px; margin: 5px;">
                            <option value="standard">Standard Security</option>
                            <option value="enhanced">Enhanced Security</option>
                            <option value="premium">Premium Security</option>
                        </select>
                    </div>
                    <button class="simulation-button" onclick="calculateSecurityBudget()">Calculate Recommended Budget</button>
                    <div id="budget-calculation-result" class="simulation-result"></div>
                </div>
            </div>
        </div>

        <!-- Interactive Lab Session -->
        <div class="slide">
            <h1>🔬 Advanced Hands-On Cybersecurity Lab</h1>
            
            <div class="interactive-lab">
                <h2>Phishing Email Detection Simulation</h2>
                <div class="scenario-box">
                    <h3>Scenario: Suspicious Email Analysis</h3>
                    <p>You receive the following email. Analyze it for potential phishing indicators:</p>
                    <div style="background: #f8f9fa; border: 1px solid #ccc; padding: 15px; margin: 10px 0; font-family: monospace;">
                        <strong>From:</strong> security@yourcompany-urgent.com<br>
                        <strong>Subject:</strong> URGENT: Verify Your Account Now!<br>
                        <strong>Body:</strong> Dear Employee, Your account will be suspended in 2 hours unless you verify your credentials immediately. Click here to verify: http://bit.ly/verify-account-now
                    </div>
                </div>
                
                <div class="practice-exercise">
                    <div class="practice-title">Identify Phishing Indicators</div>
                    <div class="security-checklist">
                        <div class="checklist-item">
                            <input type="checkbox" class="checklist-checkbox" id="check1">
                            <label for="check1">Suspicious sender domain (yourcompany-urgent.com)</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="checklist-checkbox" id="check2">
                            <label for="check2">Urgency language ("URGENT", "2 hours")</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="checklist-checkbox" id="check3">
                            <label for="check3">Generic greeting ("Dear Employee")</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="checklist-checkbox" id="check4">
                            <label for="check4">Suspicious shortened URL (bit.ly link)</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="checklist-checkbox" id="check5">
                            <label for="check5">Threat of account suspension</label>
                        </div>
                    </div>
                    
                    <div class="progress-tracker">
                        <div class="progress-bar">
                            <div class="progress-fill" id="phishing-progress">0% Complete</div>
                        </div>
                        <p>Complete all checks to see your analysis results</p>
                    </div>
                </div>
                
                <button class="simulation-button" onclick="runPhishingSimulation()">Run Phishing Detection Analysis</button>
                <div id="phishing-result" class="simulation-result"></div>
            </div>

            <div class="interactive-lab">
                <h2>Password Security Audit</h2>
                <div class="practice-exercise">
                    <div class="practice-title">Audit Common Passwords</div>
                    <p>Test the strength of commonly used passwords in your organization:</p>
                    <button class="simulation-button" onclick="runPasswordAudit()">Run Password Strength Analysis</button>
                    <div id="password-result" class="simulation-result"></div>
                </div>
            </div>

            <div class="interactive-lab">
                <h2>Data Breach Response Simulation</h2>
                <div class="scenario-box">
                    <h3>Emergency Scenario: Potential Data Breach</h3>
                    <p>An HR staff member reports that they may have accidentally sent an email containing salary information to an external recipient. Demonstrate your incident response procedure.</p>
                </div>
                <button class="simulation-button" onclick="runBreachResponseSimulation()">Launch Breach Response Drill</button>
                <div id="breach-response-result" class="simulation-result"></div>
            </div>
        </div>

        <!-- Advanced Security Assessment -->
        <div class="slide">
            <h1>🛡️ Advanced Security Assessment</h1>
            
            <div class="interactive-lab">
                <h2>Access Control Review Simulation</h2>
                <div class="scenario-box">
                    <h3>Scenario: Employee Access Audit</h3>
                    <p>Your organization needs to conduct a quarterly access review. Analyze employee access permissions for security violations.</p>
                </div>
                
                <button class="simulation-button" onclick="runAccessReview()">Analyze Employee Access Rights</button>
                <div id="access-result" class="simulation-result"></div>
            </div>

            <div class="interactive-lab">
                <h2>Incident Response Drill</h2>
                <div class="scenario-box">
                    <h3>Scenario: Security Incident Response</h3>
                    <p>Practice responding to a cybersecurity incident affecting HR systems.</p>
                </div>
                
                <button class="simulation-button" onclick="runIncidentResponse()">Launch Incident Response Simulation</button>
                <div id="incident-result" class="simulation-result"></div>
            </div>

            <div class="interactive-lab">
                <h2>Compliance Assessment Tool</h2>
                <div class="practice-exercise">
                    <div class="practice-title">GDPR/Data Protection Compliance Check</div>
                    <div class="security-checklist">
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="gdpr1">
                            <label for="gdpr1">Data processing legal basis documented</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="gdpr2">
                            <label for="gdpr2">Employee consent obtained for data processing</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="gdpr3">
                            <label for="gdpr3">Data retention policies defined and implemented</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="gdpr4">
                            <label for="gdpr4">Employee rights to data access/correction established</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="gdpr5">
                            <label for="gdpr5">Data breach notification procedures in place</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="gdpr6">
                            <label for="gdpr6">Data Protection Impact Assessments conducted</label>
                        </div>
                    </div>
                    <button class="simulation-button" onclick="assessCompliance()">Assess Compliance Score</button>
                    <div id="compliance-result" class="simulation-result"></div>
                </div>
            </div>

            <div class="solution-box">
                <div class="solution-title">Real-World Application</div>
                <p>Use these simulation results to:</p>
                <ul>
                    <li>Develop incident response procedures for your organization</li>
                    <li>Create access control policies and review processes</li>
                    <li>Train staff on recognizing and reporting security threats</li>
                    <li>Establish metrics for measuring security awareness effectiveness</li>
                    <li>Ensure compliance with data protection regulations</li>
                    <li>Build a comprehensive cybersecurity program for HR</li>
                </ul>
            </div>
        </div>

        <!-- Assessment Quiz -->
        <div class="slide">
            <h1>Assessment: Test Your Cybersecurity in HR Knowledge</h1>
            
            <div class="quiz-container">
                <div class="question" id="q1">
                    <h4>1. What percentage of data breaches involve a human element?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">45%</li>
                        <li data-answer="wrong">52%</li>
                        <li data-answer="correct">68%</li>
                        <li data-answer="wrong">75%</li>
                    </ul>
                </div>

                <div class="question" id="q2">
                    <h4>2. Which of the following is a key HR cybersecurity practice?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Using the same password for all systems</li>
                        <li data-answer="correct">Regularly changing passwords and using multi-factor authentication</li>
                        <li data-answer="wrong">Sharing login credentials among team members</li>
                        <li data-answer="wrong">Keeping systems unchanged to maintain stability</li>
                    </ul>
                </div>

                <div class="question" id="q3">
                    <h4>3. What should HR professionals monitor to ensure data security?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Only external access attempts</li>
                        <li data-answer="correct">Access points to data to know who accessed data, when, and for what purpose</li>
                        <li data-answer="wrong">Only failed login attempts</li>
                        <li data-answer="wrong">Only weekend activities</li>
                    </ul>
                </div>

                <div class="question" id="q4">
                    <h4>4. Which type of training is essential for HR teams?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">Cyber security training course for every HR team member</li>
                        <li data-answer="wrong">Only technical training for IT staff</li>
                        <li data-answer="wrong">Training only for senior management</li>
                        <li data-answer="wrong">Optional security awareness sessions</li>
                    </ul>
                </div>

                <div class="question" id="q5">
                    <h4>5. What is a key principle when implementing security measures?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Prioritize security over employee convenience</li>
                        <li data-answer="correct">Ensure processes don't injure or inconvenience employees unnecessarily</li>
                        <li data-answer="wrong">Implement all security measures immediately</li>
                        <li data-answer="wrong">Focus only on external threats</li>
                    </ul>
                </div>

                <div class="question" id="q6">
                    <h4>6. Which access control practice is most effective?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Giving all employees full system access</li>
                        <li data-answer="wrong">Using only password protection</li>
                        <li data-answer="correct">Multi-factor authentication with role-based access permissions</li>
                        <li data-answer="wrong">Sharing administrative passwords</li>
                    </ul>
                </div>

                <div class="question" id="q7">
                    <h4>7. How often should security training be conducted?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Once per year only</li>
                        <li data-answer="wrong">Only when incidents occur</li>
                        <li data-answer="correct">Regularly with quarterly refresher sessions</li>
                        <li data-answer="wrong">Only for new employees</li>
                    </ul>
                </div>

                <div class="question" id="q8">
                    <h4>8. What should be done with terminated employee accounts?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Keep them active for one month</li>
                        <li data-answer="correct">Immediate deactivation of accounts</li>
                        <li data-answer="wrong">Deactivate only after exit interview</li>
                        <li data-answer="wrong">Change passwords and keep accounts active</li>
                    </ul>
                </div>

                <div class="question" id="q9">
                    <h4>9. What is essential for data transfers in HR?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Speed is the only priority</li>
                        <li data-answer="correct">Encrypt all sensitive HR data in transit and at rest</li>
                        <li data-answer="wrong">Use any available transfer method</li>
                        <li data-answer="wrong">Email attachments are sufficient</li>
                    </ul>
                </div>

                <div class="question" id="q10">
                    <h4>10. How should security checks be conducted?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Only when problems arise</li>
                        <li data-answer="wrong">Annually during audits</li>
                        <li data-answer="correct">Regular monthly security assessments and ongoing monitoring</li>
                        <li data-answer="wrong">Only by external consultants</li>
                    </ul>
                </div>

                <div class="question" id="q11">
                    <h4>11. What is a benefit of automation in HR security?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Eliminates the need for human oversight</li>
                        <li data-answer="correct">Automated vulnerability scanning and real-time threat detection</li>
                        <li data-answer="wrong">Reduces security effectiveness</li>
                        <li data-answer="wrong">Makes systems more vulnerable</li>
                    </ul>
                </div>

                <div class="question" id="q12">
                    <h4>12. What should HR departments encourage for better security?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Keeping security concerns private</li>
                        <li data-answer="correct">Open communication about security concerns and reporting</li>
                        <li data-answer="wrong">Only discussing security with management</li>
                        <li data-answer="wrong">Avoiding security discussions to prevent panic</li>
                    </ul>
                </div>

                <div class="question" id="q13">
                    <h4>13. Which tool is essential for modern HR cybersecurity?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Only firewalls</li>
                        <li data-answer="correct">Security Information and Event Management (SIEM) systems</li>
                        <li data-answer="wrong">Only antivirus software</li>
                        <li data-answer="wrong">Manual monitoring only</li>
                    </ul>
                </div>

                <div class="question" id="q14">
                    <h4>14. What is crucial when selecting HR platforms?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Lowest cost is the priority</li>
                        <li data-answer="wrong">Most features available</li>
                        <li data-answer="correct">Built-in security features and enterprise-grade security</li>
                        <li data-answer="wrong">Easiest user interface</li>
                    </ul>
                </div>

                <div class="question" id="q15">
                    <h4>15. How should employees be monitored for security?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Monitor everything without restrictions</li>
                        <li data-answer="correct">Balance security monitoring with employee privacy rights</li>
                        <li data-answer="wrong">No monitoring to respect privacy</li>
                        <li data-answer="wrong">Only monitor senior management</li>
                    </ul>
                </div>

                <div class="question" id="q16">
                    <h4>16. What characterizes a strong cybersecurity culture?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Fear-based compliance</li>
                        <li data-answer="wrong">IT department responsibility only</li>
                        <li data-answer="correct">Leadership commitment and employee involvement</li>
                        <li data-answer="wrong">Focus only on technology solutions</li>
                    </ul>
                </div>

                <div class="question" id="q17">
                    <h4>17. Which is a key African context consideration?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">All organizations have unlimited budgets</li>
                        <li data-answer="correct">Limited cybersecurity expertise and budget constraints</li>
                        <li data-answer="wrong">Technology infrastructure is uniform</li>
                        <li data-answer="wrong">No regulatory compliance requirements</li>
                    </ul>
                </div>

                <div class="question" id="q18">
                    <h4>18. What should be included in incident response procedures?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Only technical recovery steps</li>
                        <li data-answer="wrong">Only external communication</li>
                        <li data-answer="correct">Regular drills and exercises with escalation procedures</li>
                        <li data-answer="wrong">Only management involvement</li>
                    </ul>
                </div>

                <div class="question" id="q19">
                    <h4>19. How should HR handle vendor security assessments?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Trust vendors without verification</li>
                        <li data-answer="correct">Conduct security assessments for all third-party services</li>
                        <li data-answer="wrong">Only assess large vendors</li>
                        <li data-answer="wrong">Rely on vendor self-reporting only</li>
                    </ul>
                </div>

                <div class="question" id="q20">
                    <h4>20. What is the goal of balancing security with productivity?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Prioritize productivity over security</li>
                        <li data-answer="wrong">Implement security regardless of impact</li>
                        <li data-answer="correct">Safeguard data while ensuring smooth workflow operations</li>
                        <li data-answer="wrong">Choose either security or productivity</li>
                    </ul>
                </div>

                <button class="submit-btn" onclick="submitQuiz()">Submit Assessment</button>
                <div id="quiz-result" class="quiz-result" style="display: none;"></div>
                <div id="corrections" class="correction-section" style="display: none;">
                    <h3>Answer Corrections & Explanations</h3>
                    <div id="correction-content"></div>
                </div>
            </div>
        </div>

        <!-- Final Resources and Action Plan -->
        <div class="slide">
            <h1>Resources & Action Plan for HR Cybersecurity</h1>
            
            <div class="hands-on-section">
                <div class="hands-on-title">Cybersecurity Resources for HR Professionals</div>
                
                <div class="solution-box">
                    <div class="solution-title">Essential Security Tools</div>
                    <div class="step-by-step">
                        <strong>Free/Low-Cost Security Solutions:</strong><br>
                        • Microsoft Defender for endpoint protection<br>
                        • Google Workspace security features<br>
                        • KnowBe4 security awareness training<br>
                        • Bitwarden for password management<br>
                        • Malwarebytes for malware protection
                    </div>
                </div>

                <div class="solution-box">
                    <div class="solution-title">Training and Certification</div>
                    <div class="step-by-step">
                        <strong>Recommended Training Programs:</strong><br>
                        • SANS Security Awareness Training<br>
                        • Cybersecurity and Infrastructure Security Agency (CISA) resources<br>
                        • CompTIA Security+ certification<br>
                        • Local cybersecurity workshops and conferences<br>
                        • Industry-specific security training programs
                    </div>
                </div>

                <div class="solution-box">
                    <div class="solution-title">Professional Networks</div>
                    <div class="step-by-step">
                        <strong>Connect with Security Communities:</strong><br>
                        • African Cybersecurity Professionals Network<br>
                        • HR security forums and LinkedIn groups<br>
                        • Local ISACA and (ISC)² chapters<br>
                        • Government cybersecurity initiatives<br>
                        • Industry-specific security alliances
                    </div>
                </div>

                <div class="solution-box">
                    <div class="solution-title">Your 90-Day Security Implementation Plan</div>
                    <div class="step-by-step">
                        <strong>Days 1-30:</strong> Conduct security assessment and implement basic controls<br>
                        <strong>Days 31-60:</strong> Deploy training programs and enhance monitoring<br>
                        <strong>Days 61-90:</strong> Evaluate effectiveness and plan next phase<br>
                        <strong>Ongoing:</strong> Continuous monitoring, training, and improvement
                    </div>
                </div>
            </div>

            <div class="highlight">
                <h2>Congratulations on Completing HR Cybersecurity Training!</h2>
                <p>You now have:</p>
                <ul>
                    <li>✅ Understanding of key cybersecurity risks facing HR departments</li>
                    <li>✅ Knowledge of prevention measures and best practices</li>
                    <li>✅ Tools and strategies for balancing security with productivity</li>
                    <li>✅ Implementation roadmap for your organization</li>
                    <li>✅ Assessment of your cybersecurity knowledge</li>
                    <li>✅ Resources for continued learning and improvement</li>
                    <li>✅ Hands-on experience with security tools and simulations</li>
                    <li>✅ Practical templates and checklists for immediate use</li>
                </ul>
            </div>

            <div class="demo-box">
                <h3>🎯 Your Security Commitment</h3>
                <p><strong>Take Action Within 7 Days:</strong></p>
                <ol>
                    <li>Conduct a security assessment of your current HR practices</li>
                    <li>Implement multi-factor authentication for critical systems</li>
                    <li>Schedule security awareness training for your team</li>
                    <li>Review and update password policies</li>
                    <li>Establish regular security review meetings</li>
                    <li>Download and customize the provided security templates</li>
                    <li>Begin implementing free security tools identified in this training</li>
                </ol>
                <p><strong>Remember:</strong> Cybersecurity is everyone's responsibility, and HR plays a critical role in protecting organizational data and employee privacy!</p>
            </div>

            <div class="hands-on-section">
                <div class="hands-on-title">Downloadable Resources</div>
                <div class="demo-box">
                    <h4>📁 Take These Resources With You</h4>
                    <div class="resource-link">
                        <strong>HR Security Policy Template:</strong> 
                        Ready-to-customize policy document for your organization
                    </div>
                    <div class="resource-link">
                        <strong>Security Training Presentation:</strong> 
                        Slides you can use to train your HR team on cybersecurity basics
                    </div>
                    <div class="resource-link">
                        <strong>Incident Response Checklist:</strong> 
                        Step-by-step guide for handling security incidents
                    </div>
                    <div class="resource-link">
                        <strong>Security Tools Comparison Chart:</strong> 
                        Detailed comparison of free vs. paid security solutions
                    </div>
                    <div class="resource-link">
                        <strong>Monthly Security Review Template:</strong> 
                        Structure for ongoing security assessments and reporting
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navigation">
        <button class="nav-btn" onclick="window.location.href='home.php'">🏠 Home</button>
        
        <button class="nav-btn" id="prevBtn" onclick="changeSlide(-1)">← Previous</button>
        <button class="nav-btn" id="nextBtn" onclick="changeSlide(1)">Next →</button>
        <button class="print-btn" id="printBtn" onclick="printPresentation()">📄 Print as PDF</button>
    </div>

    <script src="js/cybersecurity-for-hr.js"></script>
</body>
</html>