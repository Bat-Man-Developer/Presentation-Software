// Cybersecurity Software Analyst JS
let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;
let quizCompleted = false;
let simulationResults = {};
let checklistProgress = 0;

document.getElementById('totalSlides').textContent = totalSlides;

function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    slides[index].classList.add('active');
    
    document.getElementById('currentSlide').textContent = index + 1;
    
    // Update navigation buttons
    document.getElementById('prevBtn').disabled = index === 0;
    document.getElementById('nextBtn').disabled = index === totalSlides - 1;
    
    // Show print button on last slide
    const printBtn = document.getElementById('printBtn');
    if (index === totalSlides - 1) {
        printBtn.style.display = 'block';
    } else {
        printBtn.style.display = 'none';
    }
    
    // Initialize slide-specific interactivity
    initializeSlideInteractivity();
}

function changeSlide(direction) {
    currentSlideIndex += direction;
    
    if (currentSlideIndex < 0) {
        currentSlideIndex = 0;
    } else if (currentSlideIndex >= totalSlides) {
        currentSlideIndex = totalSlides - 1;
    }
    
    showSlide(currentSlideIndex);
}

function printPresentation() {
    window.print();
}

// AppSec Risk Assessment
function calculateAppSecRiskScore() {
    const checkboxes = document.querySelectorAll('.risk-checkbox:checked');
    let totalScore = 0;
    let maxScore = 0;
    
    document.querySelectorAll('.risk-checkbox').forEach(checkbox => {
        const weight = parseInt(checkbox.dataset.weight);
        maxScore += weight;
        if (checkbox.checked) {
            totalScore += weight;
        }
    });
    
    const percentage = Math.round((totalScore / maxScore) * 100);
    let riskLevel, recommendations, color;
    
    if (percentage >= 80) {
        riskLevel = "MATURE SDLC";
        color = "#27ae60";
        recommendations = "Your development pipeline is robust. Focus on advanced dynamic testing and bug bounties.";
    } else if (percentage >= 60) {
        riskLevel = "DEVELOPING SDLC";
        color = "#f39c12";
        recommendations = "Good foundation. Prioritize integrating SAST into CI/CD and strict secret management.";
    } else {
        riskLevel = "VULNERABLE PIPELINE";
        color = "#e74c3c";
        recommendations = "Immediate action required. Your applications are highly susceptible to OWASP Top 10 vulnerabilities.";
    }
    
    document.getElementById('risk-assessment-result').innerHTML = `
        <h4 style="color: ${color};">AppSec Maturity Score: ${percentage}% (${riskLevel})</h4>
        <p><strong>Assessment:</strong> ${recommendations}</p>
        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin-top: 10px;">
            <h5>Priority Remediation:</h5>
            <ul>
                ${percentage < 80 ? '<li>Audit all DB queries to enforce parameterized statements globally</li>' : ''}
                ${percentage < 70 ? '<li>Implement automated dependency scanning (SCA) immediately</li>' : ''}
                ${percentage < 60 ? '<li>Review and fix all Cross-Site Scripting (XSS) output encoding flaws</li>' : ''}
                ${percentage < 50 ? '<li>Purge hardcoded secrets and utilize environment variables</li>' : ''}
            </ul>
        </div>
    `;
    document.getElementById('risk-assessment-result').style.display = 'block';
}

