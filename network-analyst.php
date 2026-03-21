<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersecurity Network Analyst Training</title>
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/network-analyst.css">
</head>
<body>
    <div class="presentation-container">
        <div class="slide-counter">
            <span id="currentSlide">1</span> / <span id="totalSlides"></span>
        </div>

        <div class="slide active">
            <div class="title-slide">
                <div class="security-icon">🌐</div>
                <h1>Cybersecurity Network Analyst</h1>
                <p class="subtitle">Securing the Perimeter and Beyond</p>
                <div class="highlight">
                    <h3>Comprehensive Network Security Training Program</h3>
                    <p>Mastering Firewalls, IDS/IPS, and Packet Analysis</p>
                    <p><strong>Hands-On NOC Operations and Threat Hunting</strong></p>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Session 1: The Network Threat Landscape</h1>
            
            <h2>Core Network Security Vulnerabilities</h2>
            <div style="text-align: center; margin: var(--space-md) 0;">
                <img src="assets/images/network-analyst/1.png" alt="Man-in-the-Middle (MitM) ARP Spoofing Diagram" style="max-width: 100%; border-radius: var(--radius-md);">
            </div>
            <ul>
                <li><strong>DDoS Attacks:</strong> Overwhelming network bandwidth or state tables (Volumetric & Protocol attacks).</li>
                <li><strong>Man-in-the-Middle (MitM):</strong> Intercepting communications via ARP Spoofing or Rogue DHCP.</li>
                <li><strong>Lateral Movement:</strong> Attackers traversing flat, unsegmented networks post-breach.</li>
                <li><strong>BGP Hijacking:</strong> Malicious routing announcements redirecting internet traffic.</li>
                <li><strong>Cleartext Protocols:</strong> Sniffing sensitive data over Telnet, FTP, or HTTP.</li>
            </ul>

            <div class="highlight">
                <h2>The Analyst's Viewpoint</h2>
                <p>As a Network Security Analyst, your job is to observe the "wire." While endpoint software can be compromised or bypassed, the network traffic rarely lies. If an attacker exfiltrates data, packets must traverse the infrastructure. Mastery of packet analysis is your ultimate source of truth.</p>
            </div>

            <div class="case-study">
                <h3>Case Study 1: The Johannesburg ISP BGP Hijack</h3>
                <div style="text-align: center; margin: var(--space-sm) 0;">
                    <img src="assets/images/network-analyst/2.png" alt="BGP Hijacking Routing Diagram" style="max-width: 100%; border-radius: var(--radius-md);">
                </div>
                <p>In 2023, a major South African ISP suffered a BGP hijacking event. Attackers announced specific IP prefixes belonging to the ISP from a rogue autonomous system. Traffic intended for local financial institutions was silently rerouted through a malicious proxy server in Eastern Europe, allowing attackers to intercept unencrypted DNS and metadata before routing it back. The issue was resolved by implementing RPKI (Resource Public Key Infrastructure) strict route validation.</p>
            </div>
        </div>

        <div class="slide">
            <h1>🔬 Hands-On Lab: Architecture Risk Assessment</h1>
            
            <div class="interactive-lab">
                <h2>Network Security Posture Assessment</h2>
                <div style="text-align: center; margin: var(--space-md) 0;">
                    <img src="assets/images/network-analyst/3.png" alt="Network Segmentation and VLAN Architecture" style="max-width: 100%; border-radius: var(--radius-md);">
                </div>
                <div class="practice-exercise">
                    <div class="practice-title">Evaluate Your Infrastructure Defenses</div>
                    
                    <div class="security-checklist">
                        <h3>Current NOC Practices:</h3>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk1" data-weight="5">
                            <label for="risk1">Is the network segmented into VLANs (e.g., Guest, VoIP, Servers)?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk2" data-weight="5">
                            <label for="risk2">Do you employ a Next-Generation Firewall (NGFW) with DPI (Deep Packet Inspection)?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk3" data-weight="4">
                            <label for="risk3">Are switch ports secured using 802.1X Network Access Control (NAC)?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk4" data-weight="3">
                            <label for="risk4">Is DHCP Snooping and Dynamic ARP Inspection enabled on access switches?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk5" data-weight="5">
                            <label for="risk5">Do you maintain an active IPS/IDS (e.g., Suricata, Snort) mirroring core switches?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk6" data-weight="4">
                            <label for="risk6">Are all remote access connections secured via IPsec or WireGuard VPNs with MFA?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk7" data-weight="4">
                            <label for="risk7">Do you aggregate and analyze network flows (NetFlow/sFlow) in a SIEM?</label>
                        </div>
                    </div>
                    
                    <button class="simulation-button" onclick="calculateNetworkRiskScore()">Calculate Architecture Security Score</button>
                    <div id="risk-assessment-result" class="simulation-result"></div>
                </div>
            </div>

            <div class="solution-box">
                <div class="solution-title">Standard Network Defense Layers</div>
                <div class="resource-link">
                    <strong>Perimeter:</strong> Edge Routers, NGFW, WAF, DDoS Mitigation.
                </div>
                <div class="resource-link">
                    <strong>Internal:</strong> Core/Distribution Switches, VLANs, Microsegmentation, IDS.
                </div>
                <div class="resource-link">
                    <strong>Access:</strong> 802.1X NAC, Port Security, Wireless WPA3-Enterprise.
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>🎯 Workshop: Packet Capture (PCAP) Analysis</h1>
            
            <div class="hands-on-section">
                <div class="hands-on-title">Analyze the Wire</div>
                
                <div class="scenario-box">
                    <h3>Scenario: Web Server Latency</h3>
                    <p>The SOC has received alerts that the primary web server (192.168.10.50) is experiencing massive latency. You pull a packet capture (tcpdump) from the edge interface. Analyze the terminal output below to identify the attack.</p>
                </div>
                <div style="text-align: center; margin: var(--space-md) 0;">
                    <img src="assets/images/network-analyst/4.png" alt="Packet Capture (PCAP) Analysis Interface" style="max-width: 100%; border-radius: var(--radius-md);">
                </div>

                <div class="practice-exercise">
                    <div class="demo-box">
                        <h4>Terminal output: <code>tcpdump -i eth0 host 192.168.10.50</code></h4>
                        <textarea id="pcap-output" style="width: 100%; height: 200px; padding: 10px; background-color: #000; color: #0f0; border: 2px solid #333; border-radius: 8px; font-family: monospace;" readonly>
