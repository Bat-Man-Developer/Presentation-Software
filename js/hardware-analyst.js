// Hardware Security Analyst JS
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
        riskLevel = "SECURE HARDWARE";
        color = "#27ae60";
        recommendations = "Your hardware security foundation is strong. Focus on advanced side-channel mitigations and continuous supply chain auditing.";
    } else if (percentage >= 60) {
        riskLevel = "MODERATE RISK";
        color = "#f39c12";
        recommendations = "Good foundation, but gaps in physical security exist. Prioritize sealing debug ports and enabling Secure Boot.";
    } else {
        riskLevel = "CRITICAL HARDWARE RISK";
        color = "#e74c3c";
        recommendations = "Immediate action required! Devices are vulnerable to physical extraction and Evil Maid attacks.";
    }
    
    document.getElementById('risk-assessment-result').innerHTML = `
        <h4 style="color: ${color};">Hardware Security Score: ${percentage}% (${riskLevel})</h4>
        <p><strong>Assessment:</strong> ${recommendations}</p>
        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin-top: 10px;">
            <h5>Immediate Actions Needed:</h5>
            <ul>
                ${percentage < 80 ? '<li>Enable TPM 2.0 and Secure Boot across all endpoints</li>' : ''}
                ${percentage < 70 ? '<li>Implement tamper-evident seals on critical chassis</li>' : ''}
                ${percentage < 60 ? '<li>Disable JTAG and exposed UART interfaces on production units</li>' : ''}
                ${percentage < 50 ? '<li>Initiate hardware supply chain vendor audits</li>' : ''}
            </ul>
        </div>
    `;
    document.getElementById('risk-assessment-result').style.display = 'block';
}

// UART Analysis Validation
function analyzeSerialOutput() {
    const outputContent = document.getElementById('uart-output').value.toLowerCase();
    const requiredElements = [
        'u-boot', 'kernel', 'root shell'
    ];
    
    let score = 0;
    let feedback = [];
    
    requiredElements.forEach(element => {
        if (outputContent.includes(element)) {
            score += 33;
        } else {
            feedback.push(`Missed identifying: ${element}`);
        }
    });
    
    let result = `<h4>UART Analysis Score: ${Math.round(score)}%</h4>`;
    if (score >= 90) {
        result += "<p style='color: #27ae60;'>Excellent! You identified the bootloader, kernel, and a critical vulnerability (root shell).</p>";
    } else if (score >= 60) {
        result += "<p style='color: #f39c12;'>Good spot. Keep looking at the initialization sequence.</p>";
    } else {
        result += "<p style='color: #e74c3c;'>Needs improvement. Review the boot process markers carefully.</p>";
    }
    
    if (feedback.length > 0) {
        result += "<h5>Suggestions:</h5><ul>";
        feedback.forEach(item => {
            result += `<li>${item}</li>`;
        });
        result += "</ul>";
    }
    
    document.getElementById('uart-validation').innerHTML = result;
    document.getElementById('uart-validation').style.display = 'block';
}

// TPM Progress Tracking
function updateTPMProgress() {
    const checkedBoxes = document.querySelectorAll('.tpm-checkbox:checked').length;
    const totalBoxes = document.querySelectorAll('.tpm-checkbox').length;
    const progress = Math.round((checkedBoxes / totalBoxes) * 100);
    
    const progressFill = document.querySelector('#tpm-progress .progress-fill');
    if (progressFill) {
        progressFill.style.width = `${progress}%`;
        progressFill.textContent = `${progress}% Complete`;
        
        if (progress === 100) {
            progressFill.style.background = '#27ae60';
            progressFill.textContent = '✅ TPM Setup Ready!';
        }
    }
}

// Firmware Hash Verifier
function testFirmwareHash() {
    const hash = document.getElementById('firmware-hash-test').value.trim();
    if (!hash) {
        alert('Please enter a hash to verify');
        return;
    }
    
    let color, recommendations = [];
    let isHex = /^[0-9a-fA-F]+$/.test(hash);
    let score = 0;
    
    if (isHex && hash.length === 64) {
        score = 10;
        color = '#27ae60';
        recommendations.push('Valid SHA-256 Hash format detected.');
    } else if (isHex && hash.length === 32) {
        score = 4;
        color = '#e74c3c';
        recommendations.push('Warning: MD5 Hash detected. Cryptographically broken, do not use for firmware verification.');
    } else if (isHex && hash.length === 40) {
        score = 5;
        color = '#f39c12';
        recommendations.push('Warning: SHA-1 Hash detected. Vulnerable to collisions. Upgrade to SHA-256.');
    } else {
        score = 0;
        color = '#e74c3c';
        recommendations.push('Invalid hash format. Must be hexadecimal characters.');
    }
    
    const result = `
        <h4 style="color: ${color};">Integrity Check Result (${score}/10)</h4>
        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin-top: 10px;">
            <h5>Analysis Details:</h5>
            <p><strong>Length:</strong> ${hash.length} characters</p>
            ${recommendations.length > 0 ? '<h5>Security Feedback:</h5><ul>' + recommendations.map(r => `<li>${r}</li>`).join('') + '</ul>' : ''}
        </div>
    `;
    
    document.getElementById('hash-result').innerHTML = result;
    document.getElementById('hash-result').style.display = 'block';
}

