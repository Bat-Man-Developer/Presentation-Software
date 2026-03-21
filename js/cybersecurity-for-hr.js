// Cybersecurity For HR JS
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

// Risk Assessment Functions
function calculateRiskScore() {
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
        riskLevel = "LOW RISK";
        color = "#27ae60";
        recommendations = "Your organization has strong security practices. Focus on maintaining current standards and staying updated with emerging threats.";
    } else if (percentage >= 60) {
        riskLevel = "MEDIUM RISK";
        color = "#f39c12";
        recommendations = "Good foundation, but improvements needed. Prioritize implementing missing security controls, especially high-weight items.";
    } else {
        riskLevel = "HIGH RISK";
        color = "#e74c3c";
        recommendations = "Immediate action required! Your organization is vulnerable to cyber attacks. Implement basic security controls urgently.";
    }
    
    document.getElementById('risk-assessment-result').innerHTML = `
        <h4 style="color: ${color};">Security Risk Score: ${percentage}% (${riskLevel})</h4>
        <p><strong>Assessment:</strong> ${recommendations}</p>
        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin-top: 10px;">
            <h5>Immediate Actions Needed:</h5>
            <ul>
                ${percentage < 80 ? '<li>Implement multi-factor authentication for all HR systems</li>' : ''}
                ${percentage < 70 ? '<li>Conduct mandatory cybersecurity training for all HR staff</li>' : ''}
                ${percentage < 60 ? '<li>Establish incident response procedures</li>' : ''}
                ${percentage < 50 ? '<li>Implement basic encryption for sensitive data</li>' : ''}
            </ul>
        </div>
    `;
    document.getElementById('risk-assessment-result').style.display = 'block';
}

// Email Validation Function
function validateEmail() {
    const emailContent = document.getElementById('phishing-email').value;
    const requiredElements = [
        'phishing', 'warning signs', 'report', 'examples', 'suspicious'
    ];
    
    let score = 0;
    let feedback = [];
    
    requiredElements.forEach(element => {
        if (emailContent.toLowerCase().includes(element)) {
            score += 20;
        } else {
            feedback.push(`Consider including information about ${element}`);
        }
    });
    
    let result = `<h4>Email Validation Score: ${score}%</h4>`;
    if (score >= 80) {
        result += "<p style='color: #27ae60;'>Excellent! Your email covers all essential elements.</p>";
    } else if (score >= 60) {
        result += "<p style='color: #f39c12;'>Good foundation. Consider the suggestions below.</p>";
    } else {
        result += "<p style='color: #e74c3c;'>Needs improvement. Include more security awareness elements.</p>";
    }
    
    if (feedback.length > 0) {
        result += "<h5>Suggestions:</h5><ul>";
        feedback.forEach(item => {
            result += `<li>${item}</li>`;
        });
        result += "</ul>";
    }
    
    document.getElementById('email-validation').innerHTML = result;
    document.getElementById('email-validation').style.display = 'block';
}

// MFA Progress Tracking
function updateMFAProgress() {
    const checkedBoxes = document.querySelectorAll('.mfa-checkbox:checked').length;
    const totalBoxes = document.querySelectorAll('.mfa-checkbox').length;
    const progress = Math.round((checkedBoxes / totalBoxes) * 100);
    
    const progressFill = document.querySelector('#mfa-progress .progress-fill');
    if (progressFill) {
        progressFill.style.width = `${progress}%`;
        progressFill.textContent = `${progress}% Complete`;
        
        if (progress === 100) {
            progressFill.style.background = '#27ae60';
            progressFill.textContent = '✅ MFA Implementation Ready!';
        }
    }
}

// Password Policy Generator
function generatePasswordPolicy() {
    const selectedPolicies = [];
    const policyCheckboxes = document.querySelectorAll('.policy-checkbox:checked');
    
    policyCheckboxes.forEach(checkbox => {
        selectedPolicies.push(checkbox.nextElementSibling.textContent);
    });
    
    const policyDocument = `
        <h4>Generated Password Policy Document</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <h5>Organization Password Security Policy</h5>
            <p><strong>Effective Date:</strong> ${new Date().toLocaleDateString()}</p>
            <h6>Requirements:</h6>
            <ul>
                ${selectedPolicies.map(policy => `<li>${policy}</li>`).join('')}
            </ul>
            <h6>Enforcement:</h6>
            <p>All employees must comply with this policy. Violations may result in disciplinary action.</p>
            <h6>Review:</h6>
            <p>This policy will be reviewed annually and updated as necessary.</p>
        </div>
        <p style="margin-top: 10px;"><em>Customize this policy template for your organization's specific needs.</em></p>
    `;
    
    document.getElementById('password-policy-result').innerHTML = policyDocument;
    document.getElementById('password-policy-result').style.display = 'block';
}

// Password Strength Testing
function testPasswordStrength() {
    const password = document.getElementById('password-test').value;
    if (!password) {
        alert('Please enter a password to test');
        return;
    }
    
    const analysis = analyzePasswordStrength(password);
    let color, recommendations = [];
    
    if (analysis.score >= 8) {
        color = '#27ae60';
    } else if (analysis.score >= 5) {
        color = '#f39c12';
        recommendations.push('Consider adding more character types');
    } else {
        color = '#e74c3c';
        recommendations.push('Use a longer password with mixed character types');
    }
    
    if (password.length < 12) recommendations.push('Increase length to at least 12 characters');
    if (!/[A-Z]/.test(password)) recommendations.push('Add uppercase letters');
    if (!/[a-z]/.test(password)) recommendations.push('Add lowercase letters');
    if (!/[0-9]/.test(password)) recommendations.push('Add numbers');
    if (!/[^A-Za-z0-9]/.test(password)) recommendations.push('Add special characters');
    
    const result = `
        <h4 style="color: ${color};">Password Strength: ${analysis.level} (${analysis.score}/10)</h4>
        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin-top: 10px;">
            <h5>Analysis Details:</h5>
            <p><strong>Length:</strong> ${password.length} characters</p>
            <p><strong>Character Types:</strong> ${getCharacterTypes(password).join(', ')}</p>
            ${recommendations.length > 0 ? '<h5>Recommendations:</h5><ul>' + recommendations.map(r => `<li>${r}</li>`).join('') + '</ul>' : '<p style="color: #27ae60;">Excellent password strength!</p>'}
        </div>
    `;
    
    document.getElementById('strength-result').innerHTML = result;
    document.getElementById('strength-result').style.display = 'block';
}

function getCharacterTypes(password) {
    const types = [];
    if (/[a-z]/.test(password)) types.push('lowercase');
    if (/[A-Z]/.test(password)) types.push('uppercase');
    if (/[0-9]/.test(password)) types.push('numbers');
    if (/[^A-Za-z0-9]/.test(password)) types.push('special characters');
    return types;
}

// Encryption Plan Generator
function generateEncryptionPlan() {
    const plan = `
        <h4>HR Data Encryption Implementation Plan</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <h5>Phase 1: Immediate Actions (Week 1-2)</h5>
            <ul>
                <li>Install VeraCrypt on all HR workstations</li>
                <li>Create encrypted containers for sensitive files</li>
                <li>Enable BitLocker on Windows computers</li>
                <li>Train staff on encryption tool usage</li>
            </ul>
            
            <h5>Phase 2: Email and Communications (Week 3-4)</h5>
            <ul>
                <li>Set up ProtonMail accounts for sensitive communications</li>
                <li>Configure email encryption in existing systems</li>
                <li>Establish secure file sharing procedures</li>
            </ul>
            
            <h5>Phase 3: Database and System Encryption (Month 2)</h5>
            <ul>
                <li>Enable database-level encryption for HR systems</li>
                <li>Implement application-level encryption for sensitive fields</li>
                <li>Configure backup encryption</li>
            </ul>
            
            <h5>Ongoing Maintenance:</h5>
            <ul>
                <li>Regular encryption key rotation</li>
                <li>Quarterly encryption audit</li>
                <li>Staff refresher training</li>
            </ul>
        </div>
    `;
    
    document.getElementById('encryption-plan-result').innerHTML = plan;
    document.getElementById('encryption-plan-result').style.display = 'block';
}