14:02:01.001 IP 203.0.113.5.45211 > 192.168.10.50.80: Flags [S], seq 123456789, win 64240, length 0
14:02:01.002 IP 192.168.10.50.80 > 203.0.113.5.45211: Flags [S.], seq 987654321, ack 123456790, win 29200, length 0
14:02:01.005 IP 204.0.114.8.55212 > 192.168.10.50.80: Flags [S], seq 111111111, win 64240, length 0
14:02:01.006 IP 192.168.10.50.80 > 204.0.114.8.55212: Flags [S.], seq 222222222, ack 111111112, win 29200, length 0
14:02:01.008 IP 205.0.115.9.61234 > 192.168.10.50.80: Flags [S], seq 333333333, win 64240, length 0
14:02:01.009 IP 192.168.10.50.80 > 205.0.115.9.61234: Flags [S.], seq 444444444, ack 333333334, win 29200, length 0
14:02:01.010 IP 206.0.116.1.12345 > 192.168.10.50.80: Flags [S], seq 555555555, win 64240, length 0
[... 10,000 similar packets suppressed ...]
                        </textarea>
                        
                        <h4 style="margin-top: 20px;">Analyst Diagnosis:</h4>
                        <select id="pcap-diagnosis" style="width: 100%; padding: 10px; border: 2px solid #1a237e; border-radius: 8px; font-family: sans-serif; font-size: 16px;">
                            <option value="">-- Select Threat Identified --</option>
                            <option value="arp">ARP Spoofing Attack</option>
                            <option value="synflood">TCP SYN Flood (DoS)</option>
                            <option value="sqli">SQL Injection over HTTP</option>
                            <option value="exfil">Data Exfiltration via DNS</option>
                        </select>
                        <br><br>
                        <button class="simulation-button" onclick="analyzePcapOutput()">Submit Diagnosis</button>
                        <div id="pcap-validation" class="simulation-result"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Session 2: Core Defense Mechanisms (Part 1)</h1>
            
            <h2>Firewalls & Access Control Lists (ACLs)</h2>
            <div style="text-align: center; margin: var(--space-md) 0;">
                <img src="assets/images/network-analyst/5.png" alt="NGFW and IDS/IPS Network Placement Architecture" style="max-width: 100%; border-radius: var(--radius-md);">
            </div>
            <ul>
                <li><strong>Stateful Inspection:</strong> Firewalls that track the state of active connections and determine which network packets to allow through.</li>
                <li><strong>Default Deny Posture:</strong> All inbound traffic should be dropped unless explicitly permitted by an ACL.</li>
                <li><strong>Egress Filtering:</strong> Restricting outbound traffic to prevent compromised internal hosts from communicating with Command & Control (C2) servers.</li>
            </ul>

            <h2>Intrusion Detection and Prevention (IDS/IPS)</h2>
            <ul>
                <li><strong>IDS (Detection):</strong> Passively mirrors traffic (SPAN port), matches signatures, and generates alerts without blocking traffic.</li>
                <li><strong>IPS (Prevention):</strong> Placed inline. Drops malicious packets instantly based on signatures or behavioral heuristics.</li>
                <li>Popular Open Source Engines: <strong>Suricata</strong>, <strong>Snort</strong>, and <strong>Zeek</strong> (Bro).</li>
            </ul>

            <h2>Network Segmentation</h2>
            <ul>
                <li>Dividing a flat network into isolated subnets (VLANs) limits the blast radius of a breach.</li>
                <li>A compromised IoT camera on a guest VLAN should not be able to route traffic to the corporate database VLAN.</li>
            </ul>
        </div>

        <div class="slide">
            <h1>🔐 Lab: Firewall Rule Configuration</h1>
            
            <div class="interactive-lab">
                <h2>Building a Secure Perimeter</h2>
                
                <div class="practice-exercise">
                    <div class="practice-title">Configure Edge NGFW Policies</div>
                    <p>Scenario: You are configuring the edge firewall for a web server (10.0.0.50) that requires HTTP/HTTPS access, and allows SSH only from the management subnet (10.0.5.0/24).</p>
                    
                    <div class="demo-box">
                        <table style="width: 100%; border-collapse: collapse; margin-top: 15px; background: #fff;">
                            <thead style="background: #1a237e; color: white;">
                                <tr>
                                    <th style="padding: 10px; border: 1px solid #ddd;">Action</th>
                                    <th style="padding: 10px; border: 1px solid #ddd;">Protocol</th>
                                    <th style="padding: 10px; border: 1px solid #ddd;">Source IP</th>
                                    <th style="padding: 10px; border: 1px solid #ddd;">Dest IP</th>
                                    <th style="padding: 10px; border: 1px solid #ddd;">Dest Port</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 8px; border: 1px solid #ddd;">
                                        <select id="fw-rule1" style="width: 100%;"><option value="ALLOW">ALLOW</option><option value="DENY">DENY</option></select>
                                    </td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">TCP</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Any</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">10.0.0.50</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">80, 443</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; border: 1px solid #ddd;">
                                        <select id="fw-rule2" style="width: 100%;"><option value="ALLOW">ALLOW</option><option value="DENY">DENY</option></select>
                                    </td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">TCP</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">10.0.5.0/24</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">10.0.0.50</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">22</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; border: 1px solid #ddd;">
                                        <select id="fw-rule3" style="width: 100%;"><option value="DENY">DENY</option><option value="ALLOW">ALLOW</option></select>
                                    </td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">TCP</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Any</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">10.0.0.50</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">22</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; border: 1px solid #ddd;">
                                        <select id="fw-rule4" style="width: 100%;"><option value="DENY">DENY</option><option value="ALLOW">ALLOW</option></select>
                                    </td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">IP</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Any</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Any</td>
                                    <td style="padding: 8px; border: 1px solid #ddd;">Any</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <button class="simulation-button" onclick="evaluateFirewallRules()">Commit Firewall Rules</button>
                        <div id="firewall-evaluation-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Session 2: Modern Architectures (Part 2)</h1>
            
            <h2>Zero Trust Network Access (ZTNA)</h2>
            <div style="text-align: center; margin: var(--space-md) 0;">
                <img src="assets/images/network-analyst/6.png" alt="Zero Trust Network Access (ZTNA) Model" style="max-width: 100%; border-radius: var(--radius-md);">
            </div>
            <ul>
                <li>"Never Trust, Always Verify." Traditional networks trust users once they are past the firewall. Zero Trust does not.</li>
                <li>Identity and device posture are verified for every single application transaction.</li>
                <li>Microsegmentation replaces broad subnets, creating secure zones around individual workloads.</li>
            </ul>

            <h2>Virtual Private Networks (VPN) & Cryptography</h2>
            <ul>
                <li>Site-to-Site VPNs (IPsec) link branch offices to headquarters over encrypted internet tunnels.</li>
                <li>Client-to-Site VPNs (OpenVPN, WireGuard) secure remote worker traffic.</li>
                <li>Ensure Perfect Forward Secrecy (PFS) is enabled to protect past sessions if keys are compromised.</li>
            </ul>

            <div class="case-study">
                <h3>Case Study 2: The VPN Credential Stuffing Attack</h3>
                <p>During a shift to remote work, a company quickly deployed an SSL VPN without requiring Multi-Factor Authentication (MFA). Attackers used a list of leaked passwords from an unrelated breach to execute a credential stuffing attack against the VPN portal. They successfully authenticated as a standard user, bypassed the perimeter, and deployed ransomware laterally. Implementing MFA and a Zero Trust overlay would have halted the attack at the authentication gateway.</p>
            </div>
        </div>

        <div class="slide">
            <h1>👁️ Lab: Network Segmentation Strategy</h1>
            
            <div class="interactive-lab">
                <h2>Subnet Planning for Security</h2>
                
                <div class="hands-on-section">
                    <div class="hands-on-title">VLAN Isolation Exercise</div>
                    <div class="demo-box">
                        <p>You have the CIDR block <strong>192.168.100.0/24</strong>. Assign proper segmented subnets to isolate critical assets.</p>
                        
                        <div style="margin: 15px 0;">
                            <label><strong>VLAN 10 - Servers (Requires 14 hosts):</strong></label><br>
                            <select id="vlan-servers" style="padding: 5px; margin-top: 5px;">
                                <option value="wrong">192.168.100.0/24 (254 hosts)</option>
                                <option value="correct">192.168.100.0/28 (30 hosts)</option>
                                <option value="wrong">192.168.100.0/30 (14 hosts - No room for gateway/broadcast)</option>
                            </select>
                        </div>
                        
                        <div style="margin: 15px 0;">
                            <label><strong>VLAN 20 - Guest Wi-Fi (Requires 100 hosts):</strong></label><br>
                            <select id="vlan-guests" style="padding: 5px; margin-top: 5px;">
                                <option value="wrong">192.168.100.128/26 (14 hosts)</option>
                                <option value="correct">192.168.100.128/25 (126 hosts)</option>
                                <option value="wrong">192.168.100.128/24 (Invalid boundary)</option>
                            </select>
                        </div>
                        
                        <br>
                        <button class="simulation-button" onclick="analyzeSubnetting()">Verify Network Topology</button>
                        <div id="subnet-analysis-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>
            
            <div class="solution-box">
                <div class="solution-title">Segmentation Principles</div>
                <ul>
                    <li>Apply strict ACLs between VLANs at the Layer 3 switch or firewall (Inter-VLAN routing).</li>
                    <li>Guest networks should strictly route to the internet interface only.</li>
                    <li>Use isolated Management VLANs exclusively for SSH/WebGUI access to network infrastructure.</li>
                </ul>
            </div>
        </div>

        <div class="slide">
            <h1>Session 3: Integrating Network SecOps</h1>
            
            <h2>Network Traffic Analysis (NTA)</h2>
            <ul>
                <li>Relying solely on firewall logs is insufficient. NTA tools capture and analyze raw network metadata.</li>
                <li>Identify anomalous internal behaviors: a printer suddenly establishing an SSH connection to a database server.</li>
                <li>Detect data exfiltration by monitoring large outbound traffic spikes over non-standard ports.</li>
            </ul>

            <h2>SIEM and SOAR</h2>
            <div style="text-align: center; margin: var(--space-md) 0;">
                <img src="assets/images/network-analyst/7.png" alt="SIEM and SOAR Automation Workflow" style="max-width: 100%; border-radius: var(--radius-md);">
            </div>
            <div class="two-column">
                <div class="card">
                    <h3>SIEM</h3>
                    <p>Security Information and Event Management (e.g., Splunk, ELK, Wazuh). Centralizes logs from switches, firewalls, and endpoints to correlate complex attack chains.</p>
                </div>
                <div class="card">
                    <h3>SOAR</h3>
                    <p>Security Orchestration, Automation, and Response. Automatically executes playbooks (e.g., dynamically updating an edge firewall to block an IP that tripped an IDS rule).</p>
                </div>
            </div>

            <h2>Network Honeypots</h2>
            <ul>
                <li>Deploy decoy servers or services (e.g., a fake SQL database on an exposed subnet).</li>
                <li>Because no legitimate user should ever interact with a honeypot, any connection attempt is a high-fidelity alert of lateral movement or network scanning.</li>
            </ul>
        </div>

        <div class="slide">
            <h1>🤖 Workshop: SIEM Alert Automation</h1>
            
            <div class="interactive-lab">
                <h2>Building a SOAR Playbook</h2>
                
                <div class="hands-on-section">
                    <div class="hands-on-title">Automating Threat Mitigation</div>
                    <div class="solution-box">
                        <div class="demo-box">
                            <h4>Trigger: Suricata detects "ET DROP Dshield Block Listed IP"</h4>
                            <p>Design the automated response playbook:</p>
                            <ol style="margin-left: 20px; margin-top: 10px; font-family: monospace;">
                                <li><strong>Extract:</strong> Parse the Source IP from the Suricata JSON log.</li>
                                <li><strong>Enrich:</strong> Query VirusTotal API for IP reputation score.</li>
                                <li><strong>Condition:</strong> IF Score &gt; 50 THEN:</li>
                                <li><strong>Action:</strong> Push API call to Palo Alto Firewall to add IP to blocklist.</li>
                                <li><strong>Notify:</strong> Send Slack/Teams message to the NOC channel.</li>
                            </ol>
                        </div>
                    </div>
                    
                    <div class="practice-exercise">
                        <div class="practice-title">Network SecOps Roadmap</div>
                        <button class="simulation-button" onclick="generateNetworkRoadmap()">Generate NOC Automation Strategy</button>
                        <div id="noc-roadmap-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>🔧 Lab: NOC Tool Selection & Budgeting</h1>
            
            <div class="interactive-lab">
                <h2>Network Security Tools Assessment</h2>
                
                <div class="practice-exercise">
                    <div class="practice-title">Budgetary Planning for Network Security</div>
                    <div class="demo-box">
                        <h4>Calculate Your Infrastructure Security Investment</h4>
                        <div style="margin-bottom: 15px;">
                            <label>Network Size (Endpoints/Nodes): </label>
                            <input type="number" id="node-count" placeholder="500" style="padding: 5px; margin: 5px; border: 1px solid #ccc; border-radius: 3px;">
                            <br>
                            <label>Infrastructure Type: </label>
                            <select id="infra-profile" style="padding: 5px; margin: 5px;">
                                <option value="standard">Standard (Single Office, Basic Routing)</option>
                                <option value="enhanced">Enhanced (Multi-site VPN, Hybrid Cloud)</option>
                                <option value="premium">Premium (Data Center, High Availability, Zero Trust)</option>
                            </select>
                        </div>
                        <button class="simulation-button" onclick="calculateNetSecROI()">Calculate NetSec Budget</button>
                        <div id="budget-calculation-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Implementation Best Practices and Action Plan</h1>
            
            <h2>Building a Resilient Network Architecture</h2>
            <ul>
                <li><strong>Phase 1: Visibility.</strong> Ensure accurate network topology maps and span ports/taps are configured.</li>
                <li><strong>Phase 2: Hardening.</strong> Disable unused switch ports, enforce strong passwords, and update router firmware.</li>
                <li><strong>Phase 3: Segmentation.</strong> Isolate critical assets into heavily monitored VLANs.</li>
                <li><strong>Phase 4: Inspection.</strong> Deploy inline IPS and encrypted traffic analysis (SSL Inspection).</li>
                <li><strong>Phase 5: Automation.</strong> Implement SIEM log correlation and automated SOAR responses.</li>
            </ul>

            <div class="highlight">
                <h3>The NOC Analyst Mindset</h3>
                <ul>
                    <li>Assume the perimeter has already been breached.</li>
                    <li>Packets don't lie: when in doubt, pull a PCAP.</li>
                    <li>Minimize the attack surface: if a service isn't required for business operations, drop the port.</li>
                    <li>Always maintain offline backups of router and firewall configurations.</li>
                </ul>
            </div>
        </div>

        <div class="slide">
            <h1>🛡️ Advanced Security Assessment</h1>
            
            <div class="interactive-lab">
                <h2>DDoS Incident Response Simulation</h2>
                <div style="text-align: center; margin: var(--space-md) 0;">
                    <img src="assets/images/network-analyst/8.png" alt="DDoS Volumetric Attack and Mitigation Diagram" style="max-width: 100%; border-radius: var(--radius-md);">
                </div>
                <div class="scenario-box">
                    <h3>Emergency Scenario: Volumetric Attack</h3>
                    <p>Your external monitoring tools show internet transit links are at 100% capacity. Legitimate traffic is being dropped. Edge routers are experiencing high CPU load.</p>
                </div>
                <button class="simulation-button" onclick="runDDoSResponseSimulation()">Launch DDoS Response Drill</button>
                <div id="ddos-response-result" class="simulation-result"></div>
            </div>
            
            <div class="interactive-lab">
                <h2>ARP Spoofing Detection</h2>
                <div class="scenario-box">
                    <h3>Scenario: Layer 2 Manipulation</h3>
                    <p>An automated script reports that the MAC address associated with the Default Gateway IP (192.168.1.1) has changed twice in the last 5 minutes on the internal LAN.</p>
                </div>
                <button class="simulation-button" onclick="runArpSpoofSimulation()">Analyze Layer 2 Threat</button>
                <div id="arp-result" class="simulation-result"></div>
            </div>

            <div class="interactive-lab">
                <h2>Zero Trust Architecture Check</h2>
                <div class="practice-exercise">
                    <div class="practice-title">Zero Trust Readiness Assessment</div>
                    <div class="security-checklist">
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="zt1">
                            <label for="zt1">Identity Provider (IdP) enforces MFA for all access</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="zt2">
                            <label for="zt2">Device health/posture is checked before granting application access</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="zt3">
                            <label for="zt3">Applications are hidden from public internet (Reverse Proxy/Tunnel)</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="zt4">
                            <label for="zt4">Least privilege access is granted strictly on a per-session basis</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="zt5">
                            <label for="zt5">All network traffic is encrypted end-to-end (internal and external)</label>
                        </div>
                    </div>
                    <button class="simulation-button" onclick="assessZeroTrustCompliance()">Assess Zero Trust Maturity</button>
                    <div id="compliance-result" class="simulation-result"></div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Assessment: Test Your NetSec Knowledge</h1>
            
            <div class="quiz-container">
                <div class="question" id="q1">
                    <h4>1. Which OSI layer do routers primarily operate on?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Layer 2 (Data Link)</li>
                        <li data-answer="correct">Layer 3 (Network)</li>
                        <li data-answer="wrong">Layer 4 (Transport)</li>
                        <li data-answer="wrong">Layer 7 (Application)</li>
                    </ul>
                </div>

                <div class="question" id="q2">
                    <h4>2. What is the standard port for HTTPS traffic?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Port 80</li>
                        <li data-answer="wrong">Port 22</li>
                        <li data-answer="correct">Port 443</li>
                        <li data-answer="wrong">Port 53</li>
                    </ul>
                </div>

                <div class="question" id="q3">
                    <h4>3. Which tool is the industry standard for graphical network protocol analysis?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Nmap</li>
                        <li data-answer="correct">Wireshark</li>
                        <li data-answer="wrong">Metasploit</li>
                        <li data-answer="wrong">Burp Suite</li>
                    </ul>
                </div>

                <div class="question" id="q4">
                    <h4>4. What does the "SYN" in SYN Flood refer to?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Synthetic Routing</li>
                        <li data-answer="correct">Synchronize (The first step of the TCP 3-way handshake)</li>
                        <li data-answer="wrong">Synergy Protocol</li>
                        <li data-answer="wrong">Synchronous Data Link</li>
                    </ul>
                </div>

                <div class="question" id="q5">
                    <h4>5. What is the primary difference between an IDS and an IPS?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">An IPS can actively block traffic; an IDS only alerts.</li>
                        <li data-answer="wrong">An IDS is hardware; an IPS is software.</li>
                        <li data-answer="wrong">An IDS encrypts data; an IPS decrypts data.</li>
                        <li data-answer="wrong">There is no difference.</li>
                    </ul>
                </div>

                <div class="question" id="q6">
                    <h4>6. Which protocol resolves IP addresses to MAC addresses?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">DNS</li>
                        <li data-answer="wrong">DHCP</li>
                        <li data-answer="correct">ARP</li>
                        <li data-answer="wrong">BGP</li>
                    </ul>
                </div>

                <div class="question" id="q7">
                    <h4>7. What is BGP Hijacking?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Guessing router passwords</li>
                        <li data-answer="wrong">Flooding a switch with MAC addresses</li>
                        <li data-answer="correct">Falsely announcing ownership of groups of IP addresses to redirect internet traffic</li>
                        <li data-answer="wrong">Intercepting local Wi-Fi traffic</li>
                    </ul>
                </div>

                <div class="question" id="q8">
                    <h4>8. A /24 subnet mask provides how many usable host IP addresses?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">256</li>
                        <li data-answer="correct">254</li>
                        <li data-answer="wrong">128</li>
                        <li data-answer="wrong">512</li>
                    </ul>
                </div>

                <div class="question" id="q9">
                    <h4>9. Which technology provides port-based network access control (NAC)?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">802.1X</li>
                        <li data-answer="wrong">IPsec</li>
                        <li data-answer="wrong">OSPF</li>
                        <li data-answer="wrong">NAT</li>
                    </ul>
                </div>

                <div class="question" id="q10">
                    <h4>10. What is a "DMZ" in network security?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">A protocol for dynamic routing</li>
                        <li data-answer="wrong">A tool for mapping network devices</li>
                        <li data-answer="correct">A physical or logical subnetwork that exposes an organization's external-facing services to the internet</li>
                        <li data-answer="wrong">A type of VPN encryption</li>
                    </ul>
                </div>

                <div class="question" id="q11">
                    <h4>11. In a firewall rule, what does the "Implicit Deny" principle mean?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">All traffic is allowed unless specifically blocked</li>
                        <li data-answer="correct">If traffic doesn't match an explicitly allowed rule, it is dropped</li>
                        <li data-answer="wrong">Internal traffic is always trusted</li>
                        <li data-answer="wrong">Ping requests are always denied</li>
                    </ul>
                </div>

                <div class="question" id="q12">
                    <h4>12. Which protocol suite provides secure communications over IP networks by authenticating and encrypting IP packets?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">IPsec</li>
                        <li data-answer="wrong">ICMP</li>
                        <li data-answer="wrong">TLS</li>
                        <li data-answer="wrong">SSH</li>
                    </ul>
                </div>

                <div class="question" id="q13">
                    <h4>13. What is a "Honeypot"?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">A secure vault for passwords</li>
                        <li data-answer="correct">A decoy system designed to lure attackers and log their activities</li>
                        <li data-answer="wrong">A high-speed core switch</li>
                        <li data-answer="wrong">An automated patching server</li>
                    </ul>
                </div>

                <div class="question" id="q14">
                    <h4>14. Which command-line tool is best used to verify network routing paths?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">ping</li>
                        <li data-answer="wrong">ipconfig</li>
                        <li data-answer="correct">traceroute / tracert</li>
                        <li data-answer="wrong">netstat</li>
                    </ul>
                </div>

                <div class="question" id="q15">
                    <h4>15. Network Address Translation (NAT) primarily serves to:</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Encrypt data payloads</li>
                        <li data-answer="correct">Map multiple private IP addresses to a single public IP address</li>
                        <li data-answer="wrong">Block malware from executing</li>
                        <li data-answer="wrong">Assign IP addresses to clients automatically</li>
                    </ul>
                </div>

                <div class="question" id="q16">
                    <h4>16. What does a SIEM system do?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Routes traffic between VLANs</li>
                        <li data-answer="correct">Aggregates and analyzes log data from across the IT infrastructure</li>
                        <li data-answer="wrong">Provides wireless access points</li>
                        <li data-answer="wrong">Manages DNS records</li>
                    </ul>
                </div>

                <div class="question" id="q17">
                    <h4>17. A core principle of "Zero Trust" is:</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Trust traffic originating from inside the firewall</li>
                        <li data-answer="correct">Never trust, always verify—regardless of network location</li>
                        <li data-answer="wrong">Use a single, strong password for all routers</li>
                        <li data-answer="wrong">Disable all encryption to inspect traffic easily</li>
                    </ul>
                </div>

                <div class="question" id="q18">
                    <h4>18. What type of attack relies on a botnet sending massive amounts of UDP traffic to a target?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Cross-Site Scripting</li>
                        <li data-answer="wrong">Phishing</li>
                        <li data-answer="correct">Volumetric DDoS</li>
                        <li data-answer="wrong">SQL Injection</li>
                    </ul>
                </div>

                <div class="question" id="q19">
                    <h4>19. Which Wireshark filter will show only HTTP traffic?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">ip.addr == 80</li>
                        <li data-answer="correct">tcp.port == 80</li>
                        <li data-answer="wrong">protocol == web</li>
                        <li data-answer="wrong">show_http</li>
                    </ul>
                </div>

                <div class="question" id="q20">
                    <h4>20. What is MAC Spoofing?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Creating a fake website</li>
                        <li data-answer="wrong">Intercepting emails</li>
                        <li data-answer="correct">Changing the factory-assigned Media Access Control address of a network interface</li>
                        <li data-answer="wrong">Cracking a Wi-Fi password</li>
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
            <h1>Resources & Action Plan for Network Analysts</h1>
            
            <div class="hands-on-section">
                <div class="hands-on-title">Network Security Resources</div>
                
                <div class="solution-box">
                    <div class="solution-title">Essential Documentation & Frameworks</div>
                    <div class="step-by-step">
                        <strong>Architectural Standards:</strong><br>
                        • NIST SP 800-207 (Zero Trust Architecture)<br>
                        • CIS Controls (v8) - Specifically Network Infrastructure<br>
                        • Mitre ATT&CK Framework (Network Effects)<br>
                        • BCP 38 (Network Ingress Filtering)
                    </div>
                </div>

                <div class="solution-box">
                    <div class="solution-title">Training & Simulation Platforms</div>
                    <div class="step-by-step">
                        <strong>Interactive Practice:</strong><br>
                        • Malware-Traffic-Analysis.net (Excellent PCAP exercises)<br>
                        • GNS3 / Cisco Packet Tracer / EVE-NG (Virtual Labs)<br>
                        • TryHackMe (Network / Zeek challenges)<br>
                        • Security Onion (Open source threat hunting platform)
                    </div>
                </div>

                <div class="demo-box">
                    <h3>🎯 Your NOC Commitment</h3>
                    <p><strong>Take Action Within 7 Days:</strong></p>
                    <ol>
                        <li>Review the last hit rule ("Deny All") on your edge firewalls.</li>
                        <li>Install Wireshark and analyze a local PCAP of your own workstation traffic.</li>
                        <li>Validate that your core switches are logging to a centralized syslog server.</li>
                        <li>Plan a tabletop exercise for a severe DDoS scenario.</li>
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

    <script src="js/network-analyst.js"></script>
</body>
</html>