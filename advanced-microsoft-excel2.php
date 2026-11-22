<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 2: Advanced Microsoft Excel — Specific Outcome 2 (External Data Sources)</title>
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/advanced-microsoft-excel2.css">
    <link rel="icon" type="image/x-icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>📥</text></svg>">
</head>
<body>
    <div class="presentation-container">
        <div class="slide-counter">
            <span id="currentSlide">1</span> / <span id="totalSlides">20</span>
        </div>

        <!-- Slide 1: Title & Objectives -->
        <div class="slide active">
            <div style="text-align: center; padding-top: 3vh;">
                <div style="font-size: 90px; margin-bottom: 20px; animation: bounceIn 1s ease;">📥</div>
                <h1 style="border: none; font-size: 3.4rem; margin-bottom: 15px;">Day 2: Advanced Microsoft Excel</h1>
                <h2 style="color: var(--text-secondary); font-size: 1.6rem; margin-bottom: 30px; padding-left: 0;">
                    Specific Outcome 2: Load Data from an External Data Source (Unit Standard 116943)
                </h2>

                <img src="assets/images/advanced-microsoft-excel2/1.png" alt="Excel Data tab ribbon banner highlighting Get External Data and the From Text command" class="slide-image">

                <div class="highlight-box" style="display: inline-block; text-align: left; max-width: 900px;">
                    <h3 style="text-align: center; color: var(--module-primary); margin-bottom: 20px;">🎯 Specific Outcome 2 Assessment Criteria (AC 1–4)</h3>
                    <div class="two-column" style="gap: 20px; margin: 10px 0;">
                        <div>
                            <h4>🔍 Verification &amp; Format (AC 1–2)</h4>
                            <ul style="font-size: 14px;">
                                <li>Check the external data file to ensure input achieves required results.</li>
                                <li>Determine the format of the input file (including tables from another source).</li>
                            </ul>
                        </div>
                        <div>
                            <h4>📊 Importing &amp; Output (AC 3–4)</h4>
                            <ul style="font-size: 14px;">
                                <li>Copy or import external data accurately into the Excel worksheet.</li>
                                <li>Verify the resulting spreadsheet matches the required spreadsheet result.</li>
                            </ul>
                        </div>
                    </div>

                    <div style="text-align: center; margin-top: 15px; padding: 15px; background: rgba(27, 107, 71, 0.1); border-radius: 10px;">
                        <strong style="color: var(--module-primary); font-size: 16px;">📘 Unit Standard ID: 116943 | Lesson 3: Importing Data from an External Source</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2: Introduction to Importing External Data -->
        <div class="slide">
            <h1>🌐 Lesson 3: Importing Data from an External Source</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Eliminate manual re-typing by bringing structured data directly from alternative sources into Excel
            </p>

            <div class="two-column">
                <div>
                    <h2>⚡ Why Import External Data?</h2>
                    <ul>
                        <li><strong>Zero Re-Entry:</strong> If data already exists in another application or file, Excel lets you import it directly instead of re-entering every record by hand.</li>
                        <li><strong>Higher Accuracy:</strong> Importing eliminates human transcription typos across large transaction logs or contact lists.</li>
                        <li><strong>Multiple Supported Sources:</strong> Excel supports importing text files (<code>.txt</code>, <code>.csv</code>, <code>.prn</code>), tables from Microsoft Word, Microsoft Access databases, and web data.</li>
                    </ul>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel2/2.png" alt="Diagram of external data sources including text and CSV files, Word tables, Access databases and web sources flowing into an Excel worksheet" class="slide-image">
                    <div class="tip-box">
                        <strong>💡 Course Focus:</strong> In Lesson 3, we focus heavily on one of the most common business import formats—<strong>Text / CSV files</strong>—as well as tables from <strong>Microsoft Word</strong> and <strong>Access</strong>.
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3: Internal vs. External Data Sources -->
        <div class="slide">
            <h1>💻 Internal vs. External Data Sources</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Distinguishing where source files reside before initiating an import
            </p>

            <div class="two-column">
                <div>
                    <div class="highlight-box">
                        <h3>🏠 Internal Data Source</h3>
                        <p style="font-size: 15px; line-height: 1.7;">
                            According to the Learner Guide, source data is called an <strong>internal data source</strong> if it is located in files or folders stored directly on <strong>your own personal computer</strong> (e.g., <em>My Documents</em> or <em>Desktop</em>).
                        </p>
                    </div>
                    <div class="tip-box">
                        <h3>🌍 External Data Source</h3>
                        <p style="font-size: 15px; line-height: 1.7;">
                            Data residing outside the active Excel workbook—such as network servers, databases (Access/SQL), web pages, or exports from third-party platforms (like PayPal CSV exports)—is imported via Excel's <strong>Get External Data</strong> tools.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel2/3.png" alt="Comparison graphic contrasting local PC folders as an internal source with external databases, web feeds and exported tables" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 4: AC 1 — Checking the External Data File Before Importing -->
        <div class="slide">
            <h1>🔍 AC 1: Pre-Import Data Verification</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Always inspect the source file before importing to guarantee clean, accurate spreadsheet results
            </p>

            <div class="two-column">
                <div>
                    <h2>✅ Pre-Import Inspection Checklist</h2>
                    <ul>
                        <li><strong>Verify Content Completeness:</strong> Confirm that the external file actually contains the columns and rows required for your target report.</li>
                        <li><strong>Check Row Headers:</strong> Identify whether row 1 contains column headings or introductory notes that should be skipped.</li>
                        <li><strong>Inspect Separators:</strong> Look for consistent delimiters (commas, tabs, semicolons, or fixed spaces) between fields.</li>
                        <li><strong>Spot Formatting Issues:</strong> Check date formats (DMY vs. MDY), currency symbols, decimal separators (comma vs. dot), and text qualifiers (quotes).</li>
                    </ul>
                </div>
                <div>
                    <div class="code-block">
                        <strong>Sample Raw File (PayPalTEST.csv):</strong><br><br>
                        Date,Time,Time Zone,Name,Type,Status,Currency,Gross,Fee,Net<br>
                        "30-12-2009","09:35:50","PST","Foo","Web Accept Payment Received","Completed","EUR","6,00","-0,55","5,45"<br>
                        "26-12-2009","09:01:20","PST","John Doe","Web Accept Payment Received","Completed","EUR","15,00","-0,86","14,14"
                    </div>
                    <div class="warning-box">
                        <strong>⚠️ Notice in the Sample Above:</strong><br>
                        • Fields are separated by <strong>commas</strong> and wrapped in <strong>double quotes (")</strong>.<br>
                        • Dates use <strong>DD-MM-YYYY</strong> and decimals use a <strong>comma (6,00)</strong>! Catching this before importing prevents broken numbers.
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 5: AC 2 — Determining Input File Formats -->
        <div class="slide">
            <h1>📄 AC 2: Determining Input File Formats</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Understanding common file extensions and table structures from other applications
            </p>

            <div class="three-column">
                <div class="highlight-box" style="margin: 0;">
                    <h4>📝 .TXT (Text File)</h4>
                    <p style="font-size: 14px; line-height: 1.6;">Plain text files where columns are separated by Tabs, Spaces, Semicolons, or Fixed Width columns. Commonly exported from Word or Notepad.</p>
                </div>
                <div class="highlight-box" style="margin: 0;">
                    <h4>📊 .CSV (Comma-Separated)</h4>
                    <p style="font-size: 14px; line-height: 1.6;">Standard tabular data exchange format where each field is separated by a comma (e.g., <code>PayPalTEST.csv</code>).</p>
                </div>
                <div class="highlight-box" style="margin: 0;">
                    <h4>🖨️ .PRN (Formatted Text)</h4>
                    <p style="font-size: 14px; line-height: 1.6;">Space-delimited or fixed-width print output files often generated by legacy accounting or mainframe systems.</p>
                </div>
            </div>

            <div class="two-column" style="margin-top: 25px;">
                <div>
                    <h2>📋 Tables from Another Source</h2>
                    <ul>
                        <li><strong>Microsoft Word Tables:</strong> Structured tables in Word can be saved as plain text (<code>.txt</code>) or copied cleanly into Excel once compatibility is verified.</li>
                        <li><strong>Microsoft Access Databases:</strong> Relational tables and queries can be pulled directly using <strong>From Access</strong> on the Data tab.</li>
                    </ul>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel2/4.png" alt="Import Text File dialog with the Files of type dropdown filtering Text Files (*.prn; *.txt; *.csv)" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 6: Step 1 — Preparing the Destination Worksheet -->
        <div class="slide">
            <h1>🎯 Step 1: Preparing the Destination Worksheet</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Setting up your target workbook and selecting the exact starting cell before importing
            </p>

            <div class="two-column">
                <div>
                    <h2>📌 Preparation Steps</h2>
                    <ol class="step-list">
                        <li><strong>Open Target Workbook:</strong> Launch Excel and open the specific worksheet where you want the external data to appear.</li>
                        <li><strong>Select the Starting Cell:</strong> Click the exact cell (commonly <strong>A1</strong>) where you want the top-left corner of the imported table to begin.</li>
                        <li><strong>Check Surrounding Space:</strong> Ensure there is enough empty space below and to the right so imported columns do not overwrite existing formulas or notes.</li>
                    </ol>
                    <div class="tip-box">
                        <strong>💡 Pro Tip:</strong> If your active worksheet already contains important data, you can also tell Excel to place the imported data into a <strong>New worksheet</strong> during the final import step.
                    </div>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel2/5.png" alt="Blank Excel worksheet with cell A1 highlighted and ready to receive imported data" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 7: Steps 2 & 3 — Navigating the Data Tab -->
        <div class="slide">
            <h1>🧭 Steps 2 &amp; 3: Data Tab → Get External Data</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Locating Excel's external data import commands on the Ribbon
            </p>

            <div class="two-column">
                <div>
                    <h2>🎛️ Get External Data Group Options</h2>
                    <ul>
                        <li><strong>From Access:</strong> Import tables or queries directly from a Microsoft Access database.</li>
                        <li><strong>From Web:</strong> Pull structured tables directly from a live web page.</li>
                        <li><strong>From Text:</strong> Import delimited or fixed-width text files including <strong>.prn</strong>, <strong>.txt</strong>, and <strong>.csv</strong>.</li>
                        <li><strong>From Other Sources:</strong> Connect to SQL Server, XML data imports, or ODBC/OLEDB sources.</li>
                        <li><strong>Existing Connections:</strong> Reuse a previously configured external data connection.</li>
                    </ul>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel2/6.png" alt="Data tab selected with the Get External Data group open and a red highlight box around the From Text command" class="slide-image">
                    <div class="highlight-box">
                        <strong>Action Path:</strong> Click <strong>Data</strong> tab → <strong>Get External Data</strong> group → Click <strong>From Text</strong>.
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 8: Step 4 — Browsing and Selecting the Source File -->
        <div class="slide">
            <h1>📂 Step 4: Locating and Selecting the Import File</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Using the Import Text File dialog to select your verified data file
            </p>

            <div class="two-column">
                <div>
                    <h2>🔢 Selecting the File</h2>
                    <ol class="step-list">
                        <li>In the <strong>Import Text File</strong> dialog box, use the <strong>Look in</strong> drop-down or left navigation pane (e.g., <em>My Documents</em>, <em>Desktop</em>) to browse to the folder containing your file.</li>
                        <li>Verify that <strong>Files of type</strong> is set to <code>Text Files (*.prn; *.txt; *.csv)</code>.</li>
                        <li>Click the target file once to highlight it (e.g., <strong>PayPalTEST.csv</strong>).</li>
                        <li>Click the <strong>Import</strong> button to launch the <strong>Text Import Wizard</strong>.</li>
                    </ol>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel2/7.png" alt="Import Text File dialog showing the My Documents folder with PayPalTEST.csv selected and the Import button ready" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 9: Text Import Wizard — Step 1 of 3 (Original Data Type) -->
        <div class="slide">
            <h1>🧙 Text Import Wizard: Step 1 of 3 (Data Type)</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Choosing between Delimited and Fixed Width file structures
            </p>

            <div class="two-column">
                <div>
                    <h2>⚖️ Delimited vs. Fixed Width</h2>
                    <ul>
                        <li><strong>Delimited:</strong> Select this when a specific character—such as a <strong>comma</strong>, <strong>tab</strong>, <strong>space</strong>, or <strong>semicolon</strong>—separates each field. (Used for <code>PayPalTEST.csv</code>).</li>
                        <li><strong>Fixed Width:</strong> Select this when fields are aligned neatly in columns with a fixed number of spaces between each field (common in <code>.prn</code> reports).</li>
                        <li><strong>Auto-Detection Warning:</strong> Excel attempts to guess the data type automatically, but you must always verify and override it if Excel guesses incorrectly!</li>
                    </ul>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel2/8.png" alt="Text Import Wizard Step 1 of 3 with Delimited selected, start import at row 1, File origin Windows (ANSI) and a raw CSV preview" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 10: Text Import Wizard — Step 1 of 3 (Start Row & Preview) -->
        <div class="slide">
            <h1>🔢 Text Import Wizard: Start Row &amp; File Origin</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Configuring where Excel begins reading records and ensuring proper character encoding
            </p>

            <div class="two-column">
                <div>
                    <h2>⚙️ Key Step 1 Controls</h2>
                    <ul>
                        <li><strong>Start import at row:</strong> Defaults to row <code>1</code>. If your text file has title banners or disclaimer lines on rows 1–3, enter <code>4</code> here to start directly at the column headers.</li>
                        <li><strong>File origin:</strong> Sets character encoding (commonly <code>Windows (ANSI)</code> or UTF-8) so special symbols and currency signs display accurately.</li>
                        <li><strong>Preview Window:</strong> Inspect the bottom preview pane to confirm row numbers and verify how fields are separated before clicking <strong>Next &gt;</strong>.</li>
                    </ul>
                </div>
                <div>
                    <div class="highlight-box">
                        <h4>👀 Reading the Step 1 Preview</h4>
                        <div class="code-block" style="font-size: 12px;">
                            1 | Date, Time, Time Zone, Name, Type, Status...<br>
                            2 | "30-12-2009","09:35:50","PST","Foo"...<br>
                            3 | "26-12-2009","09:01:20","PST","John Doe"...<br>
                            4 | "22-12-2009","09:53:05","PST","Alex Smith"...
                        </div>
                        <p style="font-size: 14px;">Row 1 clearly contains headers, so <strong>Start import at row: 1</strong> is correct. Click <strong>Next &gt;</strong> to define delimiters.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 11: Text Import Wizard — Step 2 of 3 (Delimiters) -->
        <div class="slide">
            <h1>✂️ Text Import Wizard: Step 2 of 3 (Delimiters)</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Splitting raw text lines into clean spreadsheet columns using delimiter characters
            </p>

            <div class="two-column">
                <div>
                    <h2>🧩 Choosing the Right Delimiters</h2>
                    <ul>
                        <li><strong>Standard Delimiters:</strong> Check one or more boxes—<strong>Tab</strong>, <strong>Semicolon</strong>, <strong>Comma</strong>, or <strong>Space</strong>—based on your file inspection.</li>
                        <li><strong>Other Delimiter:</strong> If your file uses a custom character (like a pipe <code>|</code> or slash <code>/</code>), check <strong>Other</strong> and type that character into the box.</li>
                        <li><strong>Text Qualifier:</strong> Usually double quotes (<code>"</code>). Tells Excel to treat everything inside quotes as a single text field—even if it contains a comma!</li>
                    </ul>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel2/9.png" alt="Text Import Wizard Step 2 of 3 with Comma checked, text qualifier set to a double quote and clean column dividers in the data preview" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 12: Text Import Wizard — Consecutive Delimiters & Preview -->
        <div class="slide">
            <h1>🧹 Handling Consecutive Delimiters &amp; Preview</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Preventing blank columns when source files contain repeated separator characters
            </p>

            <div class="two-column">
                <div>
                    <h2>⚠️ Treat Consecutive Delimiters as One</h2>
                    <ul>
                        <li><strong>The Problem:</strong> Some exported files contain multiple spaces or delimiters in a row (e.g., <code>Name,,,Amount</code> or multiple spaces between columns).</li>
                        <li><strong>The Fix:</strong> Check the <strong>Treat consecutive delimiters as one</strong> box so Excel merges adjacent delimiters instead of creating unwanted empty columns.</li>
                        <li><strong>Verify Data Preview:</strong> Scroll horizontally through the Data preview pane to verify that every vertical black line sits cleanly between columns before clicking <strong>Next &gt;</strong>.</li>
                    </ul>
                </div>
                <div>
                    <div class="spreadsheet-container">
                        <div class="formula-bar">
                            <span class="formula-label">Preview</span>
                            <input type="text" class="formula-input" value="Data Preview After Selecting Comma Delimiter" readonly>
                        </div>
                        <div class="sheet-grid">
                            <div class="grid-header">Row</div>
                            <div class="grid-header">Date</div>
                            <div class="grid-header">Time</div>
                            <div class="grid-header">Zone</div>
                            <div class="grid-header">Name</div>
                            <div class="grid-header">Type</div>

                            <div class="grid-header">1</div>
                            <div class="grid-cell">30-12-2009</div>
                            <div class="grid-cell">09:35:50</div>
                            <div class="grid-cell">PST</div>
                            <div class="grid-cell">Foo</div>
                            <div class="grid-cell">Web Accept...</div>

                            <div class="grid-header">2</div>
                            <div class="grid-cell">26-12-2009</div>
                            <div class="grid-cell">09:01:20</div>
                            <div class="grid-cell">PST</div>
                            <div class="grid-cell">John Doe</div>
                            <div class="grid-cell">Web Accept...</div>

                            <div class="grid-header">3</div>
                            <div class="grid-cell">22-12-2009</div>
                            <div class="grid-cell">09:53:05</div>
                            <div class="grid-cell">PST</div>
                            <div class="grid-cell">Alex Smith</div>
                            <div class="grid-cell">Web Accept...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 13: Text Import Wizard — Step 3 of 3 (Column Data Formats) -->
        <div class="slide">
            <h1>🏷️ Text Import Wizard: Step 3 of 3 (Column Formats)</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Assigning the right data type to each column—and skipping unnecessary columns
            </p>

            <div class="two-column">
                <div>
                    <h2>🎛️ Column Data Format Options</h2>
                    <ul>
                        <li><strong>General:</strong> Converts numeric values to numbers, date values to dates, and all remaining values to text.</li>
                        <li><strong>Text:</strong> Keeps values strictly as text—essential for phone numbers, ID numbers, or postal codes with leading zeros (e.g., <code>0115551234</code>).</li>
                        <li><strong>Date (DMY / MDY / YMD):</strong> Explicitly tells Excel the date order in the file so dates like <code>30-12-2009</code> parse correctly.</li>
                        <li><strong>Do not import column (skip):</strong> Excludes unwanted columns from the import completely!</li>
                    </ul>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel2/10.png" alt="Text Import Wizard Step 3 of 3 showing General, Text, Date (DMY) and Do not import column (skip) options with column headers highlighted in the data preview" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 14: Advanced Text Import Settings -->
        <div class="slide">
            <h1>⚙️ Advanced Text Import Settings</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Resolving international decimal and thousands separator conflicts during import
            </p>

            <div class="two-column">
                <div>
                    <h2>🌍 Numeric Recognition Settings</h2>
                    <ul>
                        <li><strong>Decimal separator:</strong> If an external file (like a European EUR PayPal export) uses a <strong>comma</strong> for decimals (<code>6,00</code>, <code>-0,55</code>), set Decimal separator to <code>,</code> here.</li>
                        <li><strong>Thousands separator:</strong> Set the character used to group thousands (e.g., <code>.</code> or space) so Excel does not misread numbers as text.</li>
                        <li><strong>Trailing minus for negative numbers:</strong> Check this if legacy accounting exports put the minus sign at the end (e.g., <code>55.00-</code>).</li>
                        <li><strong>Click OK → Finish:</strong> Confirm your Advanced settings, then click <strong>Finish</strong> on Step 3.</li>
                    </ul>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel2/11.png" alt="Advanced Text Import Settings dialog with the Decimal separator, Thousands separator and Trailing minus for negative numbers options" class="slide-image">
                    <div class="tip-box">
                        <strong>💡 Note:</strong> After import, Excel automatically displays the converted numbers using your computer's Regional Settings control panel format.
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 15: Choosing the Import Destination -->
        <div class="slide">
            <h1>📍 Choosing the Import Destination (Import Data Dialog)</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Steps 12 &amp; 13: Deciding exactly where in your workbook the imported table lands
            </p>

            <div class="two-column">
                <div>
                    <h2>🎯 Destination Options</h2>
                    <ol class="step-list">
                        <li>After clicking <strong>Finish</strong> in Step 3 of the Text Import Wizard, the <strong>Import Data</strong> dialog box appears.</li>
                        <li>Select <strong>Existing worksheet</strong> and confirm the cell reference (e.g., <code>=$A$1</code>), OR select <strong>New worksheet</strong> to create a fresh sheet automatically.</li>
                        <li>Optionally click <strong>Properties...</strong> to configure refresh control and formatting rules.</li>
                        <li>Click <strong>OK</strong> to load the external data into Excel.</li>
                    </ol>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel2/12.png" alt="Import Data dialog asking where to put the data, with Existing worksheet set to =$A$1, New worksheet, Properties and OK" class="slide-image">
                </div>
            </div>
        </div>

        <!-- Slide 16: AC 4 — Verifying the Resulting Spreadsheet -->
        <div class="slide">
            <h1>✅ AC 4: Verifying the Imported Spreadsheet Result</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Step 14: Inspecting the completed worksheet to ensure full compliance with required results
            </p>

            <div class="two-column">
                <div>
                    <h2>🔎 Post-Import Quality Check</h2>
                    <ul>
                        <li><strong>Column Alignment:</strong> Verify that every column header matches the data directly beneath it (Date, Time, Time Zone, Name, Type).</li>
                        <li><strong>No Stray Quotes or Commas:</strong> Confirm text qualifiers and delimiters were cleanly stripped.</li>
                        <li><strong>Numeric &amp; Date Integrity:</strong> Test a quick <code>=SUM()</code> on numerical columns to prove numbers were not accidentally imported as text.</li>
                        <li><strong>Skipped Columns:</strong> Verify any columns marked <em>Do not import</em> were successfully omitted.</li>
                    </ul>
                </div>
                <div>
                    <img src="assets/images/advanced-microsoft-excel2/13.png" alt="Clean Excel grid after importing the text file, showing columns A to E (Date, Time, Time Zone, Name, Type) for rows 1 to 6" class="slide-image">
                    <div class="highlight-box">
                        <strong>🎯 AC 4 Achieved:</strong> The resulting spreadsheet is clean, structured, and matches the given spreadsheet result!
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 17: Lab 1 — Interactive Text Import Wizard Simulator -->
        <div class="slide">
            <h1>🔬 Lab 1: Text Import Wizard Simulator</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 20px;">
                Configure all 3 Wizard steps for the raw file below to import it accurately into Excel
            </p>

            <div class="interactive-demo">
                <h4>📄 Raw Source File: <code>Supplier_Export.csv</code></h4>
                <div class="code-block" style="margin-bottom: 18px;">
                    Row 1: EXPORT REPORT - DO NOT IMPORT<br>
                    Row 2: Date;AccountCode;Supplier;Amount<br>
                    Row 3: 15-03-2026;00458;"Cape Tech; Ltd";1250,50<br>
                    Row 4: 16-03-2026;00459;"Gauteng Supplies";890,00
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 20px;">
                    <div style="background: #f8f9fa; padding: 14px; border-radius: 8px; border: 1px solid #ddd;">
                        <label for="wiz-type" style="display:block; font-weight:bold; margin-bottom:6px;">Step 1: Original Data Type &amp; Start Row:</label>
                        <select id="wiz-type" class="lab-select">
                            <option value="">-- Select Step 1 Config --</option>
                            <option value="wrong">Fixed Width, Start at Row 1</option>
                            <option value="correct">Delimited, Start at Row 2</option>
                            <option value="wrong">Delimited, Start at Row 1</option>
                        </select>
                    </div>
                    <div style="background: #f8f9fa; padding: 14px; border-radius: 8px; border: 1px solid #ddd;">
                        <label for="wiz-delim" style="display:block; font-weight:bold; margin-bottom:6px;">Step 2: Delimiter &amp; Text Qualifier:</label>
                        <select id="wiz-delim" class="lab-select">
                            <option value="">-- Select Step 2 Config --</option>
                            <option value="wrong">Comma delimiter, No text qualifier</option>
                            <option value="correct">Semicolon (;) delimiter, Double-quote (") text qualifier</option>
                            <option value="wrong">Space delimiter, Single-quote (') text qualifier</option>
                        </select>
                    </div>
                    <div style="background: #f8f9fa; padding: 14px; border-radius: 8px; border: 1px solid #ddd;">
                        <label for="wiz-col" style="display:block; font-weight:bold; margin-bottom:6px;">Step 3: Format for AccountCode (00458) to keep leading zeros:</label>
                        <select id="wiz-col" class="lab-select">
                            <option value="">-- Select Column Format --</option>
                            <option value="wrong">General</option>
                            <option value="correct">Text</option>
                            <option value="wrong">Date (DMY)</option>
                        </select>
                    </div>
                    <div style="background: #f8f9fa; padding: 14px; border-radius: 8px; border: 1px solid #ddd;">
                        <label for="wiz-adv" style="display:block; font-weight:bold; margin-bottom:6px;">Step 3 Advanced: Decimal Separator for 1250,50:</label>
                        <select id="wiz-adv" class="lab-select">
                            <option value="">-- Select Decimal Separator --</option>
                            <option value="wrong">Period (.)</option>
                            <option value="correct">Comma (,)</option>
                            <option value="wrong">Semicolon (;)</option>
                        </select>
                    </div>
                </div>

                <button class="action-btn" onclick="checkImportWizard()" style="width: 280px;">🚀 Run Text Import Wizard</button>
                <div id="wizard-result" class="simulation-result"></div>
            </div>
        </div>

        <!-- Slide 18: Lab 2 (Activity 3) — Importing a Table from Microsoft Word -->
        <div class="slide">
            <h1>🔬 Lab 2 (Activity 3): Importing a Table from Microsoft Word</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 25px;">
                Learner Guide Activity 3: Checking compatibility and bringing a Word table cleanly into Excel
            </p>

            <div class="two-column">
                <div>
                    <h2>📋 Activity 3 Instructions</h2>
                    <div class="highlight-box">
                        <p style="font-size: 15px; line-height: 1.7;">
                            <strong>Task:</strong> Import data from Microsoft Word and insert it into an Excel worksheet. The data must be in the form of a <strong>table</strong>. Before importing, check if the data is compatible with Excel.
                        </p>
                    </div>
                    <ol class="step-list">
                        <li>Inspect the Word table for merged cells, nested tables, or inconsistent columns.</li>
                        <li><strong>Method A (Direct Copy):</strong> Select the Word table → Copy (<code>Ctrl+C</code>) → Select cell A1 in Excel → Paste (<code>Ctrl+V</code>) or Match Destination Formatting.</li>
                        <li><strong>Method B (Via Text File):</strong> Save the Word table as Plain Text (<code>.txt</code>) with Tab separators → Use <strong>Data → Get External Data → From Text</strong>.</li>
                    </ol>
                </div>
                <div>
                    <div class="interactive-demo" style="margin-top: 0;">
                        <h4>✅ Activity 3 Compatibility &amp; Sequence Check</h4>
                        <p style="font-size: 14px; margin-bottom: 12px;">Check all valid steps before importing a Word table into Excel:</p>
                        <div style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 18px; font-size: 14px;">
                            <label style="cursor:pointer;"><input type="checkbox" id="w-check1"> Check that the Word table has consistent rows/columns and no problematic merged cells.</label>
                            <label style="cursor:pointer;"><input type="checkbox" id="w-check2"> Verify numeric values do not contain mixed text notes inside number cells.</label>
                            <label style="cursor:pointer;"><input type="checkbox" id="w-check3"> Select the target starting cell in the Excel worksheet before pasting/importing.</label>
                            <label style="cursor:pointer;"><input type="checkbox" id="w-check4"> Confirm the final Excel worksheet matches the required spreadsheet result (AC 4).</label>
                        </div>
                        <button class="action-btn" onclick="checkWordImportLab()">✅ Validate Activity 3 Steps</button>
                        <div id="word-import-result" class="simulation-result"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 19: Day 2 Assessment Quiz -->
        <div class="slide">
            <h1>📋 Day 2 Assessment: Specific Outcome 2 Quiz</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 25px;">
                Test your mastery of Unit Standard 116943 — Specific Outcome 2 (External Data Sources)
            </p>

            <div class="quiz-container">
                <div class="question" id="q1">
                    <h4>1. What is source data called if it is located in files or folders on your own personal computer?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">Internal data source</li>
                        <li data-answer="wrong">Cloud data source</li>
                        <li data-answer="wrong">Web query source</li>
                        <li data-answer="wrong">Linked formula source</li>
                    </ul>
                </div>

                <div class="question" id="q2">
                    <h4>2. What should you always do BEFORE importing an external data file into Excel?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Delete all existing worksheets</li>
                        <li data-answer="correct">Check the external data file to ensure input will achieve the required results</li>
                        <li data-answer="wrong">Convert the workbook to a PDF</li>
                        <li data-answer="wrong">Insert a Pie Chart first</li>
                    </ul>
                </div>

                <div class="question" id="q3">
                    <h4>3. Which Excel Ribbon tab contains the "Get External Data" group?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Insert</li>
                        <li data-answer="wrong">Formulas</li>
                        <li data-answer="correct">Data</li>
                        <li data-answer="wrong">Review</li>
                    </ul>
                </div>

                <div class="question" id="q4">
                    <h4>4. Which file extensions are supported when clicking "From Text" in Get External Data?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">.jpg, .png, .gif</li>
                        <li data-answer="correct">.prn, .txt, and .csv</li>
                        <li data-answer="wrong">.mp3, .wav, .mp4</li>
                        <li data-answer="wrong">.exe, .bat, .dll</li>
                    </ul>
                </div>

                <div class="question" id="q5">
                    <h4>5. In Text Import Wizard Step 1, when should you choose "Delimited"?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">When a character such as a comma, tab, space, or semicolon separates each field</li>
                        <li data-answer="wrong">When fields are aligned strictly by fixed column widths</li>
                        <li data-answer="wrong">Only when importing pictures</li>
                        <li data-answer="wrong">Only when importing from Microsoft Access</li>
                    </ul>
                </div>

                <div class="question" id="q6">
                    <h4>6. How do you skip introductory header rows at the top of a text file during Step 1 of the Wizard?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Change File origin to Macintosh</li>
                        <li data-answer="correct">Enter the desired starting row number in the "Start import at row" field</li>
                        <li data-answer="wrong">Uncheck all delimiters</li>
                        <li data-answer="wrong">Press Delete on the keyboard</li>
                    </ul>
                </div>

                <div class="question" id="q7">
                    <h4>7. What does the "Treat consecutive delimiters as one" checkbox prevent?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Importing dates</li>
                        <li data-answer="wrong">Changing font colours</li>
                        <li data-answer="correct">Creating multiple blank fields where the delimiter appears several times in a row</li>
                        <li data-answer="wrong">Saving the workbook</li>
                    </ul>
                </div>

                <div class="question" id="q8">
                    <h4>8. In Step 3 of the Text Import Wizard, how do you exclude an unwanted column from being imported?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Select General</li>
                        <li data-answer="wrong">Select Text</li>
                        <li data-answer="correct">Select "Do not import column (skip)"</li>
                        <li data-answer="wrong">Click Reset</li>
                    </ul>
                </div>

                <div class="question" id="q9">
                    <h4>9. Where do you specify that an imported file uses a comma (,) as its decimal separator?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">Step 3 → Advanced Text Import Settings</li>
                        <li data-answer="wrong">Step 1 → File origin</li>
                        <li data-answer="wrong">Insert tab → Shapes</li>
                        <li data-answer="wrong">View tab → Freeze Panes</li>
                    </ul>
                </div>

                <div class="question" id="q10">
                    <h4>10. After clicking Finish in the Text Import Wizard, what does the "Import Data" dialog ask you?</h4>
                    <ul class="quiz-options">
                        <li data-answer="wrong">Which chart type to create</li>
                        <li data-answer="correct">Where you want to put the data (Existing worksheet cell or New worksheet)</li>
                        <li data-answer="wrong">What password to assign to the file</li>
                        <li data-answer="wrong">Which printer to use</li>
                    </ul>
                </div>

                <div style="text-align: center; margin-top: 30px;">
                    <button class="action-btn" onclick="submitQuiz()" style="width: 280px; font-size: 18px;">🚀 Submit Day 2 Quiz</button>
                </div>
                <div id="quiz-feedback" class="simulation-result"></div>
            </div>
        </div>

        <!-- Slide 20: Day 2 Summary & Next Steps -->
        <div class="slide">
            <h1>🎓 Day 2 Complete: Specific Outcome 2 Recap</h1>
            <p style="font-size: 18px; text-align: center; color: var(--text-secondary); margin-bottom: 30px;">
                Review your external data import workflow before advancing to Day 3: Inserting &amp; Editing Objects
            </p>

            <div class="two-column">
                <div>
                    <div class="highlight-box" style="background: white; border: 2px solid var(--module-primary);">
                        <h3>📋 Specific Outcome 2 Mastery Summary</h3>
                        <ul style="font-size: 14px;">
                            <li><strong>AC 1:</strong> Verified external data files prior to import to ensure required results.</li>
                            <li><strong>AC 2:</strong> Identified input file formats (<code>.txt</code>, <code>.csv</code>, <code>.prn</code>, Word tables, Access).</li>
                            <li><strong>AC 3:</strong> Imported data accurately using the Data tab and 3-step Text Import Wizard.</li>
                            <li><strong>AC 4:</strong> Validated that the resulting spreadsheet matched the required output.</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="highlight-box" style="background: white; border: 2px solid var(--module-accent);">
                        <h3>📈 Your Day 2 Lab Progress</h3>
                        <div class="progress-bar" style="height: 12px; margin: 15px 0;">
                            <div class="lab-progress-fill progress-fill" style="width: 0%;"></div>
                        </div>
                        <div class="lab-progress-text" style="font-weight: bold; color: var(--module-primary); margin-bottom: 15px;">
                            Labs Completed: 0/2
                        </div>
                        <div id="lab1-status" style="margin-bottom: 10px; padding: 12px; background: #fff3cd; border-radius: 8px; border-left: 4px solid #f39c12;">
                            ⏳ <strong>Lab 1:</strong> Text Import Wizard Simulator
                        </div>
                        <div id="lab2-status" style="margin-bottom: 15px; padding: 12px; background: #fff3cd; border-radius: 8px; border-left: 4px solid #f39c12;">
                            ⏳ <strong>Lab 2:</strong> Word Table Import Validator (Activity 3)
                        </div>

                        <button class="action-btn" onclick="window.location.href='advanced-microsoft-excel3.php'" style="margin-top: 10px;">
                            ➡️ Continue to Day 3: Insert &amp; Edit Objects (SO 3)
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

    <script src="js/advanced-microsoft-excel2.js"></script>
</body>
</html>