// Monitoring Plan Generator
function generateMonitoringPlan() {
    const checkedItems = document.querySelectorAll('.monitor-checkbox:checked');
    const monitoringAreas = Array.from(checkedItems).map(item => item.nextElementSibling.textContent);
    
    const plan = `
        <h4>HR Security Monitoring Plan</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <h5>Selected Monitoring Areas:</h5>
            <ul>
                ${monitoringAreas.map(area => `<li>${area}</li>`).join('')}
            </ul>
            
            <h5>Implementation Strategy:</h5>
            <p><strong>Week 1-2:</strong> Install and configure Wazuh SIEM platform</p>
            <p><strong>Week 3:</strong> Configure log collection for selected areas</p>
            <p><strong>Week 4:</strong> Set up alerting rules and notification procedures</p>
            
            <h5>Alert Configuration:</h5>
            <ul>
                <li>High Priority: Immediate email/SMS alerts</li>
                <li>Medium Priority: Daily summary reports</li>
                <li>Low Priority: Weekly trend analysis</li>
            </ul>
            
            <h5>Response Procedures:</h5>
            <ul>
                <li>Alert triage within 15 minutes</li>
                <li>Initial response within 1 hour</li>
                <li>Weekly monitoring review meetings</li>
            </ul>
        </div>
    `;
    
    document.getElementById('monitoring-plan-result').innerHTML = plan;
    document.getElementById('monitoring-plan-result').style.display = 'block';
}

// Log Analysis Function
function analyzeLogSample() {
    const analysis = `
        <h4>Security Log Analysis Results</h4>
        <div style="background: #fff3cd; padding: 15px; border-radius: 8px; border-left: 4px solid #ffc107;">
            <h5>🚨 Security Issues Identified:</h5>
            <ol>
                <li><strong>Brute Force Attack Detected:</strong> Multiple failed login attempts for 'admin' user from IP 203.0.113.15</li>
                <li><strong>Suspicious Data Access:</strong> User msmith downloaded 500+ employee records outside normal business hours</li>
                <li><strong>Potential Policy Violation:</strong> User jdoe accessed payroll module (verify authorization)</li>
            </ol>
            
            <h5>Recommended Actions:</h5>
            <ul>
                <li>Immediately block IP 203.0.113.15</li>
                <li>Investigate msmith's data download activity</li>
                <li>Review jdoe's access permissions to payroll</li>
                <li>Enable account lockout policies</li>
                <li>Implement after-hours access alerts</li>
            </ul>
            
            <h5>Risk Level: HIGH</h5>
            <p>Escalate to IT security team immediately.</p>
        </div>
    `;
    
    document.getElementById('log-analysis-result').innerHTML = analysis;
    document.getElementById('log-analysis-result').style.display = 'block';
}

// Automation Roadmap Generator
function generateAutomationRoadmap() {
    const roadmap = `
        <h4>Security Automation Roadmap</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <h5>Quarter 1: Foundation</h5>
            <ul>
                <li>Deploy OpenVAS for automated vulnerability scanning</li>
                <li>Implement PowerShell scripts for user account auditing</li>
                <li>Set up WSUS for automated patch management</li>
                <li>Configure basic monitoring with Wazuh</li>
            </ul>
            
            <h5>Quarter 2: Enhancement</h5>
            <ul>
                <li>Implement Ansible for configuration management</li>
                <li>Deploy YARA rules for malware detection</li>
                <li>Automate security training reminders</li>
                <li>Enhance SIEM with custom rules</li>
            </ul>
            
            <h5>Quarter 3: Integration</h5>
            <ul>
                <li>Integrate tools with HR management systems</li>
                <li>Implement automated incident response workflows</li>
                <li>Deploy API-based security monitoring</li>
                <li>Create automated compliance reporting</li>
            </ul>
            
            <h5>Cost Breakdown:</h5>
            <p>• <strong>Q1:</strong> $0 (all open source tools)</p>
            <p>• <strong>Q2:</strong> $500-1000 (training and setup)</p>
            <p>• <strong>Q3:</strong> $1000-2000 (integration and customization)</p>
            
            <h5>Expected ROI:</h5>
            <p>• 75% reduction in manual security tasks</p>
            <p>• 90% faster threat detection</p>
            <p>• $100,000+ annual savings in security operations</p>
        </div>
    `;
    
    document.getElementById('automation-roadmap-result').innerHTML = roadmap;
    document.getElementById('automation-roadmap-result').style.display = 'block';
}

// Tool Recommendations Generator
function generateToolRecommendations() {
    const companySize = document.getElementById('company-size').value;
    const budgetLevel = document.getElementById('budget-level').value;
    const techExpertise = document.getElementById('tech-expertise').value;
    
    let recommendations = {
        antivirus: '',
        passwordManager: '',
        backup: '',
        training: '',
        monitoring: ''
    };
    
    // Customize recommendations based on inputs
    if (budgetLevel === 'low') {
        recommendations.antivirus = 'Windows Defender (Free)';
        recommendations.passwordManager = 'Bitwarden (Free)';
        recommendations.backup = 'Windows Backup + OneDrive (Free tier)';
        recommendations.training = 'SANS free resources';
        recommendations.monitoring = 'Wazuh (Open source)';
    } else if (budgetLevel === 'medium') {
        recommendations.antivirus = 'Windows Defender + Malwarebytes';
        recommendations.passwordManager = 'Bitwarden Business ($3/user/month)';
        recommendations.backup = 'Veeam Community Edition';
        recommendations.training = 'KnowBe4 Security Awareness';
        recommendations.monitoring = 'Graylog Open + Commercial features';
    } else {
        recommendations.antivirus = 'Bitdefender GravityZone';
        recommendations.passwordManager = '1Password Business';
        recommendations.backup = 'Veeam Backup & Replication';
        recommendations.training = 'KnowBe4 + Custom training';
        recommendations.monitoring = 'Splunk or QRadar';
    }
    
    const result = `
        <h4>Personalized Security Tool Recommendations</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <h5>Based on your profile: ${companySize} company, ${budgetLevel} budget, ${techExpertise} expertise</h5>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-top: 20px;">
                <div style="background: white; padding: 15px; border-radius: 8px; border-left: 3px solid #3498db;">
                    <h6>Antivirus/Endpoint Protection</h6>
                    <p>${recommendations.antivirus}</p>
                </div>
                <div style="background: white; padding: 15px; border-radius: 8px; border-left: 3px solid #27ae60;">
                    <h6>Password Management</h6>
                    <p>${recommendations.passwordManager}</p>
                </div>
                <div style="background: white; padding: 15px; border-radius: 8px; border-left: 3px solid #e74c3c;">
                    <h6>Backup Solution</h6>
                    <p>${recommendations.backup}</p>
                </div>
                <div style="background: white; padding: 15px; border-radius: 8px; border-left: 3px solid #f39c12;">
                    <h6>Security Training</h6>
                    <p>${recommendations.training}</p>
                </div>
                <div style="background: white; padding: 15px; border-radius: 8px; border-left: 3px solid #9b59b6;">
                    <h6>Monitoring/SIEM</h6>
                    <p>${recommendations.monitoring}</p>
                </div>
            </div>
            
            <h5 style="margin-top: 20px;">Next Steps:</h5>
            <ol>
                <li>Download and test recommended free tools</li>
                <li>Create pilot implementation plan</li>
                <li>Calculate ROI for paid solutions</li>
                <li>Develop deployment timeline</li>
                <li>Plan staff training and onboarding</li>
            </ol>
        </div>
    `;
    
    document.getElementById('tool-recommendations-result').innerHTML = result;
    document.getElementById('tool-recommendations-result').style.display = 'block';
}

