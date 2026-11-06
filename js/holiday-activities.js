// ============================================================================
// Holiday Activities JS
// ============================================================================

let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;
const MAX_BUDGET = 7000;

// 10 Gauteng Couple Activities State
const activitiesData = [
    { id: 1, name: "1. Charcoal & Craft Dinner Date (Mr. George / Turn 'n Tender / Tiger's Milk)", cost: 1150, selected: true, rating: "Ignite It 🔥" },
    { id: 2, name: "2. Sunset Quad Biking & Bush Trail (Cullinan)", cost: 1050, selected: true, rating: "Ignite It 🔥" },
    { id: 3, name: "3. Hartbeespoort Dam 2-Hour Luxury Sunset Cruise & Platter", cost: 780, selected: true, rating: "Soulful Gold ✨" },
    { id: 4, name: "4. Private Sip & Paint / Tuft Portrait Duel (Oakdene)", cost: 690, selected: true, rating: "Playful Rivalry 🏆" },
    { id: 5, name: "5. Cradle of Humankind Caves & Sanctuary Walk", cost: 620, selected: true, rating: "Soulful Gold ✨" },
    { id: 6, name: "6. Soweto Towers 70m Freefall / Lookout & Vilakazi Tapas", cost: 650, selected: true, rating: "Ignite It 🔥" },
    { id: 7, name: "7. Muldersdrift Scenic Horse Trail & Secret Bush Picnic", cost: 850, selected: true, rating: "Soulful Gold ✨" },
    { id: 8, name: "8. Victoria Yards Artisans & Rooftop Sundowner Jazz", cost: 380, selected: true, rating: "Soulful Gold ✨" },
    { id: 9, name: "9. Olifantsfontein 3D Forest Maze Rivalry & Gelato", cost: 280, selected: true, rating: "Playful Rivalry 🏆" },
    { id: 10, name: "10. Northcliff Ridge Golden-Hour & Stargazing Boot-Picnic", cost: 200, selected: true, rating: "Soulful Gold ✨" }
];

let spoilBuffer = 350;
let chosenRestaurant = "Mr. George (Melrose Arch)";
let chosenVibeMode = "Balanced Fire & Soul";
let selectedQuizAnswers = {};

// Initialize presentation
function initPresentation() {
    const totalSlidesEl = document.getElementById('totalSlides');
    if (totalSlidesEl) {
        totalSlidesEl.textContent = totalSlides;
    }
    createEmberParticles();
    renderBudgetInteractiveGrid();
    updateBudgetDisplay();
    setupQuizListeners();
    showSlide(0);
}

function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    slides[index].classList.add('active');

    const currentSlideEl = document.getElementById('currentSlide');
    if (currentSlideEl) {
        currentSlideEl.textContent = index + 1;
    }

    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    if (prevBtn) prevBtn.disabled = index === 0;
    if (nextBtn) nextBtn.disabled = index === totalSlides - 1;

    const printBtn = document.getElementById('printBtn');
    if (printBtn) {
        printBtn.style.display = index === totalSlides - 1 ? 'block' : 'none';
    }

    // Refresh summary if landing on final slide
    if (index === totalSlides - 1) {
        renderFinalFunnelSummary();
    }

    window.scrollTo({ top: 0, behavior: 'smooth' });
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
    if (event.target.tagName === 'INPUT' || event.target.tagName === 'TEXTAREA') return;
    if (event.key === 'ArrowLeft') {
        changeSlide(-1);
    } else if (event.key === 'ArrowRight') {
        changeSlide(1);
    }
});

// Create subtle romantic floating embers
function createEmberParticles() {
    const container = document.getElementById('emberParticles');
    if (!container) return;

    const palette = ['#C83E2B', '#D9822B', '#E6A100', '#8C2D56'];
    for (let i = 0; i < 24; i++) {
        const dot = document.createElement('div');
        dot.className = 'ember-dot';
        const size = Math.floor(Math.random() * 8) + 5;
        dot.style.width = size + 'px';
        dot.style.height = size + 'px';
        dot.style.left = Math.random() * 100 + '%';
        dot.style.background = palette[Math.floor(Math.random() * palette.length)];
        dot.style.animationDuration = (Math.random() * 10 + 12) + 's';
        dot.style.animationDelay = (Math.random() * 8) + 's';
        container.appendChild(dot);
    }
}

