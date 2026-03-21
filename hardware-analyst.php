<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardware Security Analyst Training</title>
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/hardware-analyst.css">
</head>
<body>
    <div class="presentation-container">
        <div class="slide-counter">
            <span id="currentSlide">1</span> / <span id="totalSlides"></span>
        </div>

        <div class="slide active">
            <div class="title-slide">
                <div class="security-icon">🛡️</div>
                <h1>Hardware Security Analyst</h1>
                <p class="subtitle">Practical Hardware Cybersecurity and Analysis</p>
                <div class="highlight">
                    <h3>Comprehensive Hardware Security Training Program</h3>
                    <p>Securing Systems at the Physical and Firmware Level</p>
                    <p><strong>Hands-On Learning with Real Hardware Analysis Tools</strong></p>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Session 1: Common Hardware Security Risks</h1>
            
            <h2>Essential Hardware Security Concepts</h2>
            <ul>
                <li>Understand physical access vulnerabilities (Evil Maid attacks)</li>
                <li>Evaluate hardware supply chain integrity</li>
                <li>Analyze counterfeit and tampered components</li>
                <li>Examine firmware extraction vulnerabilities</li>
                <li>Monitor external interfaces (USB, Thunderbolt) for DMA attacks</li>
            </ul>

            <div class="highlight">
                <h2>Critical Hardware Security Statistics</h2>
                <p><strong>Hardware attacks are on the rise.</strong> While software vulnerabilities are heavily patched, attackers are increasingly pivoting to physical hardware. From malicious USB implants to supply chain interdictions, physical access to a device often equates to full system compromise.</p>
            </div>

            <h2>The Challenge: Securing the Physical Perimeter</h2>
            <ul>
                <li>Hardware analysts must evaluate physical security boundaries of devices</li>
                <li>Detecting microscopic alterations on PCBs</li>
                <li>Protecting sensitive keys within silicon (HSM, TPM)</li>
                <li>Maintaining device integrity through transit and deployment</li>
                <li>Building hardware trust anchors</li>
            </ul>

            <h2>Common Hardware Security Risks</h2>
            <div style="text-align: center; margin: var(--space-lg) 0;">
                <img src="assets/images/hardware-analyst/1.png" alt="Evil Maid attack flow diagram" style="max-width: 100%; border-radius: var(--radius-md);">
            </div>
            <ul>
                <li>Supply chain interdiction (routers/servers modified in transit)</li>
                <li>Malicious firmware flashing via exposed debug ports (JTAG/UART)</li>
                <li>Hardware Trojans embedded in silicon design</li>
                <li>Side-channel attacks (Power, Electromagnetic, Acoustic)</li>
                <li>Cold Boot attacks targeting volatile memory (RAM)</li>
                <li>Direct Memory Access (DMA) attacks via exposed PCIe/Thunderbolt</li>
                <li>Bypassing secure boot via fault injection/glitching</li>
            </ul>
            <div style="text-align: center; margin: var(--space-lg) 0;">
                <img src="assets/images/hardware-analyst/2.png" alt="DMA hardware attack diagram" style="max-width: 100%; border-radius: var(--radius-md);">
            </div>

            <div class="case-study">
                <h3>Case Study 1: The Supply Chain Interdiction</h3>
                <p>A major enterprise discovered unauthorized microscopic chips soldered onto server motherboards procured from a third-party vendor. These implants successfully bypassed standard software security tools and created a stealthy backdoor into the corporate network, demonstrating the critical need for hardware-level audits and visual inspections.</p>
            </div>
        </div>

        <div class="slide">
            <h1>🔬 Hands-On Lab: Hardware Risk Assessment</h1>
            
            <div class="interactive-lab">
                <h2>Hardware Security Assessment Tool</h2>
                <div style="text-align: center; margin: var(--space-md) 0;">
                    <img src="assets/images/hardware-analyst/3.png" alt="Enterprise hardware risk assessment framework" style="max-width: 100%; border-radius: var(--radius-md);">
                </div>
                <div class="practice-exercise">
                    <div class="practice-title">Evaluate Your Organization's Hardware Risk Level</div>
                    
                    <div class="security-checklist">
                        <h3>Current Hardware Security Practices:</h3>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk1" data-weight="5">
                            <label for="risk1">Do you enforce Secure Boot and BootGuard on all endpoints?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk2" data-weight="4">
                            <label for="risk2">Are chassis intrusion detection switches enabled and monitored?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk3" data-weight="5">
                            <label for="risk3">Do you conduct hardware teardowns and visual inspections for new vendors?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk4" data-weight="3">
                            <label for="risk4">Are exposed debug ports (JTAG/UART) disabled or fused before deployment?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk5" data-weight="4">
                            <label for="risk5">Are tamper-evident seals utilized on critical infrastructure hardware?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk6" data-weight="5">
                            <label for="risk6">Is a TPM 2.0 module utilized for all cryptographic key storage?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk7" data-weight="3">
                            <label for="risk7">Do you restrict Direct Memory Access (DMA) on external ports (Thunderbolt)?</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="risk-checkbox" id="risk8" data-weight="4">
                            <label for="risk8">Are hardware assets tracked throughout their entire lifecycle?</label>
                        </div>
                    </div>
                    
                    <button class="simulation-button" onclick="calculateRiskScore()">Calculate Hardware Risk Score</button>
                    <div id="risk-assessment-result" class="simulation-result"></div>
                </div>
            </div>

            <div class="solution-box">
                <div class="solution-title">Free Hardware Assessment Tools</div>
                <div class="resource-link">
                    <strong>CHIPSEC Framework:</strong> 
                    An open-source framework for analyzing the security of PC platforms including hardware, system firmware (BIOS/UEFI), and platform components.
                </div>
                <div class="resource-link">
                    <strong>Fwupd / LVFS:</strong> 
                    Linux Vendor Firmware Service tools to assess and update firmware securely.
                </div>
                <div class="resource-link">
                    <strong>NIST SP 800-193:</strong> 
                    Platform Firmware Resiliency Guidelines for assessing hardware security foundations.
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>🎯 Workshop: Hardware Teardown & Inspection</h1>
            
            <div class="hands-on-section">
                <div class="hands-on-title">Perform a Physical Hardware Audit</div>
                
                <div class="solution-box">
                    <div class="solution-title">Essential Analyst Toolkit</div>
                    <div class="step-by-step">
                        <strong>1. Visual Inspection Tools:</strong><br>
                        <div style="text-align: center; margin: var(--space-sm) 0;">
                            <img src="assets/images/hardware-analyst/4.png" alt="PCB inspection using a digital microscope" style="max-width: 100%; border-radius: var(--radius-md);">
                        </div>
                        • Digital Microscope (inspecting solder joints, component markings)<br>
                        • UV Flashlight (detecting conformal coating manipulation)<br>
                        • X-Ray imaging (identifying internal PCB layer modifications)<br><br>
                        
                        <strong>2. Electrical Interface Tools:</strong><br>
                        <div style="text-align: center; margin: var(--space-sm) 0;">
                            <img src="assets/images/hardware-analyst/5.png" alt="Logic analyzer capturing signals" style="max-width: 100%; border-radius: var(--radius-md);">
                        </div>
                        • Multimeter (continuity and voltage testing)<br>
                        • Logic Analyzer (capturing high-speed digital signals)<br>
                        • Oscilloscope (analyzing analog waveforms and side-channel power drops)<br><br>
                        
                        <strong>3. Interfacing Hardware:</strong><br>
                        • Bus Pirate / Shikra / JTAGulator (identifying and tapping hardware buses)
                    </div>
                </div>

                <div class="practice-exercise">
                    <div class="practice-title">Analyze Serial Boot Output</div>
                    <p><strong>Exercise:</strong> You have connected a UART adapter to an embedded device. Analyze the serial console output below and identify the bootloader, kernel version, and if a root shell is exposed.</p>
                    
                    <div class="demo-box">
                        <h4>🔌 UART Terminal Console</h4>
                        <textarea id="uart-output" style="width: 100%; height: 200px; padding: 10px; border: 2px solid #3498db; border-radius: 8px; font-family: monospace;" placeholder="Paste serial output here...">
