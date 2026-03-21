// Advanced Microsoft Excel JS

let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

// Lab completion tracking
let labResults = {
    formulaLab: false,
    chartLab: false,
    pivotLab: false,
    macroLab: false,
    conditionalLab: false,
    dashboardLab: false
};

// Quiz state management
let selectedQuizAnswers = {};
let quizAttempts = 0;
const maxQuizAttempts = 3;

// Initialization
document.addEventListener('DOMContentLoaded', function() {
    initializePresentation();
    setupInteractiveLabs();
    setupKeyboardNavigation();
    updateProgressBar();
});

function initializePresentation() {
    document.getElementById('totalSlides').textContent = totalSlides;
    showSlide(currentSlideIndex);
    setupPivotDragDrop();
    initializeSpreadsheetSimulator();
    setupChartAnimations();
}

// Enhanced Navigation Logic
function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove('active');
        if (i === index) {
            slide.classList.add('active', 'fade-in');
        }
    });
    
    document.getElementById('currentSlide').textContent = index + 1;
    document.getElementById('prevBtn').disabled = index === 0;
    document.getElementById('nextBtn').disabled = index === totalSlides - 1;
    
    // Update progress bar
    updateProgressBar();
    
    // Show appropriate buttons based on slide
    updateNavigationButtons(index);
    
    // Trigger slide-specific animations
    triggerSlideAnimations(index);
}

function changeSlide(direction) {
    currentSlideIndex += direction;
    if (currentSlideIndex < 0) currentSlideIndex = 0;
    if (currentSlideIndex >= totalSlides) currentSlideIndex = totalSlides - 1;
    showSlide(currentSlideIndex);
}

function updateProgressBar() {
    const progress = ((currentSlideIndex + 1) / totalSlides) * 100;
    const progressBar = document.querySelector('.progress-fill');
    if (progressBar) {
        progressBar.style.width = progress + '%';
    }
}

function updateNavigationButtons(index) {
    const printBtn = document.getElementById('printBtn');
    const homeBtn = document.querySelector('.nav-btn[onclick*="home.php"]');
    
    if (index === totalSlides - 1) {
        printBtn.style.display = 'block';
        homeBtn.textContent = '🏠 Home';
    } else {
        printBtn.style.display = 'none';
        homeBtn.textContent = '🏠 Home';
    }
}

function triggerSlideAnimations(index) {
    const currentSlide = slides[index];
    const animatedElements = currentSlide.querySelectorAll('.highlight-box, .chart-workspace, .pivot-builder');
    
    animatedElements.forEach((element, i) => {
        setTimeout(() => {
            element.classList.add('slide-up');
        }, i * 200);
    });
}

// Enhanced Keyboard Navigation
function setupKeyboardNavigation() {
    document.addEventListener('keydown', function(e) {
        switch(e.key) {
            case 'ArrowLeft':
                if (currentSlideIndex > 0) changeSlide(-1);
                break;
            case 'ArrowRight':
                if (currentSlideIndex < totalSlides - 1) changeSlide(1);
                break;
            case 'Home':
                currentSlideIndex = 0;
                showSlide(currentSlideIndex);
                break;
            case 'End':
                currentSlideIndex = totalSlides - 1;
                showSlide(currentSlideIndex);
                break;
            case 'Escape':
                toggleFullscreen();
                break;
        }
    });
}

/* =========================================
   ENHANCED LAB 1: ADVANCED FORMULA BUILDER
   ========================================= */

function initializeSpreadsheetSimulator() {
    const cells = document.querySelectorAll('.grid-cell:not(.grid-header)');
    cells.forEach((cell, index) => {
        cell.addEventListener('click', function() {
            cells.forEach(c => c.classList.remove('active'));
            this.classList.add('active');
            updateFormulaBar(this.textContent);
        });
    });
}

function updateFormulaBar(cellContent) {
    const formulaInput = document.querySelector('.formula-input');
    if (formulaInput && cellContent) {
        formulaInput.value = cellContent.startsWith('=') ? cellContent : '=' + cellContent;
    }
}

function checkFormula() {
    const val = document.getElementById('lookup-value').value;
    const table = document.getElementById('table-array').value;
    const col = document.getElementById('col-index').value;
    const range = document.getElementById('range-lookup').value;
    
    const resultBox = document.getElementById('formula-result');
    resultBox.style.display = 'block';
    resultBox.classList.add('fade-in');
    
    // Calculate score
    let score = 0;
    let feedback = [];
    
    if (val === 'correct') score += 25;
    else feedback.push("Lookup Value: Should be the exact value you're searching for");
    
    if (table === 'correct') score += 25;
    else feedback.push("Table Array: Must include both lookup and return columns");
    
    if (col === 'correct') score += 25;
    else feedback.push("Column Index: Count from left starting at 1");
    
    if (range === 'correct') score += 25;
    else feedback.push("Range Lookup: FALSE for exact matches");
    
    if (score === 100) {
        resultBox.style.background = 'linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)';
        resultBox.style.color = '#155724';
        resultBox.style.border = '2px solid #28a745';
        resultBox.innerHTML = `
            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <span style="font-size: 24px; margin-right: 10px;">🎉</span>
                <strong>Perfect! Formula Mastered!</strong>
            </div>
            <div style="font-family: monospace; background: rgba(0,0,0,0.1); padding: 10px; border-radius: 5px; margin: 10px 0;">
                =VLOOKUP("Sarah", A2:C10, 3, FALSE)
            </div>
            <div style="color: #28a745; font-weight: bold;">Result: HR-002 (Sarah's Department ID)</div>
            <div style="margin-top: 10px; font-size: 14px;">
                💡 Pro Tip: Try XLOOKUP for even more powerful lookups!
            </div>
        `;
        labResults.formulaLab = true;
        
        // Animate success
        setTimeout(() => {
            resultBox.classList.add('pulse');
        }, 500);
        
    } else {
        resultBox.style.background = 'linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%)';
        resultBox.style.color = '#721c24';
        resultBox.style.border = '2px solid #dc3545';
        
        let feedbackHTML = `
            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <span style="font-size: 24px; margin-right: 10px;">❌</span>
                <strong>Score: ${score}/100 - Keep Trying!</strong>
            </div>
        `;
        
        if (feedback.length > 0) {
            feedbackHTML += '<div style="margin-top: 10px;"><strong>Hints:</strong><ul style="margin: 5px 0; padding-left: 20px;">';
            feedback.forEach(hint => {
                feedbackHTML += `<li style="margin: 5px 0;">${hint}</li>`;
            });
            feedbackHTML += '</ul></div>';
        }
        
        resultBox.innerHTML = feedbackHTML;
    }
    
    // Update overall progress
    updateLabProgress();
}