// Security ROI Calculator
function calculateSecurityROI() {
    const securityCost = parseFloat(document.getElementById('security-cost').value) || 0;
    const breachCost = parseFloat(document.getElementById('breach-cost').value) || 0;
    const breachProbability = parseFloat(document.getElementById('breach-probability').value) || 0;
    
    const expectedLoss = (breachCost * breachProbability) / 100;
    const netBenefit = expectedLoss - securityCost;
    const roi = ((netBenefit / securityCost) * 100).toFixed(1);
    
    let roiColor = netBenefit > 0 ? '#27ae60' : '#e74c3c';
    let recommendation = netBenefit > 0 ? 
        'Strong ROI - Recommended investment' : 
        'Consider lower-cost alternatives or reassess risk';
    
    const result = `
        <h4>Security Investment ROI Analysis</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div>
                    <h5>Costs & Benefits</h5>
                    <p><strong>Annual Security Cost:</strong> $${securityCost.toLocaleString()}</p>
                    <p><strong>Expected Annual Loss Without Security:</strong> $${expectedLoss.toLocaleString()}</p>
                    <p><strong>Net Annual Benefit:</strong> $${netBenefit.toLocaleString()}</p>
                </div>
                <div>
                    <h5 style="color: ${roiColor};">ROI: ${roi}%</h5>
                    <p><strong>Payback Period:</strong> ${(securityCost / expectedLoss * 12).toFixed(1)} months</p>
                    <p><strong>Recommendation:</strong> ${recommendation}</p>
                </div>
            </div>
            
            <h5 style="margin-top: 15px;">Additional Benefits (Unquantified):</h5>
            <ul>
                <li>Regulatory compliance</li>
                <li>Customer trust and reputation</li>
                <li>Employee confidence</li>
                <li>Business continuity</li>
                <li>Competitive advantage</li>
            </ul>
        </div>
    `;
    
    document.getElementById('security-roi-result').innerHTML = result;
    document.getElementById('security-roi-result').style.display = 'block';
}

// Implementation Plan Generator
function generateImplementationPlan() {
    const maturity = document.getElementById('security-maturity').value;
    const riskAreas = [];
    
    ['phishing', 'access', 'data', 'training', 'monitoring', 'policies'].forEach(risk => {
        if (document.getElementById(`risk-${risk}`).checked) {
            riskAreas.push(risk);
        }
    });
    
    const maturityPlans = {
        basic: {
            phase1: 'Implement basic MFA and password policies',
            phase2: 'Deploy free antivirus and backup solutions',
            phase3: 'Conduct initial security training'
        },
        developing: {
            phase1: 'Enhance existing controls and fill security gaps',
            phase2: 'Implement automated monitoring and alerting',
            phase3: 'Develop incident response procedures'
        },
        managed: {
            phase1: 'Optimize current security tools and processes',
            phase2: 'Implement advanced threat detection',
            phase3: 'Enhance security automation'
        },
        optimized: {
            phase1: 'Fine-tune security orchestration',
            phase2: 'Implement threat intelligence integration',
            phase3: 'Develop security metrics and KPIs'
        }
    };
    
    const plan = maturityPlans[maturity];
    
    let riskSpecificActions = '';
    riskAreas.forEach(risk => {
        switch(risk) {
            case 'phishing':
                riskSpecificActions += '<li>Deploy Gophish for phishing simulation training</li>';
                break;
            case 'access':
                riskSpecificActions += '<li>Implement role-based access control review process</li>';
                break;
            case 'data':
                riskSpecificActions += '<li>Deploy VeraCrypt for data encryption</li>';
                break;
            case 'training':
                riskSpecificActions += '<li>Develop comprehensive security awareness program</li>';
                break;
            case 'monitoring':
                riskSpecificActions += '<li>Install Wazuh SIEM platform</li>';
                break;
            case 'policies':
                riskSpecificActions += '<li>Update and document security policies</li>';
                break;
        }
    });
    
    const result = `
        <h4>90-Day Customized Implementation Plan</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <h5>Current Maturity Level: ${maturity.charAt(0).toUpperCase() + maturity.slice(1)}</h5>
            
            <div style="margin: 20px 0;">
                <h6 style="background: #3498db; color: white; padding: 8px; border-radius: 5px;">Days 1-30: Foundation Phase</h6>
                <p>${plan.phase1}</p>
                <ul>
                    ${riskSpecificActions}
                    <li>Conduct initial risk assessment</li>
                    <li>Establish security team and responsibilities</li>
                </ul>
            </div>
            
            <div style="margin: 20px 0;">
                <h6 style="background: #f39c12; color: white; padding: 8px; border-radius: 5px;">Days 31-60: Implementation Phase</h6>
                <p>${plan.phase2}</p>
                <ul>
                    <li>Deploy selected security tools</li>
                    <li>Begin staff training programs</li>
                    <li>Implement monitoring and alerting</li>
                </ul>
            </div>
            
            <div style="margin: 20px 0;">
                <h6 style="background: #27ae60; color: white; padding: 8px; border-radius: 5px;">Days 61-90: Optimization Phase</h6>
                <p>${plan.phase3}</p>
                <ul>
                    <li>Conduct security assessment</li>
                    <li>Refine processes and procedures</li>
                    <li>Plan next phase improvements</li>
                </ul>
            </div>
            
            <h5>Success Metrics:</h5>
            <ul>
                <li>Reduce security incidents by 70%</li>
                <li>Achieve 95% training completion rate</li>
                <li>Implement 90% of planned security controls</li>
                <li>Pass compliance audit with 85% score</li>
            </ul>
        </div>
    `;
    
    document.getElementById('implementation-plan-result').innerHTML = result;
    document.getElementById('implementation-plan-result').style.display = 'block';
}

// Security Budget Calculator
function calculateSecurityBudget() {
    const hrStaff = parseInt(document.getElementById('hr-staff-count').value) || 1;
    const systemUsers = parseInt(document.getElementById('system-users').value) || 1;
    const priorityLevel = document.getElementById('priority-level').value;
    
    const baseCosts = {
        standard: { perStaff: 150, perUser: 25, tools: 5000 },
        enhanced: { perStaff: 300, perUser: 45, tools: 15000 },
        premium: { perStaff: 500, perUser: 75, tools: 35000 }
    };
    
    const costs = baseCosts[priorityLevel];
    const staffCost = hrStaff * costs.perStaff;
    const userCost = systemUsers * costs.perUser;
    const toolsCost = costs.tools;
    const totalCost = staffCost + userCost + toolsCost;
    
    const result = `
        <h4>Recommended Annual Security Budget</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <h5>${priorityLevel.charAt(0).toUpperCase() + priorityLevel.slice(1)} Security Package</h5>
            
            <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                <thead style="background: #34495e; color: white;">
                    <tr>
                        <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Cost Category</th>
                        <th style="padding: 10px; border: 1px solid #ddd; text-align: right;">Annual Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd;">HR Staff Training & Tools (${hrStaff} staff)</td>
                        <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">$${staffCost.toLocaleString()}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd;">System User Licenses (${systemUsers} users)</td>
                        <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">$${userCost.toLocaleString()}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd;">Security Tools & Infrastructure</td>
                        <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">$${toolsCost.toLocaleString()}</td>
                    </tr>
                    <tr style="background: #ecf0f1; font-weight: bold;">
                        <td style="padding: 8px; border: 1px solid #ddd;">Total Annual Investment</td>
                        <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">$${totalCost.toLocaleString()}</td>
                    </tr>
                </tbody>
            </table>
            
            <h5>What's Included:</h5>
            <ul>
                ${priorityLevel === 'standard' ? 
                    '<li>Basic MFA and password management</li><li>Free security tools and training</li><li>Essential monitoring and backup</li>' :
                    priorityLevel === 'enhanced' ?
                    '<li>Advanced MFA and privileged access</li><li>Professional security tools</li><li>Comprehensive training and simulation</li><li>Enhanced monitoring and incident response</li>' :
                    '<li>Enterprise-grade security suite</li><li>24/7 monitoring and SOC services</li><li>Advanced threat detection and response</li><li>Executive security coaching</li><li>Compliance automation tools</li>'
                }
            </ul>
            
            <p style="margin-top: 15px; padding: 15px; background: #d4edda; border-radius: 8px;">
                <strong>Recommendation:</strong> Start with ${priorityLevel} package and scale based on results. 
                Average ROI for HR cybersecurity investments is 300-500% within first year.
            </p>
        </div>
    `;
    
    document.getElementById('budget-calculation-result').innerHTML = result;
    document.getElementById('budget-calculation-result').style.display = 'block';
}

