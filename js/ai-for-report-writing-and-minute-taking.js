// ===============================================
// AI For Report Writing & Minute Taking JS
// ===============================================

let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

// Initialize presentation
function initPresentation() {
    document.getElementById('totalSlides').textContent = totalSlides;
    showSlide(0);
    setupQuizListeners();
}

function showSlide(index) {
    // Hide all slides
    slides.forEach(slide => slide.classList.remove('active'));
    
    // Show current slide
    slides[index].classList.add('active');
    
    // Update counter
    document.getElementById('currentSlide').textContent = index + 1;
    
    // Manage buttons
    document.getElementById('prevBtn').disabled = index === 0;
    document.getElementById('nextBtn').disabled = index === totalSlides - 1;
    
    // Show print button only on the last slide
    const printBtn = document.getElementById('printBtn');
    if (index === totalSlides - 1) {
        printBtn.style.display = 'block';
    } else {
        printBtn.style.display = 'none';
    }
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

// Keyboard navigation
document.addEventListener('keydown', function(event) {
    if (event.key === 'ArrowLeft') {
        changeSlide(-1);
    } else if (event.key === 'ArrowRight') {
        changeSlide(1);
    }
});

// ===============================================
// ADVANCED LAB SIMULATIONS
// ===============================================

function generateSmartTemplate() {
    const requirements = document.getElementById('template-requirements').value;
    const resultDiv = document.getElementById('template-result');
    
    if (!requirements.trim()) {
        resultDiv.innerHTML = '<p style="color: var(--primary-color);">Please define your template requirements first.</p>';
        resultDiv.style.display = 'block';
        return;
    }

    const template = `
        <h4>AI-Generated Smart Template System:</h4>
        <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #d7d1c5;">
            <h5>Template Structure:</h5>
            <div style="background: var(--bg-tertiary); padding: 10px; margin: 10px 0; border-radius: 4px;">
                <code>
                IF client.language == "Afrikaans" THEN greeting = "Geagte [client.name]"<br>
                IF client.language == "Tswana" THEN greeting = "Rra/Mma [client.name]"<br>
                IF client.language == "English" THEN greeting = "Dear [client.name]"<br><br>
                IF service.type == "priority" THEN urgency = "immediate_attention_required"<br>
                IF client.industry == "Healthcare" THEN specialist = "[healthcare.specialist]"<br>
                IF client.status == "VIP" THEN include_executive_contact = true
                </code>
            </div>
            <h5>Dynamic Content Blocks:</h5>
            <ul style="margin: 10px 0; padding-left: 20px;">
                <li>Language-specific greetings and cultural protocols for professional communication</li>
                <li>Industry-specific service recommendations and specialist contact information</li>
                <li>Automated calculation of service timelines and cost estimates</li>
                <li>Conditional inclusion of compliance requirements and regulatory information</li>
                <li>Personalized follow-up scheduling based on client preferences and service type</li>
            </ul>
        </div>
        <p style="margin-top: 10px; font-weight: bold; color: var(--secondary-color);">[Success] This template system can generate 200+ personalized communications in minutes while maintaining professional standards and cultural sensitivity.</p>
    `;
    
    resultDiv.innerHTML = template;
    resultDiv.style.display = 'block';
}

function generateDataStory() {
    const audience = document.getElementById('audience-selector').value;
    const resultDiv = document.getElementById('data-story-result');

    if (!audience) {
        resultDiv.innerHTML = '<p style="color: var(--primary-color);">Please select an audience first.</p>';
        resultDiv.style.display = 'block';
        return;
    }

    let story = '';
    switch(audience) {
        case 'board':
            story = `
                <h4>Executive Leadership Summary:</h4>
                <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #d7d1c5;">
                    <strong>Strategic Growth Analysis</strong><br><br>
                    Service A has demonstrated exceptional growth of 21%, indicating strong market demand and positioning our organization as a leader in our sector. This growth necessitates a strategic investment of 15% in operational capacity to maintain competitive advantage and service quality.<br><br>
                    Service B performance (-10%) reflects market headwinds but presents opportunities for strategic repositioning and targeted client acquisition in underserved segments.<br><br>
                    <strong>Financial Impact:</strong> Net client growth of 12% generates substantial revenue increases while requiring calculated capacity investments for sustainable expansion.
                </div>
            `;
            break;
        case 'managers':
            story = `
                <h4>Department Operations Brief:</h4>
                <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #d7d1c5;">
                    <strong>Resource Allocation Update</strong><br><br>
                    Service A teams will receive priority support for capacity expansion to accommodate 250 new clients. Current staff ratios indicate need for two additional team members and enhanced training programs.<br><br>
                    Service B teams should prepare for optimization opportunities, focusing on efficiency improvements and specialized service delivery for retained clients.<br><br>
                    Service C maintains stable performance with opportunities for cross-training and collaborative initiatives with Service A expansion efforts.
                </div>
            `;
            break;
        case 'clients':
            story = `
                <h4>Service Excellence Update:</h4>
                <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #d7d1c5;">
                    <strong>Growing to Serve You Better</strong><br><br>
                    We're excited to share that our organization continues to expand, now serving over 3,270 clients across our diverse service portfolio. Our most popular services have grown significantly, reflecting our commitment to delivering value that meets your evolving needs.<br><br>
                    We remain dedicated to maintaining the personalized attention and quality service you've come to expect, while continuously improving our capabilities to serve our community better.<br><br>
                    <strong>Your Benefit:</strong> Expanded capacity means enhanced service delivery, shorter wait times, and continued innovation in meeting your professional needs.
                </div>
            `;
            break;
    }
    
    resultDiv.innerHTML = story + '<p style="margin-top: 10px; font-weight: bold; color: var(--secondary-color);">[AI Insight] Same data, tailored message for maximum stakeholder impact and engagement.</p>';
    resultDiv.style.display = 'block';
}

function translatePolicy() {
    const targetLang = document.getElementById('target-language').value;
    const resultDiv = document.getElementById('translation-result');

    if (!targetLang) {
        resultDiv.innerHTML = '<p style="color: var(--primary-color);">Please select a target language.</p>';
        resultDiv.style.display = 'block';
        return;
    }

    let translation = '';
    switch(targetLang) {
        case 'afrikaans':
            translation = `
                <h4>Professional Afrikaans Translation:</h4>
                <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #d7d1c5;">
                    <strong>Translated Policy:</strong><br>
                    "Alle werknemers moet die vertroulikheid van kliëntinligting handhaaf en voldoen aan databeskermingsregulasies. Oortreding van hierdie beleid kan lei tot dissiplinêre aksie, insluitend beëindiging van diens."<br><br>
                    <strong>Cultural and Legal Adaptations:</strong><br>
                    • "Confidentiality" translated as "vertroulikheid" (maintaining legal precision)<br>
                    • "Disciplinary action" adapted to "dissiplinêre aksie" (formal workplace terminology)<br>
                    • "Termination" rendered as "beëindiging van diens" (culturally appropriate professional language)<br>
                    • Maintained formal register appropriate for workplace policies while ensuring accessibility
                </div>
            `;
            break;
        case 'tswana':
            translation = `
                <h4>Professional Tswana Translation:</h4>
                <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #d7d1c5;">
                    <strong>Translated Policy:</strong><br>
                    "Badiri botlhe ba tshwanetse go sireletsa tshedimosetso ya bareki le go ikobela melao ya tshireletso ya tshedimosetso. Go tlola pholisi e go ka baka kgato ya taolo, go akaretsa le go khutlisa mosadi."<br><br>
                    <strong>Cultural and Legal Adaptations:</strong><br>
                    • Used respectful "badiri" (workers/employees) emphasizing professional relationship<br>
                    • "Confidentiality" translated as "tshedimosetso e e sireletsegile" (protected information) - culturally sensitive<br>
                    • "Disciplinary action" rendered as "kgato ya taolo" (controlling action) - maintaining professional formality<br>
                    • Maintained workplace register while ensuring community understanding and respect
                </div>
            `;
            break;
    }
    
    resultDiv.innerHTML = translation + '<p style="margin-top: 10px; font-weight: bold; color: var(--secondary-color);">[Success] Professional AI translation with cultural expertise ensures accuracy, legal compliance, and workplace appropriateness.</p>';
    resultDiv.style.display = 'block';
}

function designEmailTriage() {
    const categories = document.getElementById('email-categories').value;
    const resultDiv = document.getElementById('email-triage-result');
    
    if (!categories.trim()) {
        resultDiv.innerHTML = '<p style="color: var(--primary-color);">Please list your main email categories first.</p>';
        resultDiv.style.display = 'block';
        return;
    }

    const system = `
        <h4>AI Email Triage System Design:</h4>
        <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #d7d1c5;">
            <h5>Automated Classification Rules:</h5>
            <table style="width:100%; border-collapse: collapse; margin: 10px 0;">
                <tr style="background-color: var(--bg-tertiary);">
                    <th style="padding: 8px; border: 1px solid var(--border-medium); text-align: left;">Priority Level</th>
                    <th style="padding: 8px; border: 1px solid var(--border-medium); text-align: left;">Keywords/Triggers</th>
                    <th style="padding: 8px; border: 1px solid var(--border-medium); text-align: left;">Auto-Actions</th>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid var(--border-medium); color: red; font-weight: bold;">CRITICAL</td>
                    <td style="padding: 8px; border: 1px solid var(--border-medium);">Emergency, System Failure, Legal Deadline, Executive Urgent</td>
                    <td style="padding: 8px; border: 1px solid var(--border-medium);">Immediate SMS/Call alert + Auto-escalation to management</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid var(--border-medium); color: orange; font-weight: bold;">HIGH</td>
                    <td style="padding: 8px; border: 1px solid var(--border-medium);">Client Complaint, Contract Issue, Compliance, VIP Request</td>
                    <td style="padding: 8px; border: 1px solid var(--border-medium);">Priority folder + 2-hour response reminder + Supervisor notification</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid var(--border-medium); color: blue;">STANDARD</td>
                    <td style="padding: 8px; border: 1px solid var(--border-medium);">Service Request, Meeting Request, Information Query, Scheduling</td>
                    <td style="padding: 8px; border: 1px solid var(--border-medium);">Standard folder + Auto-acknowledgment + Same-day response target</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid var(--border-medium); color: gray;">REFERENCE</td>
                    <td style="padding: 8px; border: 1px solid var(--border-medium);">Newsletter, Policy Update, FYI, Industry News, CC Communications</td>
                    <td style="padding: 8px; border: 1px solid var(--border-medium);">Reference folder + Weekly digest compilation</td>
                </tr>
            </table>
            
            <h5>Smart Response and Routing Features:</h5>
            <ul style="margin: 10px 0; padding-left: 20px;">
                <li>Language detection → Appropriate greeting and response in English/Afrikaans/Tswana</li>
                <li>Client type recognition → Route to specialist or appropriate department contact</li>
                <li>Sentiment analysis → Escalate negative sentiment or adjust tone for empathetic response</li>
                <li>Follow-up scheduling → Automatic calendar integration for complex inquiries requiring meetings</li>
                <li>Template matching → Suggest relevant response templates based on inquiry type and history</li>
            </ul>
        </div>
        <p style="margin-top: 10px; font-weight: bold; color: var(--secondary-color);">[Efficiency Gain] This intelligent system can reduce email processing time by 65% while improving response consistency and client satisfaction.</p>
    `;
    
    resultDiv.innerHTML = system;
    resultDiv.style.display = 'block';
}

function designOnboardingWorkflow() {
    const resultDiv = document.getElementById('workflow-result');
    
    const workflow = `
        <h4>Automated Client Onboarding Workflow:</h4>
        <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #d7d1c5;">
            <h5>Intelligent Process Flow:</h5>
            <div style="background: var(--bg-tertiary); padding: 10px; margin: 10px 0; border-radius: 4px;">
                <strong>Stage 1: Automated Data Collection & Verification</strong><br>
                • Digital form submission with AI validation → Real-time credential verification<br>
                • Integration with external databases → Automatic background and reference checks<br>
                • Document scanning and OCR → Intelligent data extraction and validation<br>
                • Compliance checking → Automated regulatory requirement verification
            </div>
            
            <div style="background: var(--bg-tertiary); padding: 10px; margin: 10px 0; border-radius: 4px;">
                <strong>Stage 2: AI Decision Logic & Account Setup</strong><br>
                • IF all_credentials_verified = TRUE → Proceed to account creation automatically<br>
                • IF industry = "Healthcare" → Trigger specialized compliance workflows<br>
                • IF language_preference = "Afrikaans/Tswana" → Route to multilingual specialists<br>
                • IF client_tier = "VIP" → Assign senior account manager and expedited processing
            </div>
            
            <div style="background: var(--bg-tertiary); padding: 10px; margin: 10px 0; border-radius: 4px;">
                <strong>Stage 3: Personalized Communications & Scheduling</strong><br>
                • Multilingual welcome package generation (EN/AF/TN based on preference)<br>
                • Intelligent orientation scheduling based on client availability and specialist calendars<br>
                • Account manager assignment with AI matching based on expertise and client needs<br>
                • CRM integration with complete client profile and interaction history setup
            </div>
            
            <h5>Advanced Features:</h5>
            <ul style="margin: 10px 0; padding-left: 20px;">
                <li>Exception handling with automatic escalation to human review for complex cases</li>
                <li>Progress tracking dashboard with real-time updates sent to all stakeholders</li>
                <li>Cultural customization for greeting styles and communication preferences</li>
                <li>Integration with billing systems for automatic account setup and payment processing</li>
                <li>Follow-up automation with satisfaction surveys and relationship building touchpoints</li>
            </ul>
        </div>
        <p style="margin-top: 10px; font-weight: bold; color: var(--secondary-color);">[Impact] Reduces onboarding time from 2 weeks to 2 days while ensuring 100% accuracy and improving client satisfaction by 40%.</p>
    `;
    
    resultDiv.innerHTML = workflow;
    resultDiv.style.display = 'block';
}

// ===============================================
// ADVANCED QUIZ LOGIC
// ===============================================

let selectedAnswers = {};

function setupQuizListeners() {
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
}

function submitAdvancedAssessment() {
    const totalQuestions = 4;
    
    if (Object.keys(selectedAnswers).length < totalQuestions) {
        alert('Please answer all questions before submitting.');
        return;
    }

    let correctCount = 0;

    // Grade answers
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
        }
    });

    // Display result
    const resultDiv = document.getElementById('quiz-final-result');
    const percentage = Math.round((correctCount / totalQuestions) * 100);
    
    let resultClass = 'needs-improvement';
    let message = `You scored ${correctCount} out of ${totalQuestions} (${percentage}%). `;

    if (percentage >= 100) {
        resultClass = 'excellent';
        message += '[Excellent] You have mastered advanced AI workflows for professional administration and are ready to lead implementation initiatives across any industry.';
    } else if (percentage >= 75) {
        resultClass = 'good';
        message += '[Good] You understand most advanced concepts. Review the highlighted areas to achieve full mastery and leadership capability.';
    } else {
        message += '[Needs Improvement] Please review the training materials and practice with the interactive labs before implementing advanced workflows in your professional environment.';
    }

    resultDiv.className = `quiz-result ${resultClass}`;
    resultDiv.innerHTML = `<p>${message}</p>`;
    resultDiv.style.display = 'block';

    // Disable further clicking
    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.style.pointerEvents = 'none';
    });
    
    document.querySelector('.submit-btn').disabled = true;
    document.querySelector('.submit-btn').textContent = 'Assessment Completed';
}

// Start presentation on load
window.onload = initPresentation;