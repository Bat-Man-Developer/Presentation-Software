// Cybersecurity Network Analyst JS
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

// Risk Assessment
function calculateNetworkRiskScore() {
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
        riskLevel = "SECURE ARCHITECTURE";
        color = "#27ae60";
        recommendations = "Your network defense-in-depth strategy is strong. Focus on Zero Trust migration and SOAR automation.";
    } else if (percentage >= 60) {
        riskLevel = "DEVELOPING INFRASTRUCTURE";
        color = "#f39c12";
        recommendations = "Good foundation. Prioritize full network segmentation and 802.1X deployment on access ports.";
    } else {
        riskLevel = "FLAT & VULNERABLE";
        color = "#e74c3c";
        recommendations = "Immediate action required. A flat network without internal segmentation allows unrestricted lateral movement.";
    }
    
    document.getElementById('risk-assessment-result').innerHTML = `
        <h4 style="color: ${color};">Network Architecture Score: ${percentage}% (${riskLevel})</h4>
        <p><strong>Assessment:</strong> ${recommendations}</p>
        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin-top: 10px;">
            <h5>Priority Actions:</h5>
            <ul>
                ${percentage < 80 ? '<li>Audit switch configurations for VLAN hopping vulnerabilities.</li>' : ''}
                ${percentage < 70 ? '<li>Ensure IPS signatures are updated automatically daily.</li>' : ''}
                ${percentage < 60 ? '<li>Implement an implicit deny rule on all inter-VLAN routing tables.</li>' : ''}
                ${percentage < 50 ? '<li>Deploy MFA for all VPN and administrative access immediately.</li>' : ''}
            </ul>
        </div>
    `;
    document.getElementById('risk-assessment-result').style.display = 'block';
}

// PCAP Analysis Simulator
function analyzePcapOutput() {
    const diagnosis = document.getElementById('pcap-diagnosis').value;
    
    let result = `<h4>Analysis Feedback</h4>`;
    
    if (diagnosis === "") {
        result += "<p style='color: #e74c3c;'>Please select a diagnosis from the dropdown.</p>";
    } else if (diagnosis === "synflood") {
        result += `
            <p style='color: #27ae60;'>✅ <strong>Correct! TCP SYN Flood (DoS) detected.</strong></p>
            <div style="background: #e3f2fd; padding: 15px; border-radius: 8px; margin-top: 10px;">
                <p><strong>Evidence:</strong> The PCAP shows multiple unique IPs sending TCP SYN packets (Flags [S]) to port 80 in rapid succession (milliseconds apart). The server responds with SYN-ACKs (Flags [S.]), but the final ACK from the client is missing, exhausting the server's state table.</p>
                <p><strong>Remediation:</strong> Enable SYN Cookies on the firewall/server, rate-limit new connections, and utilize upstream DDoS mitigation (e.g., Cloudflare/Arbor).</p>
            </div>
        `;
    } else {
        result += `
            <p style='color: #e74c3c;'>❌ <strong>Incorrect Diagnosis.</strong></p>
            <div style="background: #fff3cd; padding: 15px; border-radius: 8px; margin-top: 10px;">
                <p>Take a closer look at the <code>Flags [S]</code> pattern and the volume of connections originating from randomized high ports pointing to port 80. This isn't ARP spoofing (which is Layer 2), SQLi (Layer 7 payload), or DNS (Port 53).</p>
            </div>
        `;
    }
    
    document.getElementById('pcap-validation').innerHTML = result;
    document.getElementById('pcap-validation').style.display = 'block';
}

// Firewall Rule Validation
function evaluateFirewallRules() {
    const r1 = document.getElementById('fw-rule1').value;
    const r2 = document.getElementById('fw-rule2').value;
    const r3 = document.getElementById('fw-rule3').value;
    const r4 = document.getElementById('fw-rule4').value;
    
    let score = 0;
    let feedback = [];
    
    // Rule 1: HTTP/HTTPS
    if (r1 === "ALLOW") { score += 25; } else { feedback.push("Web traffic (80,443) must be ALLOWED for the server to function."); }
    
    // Rule 2: SSH from Mgmt
    if (r2 === "ALLOW") { score += 25; } else { feedback.push("SSH from the management subnet must be ALLOWED."); }
    
    // Rule 3: SSH from Any
    if (r3 === "DENY") { score += 25; } else { feedback.push("CRITICAL: Allowing SSH from 'Any' exposes the server to global brute-force attacks. Must be DENY."); }
    
    // Rule 4: Default Drop
    if (r4 === "DENY") { score += 25; } else { feedback.push("CRITICAL: The final rule must be an Implicit DENY to block all undefined traffic."); }

    let result = `<h4>Firewall Audit Score: ${score}%</h4>`;
    if (score === 100) {
        result += "<p style='color: #27ae60;'>✅ Perfect Configuration! Access is strictly controlled based on least privilege, followed by an implicit deny.</p>";
    } else {
        result += "<p style='color: #e74c3c;'>⚠️ Misconfiguration Detected. Review the notes below.</p><ul>";
        feedback.forEach(f => result += `<li>${f}</li>`);
        result += "</ul>";
    }

    document.getElementById('firewall-evaluation-result').innerHTML = result;
    document.getElementById('firewall-evaluation-result').style.display = 'block';
}