// Enhanced simulation functions
function runPhishingSimulation() {
    const checkedBoxes = document.querySelectorAll('.checklist-checkbox:checked').length;
    const totalBoxes = document.querySelectorAll('.checklist-checkbox').length;
    const score = Math.round((checkedBoxes / totalBoxes) * 100);
    
    // Update progress bar
    const progressFill = document.getElementById('phishing-progress');
    progressFill.style.width = `${score}%`;
    progressFill.textContent = `${score}% Complete`;
    
    let result = '';
    if (score === 100) {
        result = `
            <h4 style="color: #27ae60;">🎉 Perfect Score! Excellent Phishing Detection!</h4>
            <p>You identified all the red flags in this phishing email:</p>
            <ul>
                <li>✅ Suspicious domain name variation</li>
                <li>✅ Urgency tactics to pressure quick action</li>
                <li>✅ Generic, impersonal greeting</li>
                <li>✅ Shortened URL hiding real destination</li>
                <li>✅ Threat of account suspension</li>
            </ul>
            <div style="background: #d4edda; padding: 15px; border-radius: 8px; margin-top: 15px;">
                <strong>Recommended Action:</strong> Report this email to IT security immediately and delete it without clicking any links.
            </div>
        `;
        progressFill.style.background = '#27ae60';
    } else if (score >= 60) {
        result = `
            <h4 style="color: #f39c12;">⚠️ Good Detection, But Missing Some Red Flags</h4>
            <p>You caught ${checkedBoxes} out of ${totalBoxes} phishing indicators. Review the ones you missed:</p>
            <div style="background: #fff3cd; padding: 15px; border-radius: 8px; margin-top: 15px;">
                <strong>Improvement Tip:</strong> Always verify sender authenticity and look for multiple suspicious elements before trusting an email.
            </div>
        `;
    } else {
        result = `
            <h4 style="color: #e74c3c;">🚨 High Risk - Additional Training Needed</h4>
            <p>You only identified ${checkedBoxes} out of ${totalBoxes} warning signs. This email would likely succeed in a real attack.</p>
            <div style="background: #f8d7da; padding: 15px; border-radius: 8px; margin-top: 15px;">
                <strong>Urgent Action:</strong> Schedule immediate phishing awareness training and practice with more examples.
            </div>
        `;
    }
    
    document.getElementById('phishing-result').innerHTML = result;
    document.getElementById('phishing-result').style.display = 'block';
}

function runPasswordAudit() {
    const passwords = [
        'password123', 'admin', 'qwerty', '123456', 'welcome', 'company2024', 'hr123', 'letmein'
    ];
    
    let auditResults = '<h4>Password Strength Audit Results</h4><div style="margin: 15px 0;">';
    let weakPasswords = 0;
    
    passwords.forEach(pass => {
        const strength = analyzePasswordStrength(pass);
        let color = strength.score >= 7 ? '#27ae60' : strength.score >= 4 ? '#f39c12' : '#e74c3c';
        if (strength.score < 5) weakPasswords++;
        
        auditResults += `
            <div style="background: #f8f9fa; margin: 8px 0; padding: 10px; border-left: 4px solid ${color}; border-radius: 5px;">
                <strong>Password:</strong> ${pass} | <strong>Strength:</strong> ${strength.level} (${strength.score}/10)
            </div>
        `;
    });
    
    auditResults += '</div>';
    
    const riskLevel = weakPasswords / passwords.length;
    let riskColor, riskText, recommendations;
    
    if (riskLevel > 0.7) {
        riskColor = '#e74c3c';
        riskText = 'CRITICAL RISK';
        recommendations = 'Immediate password policy enforcement required. Deploy password manager organization-wide.';
    } else if (riskLevel > 0.4) {
        riskColor = '#f39c12';
        riskText = 'HIGH RISK';
        recommendations = 'Implement stronger password policies and provide training on secure password creation.';
    } else {
        riskColor = '#27ae60';
        riskText = 'LOW RISK';
        recommendations = 'Maintain current password standards and continue regular auditing.';
    }
    
    auditResults += `
        <div style="background: white; padding: 20px; border: 2px solid ${riskColor}; border-radius: 10px; margin-top: 20px;">
            <h5 style="color: ${riskColor};">Risk Assessment: ${riskText}</h5>
            <p><strong>Weak Passwords Found:</strong> ${weakPasswords} out of ${passwords.length} (${Math.round(riskLevel * 100)}%)</p>
            <p><strong>Recommendation:</strong> ${recommendations}</p>
        </div>
    `;
    
    document.getElementById('password-result').innerHTML = auditResults;
    document.getElementById('password-result').style.display = 'block';
}

function runBreachResponseSimulation() {
    const steps = [
        "🚨 IMMEDIATE (0-15 minutes): Contain the incident",
        "🔍 ASSESS (15-30 minutes): Determine scope and impact",
        "📞 NOTIFY (30-60 minutes): Alert stakeholders and authorities",
        "🛠️ MITIGATE (1-4 hours): Implement corrective actions", 
        "📋 DOCUMENT (Ongoing): Record all actions taken",
        "🔄 RECOVER (Hours to days): Restore normal operations",
        "📚 LEARN (Post-incident): Conduct lessons learned review"
    ];
    
    const detailedActions = {
        "Contain": [
            "Immediately recall the email if possible",
            "Identify all recipients of the erroneous email",
            "Disable any compromised accounts",
            "Preserve evidence for investigation"
        ],
        "Assess": [
            "Catalog what data was exposed (salary information)",
            "Determine number of affected employees",
            "Evaluate potential business and legal impact",
            "Check if external recipients have responded"
        ],
        "Notify": [
            "Inform HR management and legal team",
            "Notify IT security and compliance teams",
            "Consider regulatory notification requirements",
            "Prepare communication for affected employees"
        ],
        "Mitigate": [
            "Contact external recipients to request deletion",
            "Send corrective communication if necessary",
            "Implement additional email controls",
            "Review and strengthen data handling procedures"
        ]
    };
    
    let result = `
        <h4>🚨 Data Breach Response Simulation Results</h4>
        <div style="background: #fff5f5; border: 2px solid #e53e3e; border-radius: 10px; padding: 20px;">
            <h5>Incident Response Timeline:</h5>
            <ol>
                ${steps.map(step => `<li style="margin: 8px 0; padding: 5px;">${step}</li>`).join('')}
            </ol>
            
            <h5 style="margin-top: 20px;">Detailed Actions by Phase:</h5>
    `;
    
    Object.entries(detailedActions).forEach(([phase, actions]) => {
        result += `
            <div style="background: #f8f9fa; margin: 10px 0; padding: 15px; border-radius: 8px;">
                <h6>${phase} Phase:</h6>
                <ul>
                    ${actions.map(action => `<li>${action}</li>`).join('')}
                </ul>
            </div>
        `;
    });
    
    result += `
            <div style="background: #d4edda; padding: 15px; border-radius: 8px; margin-top: 15px;">
                <h6>Key Success Factors:</h6>
                <ul>
                    <li>Speed of response (target: <30 minutes initial response)</li>
                    <li>Clear communication to all stakeholders</li>
                    <li>Thorough documentation for compliance</li>
                    <li>Follow-up to prevent recurrence</li>
                </ul>
            </div>
        </div>
    `;
    
    document.getElementById('breach-response-result').innerHTML = result;
    document.getElementById('breach-response-result').style.display = 'block';
}