// Advanced Formula Challenge
function checkAdvancedFormula() {
    const criteria1 = document.getElementById('criteria1').value;
    const criteria2 = document.getElementById('criteria2').value;
    const sumRange = document.getElementById('sum-range').value;
    
    const resultBox = document.getElementById('advanced-formula-result');
    resultBox.style.display = 'block';
    resultBox.classList.add('fade-in');
    
    if (criteria1 === 'correct' && criteria2 === 'correct' && sumRange === 'correct') {
        resultBox.style.background = 'linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)';
        resultBox.style.color = '#155724';
        resultBox.innerHTML = `
            <strong>🎯 Excellent! SUMIFS Mastered!</strong><br>
            <div style="font-family: monospace; background: rgba(0,0,0,0.1); padding: 10px; border-radius: 5px; margin: 10px 0;">
                =SUMIFS(D:D, B:B, "North", C:C, ">10000")
            </div>
            This formula sums all sales amounts where Region is "North" AND Sales > 10,000.
        `;
    } else {
        resultBox.style.background = 'linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%)';
        resultBox.style.color = '#856404';
        resultBox.innerHTML = `
            <strong>⚠️ Almost there!</strong><br>
            Remember: SUMIFS(sum_range, criteria_range1, criteria1, criteria_range2, criteria2...)
        `;
    }
}

/* =========================================
   ENHANCED LAB 2: DYNAMIC CHART ARCHITECT
   ========================================= */

function setupChartAnimations() {
    const chartBars = document.querySelectorAll('.chart-bar');
    chartBars.forEach(bar => {
        bar.addEventListener('mouseenter', function() {
            this.style.filter = 'brightness(1.2) saturate(1.1)';
        });
        bar.addEventListener('mouseleave', function() {
            this.style.filter = 'brightness(1) saturate(1)';
        });
    });
}

function updateChart(type) {
    const display = document.getElementById('chart-display');
    const feedback = document.getElementById('chart-feedback');
    
    // Clear previous with animation
    display.style.opacity = '0';
    setTimeout(() => {
        display.innerHTML = '';
        display.style.alignItems = 'flex-end';
        display.style.opacity = '1';
        
        if (type === 'column') {
            createColumnChart(display);
            feedback.innerHTML = `
                <div style="display: flex; align-items: center;">
                    <span style="font-size: 20px; margin-right: 10px;">⚠️</span>
                    <div>
                        <strong>Column Chart Selected</strong><br>
                        Good for comparing categories, but Line charts better show trends over time.
                    </div>
                </div>
            `;
            feedback.style.color = "#f39c12";
            feedback.style.background = "linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%)";
            
        } else if (type === 'line') {
            createLineChart(display);
            feedback.innerHTML = `
                <div style="display: flex; align-items: center;">
                    <span style="font-size: 20px; margin-right: 10px;">✅</span>
                    <div>
                        <strong>Perfect Choice! Line Chart</strong><br>
                        Ideal for showing continuous data trends over time periods.
                    </div>
                </div>
            `;
            feedback.style.color = "#155724";
            feedback.style.background = "linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)";
            labResults.chartLab = true;
            
        } else if (type === 'pie') {
            createPieChart(display);
            feedback.innerHTML = `
                <div style="display: flex; align-items: center;">
                    <span style="font-size: 20px; margin-right: 10px;">❌</span>
                    <div>
                        <strong>Pie Chart Selected</strong><br>
                        Best for parts-of-a-whole relationships, not time-based trends.
                    </div>
                </div>
            `;
            feedback.style.color = "#721c24";
            feedback.style.background = "linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%)";
        }
        
        feedback.style.display = 'block';
        feedback.classList.add('fade-in');
        updateLabProgress();
        
    }, 300);
}

function createColumnChart(container) {
    const data = [
        {month: 'Jan', value: 40, height: '120px'},
        {month: 'Feb', value: 55, height: '165px'},
        {month: 'Mar', value: 30, height: '90px'},
        {month: 'Apr', value: 70, height: '210px'},
        {month: 'May', value: 60, height: '180px'},
        {month: 'Jun', value: 85, height: '255px'}
    ];
    
    container.innerHTML = data.map((item, index) => `
        <div class="chart-bar" 
             style="height: ${item.height}; 
                    background: linear-gradient(180deg, 
                        hsl(${120 + index * 20}, 65%, 45%) 0%, 
                        hsl(${120 + index * 20}, 65%, 35%) 100%);
                    animation-delay: ${index * 0.1}s;" 
             data-value="${item.month}: ${item.value}k">
        </div>
    `).join('') + `
        <div style="position:absolute; bottom: 10px; width: 100%; text-align: center; 
                    border-top: 2px solid #333; padding-top: 5px; font-weight: bold;">
            Monthly Revenue (K)
        </div>
    `;
}

