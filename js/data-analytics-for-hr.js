// Data Analytics For HR JS
let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

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
    
    updateProgress();
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

// Quiz functionality
let selectedAnswers = {};
let quizCompleted = false;

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
});

function submitQuiz() {
    if (Object.keys(selectedAnswers).length < 20) {
        alert('Please answer all 20 questions before submitting.');
        return;
    }

    let correctCount = 0;
    const corrections = [];

    // Question data with correct answers and explanations
    const questionData = {
        'q1': {
            correct: 'Proactively identifying and preventing talent-related risks',
            explanation: 'Predictive analytics allows HR to anticipate issues before they occur, enabling proactive interventions rather than reactive responses.'
        },
        'q2': {
            correct: 'Improvement in employee retention and performance outcomes',
            explanation: 'The ultimate measure of engagement analytics success is improved business outcomes, not just data collection metrics.'
        },
        'q3': {
            correct: 'Predictive forecasts what will happen, prescriptive recommends what to do',
            explanation: 'Predictive analytics identifies future trends, while prescriptive analytics goes further to recommend specific actions to take.'
        },
        'q4': {
            correct: '25% improvement in manager effectiveness scores',
            explanation: 'Google\'s Project Oxygen identified key manager behaviors and resulted in significant improvements in manager effectiveness.'
        },
        'q5': {
            correct: 'Ensuring data privacy and ethical use of employee information',
            explanation: 'Data privacy and ethics are the most critical challenges, as misuse can damage employee trust and violate regulations.'
        },
        'q6': {
            correct: 'Combination of engagement surveys, performance data, and behavioral patterns',
            explanation: 'Multiple data sources provide a comprehensive view of employee satisfaction and likelihood to leave.'
        },
        'q7': {
            correct: '95%',
            explanation: 'IBM\'s predictive attrition model achieved 95% accuracy, demonstrating the power of advanced analytics in HR.'
        },
        'q8': {
            correct: 'Combination of predictive and prescriptive analytics',
            explanation: 'Workforce planning requires both predicting future needs and prescribing optimal staffing strategies.'
        },
        'q9': {
            correct: 'To understand employee emotions and satisfaction from communications',
            explanation: 'Sentiment analysis processes text to understand emotional context and employee satisfaction levels.'
        },
        'q10': {
            correct: 'Daily coffee consumption',
            explanation: 'While interesting, coffee consumption is not a standard metric in employee engagement analytics frameworks.'
        },
        'q11': {
            correct: 'Maintaining culture consistency during global expansion',
            explanation: 'Netflix used culture analytics to preserve their unique culture while scaling globally.'
        },
        'q12': {
            correct: 'Start with pilot programs and gradually expand',
            explanation: 'Best practice is to begin small, prove value, and then scale successful initiatives across the organization.'
        },
        'q13': {
            correct: 'To identify patterns in large datasets and improve prediction accuracy',
            explanation: 'Machine learning excels at finding complex patterns humans might miss, improving prediction accuracy over time.'
        },
        'q14': {
            correct: '16%',
            explanation: 'Unilever achieved a 16% improvement in diversity metrics through their AI-powered recruitment process.'
        },
        'q15': {
            correct: 'Maintaining transparency and human oversight in decision-making',
            explanation: 'Ethical HR analytics requires transparency about how decisions are made and human oversight of automated systems.'
        },
        'q16': {
            correct: 'Mobile-first pulse survey solutions',
            explanation: 'Mobile-first platforms enable frequent, convenient feedback collection for real-time engagement monitoring.'
        },
        'q17': {
            correct: 'Identifying turnover patterns by hiring periods and demographics',
            explanation: 'Cohort analysis groups employees by shared characteristics to identify specific patterns in turnover behavior.'
        },
        'q18': {
            correct: 'Quantum computing for complex optimization problems',
            explanation: 'Quantum computing will enable solving complex HR optimization problems that are currently computationally impossible.'
        },
        'q19': {
            correct: 'Conduct data audit and assess current analytics maturity',
            explanation: 'Understanding your current state is essential before implementing any new analytics initiatives.'
        },
        'q20': {
            correct: 'Focus on business challenges first, then select appropriate analytics solutions',
            explanation: 'Starting with business problems ensures analytics efforts address real needs rather than being technology-driven.'
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

    // Display results
    const percentage = (correctCount / 20) * 100;
    const resultDiv = document.getElementById('quiz-result');
    const correctionsDiv = document.getElementById('corrections');
    
    let resultClass = 'needs-improvement';
    let resultMessage = `You scored ${correctCount}/20 (${percentage}%). `;
    
    if (percentage >= 85) {
        resultClass = 'excellent';
        resultMessage += 'Outstanding! You have mastered data analytics in HR concepts and are ready for implementation.';
    } else if (percentage >= 70) {
        resultClass = 'good';
        resultMessage += 'Good work! You understand most concepts but may benefit from reviewing some areas.';
    } else {
        resultMessage += 'Consider reviewing the training materials to strengthen your understanding of data analytics in HR.';
    }

    resultDiv.className = `quiz-result ${resultClass}`;
    resultDiv.textContent = resultMessage;
    resultDiv.style.display = 'block';

    // Show corrections if there are any wrong answers
    if (corrections.length > 0) {
        let correctionsHTML = '';
        corrections.forEach((correction, index) => {
            const questionNum = correction.question.replace('q', '');
            correctionsHTML += `
                <div class="correction-item">
                    <strong>Question ${questionNum}:</strong><br>
                    <span class="correct-answer">Correct Answer: ${correction.correct}</span><br>
                    <em>Explanation: ${correction.explanation}</em>
                </div>
            `;
        });
        
        document.getElementById('correction-content').innerHTML = correctionsHTML;
        correctionsDiv.style.display = 'block';
    }

    // Show reset button and disable submit button
    document.querySelector('.submit-btn').disabled = true;
    document.querySelector('.submit-btn').textContent = 'Assessment Completed';
    document.querySelector('.reset-btn').style.display = 'inline-block';
    
    // Disable further quiz interaction
    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.style.pointerEvents = 'none';
    });
    
    quizCompleted = true;
}