function runAccessReview() {
    const employees = [
        { name: 'John Doe', role: 'HR Manager', access: ['HRIS', 'Payroll', 'Employee Records', 'Admin Panel'], status: 'Active', lastLogin: '2024-11-26', department: 'Human Resources' },
        { name: 'Jane Smith', role: 'HR Assistant', access: ['HRIS', 'Employee Records'], status: 'Active', lastLogin: '2024-11-27', department: 'Human Resources' },
        { name: 'Mike Johnson', role: 'Former Employee', access: ['HRIS', 'Payroll'], status: 'Terminated', lastLogin: '2024-10-15', department: 'Human Resources' },
        { name: 'Sarah Williams', role: 'Intern', access: ['HRIS', 'Payroll', 'Admin Panel'], status: 'Active', lastLogin: '2024-11-25', department: 'Human Resources' },
        { name: 'David Brown', role: 'IT Support', access: ['Admin Panel', 'System Logs'], status: 'Active', lastLogin: '2024-11-20', department: 'IT' },
        { name: 'Lisa Davis', role: 'Finance Manager', access: ['Payroll'], status: 'Active', lastLogin: '2024-11-27', department: 'Finance' }
    ];
    
    let criticalFindings = [];
    let warnings = [];
    let recommendations = [];
    
    employees.forEach(emp => {
        // Critical findings
        if (emp.status === 'Terminated') {
            criticalFindings.push(`🚨 CRITICAL: ${emp.name} (${emp.role}) still has active access despite termination`);
        }
        
        // Check for excessive privileges
        if (emp.role === 'Intern' && emp.access.includes('Admin Panel')) {
            criticalFindings.push(`🚨 CRITICAL: ${emp.name} (${emp.role}) has inappropriate admin access`);
        }
        
        if (emp.role === 'Intern' && emp.access.includes('Payroll')) {
            warnings.push(`⚠️ WARNING: ${emp.name} (${emp.role}) has payroll access - review if necessary`);
        }
        
        // Check for stale accounts
        const lastLoginDate = new Date(emp.lastLogin);
        const thirtyDaysAgo = new Date();
        thirtyDaysAgo.setDate(thirtyDaysAgo.getDate() - 30);
        
        if (lastLoginDate < thirtyDaysAgo && emp.status === 'Active') {
            warnings.push(`⚠️ WARNING: ${emp.name} hasn't logged in for over 30 days`);
        }
        
        // Cross-department access review
        if (emp.department !== 'Human Resources' && emp.access.includes('Employee Records')) {
            warnings.push(`⚠️ WARNING: ${emp.name} from ${emp.department} has HR data access`);
        }
    });
    
    // Generate recommendations
    if (criticalFindings.length > 0) {
        recommendations.push("Immediately disable accounts for terminated employees");
        recommendations.push("Remove excessive privileges from intern accounts");
    }
    if (warnings.length > 0) {
        recommendations.push("Implement quarterly access reviews");
        recommendations.push("Set up automated alerts for long-dormant accounts");
    }
    recommendations.push("Implement role-based access control (RBAC) framework");
    recommendations.push("Regular manager attestation of team member access needs");
    
    let riskScore = (criticalFindings.length * 10) + (warnings.length * 3);
    let riskLevel, riskColor;
    
    if (riskScore >= 20) {
        riskLevel = "CRITICAL";
        riskColor = "#dc3545";
    } else if (riskScore >= 10) {
        riskLevel = "HIGH";
        riskColor = "#fd7e14";
    } else if (riskScore >= 5) {
        riskLevel = "MEDIUM";
        riskColor = "#ffc107";
    } else {
        riskLevel = "LOW";
        riskColor = "#28a745";
    }
    
    let result = `
        <h4>Access Control Review Results</h4>
        <div style="background: white; border: 2px solid ${riskColor}; border-radius: 10px; padding: 20px;">
            <h5 style="color: ${riskColor};">Risk Level: ${riskLevel} (Score: ${riskScore})</h5>
            
            <div style="margin: 20px 0;">
                <h6>📊 Access Review Summary:</h6>
                <table style="width: 100%; border-collapse: collapse; margin: 10px 0; font-size: 12px;">
                    <thead style="background: #f8f9fa;">
                        <tr>
                            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Name</th>
                            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Role</th>
                            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Access Level</th>
                            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Status</th>
                            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Last Login</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${employees.map(emp => {
                            let statusColor = emp.status === 'Terminated' ? '#dc3545' : '#28a745';
                            return `
                                <tr>
                                    <td style="padding: 6px; border: 1px solid #ddd;">${emp.name}</td>
                                    <td style="padding: 6px; border: 1px solid #ddd;">${emp.role}</td>
                                    <td style="padding: 6px; border: 1px solid #ddd;">${emp.access.join(', ')}</td>
                                    <td style="padding: 6px; border: 1px solid #ddd; color: ${statusColor};">${emp.status}</td>
                                    <td style="padding: 6px; border: 1px solid #ddd;">${emp.lastLogin}</td>
                                </tr>
                            `;
                        }).join('')}
                    </tbody>
                </table>
            </div>
    `;
    
    if (criticalFindings.length > 0) {
        result += `
            <div style="background: #f8d7da; border: 1px solid #f5c6cb; padding: 15px; border-radius: 8px; margin: 10px 0;">
                <h6>🚨 Critical Issues (Immediate Action Required):</h6>
                <ul>
                    ${criticalFindings.map(finding => `<li>${finding}</li>`).join('')}
                </ul>
            </div>
        `;
    }
    
    if (warnings.length > 0) {
        result += `
            <div style="background: #fff3cd; border: 1px solid #ffeaa7; padding: 15px; border-radius: 8px; margin: 10px 0;">
                <h6>⚠️ Warnings (Review Required):</h6>
                <ul>
                    ${warnings.map(warning => `<li>${warning}</li>`).join('')}
                </ul>
            </div>
        `;
    }
    
    result += `
            <div style="background: #d4edda; border: 1px solid #c3e6cb; padding: 15px; border-radius: 8px; margin: 10px 0;">
                <h6>💡 Recommendations:</h6>
                <ol>
                    ${recommendations.map(rec => `<li>${rec}</li>`).join('')}
                </ol>
            </div>
        </div>
    `;
    
    document.getElementById('access-result').innerHTML = result;
    document.getElementById('access-result').style.display = 'block';
}