function createLineChart(container) {
    container.innerHTML = `
        <svg width="100%" height="100%" viewBox="0 0 600 300" style="animation: fadeIn 1s ease;">
            <defs>
                <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#217346;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#33c481;stop-opacity:1" />
                </linearGradient>
                <filter id="glow">
                    <feGaussianBlur stdDeviation="3" result="coloredBlur"/>
                    <feMerge> 
                        <feMergeNode in="coloredBlur"/>
                        <feMergeNode in="SourceGraphic"/>
                    </feMerge>
                </filter>
            </defs>
            
            <!-- Grid lines -->
            <defs>
                <pattern id="grid" width="60" height="30" patternUnits="userSpaceOnUse">
                    <path d="M 60 0 L 0 0 0 30" fill="none" stroke="#e0e0e0" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)" />
            
            <!-- Data line with animation -->
            <polyline fill="none" stroke="url(#lineGradient)" stroke-width="4" 
                      points="50,200 150,170 250,210 350,140 450,150 550,100"
                      filter="url(#glow)"
                      style="stroke-dasharray: 1000; stroke-dashoffset: 1000; 
                             animation: drawLine 2s ease-out forwards;" />
            
            <!-- Data points -->
            <circle cx="50" cy="200" r="6" fill="#217346" class="data-point" style="animation: popIn 0.5s ease 0.5s both;"/>
            <circle cx="150" cy="170" r="6" fill="#217346" class="data-point" style="animation: popIn 0.5s ease 0.7s both;"/>
            <circle cx="250" cy="210" r="6" fill="#217346" class="data-point" style="animation: popIn 0.5s ease 0.9s both;"/>
            <circle cx="350" cy="140" r="6" fill="#217346" class="data-point" style="animation: popIn 0.5s ease 1.1s both;"/>
            <circle cx="450" cy="150" r="6" fill="#217346" class="data-point" style="animation: popIn 0.5s ease 1.3s both;"/>
            <circle cx="550" cy="100" r="6" fill="#217346" class="data-point" style="animation: popIn 0.5s ease 1.5s both;"/>
            
            <!-- Axes -->
            <line x1="40" y1="270" x2="570" y2="270" stroke="#333" stroke-width="2"/>
            <line x1="40" y1="270" x2="40" y2="50" stroke="#333" stroke-width="2"/>
            
            <!-- Labels -->
            <text x="50" y="290" text-anchor="middle" font-size="12" fill="#666">Jan</text>
            <text x="150" y="290" text-anchor="middle" font-size="12" fill="#666">Feb</text>
            <text x="250" y="290" text-anchor="middle" font-size="12" fill="#666">Mar</text>
            <text x="350" y="290" text-anchor="middle" font-size="12" fill="#666">Apr</text>
            <text x="450" y="290" text-anchor="middle" font-size="12" fill="#666">May</text>
            <text x="550" y="290" text-anchor="middle" font-size="12" fill="#666">Jun</text>
            
            <style>
                @keyframes drawLine {
                    to { stroke-dashoffset: 0; }
                }
                @keyframes popIn {
                    from { transform: scale(0); opacity: 0; }
                    to { transform: scale(1); opacity: 1; }
                }
                .data-point {
                    cursor: pointer;
                    transition: all 0.3s ease;
                }
                .data-point:hover {
                    r: 8;
                    fill: #33c481;
                }
            </style>
        </svg>
        <div style="position:absolute; bottom: 10px; width: 100%; text-align: center; font-weight: bold;">
            Revenue Trend Over Time
        </div>
    `;
}

function createPieChart(container) {
    container.style.alignItems = 'center';
    container.innerHTML = `
        <div style="position: relative;">
            <div style="width: 200px; height: 200px; border-radius: 50%; 
                        background: conic-gradient(
                            #217346 0% 25%, 
                            #33c481 25% 60%, 
                            #107c41 60% 85%, 
                            #5cb85c 85% 100%
                        );
                        animation: rotate 2s ease-in-out;"></div>
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                        background: white; width: 100px; height: 100px; border-radius: 50%;
                        display: flex; align-items: center; justify-content: center;
                        font-weight: bold; color: #217346;">Revenue</div>
        </div>
        <div style="margin-left: 30px;">
            <div style="margin: 10px 0; display: flex; align-items: center;">
                <div style="width: 20px; height: 20px; background: #217346; margin-right: 10px; border-radius: 3px;"></div>
                Q1 (25%)
            </div>
            <div style="margin: 10px 0; display: flex; align-items: center;">
                <div style="width: 20px; height: 20px; background: #33c481; margin-right: 10px; border-radius: 3px;"></div>
                Q2 (35%)
            </div>
            <div style="margin: 10px 0; display: flex; align-items: center;">
                <div style="width: 20px; height: 20px; background: #107c41; margin-right: 10px; border-radius: 3px;"></div>
                Q3 (25%)
            </div>
            <div style="margin: 10px 0; display: flex; align-items: center;">
                <div style="width: 20px; height: 20px; background: #5cb85c; margin-right: 10px; border-radius: 3px;"></div>
                Q4 (15%)
            </div>
        </div>
        <style>
            @keyframes rotate {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }
        </style>
    `;
}

// Advanced Chart Challenge
function checkChartElements() {
    const title = document.getElementById('chart-title').checked;
    const legend = document.getElementById('chart-legend').checked;
    const axes = document.getElementById('chart-axes').checked;
    const trendline = document.getElementById('chart-trendline').checked;
    
    const resultBox = document.getElementById('chart-elements-result');
    resultBox.style.display = 'block';
    
    const score = [title, legend, axes, trendline].filter(Boolean).length;
    
    if (score === 4) {
        resultBox.style.background = 'linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)';
        resultBox.style.color = '#155724';
        resultBox.innerHTML = `
            <strong>🎨 Chart Design Master!</strong><br>
            Your chart now has all essential elements for professional presentation!
        `;
    } else {
        resultBox.style.background = 'linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%)';
        resultBox.style.color = '#856404';
        resultBox.innerHTML = `
            <strong>Selected ${score}/4 elements</strong><br>
            Professional charts need titles, legends, labeled axes, and trendlines for forecasting.
        `;
    }
}

/* =========================================
   ENHANCED LAB 3: ADVANCED PIVOT TABLE SIMULATOR
   ========================================= */