function resetQuiz() {
    // Reset all selections and answers
    selectedAnswers = {};
    quizCompleted = false;
    
    // Reset visual states
    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.classList.remove('selected', 'correct', 'incorrect');
        option.style.pointerEvents = 'auto';
    });
    
    // Reset buttons
    document.querySelector('.submit-btn').disabled = false;
    document.querySelector('.submit-btn').textContent = 'Submit Assessment';
    document.querySelector('.reset-btn').style.display = 'none';
    
    // Hide results
    document.getElementById('quiz-result').style.display = 'none';
    document.getElementById('corrections').style.display = 'none';
}

// Progress indicator
function updateProgress() {
    const progress = ((currentSlideIndex + 1) / totalSlides) * 100;
    document.querySelector('.slide-counter').style.background = 
        `linear-gradient(90deg, rgba(52, 152, 219, 0.2) ${progress}%, rgba(255, 255, 255, 0.9) ${progress}%)`;
}

// Keyboard navigation
document.addEventListener('keydown', function(event) {
    if (event.key === 'ArrowLeft') {
        changeSlide(-1);
    } else if (event.key === 'ArrowRight') {
        changeSlide(1);
    }
});

// Touch/swipe support for mobile devices
let touchStartX = 0;
let touchEndX = 0;

document.addEventListener('touchstart', function(event) {
    touchStartX = event.changedTouches[0].screenX;
});

document.addEventListener('touchend', function(event) {
    touchEndX = event.changedTouches[0].screenX;
    handleSwipe();
});

function handleSwipe() {
    const swipeThreshold = 50;
    const swipeLength = touchEndX - touchStartX;
    
    if (Math.abs(swipeLength) > swipeThreshold) {
        if (swipeLength > 0) {
            changeSlide(-1); // Swipe right = previous slide
        } else {
            changeSlide(1); // Swipe left = next slide
        }
    }
}

// Initialize
showSlide(0);