function runIncidentResponse() {
    const scenarios = [
        {
            type: "Data Breach",
            description: "Unauthorized access to employee database detected",
            severity: "HIGH",
            timeToResolve: "2-4 hours"
        },
        {
            type: "Ransomware Attack",
            description: "HR systems encrypted by malicious software",
            severity: "CRITICAL", 
            timeToResolve: "24-72 hours"
        },
        {
            type: "Phishing Success",
            description: "Employee credentials compromised through phishing email",
            severity: "MEDIUM",
            timeToResolve: "1-2 hours"
        }
    ];
    
    const randomScenario = scenarios[Math.floor(Math.random() * scenarios.length)];
    
    const responseSteps = {
        "Data Breach": [
            "Isolate affected systems immediately",
            "Identify scope of data accessed",
            "Notify legal and compliance teams",
            "Assess regulatory notification requirements",
            "Implement additional monitoring",
            "Conduct forensic investigation",
            "Review access controls and permissions"
        ],
        "Ransomware Attack": [
            "Disconnect systems from network",
            "Activate backup systems",
            "Do NOT pay ransom - contact authorities",
            "Assess backup integrity",
            "Notify law enforcement and cyber insurance",
            "Begin recovery from clean backups",
            "Implement enhanced endpoint protection"
        ],
        "Phishing Success": [
            "Immediately reset compromised credentials",
            "Check for unauthorized access or changes",
            "Scan systems for malware",
            "Review recent account activity",
            "Notify affected employees",
            "Conduct additional security training",
            "Implement additional email security controls"
        ]
    };
    
    const steps = responseSteps[randomScenario.type];
    let severityColor = randomScenario.severity === 'CRITICAL' ? '#dc3545' : 
                        randomScenario.severity === 'HIGH' ? '#fd7e14' : '#ffc107';
    
    const result = `
        <h4>Incident Response Simulation</h4>
        <div style="background: white; border: 2px solid ${severityColor}; border-radius: 10px; padding: 20px;">
            <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                <h5 style="color: ${severityColor};">🚨 ${randomScenario.type} - ${randomScenario.severity} Priority</h5>
                <p><strong>Scenario:</strong> ${randomScenario.description}</p>
                <p><strong>Estimated Resolution Time:</strong> ${randomScenario.timeToResolve}</p>
            </div>
            
            <h5>📋 Response Checklist:</h5>
            <div style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
                <ol>
                    ${steps.map((step, index) => `
                        <li style="margin: 8px 0; padding: 8px; background: white; border-radius: 5px; border-left: 4px solid ${index < 3 ? '#dc3545' : index < 5 ? '#ffc107' : '#28a745'};">
                            ${step} ${index < 3 ? '⚡ (Immediate)' : index < 5 ? '🕐 (Short-term)' : '📊 (Follow-up)'}
                        </li>
                    `).join('')}
                </ol>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-top: 20px;">
                <div style="background: #e3f2fd; padding: 15px; border-radius: 8px;">
                    <h6>📞 Who to Contact:</h6>
                    <ul>
                        <li>IT Security Team</li>
                        <li>Legal Department</li>
                        <li>Senior Management</li>
                        <li>External Cyber Insurance</li>
                        ${randomScenario.severity === 'CRITICAL' ? '<li>Law Enforcement (if applicable)</li>' : ''}
                    </ul>
                </div>
                <div style="background: #f3e5f5; padding: 15px; border-radius: 8px;">
                    <h6>📝 Documentation Required:</h6>
                    <ul>
                        <li>Timeline of events</li>
                        <li>Actions taken</li>
                        <li>Systems affected</li>
                        <li>Recovery steps</li>
                        <li>Lessons learned</li>
                    </ul>
                </div>
            </div>
            
            <div style="background: #d4edda; padding: 15px; border-radius: 8px; margin-top: 15px;">
                <h6>🎯 Success Criteria:</h6>
                <ul>
                    <li>Incident contained within target timeframe</li>
                    <li>All stakeholders properly notified</li>
                    <li>Complete documentation maintained</li>
                    <li>System integrity restored</li>
                    <li>Preventive measures implemented</li>
                </ul>
            </div>
        </div>
    `;
    
    document.getElementById('incident-result').innerHTML = result;
    document.getElementById('incident-result').style.display = 'block';
}

// Compliance Assessment Function
function assessCompliance() {
    const checkedBoxes = document.querySelectorAll('.compliance-checkbox:checked').length;
    const totalBoxes = document.querySelectorAll('.compliance-checkbox').length;
    const score = Math.round((checkedBoxes / totalBoxes) * 100);
    
    let complianceLevel, color, recommendations;
    
    if (score >= 90) {
        complianceLevel = "EXCELLENT";
        color = "#28a745";
        recommendations = "Outstanding compliance posture. Maintain current practices and conduct regular reviews.";
    } else if (score >= 70) {
        complianceLevel = "GOOD";
        color = "#ffc107";
        recommendations = "Good compliance foundation. Address missing elements to achieve full compliance.";
    } else if (score >= 50) {
        complianceLevel = "NEEDS IMPROVEMENT";
        color = "#fd7e14";
        recommendations = "Significant compliance gaps identified. Immediate action required to meet regulatory requirements.";
    } else {
        complianceLevel = "CRITICAL";
        color = "#dc3545";
        recommendations = "Critical compliance deficiencies. Organization may face regulatory penalties. Urgent remediation required.";
    }
    
    const result = `
        <h4>GDPR/Data Protection Compliance Assessment</h4>
        <div style="background: white; border: 2px solid ${color}; border-radius: 10px; padding: 20px;">
            <h5 style="color: ${color};">Compliance Score: ${score}% - ${complianceLevel}</h5>
            
            <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin: 15px 0;">
                <h6>Assessment Summary:</h6>
                <p>✅ <strong>Completed Requirements:</strong> ${checkedBoxes} of ${totalBoxes}</p>
                <p>⚠️ <strong>Missing Requirements:</strong> ${totalBoxes - checkedBoxes}</p>
                <p><strong>Overall Status:</strong> ${recommendations}</p>
            </div>
            
            <div style="background: #e3f2fd; padding: 15px; border-radius: 8px; margin: 15px 0;">
                <h6>🎯 Priority Actions:</h6>
                <ol>
                    ${score < 100 ? '<li>Complete missing compliance requirements immediately</li>' : ''}
                    ${score < 80 ? '<li>Conduct Data Protection Impact Assessment (DPIA)</li>' : ''}
                    ${score < 70 ? '<li>Establish clear data processing legal basis</li>' : ''}
                    ${score < 60 ? '<li>Implement breach notification procedures</li>' : ''}
                    <li>Schedule quarterly compliance review meetings</li>
                    <li>Provide compliance training to all HR staff</li>
                </ol>
            </div>
            
            <div style="background: #fff3cd; padding: 15px; border-radius: 8px; margin: 15px 0;">
                <h6>⚖️ Regulatory Risk Assessment:</h6>
                <p><strong>Risk of Penalties:</strong> ${score < 60 ? 'HIGH' : score < 80 ? 'MEDIUM' : 'LOW'}</p>
                <p><strong>Potential Fine Range:</strong> ${score < 60 ? 'Up to 4% of annual turnover' : score < 80 ? 'Up to 2% of annual turnover' : 'Minimal regulatory risk'}</p>
                <p><strong>Recommended Review Frequency:</strong> ${score < 70 ? 'Monthly' : score < 90 ? 'Quarterly' : 'Semi-annually'}</p>
            </div>
            
            <div style="background: #d4edda; padding: 15px; border-radius: 8px;">
                <h6>📚 Resources for Improvement:</h6>
                <ul>
                    <li>GDPR compliance templates and checklists</li>
                    <li>Data protection policy framework</li>
                    <li>Employee training materials</li>
                    <li>Incident response procedures</li>
                    <li>Regular compliance monitoring tools</li>
                </ul>
            </div>
        </div>
    `;
    
    document.getElementById('compliance-result').innerHTML = result;
    document.getElementById('compliance-result').style.display = 'block';
}

// Enhanced password strength analysis
function analyzePasswordStrength(password) {
    let score = 0;
    let level = 'Very Weak';
    
    // Length scoring
    if (password.length >= 8) score += 1;
    if (password.length >= 12) score += 1;
    if (password.length >= 16) score += 1;
    
    // Character type scoring
    if (/[a-z]/.test(password)) score += 1;
    if (/[A-Z]/.test(password)) score += 1;
    if (/[0-9]/.test(password)) score += 1;
    if (/[^A-Za-z0-9]/.test(password)) score += 2;
    
    // Pattern checks
    if (!/(.)\1{2,}/.test(password)) score += 1; // No repeated characters
    if (!/^[a-zA-Z]+$/.test(password)) score += 1; // Not just letters
    
    // Determine level
    if (score >= 8) level = 'Strong';
    else if (score >= 6) level = 'Good';
    else if (score >= 4) level = 'Fair';
    else if (score >= 2) level = 'Weak';
    
    return { score, level };
}

// Enhanced checklist progress tracking
function updateChecklistProgress() {
    const checkboxes = document.querySelectorAll('.checklist-checkbox:checked');
    const totalItems = document.querySelectorAll('.checklist-checkbox').length;
    checklistProgress = (checkboxes.length / totalItems) * 100;
    
    const progressFill = document.querySelector('.progress-fill');
    if (progressFill) {
        progressFill.style.width = `${checklistProgress}%`;
        progressFill.textContent = `${Math.round(checklistProgress)}% Complete`;
        
        if (checklistProgress === 100) {
            progressFill.style.background = '#27ae60';
            showCompletionMessage();
        }
    }
}