function setupPivotDragDrop() {
    const items = document.querySelectorAll('.field-item');
    const zones = document.querySelectorAll('.drop-zone');

    items.forEach(item => {
        item.addEventListener('dragstart', dragStart);
        item.addEventListener('dragend', dragEnd);
    });

    zones.forEach(zone => {
        zone.addEventListener('dragover', dragOver);
        zone.addEventListener('dragleave', dragLeave);
        zone.addEventListener('drop', drop);
    });
}

function dragStart(e) {
    e.dataTransfer.setData('text/plain', e.target.id);
    e.target.style.opacity = '0.5';
    e.target.style.transform = 'rotate(5deg)';
}

function dragEnd(e) {
    e.target.style.opacity = '1';
    e.target.style.transform = 'rotate(0deg)';
}

function dragOver(e) {
    e.preventDefault();
    e.currentTarget.classList.add('drag-over');
    e.currentTarget.style.transform = 'scale(1.02)';
}

function dragLeave(e) {
    e.currentTarget.classList.remove('drag-over');
    e.currentTarget.style.transform = 'scale(1)';
}

function drop(e) {
    e.preventDefault();
    e.currentTarget.classList.remove('drag-over');
    e.currentTarget.style.transform = 'scale(1)';
    
    const id = e.dataTransfer.getData('text/plain');
    const draggable = document.getElementById(id);
    
    // Create visual feedback
    const dropZone = e.currentTarget;
    const fieldClone = draggable.cloneNode(true);
    fieldClone.id = id + '_clone_' + Date.now();
    fieldClone.style.background = 'linear-gradient(135deg, #e8f5e8 0%, #f0f8ff 100%)';
    fieldClone.style.border = '2px solid var(--module-primary)';
    
    // Add to drop zone
    dropZone.appendChild(fieldClone);
    
    // Add remove functionality
    fieldClone.addEventListener('click', function() {
        this.remove();
    });
}

function checkPivot() {
    const rowsZone = document.getElementById('zone-rows');
    const valuesZone = document.getElementById('zone-values');
    const filtersZone = document.getElementById('zone-filter');
    
    const hasRegionInRows = rowsZone.querySelector('[id*="field-region"]');
    const hasSalesInValues = valuesZone.querySelector('[id*="field-sales"]');
    const hasDateInFilters = filtersZone.querySelector('[id*="field-date"]');
    
    const resultDiv = document.getElementById('pivot-result');
    resultDiv.style.display = 'block';
    resultDiv.classList.add('fade-in');

    let score = 0;
    if (hasRegionInRows) score += 40;
    if (hasSalesInValues) score += 40;
    if (hasDateInFilters) score += 20;

    if (score >= 80) {
        resultDiv.style.background = 'linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)';
        resultDiv.style.color = '#155724';
        resultDiv.style.border = '2px solid #28a745';
        
        resultDiv.innerHTML = `
            <div style="display: flex; align-items: center; margin-bottom: 15px;">
                <span style="font-size: 24px; margin-right: 10px;">🎯</span>
                <strong>Pivot Table Configured Correctly! (Score: ${score}/100)</strong>
            </div>
            <div style="background: rgba(0,0,0,0.1); padding: 15px; border-radius: 8px; margin: 10px 0;">
                <strong>Your Report Will Show:</strong><br>
                📊 Total Sales by Region (Rows)<br>
                💰 Sum of Sales Amounts (Values)<br>
                ${hasDateInFilters ? '📅 Filtered by Date Range' : ''}
            </div>
            <div style="font-style: italic; margin-top: 10px;">
                Perfect! This creates a professional summary report.
            </div>
        `;
        
        labResults.pivotLab = true;
        
        // Show sample output
        setTimeout(() => {
            showPivotPreview();
        }, 1000);
        
    } else {
        resultDiv.style.background = 'linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%)';
        resultDiv.style.color = '#856404';
        resultDiv.style.border = '2px solid #f39c12';
        
        let feedback = `<strong>Score: ${score}/100 - Almost There!</strong><br>`;
        if (!hasRegionInRows) feedback += "• Move 'Region' to Rows area<br>";
        if (!hasSalesInValues) feedback += "• Move 'Sales Amount' to Values area<br>";
        if (!hasDateInFilters) feedback += "• Consider moving 'Date' to Filters for better control<br>";
        
        resultDiv.innerHTML = feedback;
    }
    
    updateLabProgress();
}

function showPivotPreview() {
    const previewDiv = document.createElement('div');
    previewDiv.className = 'simulation-result fade-in';
    previewDiv.style.background = 'white';
    previewDiv.style.border = '2px solid var(--module-primary)';
    previewDiv.style.marginTop = '20px';
    previewDiv.innerHTML = `
        <h4 style="color: var(--module-primary); margin-bottom: 15px;">📊 Generated Pivot Table Preview:</h4>
        <table style="width: 100%; border-collapse: collapse; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            <thead>
                <tr style="background: var(--module-primary); color: white;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Region</th>
                    <th style="padding: 10px; text-align: right; border: 1px solid #ddd;">Total Sales</th>
                    <th style="padding: 10px; text-align: right; border: 1px solid #ddd;">% of Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">North</td>
                    <td style="padding: 8px; text-align: right; border: 1px solid #ddd;">$125,400</td>
                    <td style="padding: 8px; text-align: right; border: 1px solid #ddd;">32.1%</td>
                </tr>
                <tr style="background: #f8f9fa;">
                    <td style="padding: 8px; border: 1px solid #ddd;">South</td>
                    <td style="padding: 8px; text-align: right; border: 1px solid #ddd;">$98,750</td>
                    <td style="padding: 8px; text-align: right; border: 1px solid #ddd;">25.3%</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">East</td>
                    <td style="padding: 8px; text-align: right; border: 1px solid #ddd;">$87,200</td>
                    <td style="padding: 8px; text-align: right; border: 1px solid #ddd;">22.3%</td>
                </tr>
                <tr style="background: #f8f9fa;">
                    <td style="padding: 8px; border: 1px solid #ddd;">West</td>
                    <td style="padding: 8px; text-align: right; border: 1px solid #ddd;">$79,650</td>
                    <td style="padding: 8px; text-align: right; border: 1px solid #ddd;">20.3%</td>
                </tr>
                <tr style="background: var(--module-accent); color: white; font-weight: bold;">
                    <td style="padding: 10px; border: 1px solid #ddd;">Grand Total</td>
                    <td style="padding: 10px; text-align: right; border: 1px solid #ddd;">$391,000</td>
                    <td style="padding: 10px; text-align: right; border: 1px solid #ddd;">100%</td>
                </tr>
            </tbody>
        </table>
    `;
    
    document.getElementById('pivot-result').appendChild(previewDiv);
}

