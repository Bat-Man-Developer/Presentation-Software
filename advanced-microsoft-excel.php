<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1: Advanced Microsoft Excel — Specific Outcome 1 (Graphs &amp; Charts)</title>
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/advanced-microsoft-excel.css">
    <link rel="icon" type="image/x-icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>📊</text></svg>">
</head>
<body>
    <div class="presentation-container">
        <div class="slide-counter">
            <span id="currentSlide">1</span> / <span id="totalSlides">20</span>
        </div>

        <!-- Slide 1: Title & Objectives -->
        <div class="slide active">
            <div style="text-align: center; padding-top: 3vh;">
                <div style="font-size: 90px; margin-bottom: 20px; animation: bounceIn 1s ease;">📊</div>
                <h1 style="border: none; font-size: 3.4rem; margin-bottom: 15px;">Day 1: Advanced Microsoft Excel</h1>
                <h2 style="color: var(--text-secondary); font-size: 1.6rem; margin-bottom: 30px; padding-left: 0;">
                    Specific Outcome 1: Create and Edit a Graph (Unit Standard 116943)
                </h2>

                <img src="assets/images/advanced-microsoft-excel/1.png" alt="Excel Ribbon cover graphic showing the Switch Row/Column command and chart layout options" class="slide-image">

                <div class="highlight-box" style="display: inline-block; text-align: left; max-width: 900px;">
                    <h3 style="text-align: center; color: var(--module-primary); margin-bottom: 20px;">🎯 Specific Outcome 1 Assessment Criteria (AC 1–7)</h3>
                    <div class="three-column" style="gap: 20px;">
                        <div>
                            <h4>📚 Graph Types (AC 1–2)</h4>
                            <ul style="font-size: 14px;">
                                <li>Define major graph types &amp; purposes</li>
                                <li>Pie, Bar, Column, Line, Scatter, Area</li>
                                <li>Create charts from source data</li>
                            </ul>
                        </div>
                        <div>
                            <h4>🎨 Editing Charts (AC 3–4)</h4>
                            <ul style="font-size: 14px;">
                                <li>Edit titles, axes, labels &amp; colours</li>
                                <li>Switch Row/Column &amp; Layouts</li>
                                <li>Change chart types &amp; styles</li>
                            </ul>
                        </div>
                        <div>
                            <h4>📐 Managing Charts (AC 5–7)</h4>
                            <ul style="font-size: 14px;">
                                <li>Copy &amp; move charts across sheets</li>
                                <li>Resize charts accurately</li>
                                <li>Delete charts cleanly</li>
                            </ul>
                        </div>
                    </div>

                    <div style="text-align: center; margin-top: 20px; padding: 15px; background: rgba(33, 115, 70, 0.1); border-radius: 10px;">
                        <strong style="color: var(--module-primary); font-size: 16px;">📘 Unit Standard ID: 116943 | NQF Level: 4 | Credits: 3 | Notional Hours: 30</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2: Introduction to Graphs and Charts -->
        <div class="slide">
            <h1>📈 Introduction to Graphs and Charts</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Understanding what a graph is and how Excel transforms numerical spreadsheets into visual insights
            </p>

            <div class="two-column">
                <div>
                    <h2>🧠 What Is a Graph?</h2>
                    <ul>
                        <li><strong>Excel Capability:</strong> Microsoft Excel allows users to create and edit graphs directly from spreadsheet data.</li>
                        <li><strong>Graph Concept:</strong> In computer science and mathematics, a graph is an abstract data structure made of finite ordered pairs called <strong>edges</strong> (or arcs) connecting entities called <strong>nodes</strong> (or vertices).</li>
                        <li><strong>Edge Values:</strong> Each edge can associate a symbolic label or numeric attribute such as cost, capacity, or length.</li>
                        <li><strong>Outcome Range:</strong> In this unit standard, the term <em>graph</em> refers to all types of graphs and/or charts.</li>
                    </ul>
                </div>
                <div>
                    <h2>🎯 Why Use Charts in Excel?</h2>
                    <ul>
                        <li><strong>Visual Clarity:</strong> Charts allow an audience to immediately see the meaning behind raw spreadsheet numbers.</li>
                        <li><strong>Comparisons &amp; Trends:</strong> Visual graphics make spotting patterns, comparisons, and time-based trends much easier than reading tables alone.</li>
                        <li><strong>Five Core Graph Types in Lesson 1:</strong> Pie charts, Bar graphs, Line graphs, Scatter graphs, and Area graphs.</li>
                    </ul>

                    <img src="assets/images/advanced-microsoft-excel/2.png" alt="Visual comparison banner of the five Excel chart types: Pie, Bar/Column, Line, Scatter, and Area" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 3: Lesson 1 — Pie Charts -->
        <div class="slide">
            <h1>🥧 Lesson 1: Pie Charts</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Representing part-to-whole relationships with a minimum of visual cues
            </p>

            <div class="two-column">
                <div>
                    <h2>📐 How a Pie Chart Works</h2>
                    <ul>
                        <li><strong>Core Purpose:</strong> The circle (the "pie") represents a complete whole made up of slices; adding all slices equals 100% of the whole.</li>
                        <li><strong>Proportional Relationship:</strong> Enlarging one slice shrinks the others, highlighting each part's share of the total (e.g., profits across 5 company divisions).</li>
                        <li><strong>Meaningful Whole Rule:</strong> If parts do not sum up to a meaningful whole (such as 5 random occupations out of many), a pie chart must not be used.</li>
                    </ul>

                    <div class="warning-box">
                        <h4>✅ When to Use a Pie Chart (4 Criteria):</h4>
                        <div style="font-size: 14px; line-height: 1.7; margin-top: 8px;">
                            1. Do the parts make up a <strong>meaningful whole</strong>?<br>
                            2. Are the parts <strong>mutually exclusive</strong> (no overlap)?<br>
                            3. Is your goal to compare <strong>parts to the whole</strong> (not parts to each other)?<br>
                            4. Do you have <strong>5 to 7 slices or fewer</strong>? More slices become hard to read.
                        </div>
                    </div>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel/3.png" alt="Multi-slice pie chart with data values 585, 400, 850, 370, 120, 100, 130 and 92 and a legend" class="slide-image">
                    <div class="tip-box">
                        <strong>💡 Note:</strong> Pie charts have <strong>no axes</strong> (no x-axis or y-axis) because they display a single data series as proportions of a circle.
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 4: Lesson 1 — Bar & Column Graphs -->
        <div class="slide">
            <h1>📊 Lesson 1: Bar &amp; Column Graphs</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Comparing quantities across distinct categories using separated rectangular bars
            </p>

            <div class="two-column">
                <div>
                    <h2>📏 Purpose &amp; Characteristics</h2>
                    <ul>
                        <li><strong>Category Comparisons:</strong> Bar graphs are ideal when comparing quantities across different categories.</li>
                        <li><strong>Distinct Separation:</strong> Spaces between the bars clearly distinguish one category from another.</li>
                        <li><strong>Flexible Values:</strong> Bar heights (or lengths) can represent frequencies, sums, averages, or percentages.</li>
                        <li><strong>Column vs. Bar Orientation:</strong> Column charts plot categories along the horizontal x-axis and values on the vertical y-axis; Bar charts reverse this, plotting values along the x-axis.</li>
                    </ul>

                    <div class="highlight-box">
                        <h4>🌧️ Learner Guide Example: Rainfall</h4>
                        <p style="font-size: 15px;">The bar heights compare daily rainfall amounts in centimeters from <strong>7/2/02 to 7/6/02</strong>, making peak rainfall on 7/5/02 (1.1 cm) and zero rainfall on 7/4/02 immediately obvious.</p>
                    </div>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel/4.png" alt="Bar graph of rain in centimeters with vertical bars for dates 7/2/02 to 7/6/02 and a y-axis from 0 to 1.2 cm" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 5: Lesson 1 — Line Graphs -->
        <div class="slide">
            <h1>📈 Lesson 1: Line Graphs</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Tracking continuous change across two numerical aspects, typically over time
            </p>

            <div class="two-column">
                <div>
                    <h2>🧭 Axes &amp; Structure</h2>
                    <ul>
                        <li><strong>X-Axis (Independent Axis):</strong> Horizontal axis whose values do not depend on anything else (e.g., time in days, weeks, quarters, years, or test numbers).</li>
                        <li><strong>Y-Axis (Dependent Axis):</strong> Vertical axis whose values depend on the x-axis (e.g., company money in Rands/Dollars or SAT score at a specific point).</li>
                        <li><strong>Origin Point:</strong> Positive-value line charts intersect at <strong>(0, 0)</strong> near the bottom-left corner.</li>
                        <li><strong>Dot-to-Dot Progression:</strong> Each x-value has only one y-value; plotted points connect horizontally in a dot-to-dot fashion.</li>
                    </ul>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel/5.png" alt="Line graph of scores on 12 successive Math SATs with test number on the x-axis and score from 0 to 800 on the y-axis" class="slide-image">
                    <div class="tip-box">
                        <strong>💡 Practical Example:</strong> Plotting Week 1 against R10,000 shows financial progression cleanly over time.
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 6: Lesson 1 — Scatter Graphs -->
        <div class="slide">
            <h1>🔵 Lesson 1: Scatter Graphs</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Examining correlation and cause-and-effect relationships between two numerical variables
            </p>

            <div class="two-column">
                <div>
                    <h2>🔬 Understanding Correlation</h2>
                    <ul>
                        <li><strong>Core Purpose:</strong> Scatter plots show how much one variable is affected by another using horizontal and vertical axes for large datasets.</li>
                        <li><strong>Strength of Relationship:</strong> The closer the plotted points come to forming a straight line, the stronger the <strong>correlation</strong> between the two variables.</li>
                        <li><strong>Positive Correlation:</strong> Points trend upward from the origin toward high x- and y-values.</li>
                        <li><strong>Negative Correlation:</strong> Points trend downward from a high y-value toward a high x-value.</li>
                    </ul>

                    <div class="highlight-box">
                        <h4>🎯 When to Use Scatter Graphs</h4>
                        <ul style="font-size: 14px; margin-top: 10px;">
                            <li>Examine theories about <strong>cause-and-effect</strong> relationships and find root causes of problems.</li>
                            <li>Design a <strong>control system</strong> to ensure quality improvement gains are maintained.</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel/6.png" alt="Scatter diagram of weight versus length with plotted data points and a trendline, length from 160 to 190 and weight from 50 to 110" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 7: Lesson 1 — Area Graphs -->
        <div class="slide">
            <h1>⛰️ Lesson 1: Area Graphs</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Combining Line Graphs and Stacked Bar Graphs to visualize cumulative totals over time
            </p>

            <div class="two-column">
                <div>
                    <h2>📚 How Area Graphs Work</h2>
                    <ul>
                        <li><strong>Hybrid Design:</strong> Area graphs colour the area underneath each plotted line and stack those segments on top of each other.</li>
                        <li><strong>Cumulative Totals:</strong> The total height of the coloured area at any category point equals the sum of all data items in that category.</li>
                        <li><strong>Series Stacking:</strong> Each data series corresponds to a coloured segment; the first series forms the top area segment.</li>
                    </ul>

                    <div class="spreadsheet-container">
                        <div class="formula-bar">
                            <span class="formula-label">ƒx</span>
                            <input type="text" class="formula-input" value="Market Penetration Data: Brand A + Brand B + Brand C" readonly>
                        </div>
                        <div class="sheet-grid" style="grid-template-columns: 60px repeat(4, 1fr);">
                            <div class="grid-header"></div>
                            <div class="grid-header">Brand</div>
                            <div class="grid-header">1999</div>
                            <div class="grid-header">2000</div>
                            <div class="grid-header">2001</div>

                            <div class="grid-header">1</div>
                            <div class="grid-cell"><strong>Brand A</strong></div>
                            <div class="grid-cell">10</div>
                            <div class="grid-cell">20</div>
                            <div class="grid-cell formula-result">40</div>

                            <div class="grid-header">2</div>
                            <div class="grid-cell"><strong>Brand B</strong></div>
                            <div class="grid-cell">15</div>
                            <div class="grid-cell">10</div>
                            <div class="grid-cell formula-result">14</div>

                            <div class="grid-header">3</div>
                            <div class="grid-cell"><strong>Brand C</strong></div>
                            <div class="grid-cell">30</div>
                            <div class="grid-cell">17</div>
                            <div class="grid-cell formula-result">16</div>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel/7.png" alt="Stacked area graph of market penetration showing Brand A in red, Brand B in green and Brand C in blue from 1999 to 2001" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 8: Lab 1 (Activity 1) — Graph Type Selector -->
        <div class="slide">
            <h1>🔬 Lab 1 (Activity 1): Graph Type &amp; Purpose Matcher</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 25px;">
                Reinforce Specific Outcome 1 (AC 1): Match each business scenario to the right graph type and preview it live
            </p>

            <div class="interactive-demo">
                <h3>📋 Activity 1 Challenge: Choose the Best Graph Type</h3>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 20px 0;">
                    <div style="background: #f8f9fa; padding: 15px; border-radius: 10px; border: 1px solid #ddd;">
                        <label for="match-pie" style="display:block; font-weight:bold; margin-bottom:8px;">1. Show each of 5 company divisions' percentage share of total company profit:</label>
                        <select id="match-pie" class="lab-select">
                            <option value="">-- Select Graph Type --</option>
                            <option value="pie">Pie Chart</option>
                            <option value="line">Line Graph</option>
                            <option value="scatter">Scatter Graph</option>
                            <option value="bar">Bar Graph</option>
                            <option value="area">Area Graph</option>
                        </select>
                    </div>
                    <div style="background: #f8f9fa; padding: 15px; border-radius: 10px; border: 1px solid #ddd;">
                        <label for="match-line" style="display:block; font-weight:bold; margin-bottom:8px;">2. Track a student's Math SAT scores across 12 successive tests:</label>
                        <select id="match-line" class="lab-select">
                            <option value="">-- Select Graph Type --</option>
                            <option value="pie">Pie Chart</option>
                            <option value="line">Line Graph</option>
                            <option value="scatter">Scatter Graph</option>
                            <option value="bar">Bar Graph</option>
                            <option value="area">Area Graph</option>
                        </select>
                    </div>
                    <div style="background: #f8f9fa; padding: 15px; border-radius: 10px; border: 1px solid #ddd;">
                        <label for="match-scatter" style="display:block; font-weight:bold; margin-bottom:8px;">3. Test correlation between product length and weight to find root causes:</label>
                        <select id="match-scatter" class="lab-select">
                            <option value="">-- Select Graph Type --</option>
                            <option value="pie">Pie Chart</option>
                            <option value="line">Line Graph</option>
                            <option value="scatter">Scatter Graph</option>
                            <option value="bar">Bar Graph</option>
                            <option value="area">Area Graph</option>
                        </select>
                    </div>
                    <div style="background: #f8f9fa; padding: 15px; border-radius: 10px; border: 1px solid #ddd;">
                        <label for="match-area" style="display:block; font-weight:bold; margin-bottom:8px;">4. Display cumulative Market Penetration of Brands A, B, and C from 1999–2001:</label>
                        <select id="match-area" class="lab-select">
                            <option value="">-- Select Graph Type --</option>
                            <option value="pie">Pie Chart</option>
                            <option value="line">Line Graph</option>
                            <option value="scatter">Scatter Graph</option>
                            <option value="bar">Bar Graph</option>
                            <option value="area">Area Graph</option>
                        </select>
                    </div>
                </div>
                <button class="action-btn" onclick="checkGraphMatcher()" style="width: 280px;">✅ Validate Activity 1 Answers</button>
                <div id="graph-matcher-result" class="simulation-result"></div>
            </div>

            <div class="chart-workspace" style="min-height: 280px; margin-top: 25px;">
                <div class="chart-controls">
                    <h3>🎨 Live Preview</h3>
                    <button class="action-btn" onclick="updateChart('column')">📊 Bar / Column</button>
                    <button class="action-btn" onclick="updateChart('line')">📈 Line Chart</button>
                    <button class="action-btn" onclick="updateChart('pie')">🥧 Pie Chart</button>
                    <div id="chart-feedback" style="margin-top: 12px; padding: 10px; border-radius: 8px; display: none; font-size: 13px;"></div>
                </div>
                <div class="chart-preview-area" id="chart-display" style="min-height: 240px;">
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #999; text-align: center;">
                        <div style="font-size: 40px; margin-bottom: 10px;">📊</div>
                        <div>Click a chart button to preview its visual structure</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 9: Lesson 2 — Identifying the Parts of a Chart (Part 1) -->
        <div class="slide">
            <h1>🧩 Lesson 2: Identifying the Parts of a Chart (Part 1)</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Mastering official Excel chart terminology so you can select and format any element accurately
            </p>

            <div class="two-column">
                <div>
                    <h2>🔍 Core Chart Anatomy</h2>
                    <ul>
                        <li><strong>Chart Area:</strong> Everything inside the chart window, including all labels, axes, data markers, tick marks, and other elements.</li>
                        <li><strong>Data Marker:</strong> A single symbol representing one worksheet value (a bar, a pie slice, or a point on a line). Markers sharing a pattern/colour form a series.</li>
                        <li><strong>Data Series:</strong> A group of related values, such as all values in a single row or column plotted on the chart.</li>
                        <li><strong>Axis:</strong> Reference lines for plotting data—x-axis (horizontal/category) and y-axis (vertical/value). 3-D charts add a vertical z-axis for depth.</li>
                    </ul>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel/8.png" alt="Labeled Excel quarterly CD sales chart calling out chart area, chart title, data series, gridlines, axis titles and legend" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 10: Lesson 2 — Identifying the Parts of a Chart (Part 2) -->
        <div class="slide">
            <h1>🏷️ Lesson 2: Identifying the Parts of a Chart (Part 2)</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Plot areas, gridlines, tick marks, attached vs. unattached text, and legends
            </p>

            <div class="two-column">
                <div>
                    <h2>📌 Supporting Visual Elements</h2>
                    <ul>
                        <li><strong>Tick Mark:</strong> A small line intersecting an axis to indicate a category, scale, or data series (often with a label attached).</li>
                        <li><strong>Plot Area:</strong> The bounded area where Excel plots your actual data, including the axes and all data markers.</li>
                        <li><strong>Gridlines:</strong> Optional horizontal or vertical lines extending from tick marks across the plot area to make values easier to read.</li>
                        <li><strong>Legend:</strong> A key identifying the colours, patterns, or symbols associated with each data series name.</li>
                    </ul>
                </div>
                <div>
                    <h2>📝 Chart Text Types</h2>
                    <div class="highlight-box">
                        <h4>🔗 Attached Text</h4>
                        <p style="font-size: 15px;">Titles or labels linked directly to a chart element—such as the <strong>Chart Title</strong>, <strong>Vertical Axis Title</strong>, and <strong>Horizontal Axis Title</strong>. You cannot move them independently outside the chart.</p>
                    </div>
                    <div class="tip-box">
                        <h4>📦 Unattached Text</h4>
                        <p style="font-size: 15px;">Free-floating annotations added using the <strong>Text Box</strong> command button on the Insert tab of the Ribbon.</p>
                    </div>
                    <img src="assets/images/advanced-microsoft-excel/9.png" alt="Close-up diagram highlighting the plot area boundaries, tick marks and legend keys of an Excel chart" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 11: Creating a Column Chart Step-by-Step -->
        <div class="slide">
            <h1>🏗️ Creating a Column Chart Step-by-Step</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 25px;">
                Specific Outcome 1 (AC 2): Generating an embedded chart directly from worksheet source data
            </p>

            <div class="two-column">
                <div>
                    <h2>🔢 5-Step Creation Procedure</h2>
                    <ol class="step-list">
                        <li><strong>Select Source Data:</strong> Highlight the cells you want to chart, <em>including column titles (2006–2010) and row labels (Genre)</em>.</li>
                        <li><strong>Open Insert Tab:</strong> Click the <strong>Insert</strong> tab on the Excel Ribbon.</li>
                        <li><strong>Choose Category:</strong> In the <strong>Charts</strong> group, click the desired chart category (e.g., <strong>Column</strong>).</li>
                        <li><strong>Choose Subtype:</strong> Select the specific chart type from the drop-down menu (e.g., <strong>2-D Clustered Column</strong>).</li>
                        <li><strong>Verify Output:</strong> By default, the new chart appears embedded on the same worksheet as your source data.</li>
                    </ol>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel/10.png" alt="Selected genre sales table A1:F6 showing Young Adult, Classics, Mystery, Romance and Sci-Fi &amp; Fantasy across 2006 to 2010" class="slide-image">
                    <img src="assets/images/advanced-microsoft-excel/11.png" alt="Insert tab Charts group with the Column drop-down open and the 2-D Clustered Column tooltip visible" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 12: Creating a Pie Chart Step-by-Step -->
        <div class="slide">
            <h1>🥧 Creating a Pie Chart Step-by-Step</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 25px;">
                Plotting proportional salesperson order totals using Pie, Pie of Pie, or Bar of Pie charts
            </p>

            <div class="two-column">
                <div>
                    <h2>📋 Source Data &amp; Steps</h2>
                    <ol class="step-list">
                        <li><strong>Select Data:</strong> Highlight the two-column range (e.g., <em>Salesperson</em> in Column A and <em>Order Amount</em> in Column B).</li>
                        <li><strong>Insert Pie Chart:</strong> On the <strong>Insert</strong> tab, in the <strong>Charts</strong> group, click <strong>Pie</strong> and select a subtype (e.g., 2-D Pie, Pie of Pie, or Bar of Pie).</li>
                        <li><strong>All Chart Types:</strong> Click the dialog launcher arrow in the Charts group to open the full <strong>Insert Chart</strong> dialog box.</li>
                        <li><strong>Preview &amp; Finalize:</strong> Review the slice percentages and legend (e.g., Dodsworth, Suyama, Davolio, Fuller, Peacock).</li>
                    </ol>

                    <div class="tip-box">
                        <strong>💡 Best Practice:</strong> Display percentage data labels on pie slices so readers do not have to guess slice sizes from the legend alone.
                    </div>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel/12.png" alt="Salesperson order amount table A1:B9 listing Dodsworth at $2,190.50 through Buchanan at $240.00" class="slide-image">
                    <img src="assets/images/advanced-microsoft-excel/13.png" alt="Completed sales by salesperson pie chart with percentage labels and a salesperson legend" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 13: Chart Tools & Changing the Chart Type -->
        <div class="slide">
            <h1>🛠️ Chart Tools &amp; Changing the Chart Type</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 25px;">
                Specific Outcome 1 (AC 4): Navigating contextual Chart Tools tabs to switch chart types instantly
            </p>

            <div class="two-column">
                <div>
                    <h2>🎛️ The Contextual Chart Tools Ribbon</h2>
                    <ul>
                        <li><strong>Contextual Visibility:</strong> The <strong>Chart Tools</strong> tabs only appear on the Ribbon when a chart is actively selected.</li>
                        <li><strong>Design Tab:</strong> Change chart type, switch row/column data, apply Chart Layouts, Chart Styles, and Move Chart.</li>
                        <li><strong>Layout Tab:</strong> Insert pictures/shapes/text boxes, edit titles, legends, data labels, axes, gridlines, and 3-D chart backgrounds.</li>
                        <li><strong>Format Tab:</strong> Select specific chart elements, format selection, apply shape styles, and set exact height/width sizes.</li>
                    </ul>

                    <div class="highlight-box">
                        <h4>🔄 To Change the Chart Type:</h4>
                        <p style="font-size: 14px; margin-top: 8px;">1. Select your chart → Click the <strong>Design</strong> tab.<br>2. Click <strong>Change Chart Type</strong> in the Type group.<br>3. Select the desired category &amp; subtype (e.g., Line with Markers) and click <strong>OK</strong>.</p>
                    </div>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel/14.png" alt="Excel Ribbon with the green Chart Tools header highlighting the Design, Layout and Format contextual tabs" class="slide-image">
                    <img src="assets/images/advanced-microsoft-excel/15.png" alt="Change Chart Type dialog box listing Templates, Column, Line, Pie, Bar, Area and X Y (Scatter) options" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 14: Switching Row/Column Data & Changing Chart Layout -->
        <div class="slide">
            <h1>🔀 Switch Row/Column &amp; Chart Layouts</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 25px;">
                Reorganizing how your chart groups data and applying instant professional layouts
            </p>

            <div class="two-column">
                <div>
                    <h2>🔄 Switch Row and Column Data</h2>
                    <ul>
                        <li><strong>Same Data, New Perspective:</strong> Swaps data plotted on the x-axis with data plotted on the y-axis/legend.</li>
                        <li><strong>Book Sales Example:</strong> Switch a clustered column chart from grouping by <em>Fiction/Non-Fiction</em> (with a bar per year) to grouping by <em>Year 2006–2010</em> (with bars for Fiction and Non-Fiction).</li>
                        <li><strong>Steps:</strong> Select the chart → <strong>Design</strong> tab → Click <strong>Switch Row/Column</strong> in the Data group.</li>
                    </ul>

                    <img src="assets/images/advanced-microsoft-excel/16.png" alt="Book sales chart before and after Switch Row/Column, comparing Fiction/Non-Fiction grouping with 2006 to 2010 yearly grouping" class="slide-image">
                </div>
                <div>
                    <h2>📐 Changing the Chart Layout</h2>
                    <ol class="step-list">
                        <li>Select the chart and open the <strong>Design</strong> tab.</li>
                        <li>Click the <strong>More</strong> drop-down arrow in the <strong>Chart Layouts</strong> group.</li>
                        <li>Select a preset layout (e.g., <strong>Layout 2</strong> to show data value labels directly above bars and move the legend to the top).</li>
                        <li>Click directly into any generated title, axis, or legend placeholder to edit its text.</li>
                    </ol>

                    <img src="assets/images/advanced-microsoft-excel/17.png" alt="Chart Layouts drop-down gallery and the Book Sales chart showing dollar data labels after applying Layout 2" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 15: Editing Axis Scales & Chart Titles -->
        <div class="slide">
            <h1>📏 Editing Vertical Axis Scale &amp; Chart Titles</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 25px;">
                Specific Outcome 1 (AC 3): Customizing numerical scales and editing chart title text
            </p>

            <div class="two-column">
                <div>
                    <h2>🎚️ Changing Vertical (Value) Axis Scale</h2>
                    <ol class="step-list">
                        <li>Click the chart → Open the <strong>Format</strong> tab.</li>
                        <li>In the <strong>Current Selection</strong> group, open the Chart Elements drop-down and choose <strong>Vertical (Value) Axis</strong>.</li>
                        <li>Click <strong>Format Selection</strong> to open the <strong>Format Axis</strong> dialog box.</li>
                        <li>Under <strong>Axis Options</strong>, click <strong>Fixed</strong> to customize:
                            <br>• <strong>Minimum / Maximum</strong> start and end values
                            <br>• <strong>Major unit / Minor unit</strong> tick mark &amp; gridline intervals
                            <br>• <strong>Values in reverse order</strong> checkbox if needed.
                        </li>
                    </ol>
                </div>
                <div>
                    <h2>✏️ How to Change the Chart Title</h2>
                    <ul>
                        <li><strong>Select Title:</strong> Click directly on the Chart Title box until sizing circles appear around it.</li>
                        <li><strong>Highlight &amp; Retype:</strong> Click inside the text, drag to highlight "Chart Title", and type your new title (e.g., <em>"Viewing Figures"</em>).</li>
                        <li><strong>Format Font:</strong> While highlighted, use the <strong>Home</strong> tab to adjust font family, size, colour, or bold styling.</li>
                    </ul>

                    <img src="assets/images/advanced-microsoft-excel/18.png" alt="Current Selection group with the Format Selection panel and a chart title changed from Chart Title to Viewing Figures" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 16: Chart Background, 3-D View & Enhancing Charts -->
        <div class="slide">
            <h1>🎨 Chart Backgrounds, 3-D View &amp; Enhancements</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 25px;">
                Formatting chart walls/floors and adding visual annotations like shapes, pictures, and text boxes
            </p>

            <div class="two-column">
                <div>
                    <h2>🧊 Changing the Chart Background &amp; 3-D View</h2>
                    <ul>
                        <li><strong>Layout Tab → Background Group:</strong> Select your chart, open the <strong>Layout</strong> tab, and adjust:</li>
                        <li><strong>Plot Area:</strong> Show or hide the plot area background fill.</li>
                        <li><strong>Chart Wall &amp; Chart Floor:</strong> Format the back wall or bottom floor of a 3-D chart with colours or gradients.</li>
                        <li><strong>3-D Rotation:</strong> Rotate a 3-D chart along the x-, y-, or z-axis and adjust perspective in the Format Chart Area dialog.</li>
                    </ul>

                    <img src="assets/images/advanced-microsoft-excel/19.png" alt="Cost Center 3-D chart labeling the plot area, chart wall and chart floor next to the 3-D Rotation dialog" class="slide-image">
                </div>
                <div>
                    <h2>✨ Inserting Pictures, Shapes &amp; Text Boxes</h2>
                    <ol class="step-list">
                        <li>Select the chart and click the <strong>Layout</strong> tab under Chart Tools.</li>
                        <li>In the <strong>Insert</strong> group, choose:
                            <br>• <strong>Picture:</strong> Insert an image file into the chart.
                            <br>• <strong>Shapes:</strong> Draw callouts or arrows (e.g., an arrow pointing to high costs).
                            <br>• <strong>Text Box:</strong> Add annotations (e.g., <em>"Need to Reduce"</em>).
                        </li>
                        <li>Use the <strong>Drawing Tools → Format</strong> tab to style the annotation, or right-click → <strong>Edit Text</strong> to modify it.</li>
                    </ol>

                    <img src="assets/images/advanced-microsoft-excel/20.png" alt="Enhanced chart with a Need to Reduce text box and an arrow shape pointing to the Cost Center bars" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 17: Chart Styles, Moving, Resizing & Deleting Charts -->
        <div class="slide">
            <h1>📦 Chart Styles, Moving, Resizing &amp; Deleting</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 25px;">
                Specific Outcome 1 (AC 3, 5, 6 &amp; 7): Styling and managing chart placement and lifecycle
            </p>

            <div class="two-column">
                <div>
                    <h2>🎨 Apply Chart Styles &amp; Move Charts</h2>
                    <ul>
                        <li><strong>Chart Styles:</strong> On the <strong>Design</strong> tab, click the <strong>More</strong> arrow in Chart Styles and pick a preset (e.g., <em>Style 31</em>).</li>
                        <li><strong>Move Within Worksheet:</strong> Click a blank area inside the chart and drag its outline to a new position, then release.</li>
                        <li><strong>Move to Another Worksheet:</strong> Click <strong>Design</strong> → <strong>Move Chart</strong>. Choose <strong>New sheet</strong> (dedicated chart sheet) or <strong>Object in</strong> (an existing worksheet like Sheet2), then click <strong>OK</strong>.</li>
                        <li><strong>Copy to Another File:</strong> Select chart → Copy (<code>Ctrl+C</code>) → Open target workbook → Paste (<code>Ctrl+V</code>).</li>
                    </ul>
                </div>
                <div>
                    <h2>↔️ Resize &amp; 🗑️ Delete a Chart</h2>
                    <ul>
                        <li><strong>Resize by Dragging:</strong> Select the chart, hover over any corner/edge sizing handle, and drag to the desired dimensions.</li>
                        <li><strong>Exact Sizing:</strong> On the <strong>Format</strong> tab, in the <strong>Size</strong> group, type exact measurements into <strong>Shape Height</strong> and <strong>Shape Width</strong>.</li>
                        <li><strong>Deleting a Graph:</strong> Click the chart border/object once to select it, then press the <strong>Delete</strong> key on your keyboard.</li>
                    </ul>

                    <img src="assets/images/advanced-microsoft-excel/21.png" alt="Move Chart dialog with New sheet and Object in options beside the Format tab Size group showing Shape Height and Shape Width" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 18: Lab 2 (Activity 2) — Interactive Chart Editing & Management -->
        <div class="slide">
            <h1>🔬 Lab 2 (Activity 2): Chart Editing &amp; Management Simulator</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 25px;">
                Practice the exact tasks required in Learner Guide Activity 2 (AC 2–7)
            </p>

            <div class="interactive-demo">
                <h3>🎯 Scenario: Company Sales Workbook Challenge</h3>
                <p>Configure the exact Excel Ribbon commands needed to complete every requirement of Activity 2:</p>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin: 20px 0;">
                    <div style="background: #f8f9fa; padding: 15px; border-radius: 10px; border: 1px solid #ddd;">
                        <label for="act2-type" style="display:block; font-weight:bold; margin-bottom:8px;">1. Change the Bar Chart into a Column Chart:</label>
                        <select id="act2-type" class="lab-select">
                            <option value="">-- Choose Ribbon Path --</option>
                            <option value="wrong">Home Tab → Format as Table</option>
                            <option value="correct">Design Tab → Change Chart Type</option>
                            <option value="wrong">Data Tab → Text to Columns</option>
                        </select>
                    </div>
                    <div style="background: #f8f9fa; padding: 15px; border-radius: 10px; border: 1px solid #ddd;">
                        <label for="act2-move" style="display:block; font-weight:bold; margin-bottom:8px;">2. Move the chart to a separate dedicated worksheet:</label>
                        <select id="act2-move" class="lab-select">
                            <option value="">-- Choose Ribbon Path --</option>
                            <option value="correct">Design Tab → Move Chart → New sheet</option>
                            <option value="wrong">Layout Tab → Plot Area</option>
                            <option value="wrong">View Tab → Freeze Panes</option>
                        </select>
                    </div>
                    <div style="background: #f8f9fa; padding: 15px; border-radius: 10px; border: 1px solid #ddd;">
                        <label for="act2-resize" style="display:block; font-weight:bold; margin-bottom:8px;">3. Resize the Column Chart to exact 3" x 5" dimensions:</label>
                        <select id="act2-resize" class="lab-select">
                            <option value="">-- Choose Ribbon Path --</option>
                            <option value="wrong">Insert Tab → Shapes</option>
                            <option value="wrong">Design Tab → Switch Row/Column</option>
                            <option value="correct">Format Tab → Size Group (Shape Height &amp; Width)</option>
                        </select>
                    </div>
                    <div style="background: #f8f9fa; padding: 15px; border-radius: 10px; border: 1px solid #ddd;">
                        <label for="act2-delete" style="display:block; font-weight:bold; margin-bottom:8px;">4. Delete the Line Chart from the worksheet:</label>
                        <select id="act2-delete" class="lab-select">
                            <option value="">-- Choose Action --</option>
                            <option value="wrong">Double-click a gridline and press Escape</option>
                            <option value="correct">Click the chart object to select it, then press Delete</option>
                            <option value="wrong">Right-click cell A1 and click Clear Contents</option>
                        </select>
                    </div>
                </div>

                <div style="margin: 15px 0;">
                    <h4>✅ Check the 4 Chart Elements Required by AC 3 (Select all 4):</h4>
                    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-top: 10px;">
                        <label style="cursor:pointer;"><input type="checkbox" id="el-title"> Graph Title</label>
                        <label style="cursor:pointer;"><input type="checkbox" id="el-axes"> Axis Titles</label>
                        <label style="cursor:pointer;"><input type="checkbox" id="el-labels"> Data Labels</label>
                        <label style="cursor:pointer;"><input type="checkbox" id="el-bg"> Background / Bar Colour</label>
                    </div>
                </div>

                <button class="action-btn" onclick="checkActivity2Lab()" style="width: 280px;">🚀 Verify Activity 2 Workflow</button>
                <div id="activity2-result" class="simulation-result"></div>
            </div>
        </div>

        <!-- Slide 19: Day 1 Assessment Quiz -->
        <div class="slide">
            <h1>📋 Day 1 Assessment: Specific Outcome 1 Quiz</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 25px;">
                Test your mastery of Unit Standard 116943 — Specific Outcome 1 (Create and Edit a Graph)
            </p>

            <div class="quiz-container">
                <div class="question" id="q1">
                    <h4>1. What is the maximum recommended number of slices for a Pie Chart to remain readable?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">2 to 3 slices</li>
                        <li data-answer="correct">5 to 7 slices</li>
                        <li data-answer="wrong">12 to 15 slices</li>
                        <li data-answer="wrong">Unlimited slices</li>
                    </ul>
                </div>

                <div class="question" id="q2">
                    <h4>2. In a Line Graph, what is the horizontal x-axis also called?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">The independent axis</li>
                        <li data-answer="wrong">The dependent axis</li>
                        <li data-answer="wrong">The z-axis</li>
                        <li data-answer="wrong">The legend axis</li>
                    </ul>
                </div>

                <div class="question" id="q3">
                    <h4>3. Which graph type is specifically designed to show the correlation between two variables?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Pie Chart</li>
                        <li data-answer="wrong">Bar Graph</li>
                        <li data-answer="correct">Scatter Graph</li>
                        <li data-answer="wrong">Column Chart</li>
                    </ul>
                </div>

                <div class="question" id="q4">
                    <h4>4. Which graph combines features of Line Graphs and Stacked Bar Graphs to show cumulative totals?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Scatter Graph</li>
                        <li data-answer="correct">Area Graph</li>
                        <li data-answer="wrong">Pie of Pie Chart</li>
                        <li data-answer="wrong">Clustered Column Chart</li>
                    </ul>
                </div>

                <div class="question" id="q5">
                    <h4>5. What is a "Data Marker" in an Excel chart?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">The entire chart window</li>
                        <li data-answer="correct">A symbol on the chart representing a single worksheet value</li>
                        <li data-answer="wrong">An optional horizontal line across the plot area</li>
                        <li data-answer="wrong">The key identifying colours of each series</li>
                    </ul>
                </div>

                <div class="question" id="q6">
                    <h4>6. Which chart type has NO axes?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Bar Chart</li>
                        <li data-answer="wrong">Line Chart</li>
                        <li data-answer="correct">Pie Chart</li>
                        <li data-answer="wrong">Area Chart</li>
                    </ul>
                </div>

                <div class="question" id="q7">
                    <h4>7. Which three contextual tabs appear under Chart Tools when a chart is selected?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Home, Insert, Data</li>
                        <li data-answer="correct">Design, Layout, Format</li>
                        <li data-answer="wrong">View, Review, Formulas</li>
                        <li data-answer="wrong">File, Page Layout, Design</li>
                    </ul>
                </div>

                <div class="question" id="q8">
                    <h4>8. Which command swaps data plotted on the x-axis with data plotted on the y-axis/legend?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">Switch Row/Column</li>
                        <li data-answer="wrong">Change Chart Type</li>
                        <li data-answer="wrong">Move Chart</li>
                        <li data-answer="wrong">Format Selection</li>
                    </ul>
                </div>

                <div class="question" id="q9">
                    <h4>9. Where do you set exact Shape Height and Shape Width values to resize a chart?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Insert tab → Illustrations group</li>
                        <li data-answer="wrong">Design tab → Chart Styles group</li>
                        <li data-answer="correct">Format tab → Size group</li>
                        <li data-answer="wrong">Data tab → Connections group</li>
                    </ul>
                </div>

                <div class="question" id="q10">
                    <h4>10. How do you delete an existing chart from an Excel worksheet?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Press Ctrl + Z twice</li>
                        <li data-answer="correct">Click the chart object to select it, then press Delete</li>
                        <li data-answer="wrong">Click the Insert tab and choose Clear Chart</li>
                        <li data-answer="wrong">Drag the chart off the screen</li>
                    </ul>
                </div>

                <div style="text-align: center; margin-top: 30px;">
                    <button class="action-btn" onclick="submitQuiz()" style="width: 280px; font-size: 18px;">🚀 Submit Day 1 Quiz</button>
                </div>
                <div id="quiz-feedback" class="simulation-result"></div>
            </div>
        </div>

        <!-- Slide 20: Day 1 Summary, Activity 2 Checklist & Next Steps -->
        <div class="slide">
            <h1>🎓 Day 1 Complete: Specific Outcome 1 Recap</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Review your practical workbook checklist before advancing to Day 2: External Data Sources
            </p>

            <div class="two-column">
                <div>
                    <div class="highlight-box" style="background: white; border: 2px solid var(--module-primary);">
                        <h3>📋 Learner Guide Activity 2 Practical Checklist</h3>
                        <p style="font-size: 14px; margin-bottom: 12px;">Open the <strong>Company Sales</strong> workbook (or sample workbook) and complete:</p>
                        <ul style="font-size: 14px;">
                            <li>Create a <strong>Bar</strong>, <strong>Pie</strong>, and <strong>Line</strong> chart from worksheet data.</li>
                            <li>Edit the <strong>Graph title</strong>, <strong>axis titles</strong>, <strong>data labels</strong>, and <strong>background colour</strong>.</li>
                            <li>Change the <strong>Bar chart</strong> into a <strong>Column chart</strong>.</li>
                            <li>Move the bar/column chart to a different worksheet &amp; the pie chart to a different file.</li>
                            <li><strong>Resize</strong> the column chart, <strong>delete</strong> the line chart, apply a <strong>chart style</strong>, move to a separate sheet, and <strong>Save</strong>.</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="highlight-box" style="background: white; border: 2px solid var(--module-accent);">
                        <h3>📈 Your Day 1 Lab Progress</h3>
                        <div class="progress-bar" style="height: 12px; margin: 15px 0;">
                            <div class="lab-progress-fill progress-fill" style="width: 0%;"></div>
                        </div>
                        <div class="lab-progress-text" style="font-weight: bold; color: var(--module-primary); margin-bottom: 15px;">
                            Labs Completed: 0/2
                        </div>
                        <div id="lab1-status" style="margin-bottom: 10px; padding: 12px; background: #fff3cd; border-radius: 8px; border-left: 4px solid #f39c12;">
                            ⏳ <strong>Lab 1:</strong> Graph Type &amp; Purpose Matcher
                        </div>
                        <div id="lab2-status" style="margin-bottom: 15px; padding: 12px; background: #fff3cd; border-radius: 8px; border-left: 4px solid #f39c12;">
                            ⏳ <strong>Lab 2:</strong> Chart Editing &amp; Management Simulator
                        </div>

                        <button class="action-btn" onclick="window.location.href='advanced-microsoft-excel2.php'" style="margin-top: 10px;">
                            ➡️ Continue to Day 2: External Data Sources (SO 2)
                        </button>
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