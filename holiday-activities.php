<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Over Gauteng: Our Couple Holiday Playbook</title>
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/holiday-activities.css">
</head>
<body>
    <div class="ember-particles" id="emberParticles"></div>

    <div class="budget-hud">
        <span>Holiday Funnel Cap:</span>
        <span class="budget-hud-amount" id="hudBudgetTotal">R7,000 / R7,000</span>
    </div>

    <div class="presentation-container">
        <div class="slide-counter">
            <span id="currentSlide">1</span> / <span id="totalSlides">25</span>
        </div>

        <!-- ======================= SLIDE 1 ======================= -->
        <div class="slide active">
            <div class="title-slide">
                <h1>Sparks Over the Highveld</h1>
                <p class="subtitle">Unexplored Unforgettable Gauteng Adventures Crafted for Two Bold Hearts</p>
                <div class="heritage-proverb">
                    "Umntu ngumntu ngabantu — and a holiday is only magic when shared with the one who sets your soul on fire."
                    <small>(Warm roots, fearless first moves, and zero boring dates allowed.)</small>
                </div>
                <div class="image-placeholder-card">
                    <img src="assets/images/holiday-activities/1.png" alt="Romantic South African couple overlooking golden Johannesburg sunset with warm geometric accents" class="slide-image">
                    <div class="prompt-box">
                        <div class="prompt-box-text">
                            <strong>Cover:</strong>
                            <span class="prompt-content">Cinematic wide shot of a stylish Black South African couple laughing together at golden hour overlooking the Johannesburg skyline from a rocky ridge, warm terracotta and ochre sunset glow, subtle Southern African geometric beadwork light patterns in the border, romantic and vibrant atmosphere, photorealistic, 8k.</span>
                        </div>
                        <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                    </div>
                </div>
                <div class="highlight">
                    <h3>Our Holiday Golden Rule</h3>
                    <p>Ten curated Gauteng experiences, one iconic flame-grilled dinner showdown, out-of-the-box romantic lore, and every rand smartly plotted under our <strong>R7,000</strong> ceiling.</p>
                </div>
            </div>
        </div>

        <!-- ======================= SLIDE 2 ======================= -->
        <div class="slide">
            <h1>The Playbook Manifesto: Why This Is a Funnel, Not a Lecture</h1>
            <p>A normal slide deck talks <em>at</em> you; a romantic funnel lets the queen of the room steer the energy, rate every adventure, and lock in our final itinerary.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/2.png" alt="Illustrated romantic treasure map of Gauteng from Pretoria and Harties to Melrose Arch and Soweto" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Map:</strong>
                        <span class="prompt-content">Artistic luxury travel map of Gauteng South Africa glowing with warm amber and crimson pins at Melrose Arch, Hartbeespoort Dam, Cullinan, Cradle of Humankind, and Soweto Towers, surrounded by compasses, wine glasses, and warm African textile textures, high detail illustration.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="two-column">
                <div class="highlight">
                    <h3>Built for Fearless Energy &amp; Deep Warmth</h3>
                    <p><strong>No Waiting in Line for Fun:</strong> Every date balances bold, headfirst excitement with soulful conversations, royal treatment, and rich heritage warmth.</p>
                    <p><strong>Playful Rivalry Included:</strong> From quad trails to portrait painting and 3D forest mazes, we keep the spark electric.</p>
                </div>
                <div class="highlight" style="border-left-color: var(--secondary-color);">
                    <h3>How the R7,000 Smart Funnel Works</h3>
                    <p><strong>10 Curated Dates:</strong> R6,650 total across all 10 experiences.</p>
                    <p><strong>Spontaneous Spoil Buffer:</strong> R350 reserved for unplanned roadside padkos, extra gelato, or a surprise bouquet keeping us strictly at <strong>R7,000</strong>.</p>
                </div>
            </div>
        </div>

        <!-- ======================= SLIDE 3 ======================= -->
        <div class="slide">
            <h1>Funnel Step 1: Calibrate Our Holiday Chemistry</h1>
            <p>Before we dive into the 10 activities, set the primary frequency for our holiday. When you lead the vibe, the whole province follows.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/3.png" alt="Three glowing romantic emblems representing Fire Adventure, Golden Sunset Soul, and Playful Rivalry" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Vibe Emblems:</strong>
                        <span class="prompt-content">Triptych of three glowing luxury romantic icons on warm cream parchment: a fiery golden flame with quad trails, a tranquil sunset boat over dam waters, and two clinking cocktail glasses with paintbrushes, warm terracotta and gold palette, editorial illustration.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="interactive-lab">
                <div class="lab-title">Interactive Chemistry Tuner</div>
                <p>Which energy should dominate our Gauteng holiday playbook?</p>
                <div style="margin: 15px 0;">
                    <input type="radio" id="vibe_fire" name="vibePrompt" value="fire">
                    <label for="vibe_fire"><strong>Bold Fire &amp; First-Move Thrills:</strong> High-speed dust, high-altitude leaps, and sizzling charcoal grills.</label><br><br>
                    <input type="radio" id="vibe_soul" name="vibePrompt" value="soul">
                    <label for="vibe_soul"><strong>Deep Roots &amp; Golden Sunsets:</strong> Sunset water cruises, horseback bush picnics, and candlelit storytelling.</label><br><br>
                    <input type="radio" id="vibe_rivalry" name="vibePrompt" value="rivalry">
                    <label for="vibe_rivalry"><strong>Playful Rivalry &amp; Mischief:</strong> Head-to-head portrait duels, forest mazes, and winner-takes-all bragging rights.</label>
                </div>
                <button class="simulation-button" onclick="calibrateHolidayVibe()">Lock In Chemistry Frequency</button>
                <div id="vibe-calibration-result" class="simulation-result"></div>
            </div>
        </div>

        <!-- ======================= SLIDE 4 ======================= -->
        <div class="slide">
            <h1>Activity 1: Charcoal, Craft &amp; Flame Dinner Date</h1>
            <div class="activity-meta-bar">
                <span class="meta-badge price-badge">Budget: R1,150 (For Two)</span>
                <span class="meta-badge">Location: Melrose Arch / Bryanston / Illovo</span>
                <span class="meta-badge vibe-badge">Vibe: Sizzling Flame &amp; Urban Glamour</span>
            </div>
            <p><strong>The Narrative:</strong> Every iconic holiday needs a flagship night where we dress sharp, claim a corner table where the charcoal ovens glow, and let the conversation run past midnight. Whether we choose the fairy-lit piazza energy of <strong>Mr. George in Melrose Arch</strong>, the legendary steakhouse mastery of <strong>Turn 'n Tender</strong>, or the wood-fired rooftop buzz of <strong>Tiger's Milk</strong>, tonight is about fire-kissed flavour and undivided attention.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/4.png" alt="Romantic couple dining at an upscale open-air Johannesburg restaurant like Mr George Melrose Arch with charcoal grilled steak and cocktails" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Dinner Date:</strong>
                        <span class="prompt-content">Romantic evening dinner date at an upscale open-air piazza restaurant in Melrose Arch Johannesburg inspired by Mr George and Turn n Tender, sizzling charcoal-grilled beef fillet cubes, rockshrimp tempura, two craft cocktails, warm fairy lights in trees, happy couple clinking glasses, cinematic food and lifestyle photography.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="three-column">
                <div class="highlight">
                    <h3>Option A: Mr. George</h3>
                    <p><strong>Melrose Arch Piazza:</strong> Famous for coal-fired 250g Cubed Fillet with lemon &amp; oregano (R342–R414), Bifteki with hummus (R185), Rockshrimp Tempura (R235), and Salted Caramel Churros (R129).</p>
                </div>
                <div class="highlight" style="border-left-color: var(--secondary-color);">
                    <h3>Option B: Turn 'n Tender</h3>
                    <p><strong>Bryanston / Illovo / Parktown North:</strong> The gold standard of South African steakhouses — roasted marrow bones, crispy onion blossom, aged chargrilled ribeye, and smooth red wine in intimate booths.</p>
                </div>
                <div class="highlight" style="border-left-color: var(--accent-rose);">
                    <h3>Option C: Tiger's Milk</h3>
                    <p><strong>Melrose Arch / Bryanston:</strong> High-energy industrial-chic social dining with wood-fired Tijuana &amp; BBQ Brisket pizzas, Salt &amp; Pepper Calamari, loaded fries, and ice-cold craft drinks.</p>
                </div>
            </div>
        </div>

        <!-- ======================= SLIDE 5 ======================= -->
        <div class="slide">
            <h1>Activity 1 Playbook: The Dinner Date Rules &amp; Venue Picker</h1>
            <p>How to turn a great dinner at Mr. George, Turn 'n Tender, or Tiger's Milk into a legendary core memory.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/5.png" alt="Close up of sizzling steak, churros with salted caramel, and two craft cocktails under warm lights" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Dinner Spread:</strong>
                        <span class="prompt-content">Overhead luxury food photography of a shared romantic feast: charcoal-seared beef fillet medallions with lemon and herbs, crispy tempura prawns, chargrilled halloumi, and churros with salted caramel sauce on a warm wood table by candlelight.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="two-column">
                <div class="know-box">
                    <h3>✓ Everything to Know (For Romance)</h3>
                    <ul>
                        <li><strong>The "Two-Fork" Pact:</strong> Order one signature starter (like Mr. George's Rockshrimp Tempura or Turn 'n Tender's Marrow Bones) and two different mains so we can swap halfway.</li>
                        <li><strong>Golden-Hour Arrival:</strong> Book for 18:30 so we catch the twilight transition when the Melrose Arch or Bryanston lights flicker on.</li>
                    </ul>
                </div>
                <div class="avoid-box">
                    <h3>✗ Everything to Avoid (Pitfalls)</h3>
                    <ul>
                        <li><strong>Never Wing a Friday Booking:</strong> Walking into Melrose Arch or Turn 'n Tender at 20:00 on a Friday without a reservation turns fiery excitement into "hangry" waiting — book 48 hours ahead.</li>
                        <li><strong>Avoid the Loud Speaker Table:</strong> Specifically request an outside piazza edge table or a tucked-away booth so we don't have to shout over the bar speakers.</li>
                    </ul>
                </div>
            </div>
            <div class="interactive-lab">
                <div class="lab-title">Interactive Dinner Showdown: Pick Our Table</div>
                <p>Click your top restaurant choice below to lock it into our R7,000 budget tracker:</p>
                <button class="simulation-button" onclick="selectDinnerVenue('mrgeorge')">Choose Mr. George (R1,150)</button>
                <button class="simulation-button" onclick="selectDinnerVenue('turnntender')">Choose Turn 'n Tender (R1,180)</button>
                <button class="simulation-button" onclick="selectDinnerVenue('tigersmilk')">Choose Tiger's Milk (R980)</button>
                <div id="dinner-venue-result" class="simulation-result"></div>
            </div>
        </div>

        <!-- ======================= SLIDE 6 ======================= -->
        <div class="slide">
            <h1>Activity 2: Red-Earth Sunset Quad Biking in Cullinan</h1>
            <div class="activity-meta-bar">
                <span class="meta-badge price-badge">Budget: R1,050 (For Two)</span>
                <span class="meta-badge">Location: Cullinan Diamond Bushveld</span>
                <span class="meta-badge vibe-badge">Vibe: Fearless Speed &amp; Red Dust</span>
            </div>
            <p><strong>The Narrative:</strong> Some women want to be chauffeured; a natural-born leader wants her own throttle and an open bushveld track. Just outside historic Cullinan, we trade city tar for winding red-earth trails, rocky river crossings, and acacia trees glowing in late-afternoon gold. It is raw, loud, unapologetically fun, and guaranteed to end with dusty grins.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/6.png" alt="Couple riding quad bikes side by side through scenic red earth bushveld trails in Cullinan at sunset" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Cullinan Quads:</strong>
                        <span class="prompt-content">Action shot of an adventurous couple riding two quad bikes side-by-side through red-earth South African bushveld trails in Cullinan at golden sunset, kicking up warm glowing dust clouds, acacia trees in background, joyful energy, cinematic outdoor photography.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="highlight">
                <h3>Why This Hits Different</h3>
                <p>Instead of a passive sightseeing bus, we get a full 60-minute guided bush trail for two (R1,050 total combo price), pausing at a high ridge lookout where the bushveld stretches forever and the only sound is the wind cooling down the engines.</p>
            </div>
        </div>

        <!-- ======================= SLIDE 7 ======================= -->
        <div class="slide">
            <h1>Activity 2 Playbook: Quad Biking Secrets &amp; Pitfalls</h1>
            <p>How to rule the Cullinan dirt tracks without eating dust.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/7.png" alt="Couple taking off helmets laughing at a bushveld viewpoint in Cullinan with cold drinks" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Bushveld Viewpoint:</strong>
                        <span class="prompt-content">Romantic candid portrait of a couple resting beside parked quad bikes on a scenic hill in Cullinan South Africa, helmets in hand, warm golden sunset light, laughing and sharing a cold drink, authentic adventure romance.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="two-column">
                <div class="know-box">
                    <h3>✓ Everything to Know (For Romance)</h3>
                    <ul>
                        <li><strong>Let Her Ride Point:</strong> Whoever rides in front gets clean air and sets the pace; letting her lead the trail for the first half is the ultimate power move.</li>
                        <li><strong>Pack a Silk Scarf or Buff:</strong> Tying a warm patterned bandana under the helmet protects hair and keeps red bushveld dust off your collar.</li>
                    </ul>
                </div>
                <div class="avoid-box">
                    <h3>✗ Everything to Avoid (Pitfalls)</h3>
                    <ul>
                        <li><strong>Never Wear Box-Fresh White Sneakers:</strong> Cullinan soil is famous for its rich iron-red colour — wear dark boots or trail takkies you don't mind christening.</li>
                        <li><strong>Don't Tailgate Through Mud Puddles:</strong> Keep a 3-bike gap after rain unless you want a surprise mud facial before our dinner reservation.</li>
                    </ul>
                </div>
            </div>
            <div class="funnel-rating-bar">
                <strong>Funnel Checkpoint — Rate Activity #2:</strong>
                <div class="funnel-btn-group">
                    <button class="funnel-choice-btn active-choice" onclick="rateActivityFunnel(2, 'Ignite It 🔥', this)">Ignite It 🔥</button>
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(2, 'Soulful Gold 🌅', this)">Soulful Gold 🌅</button>
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(2, 'Playful Rivalry 🎭', this)">Playful Rivalry 🎭</button>
                </div>
            </div>
        </div>

        <!-- ======================= SLIDE 8 ======================= -->
        <div class="slide">
            <h1>Activity 3: Hartbeespoort Dam Golden-Hour Cruise &amp; Platter</h1>
            <div class="activity-meta-bar">
                <span class="meta-badge price-badge">Budget: R780 (For Two)</span>
                <span class="meta-badge">Location: Kommando Nek, Hartbeespoort Dam</span>
                <span class="meta-badge vibe-badge">Vibe: Mountain Reflections &amp; Breeze</span>
            </div>
            <p><strong>The Narrative:</strong> Even the fiercest fire loves watching the sun melt into calm water. Departing from the shores of Kommando Nek Nature Reserve at 16:00, this 2-hour scenic cruise glides across Hartbeespoort Dam beneath the towering Magaliesberg cliffs. With welcome drinks in hand and a gourmet spread of traditional South African hot and cold finger foods, we get two hours where the world slows down to ripple speed.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/8.png" alt="Luxury sunset boat cruise on Hartbeespoort Dam with Magaliesberg mountains and South African finger foods" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Harties Cruise:</strong>
                        <span class="prompt-content">Romantic couple on the upper deck of a scenic cruise boat on Hartbeespoort Dam at sunset, towering Magaliesberg mountains reflecting in golden water, welcome cocktails and a gourmet platter of South African finger foods, warm breeze, photorealistic.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="highlight">
                <h3>Bonus Shore Access Included</h3>
                <p>After docking, our boarding passes keep our entry to the lakeside Beach Café open — meaning we can linger by the water's edge under the twilight sky without spending an extra cent on entrance fees.</p>
            </div>
        </div>

        <!-- ======================= SLIDE 9 ======================= -->
        <div class="slide">
            <h1>Activity 3 Playbook: Dam Cruise Secrets &amp; Pitfalls</h1>
            <p>How to claim the best deck spot and make the Magaliesberg sunset feel private.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/9.png" alt="Couple toasting with cocktails at the bow of a boat on Hartbeespoort Dam at twilight" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Deck Toast:</strong>
                        <span class="prompt-content">Close-up of two hands clinking cocktail glasses over the wooden railing of a boat on Hartbeespoort Dam during purple and orange twilight, soft bokeh fairy lights on deck, warm intimate mood.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="two-column">
                <div class="know-box">
                    <h3>✓ Everything to Know (For Romance)</h3>
                    <ul>
                        <li><strong>The 16:00 Slot is Non-Negotiable:</strong> Between the 10:00, 13:00, and 16:00 departures, the 16:00 cruise catches the exact moment the Magaliesberg turns amber and violet.</li>
                        <li><strong>Board 20 Minutes Early:</strong> Arriving early lets us claim the front-right bow rail away from the engine hum and right in the golden reflection path.</li>
                    </ul>
                </div>
                <div class="avoid-box">
                    <h3>✗ Everything to Avoid (Pitfalls)</h3>
                    <ul>
                        <li><strong>Don't Forget a Light Wrap:</strong> Even on a 30°C Gauteng afternoon, the breeze off the dam drops 6 degrees the moment the sun dips behind the mountain.</li>
                        <li><strong>Avoid the Single-Lane Bridge Rush:</strong> Take the Pelindaba (R512) scenic route rather than getting stuck behind slow trucks on the old dam wall pass.</li>
                    </ul>
                </div>
            </div>
            <div class="funnel-rating-bar">
                <strong>Funnel Checkpoint — Rate Activity #3:</strong>
                <div class="funnel-btn-group">
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(3, 'Ignite It 🔥', this)">Ignite It 🔥</button>
                    <button class="funnel-choice-btn active-choice" onclick="rateActivityFunnel(3, 'Soulful Gold 🌅', this)">Soulful Gold 🌅</button>
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(3, 'Playful Rivalry 🎭', this)">Playful Rivalry 🎭</button>
                </div>
            </div>
        </div>

        <!-- ======================= SLIDE 10 ======================= -->
        <div class="slide">
            <h1>Activity 4: Private Sip &amp; Paint (or Tuft) Portrait Duel</h1>
            <div class="activity-meta-bar">
                <span class="meta-badge price-badge">Budget: R690 (For Two)</span>
                <span class="meta-badge">Location: Oakdene / Craighall Creative Studio</span>
                <span class="meta-badge vibe-badge">Vibe: Bold Colours, Wine &amp; Laughter</span>
            </div>
            <p><strong>The Narrative:</strong> Anyone can buy a framed print; we are going to pour two generous glasses of wine, pick up palettes loaded with crimson, ochre, and gold, and paint each other's portraits without letting the other person peek until the final countdown. (Or swap brushes for tufting guns to weave a custom mini-rug together!)</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/10.png" alt="Couple laughing in a cozy Johannesburg art studio painting each other's portraits with wine and snacks" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Sip &amp; Paint Duel:</strong>
                        <span class="prompt-content">Vibrant indoor scene of a Black couple sitting across from each other with two easels in a warm sunlit Johannesburg art studio, holding paintbrushes and red wine glasses, vibrant terracotta and gold paint on canvases, laughing before the big reveal, photorealistic.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="highlight">
                <h3>What's Included in Our R690 Studio Pass</h3>
                <p>A 2-hour guided session for two including all canvases, acrylic paints, brushes, aprons, wine, and studio snacks — plus two home-made masterpieces that will make us laugh every time we walk past the bedroom wall.</p>
            </div>
        </div>

        <!-- ======================= SLIDE 11 ======================= -->
        <div class="slide">
            <h1>Activity 4 Playbook: Sip &amp; Paint Secrets &amp; Pitfalls</h1>
            <p>How to survive the "3-2-1 Turn Your Canvas Around" moment with romance intact.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/11.png" alt="Two colorful expressive canvases side by side with wine glasses and paint palettes" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Canvas Reveal:</strong>
                        <span class="prompt-content">Two expressive, bold contemporary portrait paintings resting side-by-side on wooden easels, rich warm African palette of crimson, gold, sienna, and deep indigo, surrounded by brushes and wine glasses, warm studio lighting.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="two-column">
                <div class="know-box">
                    <h3>✓ Everything to Know (For Romance)</h3>
                    <ul>
                        <li><strong>Paint Her Crown &amp; Aura:</strong> Even if your stick-figure skills are questionable, paint a bold golden crown and fiery background aura — she will love the tribute.</li>
                        <li><strong>Sign the Back with a Secret Note:</strong> Before the paint dries, write the date and one thing you adore about her on the back of her canvas.</li>
                    </ul>
                </div>
                <div class="avoid-box">
                    <h3>✗ Everything to Avoid (Pitfalls)</h3>
                    <ul>
                        <li><strong>Never Experiment with "Abstract Caricature" on Her Nose:</strong> Flatter the cheekbones, brighten the eyes, and keep the proportions regal if you enjoy sleeping indoors.</li>
                        <li><strong>Don't Dip Your Brush in Your Wine Glass:</strong> Keep the water jar on your left and your Merlot on your right — acrylic crimson does not pair well with cabernet.</li>
                    </ul>
                </div>
            </div>
            <div class="funnel-rating-bar">
                <strong>Funnel Checkpoint — Rate Activity #4:</strong>
                <div class="funnel-btn-group">
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(4, 'Ignite It 🔥', this)">Ignite It 🔥</button>
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(4, 'Soulful Gold 🌅', this)">Soulful Gold 🌅</button>
                    <button class="funnel-choice-btn active-choice" onclick="rateActivityFunnel(4, 'Playful Rivalry 🎭', this)">Playful Rivalry 🎭</button>
                </div>
            </div>
        </div>

        <!-- ======================= SLIDE 12 ======================= -->
        <div class="slide">
            <h1>Activity 5: Cradle of Humankind Echoes &amp; Sanctuary Walk</h1>
            <div class="activity-meta-bar">
                <span class="meta-badge price-badge">Budget: R620 (For Two)</span>
                <span class="meta-badge">Location: Kromdraai / Cradle of Humankind</span>
                <span class="meta-badge vibe-badge">Vibe: Deep Roots &amp; Ancient Wonder</span>
            </div>
            <p><strong>The Narrative:</strong> For a soul that respects lineage, history, and where we come from, walking the rolling dolomitic hills of the Cradle of Humankind feels electric. We explore the ancient limestone wonders and heritage exhibitions, followed by artisan coffee and decadent cake overlooking the Kromdraai valley at a sanctuary bistro.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/12.png" alt="Couple walking through scenic dolomitic hills and dramatic architectural archway at Cradle of Humankind" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Cradle of Humankind:</strong>
                        <span class="prompt-content">Cinematic shot of a couple walking hand-in-hand along a dramatic stone pathway in the Cradle of Humankind South Africa, golden highveld grasslands, ancient limestone cliffs, warm sunlight beams, deeply soulful and timeless atmosphere.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="heritage-proverb">
                "Knowing the depth of the roots makes the height of the flame even brighter."
                <small>(Entry tickets for two + artisanal coffee &amp; pastry stop in the valley = R620 total.)</small>
            </div>
        </div>

        <!-- ======================= SLIDE 13 ======================= -->
        <div class="slide">
            <h1>Activity 5 Playbook: Cradle of Humankind Secrets &amp; Pitfalls</h1>
            <p>How to turn a heritage outing into an intimate, unhurried country escape.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/13.png" alt="Artisanal coffee and cake on a rustic wooden deck overlooking the Kromdraai valley" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Valley Bistro:</strong>
                        <span class="prompt-content">Two cups of artisanal cappuccino and a rich slice of carrot and pecan cake on a rustic wooden deck overlooking the lush green Kromdraai valley in Muldersdrift, warm morning sun, peaceful country romance.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="two-column">
                <div class="know-box">
                    <h3>✓ Everything to Know (For Romance)</h3>
                    <ul>
                        <li><strong>Take the Kromdraai Meander Drive:</strong> Roll the windows down along Kromdraai Road and play a curated acoustic Afro-soul playlist while the city disappears behind the hills.</li>
                        <li><strong>Pause at the Horizon Deck:</strong> The viewing deck facing the Magaliesberg range is one of the quietest, most photogenic spots in Gauteng on a weekday morning.</li>
                    </ul>
                </div>
                <div class="avoid-box">
                    <h3>✗ Everything to Avoid (Pitfalls)</h3>
                    <ul>
                        <li><strong>Skip High Heels or Smooth-Sole Loafers:</strong> Limestone walkways and cave steps can be slick — wear comfortable gripped sneakers so you can explore effortlessly.</li>
                        <li><strong>Avoid School-Bus Peak (10:00–11:30):</strong> Arrive at 13:30 after the morning tour groups depart so we have the galleries and pathways almost entirely to ourselves.</li>
                    </ul>
                </div>
            </div>
            <div class="funnel-rating-bar">
                <strong>Funnel Checkpoint — Rate Activity #5:</strong>
                <div class="funnel-btn-group">
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(5, 'Ignite It 🔥', this)">Ignite It 🔥</button>
                    <button class="funnel-choice-btn active-choice" onclick="rateActivityFunnel(5, 'Soulful Gold 🌅', this)">Soulful Gold 🌅</button>
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(5, 'Playful Rivalry 🎭', this)">Playful Rivalry 🎭</button>
                </div>
            </div>
        </div>

        <!-- ======================= SLIDE 14 ======================= -->
        <div class="slide">
            <h1>Activity 6: Soweto Towers Leap &amp; Vilakazi Street Rhythm</h1>
            <div class="activity-meta-bar">
                <span class="meta-badge price-badge">Budget: R650 (For Two)</span>
                <span class="meta-badge">Location: Orlando Towers &amp; Vilakazi Street, Soweto</span>
                <span class="meta-badge vibe-badge">Vibe: Pure Courage &amp; Heritage Pulse</span>
            </div>
            <p><strong>The Narrative:</strong> When you date a woman with fire in her veins, you don't do lukewarm adventures. First, we ascend the iconic painted Orlando Cooling Towers where the boldest one in the relationship can take the 70m SCAD Freefall (or we both ride the open-air lift to the 100m suspension bridge view). Then we head straight to Vilakazi Street for smoky street-style tapas, cold drinks, and infectious township soul.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/14.png" alt="Vibrant colorful Orlando Towers in Soweto against a blue and gold sky with joyful couple" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Soweto Towers:</strong>
                        <span class="prompt-content">Dynamic wide-angle shot of a stylish couple standing beneath the colorful hand-painted murals of the Orlando Cooling Towers in Soweto Johannesburg, vibrant sunlit colours, energetic township atmosphere, photorealistic travel photography.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="highlight">
                <h3>How the R650 Budget Breaks Down</h3>
                <p>SCAD Freefall / Viewing Lift combo experience (~R260–R350 via local deal passes) plus R300 for shared Vilakazi Street platters and ice-cold refreshments.</p>
            </div>
        </div>

        <!-- ======================= SLIDE 15 ======================= -->
        <div class="slide">
            <h1>Activity 6 Playbook: Soweto Towers Secrets &amp; Pitfalls</h1>
            <p>How to balance high-altitude adrenaline with effortless street-side romance.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/15.png" alt="Couple enjoying vibrant outdoor dining and music on Vilakazi Street Soweto" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Vilakazi Street:</strong>
                        <span class="prompt-content">Warm candid photo of a couple sharing flame-grilled platter and cold drinks on an open-air balcony along Vilakazi Street Soweto in late afternoon sunshine, lively cultural street scene below, warm smiles.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="two-column">
                <div class="know-box">
                    <h3>✓ Everything to Know (For Romance)</h3>
                    <ul>
                        <li><strong>No-Pressure Courage Clause:</strong> If one jumps and one films from the viewing bridge, both still earn legendary status (and the jumper gets first pick of the platter).</li>
                        <li><strong>Balcony Seating on Vilakazi:</strong> Grab an upstairs balcony table so you can watch the street performers and vintage cars cruise past below.</li>
                    </ul>
                </div>
                <div class="avoid-box">
                    <h3>✗ Everything to Avoid (Pitfalls)</h3>
                    <ul>
                        <li><strong>Never Eat the Heavy Platter <em>Before</em> the 70m Drop:</strong> Conquer the towers first while your stomach is light; celebrate with the feast afterward!</li>
                        <li><strong>Watch the Wind Forecast:</strong> Tower jumping pauses during high gusts — check the morning wind report so we arrive when the bridge is wide open.</li>
                    </ul>
                </div>
            </div>
            <div class="funnel-rating-bar">
                <strong>Funnel Checkpoint — Rate Activity #6:</strong>
                <div class="funnel-btn-group">
                    <button class="funnel-choice-btn active-choice" onclick="rateActivityFunnel(6, 'Ignite It 🔥', this)">Ignite It 🔥</button>
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(6, 'Soulful Gold 🌅', this)">Soulful Gold 🌅</button>
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(6, 'Playful Rivalry 🎭', this)">Playful Rivalry 🎭</button>
                </div>
            </div>
        </div>

        <!-- ======================= SLIDE 16 ======================= -->
        <div class="slide">
            <h1>Activity 7: Scenic Horse Trail &amp; Secret Bush Picnic</h1>
            <div class="activity-meta-bar">
                <span class="meta-badge price-badge">Budget: R850 (For Two)</span>
                <span class="meta-badge">Location: Muldersdrift / Harties Trail Reserve</span>
                <span class="meta-badge vibe-badge">Vibe: Royal Poise &amp; Bushveld Romance</span>
            </div>
            <p><strong>The Narrative:</strong> Picture riding side-by-side on gentle, well-schooled horses along quiet bushveld footpaths where impala and zebra graze in the distance, before dismounting at a secluded riverside clearing where a private picnic blanket, cushions, and a chilled basket are waiting just for the two of us.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/16.png" alt="Romantic couple on horseback riding towards a secret bushveld picnic under acacia trees" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Horse Trail &amp; Picnic:</strong>
                        <span class="prompt-content">Romantic South African couple on two horses riding slowly along a sunlit bushveld trail toward a private luxury picnic setup with woven blankets, cushions, fruit, and sparkling wine under an umbrella thorn acacia tree, cinematic golden light.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="highlight">
                <h3>Why This Feels Like a Movie Scene</h3>
                <p>At R850 for the couples' Scenic Horse Trail &amp; Private Picnic package, it delivers R3,000-level safari lodge romance right on Gauteng's doorstep without breaking our R7,000 cap.</p>
            </div>
        </div>

        <!-- ======================= SLIDE 17 ======================= -->
        <div class="slide">
            <h1>Activity 7 Playbook: Horse Trail &amp; Picnic Secrets &amp; Pitfalls</h1>
            <p>How to make the ride effortless even if neither of us is a full-time jockey.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/17.png" alt="Cozy bushveld picnic blanket with woven patterns, strawberries, cheese board, and sparkling drinks" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Bush Picnic Spread:</strong>
                        <span class="prompt-content">Close-up of a romantic bushveld picnic on a warm geometric woven blanket under dappled acacia shade: artisanal cheeses, biltong, figs, strawberries, and two flutes of sparkling grape juice, warm natural photography.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="two-column">
                <div class="know-box">
                    <h3>✓ Everything to Know (For Romance)</h3>
                    <ul>
                        <li><strong>Request the "Calm Trail Veterans":</strong> Let the guide know we want relaxed walking horses so we can hold hands across the saddles and take photos safely.</li>
                        <li><strong>Bring a Portable Mini Speaker:</strong> Keep it tucked in your pocket for the private 45-minute picnic stop so our favourite songs play softly under the trees.</li>
                    </ul>
                </div>
                <div class="avoid-box">
                    <h3>✗ Everything to Avoid (Pitfalls)</h3>
                    <ul>
                        <li><strong>Never Wear Short Shorts in a Leather Saddle:</strong> Long jeans, leggings, or chinos prevent saddle chafe and keep you comfortable for the full trail.</li>
                        <li><strong>Avoid Flapping Hats Without a Chin Strap:</strong> A sudden gust can send a loose sunhat flying — causing your horse to side-step right when you're posing.</li>
                    </ul>
                </div>
            </div>
            <div class="funnel-rating-bar">
                <strong>Funnel Checkpoint — Rate Activity #7:</strong>
                <div class="funnel-btn-group">
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(7, 'Ignite It 🔥', this)">Ignite It 🔥</button>
                    <button class="funnel-choice-btn active-choice" onclick="rateActivityFunnel(7, 'Soulful Gold 🌅', this)">Soulful Gold 🌅</button>
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(7, 'Playful Rivalry 🎭', this)">Playful Rivalry 🎭</button>
                </div>
            </div>
        </div>

        <!-- ======================= SLIDE 18 ======================= -->
        <div class="slide">
            <h1>Activity 8: Victoria Yards Artisans &amp; Rooftop Sundowner Jazz</h1>
            <div class="activity-meta-bar">
                <span class="meta-badge price-badge">Budget: R380 (For Two)</span>
                <span class="meta-badge">Location: Lorentzville / Maboneng Precinct</span>
                <span class="meta-badge vibe-badge">Vibe: Woven Heritage, Art &amp; Brass Notes</span>
            </div>
            <p><strong>The Narrative:</strong> Built inside restored brick ateliers draped in vertical gardens, Victoria Yards is where Johannesburg's boldest painters, ceramicists, and textile weavers create magic. We wander through open studios admiring contemporary African beadwork, indigo dyes, and fine art, then head up for rooftop sundowners as live acoustic and jazz melodies drift over the eastern skyline.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/18.png" alt="Couple exploring red brick art studios and vertical gardens at Victoria Yards Johannesburg" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Victoria Yards:</strong>
                        <span class="prompt-content">Stylish couple strolling through Victoria Yards in Johannesburg, warm red-brick industrial buildings covered in lush green vertical gardens, African textile art and ceramics displayed in open studio doorways, warm afternoon sunlight, editorial lifestyle photo.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="heritage-proverb">
                "Art is the language the heart speaks when words are too small."
                <small>(Free studio walk + R380 for two craft gin sundowners, artisanal sorbet, and a small handmade keepsake.)</small>
            </div>
        </div>

        <!-- ======================= SLIDE 19 ======================= -->
        <div class="slide">
            <h1>Activity 8 Playbook: Victoria Yards Secrets &amp; Pitfalls</h1>
            <p>How to experience Johannesburg's most soulful creative sanctuary like insider collectors.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/19.png" alt="Couple enjoying craft gin sundowners and handmade beadwork keepsakes at Victoria Yards" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Sundowner Jazz &amp; Craft:</strong>
                        <span class="prompt-content">Close-up of two botanical gin cocktails garnished with rosemary and citrus on a sunlit terrace at Victoria Yards Johannesburg, handmade geometric beaded bracelet resting beside the glasses, warm golden-hour jazz ambiance, photorealistic.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="two-column">
                <div class="know-box">
                    <h3>✓ Everything to Know (For Romance)</h3>
                    <ul>
                        <li><strong>Pick a Shared Keepsake Under R150:</strong> Choose one small hand-thrown ceramic cup or beaded token together so our home carries a piece of the date forever.</li>
                        <li><strong>Follow the Fresh Sourdough Scent:</strong> Stop by the courtyard bakery &amp; sorbet stand around 15:30 before claiming our sundowner seats.</li>
                    </ul>
                </div>
                <div class="avoid-box">
                    <h3>✗ Everything to Avoid (Pitfalls)</h3>
                    <ul>
                        <li><strong>Don't Arrive After 16:30 for Studio Walks:</strong> Working artists begin locking their ateliers around 16:00 — arrive by 14:30 to see the makers in action.</li>
                        <li><strong>Never Rush the Makers:</strong> Ask the artists the story behind their patterns; the conversations inside those brick courtyards are pure gold.</li>
                    </ul>
                </div>
            </div>
            <div class="funnel-rating-bar">
                <strong>Funnel Checkpoint — Rate Activity #8:</strong>
                <div class="funnel-btn-group">
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(8, 'Ignite It 🔥', this)">Ignite It 🔥</button>
                    <button class="funnel-choice-btn active-choice" onclick="rateActivityFunnel(8, 'Soulful Gold 🌅', this)">Soulful Gold 🌅</button>
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(8, 'Playful Rivalry 🎭', this)">Playful Rivalry 🎭</button>
                </div>
            </div>
        </div>

        <!-- ======================= SLIDE 20 ======================= -->
        <div class="slide">
            <h1>Activity 9: Olifantsfontein 3D Forest Maze Rivalry &amp; Gelato</h1>
            <div class="activity-meta-bar">
                <span class="meta-badge price-badge">Budget: R280 (For Two)</span>
                <span class="meta-badge">Location: Olifantsfontein / Midrand Sanctuary</span>
                <span class="meta-badge vibe-badge">Vibe: Playful Rivalry &amp; Sweet Victory</span>
            </div>
            <p><strong>The Narrative:</strong> Time to test who actually has the better sense of direction when Google Maps is switched off! Hidden inside a lush forest sanctuary in Olifantsfontein, we enter a towering 3D timber-and-hedge maze with elevated bridges, secret corners, and riddle checkpoints — where the first one to reach the central lookout tower wins bragging rights and double-scoop artisanal gelato.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/20.png" alt="Playful couple racing through a sunlit 3D wooden and hedge forest maze in Gauteng" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>3D Forest Maze:</strong>
                        <span class="prompt-content">Joyful couple playfully teasing each other from two different wooden bridges inside a lush sunlit 3D forest maze in Gauteng South Africa, green trees and timber walkways, warm afternoon light, vibrant romantic adventure photography.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="highlight">
                <h3>The Winner-Takes-All Wager</h3>
                <p>R280 covers maze entry for two plus artisanal ice-cream cones at the garden courtyard afterward — and the runner-up officially owes a 15-minute shoulder and foot massage that evening.</p>
            </div>
        </div>

        <!-- ======================= SLIDE 21 ======================= -->
        <div class="slide">
            <h1>Activity 9 Playbook: 3D Maze Secrets &amp; Pitfalls</h1>
            <p>How to turn a brain-teasing forest labyrinth into non-stop laughter.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/21.png" alt="Couple celebrating with artisanal gelato cones in a sunny garden courtyard after completing the maze" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Victory Gelato:</strong>
                        <span class="prompt-content">Close-up of a happy Black South African couple clinking two artisanal waffle cones of pistachio and berry gelato in a sunlit garden courtyard surrounded by greenery, laughing together, warm lifestyle photography.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="two-column">
                <div class="know-box">
                    <h3>✓ Everything to Know (For Romance)</h3>
                    <ul>
                        <li><strong>Start with a 60-Second Head Start Duel:</strong> Split up at the second bridge for a 10-minute chase before teaming up to conquer the final tower together.</li>
                        <li><strong>Sealed Cold Water in the Daypack:</strong> Navigating timber bridges in the Highveld sun works up a real thirst before the gelato reward.</li>
                    </ul>
                </div>
                <div class="avoid-box">
                    <h3>✗ Everything to Avoid (Pitfalls)</h3>
                    <ul>
                        <li><strong>No Peeking Over the Timber Slats:</strong> Cheating the maze paths earns an automatic 5-minute tickle penalty at the finish line.</li>
                        <li><strong>Avoid Midday Glare (12:00–13:30):</strong> Hit the maze at 09:30 or 15:00 when the forest canopy casts cool, dappled shade across the walkways.</li>
                    </ul>
                </div>
            </div>
            <div class="funnel-rating-bar">
                <strong>Funnel Checkpoint — Rate Activity #9:</strong>
                <div class="funnel-btn-group">
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(9, 'Ignite It 🔥', this)">Ignite It 🔥</button>
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(9, 'Soulful Gold 🌅', this)">Soulful Gold 🌅</button>
                    <button class="funnel-choice-btn active-choice" onclick="rateActivityFunnel(9, 'Playful Rivalry 🎭', this)">Playful Rivalry 🎭</button>
                </div>
            </div>
        </div>

        <!-- ======================= SLIDE 22 ======================= -->
        <div class="slide">
            <h1>Activity 10: Northcliff Ridge Golden-Hour &amp; Stargazing Boot-Picnic</h1>
            <div class="activity-meta-bar">
                <span class="meta-badge price-badge">Budget: R200 (For Two)</span>
                <span class="meta-badge">Location: Northcliff Eco-Park Ridge, Johannesburg</span>
                <span class="meta-badge vibe-badge">Vibe: 360° Horizon, Velvet Skies &amp; Padkos</span>
            </div>
            <p><strong>The Narrative:</strong> The most romantic finale doesn't need a waiter — it just needs the second-highest natural ridge in Johannesburg, a warm patterned blanket in the open car boot, a thermos of spiced hot chocolate, and the entire city glittering from Sandton to the Magaliesberg like a sea of fallen stars.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/22.png" alt="Romantic couple sitting on a cozy blanket overlooking the glowing Johannesburg skyline at twilight from Northcliff Ridge" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Northcliff Ridge Sunset:</strong>
                        <span class="prompt-content">Romantic couple wrapped in a warm Southern African geometric patterned blanket sitting on the rocky crest of Northcliff Ridge at twilight, panoramic view of Johannesburg city lights sparkling below under a deep crimson and indigo sunset sky, thermos and snacks beside them, cinematic 8k.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="heritage-proverb">
                "When the city lights bow beneath your feet, the only thing brighter is the person beside you."
                <small>(R200 covers our gourmet padkos basket: warm vetkoek/croissants, spiced hot chocolate, and dark chocolate strawberries.)</small>
            </div>
        </div>

        <!-- ======================= SLIDE 23 ======================= -->
        <div class="slide">
            <h1>Activity 10 Playbook: Northcliff Ridge Secrets &amp; Pitfalls</h1>
            <p>How to pull off an effortless, five-star hilltop sunset date for R200.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/23.png" alt="Cozy car boot picnic setup with fairy lights, warm mugs, and panoramic city twilight view" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Boot Picnic Glow:</strong>
                        <span class="prompt-content">Cozy romantic car-boot picnic overlooking city lights at dusk, battery fairy lights strung inside the open hatch, plush cushions, woven terracotta blanket, two steaming mugs of hot chocolate, and chocolate-dipped strawberries, warm bokeh.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="two-column">
                <div class="know-box">
                    <h3>✓ Everything to Know (For Romance)</h3>
                    <ul>
                        <li><strong>Pack a Thick Fleece &amp; Fairy String Lights:</strong> A R30 battery fairy-light strand in the boot turns a simple viewpoint into an instant private lounge.</li>
                        <li><strong>Arrive 35 Minutes Before Sunset:</strong> Watch the sky shift from molten gold to deep magenta before the northern suburbs light up like diamonds.</li>
                    </ul>
                </div>
                <div class="avoid-box">
                    <h3>✗ Everything to Avoid (Pitfalls)</h3>
                    <ul>
                        <li><strong>Don't Stay Past the Gate Closing Time:</strong> Keep an eye on the eco-park dusk closing hour so we glide out smoothly right after twilight.</li>
                        <li><strong>Never Forget Paper Napkins &amp; Warm Mugs:</strong> Ridge breezes will cool open paper cups in minutes — bring insulated travel mugs to keep drinks piping hot.</li>
                    </ul>
                </div>
            </div>
            <div class="funnel-rating-bar">
                <strong>Funnel Checkpoint — Rate Activity #10:</strong>
                <div class="funnel-btn-group">
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(10, 'Ignite It 🔥', this)">Ignite It 🔥</button>
                    <button class="funnel-choice-btn active-choice" onclick="rateActivityFunnel(10, 'Soulful Gold 🌅', this)">Soulful Gold 🌅</button>
                    <button class="funnel-choice-btn" onclick="rateActivityFunnel(10, 'Playful Rivalry 🎭', this)">Playful Rivalry 🎭</button>
                </div>
            </div>
        </div>

        <!-- ======================= SLIDE 24 ======================= -->
        <div class="slide">
            <h1>Funnel Step 2: Live R7,000 Smart Holiday Budget Planner</h1>
            <p>Click any experience card below to toggle it in or out of our holiday lineup, or slide the Spontaneous Spoil Buffer to customize our exact spend under <strong>R7,000</strong>.</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/24.png" alt="Flatlay of South African holiday planning notebook, sunglasses, car keys, and wine glasses" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Smart Planner:</strong>
                        <span class="prompt-content">Warm editorial flatlay of a luxury leather travel journal open on a wooden table with a gold pen, sunglasses, polaroid photos of Gauteng adventures, and two glasses of rosé in warm sunlight.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>
            <div class="interactive-lab">
                <div class="lab-title">Interactive R7,000 Gauteng Funnel Calculator (Click Cards to Toggle)</div>
                <div class="budget-grid" id="budgetInteractiveGrid"></div>

                <div style="margin-top: 18px; padding: 14px; background: var(--bg-card); border-radius: var(--radius-md); border: 1px solid var(--border-medium);">
                    <label for="spoilBufferSlider" style="font-weight: 700; color: var(--primary-dark); display: flex; justify-content: space-between;">
                        <span>Spontaneous Spoil, Gelato &amp; Padkos Buffer:</span>
                        <span id="spoilBufferVal" style="color: var(--primary-color); font-weight: 800;">R350</span>
                    </label>
                    <input type="range" id="spoilBufferSlider" min="0" max="1000" step="50" value="350" style="width: 100%; margin-top: 8px; accent-color: var(--primary-color);" oninput="updateSpoilBuffer(this.value)">
                </div>

                <div class="budget-meter-wrapper">
                    <div class="budget-meter-fill" id="budgetMeterFill"></div>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; font-size: 18px; font-weight: 800;">
                    <div>Total Planned Spend: <span id="calcGrandTotal" style="color: var(--primary-color);">R7,000</span> / R7,000</div>
                    <div id="calcRemaining" style="color: var(--accent-green);">R0 Under Cap</div>
                </div>
                <p id="budgetStatusMessage" style="margin-top: 10px; margin-bottom: 0; font-size: 14px;"></p>
            </div>
        </div>

        <!-- ======================= SLIDE 25 ======================= -->
        <div class="slide">
            <h1>Funnel Finale: Couple Chemistry Quiz &amp; Official Verdict</h1>
            <p>Lock in your answers to these 4 playful holiday rules to generate our official Gauteng Couple Playbook certificate!</p>
            <div class="image-placeholder-card">
                <img src="assets/images/holiday-activities/25.png" alt="Romantic South African couple toasting under sparkling fairy lights celebrating their holiday itinerary" class="slide-image">
                <div class="prompt-box">
                    <div class="prompt-box-text">
                        <strong>Finale Toast:</strong>
                        <span class="prompt-content">Celebratory portrait of a glowing Black South African couple clinking champagne glasses under warm golden fairy lights at night, joyful laughter, fiery romance and deep affection, cinematic 8k photography.</span>
                    </div>
                    <button class="copy-prompt-btn" onclick="copyImagePrompt(this)">Copy Prompt</button>
                </div>
            </div>

            <div class="quiz-container">
                <div class="question" id="q1">
                    <h4>1. On our flagship dinner night at Mr. George, Turn 'n Tender, or Tiger's Milk, what is our non-negotiable "Two-Fork" rule?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">Order a signature shared starter and two different mains so we can taste-swap halfway through</li>
                        <li data-answer="wrong">Show up at 20:30 on a Friday without a booking and hope for the best</li>
                        <li data-answer="wrong">Sit right underneath the loudest bar speaker</li>
                    </ul>
                </div>

                <div class="question" id="q2">
                    <h4>2. When we hit the red-earth quad trails in Cullinan, who rides point for clean air and pace-setting power?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">The queen leads the trail up front (with a warm patterned bandana under the helmet!)</li>
                        <li data-answer="wrong">Whoever wore box-fresh white suede sneakers</li>
                        <li data-answer="wrong">Tailgate 1 metre behind through every mud puddle</li>
                    </ul>
                </div>

                <div class="question" id="q3">
                    <h4>3. During the Oakdene Sip &amp; Paint portrait duel, how do you guarantee you still get invited back home afterward?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">Paint her regal crown, glowing aura, and write a secret love note on the back of the canvas</li>
                        <li data-answer="wrong">Dip your acrylic paintbrush straight into her glass of Merlot</li>
                        <li data-answer="wrong">Attempt experimental abstract cubism on her cheekbones</li>
                    </ul>
                </div>

                <div class="question" id="q4">
                    <h4>4. What is the official prize for winning the Olifantsfontein 3D Forest Maze race?</h4>
                    <ul class="quiz-options">
                        <li data-answer="correct">Double-scoop artisanal gelato plus a 15-minute shoulder &amp; foot massage from the runner-up</li>
                        <li data-answer="wrong">A handshake and a spreadsheet</li>
                        <li data-answer="wrong">Walking home from Midrand</li>
                    </ul>
                </div>

                <button class="submit-btn" onclick="submitHolidayQuiz()">Lock In Our Holiday Playbook ✨</button>
                <div id="quiz-final-result" class="quiz-result" style="display: none;"></div>
            </div>

            <div class="highlight" style="margin-top: 24px;">
                <h3>Our Official Summer Holiday Funnel Summary</h3>
                <div id="finalFunnelSummaryBox"></div>
            </div>
        </div>
    </div>

    <div class="navigation">
        <button class="nav-btn" id="prevBtn" onclick="changeSlide(-1)">← Previous</button>
        <button class="nav-btn" onclick="window.location.href='home.php'">🏠 Home</button>
        <button class="nav-btn" id="nextBtn" onclick="changeSlide(1)">Next →</button>
        <button class="print-btn" id="printBtn" onclick="window.print()" style="display: none;">🖨 Print Playbook</button>
    </div>

    <script src="js/holiday-activities.js"></script>
</body>
</html>