// Subnet Analysis
function analyzeSubnetting() {
    const servers = document.getElementById('vlan-servers').value;
    const guests = document.getElementById('vlan-guests').value;
    
    let result = `<h4>Subnet Topology Review</h4>`;
    
    if (servers === "correct" && guests === "correct") {
        result += `
            <p style='color: #27ae60;'>✅ <strong>Topology Validated!</strong></p>
            <div style="background: #e3f2fd; padding: 15px; border-radius: 8px;">
                <p>Excellent subnetting. The /28 provides exactly 14 usable IP addresses (perfect for the server requirement). The /25 provides 126 addresses starting at .128, effectively carving the network to prevent IP space wastage.</p>
            </div>
        `;
    } else {
        result += `<p style='color: #e74c3c;'>❌ <strong>Invalid Subnet Design</strong></p><ul>`;
        if (servers !== "correct") result += "<li>VLAN 10: A /24 wastes too many IPs, and a /30 leaves only 2 usable IPs, which is insufficient. You need a /28 (16 IPs - 2 = 14 usable).</li>";
        if (guests !== "correct") result += "<li>VLAN 20: A /26 only provides 62 hosts, and a /24 overlaps with the whole range. You need a /25 (126 usable hosts).</li>";
        result += "</ul>";
    }

    document.getElementById('subnet-analysis-result').innerHTML = result;
    document.getElementById('subnet-analysis-result').style.display = 'block';
}

// NetSecOps Roadmap Generator
function generateNetworkRoadmap() {
    const roadmap = `
        <h4>Network SOAR Automation Pipeline</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <h5>Phase 1: Ingestion & Parsing</h5>
            <ul>
                <li>Forward Syslog from Firewalls, Switches, and AD to SIEM.</li>
                <li>Deploy Zeek/Suricata sensors on Core SPAN ports.</li>
            </ul>
            
            <h5>Phase 2: Alert Correlation</h5>
            <ul>
                <li>Write correlation rules: E.g., "5 failed SSH attempts + successful login = Alert".</li>
                <li>Integrate Threat Intelligence (C2 IP lists) directly into the SIEM.</li>
            </ul>

            <h5>Phase 3: Automated Response (SOAR)</h5>
            <ul>
                <li><strong>Playbook 1:</strong> Automatically isolate endpoints (trigger 802.1X quarantine VLAN) if malware beaconing is detected.</li>
                <li><strong>Playbook 2:</strong> Automatically block malicious IPs at the edge firewall via API.</li>
            </ul>
        </div>
    `;
    
    document.getElementById('noc-roadmap-result').innerHTML = roadmap;
    document.getElementById('noc-roadmap-result').style.display = 'block';
}

// Budget Calculator
function calculateNetSecROI() {
    const nodes = parseInt(document.getElementById('node-count').value) || 1;
    const infraProfile = document.getElementById('infra-profile').value;
    
    const baseCosts = {
        standard: { perNode: 15, core: 5000, desc: "Basic NGFW + Endpoint Antivirus" },
        enhanced: { perNode: 45, core: 25000, desc: "HA Firewalls + SIEM + Managed IDS" },
        premium: { perNode: 95, core: 75000, desc: "Zero Trust Overlay + 24/7 SOC + SOAR" }
    };
    
    const costs = baseCosts[infraProfile];
    const nodeCost = nodes * costs.perNode;
    const totalCost = nodeCost + costs.core;
    
    const result = `
        <h4>Recommended NetSec Budget</h4>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <h5>Profile: ${infraProfile.charAt(0).toUpperCase() + infraProfile.slice(1)}</h5>
            <p><strong>Recommended Stack:</strong> ${costs.desc}</p>
            
            <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                <thead style="background: #1a237e; color: white;">
                    <tr>
                        <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Cost Category</th>
                        <th style="padding: 10px; border: 1px solid #ddd; text-align: right;">Cost (Annual)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd;">Endpoint/Node Licensing (${nodes} nodes)</td>
                        <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">$${nodeCost.toLocaleString()}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd;">Core Infrastructure (Firewalls, SIEM, Sensors)</td>
                        <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">$${costs.core.toLocaleString()}</td>
                    </tr>
                    <tr style="background: #ecf0f1; font-weight: bold;">
                        <td style="padding: 8px; border: 1px solid #ddd;">Total Infrastructure Security Budget</td>
                        <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">$${totalCost.toLocaleString()}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    `;
    
    document.getElementById('budget-calculation-result').innerHTML = result;
    document.getElementById('budget-calculation-result').style.display = 'block';
}