/* =========================================
   NEW LAB 4: CONDITIONAL FORMATTING
   ========================================= */

function applyConditionalFormatting(rule) {
    const cells = document.querySelectorAll('.cf-cell');
    const resultBox = document.getElementById('conditional-result');
    
    cells.forEach(cell => {
        cell.style.background = 'white';
        cell.style.color = 'black';
    });
    
    if (rule === 'correct') {
        // Apply color scale
        const values = [85, 92, 78, 95, 88, 76, 90];
        cells.forEach((cell, index) => {
            const value = values[index];
            const intensity = (value - 70) / 25; // Scale 70-95 to 0-1
            const hue = intensity * 120; // Green to red
            cell.style.background = `hsl(${hue}, 70%, 85%)`;
            cell.style.color = value < 80 ? '#721c24' : '#155724';
            cell.style.fontWeight = 'bold';
        });
        
        resultBox.style.display = 'block';
        resultBox.style.background = 'linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)';
        resultBox.style.color = '#155724';
        resultBox.innerHTML = `
            <strong>✅ Perfect Conditional Formatting!</strong><br>
            Color scales help identify high/low performers at a glance.
        `;
        
        labResults.conditionalLab = true;
    } else {
        resultBox.style.display = 'block';
        resultBox.style.background = 'linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%)';
        resultBox.style.color = '#856404';
        resultBox.innerHTML = `
            <strong>Try the Color Scale option</strong><br>
            Color scales provide visual gradients based on cell values.
        `;
    }
    
    updateLabProgress();
}

/* =========================================
   NEW LAB 5: MACRO BASICS
   ========================================= */

function recordMacro() {
    const macroName = document.getElementById('macro-name').value;
    const resultBox = document.getElementById('macro-result');
    
    if (!macroName) {
        resultBox.style.display = 'block';
        resultBox.style.background = 'linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%)';
        resultBox.style.color = '#721c24';
        resultBox.innerHTML = 'Please enter a macro name first!';
        return;
    }
    
    // Simulate macro recording
    resultBox.style.display = 'block';
    resultBox.style.background = 'linear-gradient(135deg, #d1ecf1 0%, #bee5eb 100%)';
    resultBox.style.color = '#0c5460';
    resultBox.innerHTML = `
        <div style="display: flex; align-items: center; margin-bottom: 10px;">
            <div class="loading" style="width: 20px; height: 20px; border: 2px solid #0c5460; 
                 border-top: 2px solid transparent; border-radius: 50%; 
                 animation: spin 1s linear infinite; margin-right: 10px;"></div>
            <strong>Recording Macro: ${macroName}</strong>
        </div>
        <div style="font-family: monospace; font-size: 12px;">
            • Capturing actions...<br>
            • Format cells → Bold<br>
            • Apply borders<br>
            • Auto-fit columns<br>
        </div>
    `;
    
    setTimeout(() => {
        resultBox.style.background = 'linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)';
        resultBox.style.color = '#155724';
        resultBox.innerHTML = `
            <strong>🔧 Macro "${macroName}" Recorded Successfully!</strong><br>
            <div style="background: rgba(0,0,0,0.1); padding: 10px; border-radius: 5px; margin: 10px 0; font-family: monospace; font-size: 12px;">
Sub ${macroName}()<br>
&nbsp;&nbsp;&nbsp;&nbsp;Selection.Font.Bold = True<br>
&nbsp;&nbsp;&nbsp;&nbsp;Selection.Borders.LineStyle = xlContinuous<br>
&nbsp;&nbsp;&nbsp;&nbsp;Columns.AutoFit<br>
End Sub
            </div>
            Use <kbd>Alt + F8</kbd> to run your macro!
        `;
        
        labResults.macroLab = true;
        updateLabProgress();
    }, 3000);
}

/* =========================================
   NEW LAB 6: DASHBOARD BUILDER
   ========================================= */

function addDashboardWidget(type) {
    const dashboard = document.getElementById('dashboard-canvas');
    const widget = document.createElement('div');
    widget.className = 'dashboard-widget fade-in';
    widget.style.cssText = `
        background: white;
        border: 2px solid var(--module-primary);
        border-radius: 10px;
        padding: 15px;
        margin: 10px;
        box-shadow: var(--shadow-medium);
        min-height: 120px;
        position: relative;
        cursor: move;
    `;
    
    const widgetTypes = {
        'kpi': {
            title: 'KPI Card',
            content: '<div style="text-align: center;"><div style="font-size: 2em; color: var(--module-primary); font-weight: bold;">$1.2M</div><div style="color: #28a745;">↗ +15% vs last month</div></div>'
        },
        'chart': {
            title: 'Sales Chart',
            content: '<div style="height: 80px; background: linear-gradient(135deg, var(--module-primary) 0%, var(--module-accent) 100%); border-radius: 5px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">📊 Line Chart</div>'
        },
        'table': {
            title: 'Top Products',
            content: '<table style="width:100%; font-size: 12px;"><tr><th>Product</th><th>Sales</th></tr><tr><td>Widget A</td><td>$45K</td></tr><tr><td>Widget B</td><td>$38K</td></tr></table>'
        }
    };
    
    const config = widgetTypes[type];
    widget.innerHTML = `
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
            <strong style="color: var(--module-primary);">${config.title}</strong>
            <button onclick="this.parentElement.parentElement.remove()" style="background: #dc3545; color: white; border: none; border-radius: 50%; width: 20px; height: 20px; cursor: pointer; font-size: 12px;">×</button>
        </div>
        ${config.content}
    `;
    
    dashboard.appendChild(widget);
    
    // Make draggable
    makeDraggable(widget);
    
    // Check if dashboard is complete
    checkDashboard();
}

