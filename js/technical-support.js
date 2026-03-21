// Technical Support JS
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

// Ticket Priority Matrix Assessment
function calculateTicketPriority() {
    let impactScore = 0;
    let urgencyScore = 0;
    
    document.querySelectorAll('.impact-radio:checked').forEach(radio => {
        impactScore = parseInt(radio.value);
    });
    
    document.querySelectorAll('.urgency-radio:checked').forEach(radio => {
        urgencyScore = parseInt(radio.value);
    });

    if (impactScore === 0 || urgencyScore === 0) {
        alert("Please select both an Impact and an Urgency level.");
        return;
    }
    
    const priorityMatrix = {
        3: { 3: 'P1 - CRITICAL', 2: 'P2 - HIGH', 1: 'P3 - MEDIUM' },
        2: { 3: 'P2 - HIGH', 2: 'P3 - MEDIUM', 1: 'P4 - LOW' },
        1: { 3: 'P3 - MEDIUM', 2: 'P4 - LOW', 1: 'P4 - LOW' }
    };

    const priorityLevel = priorityMatrix[impactScore][urgencyScore];
    let color, recommendations, slaTime;
    
    if (priorityLevel.includes('P1')) {
        color = "#e74c3c";
        slaTime = "15 minutes";
        recommendations = "Immediate escalation to Tier 3/Network Operations. Notify IT Management and affected stakeholders immediately.";
    } else if (priorityLevel.includes('P2')) {
        color = "#e67e22";
        slaTime = "1 hour";
        recommendations = "Assign immediately to specialized Tier 2 support. Keep users updated on progress frequently.";
    } else if (priorityLevel.includes('P3')) {
        color = "#f39c12";
        slaTime = "4 hours";
        recommendations = "Standard dispatch to Tier 1/Tier 2. Troubleshoot using standard operating procedures.";
    } else {
        color = "#27ae60";
        slaTime = "24-48 hours";
        recommendations = "Log the ticket. Address via standard queue based on available technician time. Often involves self-service KB routing.";
    }
    
    document.getElementById('priority-assessment-result').innerHTML = `
        <h4 style="color: ${color};">Calculated Priority: ${priorityLevel}</h4>
        <p><strong>Response Target (SLA):</strong> ${slaTime}</p>
        <p><strong>Action Plan:</strong> ${recommendations}</p>
        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin-top: 10px;">
            <h5>Ticket Management Tips:</h5>
            <ul>
                <li>Always assign the ticket to an owner immediately.</li>
                <li>Document every step taken in the ticketing system.</li>
                <li>Communicate ETAs clearly to the end user.</li>
            </ul>
        </div>
    `;
    document.getElementById('priority-assessment-result').style.display = 'block';
}

// Customer Service Email Validation
function validateTechSupportEmail() {
    const emailContent = document.getElementById('support-email').value;
    const requiredElements = [
        'apologize', 'understand', 'steps', 'update', 'contact'
    ];
    
    let score = 0;
    let feedback = [];
    
    requiredElements.forEach(element => {
        // Simple heuristic check for empathy and structure
        const regex = new RegExp(element, 'i');
        if (regex.test(emailContent) || 
           (element === 'apologize' && /sorry/i.test(emailContent)) ||
           (element === 'understand' && /(frustrating|inconvenience)/i.test(emailContent))) {
            score += 20;
        } else {
            if(element === 'apologize') feedback.push(`Include a brief apology or empathy statement (e.g., "I'm sorry for the inconvenience")`);
            if(element === 'understand') feedback.push(`Acknowledge the user's frustration or urgency`);
            if(element === 'steps') feedback.push(`Provide clear, numbered steps or explain what actions you are taking`);
            if(element === 'update') feedback.push(`Commit to a timeframe for your next update`);
            if(element === 'contact') feedback.push(`Provide contact details in case they need immediate assistance`);
        }
    });
    
    let result = `<h4>Customer Communication Score: ${score}%</h4>`;
    if (score >= 80) {
        result += "<p style='color: #27ae60;'>Excellent! Your email is empathetic, clear, and professional.</p>";
    } else if (score >= 60) {
        result += "<p style='color: #f39c12;'>Good structure, but could use a bit more empathy or clearer instructions.</p>";
    } else {
        result += "<p style='color: #e74c3c;'>Needs improvement. Focus on the de-escalation and clarity.</p>";
    }
    
    if (feedback.length > 0) {
        result += "<h5>Suggestions for next time:</h5><ul>";
        feedback.forEach(item => {
            result += `<li>${item}</li>`;
        });
        result += "</ul>";
    }
    
    document.getElementById('email-validation').innerHTML = result;
    document.getElementById('email-validation').style.display = 'block';
}