// DDoS Simulation
function runDDoSResponseSimulation() {
    const steps = [
        "🚨 DETECT: Analyze NetFlow data to identify target IP and attack vector (e.g., UDP Amplification).",
        "🔧 MITIGATE: Implement Rate Limiting and execute BGP Flowspec or Remotely Triggered Black Hole (RTBH) routing.",
        "☁️ DIVERT: Failover traffic to Cloud DDoS scrubbing centers (Cloudflare, Akamai).",
        "🔍 MONITOR: Monitor internal edge routers to ensure CPU load returns to normal.", 
        "🔄 RECOVER: Slowly re-introduce clean traffic via the scrubbing center.",
        "📋 REPORT: Generate incident timeline and coordinate with upstream ISP."
    ];
    
    let result = `
        <h4>🚨 DDoS Defense Playbook</h4>
        <div style="background: #fff5f5; border: 2px solid #e53e3e; border-radius: 10px; padding: 20px;">
            <h5>Response Timeline:</h5>
            <ol>
                ${steps.map(step => `<li style="margin: 8px 0; padding: 5px;">${step}</li>`).join('')}
            </ol>
        </div>
    `;
    
    document.getElementById('ddos-response-result').innerHTML = result;
    document.getElementById('ddos-response-result').style.display = 'block';
}

// ARP Spoofing Simulation
function runArpSpoofSimulation() {
    const result = `
        <h4>Layer 2 Attack Analysis</h4>
        <div style="background: white; border: 2px solid #ff3d00; border-radius: 10px; padding: 20px;">
            <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                <h5 style="color: #ff3d00;">🚨 Vulnerability Confirmed: ARP Spoofing (MitM)</h5>
                <p>An attacker is broadcasting gratuitous ARP replies, telling the network that their physical MAC address owns the Gateway's IP address. All subnet traffic is now flowing through the attacker's machine.</p>
            </div>
            
            <h5>📋 Remediation Steps:</h5>
            <ul>
                <li>Enable <strong>Dynamic ARP Inspection (DAI)</strong> on all access switches.</li>
                <li>Enable <strong>DHCP Snooping</strong> to build a trusted IP-to-MAC binding database.</li>
                <li>Trace the rogue MAC address to the physical switch port and disable the port (err-disable).</li>
            </ul>
        </div>
    `;
    
    document.getElementById('arp-result').innerHTML = result;
    document.getElementById('arp-result').style.display = 'block';
}