// Secure Code Analysis (PHP snippet)
function analyzeVulnerableCode() {
    const codeContent = document.getElementById('code-fix-input').value.toLowerCase();
    
    let score = 0;
    let feedback = [];
    
    // Check for parameterization
    if (codeContent.includes('prepare') || codeContent.includes('bind_param') || codeContent.includes('execute')) {
        score += 70;
    } else {
        feedback.push("Missing prepared statements. The query is still vulnerable to SQL Injection.");
    }

    // Check for secure output encoding/XSS mitigation
    if (codeContent.includes('htmlspecialchars') || codeContent.includes('htmlentities')) {
        score += 30;
    } else {
        feedback.push("Missing output encoding (htmlspecialchars). The $_GET['name'] variable is vulnerable to XSS.");
    }
    
    let result = `<h4>Code Review Score: ${Math.round(score)}%</h4>`;
    if (score === 100) {
        result += "<p style='color: #27ae60;'>Excellent! You patched both the SQL Injection and the DOM XSS vulnerabilities.</p>";
    } else if (score >= 70) {
        result += "<p style='color: #f39c12;'>Good job fixing the SQL Injection, but the frontend output is still vulnerable.</p>";
    } else {
        result += "<p style='color: #e74c3c;'>The code remains highly vulnerable. You must use prepared statements (PDO/MySQLi).</p>";
    }
    
    if (feedback.length > 0) {
        result += "<h5>Analyst Notes:</h5><ul>";
        feedback.forEach(item => {
            result += `<li>${item}</li>`;
        });
        result += "</ul>";
    }
    
    document.getElementById('code-validation').innerHTML = result;
    document.getElementById('code-validation').style.display = 'block';
}

// CSP Generator
function generateCSP() {
    const checkedBoxes = document.querySelectorAll('.csp-checkbox:checked');
    let cspArray = [];
    let hasUnsafeInline = false;
    
    checkedBoxes.forEach(box => {
        cspArray.push(box.value);
        if(box.value.includes("unsafe-inline")) hasUnsafeInline = true;
    });

    const cspHeader = cspArray.join(" ");
    document.getElementById('generated-csp').textContent = "Content-Security-Policy: " + cspHeader;

    let evalResult = "";
    if (cspArray.length === 0) {
        evalResult = "<p style='color: #e74c3c;'>No policy generated. Application is vulnerable to all injections.</p>";
    } else if (hasUnsafeInline) {
        evalResult = "<p style='color: #e74c3c;'>⚠️ <strong>WARNING:</strong> 'unsafe-inline' defeats the purpose of CSP. It allows attackers to inject malicious script tags.</p>";
    } else if (cspArray.length >= 3) {
        evalResult = "<p style='color: #27ae60;'>✅ <strong>STRONG POLICY:</strong> Good separation of concerns blocking inline execution.</p>";
    } else {
        evalResult = "<p style='color: #f39c12;'>⚠️ <strong>MODERATE:</strong> Functional, but consider adding specific rules for styles and connections.</p>";
    }

    document.getElementById('csp-evaluation-result').innerHTML = evalResult;
    document.getElementById('csp-evaluation-result').style.display = 'block';
}

// Dependency Audit Analysis
function analyzeDependencyAudit() {
    const analysis = `
        <h4>SCA Remediation Strategy</h4>
        <div style="background: #fff3cd; padding: 15px; border-radius: 8px; border-left: 4px solid #ff1744;">
            <h5>🚨 Critical Analysis:</h5>
            <ul>
                <li><strong>Lodash (High):</strong> Prototype pollution can lead to DoS or Remote Code Execution. Because it is a sub-dependency of <code>react-scripts</code>, you cannot easily upgrade it directly.</li>
                <li><strong>Marked (Moderate):</strong> ReDoS vulnerability. Can freeze the Node.js event loop if an attacker sends a crafted markdown string.</li>
            </ul>
            
            <h5>DevSecOps Action Plan:</h5>
            <ol>
                <li>Use <code>npm audit fix</code> to attempt automatic remediation for top-level packages.</li>
                <li>For <code>lodash</code>, add an <code>"overrides"</code> or <code>"resolutions"</code> block in <code>package.json</code> to force <code>react-scripts</code> to use version 4.17.11+.</li>
                <li>Verify the application tests pass after forcing the dependency tree update.</li>
            </ol>
        </div>
    `;
    
    document.getElementById('audit-analysis-result').innerHTML = analysis;
    document.getElementById('audit-analysis-result').style.display = 'block';
}