// Support Setup Progress Tracking
function updateSetupProgress() {
    const checkedBoxes = document.querySelectorAll('.setup-checkbox:checked').length;
    const totalBoxes = document.querySelectorAll('.setup-checkbox').length;
    const progress = Math.round((checkedBoxes / totalBoxes) * 100);
    
    const progressFill = document.querySelector('#setup-progress .progress-fill');
    if (progressFill) {
        progressFill.style.width = `${progress}%`;
        progressFill.textContent = `${progress}% Complete`;
        
        if (progress === 100) {
            progressFill.style.background = '#27ae60';
            progressFill.textContent = '✅ Remote Support Ready!';
        } else {
            progressFill.style.background = '#3498db';
        }
    }
}

// Knowledge Base Article Generator
function generateKBArticle() {
    const selectedSections = [];
    const kbCheckboxes = document.querySelectorAll('.kb-checkbox:checked');
    
    kbCheckboxes.forEach(checkbox => {
        selectedSections.push(checkbox.nextElementSibling.textContent);
    });
    
    const kbDocument = `
        <h4>Generated Knowledge Base (KB) Template</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <h5>[Issue Title - e.g., How to Fix VPN Connection Timeout]</h5>
            <p><strong>Article ID:</strong> KB-${Math.floor(Math.random() * 10000)} | <strong>Last Updated:</strong> ${new Date().toLocaleDateString()}</p>
            
            ${selectedSections.includes('Symptom / Problem Description') ? `
            <h6>Symptoms:</h6>
            <p><em>Describe exactly what the user sees, including error codes.</em></p>
            ` : ''}
            
            ${selectedSections.includes('Environment / Affected Systems') ? `
            <h6>Environment:</h6>
            <p><em>List OS versions, software builds, or specific hardware affected.</em></p>
            ` : ''}

            ${selectedSections.includes('Root Cause (Optional)') ? `
            <h6>Cause:</h6>
            <p><em>Briefly explain why this happens (e.g., expired certificate).</em></p>
            ` : ''}
            
            ${selectedSections.includes('Step-by-Step Resolution') ? `
            <h6>Resolution Steps:</h6>
            <ol>
                <li>Step 1...</li>
                <li>Step 2...</li>
                <li>Step 3...</li>
            </ol>
            ` : ''}

            ${selectedSections.includes('Verification / Testing Steps') ? `
            <h6>Verification:</h6>
            <p><em>Explain how the tech or user can verify the issue is permanently fixed.</em></p>
            ` : ''}
        </div>
        <p style="margin-top: 10px;"><em>Copy this template to your ITSM tool (like ServiceNow or Jira) for standardization.</em></p>
    `;
    
    document.getElementById('kb-article-result').innerHTML = kbDocument;
    document.getElementById('kb-article-result').style.display = 'block';
}


// Network Diagnostic Analysis
function testNetworkDiagnostics() {
    const ipAddress = document.getElementById('ip-test').value;
    if (!ipAddress) {
        alert('Please enter an IP address or domain to analyze.');
        return;
    }
    
    // Simple mock validation for demo purposes
    const isLocal = ipAddress.startsWith('192.168.') || ipAddress.startsWith('10.') || ipAddress.startsWith('172.16.');
    const isLoopback = ipAddress === '127.0.0.1' || ipAddress === 'localhost';
    
    let analysisText = "";
    let nextStep = "";
    let color = "#3498db";

    if (isLoopback) {
        analysisText = "Loopback address detected. Pinging this only tests the local NIC (Network Interface Card) hardware/drivers.";
        nextStep = "Next Step: Ping the default gateway to test LAN connectivity.";
    } else if (isLocal) {
        analysisText = "Private/Local IP detected. This is internal to the network.";
        nextStep = "Next Step: Run 'tracert' or 'ping 8.8.8.8' to confirm outbound WAN (Internet) routing.";
    } else {
        analysisText = "Public IP / Domain detected. You are testing external internet routing.";
        nextStep = "Next Step: If this fails, check DNS settings (nslookup) or verify the firewall isn't blocking ICMP packets.";
    }

    const result = `
        <h4 style="color: ${color};">Diagnostic Analysis for: ${ipAddress}</h4>
        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin-top: 10px;">
            <p><strong>Status:</strong> ${analysisText}</p>
            <p><strong>Troubleshooting Methodology:</strong> ${nextStep}</p>
        </div>
    `;
    
    document.getElementById('diagnostic-result').innerHTML = result;
    document.getElementById('diagnostic-result').style.display = 'block';
}


