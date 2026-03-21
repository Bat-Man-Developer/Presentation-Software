// AI Cybersecurity Analyst JS
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

// AI Risk Assessment
function calculateAIRiskScore() {
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
        riskLevel = "AI SECURE";
        color = "#00e676";
        recommendations = "Excellent. You are prepared against modern GenAI threats and data leakage.";
    } else if (percentage >= 60) {
        riskLevel = "ADAPTING";
        color = "#ffb300";
        recommendations = "Good progress, but vulnerable to advanced social engineering (deepfakes) or prompt injection.";
    } else {
        riskLevel = "HIGH RISK";
        color = "#f50057";
        recommendations = "Critical risk. Your organization is vulnerable to AI-powered attacks and accidental data leakage via public LLMs.";
    }
    
    document.getElementById('risk-assessment-result').innerHTML = `
        <h4 style="color: ${color};">AI Security Readiness: ${percentage}% (${riskLevel})</h4>
        <p><strong>Assessment:</strong> ${recommendations}</p>
        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin-top: 10px;">
            <h5>Priority Actions:</h5>
            <ul>
                ${percentage < 80 ? '<li>Establish a formal Acceptable Use Policy for public AI tools (ChatGPT/Claude).</li>' : ''}
                ${percentage < 70 ? '<li>Implement DLP controls to monitor code and PII sent to AI domains.</li>' : ''}
                ${percentage < 60 ? '<li>Deploy an internal, isolated LLM/Copilot for secure analyst use.</li>' : ''}
                ${percentage < 50 ? '<li>Establish anti-deepfake protocols (Safe Words) for Helpdesk teams.</li>' : ''}
            </ul>
        </div>
    `;
    document.getElementById('risk-assessment-result').style.display = 'block';
}

// SOC Prompt Engineering Simulator
function runPromptSimulation() {
    const strategy = document.getElementById('prompt-strategy').value;
    let result = `<h4>SOC AI Response</h4>`;
    
    if (strategy === "") {
        result += "<p style='color: #f50057;'>Please select a prompt strategy.</p>";
    } else if (strategy === "basic") {
        result += `
            <div style="background: #fff3cd; padding: 15px; border-radius: 8px; border-left: 4px solid #ffb300;">
                <p><strong>AI:</strong> "This PHP code uses base64 decoding and executes a command."</p>
                <p style="margin-top: 10px; color: #666;"><strong>Analyst Feedback:</strong> Too vague. A basic prompt yields a basic, unhelpful answer. You need actionable intelligence (IOCs, YARA rules) for incident response.</p>
            </div>
        `;
    } else if (strategy === "unsafe") {
        result += `
            <div style="background: #fce4ec; padding: 15px; border-radius: 8px; border-left: 4px solid #f50057;">
                <p><strong>AI:</strong> "I cannot execute arbitrary code as it violates my safety guidelines."</p>
                <p style="margin-top: 10px; color: #666;"><strong>Analyst Feedback:</strong> 🚨 Poor Practice. Never ask an AI to arbitrarily execute unverified malware. It will trigger safety filters or, worse, potentially execute a payload in your sandbox environment.</p>
            </div>
        `;
    } else if (strategy === "expert") {
        result += `
            <div style="background: #e8f5e9; padding: 15px; border-radius: 8px; border-left: 4px solid #00e676;">
                <p><strong>AI:</strong> "This is a PHP Web Shell. The base64 string 'c3lzdGVt' decodes to 'system'. It takes a POST parameter 'cmd' and passes it to system(), resulting in Remote Code Execution (RCE). Here is your requested YARA rule to detect this specific obfuscation pattern..."</p>
                <p style="margin-top: 10px; color: #666;"><strong>Analyst Feedback:</strong> ✅ Excellent Prompt Engineering. By assigning a persona, giving clear context, and requesting specific outputs (YARA rules), you transformed the AI into a powerful SOC asset.</p>
            </div>
        `;
    }
    
    document.getElementById('prompt-validation').innerHTML = result;
    document.getElementById('prompt-validation').style.display = 'block';
}