// DevSecOps Roadmap Generator
function generateDevSecOpsRoadmap() {
    const roadmap = `
        <h4>Automated AppSec Integration Pipeline</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <h5>Phase 1: Local Development</h5>
            <ul>
                <li>Install IDE plugins (SonarLint) for real-time secure coding feedback.</li>
                <li>Deploy Git pre-commit hooks (TruffleHog) to block secrets locally.</li>
            </ul>
            
            <h5>Phase 2: Continuous Integration (CI)</h5>
            <ul>
                <li>Run SCA (Dependabot/Snyk) to block PRs with vulnerable libraries.</li>
                <li>Run SAST (CodeQL/SonarQube) to enforce OWASP secure coding standards.</li>
            </ul>

            <h5>Phase 3: Continuous Deployment (CD)</h5>
            <ul>
                <li>Automated DAST (ZAP API) scans against ephemeral staging environments.</li>
                <li>Container image scanning (Trivy/Clair) before pushing to registries.</li>
            </ul>
        </div>
    `;
    
    document.getElementById('pipeline-roadmap-result').innerHTML = roadmap;
    document.getElementById('pipeline-roadmap-result').style.display = 'block';
}

// AppSec ROI Calculator
function calculateAppSecROI() {
    const devCount = parseInt(document.getElementById('dev-count').value) || 1;
    const riskProfile = document.getElementById('risk-profile').value;
    
    const baseCosts = {
        standard: { perDev: 300, tools: 2000, desc: "Basic SAST + OSS SCA" },
        enhanced: { perDev: 1200, tools: 10000, desc: "Commercial SAST/DAST + Developer Training" },
        premium: { perDev: 2500, tools: 35000, desc: "Enterprise AppSec Suite + Bug Bounty + PenTesting" }
    };
    
    const costs = baseCosts[riskProfile];
    const devCost = devCount * costs.perDev;
    const totalCost = devCost + costs.tools;
    
    const result = `
        <h4>Recommended SDLC Security Budget</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <h5>Profile: ${riskProfile.charAt(0).toUpperCase() + riskProfile.slice(1)}</h5>
            <p><strong>Recommended Stack:</strong> ${costs.desc}</p>
            
            <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                <thead style="background: #673ab7; color: white;">
                    <tr>
                        <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Cost Category</th>
                        <th style="padding: 10px; border: 1px solid #ddd; text-align: right;">Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd;">Developer Licenses & Training (${devCount} devs)</td>
                        <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">$${devCost.toLocaleString()}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd;">Core AppSec Tooling (SAST, DAST, SCA)</td>
                        <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">$${costs.tools.toLocaleString()}</td>
                    </tr>
                    <tr style="background: #ecf0f1; font-weight: bold;">
                        <td style="padding: 8px; border: 1px solid #ddd;">Total Annual AppSec Investment</td>
                        <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">$${totalCost.toLocaleString()}</td>
                    </tr>
                </tbody>
            </table>
            <p style="font-size: 12px; color: #5f6368;"><em>Note: Fixing a vulnerability in production costs roughly 100x more than fixing it during the development phase.</em></p>
        </div>
    `;
    
    document.getElementById('budget-calculation-result').innerHTML = result;
    document.getElementById('budget-calculation-result').style.display = 'block';
}