function showCompletionMessage() {
    const message = document.createElement('div');
    message.className = 'completion-message';
    message.innerHTML = `
        <h4>🎉 Congratulations!</h4>
        <p>You've completed all security checklist items. Your organization is now better protected against cyber threats!</p>
        <p><strong>Next Steps:</strong> Implement these security measures in your organization and conduct regular reviews.</p>
    `;
    message.style.cssText = `
        background: #d4edda;
        border: 2px solid #28a745;
        border-radius: 10px;
        padding: 20px;
        margin: 20px 0;
        text-align: center;
        animation: slideIn 0.5s ease-in-out;
    `;
    
    const progressTracker = document.querySelector('.progress-tracker');
    if (progressTracker) {
        progressTracker.appendChild(message);
    }
}

// Initialize slide interactivity
function initializeSlideInteractivity() {
    // Risk assessment checkboxes
    document.querySelectorAll('.risk-checkbox').forEach(checkbox => {
        checkbox.onchange = function() {
            // Update visual feedback
            this.parentElement.style.opacity = this.checked ? '1' : '0.7';
        };
    });
    
    // MFA implementation checkboxes
    document.querySelectorAll('.mfa-checkbox').forEach(checkbox => {
        checkbox.onchange = updateMFAProgress;
    });
    
    // General checklist checkboxes
    document.querySelectorAll('.checklist-checkbox').forEach(checkbox => {
        checkbox.onchange = updateChecklistProgress;
    });
    
    // Add simulation button functionality
    document.querySelectorAll('.simulation-button').forEach(button => {
        if (!button.onclick) {
            button.onclick = function() {
                const simulationType = this.getAttribute('onclick');
                if (simulationType) {
                    eval(simulationType.replace('onclick=', '').replace('"', '').replace('"', ''));
                }
            };
        }
    });
}

// Quiz functionality with enhanced feedback
let selectedAnswers = {};

// Add click listeners to quiz options
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.addEventListener('click', function() {
            const questionId = this.closest('.question').id;
            const questionOptions = this.closest('.quiz-options').querySelectorAll('li');
            
            // Remove previous selections
            questionOptions.forEach(opt => opt.classList.remove('selected'));
            
            // Add selection to clicked option
            this.classList.add('selected');
            
            // Store the answer
            selectedAnswers[questionId] = this.dataset.answer;
        });
    });
    
    // Initialize first slide
    showSlide(0);
});