// Prompt Injection Evaluator
function evaluateInjection(type) {
    // Reset borders
    document.querySelectorAll('.chat-msg').forEach(el => {
        el.style.border = '1px solid #e0e0e0';
    });
    
    const targetEl = document.getElementById('inj-target');
    
    let result = '';
    if (type === 'malicious') {
        targetEl.style.border = '2px solid #00e676';
        result = `
            <div style="background: #e8f5e9; padding: 15px; border-radius: 8px; border-left: 4px solid #00e676; margin-top: 15px;">
                <h4 style="color: #1b5e20;">✅ Threat Identified Correctly</h4>
                <p>This is a classic <strong>Prompt Injection</strong> attack. The attacker begins with a benign instruction ("Translate..."), then uses a delimiter (\\n\\n) and a psychological trick ("System Override") to hijack the LLM's core instructions.</p>
                <p>If undefended, the LLM will ignore its role as an HR bot and leak its confidential system prompt.</p>
            </div>
        `;
    } else {
        result = `
            <div style="background: #fce4ec; padding: 15px; border-radius: 8px; border-left: 4px solid #f50057; margin-top: 15px;">
                <h4 style="color: #880e4f;">❌ Incorrect Analysis</h4>
                <p>That message is a standard, benign user query. Look closely for a message attempting to alter the "System Rules" or "Override" the chatbot's intended behavior.</p>
            </div>
        `;
    }
    
    document.getElementById('injection-analysis-result').innerHTML = result;
    document.getElementById('injection-analysis-result').style.display = 'block';
}