// Major Incident Response Simulation
function runMajorIncidentSimulation() {
    const scenarios = [
        {
            type: "Core Switch Failure",
            description: "Entire office floor has lost network connectivity. Wi-Fi and wired connections are down.",
            severity: "P1 - CRITICAL",
            action: "Network Engineering"
        },
        {
            type: "Email Server Outage",
            description: "All users are reporting inability to send or receive external emails.",
            severity: "P1 - CRITICAL", 
            action: "Systems Administration"
        },
        {
            type: "Application Database Lock",
            description: "The main CRM system is throwing 500 Internal Server errors for all sales staff.",
            severity: "P2 - HIGH",
            action: "DBA / App Support"
        }
    ];
    
    const randomScenario = scenarios[Math.floor(Math.random() * scenarios.length)];
    
    const steps = [
        "Isolate and confirm the scope of the outage (Is it just one user or everyone?).",
        "Open a Priority Major Incident Ticket.",
        "Page the on-call " + randomScenario.action + " team.",
        "Send an initial communication blast to affected users/management acknowledging the issue.",
        "Join the Major Incident Bridge (conference call) to assist with logs/testing.",
        "Once resolved, verify with 3 independent users.",
        "Participate in the Post-Incident Review (PIR) to write the RCA (Root Cause Analysis)."
    ];
    
    let severityColor = randomScenario.severity.includes('P1') ? '#dc3545' : '#fd7e14';
    
    const result = `
        <h4>Major Incident Response Simulation</h4>
        <div style="background: white; border: 2px solid ${severityColor}; border-radius: 10px; padding: 20px;">
            <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                <h5 style="color: ${severityColor};">🚨 ${randomScenario.type} - ${randomScenario.severity} Priority</h5>
                <p><strong>Scenario:</strong> ${randomScenario.description}</p>
            </div>
            
            <h5>📋 Helpdesk Response Checklist:</h5>
            <div style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
                <ol>
                    ${steps.map((step, index) => `
                        <li style="margin: 8px 0; padding: 8px; background: white; border-radius: 5px; border-left: 4px solid ${index < 2 ? '#dc3545' : index < 5 ? '#ffc107' : '#28a745'};">
                            ${step} ${index < 2 ? '⚡ (Immediate 0-5m)' : index < 5 ? '🕐 (Ongoing)' : '📊 (Post-Resolution)'}
                        </li>
                    `).join('')}
                </ol>
            </div>
        </div>
    `;
    
    document.getElementById('incident-result').innerHTML = result;
    document.getElementById('incident-result').style.display = 'block';
}