function makeDraggable(element) {
    let pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
    
    element.onmousedown = dragMouseDown;
    
    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        pos3 = e.clientX;
        pos4 = e.clientY;
        document.onmouseup = closeDragElement;
        document.onmousemove = elementDrag;
    }
    
    function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;
        element.style.top = (element.offsetTop - pos2) + "px";
        element.style.left = (element.offsetLeft - pos1) + "px";
        element.style.position = "absolute";
    }
    
    function closeDragElement() {
        document.onmouseup = null;
        document.onmousemove = null;
    }
}

function checkDashboard() {
    const widgets = document.querySelectorAll('.dashboard-widget');
    const resultBox = document.getElementById('dashboard-result');
    
    if (widgets.length >= 3) {
        resultBox.style.display = 'block';
        resultBox.style.background = 'linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)';
        resultBox.style.color = '#155724';
        resultBox.innerHTML = `
            <strong>🎛️ Dashboard Created Successfully!</strong><br>
            You've built a professional dashboard with ${widgets.length} widgets. 
            Great for executive reporting and data visualization!
        `;
        
        labResults.dashboardLab = true;
        updateLabProgress();
    }
}

/* =========================================
   LAB PROGRESS TRACKING
   ========================================= */

function updateLabProgress() {
    const completedLabs = Object.values(labResults).filter(Boolean).length;
    const totalLabs = Object.keys(labResults).length;
    const progressPercent = (completedLabs / totalLabs) * 100;
    
    const progressBar = document.querySelector('.lab-progress-fill');
    if (progressBar) {
        progressBar.style.width = progressPercent + '%';
    }
    
    const progressText = document.querySelector('.lab-progress-text');
    if (progressText) {
        progressText.textContent = `Labs Completed: ${completedLabs}/${totalLabs}`;
    }
    
    // Show completion message
    if (completedLabs === totalLabs) {
        showLabCompletionCelebration();
    }
}

function showLabCompletionCelebration() {
    const celebration = document.createElement('div');
    celebration.style.cssText = `
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        color: white;
        padding: 30px;
        border-radius: 20px;
        text-align: center;
        z-index: 1000;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        animation: bounceIn 0.6s ease;
    `;
    
    celebration.innerHTML = `
        <div style="font-size: 3em; margin-bottom: 15px;">🎉</div>
        <h2 style="margin: 0 0 10px 0;">All Labs Completed!</h2>
        <p style="margin: 0;">You're ready for the final assessment!</p>
    `;
    
    document.body.appendChild(celebration);
    
    setTimeout(() => {
        celebration.remove();
    }, 4000);
}

/* =========================================
   ENHANCED QUIZ SYSTEM (20 Questions)
   ========================================= */