// Copy AI Image Generation Prompt helper
function copyImagePrompt(buttonEl) {
    const promptBox = buttonEl.closest('.prompt-box');
    if (!promptBox) return;
    const promptSpan = promptBox.querySelector('.prompt-content');
    if (!promptSpan) return;

    navigator.clipboard.writeText(promptSpan.textContent.trim()).then(() => {
        const originalText = buttonEl.textContent;
        buttonEl.textContent = 'Copied Prompt ✓';
        setTimeout(() => {
            buttonEl.textContent = originalText;
        }, 1800);
    });
}

// ============================================================================
// INTERACTIVE FUNNEL SIMULATIONS
// ============================================================================

// Slide 3: Holiday Chemistry Calibration
function calibrateHolidayVibe() {
    const resultDiv = document.getElementById('vibe-calibration-result');
    const selectedRadio = document.querySelector('input[name="vibePrompt"]:checked');

    if (!selectedRadio) {
        resultDiv.innerHTML = '<p style="color: var(--primary-color); font-weight: bold;">Select a holiday chemistry mode first so we can tune the funnel!</p>';
        resultDiv.style.display = 'block';
        return;
    }

    const val = selectedRadio.value;
    if (val === 'fire') {
        chosenVibeMode = "Bold Fire & First-Move Thrills";
        resultDiv.innerHTML = `
            <h4 style="color: var(--primary-color);">[Funnel Tuned: Bold Fire & First-Move Thrills]</h4>
            <p><strong>Verdict:</strong> High-energy mode locked in! We are prioritizing red-earth quad racing in Cullinan, the 70m Soweto Towers drop, and coal-fired steaks at Mr. George or Turn 'n Tender, balanced by golden-hour views.</p>
        `;
    } else if (val === 'soul') {
        chosenVibeMode = "Deep Roots, Golden Sunsets & Velvet Conversations";
        resultDiv.innerHTML = `
            <h4 style="color: var(--secondary-color);">[Funnel Tuned: Deep Roots & Golden Sunsets]</h4>
            <p><strong>Verdict:</strong> Soulful romance locked in! Expect unhurried magic on the Hartbeespoort Dam cruise, Muldersdrift horseback trails to a secret bush picnic, Victoria Yards jazz, and candlelit steak & wine.</p>
        `;
    } else {
        chosenVibeMode = "Playful Rivalry & Out-of-the-Box Mischief";
        resultDiv.innerHTML = `
            <h4 style="color: var(--accent-rose);">[Funnel Tuned: Playful Rivalry & Mischief]</h4>
            <p><strong>Verdict:</strong> Competitive sparks activated! From the Oakdene blind-reveal portrait painting duel to racing the Olifantsfontein 3D Forest Maze, loser buys gelato and gives a 15-minute foot rub.</p>
        `;
    }
    resultDiv.style.display = 'block';
}