// Zero Trust Compliance
function assessZeroTrustCompliance() {
    const checkedBoxes = document.querySelectorAll('.compliance-checkbox:checked').length;
    const totalBoxes = document.querySelectorAll('.compliance-checkbox').length;
    const score = Math.round((checkedBoxes / totalBoxes) * 100);
    
    let complianceLevel = score === 100 ? "ZERO TRUST ACHIEVED" : "LEGACY NETWORK";
    let color = score === 100 ? "#28a745" : "#f39c12";
    
    const result = `
        <h4>Zero Trust Readiness</h4>
        <div style="background: white; border: 2px solid ${color}; border-radius: 10px; padding: 20px;">
            <h5 style="color: ${color};">Maturity Score: ${score}% - ${complianceLevel}</h5>
            <p>Zero Trust requires abandoning the "castle-and-moat" philosophy. Every checklist item is a mandatory pillar for a true ZTNA deployment.</p>
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
        'q1': { correct: 'Layer 3 (Network)', explanation: 'Routers operate at the Network layer of the OSI model, making routing decisions based on IP addresses.' },
        'q2': { correct: 'Port 443', explanation: 'HTTPS (Hypertext Transfer Protocol Secure) encrypts HTTP traffic via TLS and uses TCP Port 443 by default.' },
        'q3': { correct: 'Wireshark', explanation: 'Wireshark is the industry-standard GUI network protocol analyzer used to capture and inspect packets.' },
        'q4': { correct: 'Synchronize (The first step of the TCP 3-way handshake)', explanation: 'A SYN Flood attacks a server by sending thousands of TCP SYN packets, leaving connections half-open until the server crashes.' },
        'q5': { correct: 'An IPS can actively block traffic; an IDS only alerts.', explanation: 'An Intrusion Detection System (IDS) is passive. An Intrusion Prevention System (IPS) sits inline and drops malicious packets.' },
        'q6': { correct: 'ARP', explanation: 'The Address Resolution Protocol (ARP) maps a Layer 3 IP address to a Layer 2 MAC address on a local network.' },
        'q7': { correct: 'Falsely announcing ownership of groups of IP addresses to redirect internet traffic', explanation: 'BGP Hijacking involves a rogue router announcing that it has the best path to an IP prefix, redirecting global internet traffic.' },
        'q8': { correct: '254', explanation: 'A /24 subnet has 256 total IPs. Subtracting the network address (.0) and broadcast address (.255) leaves 254 usable hosts.' },
        'q9': { correct: '802.1X', explanation: 'IEEE 802.1X is a standard for port-based Network Access Control, requiring devices to authenticate before gaining network access.' },
        'q10': { correct: 'A physical or logical subnetwork that exposes an organization\'s external-facing services to the internet', explanation: 'A DMZ (Demilitarized Zone) isolates internet-facing servers (like web/email servers) from the highly secure internal LAN.' },
        'q11': { correct: 'If traffic doesn\'t match an explicitly allowed rule, it is dropped', explanation: 'Firewalls operate on an implicit deny posture. If no rule allows the packet, the firewall automatically blocks it at the end of the ACL.' },
        'q12': { correct: 'IPsec', explanation: 'IPsec (Internet Protocol Security) is a secure network protocol suite that authenticates and encrypts data packets for site-to-site and client VPNs.' },
        'q13': { correct: 'A decoy system designed to lure attackers and log their activities', explanation: 'Honeypots are deliberately vulnerable systems that act as tripwires, detecting internal scanning and lateral movement.' },
        'q14': { correct: 'traceroute / tracert', explanation: 'Traceroute utilizes TTL (Time To Live) expiration in ICMP/UDP packets to discover the path and routers traffic traverses to reach a destination.' },
        'q15': { correct: 'Map multiple private IP addresses to a single public IP address', explanation: 'NAT translates private, non-routable IP addresses (like 192.168.x.x) to a public IP to communicate over the internet.' },
        'q16': { correct: 'Aggregates and analyzes log data from across the IT infrastructure', explanation: 'A SIEM (Security Information and Event Management) correlates logs from firewalls, servers, and switches to detect complex security events.' },
        'q17': { correct: 'Never trust, always verify—regardless of network location', explanation: 'Zero Trust mandates that mere connection to a corporate network does not grant trust. Every request must be authenticated and authorized.' },
        'q18': { correct: 'Volumetric DDoS', explanation: 'Volumetric attacks aim to consume all available bandwidth, often utilizing UDP amplification techniques (like DNS or NTP reflection).' },
        'q19': { correct: 'tcp.port == 80', explanation: 'In Wireshark, "tcp.port == 80" filters the packet capture to only show traffic originating from or destined to port 80 (HTTP).' },
        'q20': { correct: 'Changing the factory-assigned Media Access Control address of a network interface', explanation: 'MAC Spoofing allows an attacker to impersonate legitimate devices on a local network, often used to bypass MAC filtering or execute MitM attacks.' }
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
        resultMessage += 'Outstanding! You have a strong grasp of Network Security architecture.';
        actionPlan = 'You are ready to configure enterprise firewalls and monitor SIEM alerts.';
    } else if (percentage >= 70) {
        resultClass = 'good';
        resultMessage += 'Good work! You understand core routing and security principles.';
        actionPlan = 'Review the missed areas, particularly surrounding subnetting and Layer 2 attacks.';
    } else {
        resultMessage += 'Additional study is recommended to strengthen your NOC foundation.';
        actionPlan = 'Focus heavily on the OSI model, TCP/IP fundamentals, and basic firewall mechanics.';
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