const quizQuestions = [
    {
        id: 'q1',
        question: 'Which function would you use to find a value in a table based on a unique identifier?',
        options: ['SUMIF', 'VLOOKUP/XLOOKUP', 'COUNTIF', 'INDEX'],
        correct: 1,
        explanation: 'VLOOKUP and XLOOKUP are designed specifically for searching and retrieving data from tables.'
    },
    {
        id: 'q2', 
        question: 'Which chart type is best for showing trends over time?',
        options: ['Pie Chart', 'Line Chart', 'Scatter Plot', 'Histogram'],
        correct: 1,
        explanation: 'Line charts excel at displaying continuous data changes over time periods.'
    },
    {
        id: 'q3',
        question: 'In a Pivot Table, where should you place numerical data you want to calculate?',
        options: ['Filters Area', 'Rows Area', 'Values Area', 'Columns Area'],
        correct: 2,
        explanation: 'The Values area is where Excel performs calculations like SUM, AVERAGE, COUNT on your data.'
    },
    // Questions 4-20 continue...
    {
        id: 'q4',
        question: 'What does the F4 key do in Excel?',
        options: ['Save file', 'Repeat last action / Toggle cell references', 'Open Find dialog', 'Insert function'],
        correct: 1,
        explanation: 'F4 repeats your last action and toggles between relative ($A$1), mixed (A$1), and absolute (A1) cell references.'
    },
    {
        id: 'q5',
        question: 'Which function combines multiple criteria for conditional calculations?',
        options: ['SUMIF', 'SUMIFS', 'SUM', 'COUNTIF'],
        correct: 1,
        explanation: 'SUMIFS allows multiple criteria while SUMIF only handles one condition.'
    },
    {
        id: 'q6',
        question: 'What is the primary purpose of Data Validation?',
        options: ['Format cells', 'Restrict input to specific values', 'Create charts', 'Calculate formulas'],
        correct: 1,
        explanation: 'Data Validation controls what users can enter into cells, ensuring data quality and consistency.'
    },
    {
        id: 'q7',
        question: 'Which feature would you use to automatically format cells based on their values?',
        options: ['Cell Styles', 'Conditional Formatting', 'Themes', 'Format Painter'],
        correct: 1,
        explanation: 'Conditional Formatting automatically applies formatting based on cell values, formulas, or other criteria.'
    },
    {
        id: 'q8',
        question: 'What is a Macro in Excel?',
        options: ['A large spreadsheet', 'An automated sequence of actions', 'A type of chart', 'A formula function'],
        correct: 1,
        explanation: 'Macros are recorded or programmed sequences of actions that automate repetitive tasks.'
    },
    {
        id: 'q9',
        question: 'Which tool is best for creating an interactive business dashboard?',
        options: ['Basic charts', 'Slicers and Pivot Tables', 'Simple formulas', 'Text boxes'],
        correct: 1,
        explanation: 'Slicers provide interactive filtering controls that work perfectly with Pivot Tables for dynamic dashboards.'
    },
    {
        id: 'q10',
        question: 'What does CTRL+T create in Excel?',
        options: ['New workbook', 'Table from selected data', 'Text box', 'Template'],
        correct: 1,
        explanation: 'CTRL+T converts your selected data range into a structured Excel Table with built-in filtering and formatting.'
    },
    {
        id: 'q11',
        question: 'Which function would replace nested IF statements?',
        options: ['SWITCH', 'IFS', 'CHOOSE', 'All of the above'],
        correct: 3,
        explanation: 'IFS, SWITCH, and CHOOSE can all replace complex nested IF statements, making formulas cleaner and easier to read.'
    },
    {
        id: 'q12',
        question: 'What is the difference between relative and absolute cell references?',
        options: ['No difference', 'Relative changes when copied, absolute stays fixed', 'Absolute changes, relative stays fixed', 'Both change when copied'],
        correct: 1,
        explanation: 'Relative references (A1) adjust when copied, while absolute references ($A$1) remain fixed to specific cells.'
    },
    {
        id: 'q13',
        question: 'Which chart element helps predict future trends?',
        options: ['Legend', 'Trendline', 'Data labels', 'Gridlines'],
        correct: 1,
        explanation: 'Trendlines use mathematical models to extend current patterns into future predictions.'
    },
    {
        id: 'q14',
        question: 'What is the main advantage of using Tables over regular ranges?',
        options: ['They look better', 'Automatic expansion and structured references', 'They print better', 'No advantages'],
        correct: 1,
        explanation: 'Tables automatically expand with new data and use structured references (Table[Column]) instead of cell addresses.'
    },
    {
        id: 'q15',
        question: 'Which protection feature prevents users from editing formulas while allowing data entry?',
        options: ['Protect Workbook', 'Protect Sheet with unlocked input cells', 'File encryption', 'Read-only mode'],
        correct: 1,
        explanation: 'Sheet protection with specific unlocked cells allows controlled access to input areas while protecting formulas.'
    },
    {
        id: 'q16',
        question: 'What does the XLOOKUP function offer over VLOOKUP?',
        options: ['Same functionality', 'Bi-directional search and better error handling', 'Only works with numbers', 'Slower performance'],
        correct: 1,
        explanation: 'XLOOKUP can search left-to-right or right-to-left, handles errors better, and has more flexible syntax than VLOOKUP.'
    },
    {
        id: 'q17',
        question: 'Which keyboard shortcut inserts the current date?',
        options: ['CTRL+D', 'CTRL+;', 'CTRL+T', 'CTRL+SHIFT+;'],
        correct: 1,
        explanation: 'CTRL+; inserts the current date, while CTRL+SHIFT+; inserts the current time.'
    },
    {
        id: 'q18',
        question: 'What is the purpose of the Watch Window in Excel?',
        options: ['View videos', 'Monitor specific cells while working elsewhere', 'Watch for errors', 'Time tracking'],
        correct: 1,
        explanation: 'The Watch Window lets you monitor important cells and formulas even when working in different parts of the workbook.'
    },
    {
        id: 'q19',
        question: 'Which feature would you use to analyze different scenarios?',
        options: ['Goal Seek', 'Scenario Manager', 'Data Table', 'All of the above'],
        correct: 3,
        explanation: 'Goal Seek, Scenario Manager, and Data Tables are all What-If Analysis tools for exploring different scenarios.'
    },
    {
        id: 'q20',
        question: 'What is the maximum number of rows in modern Excel?',
        options: ['65,536', '1,048,576', '1,000,000', 'Unlimited'],
        correct: 1,
        explanation: 'Modern Excel supports 1,048,576 rows and 16,384 columns, significantly more than older versions.'
    }
];

function initializeQuiz() {
    quizAttempts = 0;
    selectedQuizAnswers = {};
    
    // Setup quiz option click handlers
    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.addEventListener('click', function() {
            // Clear sibling selection
            const siblings = this.parentElement.children;
            for (let sib of siblings) {
                sib.classList.remove('selected');
            }
            // Select this option
            this.classList.add('selected');
            
            // Record answer
            const questionId = this.closest('.question').id;
            const answerIndex = Array.from(siblings).indexOf(this);
            selectedQuizAnswers[questionId] = answerIndex;
        });
    });
}

function submitQuiz() {
    quizAttempts++;
    
    let score = 0;
    let answeredCount = 0;
    
    // Check each question
    quizQuestions.forEach(q => {
        if (selectedQuizAnswers[q.id] !== undefined) {
            answeredCount++;
            if (selectedQuizAnswers[q.id] === q.correct) {
                score++;
            }
        }
    });
    
    const feedback = document.getElementById('quiz-feedback');
    feedback.style.display = 'block';
    feedback.classList.add('fade-in');
    
    if (answeredCount < quizQuestions.length) {
        feedback.style.background = 'linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%)';
        feedback.style.color = '#721c24';
        feedback.innerHTML = `
            <strong>⚠️ Incomplete</strong><br>
            Please answer all ${quizQuestions.length} questions before submitting.
            (${answeredCount}/${quizQuestions.length} answered)
        `;
        return;
    }
    
    const percentage = Math.round((score / quizQuestions.length) * 100);
    let grade, message, bgGradient, textColor;
    
    if (percentage >= 90) {
        grade = 'A+';
        message = 'Outstanding! You\'ve mastered Advanced Excel!';
        bgGradient = 'linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%)';
        textColor = '#155724';
    } else if (percentage >= 80) {
        grade = 'A';
        message = 'Excellent work! You have strong Excel skills.';
        bgGradient = 'linear-gradient(135deg, #d1ecf1 0%, #bee5eb 100%)';
        textColor = '#0c5460';
    } else if (percentage >= 70) {
        grade = 'B';
        message = 'Good job! Review the areas you missed.';
        bgGradient = 'linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%)';
        textColor = '#856404';
    } else if (percentage >= 60) {
        grade = 'C';
        message = 'Passing grade. Consider reviewing the course materials.';
        bgGradient = 'linear-gradient(135deg, #ffeaa7 0%, #fdcb6e 100%)';
        textColor = '#856404';
    } else {
        grade = 'F';
        message = 'Needs improvement. Please review the course and retake.';
        bgGradient = 'linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%)';
        textColor = '#721c24';
    }
    
    feedback.style.background = bgGradient;
    feedback.style.color = textColor;
    feedback.style.border = `2px solid ${textColor}`;
    feedback.innerHTML = `
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
            <div>
                <div style="font-size: 2em; font-weight: bold;">${grade}</div>
                <div style="font-size: 1.2em; font-weight: bold;">${score}/${quizQuestions.length} (${percentage}%)</div>
            </div>
            <div style="font-size: 3em;">
                ${percentage >= 80 ? '🏆' : percentage >= 70 ? '🎖️' : percentage >= 60 ? '📜' : '📚'}
            </div>
        </div>
        <div style="margin-bottom: 15px;">
            <strong>${message}</strong>
        </div>
        <div style="font-size: 14px;">
            Attempt: ${quizAttempts}/${maxQuizAttempts}
            ${quizAttempts < maxQuizAttempts && percentage < 70 ? 
                '<br><button onclick="resetQuiz()" style="margin-top: 10px; padding: 8px 15px; background: ' + textColor + '; color: white; border: none; border-radius: 5px; cursor: pointer;">Try Again</button>' : 
                ''
            }
        </div>
    `;
    
    // Show correct answers
    showQuizAnswers();
    
    // Generate certificate for passing grades
    if (percentage >= 70) {
        generateCertificate(percentage, grade);
    }
}