U-Boot 2021.04-rc4 (May 15 2023 - 10:11:22)
CPU:   ARM Cortex-A9
DRAM:  512 MiB
Loading Environment from SPI Flash... OK
Starting kernel ...

[    0.000000] Linux version 5.10.x (builder@server) (gcc version 9.3.0)
[    2.143211] Freeing unused kernel memory: 1024K
/ # root shell enabled
/ # </textarea>
                        <br><br>
                        <button class="simulation-button" onclick="analyzeSerialOutput()">Analyze UART Output</button>
                        <div id="uart-validation" class="simulation-result"></div>
                    </div>
                </div>
            </div>

            <div class="case-study">
                <h3>Real Implementation: IoT Vendor Security Audit</h3>
                <p>A security consulting firm utilized JTAG debugging tools to extract the firmware from a popular IoT camera. Results:</p>
                <ul>
                    <li>Extracted hardcoded AWS credentials directly from the flash chip</li>
                    <li>Discovered a hidden UART console yielding root access without a password</li>
                    <li>Demonstrated how hardware flaws bypassed all software-level encryption</li>
                </ul>
            </div>
        </div>

        <div class="slide">
            <h1>Session 2: Hardware Prevention Measures (Part 1)</h1>
            
            <h2>Enforcing Hardware Trust Anchors</h2>
            <div style="text-align: center; margin: var(--space-md) 0;">
                <img src="assets/images/hardware-analyst/6.png" alt="UEFI Secure Boot verification chain diagram" style="max-width: 100%; border-radius: var(--radius-md);">
            </div>
            <ul>
                <li>Enable Secure Boot to cryptographically verify the boot sequence</li>
                <li>Utilize Trusted Platform Modules (TPM) for secure key storage</li>
                <li>Implement Hardware Security Modules (HSM) for enterprise infrastructure</li>
                <li>Leverage Intel BootGuard and AMD Platform Secure Boot (PSB)</li>
                <li>Require measured boot for runtime attestation</li>
            </ul>

            <h2>Physical Tamper Protections</h2>
            <ul>
                <li>Apply and document tamper-evident seals on chassis seams</li>
                <li>Utilize anti-tamper mesh enclosures for cryptographic processors</li>
                <li>Configure chassis intrusion switches to halt system boot</li>
                <li>Potting (epoxy resin) over critical debug headers</li>
                <li>Implement zeroization circuits that wipe keys upon physical breach</li>
            </ul>

            <h2>Supply Chain and Lifecycle Management</h2>
            <ul>
                <li>Strict vendor vetting and hardware bill of materials (HBOM) audits</li>
                <li>Secure hardware shipping procedures (tamper-evident bags)</li>
                <li>Cryptographic verification of firmware updates before flashing</li>
                <li>Secure hardware decommissioning and cryptographic erasure</li>
            </ul>
        </div>

        <div class="slide">
            <h1>🔐 Lab: TPM & Secure Boot Implementation</h1>
            
            <div class="interactive-lab">
                <h2>Trusted Platform Module Configuration Guide</h2>
                <div style="text-align: center; margin: var(--space-md) 0;">
                    <img src="assets/images/hardware-analyst/7.png" alt="TPM 2.0 internal components and key hierarchy" style="max-width: 100%; border-radius: var(--radius-md);">
                </div>
                
                <div class="solution-box">
                    <div class="solution-title">Key TPM 2.0 Concepts</div>
                    <div class="tool-grid">
                        <div class="tool-card">
                            <h3>Endorsement Key (EK)</h3>
                            <ul>
                                <li>Injected by TPM manufacturer</li>
                                <li>Unique, static identifier</li>
                                <li>Used for attestation</li>
                                <li>Cannot be changed</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>Platform Configuration Registers (PCRs)</h3>
                            <ul>
                                <li>Store cryptographic measurements</li>
                                <li>Cannot be overwritten, only "extended"</li>
                                <li>Ensure boot path integrity</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>Sealing Data</h3>
                            <ul>
                                <li>Encrypts data tied to PCR state</li>
                                <li>Data only unseals if system is trusted</li>
                                <li>Defeats Evil Maid attacks</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>Storage Root Key (SRK)</h3>
                            <ul>
                                <li>Root of the TPM storage hierarchy</li>
                                <li>Generated by the user/owner</li>
                                <li>Never leaves the TPM chip</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="practice-exercise">
                    <div class="practice-title">TPM Implementation Checklist</div>
                    <div class="security-checklist">
                        <div class="checklist-item">
                            <input type="checkbox" class="tpm-checkbox" id="tpm1">
                            <label for="tpm1">Verify TPM 2.0 is enabled in BIOS/UEFI</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="tpm-checkbox" id="tpm2">
                            <label for="tpm2">Clear any pre-existing TPM ownership keys</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="tpm-checkbox" id="tpm3">
                            <label for="tpm3">Configure Secure Boot with correct PK, KEK, and db certificates</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="tpm-checkbox" id="tpm4">
                            <label for="tpm4">Enable BitLocker / LUKS utilizing TPM sealing</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="tpm-checkbox" id="tpm5">
                            <label for="tpm5">Set BIOS admin password to prevent tampering</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="tpm-checkbox" id="tpm6">
                            <label for="tpm6">Back up recovery keys to secure offline storage</label>
                        </div>
                    </div>
                    <div id="tpm-progress" class="progress-tracker">
                        <div class="progress-bar">
                            <div class="progress-fill">0% Complete</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hands-on-section">
                <div class="hands-on-title">Firmware Hash Verification Tool</div>
                <div class="demo-box">
                    <h4>Test Firmware Hash Integrity</h4>
                    <input type="text" id="firmware-hash-test" placeholder="Enter a SHA256 hash to verify format" style="width: 70%; padding: 10px; border: 2px solid #ccc; border-radius: 5px; margin-right: 10px;">
                    <button class="simulation-button" onclick="testFirmwareHash()" style="padding: 10px 15px;">Verify Format</button>
                    <div id="hash-result" class="simulation-result"></div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Session 2: Hardware Prevention Measures (Part 2)</h1>
            
            <h2>Hardware Data At Rest Encryption</h2>
            <div style="text-align: center; margin: var(--space-md) 0;">
                <img src="assets/images/hardware-analyst/8.png" alt="HSM physical and logical architecture" style="max-width: 100%; border-radius: var(--radius-md);">
            </div>
            <ul>
                <li>Implement Self-Encrypting Drives (SEDs) supporting OPAL standards</li>
                <li>Utilize hardware RAID controllers with encryption key management</li>
                <li>Ensure FIPS 140-2/3 validation for cryptographic hardware</li>
                <li>Enforce pre-boot authentication (PBA)</li>
            </ul>

            <h2>Monitoring Hardware Logs</h2>
            <ul>
                <li>Monitor BMC (Baseboard Management Controller) logs</li>
                <li>Audit UEFI Secure Boot variable changes</li>
                <li>Track physical chassis intrusion events via IPMI</li>
                <li>Alert on unauthorized USB device connections</li>
            </ul>

            <div class="case-study">
                <h3>Case Study 2: Successful Prevention - Financial Data Center</h3>
                <p>A data center implemented FIPS 140-2 Level 3 HSMs and strict tamper-evident mesh enclosures. When a malicious insider attempted to physically extract the master encryption keys by drilling into the server casing, the intrusion mesh detected the voltage drop. The hardware zeroized the cryptographic keys within milliseconds, thwarting the physical attack completely.</p>
            </div>
        </div>

        <div class="slide">
            <h1>🔐 Lab: Hardware Encryption Implementation</h1>
            
            <div class="interactive-lab">
                <h2>Cryptographic Hardware Standards</h2>
                
                <div class="solution-box">
                    <div class="solution-title">Encryption Device Categories</div>
                    <div style="text-align: center; margin: var(--space-sm) 0;">
                        <img src="assets/images/hardware-analyst/9.png" alt="SED OPAL 2.0 architecture" style="max-width: 100%; border-radius: var(--radius-md);">
                    </div>
                    <div class="tool-grid">
                        <div class="tool-card">
                            <h3>SEDs (Self-Encrypting Drives)</h3>
                            <ul>
                                <li>Encryption performed by drive controller</li>
                                <li>Zero performance impact on CPU</li>
                                <li>TCG Opal 2.0 compliant</li>
                                <li>Instant cryptographic erasure</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>HSMs (Hardware Security Modules)</h3>
                            <ul>
                                <li>Dedicated crypto processor</li>
                                <li>High-speed key generation</li>
                                <li>Tamper-resistant physical design</li>
                                <li>Used for CA root keys</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>Security Keys (FIDO2)</h3>
                            <ul>
                                <li>YubiKey, Google Titan</li>
                                <li>Hardware-backed MFA</li>
                                <li>Phishing-resistant</li>
                                <li>Secure element chip inside</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>Smart Cards</h3>
                            <ul>
                                <li>PIV/CAC cards</li>
                                <li>Microprocessor embedded</li>
                                <li>Requires physical possession and PIN</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="practice-exercise">
                    <div class="practice-title">Device Lifecycle Implementation Plan</div>
                    <p><strong>Exercise:</strong> Create a hardware security lifecycle strategy</p>
                    
                    <div class="demo-box">
                        <button class="simulation-button" onclick="generateDeviceLifecyclePlan()">Generate Lifecycle Strategy</button>
                        <div id="lifecycle-plan-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>👁️ Lab: Hardware Security Monitoring</h1>
            
            <div class="interactive-lab">
                <h2>Open Source Hardware Monitoring Tools</h2>
                
                <div class="solution-box">
                    <div class="solution-title">Firmware & Hardware Monitoring</div>
                    <div class="tool-grid">
                        <div class="tool-card">
                            <h3>CHIPSEC</h3>
                            <div style="text-align: center; margin: var(--space-xs) 0;">
                                <img src="assets/images/hardware-analyst/10.png" alt="SPI flash memory and CHIPSEC firmware dumping" style="max-width: 100%; border-radius: var(--radius-md);">
                            </div>
                            <ul>
                                <li>Platform security assessment</li>
                                <li>Reads SPI flash contents</li>
                                <li>Checks SMM vulnerabilities</li>
                                <li>Validates secure boot configuration</li>
                            </ul>
                        </div>
                        <div class="tool-card">
                            <h3>Flashrom</h3>
                            <ul>
                                <li>Read/Write flash chips</li>
                                <li>Supports hundreds of EEPROMs</li>
                                <li>Used for firmware dumping</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="hands-on-section">
                    <div class="hands-on-title">Boot Log Analysis Exercise</div>
                    <div class="demo-box">
                        <h4>Sample Secure Boot Audit Log</h4>
                        <div style="background: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 8px; font-family: monospace; font-size: 12px; overflow-x: auto;">
