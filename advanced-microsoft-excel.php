<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Microsoft Excel: Complete Mastery Course</title>
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/advanced-microsoft-excel.css">
    <link rel="icon" type="image/x-icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>📊</text></svg>">
</head>
<body>
    <div class="presentation-container">
        <div class="slide-counter">
            <span id="currentSlide">1</span> / <span id="totalSlides"></span>
        </div>

        <!-- Slide 1: Title & Objectives -->
        <div class="slide active">
            <div style="text-align: center; padding-top: 5vh;">
                <div style="font-size: 100px; margin-bottom: 30px; animation: bounceIn 1s ease;">📊</div>
                <h1 style="border: none; font-size: 4rem; margin-bottom: 20px;">Advanced Microsoft Excel</h1>
                <h2 style="color: var(--text-secondary); font-size: 1.8rem; margin-bottom: 40px;">
                    GUI-based Spreadsheet Application Enhancement & Advanced Chart Integration
                </h2>
                
                <div class="highlight-box" style="display: inline-block; text-align: left; max-width: 800px; margin-top: 40px;">
                    <h3 style="text-align: center; color: var(--module-primary); margin-bottom: 30px;">🎯 Complete Learning Experience</h3>
                    <div class="three-column" style="gap: 30px;">
                        <div>
                            <h4>📚 Session Content</h4>
                            <ul style="font-size: 14px;">
                                <li>6 Interactive Labs</li>
                                <li>Advanced Formulas</li>
                                <li>Dynamic Charts</li>
                                <li>Pivot Tables</li>
                                <li>Dashboards</li>
                                <li>Automation</li>
                            </ul>
                        </div>
                        <div>
                            <h4>⚡ Practical Skills</h4>
                            <ul style="font-size: 14px;">
                                <li>Formula Building</li>
                                <li>Chart Architecture</li>
                                <li>Data Analysis</li>
                                <li>Conditional Formatting</li>
                                <li>Macro Recording</li>
                                <li>Dashboard Design</li>
                            </ul>
                        </div>
                        <div>
                            <h4>📋 Assessment</h4>
                            <ul style="font-size: 14px;">
                                <li>20 Question Quiz</li>
                                <li>Practical Scenarios</li>
                                <li>Real-world Problems</li>
                                <li>Certificate Generation</li>
                                <li>Progress Tracking</li>
                                <li>Multiple Attempts</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div style="text-align: center; margin-top: 30px; padding: 20px; background: rgba(33, 115, 70, 0.1); border-radius: 10px;">
                        <strong style="color: var(--module-primary); font-size: 18px;">⏱️ Duration: 3 Hours | 🎓 Certification Available | 🔬 Hands-on Labs</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2: GUI Enhancement Fundamentals -->
        <div class="slide">
            <h1>🖥️ Excel GUI Enhancement Fundamentals</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 40px;">
                Transform your Excel workspace for maximum productivity and professional presentation
            </p>
            
            <div class="two-column">
                <div>
                    <h2>🎛️ Workspace Customization</h2>
                    <ul>
                        <li><strong>Quick Access Toolbar:</strong> Add Save As, Sort, AutoSum, Email for rapid access to critical functions.</li>
                        <li><strong>Ribbon Customization:</strong> Create custom tabs for Developer Tools, Data Analysis, and frequently used formatting commands.</li>
                        <li><strong>Status Bar Configuration:</strong> Display Average, Count, Numerical Count, Min, Max for selected data ranges.</li>
                        <li><strong>View Controls:</strong> Master Normal, Page Break Preview, and Page Layout views for different workflow requirements.</li>
                    </ul>
                    
                    <div class="tip-box">
                        <strong>💡 Pro Workflow Tip:</strong> Right-click the ribbon to access customization options. Create a "Data Analysis" tab with Pivot Tables, Charts, and What-If Analysis tools grouped together.
                    </div>
                </div>
                <div>
                    <h2>🧭 Navigation & Efficiency</h2>
                    <ul>
                        <li><strong>Freeze Panes:</strong> Lock rows/columns to keep headers visible while scrolling through large datasets.</li>
                        <li><strong>Split Window:</strong> Compare distant sections of the same worksheet simultaneously for data verification.</li>
                        <li><strong>Named Ranges:</strong> Replace cell references like "C4" with meaningful names like "TaxRate" or "QuarterlySales".</li>
                        <li><strong>Hyperlink Navigation:</strong> Create internal links between worksheets and external links to supporting documents.</li>
                    </ul>

                    <div class="highlight-box" style="background: linear-gradient(135deg, #e8f4fd 0%, #d1ecf1 100%);">
                        <h4>⌨️ Power User Shortcuts</h4>
                        <div style="font-family: monospace; font-size: 14px; line-height: 1.8;">
                            <strong>Ctrl + Arrow Keys:</strong> Jump to data edges<br>
                            <strong>Ctrl + Shift + Arrow:</strong> Select to data edges<br>
                            <strong>Ctrl + G:</strong> Go to specific cell/range<br>
                            <strong>Alt + =:</strong> AutoSum selection<br>
                            <strong>Ctrl + T:</strong> Create structured table
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3: Advanced Formula Architecture -->
        <div class="slide">
            <h1>🔧 Advanced Formula Architecture</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Build intelligent, self-updating spreadsheets with advanced logical and lookup functions
            </p>
            
            <div class="spreadsheet-container" style="margin-bottom: 30px;">
                <div class="formula-bar">
                    <span class="formula-label">ƒx</span>
                    <input type="text" class="formula-input" value="=IF(AND(B2>TARGET,C2='Yes'),VLOOKUP(A2,BonusTable,3,0),'Standard')" readonly>
                </div>
                <div class="sheet-grid">
                    <div class="grid-header"></div>
                    <div class="grid-header">A</div>
                    <div class="grid-header">B</div>
                    <div class="grid-header">C</div>
                    <div class="grid-header">D</div>
                    <div class="grid-header">E</div>
                    <div class="grid-header">F</div>
                    
                    <div class="grid-header">1</div>
                    <div class="grid-cell"><strong>Employee</strong></div>
                    <div class="grid-cell"><strong>Sales</strong></div>
                    <div class="grid-cell"><strong>Target Met</strong></div>
                    <div class="grid-cell"><strong>Bonus Type</strong></div>
                    <div class="grid-cell"><strong>Amount</strong></div>
                    <div class="grid-cell"><strong>Department</strong></div>
                    
                    <div class="grid-header">2</div>
                    <div class="grid-cell">John Smith</div>
                    <div class="grid-cell">$125,000</div>
                    <div class="grid-cell">Yes</div>
                    <div class="grid-cell formula-result">Premium</div>
                    <div class="grid-cell formula-result">$8,500</div>
                    <div class="grid-cell">Sales</div>
                    
                    <div class="grid-header">3</div>
                    <div class="grid-cell">Sarah Davis</div>
                    <div class="grid-cell">$89,000</div>
                    <div class="grid-cell">No</div>
                    <div class="grid-cell formula-result">Standard</div>
                    <div class="grid-cell formula-result">$2,000</div>
                    <div class="grid-cell">Marketing</div>
                </div>
            </div>

            <div class="two-column">
                <div>
                    <h3>🧠 Advanced Logical Functions</h3>
                    <ul>
                        <li><strong>IF with AND/OR:</strong> Test multiple conditions simultaneously for complex decision trees.</li>
                        <li><strong>IFS Function:</strong> Streamlined replacement for nested IF statements (Excel 365/2019+).</li>
                        <li><strong>SWITCH Function:</strong> Clean alternative to multiple IF statements with exact matches.</li>
                        <li><strong>IFERROR/IFNA:</strong> Graceful error handling to prevent #N/A and #VALUE! errors from breaking reports.</li>
                    </ul>

                    <div class="code-block">
                        =IFS(B2>=100000,"Platinum",<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B2>=75000,"Gold",<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B2>=50000,"Silver",<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRUE,"Bronze")
                    </div>
                </div>
                <div>
                    <h3>🔍 Next-Generation Lookup Functions</h3>
                    <ul>
                        <li><strong>XLOOKUP:</strong> Bi-directional search, better error handling, and exact/approximate match control.</li>
                        <li><strong>VLOOKUP/HLOOKUP:</strong> Traditional lookup functions for legacy compatibility.</li>
                        <li><strong>INDEX/MATCH:</strong> More flexible than VLOOKUP, can look left and handle dynamic ranges.</li>
                        <li><strong>FILTER Function:</strong> Dynamic arrays that automatically update when source data changes.</li>
                    </ul>

                    <div class="code-block">
                        =XLOOKUP(E2,EmployeeList[Name],<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EmployeeList[Department],<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Employee Not Found")
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 4: Lab 1 - Advanced Formula Builder -->
        <div class="slide">
            <h1>🔬 Lab 1: Advanced Formula Builder</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Master VLOOKUP by constructing a formula to retrieve employee department information
            </p>
            
            <div class="interactive-demo">
                <h3>📋 Scenario: Employee Database Lookup</h3>
                <p>Your HR database contains employee names, salaries, and department IDs. You need to create a VLOOKUP formula to find <strong>"Sarah"</strong> and return her <strong>Department ID</strong> from column 3.</p>
                
                <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; margin: 20px 0;">
                    <h4>📊 Sample Data Structure:</h4>
                    <table style="width: 100%; border-collapse: collapse; font-size: 14px; margin: 10px 0;">
                        <tr style="background: var(--module-primary); color: white;">
                            <th style="padding: 8px; border: 1px solid #ddd;">A: Name</th>
                            <th style="padding: 8px; border: 1px solid #ddd;">B: Salary</th>
                            <th style="padding: 8px; border: 1px solid #ddd;">C: Dept ID</th>
                        </tr>
                        <tr><td style="padding: 6px; border: 1px solid #ddd;">John</td><td style="padding: 6px; border: 1px solid #ddd;">$75,000</td><td style="padding: 6px; border: 1px solid #ddd;">IT-001</td></tr>
                        <tr style="background: #f8f9fa;"><td style="padding: 6px; border: 1px solid #ddd;">Sarah</td><td style="padding: 6px; border: 1px solid #ddd;">$68,000</td><td style="padding: 6px; border: 1px solid #ddd;">HR-002</td></tr>
                        <tr><td style="padding: 6px; border: 1px solid #ddd;">Mike</td><td style="padding: 6px; border: 1px solid #ddd;">$82,000</td><td style="padding: 6px; border: 1px solid #ddd;">FN-003</td></tr>
                    </table>
                </div>
                
                <div style="background: white; border: 3px solid var(--module-primary); border-radius: 15px; padding: 30px;">
                    <h4>🏗️ Build Your VLOOKUP Formula:</h4>
                    <div style="display: grid; grid-template-columns: auto auto auto auto auto auto auto; gap: 10px; align-items: center; margin: 20px 0; padding: 20px; background: #f3f2f1; border-radius: 10px; font-family: monospace; font-size: 16px;">
                        <span style="color: var(--formula-bg); font-weight: bold;">=VLOOKUP(</span>
                        <select id="lookup-value" style="padding: 8px; border: 2px solid #ddd; border-radius: 5px; font-family: monospace;">
                            <option value="">Select Lookup Value...</option>
                            <option value="wrong">"Dept ID"</option>
                            <option value="correct">"Sarah"</option>
                            <option value="wrong">A2:C10</option>
                        </select>
                        <span>,</span>
                        <select id="table-array" style="padding: 8px; border: 2px solid #ddd; border-radius: 5px; font-family: monospace;">
                            <option value="">Select Table Array...</option>
                            <option value="wrong">A1</option>
                            <option value="correct">A2:C10</option>
                            <option value="wrong">"Sarah"</option>
                        </select>
                        <span>,</span>
                        <select id="col-index" style="padding: 8px; border: 2px solid #ddd; border-radius: 5px; font-family: monospace;">
                            <option value="">Select Column Index...</option>
                            <option value="wrong">1</option>
                            <option value="wrong">2</option>
                            <option value="correct">3</option>
                        </select>
                        <span>,</span>
                        <select id="range-lookup" style="padding: 8px; border: 2px solid #ddd; border-radius: 5px; font-family: monospace;">
                            <option value="">Select Range Lookup...</option>
                            <option value="wrong">TRUE (Approx)</option>
                            <option value="correct">FALSE (Exact)</option>
                        </select>
                        <span style="color: var(--formula-bg); font-weight: bold;">)</span>
                    </div>
                    
                    <button class="action-btn" onclick="checkFormula()" style="width: auto; padding: 15px 30px; font-size: 16px;">
                        🚀 Execute Formula
                    </button>
                    <div id="formula-result" class="simulation-result"></div>
                </div>
            </div>

            <!-- Advanced Challenge -->
            <div class="highlight-box" style="margin-top: 40px;">
                <h4>🎯 Advanced Challenge: SUMIFS Function</h4>
                <p>Build a formula to sum sales where Region="North" AND Sales > $10,000:</p>
                <div style="display: grid; grid-template-columns: auto auto auto auto auto auto auto auto auto; gap: 10px; align-items: center; margin: 15px 0; font-family: monospace; font-size: 14px;">
                    <span>=SUMIFS(</span>
                    <select id="sum-range" style="padding: 5px;">
                        <option value="">Sum Range</option>
                        <option value="correct">D:D (Sales Amount)</option>
                        <option value="wrong">B:B (Region)</option>
                    </select>
                    <span>,</span>
                    <select id="criteria1" style="padding: 5px;">
                        <option value="">Criteria Range 1</option>
                        <option value="correct">B:B, "North"</option>
                        <option value="wrong">D:D, ">10000"</option>
                    </select>
                    <span>,</span>
                    <select id="criteria2" style="padding: 5px;">
                        <option value="">Criteria Range 2</option>
                        <option value="wrong">B:B, "North"</option>
                        <option value="correct">D:D, ">10000"</option>
                    </select>
                    <span>)</span>
                </div>
                <button class="action-btn" onclick="checkAdvancedFormula()" style="width: auto;">Test SUMIFS</button>
                <div id="advanced-formula-result" class="simulation-result"></div>
            </div>
        </div>

        <!-- Slide 5: Chart Integration Mastery -->
        <div class="slide">
            <h1>📊 Chart Integration & Visualization Mastery</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 40px;">
                Transform raw data into compelling visual stories that drive business decisions
            </p>
            
            <div class="two-column">
                <div>
                    <h2>🎨 Chart Selection Strategy</h2>
                    <ul>
                        <li><strong>Column/Bar Charts:</strong> Compare categories, market segments, or departmental performance with clear visual hierarchy.</li>
                        <li><strong>Line Charts:</strong> Track trends over time - stock prices, sales growth, website traffic, temperature changes.</li>
                        <li><strong>Pie/Doughnut Charts:</strong> Show proportional relationships - market share, budget allocation, survey responses.</li>
                        <li><strong>Scatter Plots:</strong> Reveal correlations between variables - advertising spend vs. sales, education vs. income.</li>
                        <li><strong>Combo Charts:</strong> Display related but different data types - sales revenue (columns) + units sold (line).</li>
                    </ul>
                </div>
                <div>
                    <h2>✨ Professional Chart Enhancement</h2>
                    <ul>
                        <li><strong>Chart Elements:</strong> Strategic use of titles, subtitles, axis labels, and legends for clarity and context.</li>
                        <li><strong>Trendlines:</strong> Add linear, exponential, or moving average lines to forecast future performance.</li>
                        <li><strong>Secondary Axis:</strong> Display dual-scale data (currency + percentages) on a single, readable chart.</li>
                        <li><strong>Data Labels:</strong> Highlight key values without cluttering the visualization.</li>
                        <li><strong>Color Strategy:</strong> Use consistent brand colors and accessibility-friendly palettes.</li>
                    </ul>
                </div>
            </div>

            <div class="warning-box" style="margin: 30px 0;">
                <h4>⚠️ Chart Selection Pitfalls to Avoid:</h4>
                <div style="margin-top: 15px;">
                    <strong>❌ Don't use pie charts for:</strong> More than 7 categories, negative values, or time series data<br>
                    <strong>❌ Avoid 3D effects:</strong> They distort data perception and reduce readability<br>
                    <strong>❌ Skip unnecessary animation:</strong> Focus on data clarity over visual effects<br>
                    <strong>✅ Always include:</strong> Descriptive titles, axis labels, and data source references
                </div>
            </div>
        </div>

        <!-- Slide 6: Lab 2 - Dynamic Chart Architect -->
        <div class="slide">
            <h1>🔬 Lab 2: Dynamic Chart Architect</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Choose the optimal chart type for different business scenarios and master chart enhancement techniques
            </p>
            
            <div class="chart-workspace">
                <div class="chart-controls">
                    <h3>📈 Business Scenario</h3>
                    <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 2px solid var(--module-accent);">
                        <strong>Challenge:</strong> You need to visualize <strong>"Monthly Revenue Growth"</strong> over the past 12 months to identify seasonal trends and growth patterns for the board presentation.
                    </div>
                    
                    <div style="margin-bottom: 30px;">
                        <h4>📊 Available Data:</h4>
                        <div style="font-size: 13px; line-height: 1.6;">
                            Jan: $245K, Feb: $278K, Mar: $189K<br>
                            Apr: $356K, May: $298K, Jun: $445K<br>
                            Jul: $378K, Aug: $423K, Sep: $356K<br>
                            Oct: $467K, Nov: $512K, Dec: $489K
                        </div>
                    </div>
                    
                    <button class="action-btn" onclick="updateChart('column')">📊 Column Chart</button>
                    <button class="action-btn" onclick="updateChart('line')">📈 Line Chart</button>
                    <button class="action-btn" onclick="updateChart('pie')">🥧 Pie Chart</button>
                    
                    <div id="chart-feedback" style="margin-top: 20px; padding: 15px; border-radius: 8px; display: none;"></div>
                </div>
                
                <div class="chart-preview-area" id="chart-display">
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #999; text-align: center;">
                        <div style="font-size: 48px; margin-bottom: 15px;">📊</div>
                        <div style="font-size: 18px;">Select a chart type to see the visualization</div>
                    </div>
                </div>
            </div>

            <!-- Chart Enhancement Challenge -->
            <div class="highlight-box" style="margin-top: 40px;">
                <h4>🎨 Chart Enhancement Challenge</h4>
                <p>Select the essential elements for a professional business chart:</p>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 20px 0;">
                    <div>
                        <label style="display: flex; align-items: center; margin: 10px 0; cursor: pointer;">
                            <input type="checkbox" id="chart-title" style="margin-right: 10px; transform: scale(1.2);">
                            <span>Descriptive Chart Title</span>
                        </label>
                        <label style="display: flex; align-items: center; margin: 10px 0; cursor: pointer;">
                            <input type="checkbox" id="chart-legend" style="margin-right: 10px; transform: scale(1.2);">
                            <span>Legend for Data Series</span>
                        </label>
                    </div>
                    <div>
                        <label style="display: flex; align-items: center; margin: 10px 0; cursor: pointer;">
                            <input type="checkbox" id="chart-axes" style="margin-right: 10px; transform: scale(1.2);">
                            <span>Labeled X & Y Axes</span>
                        </label>
                        <label style="display: flex; align-items: center; margin: 10px 0; cursor: pointer;">
                            <input type="checkbox" id="chart-trendline" style="margin-right: 10px; transform: scale(1.2);">
                            <span>Trendline for Forecasting</span>
                        </label>
                    </div>
                </div>
                <button class="action-btn" onclick="checkChartElements()" style="width: auto;">Apply Elements</button>
                <div id="chart-elements-result" class="simulation-result"></div>
            </div>
        </div>

        <!-- Slide 7: Pivot Tables Deep Dive -->
        <div class="slide">
            <h1>🎯 Pivot Tables: Advanced Data Analysis Engine</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 40px;">
                Transform thousands of rows into actionable insights with Excel's most powerful analysis tool
            </p>
            
            <div class="two-column">
                <div>
                    <h2>🏗️ Pivot Table Architecture</h2>
                    <ul>
                        <li><strong>Source Data Requirements:</strong> Clean data with headers, no blank rows, consistent data types in each column.</li>
                        <li><strong>Filter Area:</strong> Control which records are included in your analysis - date ranges, regions, product categories.</li>
                        <li><strong>Row/Column Areas:</strong> Define grouping and categorization - organize by region, product, time period.</li>
                        <li><strong>Values Area:</strong> Specify calculations - Sum, Average, Count, Min, Max, Standard Deviation.</li>
                        <li><strong>Refresh Strategy:</strong> Manual refresh vs. automatic updates when source data changes.</li>
                    </ul>
                </div>
                <div>
                    <h2>🚀 Advanced Pivot Techniques</h2>
                    <ul>
                        <li><strong>Calculated Fields:</strong> Create custom calculations like Profit Margin = (Revenue - Costs) / Revenue * 100.</li>
                        <li><strong>Grouping:</strong> Automatically group dates by month/quarter/year, or create custom ranges for numerical data.</li>
                        <li><strong>Slicers & Timelines:</strong> Visual filtering controls for interactive dashboards and user-friendly reports.</li>
                        <li><strong>Multiple Value Fields:</strong> Display Sum of Sales, Average Order Value, and Count of Transactions simultaneously.</li>
                        <li><strong>Pivot Charts:</strong> Linked visualizations that update automatically when pivot table structure changes.</li>
                    </ul>
                </div>
            </div>

            <div class="highlight-box" style="margin: 30px 0;">
                <h3>💡 Business Impact of Pivot Tables</h3>
                <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-top: 20px;">
                    <div style="text-align: center; padding: 20px; background: white; border-radius: 10px; border: 2px solid var(--module-accent);">
                        <div style="font-size: 2.5em; color: var(--module-primary);">⚡</div>
                        <strong>Speed</strong><br>
                        <small>Hours to minutes: 50,000 transactions → executive summary in 5 clicks</small>
                    </div>
                    <div style="text-align: center; padding: 20px; background: white; border-radius: 10px; border: 2px solid var(--module-accent);">
                        <div style="font-size: 2.5em; color: var(--module-primary);">🔍</div>
                        <strong>Insight</strong><br>
                        <small>Discover hidden patterns: seasonal trends, top performers, profit margins</small>
                    </div>
                    <div style="text-align: center; padding: 20px; background: white; border-radius: 10px; border: 2px solid var(--module-accent);">
                        <div style="font-size: 2.5em; color: var(--module-primary);">📊</div>
                        <strong>Flexibility</strong><br>
                        <small>Drag & drop to change perspective: by region, by product, by time</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 8: Lab 3 - Advanced Pivot Table Builder -->
        <div class="slide">
            <h1>🔬 Lab 3: Advanced Pivot Table Builder</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Master pivot table construction by creating a comprehensive sales analysis report
            </p>
            
            <div class="pivot-builder">
                <div class="field-list" id="field-list">
                    <h4>📋 Available Data Fields</h4>
                    <p style="font-size: 13px; margin-bottom: 15px; color: #666;">Drag fields to appropriate areas to build your report</p>
                    <div class="field-item" draggable="true" id="field-date">📅 Transaction Date</div>
                    <div class="field-item" draggable="true" id="field-region">🌍 Sales Region</div>
                    <div class="field-item" draggable="true" id="field-product">📦 Product Category</div>
                    <div class="field-item" draggable="true" id="field-sales">💰 Sales Amount</div>
                    <div class="field-item" draggable="true" id="field-salesperson">👤 Sales Representative</div>
                    <div class="field-item" draggable="true" id="field-quantity">📊 Quantity Sold</div>
                </div>
                
                <div class="drop-zones">
                    <div class="drop-zone" id="zone-filter">
                        <div class="drop-zone-title">🔍 Filters</div>
                        <small>Control which data is included</small>
                    </div>
                    <div class="drop-zone" id="zone-columns">
                        <div class="drop-zone-title">📐 Columns</div>
                        <small>Categories across the top</small>
                    </div>
                    <div class="drop-zone" id="zone-rows">
                        <div class="drop-zone-title">📋 Rows</div>
                        <small>Categories down the side</small>
                    </div>
                    <div class="drop-zone" id="zone-values">
                        <div class="drop-zone-title">🧮 Values (Σ)</div>
                        <small>Numbers to calculate</small>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin: 30px 0;">
                <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; margin-bottom: 20px; border: 2px solid var(--module-primary);">
                    <h4>🎯 Goal: Create "Total Sales by Region" Report</h4>
                    <p style="margin: 10px 0;">Build a pivot table that shows total sales revenue for each geographic region, with the ability to filter by date range.</p>
                </div>
                <button class="action-btn" onclick="checkPivot()" style="width: 250px; font-size: 16px;">🔍 Validate Pivot Table</button>
            </div>
            <div id="pivot-result" class="simulation-result"></div>
        </div>

        <!-- Slide 9: Lab 4 - Conditional Formatting -->
        <div class="slide">
            <h1>🔬 Lab 4: Conditional Formatting Mastery</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Transform static data into dynamic, color-coded insights that highlight patterns at a glance
            </p>
            
            <div class="interactive-demo">
                <h3>🎯 Scenario: Sales Performance Dashboard</h3>
                <p>You have monthly sales performance scores for your team. Apply conditional formatting to quickly identify top performers (green), average performers (yellow), and those needing support (red).</p>
                
                <div style="background: white; border: 2px solid var(--module-primary); border-radius: 10px; padding: 20px; margin: 20px 0;">
                    <h4>📊 Sales Performance Scores</h4>
                    <div style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 10px; margin: 20px 0;">
                        <div style="text-align: center; font-weight: bold; padding: 10px; background: var(--module-primary); color: white; border-radius: 5px;">Rep</div>
                        <div style="text-align: center; font-weight: bold; padding: 10px; background: var(--module-primary); color: white; border-radius: 5px;">Score</div>
                        <div style="text-align: center; font-weight: bold; padding: 10px; background: var(--module-primary); color: white; border-radius: 5px;">Rep</div>
                        <div style="text-align: center; font-weight: bold; padding: 10px; background: var(--module-primary); color: white; border-radius: 5px;">Score</div>
                        <div style="text-align: center; font-weight: bold; padding: 10px; background: var(--module-primary); color: white; border-radius: 5px;">Rep</div>
                        <div style="text-align: center; font-weight: bold; padding: 10px; background: var(--module-primary); color: white; border-radius: 5px;">Score</div>
                        <div style="text-align: center; font-weight: bold; padding: 10px; background: var(--module-primary); color: white; border-radius: 5px;">Avg</div>
                        
                        <div style="text-align: center; padding: 10px; border: 1px solid #ddd;">John</div>
                        <div class="cf-cell" style="text-align: center; padding: 10px; border: 2px solid #ddd; background: white; border-radius: 5px; font-weight: bold;">85</div>
                        <div style="text-align: center; padding: 10px; border: 1px solid #ddd;">Sarah</div>
                        <div class="cf-cell" style="text-align: center; padding: 10px; border: 2px solid #ddd; background: white; border-radius: 5px; font-weight: bold;">92</div>
                        <div style="text-align: center; padding: 10px; border: 1px solid #ddd;">Mike</div>
                        <div class="cf-cell" style="text-align: center; padding: 10px; border: 2px solid #ddd; background: white; border-radius: 5px; font-weight: bold;">78</div>
                        <div class="cf-cell" style="text-align: center; padding: 10px; border: 2px solid #ddd; background: white; border-radius: 5px; font-weight: bold;">87.4</div>
                        
                        <div style="text-align: center; padding: 10px; border: 1px solid #ddd;">Lisa</div>
                        <div class="cf-cell" style="text-align: center; padding: 10px; border: 2px solid #ddd; background: white; border-radius: 5px; font-weight: bold;">95</div>
                        <div style="text-align: center; padding: 10px; border: 1px solid #ddd;">Alex</div>
                        <div class="cf-cell" style="text-align: center; padding: 10px; border: 2px solid #ddd; background: white; border-radius: 5px; font-weight: bold;">88</div>
                        <div style="text-align: center; padding: 10px; border: 1px solid #ddd;">Emma</div>
                        <div class="cf-cell" style="text-align: center; padding: 10px; border: 2px solid #ddd; background: white; border-radius: 5px; font-weight: bold;">76</div>
                        <div style="color: #666; text-align: center; padding: 10px; border: 1px solid #ddd;">Team</div>
                        
                        <div style="grid-column: 1 / -1; text-align: center; padding: 10px; background: #f8f9fa; border-radius: 5px; margin-top: 10px;">
                            <small><strong>Goal:</strong> Apply color scales to visualize performance distribution (70-95 range)</small>
                        </div>
                    </div>
                    
                    <div style="margin: 30px 0;">
                        <h4>🎨 Conditional Formatting Options:</h4>
                        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px;">
                            <button class="action-btn" onclick="applyConditionalFormatting('highlight')" style="font-size: 14px;">🔦 Highlight Cells Rules</button>
                            <button class="action-btn" onclick="applyConditionalFormatting('correct')" style="font-size: 14px;">🌈 Color Scales</button>
                            <button class="action-btn" onclick="applyConditionalFormatting('databars')" style="font-size: 14px;">📊 Data Bars</button>
                        </div>
                    </div>
                    <div id="conditional-result" class="simulation-result"></div>
                </div>
                
                <div class="tip-box">
                    <h4>💡 Advanced Conditional Formatting Tips:</h4>
                    <ul style="font-size: 14px; line-height: 1.6;">
                        <li><strong>Custom Formulas:</strong> Use =MOD(ROW(),2)=0 to alternate row colors</li>
                        <li><strong>Icon Sets:</strong> Traffic lights, arrows, stars for quick visual assessment</li>
                        <li><strong>Top/Bottom Rules:</strong> Automatically highlight top 10%, bottom 5 values</li>
                        <li><strong>Duplicate Values:</strong> Find and highlight duplicate entries in large datasets</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Slide 10: Lab 5 - Macro Automation Basics -->
        <div class="slide">
            <h1>🔬 Lab 5: Macro Automation Basics</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Automate repetitive tasks with recorded macros and basic VBA programming concepts
            </p>
            
            <div class="interactive-demo">
                <h3>🤖 Scenario: Monthly Report Formatting Automation</h3>
                <p>Every month, you receive raw sales data that requires the same formatting: bold headers, borders, and auto-fit columns. Let's create a macro to automate this 15-step process into a single click.</p>
                
                <div style="background: white; border: 2px solid var(--module-primary); border-radius: 10px; padding: 25px; margin: 20px 0;">
                    <h4>🎬 Record Your Macro</h4>
                    <div style="display: grid; grid-template-columns: 1fr auto; gap: 20px; align-items: center; margin: 20px 0;">
                        <div>
                            <label for="macro-name" style="display: block; font-weight: bold; margin-bottom: 8px;">📝 Macro Name:</label>
                            <input type="text" id="macro-name" placeholder="e.g., FormatMonthlyReport" 
                                   style="width: 100%; padding: 10px; border: 2px solid #ddd; border-radius: 5px; font-family: monospace;">
                        </div>
                        <button class="action-btn" onclick="recordMacro()" style="width: 180px; height: 60px;">
                            🔴 Start Recording
                        </button>
                    </div>
                    
                    <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin: 20px 0;">
                        <h5>🔧 Actions to Record:</h5>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; font-size: 14px;">
                            <div>
                                ✅ Select header row (A1:E1)<br>
                                ✅ Apply bold formatting<br>
                                ✅ Add background color<br>
                                ✅ Apply borders to data range
                            </div>
                            <div>
                                ✅ Auto-fit all columns<br>
                                ✅ Format numbers as currency<br>
                                ✅ Center align headers<br>
                                ✅ Add freeze panes
                            </div>
                        </div>
                    </div>
                    
                    <div id="macro-result" class="simulation-result"></div>
                </div>
                
                <div class="highlight-box">
                    <h4>⚡ Macro Power & Safety</h4>
                    <div class="two-column" style="gap: 30px;">
                        <div>
                            <h5>🚀 Benefits:</h5>
                            <ul style="font-size: 14px;">
                                <li>Eliminate 95% of repetitive formatting time</li>
                                <li>Ensure consistent report appearance</li>
                                <li>Reduce human errors in formatting</li>
                                <li>Enable one-click report generation</li>
                            </ul>
                        </div>
                        <div>
                            <h5>⚠️ Security & Best Practices:</h5>
                            <ul style="font-size: 14px;">
                                <li>Only enable macros from trusted sources</li>
                                <li>Test macros on sample data first</li>
                                <li>Create backups before running macros</li>
                                <li>Document macro functionality for team use</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 11: Lab 6 - Dashboard Builder -->
        <div class="slide">
            <h1>🔬 Lab 6: Interactive Dashboard Builder</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Create a professional executive dashboard combining KPIs, charts, and interactive controls
            </p>
            
            <div class="interactive-demo">
                <h3>🎛️ Executive Sales Dashboard Creation</h3>
                <p>Build a comprehensive dashboard that combines key performance indicators, trend analysis, and interactive filtering for executive decision-making.</p>
                
                <div style="background: white; border: 2px solid var(--module-primary); border-radius: 10px; padding: 25px; margin: 20px 0;">
                    <div class="two-column" style="gap: 30px; margin-bottom: 30px;">
                        <div>
                            <h4>🧩 Available Dashboard Components</h4>
                            <button class="action-btn" onclick="addDashboardWidget('kpi')" style="margin: 5px 0;">📊 KPI Card</button>
                            <button class="action-btn" onclick="addDashboardWidget('chart')" style="margin: 5px 0;">📈 Sales Chart</button>
                            <button class="action-btn" onclick="addDashboardWidget('table')" style="margin: 5px 0;">📋 Top Products Table</button>
                            <div style="font-size: 13px; color: #666; margin-top: 15px;">
                                💡 Drag widgets around to arrange your dashboard layout
                            </div>
                        </div>
                        <div>
                            <h4>🎯 Dashboard Requirements</h4>
                            <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; font-size: 14px;">
                                <strong>Must Include:</strong><br>
                                ✅ At least one KPI card<br>
                                ✅ One trend visualization<br>
                                ✅ One data table<br>
                                <br>
                                <strong>Best Practices:</strong><br>
                                • Keep it scannable (5-second rule)<br>
                                • Use consistent color scheme<br>
                                • Show progress vs. targets
                            </div>
                        </div>
                    </div>
                    
                    <div style="background: #f8f9fa; border: 2px dashed #ddd; border-radius: 10px; min-height: 300px; padding: 20px; position: relative;" id="dashboard-canvas">
                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #999; text-align: center;">
                            <div style="font-size: 48px; margin-bottom: 15px;">📊</div>
                            <div>Drag dashboard components here to build your layout</div>
                        </div>
                    </div>
                    
                    <div id="dashboard-result" class="simulation-result"></div>
                </div>
                
                <div class="tip-box">
                    <h4>💡 Advanced Dashboard Features</h4>
                    <div style="font-size: 14px; line-height: 1.6;">
                        <strong>🔄 Real-time Updates:</strong> Link to external data sources for live dashboards<br>
                        <strong>🎛️ Interactive Controls:</strong> Slicers, drop-down menus, and radio buttons<br>
                        <strong>📱 Mobile Optimization:</strong> Design for tablet and smartphone viewing<br>
                        <strong>🔗 Drill-down Capability:</strong> Click charts to see detailed breakdowns
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 12: Data Protection & Advanced Features -->
        <div class="slide">
            <h1>🛡️ Data Protection & Advanced Excel Features</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 40px;">
                Secure your spreadsheets and leverage powerful Excel features for enterprise-level functionality
            </p>
            
            <div class="two-column">
                <div>
                    <h2>🔒 Data Validation & Security</h2>
                    <ul>
                        <li><strong>Input Validation:</strong> Create dropdown lists, set date ranges, and restrict numerical inputs to prevent data entry errors.</li>
                        <li><strong>Custom Validation Messages:</strong> Guide users with helpful input prompts and error messages.</li>
                        <li><strong>Data Type Controls:</strong> Ensure email addresses follow proper format, phone numbers have correct digits.</li>
                        <li><strong>Business Rules:</strong> Prevent future dates in birthdate fields, ensure positive values in quantity columns.</li>
                    </ul>

                    <div class="code-block">
                        Custom Formula Validation:<br>
                        =AND(ISNUMBER(A1), A1>0, A1<=1000)<br>
                        <small>Ensures numeric values between 1-1000</small>
                    </div>
                </div>
                <div>
                    <h2>🔐 Workbook Protection Strategy</h2>
                    <ul>
                        <li><strong>Sheet Protection:</strong> Lock formulas while allowing data entry in designated input cells only.</li>
                        <li><strong>Workbook Structure Protection:</strong> Prevent users from adding, deleting, renaming, or hiding worksheets.</li>
                        <li><strong>File-Level Encryption:</strong> Password-protect entire workbooks for sensitive financial or personal data.</li>
                        <li><strong>Digital Signatures:</strong> Verify document authenticity and detect unauthorized changes.</li>
                    </ul>

                    <div class="warning-box" style="margin-top: 20px;">
                        <strong>🚨 Security Best Practices:</strong><br>
                        • Use strong passwords (12+ characters)<br>
                        • Regularly backup protected files<br>
                        • Document password policies<br>
                        • Test protection levels before deployment
                    </div>
                </div>
            </div>

            <div class="highlight-box" style="margin: 30px 0;">
                <h3>🔬 Advanced Excel Features for Power Users</h3>
                <div class="three-column" style="gap: 25px;">
                    <div style="background: white; padding: 20px; border-radius: 10px; border: 2px solid var(--module-accent);">
                        <h4 style="color: var(--module-primary);">📈 What-If Analysis</h4>
                        <ul style="font-size: 14px;">
                            <li><strong>Goal Seek:</strong> Find input values to achieve target results</li>
                            <li><strong>Data Tables:</strong> Test multiple scenarios simultaneously</li>
                            <li><strong>Scenario Manager:</strong> Compare best/worst/most likely cases</li>
                        </ul>
                    </div>
                    <div style="background: white; padding: 20px; border-radius: 10px; border: 2px solid var(--module-accent);">
                        <h4 style="color: var(--module-primary);">🔗 Power Query</h4>
                        <ul style="font-size: 14px;">
                            <li><strong>Data Connections:</strong> Import from databases, web, cloud services</li>
                            <li><strong>Data Transformation:</strong> Clean, reshape, and combine data sources</li>
                            <li><strong>Automated Refresh:</strong> Update reports with fresh data automatically</li>
                        </ul>
                    </div>
                    <div style="background: white; padding: 20px; border-radius: 10px; border: 2px solid var(--module-accent);">
                        <h4 style="color: var(--module-primary);">🤖 Dynamic Arrays</h4>
                        <ul style="font-size: 14px;">
                            <li><strong>FILTER Function:</strong> Extract records meeting criteria</li>
                            <li><strong>SORT & UNIQUE:</strong> Organize and deduplicate data automatically</li>
                            <li><strong>Spill Ranges:</strong> Formulas that expand to fit results</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 13: Progress Tracking -->
        <div class="slide">
            <h1>📈 Learning Progress & Lab Completion</h1>
            
            <div style="text-align: center; margin-bottom: 40px;">
                <h2 style="color: var(--module-primary);">🎯 Your Excel Mastery Journey</h2>
                <div style="background: white; border: 2px solid var(--module-primary); border-radius: 15px; padding: 30px; max-width: 600px; margin: 0 auto;">
                    <div class="progress-bar" style="height: 12px; margin-bottom: 20px;">
                        <div class="lab-progress-fill progress-fill" style="width: 0%;"></div>
                    </div>
                    <div class="lab-progress-text" style="font-size: 18px; font-weight: bold; color: var(--module-primary);">
                        Labs Completed: 0/6
                    </div>
                </div>
            </div>

            <div class="two-column">
                <div>
                    <h3>📚 Completed Learning Modules</h3>
                    <div style="background: white; border-radius: 10px; padding: 20px; border: 1px solid #ddd;">
                        <div style="margin-bottom: 15px; padding: 15px; background: #f8f9fa; border-radius: 8px;">
                            ✅ <strong>GUI Enhancement Fundamentals</strong><br>
                            <small>Workspace customization, navigation shortcuts, efficiency optimization</small>
                        </div>
                        <div style="margin-bottom: 15px; padding: 15px; background: #f8f9fa; border-radius: 8px;">
                            ✅ <strong>Advanced Formula Architecture</strong><br>
                            <small>Complex logic functions, lookup formulas, error handling</small>
                        </div>
                        <div style="margin-bottom: 15px; padding: 15px; background: #f8f9fa; border-radius: 8px;">
                            ✅ <strong>Chart Integration Mastery</strong><br>
                            <small>Visualization strategy, chart types, professional enhancement</small>
                        </div>
                        <div style="margin-bottom: 15px; padding: 15px; background: #f8f9fa; border-radius: 8px;">
                            ✅ <strong>Pivot Table Deep Dive</strong><br>
                            <small>Data analysis, grouping, calculated fields, interactive filtering</small>
                        </div>
                    </div>
                </div>
                <div>
                    <h3>🔬 Lab Completion Status</h3>
                    <div style="background: white; border-radius: 10px; padding: 20px; border: 1px solid #ddd;">
                        <div id="lab1-status" style="margin-bottom: 15px; padding: 15px; background: #fff3cd; border-radius: 8px; border-left: 4px solid #f39c12;">
                            ⏳ <strong>Lab 1: Advanced Formula Builder</strong><br>
                            <small>Status: Pending completion</small>
                        </div>
                        <div id="lab2-status" style="margin-bottom: 15px; padding: 15px; background: #fff3cd; border-radius: 8px; border-left: 4px solid #f39c12;">
                            ⏳ <strong>Lab 2: Dynamic Chart Architect</strong><br>
                            <small>Status: Pending completion</small>
                        </div>
                        <div id="lab3-status" style="margin-bottom: 15px; padding: 15px; background: #fff3cd; border-radius: 8px; border-left: 4px solid #f39c12;">
                            ⏳ <strong>Lab 3: Advanced Pivot Table Builder</strong><br>
                            <small>Status: Pending completion</small>
                        </div>
                        <div id="lab4-status" style="margin-bottom: 15px; padding: 15px; background: #fff3cd; border-radius: 8px; border-left: 4px solid #f39c12;">
                            ⏳ <strong>Lab 4: Conditional Formatting</strong><br>
                            <small>Status: Pending completion</small>
                        </div>
                        <div id="lab5-status" style="margin-bottom: 15px; padding: 15px; background: #fff3cd; border-radius: 8px; border-left: 4px solid #f39c12;">
                            ⏳ <strong>Lab 5: Macro Automation Basics</strong><br>
                            <small>Status: Pending completion</small>
                        </div>
                        <div id="lab6-status" style="margin-bottom: 15px; padding: 15px; background: #fff3cd; border-radius: 8px; border-left: 4px solid #f39c12;">
                            ⏳ <strong>Lab 6: Dashboard Builder</strong><br>
                            <small>Status: Pending completion</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="highlight-box" style="margin-top: 40px; text-align: center;">
                <h3>🚀 Ready for the Final Assessment?</h3>
                <p>Complete all 6 hands-on labs to unlock the comprehensive 20-question assessment. Achieve 70% or higher to pass!</p>
            </div>
        </div>

        <!-- Slide 14-33: Comprehensive 20-Question Assessment -->
        <div class="slide">
            <h1>📋 Comprehensive Assessment: Advanced Excel Mastery</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Demonstrate your advanced Excel skills with this comprehensive 20-question assessment
            </p>
            
            <div class="quiz-container">
                <!-- Questions 1-5 -->
                <div class="question" id="q1">
                    <h4>1. Which function would you use to find a specific value in a table based on a unique identifier?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">SUMIF</li>
                        <li data-answer="correct">VLOOKUP / XLOOKUP</li>
                        <li data-answer="wrong">COUNTIF</li>
                        <li data-answer="wrong">INDEX</li>
                    </ul>
                </div>

                <div class="question" id="q2">
                    <h4>2. Which chart type is best for showing trends over time?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Pie Chart</li>
                        <li data-answer="correct">Line Chart</li>
                        <li data-answer="wrong">Scatter Plot</li>
                        <li data-answer="wrong">Histogram</li>
                    </ul>
                </div>

                <div class="question" id="q3">
                    <h4>3. In a Pivot Table, where should you place numerical data you want to calculate?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Filters Area</li>
                        <li data-answer="wrong">Rows Area</li>
                        <li data-answer="correct">Values Area</li>
                        <li data-answer="wrong">Columns Area</li>
                    </ul>
                </div>

                <div class="question" id="q4">
                    <h4>4. What does the F4 key do in Excel?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Save file</li>
                        <li data-answer="correct">Repeat last action / Toggle cell references</li>
                        <li data-answer="wrong">Open Find dialog</li>
                        <li data-answer="wrong">Insert function</li>
                    </ul>
                </div>

                <div class="question" id="q5">
                    <h4>5. Which function combines multiple criteria for conditional calculations?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">SUMIF</li>
                        <li data-answer="correct">SUMIFS</li>
                        <li data-answer="wrong">SUM</li>
                        <li data-answer="wrong">COUNTIF</li>
                    </ul>
                </div>

                <!-- Questions 6-10 -->
                <div class="question" id="q6">
                    <h4>6. What is the primary purpose of Data Validation?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Format cells</li>
                        <li data-answer="correct">Restrict input to specific values</li>
                        <li data-answer="wrong">Create charts</li>
                        <li data-answer="wrong">Calculate formulas</li>
                    </ul>
                </div>

                <div class="question" id="q7">
                    <h4>7. Which feature would you use to automatically format cells based on their values?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Cell Styles</li>
                        <li data-answer="correct">Conditional Formatting</li>
                        <li data-answer="wrong">Themes</li>
                        <li data-answer="wrong">Format Painter</li>
                    </ul>
                </div>

                <div class="question" id="q8">
                    <h4>8. What is a Macro in Excel?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">A large spreadsheet</li>
                        <li data-answer="correct">An automated sequence of actions</li>
                        <li data-answer="wrong">A type of chart</li>
                        <li data-answer="wrong">A formula function</li>
                    </ul>
                </div>

                <div class="question" id="q9">
                    <h4>9. Which tool is best for creating an interactive business dashboard?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Basic charts</li>
                        <li data-answer="correct">Slicers and Pivot Tables</li>
                        <li data-answer="wrong">Simple formulas</li>
                        <li data-answer="wrong">Text boxes</li>
                    </ul>
                </div>

                <div class="question" id="q10">
                    <h4>10. What does CTRL+T create in Excel?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">New workbook</li>
                        <li data-answer="correct">Table from selected data</li>
                        <li data-answer="wrong">Text box</li>
                        <li data-answer="wrong">Template</li>
                    </ul>
                </div>

                <!-- Questions 11-15 -->
                <div class="question" id="q11">
                    <h4>11. Which function would replace nested IF statements?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">SWITCH</li>
                        <li data-answer="wrong">IFS</li>
                        <li data-answer="wrong">CHOOSE</li>
                        <li data-answer="correct">All of the above</li>
                    </ul>
                </div>

                <div class="question" id="q12">
                    <h4>12. What is the difference between relative and absolute cell references?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">No difference</li>
                        <li data-answer="correct">Relative changes when copied, absolute stays fixed</li>
                        <li data-answer="wrong">Absolute changes, relative stays fixed</li>
                        <li data-answer="wrong">Both change when copied</li>
                    </ul>
                </div>

                <div class="question" id="q13">
                    <h4>13. Which chart element helps predict future trends?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Legend</li>
                        <li data-answer="correct">Trendline</li>
                        <li data-answer="wrong">Data labels</li>
                        <li data-answer="wrong">Gridlines</li>
                    </ul>
                </div>

                <div class="question" id="q14">
                    <h4>14. What is the main advantage of using Tables over regular ranges?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">They look better</li>
                        <li data-answer="correct">Automatic expansion and structured references</li>
                        <li data-answer="wrong">They print better</li>
                        <li data-answer="wrong">No advantages</li>
                    </ul>
                </div>

                <div class="question" id="q15">
                    <h4>15. Which protection feature prevents users from editing formulas while allowing data entry?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Protect Workbook</li>
                        <li data-answer="correct">Protect Sheet with unlocked input cells</li>
                        <li data-answer="wrong">File encryption</li>
                        <li data-answer="wrong">Read-only mode</li>
                    </ul>
                </div>

                <!-- Questions 16-20 -->
                <div class="question" id="q16">
                    <h4>16. What does the XLOOKUP function offer over VLOOKUP?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Same functionality</li>
                        <li data-answer="correct">Bi-directional search and better error handling</li>
                        <li data-answer="wrong">Only works with numbers</li>
                        <li data-answer="wrong">Slower performance</li>
                    </ul>
                </div>

                <div class="question" id="q17">
                    <h4>17. Which keyboard shortcut inserts the current date?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">CTRL+D</li>
                        <li data-answer="correct">CTRL+;</li>
                        <li data-answer="wrong">CTRL+T</li>
                        <li data-answer="wrong">CTRL+SHIFT+;</li>
                    </ul>
                </div>

                <div class="question" id="q18">
                    <h4>18. What is the purpose of the Watch Window in Excel?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">View videos</li>
                        <li data-answer="correct">Monitor specific cells while working elsewhere</li>
                        <li data-answer="wrong">Watch for errors</li>
                        <li data-answer="wrong">Time tracking</li>
                    </ul>
                </div>

                <div class="question" id="q19">
                    <h4>19. Which feature would you use to analyze different scenarios?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Goal Seek</li>
                        <li data-answer="wrong">Scenario Manager</li>
                        <li data-answer="wrong">Data Table</li>
                        <li data-answer="correct">All of the above</li>
                    </ul>
                </div>

                <div class="question" id="q20">
                    <h4>20. What is the maximum number of rows in modern Excel?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">65,536</li>
                        <li data-answer="correct">1,048,576</li>
                        <li data-answer="wrong">1,000,000</li>
                        <li data-answer="wrong">Unlimited</li>
                    </ul>
                </div>

                <div style="text-align: center; margin-top: 40px;">
                    <button class="action-btn" onclick="submitQuiz()" style="width: 300px; font-size: 18px; padding: 15px 30px;">
                        🚀 Submit Assessment
                    </button>
                </div>
                <div id="quiz-feedback" class="simulation-result"></div>
            </div>
        </div>

        <!-- Slide 34: Resources & Next Steps -->
        <div class="slide">
            <h1>📚 Resources & Advanced Learning Path</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 40px;">
                Continue your Excel journey with curated resources and advanced learning opportunities
            </p>
            
            <div class="two-column">
                <div>
                    <div class="highlight-box" style="background: white; border: 2px solid var(--module-primary);">
                        <h3>📖 Recommended Learning Resources</h3>
                        <ul style="font-size: 15px; line-height: 1.8;">
                            <li><strong>Microsoft Excel Help & Learning:</strong><br>
                                <small>support.microsoft.com - Official documentation and tutorials</small></li>
                            <li><strong>ExcelJet.net:</strong><br>
                                <small>Advanced formulas, tips, and real-world examples</small></li>
                            <li><strong>Chandoo.org:</strong><br>
                                <small>Dashboard design, VBA programming, business intelligence</small></li>
                            <li><strong>Excel Campus (Jon Acampora):</strong><br>
                                <small>Power Query, Power Pivot, automation techniques</small></li>
                            <li><strong>Microsoft Power BI Learning:</strong><br>
                                <small>Next-level data analysis and visualization</small></li>
                        </ul>
                    </div>

                    <div class="tip-box" style="margin-top: 25px;">
                        <h4>🎯 Recommended Next Steps</h4>
                        <ol style="font-size: 14px; line-height: 1.6;">
                            <li>Practice with real-world datasets from your work</li>
                            <li>Explore Power Query for data transformation</li>
                            <li>Learn VBA for advanced automation</li>
                            <li>Consider Power BI for enterprise reporting</li>
                            <li>Join Excel user communities and forums</li>
                        </ol>
                    </div>
                </div>
                <div>
                    <div class="highlight-box" style="background: white; border: 2px solid var(--module-accent);">
                        <h3>⌨️ Essential Keyboard Shortcuts</h3>
                        <div style="font-family: monospace; font-size: 14px; line-height: 2;">
                            <strong>Navigation & Selection:</strong><br>
                            <kbd>Ctrl + Arrow</kbd> Jump to data edges<br>
                            <kbd>Ctrl + Shift + Arrow</kbd> Select to edges<br>
                            <kbd>Ctrl + G</kbd> Go to cell/range<br>
                            <kbd>Ctrl + Home</kbd> Go to A1<br><br>
                            
                            <strong>Data & Formulas:</strong><br>
                            <kbd>Ctrl + T</kbd> Create Table<br>
                            <kbd>Alt + =</kbd> AutoSum<br>
                            <kbd>F4</kbd> Repeat action / Lock reference<br>
                            <kbd>Ctrl + ;</kbd> Insert current date<br>
                            <kbd>Ctrl + Shift + ;</kbd> Insert current time<br><br>
                            
                            <strong>Formatting:</strong><br>
                            <kbd>Ctrl + 1</kbd> Format Cells dialog<br>
                            <kbd>Ctrl + B/I/U</kbd> Bold/Italic/Underline<br>
                            <kbd>Ctrl + Shift + $</kbd> Currency format<br>
                            <kbd>Ctrl + Shift + %</kbd> Percentage format
                        </div>
                    </div>
                </div>
            </div>

            <div class="highlight-box" style="margin-top: 40px; background: linear-gradient(135deg, #e8f5e8 0%, #f0f8ff 100%); border: 3px solid var(--module-primary);">
                <div style="text-align: center;">
                    <h2 style="color: var(--module-primary); margin-bottom: 30px;">🎓 Congratulations on Completing Advanced Excel!</h2>
                    <div class="three-column" style="gap: 30px;">
                        <div style="text-align: center;">
                            <div style="font-size: 3em; margin-bottom: 15px;">🏆</div>
                            <h4>Skills Mastered</h4>
                            <p style="font-size: 14px;">Advanced formulas, pivot tables, charts, dashboards, automation</p>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 3em; margin-bottom: 15px;">🚀</div>
                            <h4>Career Ready</h4>
                            <p style="font-size: 14px;">Data analysis, business intelligence, process automation</p>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 3em; margin-bottom: 15px;">📈</div>
                            <h4>Next Level</h4>
                            <p style="font-size: 14px;">Power BI, VBA programming, enterprise solutions</p>
                        </div>
                    </div>
                    
                    <div style="margin-top: 30px; padding: 20px; background: rgba(33, 115, 70, 0.1); border-radius: 10px;">
                        <strong style="font-size: 18px; color: var(--module-primary);">
                            You now possess advanced Excel skills that place you in the top 10% of Excel users worldwide!
                        </strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navigation">
        <button class="nav-btn" onclick="window.location.href='home.php'">🏠 Home</button>
        <button class="nav-btn" id="prevBtn" onclick="changeSlide(-1)">← Previous</button>
        <button class="nav-btn" id="nextBtn" onclick="changeSlide(1)">Next →</button>
        <button class="nav-btn" id="printBtn" onclick="window.print()" style="display:none; background-color: var(--module-secondary);">🖨️ Print</button>
    </div>

    <script src="js/advanced-microsoft-excel.js"></script>
</body>
</html>