function showQuizAnswers() {
    document.querySelectorAll('.question').forEach((questionEl, index) => {
        const question = quizQuestions[index];
        const options = questionEl.querySelectorAll('.quiz-options li');
        
        options.forEach((option, optionIndex) => {
            option.classList.remove('correct', 'incorrect');
            
            if (optionIndex === question.correct) {
                option.classList.add('correct');
                option.title = question.explanation;
            } else if (option.classList.contains('selected') && optionIndex !== question.correct) {
                option.classList.add('incorrect');
            }
        });
    });
}

function resetQuiz() {
    selectedQuizAnswers = {};
    
    // Clear all selections
    document.querySelectorAll('.quiz-options li').forEach(option => {
        option.classList.remove('selected', 'correct', 'incorrect');
        option.title = '';
    });
    
    // Hide feedback
    document.getElementById('quiz-feedback').style.display = 'none';
}

function generateCertificate(percentage, grade) {
    setTimeout(() => {
        const certificate = document.createElement('div');
        certificate.style.cssText = `
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 40px;
            border: 5px solid var(--module-primary);
            border-radius: 20px;
            text-align: center;
            z-index: 1000;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            max-width: 500px;
            animation: bounceIn 0.8s ease;
        `;
        
        const currentDate = new Date().toLocaleDateString();
        certificate.innerHTML = `
            <div style="border: 3px solid var(--module-accent); padding: 30px; border-radius: 15px; background: white;">
                <div style="font-size: 2.5em; color: var(--module-primary); margin-bottom: 20px;">🏆</div>
                <h2 style="color: var(--module-primary); margin: 0 0 10px 0; font-family: serif;">Certificate of Completion</h2>
                <div style="height: 2px; background: var(--module-primary); margin: 20px 0;"></div>
                <p style="font-size: 1.2em; margin: 20px 0;">This certifies that</p>
                <h3 style="color: var(--module-secondary); margin: 10px 0; font-family: serif;">Excel Power User</h3>
                <p style="margin: 20px 0;">has successfully completed</p>
                <h4 style="color: var(--module-primary); margin: 10px 0;">Advanced Microsoft Excel</h4>
                <p style="margin: 20px 0; font-size: 14px;">GUI-based Spreadsheet Application Enhancement</p>
                <div style="margin: 30px 0;">
                    <div style="display: inline-block; margin: 0 20px;">
                        <strong>Score: ${percentage}%</strong><br>
                        <small>Grade: ${grade}</small>
                    </div>
                    <div style="display: inline-block; margin: 0 20px;">
                        <strong>${currentDate}</strong><br>
                        <small>Date Completed</small>
                    </div>
                </div>
                <button onclick="this.parentElement.parentElement.remove()" 
                        style="background: var(--module-primary); color: white; border: none; 
                               padding: 10px 20px; border-radius: 10px; cursor: pointer; margin-top: 20px;">
                    Close Certificate
                </button>
            </div>
        `;
        
        document.body.appendChild(certificate);
    }, 2000);
}

/* =========================================
   UTILITY FUNCTIONS
   ========================================= */

function toggleFullscreen() {
    if (!document.fullscreenElement) {
        document.documentElement.requestFullscreen();
    } else {
        document.exitFullscreen();
    }
}

function setupInteractiveLabs() {
    // Initialize all interactive components
    initializeQuiz();
    
    // Add loading animations to buttons
    document.querySelectorAll('.action-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            this.classList.add('loading');
            setTimeout(() => {
                this.classList.remove('loading');
            }, 1000);
        });
    });
    
    // Add keyboard shortcuts for better UX
    document.addEventListener('keydown', function(e) {
        if (e.ctrlKey) {
            switch(e.key) {
                case 'Enter':
                    e.preventDefault();
                    const submitBtn = document.querySelector('button[onclick*="submit"]');
                    if (submitBtn) submitBtn.click();
                    break;
                case 'r':
                    e.preventDefault();
                    const resetBtn = document.querySelector('button[onclick*="reset"]');
                    if (resetBtn) resetBtn.click();
                    break;
            }
        }
    });
}

// Initialize everything when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    initializePresentation();
    setupInteractiveLabs();
    
    // Add CSS for dynamic animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @keyframes popIn {
            0% { transform: scale(0); opacity: 0; }
            80% { transform: scale(1.1); }
            100% { transform: scale(1); opacity: 1; }
        }
    `;
    document.head.appendChild(style);
});