[0.000000] EFI: Secure Boot is enabled.<br>
[0.012300] Integrity: Loading X.509 certificate: Microsoft Windows Production PCA 2011<br>
[0.054320] Loading kernel/vmlinuz-5.10...<br>
[0.065400] EFI: Certificate validation failed.<br>
[0.065500] Integrity: Problem loading X.509 certificate -65<br>
[0.070000] Kernel is not signed with trusted key.<br>
[0.071000] System halting due to Secure Boot violation.<br>
                        </div>
                        <button class="simulation-button" onclick="analyzeBootLogSample()">Analyze Boot Logs</button>
                        <div id="log-analysis-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Session 3: Tools & Advanced Hardware Analysis</h1>
            
            <h2>Hardware Auditing Tools</h2>
            <div style="text-align: center; margin: var(--space-md) 0;">
                <img src="assets/images/hardware-analyst/11.png" alt="Decapsulation process exposing a silicon die" style="max-width: 100%; border-radius: var(--radius-md);">
            </div>
            <ul>
                <li>Use Logic Analyzers to reverse engineer undocumented protocols</li>
                <li>Utilize JTAG debugging to pause CPU execution and read memory</li>
                <li>Employ Oscilloscopes for Power Analysis (DPA/SPA)</li>
                <li>Use Decapsulation chemicals (fuming nitric acid) for die inspection</li>
            </ul>

            <h2>Balancing DevSecOps with Hardware</h2>
            <ul>
                <li>Integrate firmware vulnerability scanning into CI/CD pipelines</li>
                <li>Automate firmware extraction and binary analysis</li>
                <li>Require reproducible firmware builds</li>
            </ul>

            <div class="case-study">
                <h3>Case Study 3: The Rowhammer Attack</h3>
                <div style="text-align: center; margin: var(--space-md) 0;">
                    <img src="assets/images/hardware-analyst/12.png" alt="Rowhammer attack DRAM bit flip mechanism" style="max-width: 100%; border-radius: var(--radius-md);">
                </div>
                <p>Researchers discovered that by rapidly reading specific memory rows in DRAM, they could cause electrical interference that flipped bits in adjacent rows. This hardware flaw allowed attackers to gain root privileges purely through software execution, prompting the hardware industry to implement Target Row Refresh (TRR) mitigations in modern memory controllers.</p>
            </div>
        </div>

        <div class="slide">
            <h1>🤖 Workshop: Hardware Audit Automation</h1>
            
            <div class="interactive-lab">
                <h2>Automating Hardware Checks</h2>
                <div style="text-align: center; margin: var(--space-md) 0;">
                    <img src="assets/images/hardware-analyst/13.png" alt="Firmware vulnerability scanning in CI/CD" style="max-width: 100%; border-radius: var(--radius-md);">
                </div>
                
                <div class="practice-exercise">
                    <div class="practice-title">Hardware Automation Roadmap</div>
                    <div class="demo-box">
                        <button class="simulation-button" onclick="generateHardwareAuditRoadmap()">Create Hardware Audit Roadmap</button>
                        <div id="automation-roadmap-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>
            
            <div class="hands-on-section">
                <div class="hands-on-title">Sample CHIPSEC Script</div>
                <div class="solution-box">
                    <div class="solution-title">Automated Firmware Check</div>
                    <div class="demo-box">
                        <h4>Python CHIPSEC Integration</h4>
                        <div style="background: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 8px; font-family: monospace; font-size: 12px; overflow-x: auto;">