// Initialization and Listeners
function initializeSlideInteractivity() {
    document.querySelectorAll('.risk-checkbox').forEach(checkbox => {
        checkbox.onchange = function() {
            this.parentElement.style.opacity = this.checked ? '1' : '0.7';
        };
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
        'q1': { correct: 'Tactics and techniques used by adversaries against AI systems', explanation: 'MITRE ATLAS (Adversarial Threat Landscape for AI Systems) maps the specific vulnerabilities and attack vectors targeting machine learning models.' },
        'q2': { correct: 'Data Poisoning', explanation: 'Data Poisoning (OWASP LLM03) occurs when an attacker manipulates the datasets used to train or fine-tune an AI, causing it to learn malicious behavior or inherent bias.' },
        'q3': { correct: 'To augment analysts by summarizing logs and suggesting remediations', explanation: 'Security Copilots do not replace humans; they automate tedious tasks like log parsing, threat intelligence correlation, and query generation to speed up incident response.' },
        'q4': { correct: 'Crafting input to override or bypass an LLM\'s original instructions', explanation: 'Prompt Injection involves hiding adversarial instructions within user input, tricking the LLM into executing unauthorized actions or leaking data.' },
        'q5': { correct: 'Implement out-of-band verification and pre-agreed "safe words"', explanation: 'Because voice-cloning (deepfakes) can perfectly mimic tone and inflection, the only reliable human defense is verifying the request via a secondary channel or asking for a secret safe word.' },
        'q6': { correct: 'A specialized prompt designed to bypass an LLM\'s safety guardrails', explanation: 'A Jailbreak is an advanced form of prompt injection that uses psychological framing (like "Developer Mode" or "Do Anything Now") to bypass the AI\'s ethical training.' },
        'q7': { correct: 'It constantly alters its code signature, evading traditional antivirus', explanation: 'Attackers use GenAI to rewrite the underlying code of malware for every new infection. It does the same damage but looks completely different to signature-based Antivirus.' },
        'q8': { correct: 'Unsupervised Learning', explanation: 'Unsupervised ML models look at raw, unlabeled data to find patterns and establish a baseline, making them perfect for spotting deviations (anomalies) in network traffic.' },
        'q9': { correct: 'Providing an LLM with external, private documents to improve response accuracy', explanation: 'RAG allows an enterprise to securely feed their private data (like wikis or logs) into an LLM query, greatly reducing hallucinations and improving context.' },
        'q10': { correct: 'The application blindly executes AI-generated code, leading to XSS or RCE', explanation: 'If a web app takes the output of an LLM and renders it as DOM elements or executes it in the backend without sanitization, an attacker can use the LLM as a proxy for XSS/RCE.' },
        'q11': { correct: 'Querying an AI repeatedly to reverse-engineer its training data or algorithms', explanation: 'Model Inversion / Extraction attacks involve mathematically deriving the proprietary training data or the model\'s architecture by analyzing how it responds to specific rapid-fire queries.' },
        'q12': { correct: 'Confidently generates false, fabricated, or nonsensical information', explanation: 'Hallucinations occur when an LLM lacks correct context but predicts a statistically probable answer, presenting entirely false data as absolute fact.' },
        'q13': { correct: 'Using a secondary "filter" AI to pre-screen user inputs for malicious intent', explanation: 'A common defense is utilizing an "LLM Firewall" or a smaller, strict classifier model whose only job is to read inputs and block prompt injection attempts before they reach the main agent.' },
        'q14': { correct: 'The AI provider may use that code for future model training, causing a data leak', explanation: 'Consumer versions of ChatGPT/Claude often ingest user prompts as training data. Pasting proprietary code or API keys means the AI might regurgitate that data to a competitor in the future.' },
        'q15': { correct: 'Analyze the semantic tone of emails to flag AI-generated phishing attempts', explanation: 'Defensive NLP can spot the subtle linguistic patterns, perfect grammar, and lack of human idiosyncrasies typical of AI-generated spear-phishing emails.' },
        'q16': { correct: 'The foundational set of hidden instructions that dictates the AI\'s role and boundaries', explanation: 'The System Prompt is defined by the developer (e.g., "You are a helpful IT assistant. Do not answer questions about politics."). Prompt injection tries to bypass this.' },
        'q17': { correct: 'Crafting subtle input perturbations (like altering pixels in an image) to trick an AI classifier', explanation: 'Adversarial ML creates input data deliberately designed to cause the model to make a mistake, such as altering a few pixels on a Stop Sign so a self-driving car sees a Speed Limit sign.' },
        'q18': { correct: 'By rapidly correlating threat intel and generating automated response playbooks', explanation: 'GenAI excels at rapidly synthesizing vast amounts of threat intelligence reports and instantly drafting SOAR playbooks to isolate the threat.' },
        'q19': { correct: 'Principle of Least Privilege (PoLP)', explanation: 'If an AI agent is connected to an API or database (Tool Use), it must only have the absolute minimum permissions required. If compromised via prompt injection, its blast radius is limited.' },
        'q20': { correct: 'Monitoring and blocking employees from sending sensitive company data to unauthorized AI tools', explanation: 'Modern Data Loss Prevention (DLP) tools are updated to detect and block PII or source code from being transmitted to public LLM endpoints like OpenAI\'s API.' }
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
        resultMessage += 'Outstanding! You have a profound understanding of AI Security.';
        actionPlan = 'You are ready to integrate Secure AI Copilots into your SOC and defend against advanced deepfakes.';
    } else if (percentage >= 70) {
        resultClass = 'good';
        resultMessage += 'Good work! You understand core AI threat concepts.';
        actionPlan = 'Review the missed areas, particularly regarding OWASP LLM vulnerabilities and Prompt Engineering.';
    } else {
        resultMessage += 'Additional study is recommended to grasp AI Security architectures.';
        actionPlan = 'Focus heavily on the difference between Prompt Injection, Data Poisoning, and Adversarial ML.';
    }

    resultDiv.className = `quiz-result ${resultClass}`;
    resultDiv.innerHTML = `
        <p>${resultMessage}</p>
        <p><strong>Next Steps:</strong> ${actionPlan}</p>
    `;
    resultDiv.style.display = 'block';

    if (corrections.length > 0) {
        let correctionsHTML = '<p><strong>Review these critical concepts:</strong></p>';
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