// Initialize slide interactivity
function initializeSlideInteractivity() {
    // Setup checkboxes
    document.querySelectorAll('.setup-checkbox').forEach(checkbox => {
        checkbox.onchange = updateSetupProgress;
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

// Quiz functionality
let selectedAnswers = {};

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

    // Technical Support Quiz Data
    const questionData = {
        'q1': {
            correct: 'Identify the problem',
            explanation: 'The first step in the standard troubleshooting methodology is to identify the problem by asking the user questions and gathering information before making any changes.'
        },
        'q2': {
            correct: 'Service Level Agreement',
            explanation: 'SLA stands for Service Level Agreement, which defines the expected response and resolution times for IT support tickets.'
        },
        'q3': {
            correct: 'Empathize, listen actively, and assure them you will help',
            explanation: 'De-escalation begins with active listening and empathy. Acknowledging their frustration helps calm the situation so technical troubleshooting can begin.'
        },
        'q4': {
            correct: 'A centralized repository for troubleshooting articles and documentation',
            explanation: 'A Knowledge Base (KB) stores solutions to common problems, allowing techs to resolve issues faster and users to self-serve.'
        },
        'q5': {
            correct: 'Transferring the ticket to a higher tier or more specialized group',
            explanation: 'Escalation occurs when Tier 1 support cannot resolve an issue within their scope or timeframe, passing it to Tier 2 or engineering.'
        },
        'q6': {
            correct: 'To test network connectivity between two devices',
            explanation: 'The ping command sends ICMP echo requests to verify if a remote device is reachable across an IP network.'
        },
        'q7': {
            correct: 'To access and control a user\'s device over the network',
            explanation: 'Remote support tools (like TeamViewer, AnyDesk, or SCCM) allow technicians to see the user\'s screen and control their mouse/keyboard to fix software issues without being physically present.'
        },
        'q8': {
            correct: 'Verify power and physical connections first',
            explanation: 'Always start at Layer 1 of the OSI model (Physical layer). Ensure the device is plugged in and turned on before assuming complex hardware failures.'
        },
        'q9': {
            correct: 'To provide a history for future reference and identify recurring problems',
            explanation: 'Thorough documentation helps the next technician understand what was already tried, assists in building KB articles, and highlights trends that might indicate larger systemic issues.'
        },
        'q10': {
            correct: 'A unique numerical identifier assigned to a device on a network',
            explanation: 'An IP address routes data packets across networks, functioning much like a postal address for devices.'
        },
        'q11': {
            correct: 'Power cycling / Rebooting',
            explanation: 'Rebooting clears RAM, stops hung processes, and restarts services, fixing a vast majority of transient software glitches.'
        },
        'q12': {
            correct: 'Social engineering aimed at stealing credentials or sensitive data',
            explanation: 'Phishing tricks users into providing passwords or clicking malicious links. IT Support must frequently guide users on identifying these threats.'
        },
        'q13': {
            correct: 'Paraphrasing the user\'s issue back to them to ensure accurate understanding',
            explanation: 'Active listening confirms to the user that they are heard and ensures the technician is troubleshooting the correct problem.'
        },
        'q14': {
            correct: 'A diagnostic startup mode loading only essential drivers',
            explanation: 'Safe Mode helps isolate OS issues. If a problem doesn\'t occur in Safe Mode, it is likely caused by third-party software or non-essential drivers.'
        },
        'q15': {
            correct: 'Domain Name System',
            explanation: 'DNS translates human-readable domain names (like google.com) into machine-readable IP addresses.'
        },
        'q16': {
            correct: 'Basic troubleshooting, password resets, and ticket routing',
            explanation: 'Tier 1 is the first line of defense, handling known, documented issues and triaging complex problems to higher tiers.'
        },
        'q17': {
            correct: 'Securely accessing a corporate network from a remote location over the internet',
            explanation: 'A Virtual Private Network (VPN) creates an encrypted tunnel, allowing remote workers to access internal company resources securely.'
        },
        'q18': {
            correct: 'Critical operating system error, often hardware or driver related',
            explanation: 'A BSOD indicates Windows has encountered an error it cannot recover from, requiring a restart and investigation of the stop code.'
        },
        'q19': {
            correct: 'A physical, permanent hardware address assigned to a network interface',
            explanation: 'Unlike an IP address which can change (DHCP), a MAC address is burned into the network card by the manufacturer.'
        },
        'q20': {
            correct: 'Document findings, actions, and outcomes',
            explanation: 'The final step of the methodology ensures the solution is recorded for future reference and the ticket is properly closed.'
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
        resultMessage += 'Outstanding! You have an excellent grasp of technical support methodologies.';
        actionPlan = 'You are well-prepared to handle Tier 1 and Tier 2 Helpdesk escalations efficiently.';
    } else if (percentage >= 70) {
        resultClass = 'good';
        resultMessage += 'Good work! You understand most core IT support concepts.';
        actionPlan = 'Review the missed areas to sharpen your troubleshooting and customer service skills further.';
    } else {
        resultMessage += 'Additional study is recommended to strengthen your foundational IT knowledge.';
        actionPlan = 'Focus on the CompTIA A+ troubleshooting methodology and standard networking concepts.';
    }

    resultDiv.className = `quiz-result ${resultClass}`;
    resultDiv.innerHTML = `
        <p>${resultMessage}</p>
        <p><strong>Next Steps:</strong> ${actionPlan}</p>
    `;
    resultDiv.style.display = 'block';

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

    // Disable further quiz interaction
    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.style.pointerEvents = 'none';
    });
    
    document.querySelector('.submit-btn').disabled = true;
    document.querySelector('.submit-btn').textContent = 'Assessment Completed';
    
    quizCompleted = true;
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