// Slide 5: Dinner Restaurant Showdown Selector (Mr. George vs Turn 'n Tender vs Tiger's Milk)
function selectDinnerVenue(venueKey) {
    const resultDiv = document.getElementById('dinner-venue-result');
    if (!resultDiv) return;

    if (venueKey === 'mrgeorge') {
        chosenRestaurant = "Mr. George (Melrose Arch)";
        activitiesData[0].cost = 1150;
        resultDiv.innerHTML = `
            <h4 style="color: var(--primary-color);">Selected: Mr. George, Melrose Arch (Budget Allocation: R1,150 for Two)</h4>
            <p><strong>Our Ideal Order:</strong> Start with Rockshrimp Tempura (R235) or Coal-Fired Halloumi (R146), followed by the 250g Sautéed Cubed Beef Fillet with lemon & oregano (R342–R414) and Coal-Fired Bifteki with hummus (R185–R202), finished with Salted Caramel Churros (R129) and two signature cocktails under the Melrose Archiazza trees.</p>
            <p><strong>Why It Wins:</strong> Open-air piazza glamour, glowing charcoal ovens, and people-watching energy that feels like a mini-holiday in the heart of Joburg.</p>
        `;
    } else if (venueKey === 'turnntender') {
        chosenRestaurant = "Turn 'n Tender Steakhouse (Bryanston / Illovo / Parktown North)";
        activitiesData[0].cost = 1180;
        resultDiv.innerHTML = `
            <h4 style="color: var(--secondary-color);">Selected: Turn 'n Tender Steakhouse (Budget Allocation: R1,180 for Two)</h4>
            <p><strong>Our Ideal Order:</strong> Roasted Marrow Bones & crispy Onion Blossom to share, followed by their legendary chargrilled 300g Fillet or Ribeye basted to perfection, paired with a bold South African Pinotage or Shiraz and Don Pedro nightcaps.</p>
            <p><strong>Why It Wins:</strong> Unbeatable steakhouse heritage, warm ambient lighting, deep leather booths, and zero pretension—just pure flame-grilled mastery and intimate conversation.</p>
        `;
    } else if (venueKey === 'tigersmilk') {
        chosenRestaurant = "Tiger's Milk (Melrose Arch / Bryanston / Cedar Square)";
        activitiesData[0].cost = 980;
        resultDiv.innerHTML = `
            <h4 style="color: var(--accent-rose);">Selected: Tiger's Milk (Budget Allocation: R980 for Two)</h4>
            <p><strong>Our Ideal Order:</strong> Spicy Salt & Pepper Calamari & Loaded Fries (R70), a wood-fired Tijuana or BBQ Brisket Pizza to share alongside a flame-grilled burger or steak, plus ice-cold craft lagers and passionfruit cocktails.</p>
            <p><strong>Why It Wins:</strong> High-voltage social buzz, industrial-chic warmth, loud laughter, and an effortlessly cool date night that saves R170 for extra holiday treats.</p>
        `;
    }

    resultDiv.style.display = 'block';
    updateBudgetDisplay();
    renderBudgetInteractiveGrid();
}

// Per-Activity Funnel Rating Button Handler
function rateActivityFunnel(activityId, ratingLabel, btnElement) {
    const item = activitiesData.find(a => a.id === activityId);
    if (item) {
        item.rating = ratingLabel;
    }

    const group = btnElement.closest('.funnel-btn-group');
    if (group) {
        group.querySelectorAll('.funnel-choice-btn').forEach(btn => {
            btn.classList.remove('active-choice');
        });
    }
    btnElement.classList.add('active-choice');
}

// ============================================================================
// SLIDE 24: LIVE R7,000 BUDGET CALCULATOR
// ============================================================================

function renderBudgetInteractiveGrid() {
    const grid = document.getElementById('budgetInteractiveGrid');
    if (!grid) return;

    grid.innerHTML = '';
    activitiesData.forEach(item => {
        const card = document.createElement('div');
        card.className = 'budget-item-card ' + (item.selected ? 'selected-activity' : '');
        card.onclick = () => toggleActivityBudget(item.id);
        card.innerHTML = `
            <div>
                <strong style="font-size: 13px; display: block;">${item.name}</strong>
                <small style="color: var(--text-tertiary);">Vibe Tag: ${item.rating}</small>
            </div>
            <div style="text-align: right; min-width: 75px;">
                <span style="font-weight: 800; color: var(--primary-color);">R${item.cost}</span><br>
                <small>${item.selected ? '✓ Included' : '+ Add'}</small>
            </div>
        `;
        grid.appendChild(card);
    });
}

function toggleActivityBudget(id) {
    const item = activitiesData.find(a => a.id === id);
    if (item) {
        item.selected = !item.selected;
    }
    renderBudgetInteractiveGrid();
    updateBudgetDisplay();
}

function updateSpoilBuffer(val) {
    spoilBuffer = parseInt(val, 10) || 0;
    const bufferLabel = document.getElementById('spoilBufferVal');
    if (bufferLabel) {
        bufferLabel.textContent = 'R' + spoilBuffer;
    }
    updateBudgetDisplay();
}