// Hardware Lifecycle Plan Generator
function generateDeviceLifecyclePlan() {
    const plan = `
        <h4>Hardware Crypto Lifecycle Strategy</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <h5>Phase 1: Procurement & Provisioning</h5>
            <ul>
                <li>Verify FIPS 140-2 compliance on all SEDs/HSMs</li>
                <li>Clear factory EK certificates and take TPM ownership</li>
                <li>Flash verified baseline firmware</li>
            </ul>
            
            <h5>Phase 2: Deployment & Monitoring</h5>
            <ul>
                <li>Enforce Pre-Boot Authentication (PBA)</li>
                <li>Monitor chassis intrusion switch logs</li>
                <li>Conduct physical asset inventory quarterly</li>
            </ul>
            
            <h5>Phase 3: Decommissioning</h5>
            <ul>
                <li>Execute Instant Cryptographic Erasure (Crypto-Erase)</li>
                <li>Physically destroy failed SEDs/HSMs</li>
                <li>Revoke device certificates from PKI</li>
            </ul>
        </div>
    `;
    
    document.getElementById('lifecycle-plan-result').innerHTML = plan;
    document.getElementById('lifecycle-plan-result').style.display = 'block';
}

// Boot Log Analysis
function analyzeBootLogSample() {
    const analysis = `
        <h4>Secure Boot Analysis Results</h4>
        <div style="background: #fff3cd; padding: 15px; border-radius: 8px; border-left: 4px solid #e74c3c;">
            <h5>🚨 Security Violation Identified:</h5>
            <ol>
                <li><strong>Unauthorized Kernel Detected:</strong> "Problem loading X.509 certificate"</li>
                <li><strong>Signature Failure:</strong> "Kernel is not signed with trusted key"</li>
                <li><strong>System Halted:</strong> Secure Boot successfully prevented execution.</li>
            </ol>
            
            <h5>Analyst Recommended Actions:</h5>
            <ul>
                <li>Isolate the device; potential Evil Maid attack or malware.</li>
                <li>Extract the unsigned kernel binary for forensic analysis.</li>
                <li>Check physical tamper seals for signs of casing compromise.</li>
            </ul>
        </div>
    `;
    
    document.getElementById('log-analysis-result').innerHTML = analysis;
    document.getElementById('log-analysis-result').style.display = 'block';
}

// Hardware Audit Roadmap
function generateHardwareAuditRoadmap() {
    const roadmap = `
        <h4>Hardware Security Automation Roadmap</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <h5>Quarter 1: Foundation</h5>
            <ul>
                <li>Deploy CHIPSEC to audit SPI locks and SMM protections</li>
                <li>Create baseline firmware hashes</li>
                <li>Automate checking of TPM PCR states</li>
            </ul>
            
            <h5>Quarter 2: Advanced Verification</h5>
            <ul>
                <li>Automate firmware extraction using Flashrom</li>
                <li>Integrate binwalk into CI/CD for firmware analysis</li>
                <li>Scan for hardcoded credentials in device updates</li>
            </ul>
            
            <h5>Expected ROI:</h5>
            <p>• 100% visibility into platform security configurations</p>
            <p>• Prevention of firmware-level rootkits</p>
            <p>• Automated compliance reporting for NIST SP 800-193</p>
        </div>
    `;
    
    document.getElementById('automation-roadmap-result').innerHTML = roadmap;
    document.getElementById('automation-roadmap-result').style.display = 'block';
}

// Hardware Security ROI Calculator
function calculateHardwareSecurityROI() {
    const hrStaff = parseInt(document.getElementById('hr-staff-count').value) || 1;
    const priorityLevel = document.getElementById('priority-level').value;
    
    const baseCosts = {
        standard: { perStaff: 1000, tools: 2000 },
        enhanced: { perStaff: 2500, tools: 8000 },
        premium: { perStaff: 5000, tools: 25000 }
    };
    
    const costs = baseCosts[priorityLevel];
    const staffCost = hrStaff * costs.perStaff;
    const toolsCost = costs.tools;
    const totalCost = staffCost + toolsCost;
    
    const result = `
        <h4>Recommended Hardware Lab Budget</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <h5>${priorityLevel.charAt(0).toUpperCase() + priorityLevel.slice(1)} Analyst Lab</h5>
            
            <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                <thead style="background: #34495e; color: white;">
                    <tr>
                        <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Cost Category</th>
                        <th style="padding: 10px; border: 1px solid #ddd; text-align: right;">Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd;">Analyst Toolkits (${hrStaff} staff)</td>
                        <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">$${staffCost.toLocaleString()}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd;">Shared Lab Equipment (Oscilloscopes, Decapsulation)</td>
                        <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">$${toolsCost.toLocaleString()}</td>
                    </tr>
                    <tr style="background: #ecf0f1; font-weight: bold;">
                        <td style="padding: 8px; border: 1px solid #ddd;">Total Setup Investment</td>
                        <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">$${totalCost.toLocaleString()}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    `;
    
    document.getElementById('budget-calculation-result').innerHTML = result;
    document.getElementById('budget-calculation-result').style.display = 'block';
}