// API Breach Simulation
function runApiBreachSimulation() {
    const steps = [
        "🚨 IMMEDIATE: Revoke/Roll the exposed API keys at the provider (Database/Cloud/Alpaca).",
        "🔧 REMEDIATE: Remove the `.env` file from the public directory and configure the web server (Apache/Nginx) to block access to hidden files.",
        "💾 AUDIT: Check access logs to see what IPs accessed the `.env` file.",
        "🔍 VERIFY: Audit the provider logs for unauthorized API usage during the exposure window.", 
        "🔄 RECOVER: Rotate any database passwords that were exposed.",
        "📋 FIX: Implement pre-commit hooks to block `.env` commits moving forward."
    ];
    
    let result = `
        <h4>🚨 Secrets Leak Response</h4>
        <div style="background: #fff5f5; border: 2px solid #e53e3e; border-radius: 10px; padding: 20px;">
            <h5>Response Timeline:</h5>
            <ol>
                ${steps.map(step => `<li style="margin: 8px 0; padding: 5px;">${step}</li>`).join('')}
            </ol>
        </div>
    `;
    
    document.getElementById('breach-response-result').innerHTML = result;
    document.getElementById('breach-response-result').style.display = 'block';
}

// IDOR Simulation
function runIdorSimulation() {
    const result = `
        <h4>Broken Access Control Analysis</h4>
        <div style="background: white; border: 2px solid #ff1744; border-radius: 10px; padding: 20px;">
            <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                <h5 style="color: #ff1744;">🚨 Vulnerability Confirmed: IDOR</h5>
                <p>The backend is trusting the client-provided <code>id</code> without verifying if the currently authenticated user actually owns that object.</p>
            </div>
            
            <h5>📋 Remediation Code (PHP Example):</h5>
            <div class="code-block" style="margin-top: 10px;">
// VULNERABLE:
$receiptId = $_GET['id'];
$query = "SELECT * FROM receipts WHERE id = ?";

// SECURE:
$receiptId = $_GET['id'];
$userId = $_SESSION['user_id']; // Trusted server-side state
$query = "SELECT * FROM receipts WHERE id = ? AND owner_user_id = ?";
            </div>
        </div>
    `;
    
    document.getElementById('idor-result').innerHTML = result;
    document.getElementById('idor-result').style.display = 'block';
}

// OWASP ASVS Compliance
function assessOWASPCompliance() {
    const checkedBoxes = document.querySelectorAll('.compliance-checkbox:checked').length;
    const totalBoxes = document.querySelectorAll('.compliance-checkbox').length;
    const score = Math.round((checkedBoxes / totalBoxes) * 100);
    
    let complianceLevel = score === 100 ? "ASVS L1 COMPLIANT" : "FAILING ASVS L1";
    let color = score === 100 ? "#28a745" : "#dc3545";
    
    const result = `
        <h4>OWASP ASVS Assessment</h4>
        <div style="background: white; border: 2px solid ${color}; border-radius: 10px; padding: 20px;">
            <h5 style="color: ${color};">Baseline Security: ${score}% - ${complianceLevel}</h5>
            <p>Level 1 is the bare minimum security standard. Failing to meet 100% means the application is vulnerable to basic, automated exploitation.</p>
        </div>
    `;
    
    document.getElementById('compliance-result').innerHTML = result;
    document.getElementById('compliance-result').style.display = 'block';
}

// Checklist logic binding
function updateChecklistProgress() {
    const checkboxes = document.querySelectorAll('.checklist-checkbox:checked');
    const totalItems = document.querySelectorAll('.checklist-checkbox').length;
    checklistProgress = (checkboxes.length / totalItems) * 100;
}

// Initialize slide interactivity
function initializeSlideInteractivity() {
    document.querySelectorAll('.risk-checkbox').forEach(checkbox => {
        checkbox.onchange = function() {
            this.parentElement.style.opacity = this.checked ? '1' : '0.7';
        };
    });
    
    document.querySelectorAll('.checklist-checkbox').forEach(checkbox => {
        checkbox.onchange = updateChecklistProgress;
    });
    
    document.querySelectorAll('.simulation-button').forEach(button => {
        if (!button.onclick) {
            button.onclick = function() {
                const simulationType = this.getAttribute('onclick');
                if (simulationType) {
                    eval(simulationType.replace('onclick=', '').replace(/"/g, ''));
                }
            };
        }
    });
}

// Quiz functionality
let selectedAnswers = {};

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.addEventListener('click', function() {
            const questionId = this.closest('.question').id;
            const questionOptions = this.closest('.quiz-options').querySelectorAll('li');
            
            questionOptions.forEach(opt => opt.classList.remove('selected'));
            this.classList.add('selected');
            selectedAnswers[questionId] = this.dataset.answer;
        });
    });
    
    showSlide(0);
});