function submitQuiz() {
    if (Object.keys(selectedAnswers).length < 20) {
        alert('Please answer all 20 questions before submitting.');
        return;
    }

    let correctCount = 0;
    const corrections = [];

    // Enhanced question data with detailed explanations
    const questionData = {
        'q1': {
            correct: '68%',
            explanation: 'According to the 2024 Data Breach Investigations Report by Verizon, 68% of data breaches involve a human element, highlighting the critical importance of employee training and awareness in cybersecurity defense strategies.'
        },
        'q2': {
            correct: 'Regularly changing passwords and using multi-factor authentication',
            explanation: 'Strong password practices combined with MFA provide multiple layers of security. Even if a password is compromised, MFA prevents unauthorized access, reducing breach risk by up to 99.9%.'
        },
        'q3': {
            correct: 'Access points to data to know who accessed data, when, and for what purpose',
            explanation: 'Comprehensive access logging provides an audit trail that helps detect unauthorized activities, supports compliance requirements, and enables rapid incident response when security issues arise.'
        },
        'q4': {
            correct: 'Cyber security training course for every HR team member',
            explanation: 'HR teams handle highly sensitive employee data making them prime targets. Universal training ensures all team members can recognize threats and follow proper security protocols consistently.'
        },
        'q5': {
            correct: 'Ensure processes don\'t injure or inconvenience employees unnecessarily',
            explanation: 'Effective security measures must be user-friendly to ensure adoption. Overly burdensome security can lead to workarounds that actually decrease security posture.'
        },
        'q6': {
            correct: 'Multi-factor authentication with role-based access permissions',
            explanation: 'This combination implements both strong authentication (something you know + something you have) and the principle of least privilege, providing robust protection for sensitive HR systems.'
        },
        'q7': {
            correct: 'Regularly with quarterly refresher sessions',
            explanation: 'Cyber threats evolve rapidly, and human knowledge degrades over time. Regular training with quarterly refreshers keeps security awareness current and behavioral changes reinforced.'
        },
        'q8': {
            correct: 'Immediate deactivation of accounts',
            explanation: 'Delayed account deactivation creates a critical security window where former employees could access sensitive data. Immediate deactivation is essential for maintaining data security and compliance.'
        },
        'q9': {
            correct: 'Encrypt all sensitive HR data in transit and at rest',
            explanation: 'Encryption renders data unreadable to unauthorized parties even if intercepted. This is crucial for HR data containing PII, salary information, and other sensitive employee details.'
        },
        'q10': {
            correct: 'Regular monthly security assessments and ongoing monitoring',
            explanation: 'Regular assessments help identify vulnerabilities before attackers do. Monthly checks ensure security controls remain effective and new risks are quickly identified and addressed.'
        },
        'q11': {
            correct: 'Automated vulnerability scanning and real-time threat detection',
            explanation: 'Automation provides 24/7 monitoring capabilities that humans cannot match, enabling faster threat detection and response while reducing the burden on security teams.'
        },
        'q12': {
            correct: 'Open communication about security concerns and reporting',
            explanation: 'A culture of open communication enables early threat detection through employee reporting. Staff who feel safe reporting concerns without blame become valuable security sensors.'
        },
        'q13': {
            correct: 'Security Information and Event Management (SIEM) systems',
            explanation: 'SIEM systems aggregate and analyze security data across the organization, providing centralized monitoring, alerting, and incident response capabilities essential for modern cybersecurity.'
        },
        'q14': {
            correct: 'Built-in security features and enterprise-grade security',
            explanation: 'HR platforms with robust built-in security reduce implementation complexity and ensure professional-grade protection for sensitive employee data throughout the system lifecycle.'
        },
        'q15': {
            correct: 'Balance security monitoring with employee privacy rights',
            explanation: 'Effective monitoring must comply with privacy laws and employee rights while providing necessary security oversight. This balance maintains trust while protecting organizational assets.'
        },
        'q16': {
            correct: 'Leadership commitment and employee involvement',
            explanation: 'Cybersecurity culture requires top-down commitment from leadership and bottom-up engagement from employees. Both elements are necessary for creating lasting behavioral change.'
        },
        'q17': {
            correct: 'Limited cybersecurity expertise and budget constraints',
            explanation: 'Many African organizations face resource constraints that require creative, cost-effective security solutions and regional cooperation to address cybersecurity challenges effectively.'
        },
        'q18': {
            correct: 'Regular drills and exercises with escalation procedures',
            explanation: 'Practice through drills ensures incident response procedures work effectively under pressure and that all team members know their roles during actual security incidents.'
        },
        'q19': {
            correct: 'Conduct security assessments for all third-party services',
            explanation: 'Third-party vendors can introduce security vulnerabilities into HR systems. Regular assessments ensure vendors maintain appropriate security standards and comply with your requirements.'
        },
        'q20': {
            correct: 'Safeguard data while ensuring smooth workflow operations',
            explanation: 'The ultimate goal is achieving strong security without significantly disrupting business operations. This balance maximizes both security effectiveness and organizational productivity.'
        }
    };

    // Grade the quiz and collect corrections
    Object.keys(selectedAnswers).forEach(questionId => {
        const userAnswer = selectedAnswers[questionId];
        const questionElement = document.getElementById(questionId);
        const options = questionElement.querySelectorAll('.quiz-options li');
        
        if (userAnswer === 'correct') {
            correctCount++;
            // Highlight correct answer
            options.forEach(option => {
                if (option.dataset.answer === 'correct') {
                    option.classList.add('correct');
                }
            });
        } else {
            // Highlight wrong answer and correct answer
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

    // Display enhanced results
    const percentage = (correctCount / 20) * 100;
    const resultDiv = document.getElementById('quiz-result');
    const correctionsDiv = document.getElementById('corrections');
    
    let resultClass = 'needs-improvement';
    let resultMessage = `You scored ${correctCount}/20 (${percentage}%). `;
    let actionPlan = '';
    
    if (percentage >= 85) {
        resultClass = 'excellent';
        resultMessage += 'Outstanding! You have excellent knowledge of HR cybersecurity best practices.';
        actionPlan = 'You are ready to lead cybersecurity initiatives in your organization and mentor others.';
    } else if (percentage >= 70) {
        resultClass = 'good';
        resultMessage += 'Good work! You understand most cybersecurity concepts.';
        actionPlan = 'Review the missed areas and consider additional training on specific topics to strengthen your expertise.';
    } else {
        resultMessage += 'Additional study is recommended to strengthen your cybersecurity knowledge.';
        actionPlan = 'Focus on the fundamental concepts and consider retaking this training after reviewing the materials.';
    }

    resultDiv.className = `quiz-result ${resultClass}`;
    resultDiv.innerHTML = `
        <p>${resultMessage}</p>
        <p><strong>Next Steps:</strong> ${actionPlan}</p>
    `;
    resultDiv.style.display = 'block';

    // Show enhanced corrections if there are any wrong answers
    if (corrections.length > 0) {
        let correctionsHTML = '<p><strong>Review these areas to improve your understanding:</strong></p>';
        corrections.forEach((correction, index) => {
            const questionNum = correction.question.replace('q', '');
            correctionsHTML += `
                <div class="correction-item">
                    <strong>Question ${questionNum}:</strong><br>
                    <span class="correct-answer">✓ Correct Answer: ${correction.correct}</span><br>
                    <em>📚 Detailed Explanation: ${correction.explanation}</em>
                </div>
            `;
        });
        
        document.getElementById('correction-content').innerHTML = correctionsHTML;
        correctionsDiv.style.display = 'block';
    }

    // Generate personalized learning recommendations
    generateLearningRecommendations(corrections, percentage);

    // Disable further quiz interaction
    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.style.pointerEvents = 'none';
    });
    
    document.querySelector('.submit-btn').disabled = true;
    document.querySelector('.submit-btn').textContent = 'Assessment Completed';
    
    quizCompleted = true;
}

function generateLearningRecommendations(corrections, score) {
    const recommendationsDiv = document.createElement('div');
    recommendationsDiv.className = 'learning-recommendations';
    recommendationsDiv.style.cssText = `
        background: #f8f9fa;
        border: 2px solid #6c757d;
        border-radius: 10px;
        padding: 20px;
        margin-top: 20px;
    `;
    
    let recommendations = '<h3>🎯 Personalized Learning Recommendations</h3>';
    
    if (score >= 85) {
        recommendations += `
            <ul>
                <li>Consider pursuing advanced cybersecurity certifications (CISSP, CISM)</li>
                <li>Lead cybersecurity awareness initiatives in your organization</li>
                <li>Stay updated with latest threat intelligence and industry reports</li>
                <li>Mentor junior HR professionals in cybersecurity best practices</li>
                <li>Participate in cybersecurity communities and conferences</li>
            </ul>
        `;
    } else if (score >= 70) {
        recommendations += `
            <ul>
                <li>Review specific areas where questions were missed</li>
                <li>Attend cybersecurity conferences and workshops</li>
                <li>Practice with additional security simulation exercises</li>
                <li>Join cybersecurity communities and forums for ongoing learning</li>
                <li>Consider foundational cybersecurity certifications</li>
            </ul>
        `;
    } else {
        recommendations += `
            <ul>
                <li>Retake this training course after reviewing all materials</li>
                <li>Enroll in foundational cybersecurity courses</li>
                <li>Work closely with IT security team to understand organizational practices</li>
                <li>Focus on understanding basic security principles and HR-specific risks</li>
                <li>Complete additional hands-on exercises and simulations</li>
            </ul>
        `;
    }
    
    // Add specific recommendations based on wrong answers
    if (corrections.length > 0) {
        recommendations += '<h4>📚 Specific Study Areas:</h4><ul>';
        corrections.forEach(correction => {
            if (correction.question.includes('q1') || correction.question.includes('q4')) {
                recommendations += '<li>Focus on security awareness and training fundamentals</li>';
            } else if (correction.question.includes('q6') || correction.question.includes('q8')) {
                recommendations += '<li>Study access control and identity management</li>';
            } else if (correction.question.includes('q9') || correction.question.includes('q14')) {
                recommendations += '<li>Learn about data protection and encryption</li>';
            }
        });
        recommendations += '</ul>';
    }
    
    recommendationsDiv.innerHTML = recommendations;
    document.getElementById('corrections').appendChild(recommendationsDiv);
}

// Enhanced keyboard navigation
document.addEventListener('keydown', function(event) {
    if (event.key === 'ArrowLeft') {
        changeSlide(-1);
    } else if (event.key === 'ArrowRight') {
        changeSlide(1);
    } else if (event.key === 'Home') {
        currentSlideIndex = 0;
        showSlide(currentSlideIndex);
    } else if (event.key === 'End') {
        currentSlideIndex = totalSlides - 1;
        showSlide(currentSlideIndex);
    }
});

// Enhanced touch/swipe support for mobile devices
let touchStartX = 0;
let touchEndX = 0;
let touchStartY = 0;
let touchEndY = 0;

document.addEventListener('touchstart', function(event) {
    touchStartX = event.changedTouches[0].screenX;
    touchStartY = event.changedTouches[0].screenY;
});

document.addEventListener('touchend', function(event) {
    touchEndX = event.changedTouches[0].screenX;
    touchEndY = event.changedTouches[0].screenY;
    handleSwipe();
});

function handleSwipe() {
    const swipeThreshold = 50;
    const swipeLength = touchEndX - touchStartX;
    const swipeHeight = Math.abs(touchEndY - touchStartY);
    
    // Only process horizontal swipes
    if (Math.abs(swipeLength) > swipeThreshold && swipeHeight < 100) {
        if (swipeLength > 0) {
            changeSlide(-1); // Swipe right = previous slide
        } else {
            changeSlide(1); // Swipe left = next slide
        }
    }
}

// Auto-save progress functionality
function saveProgress() {
    const progressData = {
        currentSlide: currentSlideIndex,
        completedSimulations: simulationResults,
        quizAnswers: selectedAnswers,
        checklistProgress: checklistProgress,
        timestamp: new Date().toISOString()
    };
    
    try {
        localStorage.setItem('hrCyberSecurityProgress', JSON.stringify(progressData));
    } catch (e) {
        console.warn('Could not save progress to localStorage:', e);
    }
}

function loadProgress() {
    try {
        const saved = localStorage.getItem('hrCyberSecurityProgress');
        if (saved) {
            const progressData = JSON.parse(saved);
            simulationResults = progressData.completedSimulations || {};
            checklistProgress = progressData.checklistProgress || 0;
        }
    } catch (e) {
        console.warn('Could not load progress from localStorage:', e);
    }
}

// Enhanced slide progress tracking
function updateSlideProgress() {
    const progress = ((currentSlideIndex + 1) / totalSlides) * 100;
    const slideCounter = document.querySelector('.slide-counter');
    if (slideCounter) {
        slideCounter.style.background = 
            `linear-gradient(90deg, rgba(52, 152, 219, 0.3) ${progress}%, rgba(255, 255, 255, 0.9) ${progress}%)`;
    }
}

// Save progress when leaving page
window.addEventListener('beforeunload', saveProgress);

// Periodic progress saving
setInterval(saveProgress, 30000); // Save every 30 seconds