// Hardware Trojan Simulation
function runHardwareTrojanSimulation() {
    let result = `
        <h4 style="color: #27ae60;">🔍 Component Audit Results</h4>
        <p>Your visual and electrical inspection detected:</p>
        <ul>
            <li>✅ Main CPU matches vendor specs and silkscreen font.</li>
            <li>🚨 <strong>ANOMALY:</strong> An undocumented SPI flash chip is wired parallel to the main boot ROM.</li>
            <li>🚨 <strong>ANOMALY:</strong> Conformal coating under the Ethernet controller has been melted and reapplied.</li>
        </ul>
        <div style="background: #f8d7da; padding: 15px; border-radius: 8px; margin-top: 15px;">
            <strong>Analyst Conclusion:</strong> Probable supply chain interdiction. The secondary flash chip is likely an implant designed to patch the bootloader at runtime. Quarantine the device.
        </div>
    `;
    document.getElementById('phishing-result').innerHTML = result;
    document.getElementById('phishing-result').style.display = 'block';
}

function runPhysicalBreachSimulation() {
    const steps = [
        "🚨 IMMEDIATE: Seize the device and isolate it from all networks",
        "🔍 INSPECT: Check tamper seals with UV light to confirm removal/replacement",
        "💾 ACQUIRE: Take a full forensic image of the drive (if unlocked)",
        "🛠️ ANALYZE: Boot into a clean, secure USB environment and dump the SPI flash", 
        "📋 VERIFY: Compare firmware hashes against known good baselines",
        "🔄 RECOVER: If tampered, scrap the motherboard. Issue new hardware."
    ];
    
    let result = `
        <h4>🚨 Evil Maid Attack Response</h4>
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

function runHardwareIncidentResponse() {
    const randomScenario = {
        type: "Chassis Intrusion",
        description: "IPMI log reports server chassis was opened at 2:00 AM",
        severity: "CRITICAL"
    };
    
    const steps = [
        "Review datacenter CCTV footage for 2:00 AM",
        "Check system logs for unauthorized USB insertions (Rubber Ducky)",
        "Audit TPM PCR registers for unexpected changes",
        "Perform deep hardware scan for keyloggers/PCIe implants"
    ];
    
    const result = `
        <h4>Hardware Incident Response</h4>
        <div style="background: white; border: 2px solid #dc3545; border-radius: 10px; padding: 20px;">
            <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                <h5 style="color: #dc3545;">🚨 ${randomScenario.type}</h5>
                <p><strong>Scenario:</strong> ${randomScenario.description}</p>
            </div>
            
            <h5>📋 Response Actions:</h5>
            <div style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
                <ol>
                    ${steps.map((step) => `<li style="margin: 8px 0;">${step}</li>`).join('')}
                </ol>
            </div>
        </div>
    `;
    
    document.getElementById('incident-result').innerHTML = result;
    document.getElementById('incident-result').style.display = 'block';
}

function assessHardwareCompliance() {
    const checkedBoxes = document.querySelectorAll('.compliance-checkbox:checked').length;
    const totalBoxes = document.querySelectorAll('.compliance-checkbox').length;
    const score = Math.round((checkedBoxes / totalBoxes) * 100);
    
    let complianceLevel = score >= 80 ? "PASSING" : "FAILING";
    let color = score >= 80 ? "#28a745" : "#dc3545";
    
    const result = `
        <h4>Hardware Compliance Assessment</h4>
        <div style="background: white; border: 2px solid ${color}; border-radius: 10px; padding: 20px;">
            <h5 style="color: ${color};">FIPS 140 Alignment: ${score}% - ${complianceLevel}</h5>
            <p>A score below 100% means the hardware cannot be certified for handling sensitive federal/military cryptographic keys.</p>
        </div>
    `;
    
    document.getElementById('compliance-result').innerHTML = result;
    document.getElementById('compliance-result').style.display = 'block';
}

// Checklist progress tracking
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
    
    document.querySelectorAll('.tpm-checkbox').forEach(checkbox => {
        checkbox.onchange = updateTPMProgress;
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
        'q1': { correct: 'An attack requiring physical access to an unattended device', explanation: 'Evil Maid attacks involve an attacker gaining brief physical access to an unattended machine (like in a hotel room) to install hardware keyloggers, manipulate bootloaders, or extract keys.' },
        'q2': { correct: 'Trusted Platform Module', explanation: 'TPM is a secure cryptoprocessor that securely stores artifacts used to authenticate the platform (passwords, certificates, or encryption keys).' },
        'q3': { correct: 'JTAG', explanation: 'JTAG (Joint Test Action Group) is an industry standard for verifying designs and testing printed circuit boards, often abused to halt CPU execution and dump memory.' },
        'q4': { correct: 'Capturing and displaying multiple digital signals', explanation: 'A logic analyzer is used to capture digital data on multiple channels, which allows analysts to reverse engineer buses like SPI or I2C.' },
        'q5': { correct: 'Self-Encrypting Drive', explanation: 'An SED handles encryption on the drive controller itself, keeping the encryption keys in hardware and off the host CPU/RAM.' },
        'q6': { correct: 'Side-Channel Power Analysis', explanation: 'Differential Power Analysis (DPA) measures minute fluctuations in power consumption to mathematically extract cryptographic keys during processing.' },
        'q7': { correct: 'A malicious, intentional modification of integrated circuitry', explanation: 'Unlike software malware, a hardware Trojan is a physical manipulation of the circuitry to create a backdoor or cause intentional failure.' },
        'q8': { correct: 'DRAM (Memory)', explanation: 'Rowhammer exploits physical characteristics of modern DRAM, rapidly accessing rows to cause bit flips in adjacent memory cells.' },
        'q9': { correct: 'FIPS 140', explanation: 'FIPS 140 is a US government standard that defines security requirements for cryptographic modules, including tamper evidence and zeroization.' },
        'q10': { correct: 'Secure Boot', explanation: 'Secure Boot uses cryptographic signatures in the UEFI firmware to ensure only authorized, signed bootloaders and kernels can execute.' },
        'q11': { correct: 'Bus Pirate / JTAGulator', explanation: 'These are hardware hacking tools used to interface with unknown UART, JTAG, SPI, and I2C ports on embedded devices.' },
        'q12': { correct: 'Memory scrambling and soldered RAM', explanation: 'Cold Boot attacks rely on RAM retaining data after power loss. Scrambling the memory and soldering it prevents attackers from easily reading or transferring the chips to extract keys.' },
        'q13': { correct: 'Removing chip packaging to expose the silicon die', explanation: 'Decapsulation uses acids or lasers to remove the epoxy casing of a microchip to visually inspect or physically probe the microscopic die inside.' },
        'q14': { correct: 'HSM (Hardware Security Module)', explanation: 'HSMs are dedicated physical computing devices that safeguard and manage digital keys for strong authentication and provide crypto processing.' },
        'q15': { correct: 'To detect physical intrusion and zeroize keys', explanation: 'Anti-tamper mesh is a physical wrapper around secure chips. If broken or pierced, it triggers a circuit that wipes the cryptographic keys.' },
        'q16': { correct: 'In-transit or at the manufacturing facility', explanation: 'Supply chain interdiction happens before the device reaches the end user, often by intercepting shipping or compromising the manufacturer.' },
        'q17': { correct: 'Universal Asynchronous Receiver-Transmitter', explanation: 'UART is a hardware communication protocol that uses asynchronous serial communication, very common for accessing root shells on embedded devices.' },
        'q18': { correct: 'Two (SDA, SCL)', explanation: 'I2C is a serial protocol widely used for attaching lower-speed peripheral ICs, requiring only two wires: Serial Data (SDA) and Serial Clock (SCL).' },
        'q19': { correct: 'A tamper-respondent enclosure', explanation: 'Tamper-respondent devices actively detect physical tampering and automatically destroy sensitive data (zeroization) to prevent compromise.' },
        'q20': { correct: 'Firmware dumping / Chip-off extraction', explanation: 'Extracting data directly from the physical memory chip (often by desoldering it) is known as chip-off extraction or firmware dumping.' }
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
        resultMessage += 'Outstanding! You have excellent knowledge of Hardware Security.';
        actionPlan = 'You are ready to perform advanced hardware teardowns and logic analysis.';
    } else if (percentage >= 70) {
        resultClass = 'good';
        resultMessage += 'Good work! You understand most hardware security concepts.';
        actionPlan = 'Review the missed areas, particularly surrounding specific protocols (SPI/I2C/UART).';
    } else {
        resultMessage += 'Additional study is recommended to strengthen your hardware knowledge.';
        actionPlan = 'Focus on the fundamental concepts of boot security and physical extraction.';
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