import chipsec.api.core
cs = chipsec.api.core.cs()
cs.init(None, True, True)

# Check SPI Flash write protection
spi_prot = cs.module('common.spi_lock')
result = spi_prot.run(cs)
if result == spi_prot.RESULT_PASSED:
    print("SPI Flash is locked. Secure.")
else:
    print("WARNING: SPI Flash is writeable!")
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>🔧 Lab: Hardware Analyst Tool Selection</h1>
            
            <div class="interactive-lab">
                <h2>Comprehensive Hardware Tools Assessment</h2>
                
                <div class="practice-exercise">
                    <div class="practice-title">Budgetary Planning for Hardware Labs</div>
                    <div class="demo-box">
                        <h4>Calculate Your Hardware Security Investment</h4>
                        <div style="margin-bottom: 15px;">
                            <label>Number of Hardware Analysts: </label>
                            <input type="number" id="hr-staff-count" placeholder="2" style="padding: 5px; margin: 5px; border: 1px solid #ccc; border-radius: 3px;">
                            <br>
                            <label>Hardware Target Complexity: </label>
                            <select id="priority-level" style="padding: 5px; margin: 5px;">
                                <option value="standard">Standard (Basic embedded boards)</option>
                                <option value="enhanced">Enhanced (Smartphones, Routers)</option>
                                <option value="premium">Premium (Servers, HSMs, Advanced Silicon)</option>
                            </select>
                        </div>
                        <button class="simulation-button" onclick="calculateHardwareSecurityROI()">Calculate Lab Budget</button>
                        <div id="budget-calculation-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Implementation Best Practices and Action Plan</h1>
            
            <h2>Building a Hardware Security Program</h2>
            <div style="text-align: center; margin: var(--space-md) 0;">
                <img src="assets/images/hardware-analyst/14.png" alt="Hardware security asset lifecycle management" style="max-width: 100%; border-radius: var(--radius-md);">
            </div>
            <ul>
                <li><strong>Phase 1:</strong> Identify and inventory all critical hardware assets.</li>
                <li><strong>Phase 2:</strong> Implement basic physical security (locks, tamper seals).</li>
                <li><strong>Phase 3:</strong> Enforce cryptographic hardware standards (TPM, Secure Boot).</li>
                <li><strong>Phase 4:</strong> Develop internal hardware teardown and audit capabilities.</li>
                <li><strong>Phase 5:</strong> Continuous supply chain monitoring and vendor auditing.</li>
            </ul>

            <div class="highlight">
                <h3>The Analyst Mindset</h3>
                <ul>
                    <li>Never trust the software layer implicitly; verify at the hardware root.</li>
                    <li>Assume physical access equates to eventual compromise.</li>
                    <li>Always look for undocumented debug ports.</li>
                    <li>Maintain strict ESD (Electrostatic Discharge) safety in the lab.</li>
                </ul>
            </div>
        </div>

        <div class="slide">
            <h1>🛡️ Advanced Security Assessment</h1>
            
            <div class="interactive-lab">
                <h2>Hardware Trojan Detection Simulation</h2>
                <div style="text-align: center; margin: var(--space-md) 0;">
                    <img src="assets/images/hardware-analyst/15.png" alt="Hardware Trojan detection methodology" style="max-width: 100%; border-radius: var(--radius-md);">
                </div>
                <div class="scenario-box">
                    <h3>Scenario: Rogue Component Analysis</h3>
                    <p>You are inspecting a new batch of network switches. Run the visual and electrical audit to spot counterfeit or malicious chips.</p>
                </div>
                <button class="simulation-button" onclick="runHardwareTrojanSimulation()">Run Component Audit</button>
                <div id="phishing-result" class="simulation-result"></div>
            </div>

            <div class="interactive-lab">
                <h2>Physical Breach Simulation (Evil Maid)</h2>
                <div class="scenario-box">
                    <h3>Emergency Scenario: Evil Maid Attack</h3>
                    <p>An executive left their laptop unattended in a hotel room. They noticed the tamper seal is slightly peeling. Respond to the potential hardware breach.</p>
                </div>
                <button class="simulation-button" onclick="runPhysicalBreachSimulation()">Launch Evil Maid Response Drill</button>
                <div id="breach-response-result" class="simulation-result"></div>
            </div>
            
            <div class="interactive-lab">
                <h2>Hardware Incident Response</h2>
                <div class="scenario-box">
                    <h3>Scenario: Security Incident Response</h3>
                    <p>Practice responding to a hardware security incident affecting critical infrastructure.</p>
                </div>
                
                <button class="simulation-button" onclick="runHardwareIncidentResponse()">Launch Incident Response Simulation</button>
                <div id="incident-result" class="simulation-result"></div>
            </div>

            <div class="interactive-lab">
                <h2>Compliance Assessment Tool</h2>
                <div class="practice-exercise">
                    <div class="practice-title">FIPS 140 / Hardware Compliance Check</div>
                    <div class="security-checklist">
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="comp1">
                            <label for="comp1">Cryptographic boundary is strictly defined</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="comp2">
                            <label for="comp2">Tamper-evident coatings applied to crypto chips</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="comp3">
                            <label for="comp3">Zeroization mechanisms tested and functional</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="comp4">
                            <label for="comp4">Power-up self-tests implemented</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" class="compliance-checkbox" id="comp5">
                            <label for="comp5">Role-based authentication for hardware management</label>
                        </div>
                    </div>
                    <button class="simulation-button" onclick="assessHardwareCompliance()">Assess Hardware Compliance</button>
                    <div id="compliance-result" class="simulation-result"></div>
                </div>
            </div>
        </div>

        <div class="slide">
            <h1>Assessment: Test Your Hardware Security Knowledge</h1>
            
            <div class="quiz-container">
                <div class="question" id="q1">
                    <h4>1. What is an Evil Maid attack?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">A social engineering attack over email</li>
                        <li data-answer="wrong">An insider threat from IT staff</li>
                        <li data-answer="correct">An attack requiring physical access to an unattended device</li>
                        <li data-answer="wrong">A remote network intrusion</li>
                    </ul>
                </div>

                <div class="question" id="q2">
                    <h4>2. What does TPM stand for in hardware security?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Total Power Management</li>
                        <li data-answer="correct">Trusted Platform Module</li>
                        <li data-answer="wrong">Targeted Physical Memory</li>
                        <li data-answer="wrong">Threat Prevention Mechanism</li>
                    </ul>
                </div>

                <div class="question" id="q3">
                    <h4>3. Which protocol is commonly exploited for low-level hardware debugging and memory reading?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">HTTP</li>
                        <li data-answer="correct">JTAG</li>
                        <li data-answer="wrong">SSH</li>
                        <li data-answer="wrong">DNS</li>
                    </ul>
                </div>

                <div class="question" id="q4">
                    <h4>4. What is the primary purpose of a logic analyzer?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">Capturing and displaying multiple digital signals</li>
                        <li data-answer="wrong">Measuring precise analog voltage drops</li>
                        <li data-answer="wrong">Soldering microchips</li>
                        <li data-answer="wrong">Encrypting hard drives</li>
                    </ul>
                </div>

                <div class="question" id="q5">
                    <h4>5. What does SED stand for?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Secure Execution Domain</li>
                        <li data-answer="correct">Self-Encrypting Drive</li>
                        <li data-answer="wrong">System Encryption Device</li>
                        <li data-answer="wrong">Silicon Embedded Data</li>
                    </ul>
                </div>

                <div class="question" id="q6">
                    <h4>6. Which attack extracts cryptographic keys by measuring device power consumption?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Buffer Overflow</li>
                        <li data-answer="wrong">Cross-Site Scripting</li>
                        <li data-answer="correct">Side-Channel Power Analysis</li>
                        <li data-answer="wrong">Cold Boot Attack</li>
                    </ul>
                </div>

                <div class="question" id="q7">
                    <h4>7. What defines a Hardware Trojan?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">A virus downloaded from the internet</li>
                        <li data-answer="wrong">A phishing email containing malware</li>
                        <li data-answer="correct">A malicious, intentional modification of integrated circuitry</li>
                        <li data-answer="wrong">A software backdoor in an application</li>
                    </ul>
                </div>

                <div class="question" id="q8">
                    <h4>8. The Rowhammer attack specifically targets which hardware component?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">CPU Cache</li>
                        <li data-answer="correct">DRAM (Memory)</li>
                        <li data-answer="wrong">Hard Drive Platters</li>
                        <li data-answer="wrong">Network Interface Card</li>
                    </ul>
                </div>

                <div class="question" id="q9">
                    <h4>9. Which standard defines security requirements for cryptographic hardware modules?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">ISO 9001</li>
                        <li data-answer="correct">FIPS 140</li>
                        <li data-answer="wrong">IEEE 802.11</li>
                        <li data-answer="wrong">PCI-DSS</li>
                    </ul>
                </div>

                <div class="question" id="q10">
                    <h4>10. What mechanism prevents loading unauthorized OS bootloaders?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">BitLocker</li>
                        <li data-answer="wrong">Firewall</li>
                        <li data-answer="correct">Secure Boot</li>
                        <li data-answer="wrong">Antivirus</li>
                    </ul>
                </div>

                <div class="question" id="q11">
                    <h4>11. Which tool helps interface with unknown hardware ports and protocols?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Wireshark</li>
                        <li data-answer="correct">Bus Pirate / JTAGulator</li>
                        <li data-answer="wrong">Nmap</li>
                        <li data-answer="wrong">Metasploit</li>
                    </ul>
                </div>

                <div class="question" id="q12">
                    <h4>12. What helps mitigate Cold Boot attacks?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Updating the web browser</li>
                        <li data-answer="correct">Memory scrambling and soldered RAM</li>
                        <li data-answer="wrong">Disabling USB ports</li>
                        <li data-answer="wrong">Installing a firewall</li>
                    </ul>
                </div>

                <div class="question" id="q13">
                    <h4>13. What is decapsulation in hardware reverse engineering?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Decrypting a network packet</li>
                        <li data-answer="correct">Removing chip packaging to expose the silicon die</li>
                        <li data-answer="wrong">Bypassing a software sandbox</li>
                        <li data-answer="wrong">Extracting a ZIP file</li>
                    </ul>
                </div>

                <div class="question" id="q14">
                    <h4>14. Which hardware component is specifically designed to securely manage enterprise digital keys?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">GPU</li>
                        <li data-answer="correct">HSM (Hardware Security Module)</li>
                        <li data-answer="wrong">NIC</li>
                        <li data-answer="wrong">SSD</li>
                    </ul>
                </div>

                <div class="question" id="q15">
                    <h4>15. What is the purpose of anti-tamper mesh?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">To improve Wi-Fi signal</li>
                        <li data-answer="correct">To detect physical intrusion and zeroize keys</li>
                        <li data-answer="wrong">To cool down the processor</li>
                        <li data-answer="wrong">To prevent software malware</li>
                    </ul>
                </div>

                <div class="question" id="q16">
                    <h4>16. Supply chain attacks often occur:</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Over public Wi-Fi networks</li>
                        <li data-answer="correct">In-transit or at the manufacturing facility</li>
                        <li data-answer="wrong">During employee onboarding</li>
                        <li data-answer="wrong">Via social media</li>
                    </ul>
                </div>

                <div class="question" id="q17">
                    <h4>17. UART is an acronym for?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Unified Access Routing Table</li>
                        <li data-answer="correct">Universal Asynchronous Receiver-Transmitter</li>
                        <li data-answer="wrong">Universal Audio Recognition Tool</li>
                        <li data-answer="wrong">User Access Rights Token</li>
                    </ul>
                </div>

                <div class="question" id="q18">
                    <h4>18. The I2C protocol typically uses how many wires for communication (excluding power/ground)?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">One</li>
                        <li data-answer="correct">Two (SDA, SCL)</li>
                        <li data-answer="wrong">Four</li>
                        <li data-answer="wrong">Eight</li>
                    </ul>
                </div>

                <div class="question" id="q19">
                    <h4>19. A physical security feature that deletes keys when the casing is opened is called:</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">A firewall</li>
                        <li data-answer="wrong">A Faraday cage</li>
                        <li data-answer="correct">A tamper-respondent enclosure</li>
                        <li data-answer="wrong">Secure Boot</li>
                    </ul>
                </div>

                <div class="question" id="q20">
                    <h4>20. The practice of reading data directly from a physical memory chip is called?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Port scanning</li>
                        <li data-answer="wrong">Packet sniffing</li>
                        <li data-answer="correct">Firmware dumping / Chip-off extraction</li>
                        <li data-answer="wrong">Cross-site request forgery</li>
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
            <h1>Resources & Action Plan for Hardware Analysts</h1>
            
            <div class="hands-on-section">
                <div class="hands-on-title">Hardware Security Resources</div>
                
                <div class="solution-box">
                    <div class="solution-title">Essential Tools to Acquire</div>
                    <div class="step-by-step">
                        <strong>Hardware Lab Kit:</strong><br>
                        • Bus Pirate / FTDI Breakout boards<br>
                        • SOIC/SOP Flash memory clips<br>
                        • Digital Multimeter & Oscilloscope<br>
                        • Logic Analyzer (e.g., Saleae)<br>
                        • CHIPSEC framework installed on a secure laptop
                    </div>
                </div>

                <div class="solution-box">
                    <div class="solution-title">Training and Certification</div>
                    <div class="step-by-step">
                        <strong>Recommended Programs:</strong><br>
                        • SANS SEC546: IPv6 & Hardware Security<br>
                        • Hardware Hacking Village (DEF CON)<br>
                        • Applied Physical Attacks on x86 Systems<br>
                        • Reverse Engineering Firmware courses
                    </div>
                </div>

                <div class="demo-box">
                    <h3>🎯 Your Hardware Security Commitment</h3>
                    <p><strong>Take Action Within 7 Days:</strong></p>
                    <ol>
                        <li>Inventory all critical hardware assets and check for tamper seals.</li>
                        <li>Verify TPM 2.0 and Secure Boot are actively enforced.</li>
                        <li>Acquire a basic SPI flasher to practice firmware extraction on a test board.</li>
                        <li>Update hardware procurement policies to require supply chain audits.</li>
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

    <script src="js/hardware-analyst.js"></script>
</body>
</html>