function updateBudgetDisplay() {
    const activitiesSum = activitiesData
        .filter(a => a.selected)
        .reduce((acc, cur) => acc + cur.cost, 0);

    const grandTotal = activitiesSum + spoilBuffer;
    const remaining = MAX_BUDGET - grandTotal;
    const percentage = Math.min(100, Math.round((grandTotal / MAX_BUDGET) * 100));

    const hudAmount = document.getElementById('hudBudgetTotal');
    if (hudAmount) {
        hudAmount.textContent = `R${grandTotal.toLocaleString()} / R7,000`;
        hudAmount.style.color = grandTotal <= MAX_BUDGET ? 'var(--primary-color)' : 'var(--accent-red)';
    }

    const totalEl = document.getElementById('calcGrandTotal');
    const remEl = document.getElementById('calcRemaining');
    const meterEl = document.getElementById('budgetMeterFill');
    const statusEl = document.getElementById('budgetStatusMessage');

    if (totalEl) totalEl.textContent = 'R' + grandTotal.toLocaleString();
    if (remEl) {
        remEl.textContent = (remaining >= 0 ? 'R' + remaining.toLocaleString() + ' Under Cap' : 'R' + Math.abs(remaining).toLocaleString() + ' Over Cap');
        remEl.style.color = remaining >= 0 ? 'var(--accent-green)' : 'var(--accent-red)';
    }
    if (meterEl) {
        meterEl.style.width = percentage + '%';
    }
    if (statusEl) {
        if (grandTotal <= MAX_BUDGET) {
            statusEl.innerHTML = `<span style="color: var(--accent-green); font-weight: bold;">✓ Sweet Spot Achieved:</span> All ${activitiesData.filter(a => a.selected).length} selected experiences plus your R${spoilBuffer} spontaneous ice-cream & tollgate buffer sit comfortably inside our R7,000 holiday ceiling!`;
        } else {
            statusEl.innerHTML = `<span style="color: var(--accent-red); font-weight: bold;">⚠ Slightly Over R7,000 Cap:</span> Reduce the spontaneous buffer slider or untick one activity above to stay strictly within R7,000.`;
        }
    }
}

// ============================================================================
// SLIDE 25: COUPLE COMPATIBILITY QUIZ & FINAL FUNNEL VERDICT
// ============================================================================

function setupQuizListeners() {
    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.addEventListener('click', function() {
            const questionEl = this.closest('.question');
            if (!questionEl) return;
            const questionId = questionEl.id;
            const questionOptions = this.closest('.quiz-options').querySelectorAll('li');

            questionOptions.forEach(opt => opt.classList.remove('selected'));
            this.classList.add('selected');

            selectedQuizAnswers[questionId] = this.dataset.answer;
        });
    });
}

function submitHolidayQuiz() {
    const totalQuestions = 4;
    if (Object.keys(selectedQuizAnswers).length < totalQuestions) {
        alert('Answer all 4 romantic playbook questions before unlocking our final verdict!');
        return;
    }

    document.querySelectorAll('.quiz-options li').forEach(option => {
        if (option.classList.contains('selected') || option.dataset.answer === 'correct') {
            option.classList.add('correct');
        }
        option.style.pointerEvents = 'none';
    });

    const resultDiv = document.getElementById('quiz-final-result');
    resultDiv.className = 'quiz-result excellent';
    resultDiv.innerHTML = `
        <p>🔥 100% Certified Power Couple! Our Gauteng Holiday Funnel is officially locked in.</p>
        <p style="font-size: 15px; margin-top: 8px; font-weight: normal;">
            <strong>Dinner Anchor:</strong> ${chosenRestaurant} |
            <strong>Chemistry Mode:</strong> ${chosenVibeMode}
        </p>
    `;
    resultDiv.style.display = 'block';

    const btn = document.querySelector('.submit-btn');
    if (btn) {
        btn.disabled = true;
        btn.textContent = 'Holiday Playbook Officially Locked In ♥';
    }
    renderFinalFunnelSummary();
}

function renderFinalFunnelSummary() {
    const container = document.getElementById('finalFunnelSummaryBox');
    if (!container) return;

    const activeItems = activitiesData.filter(a => a.selected);
    const totalCost = activeItems.reduce((sum, a) => sum + a.cost, 0) + spoilBuffer;

    let html = `
        <p><strong>Chosen Dinner Date Spot:</strong> ${chosenRestaurant}</p>
        <p><strong>Selected Gauteng Experiences (${activeItems.length} of 10):</strong></p>
        <ul>
    `;
    activeItems.forEach(item => {
        html += `<li><strong>${item.name}</strong> — R${item.cost} <em>(${item.rating})</em></li>`;
    });
    html += `</ul>
        <p style="text-align: center; font-weight: 800; color: var(--primary-color); font-size: 18px;">
            Total Holiday Investment (incl. R${spoilBuffer} Spontaneous Spoil Buffer): R${totalCost.toLocaleString()} / R7,000
        </p>
    `;
    container.innerHTML = html;
}

window.onload = initPresentation;