function submitQuiz() {
    if (Object.keys(selectedAnswers).length < 20) {
        alert('Please answer all 20 questions before submitting.');
        return;
    }

    let correctCount = 0;
    const corrections = [];

    const questionData = {
        'q1': { correct: 'Open Worldwide Application Security Project', explanation: 'OWASP is a nonprofit foundation that works to improve the security of software, most famous for its Top 10 list.' },
        'q2': { correct: 'SQL Injection', explanation: 'Parameterized queries (prepared statements) ensure that the database treats user input strictly as data, never as executable code.' },
        'q3': { correct: 'Source code at rest', explanation: 'SAST (Static Application Security Testing) analyzes source code or binaries without executing the program, often finding flaws early in the SDLC.' },
        'q4': { correct: 'Anti-CSRF tokens and SameSite cookies', explanation: 'CSRF relies on browsers automatically sending session cookies. Tokens prove the request originated from the intended form, and SameSite prevents cross-origin cookie sending.' },
        'q5': { correct: 'Dynamic Application Security Testing', explanation: 'DAST tools interact with the running web application from the outside, looking for vulnerabilities like a black-box attacker would.' },
        'q6': { correct: 'Content-Security-Policy (CSP)', explanation: 'CSP mitigates XSS by allowing server administrators to declare approved sources of executable scripts, blocking unauthorized inline or external scripts.' },
        'q7': { correct: 'Hashing with a strong salt (e.g., Argon2/Bcrypt)', explanation: 'Passwords must never be encrypted (reversible). They must be hashed using a slow, salted algorithm designed to resist brute-force/GPU cracking.' },
        'q8': { correct: 'Insecure Direct Object Reference / Broken Access Control', explanation: 'Trusting client-side input for critical state variables without verifying server-side authority is a classic broken access control flaw.' },
        'q9': { correct: '.env files containing production API keys', explanation: 'Environment files often contain highly sensitive secrets. Committing them to version control can lead to instantaneous infrastructure compromise.' },
        'q10': { correct: 'Identifying known vulnerabilities in open-source dependencies', explanation: 'SCA tools analyze your package managers (npm, composer) to check if any third-party libraries have known CVEs (Common Vulnerabilities and Exposures).' },
        'q11': { correct: 'Client-side JavaScript from reading the cookie', explanation: 'HttpOnly prevents JavaScript (like document.cookie) from accessing the session token, heavily mitigating the impact of an XSS attack.' },
        'q12': { correct: 'Cross-Site Scripting (XSS)', explanation: 'XSS occurs when an application includes untrusted data in a web page without proper validation or escaping, allowing the attacker to execute JS in the victim\'s browser.' },
        'q13': { correct: 'Validating target URLs against a strict allow-list', explanation: 'SSRF occurs when a server makes external requests based on user input. Validating the URL strictly prevents the server from querying internal metadata services.' },
        'q14': { correct: 'Integrating security checks as early as possible in the SDLC', explanation: '"Shifting left" means testing code for vulnerabilities during writing and building, rather than waiting for pre-production penetration testing.' },
        'q15': { correct: 'eval()', explanation: 'The eval() function executes a string as JavaScript code. If an attacker controls the string, they achieve immediate XSS / Code Execution.' },
        'q16': { correct: 'DOM-based XSS', explanation: 'Setting innerHTML parses the input as HTML. If it contains script tags or event handlers (like onerror), it leads to DOM-based Cross-Site Scripting.' },
        'q17': { correct: 'Allows servers to specify which origins can access their assets in a browser', explanation: 'CORS relaxes the Same-Origin Policy, allowing controlled cross-domain API requests while blocking unauthorized sites from reading data.' },
        'q18': { correct: 'PDO with prepare() and execute()', explanation: 'PHP Data Objects (PDO) with prepared statements completely isolates user input from the SQL query syntax.' },
        'q19': { correct: 'Access files and directories stored outside the web root folder', explanation: 'Path traversal (using ../../) aims to escape the web directory to access sensitive OS files like /etc/passwd.' },
        'q20': { correct: 'They filter and monitor HTTP traffic to block malicious payloads at the network edge', explanation: 'WAFs sit in front of web applications and inspect incoming traffic for attack signatures (like SQLi or XSS), providing a defense-in-depth layer.' }
    };

    Object.keys(selectedAnswers).forEach(questionId => {
        const userAnswer = selectedAnswers[questionId];
        const questionElement = document.getElementById(questionId);
        const options = questionElement.querySelectorAll('.quiz-options li');
        
        if (userAnswer === 'correct') {
            correctCount++;
            options.forEach(option => {
                if (option.dataset.answer === 'correct') {
                    option.classList.add('correct');
                }
            });
        } else {
            options.forEach(option => {
                if (option.classList.contains('selected')) {
                    option.classList.add('incorrect');
                }
                if (option.dataset.answer === 'correct') {
                    option.classList.add('correct');
                }
            });
            
            corrections.push({
                question: questionId,
                correct: questionData[questionId].correct,
                explanation: questionData[questionId].explanation
            });
        }
    });

    const percentage = (correctCount / 20) * 100;
    const resultDiv = document.getElementById('quiz-result');
    const correctionsDiv = document.getElementById('corrections');
    
    let resultClass = 'needs-improvement';
    let resultMessage = `You scored ${correctCount}/20 (${percentage}%). `;
    let actionPlan = '';
    
    if (percentage >= 85) {
        resultClass = 'excellent';
        resultMessage += 'Outstanding! You have a strong grasp of AppSec principles.';
        actionPlan = 'You are ready to implement DevSecOps pipelines and perform code reviews.';
    } else if (percentage >= 70) {
        resultClass = 'good';
        resultMessage += 'Good work! You understand core software security concepts.';
        actionPlan = 'Review the missed areas, particularly surrounding modern frontend defenses (CORS/CSP).';
    } else {
        resultMessage += 'Additional study is recommended to strengthen your secure coding knowledge.';
        actionPlan = 'Focus heavily on the OWASP Top 10 and secure coding standards for your framework.';
    }

    resultDiv.className = `quiz-result ${resultClass}`;
    resultDiv.innerHTML = `
        <p>${resultMessage}</p>
        <p><strong>Next Steps:</strong> ${actionPlan}</p>
    `;
    resultDiv.style.display = 'block';

    if (corrections.length > 0) {
        let correctionsHTML = '<p><strong>Review these areas:</strong></p>';
        corrections.forEach((correction) => {
            const questionNum = correction.question.replace('q', '');
            correctionsHTML += `
                <div class="correction-item">
                    <strong>Question ${questionNum}:</strong><br>
                    <span class="correct-answer">✓ Correct Answer: ${correction.correct}</span><br>
                    <em>📚 Explanation: ${correction.explanation}</em>
                </div>
            `;
        });
        
        document.getElementById('correction-content').innerHTML = correctionsHTML;
        correctionsDiv.style.display = 'block';
    }

    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.style.pointerEvents = 'none';
    });
    
    document.querySelector('.submit-btn').disabled = true;
    document.querySelector('.submit-btn').textContent = 'Assessment Completed';
    
    quizCompleted = true;
}

// Keyboard navigation
document.addEventListener('keydown', function(event) {
    if (event.key === 'ArrowLeft') {
        changeSlide(-1);
    } else if (event.key === 'ArrowRight') {
        changeSlide(1);
    }
});