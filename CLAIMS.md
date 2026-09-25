# Claims register

Every figure and named client on the site, and whether it can be defended.

This exists because the success stories page is nothing but claims, and a
single fabricated number on it makes the other twenty unreadable. A prospect
who checks one figure and finds it invented does not check the second — they
leave.

**Nothing in the "Needs confirmation" or "Not published" tables may go live
until the row says who confirmed it and when.**

---

## Published, and defensible

| Claim | Where | Basis |
| ----- | ----- | ----- |
| Working with businesses since **2009** | Home, audit, call, stories | Teqdeft trading history |
| **200+** clients served | Home, audit, call, stories | Teqdeft client count |
| **3** countries these stories come from | Stories | Derivable from the page: UAE, USA, Netherlands |
| Studio Ubique is **our partner** | Stories | Kulwant is listed on their site as Partner, CEO. The disclosure stays — it is checkable in ninety seconds and reads far worse if a prospect finds it themselves |

---

## Needs confirmation before launch

| Claim | Where | What is needed |
| ----- | ----- | -------------- |
| Pine Tree Lane: **4× organic traffic in three months** | Home, stories, story page | The analytics export, the start and end dates, and the client's sign-off to publish. This figure has been in the copy through several rounds and was never flagged — but it has also never been sourced |
| **Five more stories awaiting sign-off** | Stories | Is it five? A number this specific is checkable against the case studies that eventually appear |
| **Case study photographs** | Home, stories | Three photos taken from the clients' own websites on 9 Sep 2026: Pine Tree Lane's kitchen (`kitchen-villa-2.png`, their homepage hero), SweetRush's strategic-consulting image (their Webflow CDN), and Studio Ubique's team photo (their Open Graph image). They are the clients' property. Each needs the client's okay to appear on rankinai.com before launch — an email is enough, keep it. Studio Ubique is the partner and will be easy; Pine Tree Lane is a client and also easy; SweetRush is the one to actually ask, and note their image looks like licensed stock, so their permission may not be theirs to give |
| **Pine Tree Lane's 4× is corroborated, partly** | — | Studio Ubique's own site publishes "4x organic traffic grow in 3 months" for the same project (studioubique.com/work/custom-b2b-wordpress-website/). That is the partner's claim, not the client's data, so it moves the 4× from "never sourced" to "sourced to the partner". The analytics export is still the thing to get |

---

## Contradictions between pages

Found while building the questions page. A prospect who reads two pages and
gets two answers stops believing both.

| Claim | Page A | Page B | Status |
| ----- | ------ | ------ | ------ |
| Which three countries | Home and success stories: Dubai **UAE**, San Francisco **USA**, Zwolle **NL** | Questions canvas: "clients are in the UAE, **the UK** and the Netherlands" | The questions page follows the published stories — UAE, USA, Netherlands. **If the client base really does include the UK, the sentence needs to separate "where clients are" from "where the three published stories are".** Confirm which |
| "Foundation" | Home: **Foundation Fix** is the one-off audit, fixes and first strategy | Pricing: **Foundation** is the $750/month entry package | Two different things, one word, on the two pages a buyer compares hardest. Rename one. The questions page avoids it entirely and says "the one-time $500 setup" |
| **The one-off price** | Pricing and questions: a **$500 setup**, waived on a six-month commitment | How we work canvas: **Foundation Fix, $2,400**, four to six weeks | **The most serious contradiction on the site.** Two prices for the buying decision people check first. They may be two different things that got conflated — $500 is described as "month-one fixes, tracking and CRM", $2,400 as "learn, audit and strategy over four to six weeks" — but nothing on the site distinguishes them. `how-we-work.php` publishes neither and points at the pricing page, which is what that canvas's own copy instructs. **Resolve before launch** |

---

## Invented clients

The service canvases each carried a case study. Four name a company that
appears nowhere else on the site, with full results attached:

| Invented client | Canvas | Figures attached |
| --------------- | ------ | ---------------- |
| Westgate Fit-Out, Birmingham | Paid media | £6,400/month across 11 campaigns, spend down a third, enquiries up 40%, $54 per enquiry, $2,900 per contract |
| Harlow & Sons Joinery, Bristol | Web and conversion | 1.1% to 3.8% conversion, 71% abandoning one field, nine extra enquiries a month |
| Alderman Kitchens, Auckland | Reputation | 3.9 to 4.7 average, 84 reviews in 90 days, profile calls more than doubled |
| (unnamed) | CRM and automation | 4h to 20m first reply, 58% became meetings, −38% no-shows |
| (unnamed) | Construction industry | +41% average project value, 3 → 14 enquiries a month, 27% tender win rate from 15% |
| Okonkwo Studio, Lagos | Architecture industry | 3.1× client enquiries, 3 → 14 enquiries a month, +22% average fee |
| Castell Search, Cardiff | Recruitment industry | 6 → 14 inbound briefs a month, 26% lapsed clients reactivated |
| Northfield People, Leeds | HR outsourcing industry | 3 → 14 enquiries a month, +34% average contract value, 94% retention |
| Haldane & Co, Manchester | Accounting industry | 3 → 14 enquiries a month, +22% average fee, "1,340 reviews collected for clients" |
| Meridian IT, Dublin | IT consulting industry | 3 → 14 enquiries a month, +34% average contract value, 31% win rate from 18% |
| (unnamed) | Legal industry | +28% average matter value, 3 → 14 enquiries a month, 44% enquiry to engagement |
| Thirlby Partners, Singapore | Business consulting | 4 → 15 inbound enquiries, +37% average engagement value, 46% not referred |

Three of the canvases were at least honest about it — the CRM, construction
and legal case blocks all read *"the shape of the story we need"* — with
invented figures attached anyway.

**The figures repeat across canvases, which is how you can tell.** "3 → 14
enquiries a month" appears on five different pages for five different
industries. "+34% average contract value" appears on two. "+22% average fee"
appears on two. And the accounting case carries "1,340 reviews collected for
clients" — a reputation-service number pasted into a case study about tax
work. These are not drafts of real results; they are placeholder text that
happens to read like finished copy.

Note that Harlow & Sons carries the same 1.1% → 3.8% figure the About canvas
credited to an invented member of staff. The same fabricated result was
placed on two different pages, attached to two different fictions.

**None of it is published.** Three of those service pages show a block saying
the story is with the client, linking to the three real ones. Content and
creative uses Pine Tree Lane, which is real, and paid media now does too.

### A service we cannot deliver, and a client project we did not do

RankinAI works from India for clients in the US, the UK and other
English-speaking markets. A photo shoot is not something the team can turn up
and do. The site said otherwise in three different registers, and the worst of
them was not marketing copy but a statement of fact about a named client.

**Stated as work already done.** Three pages said we photographed Pine Tree
Lane's factory and showroom: their story page listed "Photographed the
making." as one of the four moves, and both `/content/` and
`/interior-design/` repeated it in the story block. This is the same class of
problem as an invented case study. It is a false statement about a real
client's project, the client can read it, and it is trivially checkable.
Removed. Their own work going onto the site is still described, because that
did happen, but the pictures are no longer credited to us.

**Sold as a service.** "Photography direction" was one of five items on
`/content/`, "Photography art direction" was on the homepage service list, and
the process step said work was "written, shot and edited". `/terms/` granted
the client ownership of "the copy, photography and video we produce for you".
All removed.

**Built into a timeline.** The trade pages costed it into the month:
`/interior-design/` week one was "a morning in your workshop with a
photographer", `/construction/` the same on site, and a monthly deliverable of
"project photographed and written up". Rewritten around work we do.

**What deliberately survives.** Advice that a client's own photography matters
is true and stays, because it is about their market rather than our service
list. `/interior-design/` still opens "Nobody chooses a bespoke kitchen from a
stock photograph", and `/architecture/` still says their images are usually
excellent and the words are not. Both pages now answer the obvious follow-up
plainly: we do not shoot, you commission it locally, you own it. `/content/`
carries the same answer as a question in its own right.

| Needed | For |
| ------ | --- |
| Confirmation that nothing else was sold on a shoot basis to an existing client | Any live proposal or contract |

### The industry page calculation, line by line

`/interior-design/` publishes a worked sum ending in a money figure. Every row
is tagged on the page itself, and this is the register behind it.

| Row | Value | Status |
| --- | ----- | ------ |
| Searches a month in London, five terms | 2,700 | **Sourced.** Live Ahrefs pull, September 2026: fitted wardrobes 900, interior designer 900, bespoke kitchens 400, fitted kitchens 350, bespoke joinery 150 |
| What position three typically takes | 10% | **Sourced.** Average across six published CTR studies. Conservative: a single position, not the top three combined |
| Visitors who enquire | 3% | **Example.** Marked as one on the page |
| Enquiries that become a job | 25% | **Example.** Marked as one on the page |
| Average job value | £18,000 | **Example.** Marked as one on the page |
| Result | £437k a year | Arithmetic on the five above. 2,700 × 0.10 × 0.03 × 0.25 × 18,000 × 12 = 437,400 |

**Why the three examples are not sourced.** Nobody publishes close rates or
average job values for interior design studios in a form worth citing. Rather
than dress a guess as a benchmark, those rows say "Example. Put your own in",
sit in muted type, and the total's caption repeats that the figures are
illustrative. The two rows that *are* ours are the two that are sourced, which
is the point the section makes.

**The risk to watch.** A reader can still quote £437k back at us. The defence
is that the page never claims it: the copy says "an example studio's", each
row is labelled, and the total caption says "yours will differ". If that
labelling is ever weakened, the figure becomes a claim and would need
withdrawing.

| Needed | For |
| ------ | --- |
| A decision on whether London is the right example city for a page selling into the US and the UK | `/interior-design/`, the calculation |
| The Ahrefs pull re-run before launch, since volumes move | Same |

### Studio Ubique on the reputation page

Added as the case study on `/reputation/`. Two things had to come with it.

**The disclosure.** RankinAI's founder is listed on Studio Ubique's own site
as Partner and CEO. Everywhere else the name appears, the label "Digital
agency, our partner" appears with it, and the story page states it in the
hero rather than a footnote. The service page block carries it in the meta
chips and again in the first sentence. If someone tidies either one away,
the page presents a related party as an arm's-length client.

**They are not a reputation client, as far as anything published says.**
Their story page lists two services against the engagement, search and paid
media. So the block describes the problem, which is documented, and claims no
reputation work. It fits the page because their situation is the one the
headline names: clients who rated them and never said so publicly. But if
review collection and profile work are not actually running for them, this
block is arguing by analogy on a page a buyer will read as a case study.

| Needed | For |
| ------ | --- |
| Confirmation that reputation work is actually running for Studio Ubique, or a decision to leave the block as a description of the problem | `/reputation/`, the story block |
| The headline figure and period, sourced and signed off | Same, and the success stories page |

### Every service page now runs one of two clients

| Page | Client | Figure |
| ---- | ------ | ------ |
| Search and AI visibility | Pine Tree Lane | 4x organic traffic in three months |
| Content and creative | Pine Tree Lane | 4x organic traffic in three months |
| Paid media | Pine Tree Lane | pending |
| Web and conversion | Pine Tree Lane | pending |
| Reputation | Studio Ubique | pending |
| CRM and automation | Studio Ubique | pending |

Two clients across six pages, one of them a related party, and four of the six
carrying no number. The success stories page is titled "named clients, real
numbers, real dates". These six pages currently deliver two names, one number
and no dates, and a buyer who opens three service pages sees the pattern.

Nothing here is dishonest. Each block is true, each pending marker says so,
and the related-party disclosure travels with the name. The problem is
cumulative rather than local: the more pages the same two clients appear on,
the more the roster looks like the whole roster.

Two things close it, and both are already open items above: SweetRush sign-off
would add a third name, and getting any one of the four pending figures
sourced would stop a run of four blank metrics.

The CRM block is the thinnest of the six. Studio Ubique's published story
documents their lead flow and names search and paid as the services. It
documents nothing about how enquiries were handled after they arrived, so
that block states their position and makes a general point about referrals
rather than describing work. It reads honestly, but it is a case study slot
filled with context.

### One client is now the case study on four service pages

Pine Tree Lane appears on `/ai-visibility/`, `/content/`, `/paid-media/` and
`/websites/`. Each block describes a different piece of work, which is honest
and normal for a client on a full engagement. Two things follow from it that
are worth deciding on rather than discovering later.

**It reads thin.** A visitor comparing two or three services sees the same
firm in Dubai four times. The impression is not "one client, four services",
it is "one client". The other four service pages still carry the awaiting
sign-off block, which sharpens the effect. The fix is not to remove Pine Tree
Lane, it is to get SweetRush and Studio Ubique sign-off so the service pages
can draw from three names rather than one.

**Whose work was the website?** `/websites/` now says "we rebuilt the pages".
Studio Ubique publishes the same project as their own custom B2B WordPress
build. If the site itself was the partner's and RankinAI's part was the
search, content and technical work, that sentence overstates it, and the
partner is the one who would notice. This needs settling before launch.

| Needed | For |
| ------ | --- |
| Which parts of the Pine Tree Lane site were RankinAI's and which were Studio Ubique's | `/websites/`, and the "rebuilt the pages" wording wherever it appears |
| Conversion figures for the site, with the period, and sign-off | `/websites/`, the story block |

### Pine Tree Lane on the paid media page

Added on Kulwant's word that RankinAI runs their paid campaign as well as
their search work. What the block states is the engagement, not a result: who
they are, that we run the ads, and that every enquiry is tracked back to its
campaign. The headline figure renders as the pending marker the success
stories page already uses, and the copy says outright that the numbers are
the client's to release.

Two things were deliberately kept off it. The **4x organic traffic** figure
stays on the search page: on a paid media page it would read as something the
advertising produced, which is the same misattribution this file exists to
catch. And the link to their story page is labelled "Read the Pine Tree Lane
story" rather than "Read the full story", because the story behind it is
about the search work and the other label would promise ad figures that are
not there.

| Needed | For |
| ------ | --- |
| A figure for the ad account, with the period it covers, and the client's sign-off to publish it | `paid-media.php`, the story block |
| Confirmation they are happy to be named on a second service page | Same |

Naming a client you do not have is a different order of problem from an
optimistic percentage. It is a false statement about a third party, it is
checkable, and it is the kind of thing that ends a relationship with a real
client who reads it.

| Needed | For |
| ------ | --- |
| One signed-off case per service, or leave the pending block | `paid-media.php`, `websites.php`, `reputation.php`, `crm.php` |
| Same, per industry | `construction.php`, `architecture.php` |

Every industry canvas carried a client-count stat: 34 design and joinery, 41
construction and trade, 29 design and built-environment, 31 recruitment, 19
HR and payroll, 38 professional services, 26 IT and MSP, 23 legal and
professional, 17 consulting. Nine totals for overlapping categories — a firm
could sit in three of them at once — summing to well past the 200+ figure
used everywhere else. None sourced. All dropped.

Also dropped: a made-up hero stat on every service page — "$8.6M ad spend
managed", "300+ case studies written", "140+ sites built", "12,400 reviews
collected", "90+ follow-up systems". Each page now shows the two figures that
are real: 200+ clients, since 2009.

---

## An invented testimonial

The Pine Tree Lane story canvas carries a pull quote:

> "We had spent nine years telling people we make everything ourselves. The
> difference was letting someone photograph it and write it down properly.
> The enquiries we get now already know what we do before they call."
> — **Rami Fakhoury, Founder, Pine Tree Lane**

Pine Tree Lane appears to be a real client. Whether Rami Fakhoury is the real
founder, and whether he said any of that, is not something the design canvas
can establish — and the same canvas invented figures two lines above it.

A fabricated testimonial attributed to a named person at a named company is
worse than an invented statistic. It is a false statement *about a real
person*, it is misleading advertising in most jurisdictions, and the client
themselves is the one most likely to find it.

**Not published.** The story page shows a marked slot where the quote goes.

| Needed | For |
| ------ | --- |
| The client's actual words, and their written sign-off to publish them with their name | `success-stories-pine-tree-lane.php` |

---

## Invented people — the most serious thing on this list

The About design canvas names four members of staff:

> Yusuf Rahman, founder and managing director · Amira Haddad, head of search
> and AI visibility · Dev Menon, head of web and conversion · Sofie Bakker,
> head of content and reputation

**None of them exist, and one of them contradicts the site.** The call page
already says, correctly, that the founder is **Kulwant Singh**, running
digital marketing through Teqdeft since 2009. The canvas invents a different
founder for the same company.

Two of the invented people also carry invented work:

- "Amira Haddad took Pine Tree Lane to four times organic traffic in three
  months" — attributes a real client result to a person who does not exist.
- "Dev Menon rebuilt the enquiry flow that lifted a fit-out client from 1.1%
  to 3.8% conversion" — a metric that appears nowhere else and has no source.

Fabricated staff on an About page is not the same class of problem as an
optimistic percentage. It is checkable in one LinkedIn search, it is the
page a prospect reads *before* deciding whether to trust the numbers, and
being caught inventing colleagues would end the conversation.

**None of it is in the markup.** The page publishes Kulwant, who is real,
and leaves three clearly marked slots for the actual people. The invented
1.1% → 3.8% figure is not published anywhere.

| Needed | For |
| ------ | --- |
| Real names, roles and one line each for the three other leads | `about.php`, "Who you would work with" |
| A portrait for each, plain background | Same. The canvas is right that anonymous roles undercut the point |

---

## Unconfirmed, and the canvas says so itself

The About and Contact canvases both carry the note *"office details go in
below once you confirm what to publish."* Taking them at their word:

| Claim | Where | Note |
| ----- | ----- | ---- |
| Unit 1402, One Central, Dubai World Trade Centre | About, Contact | Publish only if this is the registered trading address |
| 3rd Floor, 12 Kruisstraat, 8011 Zwolle | About, Contact | As above |
| Both offices share one phone number (+971 4 501 8820) | About, Contact | Almost certainly a canvas placeholder. A Dubai number on a Netherlands office reads as a virtual office |
| Two open roles: senior SEO specialist, conversion designer | About, careers | Are you actually hiring? A careers section listing roles that do not exist wastes applicants' time and is checkable |

---

## Not published — awaiting a real figure

These were invented during copywriting. They are **not** in the markup; the
page shows an "awaiting sign-off" state instead, which the design's own copy
already accounts for: *"Where we do not yet have permission to publish a
number, we have left the space empty rather than filled it with an adjective."*

| Was | Where it would go | Replace with |
| --- | ----------------- | ------------ |
| SweetRush: 3.2× inbound enquiries in five months | Stories, story 02 | A real figure with a real period, or leave the pending state |
| Studio Ubique: +58% qualified briefs in four months | Stories, story 03 | As above |
| 62% clients retained beyond five years | Stories, hero stat bar | The retention calculation, or drop the stat — three stats read fine |
| Pine Tree Lane: "38 keywords in the top three", "11 enquiries a month, up from 2", months-to-first-result | Service pages, the story block | Came from the service canvases. None appears anywhere else and none has a source. The story block publishes only the headline 4× |
| "$180" / "$620" / "$520" cost-per-enquiry benchmarks | Industry pages, "what good looks like" | Presented as averages measured across a client base. The section is now framed as targets we work to, and the money figure is left to be set from the client's own audit |
| "A salary, tools and training — $4,200 a month" | Service pages, the alternatives table | A salary benchmark stated as a bare number reads as researched. Cite a source, or keep it as a range |
| "Twenty-four people, across six disciplines" | Questions, "How big is the team?" | The real headcount. It came from the design canvas, not from you. The answer currently reads without a number and carries an editor note that never reaches the structured data. Add the figure to the answer and delete the third array element |

To publish one: replace the `.metric--pending` block with the same markup the
Pine Tree Lane metric uses, and move the row up into the table above.

---

## The rule this page sets for itself

Section 03 of the stories page says:

> Every figure has a period attached. Four times in three months. If a number
> on this page has no timeframe next to it, treat it as marketing rather than
> evidence — including ours.

That sentence is an invitation to audit us. It is worth keeping, and it is
only worth keeping if every figure on the site can survive the audit.

---

## The four levers section (industry pages, section 06)

Replaced "What changes", which split outcomes by timing. The new section
names the only four numbers between a search and a signed job and says which
services move each one. Every claim in it is checkable:

| Claim | Where it comes from |
| ----- | ------------------- |
| The four numbers are the same four the calculation in section 03 multiplies | True by construction: searches × click share × enquiry rate × close rate × job value |
| "Move each one by a fifth and the channel is worth roughly double" | Arithmetic. 1.2 ^ 4 = 2.07. Not a client result and not presented as one |
| "First movement in weeks, the real change in three to six months" (lever 01) | Matches /how-we-work/, which already publishes "search and AI visibility take three to six months" |
| "Weeks" (lever 02) | Matches /how-we-work/ month 2: "technical fixes and the cheap wins first, often visible within weeks" |
| "Weeks, then a slow climb" (lever 03) | Matches the /reputation/ answer: "profile corrections move things in weeks. A rating average takes longer, because it is arithmetic" |
| "Over the year" (lever 04) | Deliberately the vaguest of the four, because nothing on the site measures average job value yet |

**Rule for the other eight industry pages:** the four levers stay the same,
the sentences inside them change per trade, and the timings are copied from
/how-we-work/ rather than shortened to suit the page.

---

## Construction page, converted 21 Sep 2026

| Figure | Source | Verified |
| ------ | ------ | -------- |
| 61% of B2B buyers prefer a rep-free buying experience | Gartner press release, 25 June 2025, survey of 632 B2B buyers Aug to Sep 2024 | Yes, read directly from gartner.com |
| 69% report inconsistencies between a supplier's website and its sellers | Same release | Yes |
| 73% actively avoid suppliers who send irrelevant outreach | Same release | Yes |
| 2,250 searches a month, London, five construction terms | Live Ahrefs pull, September 2026: construction companies london 1,100, office fit out companies london 600, commercial fit out companies london 300, design and build contractor london 150, main contractor london 100 | Yes |
| Position three takes 10% | Average of six published CTR studies, same figure as the interior design page | Carried over |
| 2% enquiry rate, 15% win rate, £120,000 contract value | Nothing published for this trade. Marked "Example. Put your own in" on every row | Illustrative, labelled |
| £970k result | 2,250 x 10% x 2% x 15% x £120,000 x 12 = £972,000 | Arithmetic |

Deliberately **not** on the page: "41 construction and trade clients", "+41%
average project value", "3 to 14 enquiries a month", "27% tender win rate from
15%". All four came from the design canvas, none is published, and 'story' is
left null until a contractor signs one off.

One figure the page does not carry and probably should, once a construction
source exists: anything about AI assistants. The AI argument is made in the
channels and services sections instead of by a borrowed statistic, because the
available AI adoption figures are about B2B software buyers rather than people
who hire contractors.

---

## Architecture page, converted 21 Sep 2026

| Figure | Source | Verified |
| ------ | ------ | -------- |
| 87% of planning decisions in England granted | MHCLG, "Planning applications in England: January to March 2026", published 19 June 2026, section 3.3 | Yes, read directly from gov.uk |
| 19% of major applications decided inside the statutory 13 weeks | Same release, section 3.8 | Yes |
| 81% grant rate in London against 90% in the South West | Same release, regional figures | Yes |
| 2,000 searches a month, London, five architecture terms | Live Ahrefs pull, September 2026: architects london 1,000, residential architects london 400, loft conversion architect london 250, architecture firms london 200, commercial architects london 150 | Yes |
| Position three takes 10% | Average of six published CTR studies, same figure as the other industry pages | Carried over |
| 3% enquiry rate, 20% win rate, £18,000 fee | Nothing published for this trade. Marked "Example. Put your own in" on every row | Illustrative, labelled |
| £259k result | 2,000 x 10% x 3% x 20% x £18,000 x 12 = £259,200 | Arithmetic |

Deliberately **not** on the page: "29 design and built-environment clients",
and the whole Okonkwo Studio case, a fifth invented client carrying "3.1x
client enquiries", "3 to 14 enquiries a month" and "+22% average fee per
commission". 'story' is left null.

**Why planning statistics rather than marketing research:** the obvious
alternative was to reuse the BrightLocal consumer figures from the interior
design page or the Gartner B2B figures from the construction page. Both would
have been defensible and both would have read as padding to anyone who visited
two industry pages. MHCLG publishes planning decisions quarterly, the figures
are official statistics, and planning is what this trade's clients are actually
anxious about. The RIBA "Working with Architects" survey was considered and
rejected: it is from 2016 and too old to put on a 2026 page.

**Re-run before launch:** the MHCLG release is quarterly, so the 87%, 19% and
81% will move. Check the newest release and update all three together, since
they are cited as one source.

---

## Law firms page, converted 21 Sep 2026

All three impact figures come from one source: the SRA's **Year Three
Evaluation of the Transparency Rules**, published 24 October 2023 on research
run June to September 2022 with more than 3,000 participants (2,022 individual
users of legal services, 1,021 small businesses, 274 regulated firms).
Verified against sra.org.uk including the year-one baselines, because two of
the three are movements and a movement needs both ends to be real.

| Figure | Exact source wording | Verified |
| ------ | -------------------- | -------- |
| 48% to 60% of SMEs compare providers before instructing | "60% of small and medium enterprises (SMEs) reported proactively comparing prices and services of legal services providers before engaging a specific supplier... up from 46% and 48% who reported doing this during our one-year review" | Yes |
| 25% to 40% of people shop around | "only one in four shopped around for a law firm in 2018. Now, four in ten people shop around for a law firm" | Yes |
| 37% said quality is impossible to compare | "it is difficult to compare the quality of providers (33% of individual and 37% of SME consumers stated this reason)" among those who found comparison difficult | Yes |
| 2,900 searches a month, London, five legal terms | Live Ahrefs pull, September 2026: solicitors london 1,500, employment solicitors london 600, dispute resolution solicitors london 400, corporate lawyers london 250, commercial solicitors london 150 | Yes |
| 3% enquiry rate, 25% engagement rate, £12,000 matter value | Nothing published. Marked "Example. Put your own in" on every row | Illustrative, labelled |
| £313k result | 2,900 x 10% x 3% x 25% x £12,000 x 12 = £313,200 | Arithmetic |

**Rejected during research:** the "41% of individuals and 55% of SMEs are aware
of legal price comparison sites, 13% and 22% use them" figures. They appear in
the year three summary but the report body attributes the identical numbers to
year one, and its own Table 31 gives different 2022 figures. Ambiguous, so not
used. Also rejected: the LSB's February 2021 research on consumers struggling
to choose lawyers, which is explicitly qualitative and states it "should not be
read as being statistically representative".

**Age:** the research is from 2022. Older than the figures on the other
industry pages, and the year is printed on every card. It is the most recent
regulator evaluation available; replace it when the five-year evaluation
publishes.

**Regulatory note:** the page claims no outcome, makes no comparative
superlative and implies no success rate. Building the cost section on the
regulator's own evaluation rather than on agency research is deliberate.

---

## Accounting page, converted 21 Sep 2026

The cost section runs on HMRC's Making Tax Digital figures. This is the
best-timed argument on the site: the page's thesis has always been "nobody
switches accountant without a reason", and in April 2026 the government handed
the trade the largest switching trigger in a generation.

| Figure | Exact source wording | Verified |
| ------ | -------------------- | -------- |
| 864,000 came into MTD for Income Tax in April 2026 | "Based on tax year 2023 to 2024 there are 864,000 individuals with a qualifying income over £50,000" | Yes, HMRC Official Statistics, published 13 Aug 2025 |
| 2.9m inside it by April 2028 | "Around 2.9 million (42%) of which have a qualifying income above £20,000 and will need to join MTD for Income Tax" | Yes, same publication |
| Thresholds and dates: £50,000 from 6 Apr 2026, £30,000 from 6 Apr 2027, £20,000 from 6 Apr 2028 | gov.uk guidance, last updated 26 March 2026, plus the 24 March 2026 policy paper for the third phase | Yes |
| 436,000 have filed a first quarterly update | "More than 436,000 sole traders and landlords have successfully sent their first Making Tax Digital (MTD) for Income Tax quarterly update. Over 570,000 customers have now signed up" | Yes, HMRC press release, 12 Aug 2026 |
| 2,600 searches a month, London, five terms | Live Ahrefs pull, September 2026: accountants london 1,000, bookkeeping services london 500, small business accountant london 450, tax advisor london 350, chartered accountants london 300 | Yes |
| 4% enquiry rate, 30% win rate, £3,600 first-year fee | Nothing published. Marked "Example. Put your own in" on every row | Illustrative, labelled |
| £135k result | 2,600 x 10% x 4% x 30% x £3,600 x 12 = £134,784. The card says explicitly that it counts the first year only | Arithmetic |

**Trap for whoever updates this.** HMRC publishes TWO sets of MTD population
figures and they do not agree:

- **Official Statistics** (13 Aug 2025): 864,000 over £50k, 1,077,000 in the
  £30k to £50k band, 975,000 in the £20k to £30k band, 2.9m total.
- **Policy papers / TIINs**: "around 780,000" from April 2026 and "a further
  970,000" from April 2027. A separate policy paper of 24 March 2026 then uses
  **970,000 again** for the April 2028 cohort, which is a different population.

This page uses the Official Statistics set throughout and never mixes them.
Do not blend the two sets, and if you cite 970,000 anywhere, name the phase and
the document.

**Freshness:** the 436,000 is from August 2026 and is the newest figure on the
site. HMRC updates it periodically and began compulsory sign-ups in September
2026, so the gap between 436,000 and 864,000 will close. Re-check before launch.

---

## The last four industry pages, converted 21 Sep 2026

All nine industry pages are now on the new template. Each one uses a DIFFERENT
source, chosen because it actually fits that trade's buyer, rather than reusing
one set of agency research nine times. A reader who visits three of these pages
should find three different arguments, not the same one relabelled.

### Consulting

| Figure | Source | Note |
| ------ | ------ | ---- |
| 69% to 61% of the buying journey done before contacting a seller | 6sense, 2025 B2B Buyer Experience Report, approx 4,000 buyers | Services were 41% of purchases in that sample, so it genuinely covers this trade |
| 95% of winners were on the day-one shortlist | Same report | |
| 51% research agencies and service providers through AI | Semrush, July 2026, n=519 | Base stated on the card: professionals **who use AI at work**, not all buyers |
| 720 searches a month, UK, five problem terms | Ahrefs, Sept 2026 | See below |
| £389k result | 720 x 10% x 4% x 25% x £45,000 x 12 = £388,800 | |

**Why problem terms, not a city plus a job title.** "Management consultant
london" is 30 searches a month. "Operations consultant london" is zero. The
category does not exist as a search. That is the page's own argument, so the
model uses UK-wide problem terms instead and the card says the volume is small
and the engagements are large.

**Two figures deliberately REJECTED after checking:**
- Gartner's "17% of buying time is spent meeting suppliers". Quoted everywhere;
  its source URL now 301s to a generic hub and the article is gone. Not citable.
- The CEB/Google "57% of the purchase is complete before contact". No live
  primary source; CEB was absorbed into Gartner in 2017. Treat as folklore.

### IT consulting and MSPs

All three from the **Cyber Security Breaches Survey 2025/2026**, DSIT and the
Home Office, official statistics published 30 April 2026, fieldwork Aug to Dec
2025, 2,112 UK businesses.

| Figure | Exact wording |
| ------ | ------------- |
| 43% identified a breach, flat year on year, 65% at medium firms | "Over four in ten businesses (43%)... remained exactly in line with last year"; "medium (65%) and large (69%)... compared to micro (42%) and small (46%)" |
| 25% have a formal incident response plan | "25% of businesses and 19% of charities having a formal incident response plan in place" |
| 39% to 44% of micro businesses use an external provider | "The proportion of micro businesses with an external cyber security provider also increased (44% up from 39% in 2024/2025)" |

**The card says "and that has not moved in a year" on purpose.** DSIT's own
commentary is that prevalence is unchanged. A page implying a rising threat
would misrepresent the source, and this trade's buyers are the most likely of
any on this site to look it up.

**No cost-of-breach figure is used, because there is no longer one to use.**
DSIT has stopped publishing a mean: "we have stopped reporting the mean costs.
Given the distribution of cyber impacts is highly skewed... this is not a robust
statistical indicator." Any competitor quoting an average UK breach cost in the
thousands is not quoting the current survey.

### HR outsourcing and payroll

| Figure | Source |
| ------ | ------ |
| 14,000 single tribunal claims in a quarter, up 28% | MoJ, Tribunal Statistics Quarterly: April to June 2026, published 10 Sept 2026 |
| 70,000 open single claims, up 51%, highest on record | Same release. Carries MoJ's own caveat of an approximate 3% overcount |
| 1.4 million UK employers in scope of the Employment Rights Act 2025 | DBT, Employment Rights Act 2025 economic analysis, January 2026 |

**Two rules written into the page header for anyone editing it:**
1. **Never write "day one unfair dismissal rights."** The Act cuts the
   qualifying period from two years to **six months**, for dismissals from
   1 January 2027. This is the most commonly misstated fact about the Act and
   it is wrong on many competitor sites.
2. **Never headline the 537,000 total open claims.** That total is inflated by
   multiple claims, which MoJ describes as volatile and capable of being skewed
   by a single employer. 70,000 open *single* claims is the honest figure for an
   SME employer audience.

Also available but not used: DBT's £1bn a year aggregate cost to business.
Dividing it by 1.4m employers to get a per-business number would be our
arithmetic, not a government figure, and the analysis says costs are not evenly
distributed.

### Recruitment agencies

| Figure | Source |
| ------ | ------ |
| 702,000 vacancies, 10.9% below pre-pandemic, lowest since early 2021 | ONS, Vacancies and jobs in the UK, published 15 Sept 2026 |
| 29,635 to 31,345 UK recruitment enterprises | REC, Recruitment Industry Status Report, 8 Dec 2025 |
| Permanent placements index 50.5, above 50 for the first time since Sept 2022 | KPMG and REC, UK Report on Jobs, published 7 Sept 2026 |
| 2,450 searches a month, London, five **client-intent** terms | Ahrefs, Sept 2026 |
| £198k result | 2,450 x 10% x 3% x 25% x £9,000 x 12 = £198,450 |

**Search terms: candidates excluded on purpose.** "Recruitment agencies near
me" is 6,400 a month and would have nearly quadrupled the headline. It is
overwhelmingly jobseekers, and a jobseeker is not worth a placement fee.
Including it would have made the calculation dishonest.

**Two honesty constraints kept in the copy:** the ONS quarterly movement sits
inside its own confidence interval (plus or minus 32,000), so the card leans on
the level and the pre-pandemic comparison rather than the quarterly wobble. And
50.5 is a diffusion index where 50 means no change, so the card says the market
has turned "barely" rather than implying a boom.

**Not used:** the REC's £40.6bn figure is Gross Value Added, not revenue or
turnover, and would be wrong to relabel. The temporary billings index value is
not published free, only its direction.

### Construction, corrected the same day

The 61% Gartner rep-free figure was replaced with **61% to 67%**, because
Gartner published a newer wave: survey of 646 B2B buyers, Aug to Sept 2025,
released 9 March 2026, which also gives "45% reporting they used AI during a
recent purchase". Same publisher, same question, one year apart, so it is a
legitimate movement rather than two unrelated numbers.

### Still outstanding across all nine

- Seven pages have no hero image. Only interior design and construction do.
- Seven pages carry `'story' => null` and show the awaiting sign-off block. Only
  interior design names a client, and that one is Pine Tree Lane with the
  published 4x figure.
- The shelved "four levers" section exists in the template and is commented out
  in interior-design.php only.

---

## Case studies distributed across all fifteen pages, 22 Sep 2026

Pine Tree Lane was on four of the six service pages and eight industry pages
showed the "awaiting sign-off" block. All fifteen now carry a story, spread
three ways.

| Page | Client | Metric shown |
| ---- | ------ | ------------ |
| /ai-visibility/ | Pine Tree Lane | **4x organic traffic in three months** |
| /paid-media/ | Pine Tree Lane | pending |
| /content/ | SweetRush | pending |
| /websites/ | Pine Tree Lane | pending |
| /reputation/ | Studio Ubique | pending |
| /crm/ | Studio Ubique | pending |
| /interior-design/ | Pine Tree Lane | **4x** |
| /construction/ | Pine Tree Lane | **4x** |
| /architecture/ | Pine Tree Lane | **4x** |
| /law-firms/ | Studio Ubique | pending |
| /accounting/ | SweetRush | pending |
| /consulting/ | SweetRush | pending |
| /it-consulting/ | Studio Ubique | pending |
| /hr-outsourcing/ | SweetRush | pending |
| /recruitment-agencies/ | Studio Ubique | pending |

Five each. **4x organic traffic in three months is still the only published
figure on this website.** Every other card renders the pending state.

### The rule applied to out-of-trade stories

Only interior design and consulting have a client genuinely in that trade
(Pine Tree Lane are an interior design and joinery firm; SweetRush are a
consultancy). On the other seven industry pages the client is from a different
trade, so **every one of those cards opens by saying so in its first few
words**: "Not a contractor." "Not a law firm." "Not an MSP." "Not a payroll
provider." "Not an agency." "Not a practice."

The card then argues the transferable pattern, which is the honest version and
also the stronger one, because it names the objection before the reader does.
The meta line under each name already shows the real location and sector, so
nothing is hidden even if someone skims.

### Disclosures kept intact

- **Studio Ubique**: every card still carries "our founder is a partner there,
  so weigh this one differently from the others on this site". Five pages.
- **SweetRush**: the "3.2x inbound enquiries in five months" figure remains
  unpublished. It was invented during copywriting, and every SweetRush card
  says the figures are not published until they are sourced.
- **Pine Tree Lane**: the 4x is the published figure and is the only number on
  a case card anywhere on the site.

### Template change made at the same time

`includes/industry-template.php` had no pending-metric fallback and no
`linkText` support, so industry stories without a metric rendered an empty
metric block. Both were added, matching the service template exactly. The
industry and service templates now handle a story identically.

### Still to do

- Get SweetRush's real figure, or drop the claim from the story page entirely.
- Confirm Studio Ubique's reputation and CRM work is actually running.
- If any of the three clients objects to appearing on a trade page that is not
  theirs, the fix is one line: set `'story' => null` and the page returns to
  the awaiting sign-off block.

---

## Offices corrected — 25 Sep 2026

Kulwant: "Our office is in chandigarh area india, not dubai or zwolle."

The site had been carrying two office addresses that were never ours. Both are
gone.

| Was | Now | Where |
|---|---|---|
| `Dubai · Zwolle` | `Chandigarh, India` | `$SITE['offices']`, so the footer and the call page follow automatically |
| `Sunday to Thursday, 9am–6pm GST` | `Monday to Friday, 9am–6pm IST` | `$SITE['hours']`, used on about, contact and call |
| Unit 1402, One Central, Dubai World Trade Centre | removed | about.php, contact.php |
| 3rd Floor, 12 Kruisstraat, 8011 Zwolle | removed | about.php, contact.php |

Both pages now show one office and the "wherever you are" email block, in two
columns rather than three.

**The street address is deliberately not written out.** The city is what is
confirmed; an invented address on a live page is worse than no address, so the
line reads "Chandigarh, India" until the real one arrives.

Dubai and Zwolle still appear elsewhere on the site and are correct there:
Pine Tree Lane are a client in Dubai, and Studio Ubique are a client in Zwolle.
Those are client locations, not ours.

### Licence line removed

`RankinAI FZ-LLC · Licence 2109-DMCC-4471` came off the footer at Kulwant's
request, and the `$SITE['legal']` key went with it.

### Resolved the same day

Kulwant supplied both missing pieces:

- **Phone**: `+91 906 9710 000`, replacing the UAE number. The `tel:` links on
  contact and call strip the spaces themselves, so they resolve to
  `tel:+919069710000`.
- **Address**: `Office No. 303, Tricity Plaza, Zirakpur, Punjab 160104, India`,
  now in `$SITE['address']` and shown on about and contact. The short
  `$SITE['offices']` line reads `Zirakpur, Punjab, India`.

### Still open
- **The privacy policy still names `RankinAI FZ-LLC, licence number
  2109-DMCC-4471` as the controller**, and still has no registered address. A
  UAE free-zone company with an office in India is an ordinary arrangement, so
  this may be right, but a privacy policy has to name the real controller and
  its real registered address. Confirm before launch.

---

## About page rebuilt — 25 Sep 2026

Kulwant supplied full new copy. Built to the rules settled on the home page:
no uppercase, no em-dashes, no semicolons, no `<br>` in a heading, one eyebrow
in the hero and nowhere else, heading and sub-heading both free inside the
1024px measure.

### Removed at Kulwant's instruction

- **Where we are.** The Zirakpur address is still on /contact/ and the short
  `Zirakpur, Punjab, India` line is still in the footer.
- **Careers.** The speculative-application block is gone.
- **Our commitment.** The seven promises are gone from this page. Four of them
  also appear on /how-we-work/ and in the FAQ, so they are not lost.

### Removed as a consequence of the new copy

- **The hero proof bar** (`2009`, `200+ clients`). Both figures remain sourced
  in this file if it comes back.
- **The audit request form in the close.** The new close asks for a call and
  offers the audit as the quieter second way in. A five-field form beside that
  was two asks competing.

### Not published, and why

- **The four biographies.** The copy marks each card
  `[Approved biography: …]`. Bracketed placeholders do not go on a page, so the
  cards carry figures instead. **Send real bios and they go straight in.**

### Placeholder figures on two team cards — 25 Sep 2026

Kulwant asked for Abhishek and Rahul to carry the same card layout as the two
founders, "with dummy info, we will fill that later with CMS". So:

| Person | Experience | Delivered | Source |
|---|---|---|---|
| Kulwant Singh | 16 years | 240+ projects | teqdeft.com/about |
| Reena Devi | 14 years | 220+ projects | teqdeft.com/about |
| **Abhishek Thakur** | **6 years** | **80+ projects** | **invented, placeholder** |
| **Rahul Verma** | **4 years** | **50+ projects** | **invented, placeholder** |

The two placeholder rows are flagged `'draft' => true` in the `$TEAM` array in
about.php so the template can find them. **Neither figure may go live as it
stands.** Replace both, or clear the fields: the card renders fine without
them, it simply loses two lines.

The LinkedIn row is deliberately still empty on those two. A made-up profile
URL is a worse placeholder than a missing one, because it either dead-ends or
lands on a stranger with the same name. Send the two URLs and they go in.
- **"Explore your industry."** In the copy, and not on the page, because there
  is nowhere for it to point. There is no industries index. The nine industry
  pages are each linked directly above it, and the three group pages
  (/build-and-design/, /hr-and-recruitment/, /professional-services/) lost
  their last inbound links when the group names became headings on 25 Sep.
  **An industries index would fix both at once.**

### Still to do

- Team portraits. `team-kulwant.webp` and `team-reena.webp` can be moved from
  Teqdeft, where they are already published. Abhishek and Rahul need a
  photograph each. The card falls back to a name plate until they land.
- The two mission and vision images are still placeholders.

---

## One close on every page — 25 Sep 2026

The closing section was written out by hand in fourteen files. It had drifted
into eleven different paragraphs, three different primary buttons and two pages
carrying an inline form instead of a card, so a reader moving through the site
met a different ask each time.

It is now `includes/close.php`, required by `footer.php`, which means a page
gets it without asking and a new page cannot forget it. Settled as the about
page's copy, in the home page's layout, with the home page's card and buttons:

- **heading** Tell us about the work you want more of.
- **paragraph** A particular kind of client. Larger projects. A new service. A
  market you haven't reached yet. We'll start there, and look at how your
  marketing could help you get closer.
- **card** the growth audit, and the four things it promises
- **primary** Get your growth audit
- **secondary** Or book a 20-minute call

The four lines in the card are lifted word for word from /growth-audit/, so
nothing in the close is a claim of its own and the two cannot drift apart.

### Two overrides, and the only reason for one

`$close_btn` and `$close_link` change an action where the standard link would
point at the page the reader is already on:

| Page | Change |
|---|---|
| /growth-audit/ | primary becomes "Fill in the form" to `#audit-form` |
| /call/ | secondary becomes "Or pick a time above" to `#book` |

Copy, card and layout are identical on both. A page that simply wants its own
wording does not get an override.

### What came off with the old closes

- **Two inline audit forms**, in the closes of /pricing/ and /success-stories/.
  The standard close carries a card and a button instead. The audit form still
  exists on /growth-audit/ and /contact/, which is where it is the point of the
  page rather than a second ask under one.
- **The legal cross-link.** The close on /privacy/ and /terms/ used to link to
  the other document. The footer links both, so neither is unreachable.
- **"Get found. Get booked."** as a closing tagline on eleven pages. It is
  still the strapline in the footer.

Verified across fifteen pages: exactly one close each, same heading, same four
reassurances, same buttons, and the two overrides where they belong.

---

## Pricing page rebuilt — 25 Sep 2026

Kulwant supplied full new copy. Built to the same rules as the home and about
pages, and using the patterns those pages settled: eyebrow plus heading per
section, alternating light and dark bands, the icon cards from about, the
two-column claim-and-working-out block, the accordion from /questions/, and
the shared close.

### The plans are rows, not a matrix

The page carried a reversed comparison matrix, four packages across seven
service rows, plus a `<dialog>` holding the four deliverable lists. Both are
gone. The new copy is written as four plans in sequence, each one "everything
in the last, with", which a matrix cannot express: a grid says the four are
alternatives, the copy says they are stages. Each plan is now a full-width
card, identity and price on the left, the nine deliverables on the right.

### The prices

| Plan | Price |
|---|---|
| Foundation | $750 / month |
| Growth | $1,250 / month |
| Accelerate | $1,750 / month |
| Custom | from $2,500 / month |
| Initial setup | $500, waived on a six-month commitment |

Every figure on the page is a price Kulwant set. They are commercial decisions
rather than claims about the market, so they need no source. There is no other
number on the page.

### One copy edit

"The work supports your visibility; inclusion in an AI answer cannot be
guaranteed" became "The work supports your visibility. Inclusion in an AI
answer cannot be guaranteed by anyone." The site does not use semicolons, and
the split makes the second half a stronger statement rather than a caveat.

### Dead code removed with it

About sixty CSS rules (`.packages`, `.mx` and its parts, `.pk` and its parts,
`.pkgmodal` and its parts), sixteen matching rules in responsive.css, and the
96-line dialog block in script.js. `.packages__note` stayed: it is a section
sub-heading used on five other pages. Brace balance checked on all three
stylesheets, `node --check` clean on the script, and twenty pages verified
with no PHP errors, exactly one close each, one h1 each, and no references
left to the removed markup.

### The full deliverables, restored — 25 Sep 2026

The rebuild dropped the four detailed deliverable lists that used to open in
a dialog behind "Read full deliverables". They are back, recovered from the
live page at rankinai.com/new-v1/pricing/, and they open in place under each
plan instead of in a popup. Same content, no dialog, and every item is in the
page whether or not anyone opens it.

| Plan | Summary shown | Groups behind the link | Items |
|---|---|---|---|
| Foundation | 9 | 7 | 22 |
| Growth | 9 | 7 | 30 |
| Accelerate | 9 | 7 | 32 |
| Custom | 7 | 9 | 51 |

**Two lines were reconciled against Kulwant's new copy**, because the restored
detail contradicted it:

| Was | Now | Why |
|---|---|---|
| Accelerate content: "6 to 8 pieces a month" | "6 pieces a month" | The new plan copy says six. A range that starts at the stated number and might be more is a promise nobody is tracking. |
| Accelerate outreach: "2 placements a month on someone else's site" | "Outreach for 2 placements a month … with the decision resting with the publisher" | The page's own "what the deliverables mean" section says publication decisions rest with the publisher and coverage is not guaranteed. The old line promised the placement itself. |

Custom's equivalent line, "Placements on other sites", became "Outreach for
placements on other sites" for the same reason.

**The test for anything added to these lists:** it cannot promise something the
"what the deliverables mean" section says is not guaranteed. That section is
on the same page, a screen below.

---

## Questions page rebuilt — 25 Sep 2026

Kulwant supplied full new copy. Twenty-eight answers in five groups, on one
light band, with a jump list in the hero. Built to the same rules as the other
rebuilt pages, and closing with the shared close from includes/close.php.

### The prices appear on two pages now

/pricing/ and here. They agree, checked against the live markup of both:

| | /pricing/ | /questions/ |
|---|---|---|
| Foundation | $750 / month | $750 |
| Growth | $1,250 / month | $1,250 |
| Accelerate | $1,750 / month | $1,750 |
| Custom | from $2,500 / month | from $2,500 |
| Setup | $500, waived on six months | $500, waived on six months |

**Change one, change both, in the same commit.** No other page prints a figure.

### The currency is stated here and nowhere else

"All prices are in USD" came off the pricing hero on Kulwant's instruction, so
the sentence in the "how much does it cost?" answer is now the only place the
site says which dollar it means. Worth knowing before editing that group.

### One copy edit

"Inclusion in an AI answer cannot be guaranteed" became "cannot be guaranteed
by anyone", matching the same line on /pricing/. The two pages make the same
promise about AI visibility, so they now make it in the same words.

### Structure

The questions are held as a data array, and the jump list is built from it, so
a group cannot be renamed in one place and not the other. Verified: five jump
links, five matching ids, no broken anchors. An answer is an array of
paragraphs; a paragraph that is itself an array renders as a list, which only
the pricing answer needs.

---

## Service pages: template rebuilt, AI and search visibility rewritten — 25 Sep 2026

Kulwant supplied full copy for the AI and search visibility page. The shared
template was rebuilt around its structure, and every section made conditional,
so the five services whose copy has not arrived yet render what they have and
skip the rest.

| Section | Data key | On the other five? |
|---|---|---|
| Hero | label, h1, sub, sub2, heroNote | yes |
| The opportunity | `opportunity` | no, skipped |
| Our approach | `approach` | no, skipped |
| What the service covers | `do` | yes, in the older two-field shape |
| Google and AI search | `compare` | no, this service only |
| How the work progresses | `moves` | yes |
| Proof in practice | `story` | yes |
| Measuring progress | `report` | yes |
| Is this the right next step | `fitYes`, `fitNo` | yes, both columns |
| Questions | `qs` | yes |

Verified: all six render, one h1 and one close each, no PHP errors, no
em-dashes or semicolons on the rewritten page, nothing over the 1024 measure,
no overflow at 1440 or 375.

### The story is not the copy's

Kulwant's draft carries bracketed placeholders in "proof in practice":
"[Approved summary…]", "[Verified search result]", "[Metric, baseline and
measurement period]". Bracketed placeholders do not go on a page, and the Pine
Tree Lane story already there is real and sourced, so it stayed exactly as it
was. The 4x organic traffic figure and its three-month period are logged
earlier in this file.

### One copy edit

"Outreach is part of the work; publication remains the publisher's decision"
became two sentences. The site does not use semicolons, and the claim is
unchanged.

### Three decisions worth revisiting

- **The "it is not, if" column came off this page.** The copy gives one list.
  The other five services still show both columns, so this page is the odd one
  out until they are rewritten. The template renders one column or two
  depending on whether `fitNo` is set, so either is a data change.
- **The mid-page CTA and the team marquee came off all six.** Neither is in
  the copy. The actions are now in the hero and again under "is this the right
  next step". includes/team.php is unchanged if the marquee should return.
- **Six service images are now unused by these pages**: service-search,
  service-content, service-paid, service-web, service-reputation, service-crm.
  Every rebuilt page on the site uses the centred hero, so the hero object
  went with the rebuild. The files are still in assets/images.


## /paid-advertising/ rebuilt to Kulwant's copy — 25 Sep 2026

### The 4x figure came off this page

The old paid advertising page carried Pine Tree Lane's `4x organic traffic in
three months` in its story block, labelled as organic. The label is accurate
and the placement was not: on a page about advertising, a reader takes the one
number on the page for something the advertising produced, whatever the words
under it say. The figure now appears only on /ai-visibility/ and on the Pine
Tree Lane story itself.

Pine Tree Lane stays on this page. They are a real client, named with their
agreement, and we do run their ads. What the block states is the engagement,
not a result. The metric renders in its pending state ("figure with the client
for sign-off") until the client releases an advertising number.

Kulwant's draft has bracketed placeholders in "proof in practice" ("[Client
name]", "[Approved summary…]", "[Verified enquiry-quality or acquisition
result]"). None of them print. Same rule as /ai-visibility/.

### What else came off with the rewrite

- **The hero stat pair** `200+ clients served` and `2009 doing this since`.
  Not in the new copy and not carried by the rebuilt hero.
- **The "doing nothing, a freelancer, or us" table**, which contained the only
  remaining `is-placeholder` span on a service page: an unsourced freelancer
  salary benchmark. Gone with the section.
- **The mid-page CTA and `closeText`.** The close is shared now.
- **The dead `fitHead` / `fitYes` / `fitNo` arrays** that the removed "is this
  the right next step" section used. This is the first of the six service
  files to have them deleted rather than left in place.

### One template section added, service-specific

`channels` (where we advertise). It is guarded, so the four service pages still
on the older data shape render exactly as before. The eyebrows on the
opportunity, approach, do, moves and report sections are now overridable with a
fallback to the previous wording, which is what those four pages use.

A second section, `feedback` (your team's part), was built and removed the same
day at Kulwant's instruction. Its data, its template block and its two CSS
rules are all gone. The point it made survives in the copy: lead quality is
named in the opportunity items, in the tracking card under "what we manage",
and it is the second stage of the report.

The hero note listing the four channels was also removed. The channels section
covers them a screen further down.

### Copy edits

Three em-dashes became commas: the hero sub, the "what if a campaign isn't
profitable" answer, and the close (already shared). No claim changed.

"We agree a practical way to record outcomes, such as:" was a colon leading
into a list. It became a sentence, and the list carries its own label, "what
we ask you to record", because the site sets list labels rather than running
sentences into lists.


## /content/ rebuilt to Kulwant's copy — 25 Sep 2026

### The invented 3.2x came off six pages

CLAIMS.md has said since 22 Sep that SweetRush's "3.2x inbound enquiries in
five months" was invented during copywriting and is not published. The data
kept printing it anyway, so six pages carried the figure directly above a line
saying the figures are not published until they are sourced.

Cleared, all now rendering the pending state:

| Page | What it was |
| --- | --- |
| `/content/` | story metric |
| `/consulting/` | story metric |
| `/accounting/` | story metric |
| `/hr-outsourcing/` | story metric |
| `/` (home) | case card, hand-written markup |
| `/success-stories/` | story 02, hand-written markup |

`.case__metric--pending` was added to style.css for the home page card, which
uses its own metric component rather than `.metric`.

**Still open, and bigger:** `/success-stories/sweetrush/` carries a whole
results table the file itself marks `PLACEHOLDER DATA` — the 3.2x, "27 pages
ranking on page one", "64% of enquiries that cited a published page" — plus
"Inbound enquiries rose 3.2 times over five months" in its overview and a
headline-result row in its facts table. That is a rewrite rather than a line
deletion, so it has not been touched. It needs either SweetRush's real numbers
or the page rebuilt without a results section.

### One copy edit, for the photography rule

The draft answer to "does this include design, photography and development"
said new photography "is scoped before production", which reads as an offer to
arrange a shoot. We are in India and the clients are in the US and the UK. The
answer now says we give direction on the images a piece needs and photography
is commissioned locally by the client, which is what every other page says.

### The story is not the copy's

Bracketed placeholders again, this time including a "the work" and "the
evidence" pair. None of them print. SweetRush was already on this page, is
real, and stays, with the metric pending.

### Four template additions, all guarded

`opportunity['quotes']` (the buyer's questions as a `.qset`), an approach with
no five-across strip, and `substance` (three claims beside what would
demonstrate them). The three service pages still on the older data shape
render exactly as they did.

A fourth, `reuse` (more use from the same expertise), was built and removed the
same day at Kulwant's instruction. Data and template block both gone, no CSS
with it. The argument survives where it counts: "sales support" is the fourth
thing the report measures.

### What came off with the rewrite

The hero stat pair, the mid-page CTA, the "doing nothing, a freelancer, or us"
table with its second unsourced freelancer benchmark, `closeText`, and the dead
`fitHead` / `fitYes` / `fitNo` arrays.


## /website-conversion/ rebuilt to Kulwant's copy — 25 Sep 2026

### Another figure in the wrong place

Pine Tree Lane's `4x organic traffic in three months` was the only number on
this page, directly above the card's own line saying "the conversion figures
are theirs to release". A visitor reads the one number on a page as the result
of the work that page is selling. The metric is now pending. Same call as
/paid-advertising/. The figure stays on /ai-visibility/ and on the Pine Tree
Lane story, where it is what the work produced.

**That sentence was wrong when it was written.** The +58% is not published
either, and it was still live in nine places. Cleared the same day. See the
next entry.

### The story is not the copy's

Bracketed placeholders again, this time an "the experience" and "the outcome"
pair. None of them print. Pine Tree Lane was already on this page and stays.

### Four template additions, all guarded

- an opportunity with no three-item strip. This page's argument ends on "we
  work on all three", and the three are the section after it.
- `approach['items']` — three named moves in place of the five-across strip.
- `substance['paras']` — prose before the three pairs.
- `routes` — two cards side by side, reusing the contact page's `.route`.
  Improve or rebuild is a choice being offered rather than a recommendation
  being made, and two cards say that where four paragraphs would not.

### One copy edit

The "design and confidence" section had three parallel statements inside one
paragraph: "a project gallery becomes more useful when…", and two more. They
are now three cards, split at the verb. Every word is Kulwant's and nothing
was added except the word "the" in "the brief and the outcome".

### What came off with the rewrite

The hero stat pair, the mid-page CTA, the comparison table with its third
unsourced freelancer benchmark, `closeText`, and the dead `fitHead` / `fitYes`
/ `fitNo` arrays. Only `/reputation/` still carries them.


## /reputation/ rebuilt, and the second invented figure cleared — 25 Sep 2026

### The +58% was never published either

This file said, under "invented figures", that Studio Ubique's "+58% qualified
briefs in four months" was invented during copywriting and that it was **not**
in the markup. The second half was wrong. It was live in nine places. Cleared,
all now rendering the pending state:

| Page | What it was |
| --- | --- |
| `/reputation/` | story metric |
| `/crm/` | story metric |
| `/it-consulting/` | story metric |
| `/recruitment-agencies/` | story metric |
| `/law-firms/` | story metric |
| `/success-stories/sweetrush/` | the "more stories" block |
| `/` (home) | case card, hand-written markup |
| `/success-stories/` | story 03, hand-written markup |

A fetch sweep of every service, industry, story and hub page now finds neither
`+58%` nor `3.2x` anywhere except the two story pages below.

### The two story pages are the last of it, and they are a rewrite

`/success-stories/sweetrush/` and `/success-stories/studio-ubique/` each carry
a results table their own file marks `PLACEHOLDER DATA`, plus the figure in the
overview paragraph and in the facts table. Six invented numbers between them.
Deleting a line will not fix those pages; they need either the clients' real
numbers or a rebuild without a results section. Both are behind `SITE_NOINDEX`.
**This is the last open claims item on the site.**

### Two template additions

- `substance` now takes a list of blocks as well as a single one, and each
  block picks its own ground. This page has two: the value of a useful review,
  which is prose, and when feedback is difficult, which is prose plus three
  steps on the dark band. Two blocks of the same shape on the same ground would
  have read as one long section.
- `reportGrid` — five measures rather than four. They are a set rather than a
  journey, so they run five across with no chevrons, and `.wcards--five` puts
  the card number in the flow above the name, because at 230px wide a name like
  "Responsiveness" ran straight into an absolutely positioned number.

### Copy edits

Two colons leading into a sentence became full stops: "the invitation is
simple: share an honest account" and the report tail's "what it can and cannot
tell us", which was an em-dash pair. No claim changed.

### The dead arrays are gone from every service page

`fitHead` / `fitYes` / `fitNo` were left in all six files when the "is this the
right next step" section was removed. Five files are now rewritten and none of
them carries the arrays. Only `/crm/` still has them, and it is the only
service page still waiting on copy.


## /crm/ rebuilt — all six service pages now share one structure — 25 Sep 2026

The last service page with copy. One template change: a `substance` block picks
its grid from the number of items, so this page's four team requirements sit
four across where the other pages' three sit three across.

### The story

Bracketed placeholders again, with an "operational improvement" and "commercial
outcome" pair. Studio Ubique stays, disclosed as our partner, stating their
position and nothing about CRM work delivered, because their published story
documents the lead-flow situation and lists search and paid as the services.
The +58% came off earlier today with the other eight places it was live.

### The dead arrays are gone

`fitHead` / `fitYes` / `fitNo` / `fitTail` were left in all six service files
when the "is this the right next step" section was removed. All six are now
clean, `/ai-visibility/` included. The `.fit` rules in style.css are unused by
the service pages but `.fit` is referenced elsewhere, so they were left alone.

### Verification across the six pages

Fetched and measured, 1440 and 375:

- No PHP notice, warning or fatal on any page.
- No bracketed placeholder printed anywhere.
- Zero semicolons in visible copy.
- One em-dash per page, and on every one it is the pending metric glyph.
- Uppercase only in SEO, UAE, USA and CRM.
- No horizontal overflow, and nothing wider than the viewport at 375.

### Where the six pages stand

| Page | Sections | Story | Figure |
| --- | --- | --- | --- |
| /ai-visibility/ | 10 | Pine Tree Lane | 4x, published |
| /paid-advertising/ | 10 | Pine Tree Lane | pending |
| /content/ | 10 | SweetRush | pending |
| /website-conversion/ | 11 | Pine Tree Lane | pending |
| /reputation/ | 11 | Studio Ubique | pending |
| /crm/ | 11 | Studio Ubique | pending |

One published figure on the six service pages, and it is on the page whose work
produced it. The only claims item left on the site is the two story pages,
`/success-stories/sweetrush/` and `/success-stories/studio-ubique/`.


## /interior-design/ rebuilt — the industry template gains the new shape — 25 Sep 2026

The first industry page on the same structure as the six service pages. The
template now carries both shapes: a file that sets `opportunity` gets the new
one, a file that sets `stats` gets the old one. All eight other industries and
the three hubs were fetched and render unchanged.

### What came off this page

- **The hero stat pair and the hero object image.**
- **"Where the effort goes today" and "where it doesn't"**, the two-column
  channel audit with its ten entries. Not in the new copy.
- **"What the market data shows" and the calculation.** This is the one worth
  flagging: it held three published market figures, each with its source
  printed on the card, and a five-row worked example whose "yours" rows were
  deliberately muted and labelled illustrative. It was the most carefully
  sourced section on the site and the new copy has nothing like it. The data is
  still in git history and the template still renders it for the eight other
  industries, so restoring it anywhere is a data change.
- **The mid-page CTA, the shelved `levers` block and `closeText`.**
- **The team section.** The service pages dropped it and the new copy does not
  ask for it. `includes/team.php` is unchanged and the eight old industry pages
  still render it.

### The story keeps its figure

Kulwant's copy names Pine Tree Lane and brackets everything else, so the
bracketed parts do not print and the real write-up that was already here stays.
The 4x is the published organic figure, it is labelled as organic, and this
page is not selling a single service the number could be misread as the result
of. Same reasoning as /ai-visibility/.

### One copy edit, for the photography rule

The draft answer to "do we need new photography" ended "photography is
commissioned separately", which does not say by whom. It now says we do not
shoot, our team is in India and our clients are not, and photography is
commissioned locally by the client. That is what the other eight industry pages
and every service page say.

### Template additions

`opportunity`, `approach`, `journey`, `services` (the six as linked paper cards,
three across), `blocks[]` (each picking its own ground and printing only the
parts it has), `moves`, and a `report` section the industry template never had.
Question answers now accept a list of paragraphs as well as a string, and the
FAQ structured data joins them.


## /construction/ rebuilt — 25 Sep 2026

Second industry page on the new shape. Twelve sections, verified at 1440 and
375, no notices, no brackets, no overflow. The "understanding the buyer" section
renders three across and "your project experience" four, both from the item
count, and the journey section gained a closing line for the "we agree which
audience matters" note.

Same removals as /interior-design/: the hero stats and object image, the channel
audit, the market data section with its three sourced figures and the worked
calculation, the mid-page CTA, the shelved levers, `closeText`, and the team
section. The sourced market figures are noted under that page's entry.

**The story keeps its figure and its disclaimer.** Kulwant's copy brackets the
whole block. Pine Tree Lane are not a contractor and the write-up says so in its
first three words, which is the only reason the block belongs on this page. The
4x is published and labelled as organic traffic.

**One copy edit, for the photography rule.** The draft answer ended "photography
is commissioned separately", which does not say by whom. It now says we do not
shoot and the client commissions locally. Third page this week.


## /architecture/ rebuilt — 25 Sep 2026

Third industry page on the new shape. Twelve sections, verified at 1440 and 375,
no notices, no brackets, no overflow.

Two grids the template gained here: a block with five cards renders five across
rather than four, and a strip of six phrases goes three and three rather than
leaving a five plus one orphan. Both pick themselves from the item count, so no
data file states a grid.

Same removals as the two industry pages before it. The story keeps its 4x and
its "not a practice" opening, which is what makes a joinery firm usable on an
architecture page.

Six industries left on the old shape: accounting, consulting, law firms, IT
consulting, recruitment agencies and HR outsourcing.


## /recruitment-agencies/ rebuilt — 25 Sep 2026

Fourth industry page on the new shape. Thirteen sections, verified at 1440 and
375, no notices, no brackets, no overflow.

Two template additions: the journey section takes paragraphs before its cards,
and a block takes a question set. The four questions under "show your
specialism" are the consultants' own, so they are set as type the way a buyer's
questions are in an opportunity section, rather than run together into a
paragraph.

Same removals as the three industry pages before it.

**The story.** Studio Ubique stays, disclosed as our partner and openly not a
recruitment agency, with the metric pending after the +58% sweep.

Five industries left on the old shape: accounting, consulting, law firms, IT
consulting and HR outsourcing.


## /hr-outsourcing/ rebuilt — 25 Sep 2026

Fifth industry page on the new shape. Twelve sections, clean alternation with no
two bands of the same colour in a row, verified at 1440 and 375, no notices, no
brackets, no overflow.

No new template keys. The switching block uses the five-across grid the
architecture page added and the six-item strip uses its three-and-three grid,
both chosen from the item count.

Same removals as the four industry pages before it. SweetRush stays on the story
block, openly not a payroll provider, with the metric pending after the 3.2x
sweep.

Four industries left on the old shape: accounting, consulting, law firms and IT
consulting.


## /accounting/ rebuilt — 25 Sep 2026

Sixth industry page on the new shape. Thirteen sections, verified at 1440 and
375, no notices, no brackets, no semicolons, no overflow.

One template addition: a strip of four phrases takes four columns rather than
leaving a gap where the fifth would be. The grid picker is now a small helper
shared by the approach section and the blocks, so 4, 5 and 6 all sit correctly.

Two question sets on one page for the first time: the buyer's four in the
opportunity, and the three under "show your specialism" that a sector page has
to answer. They read differently because one sits in a heading column and the
other opens a full-width block.

**One copy edit.** "We organise the interview and drafting; your team reviews
the substance" became two sentences. The site does not use semicolons.

SweetRush stays on the story block, openly not a practice, metric pending.

Three industries left on the old shape: consulting, law firms and IT consulting.


## /it-consulting/ rebuilt — 25 Sep 2026

Seventh industry page on the new shape. Thirteen sections, verified at 1440 and
375, no notices, no brackets, no semicolons, no overflow.

One template addition: a block can carry a `lead` line before its question set.
On this page the certifications sentence is what the four questions are about,
so it has to come first. Confirmed rendering in the right order: lead, then the
questions, then the closing paragraph.

Studio Ubique stays on the story block, disclosed as our partner and openly not
an MSP, metric pending.

Two industries left on the old shape: consulting and law firms.


## /law-firms/ rebuilt — 25 Sep 2026

Eighth industry page on the new shape. Thirteen sections, verified at 1440 and
375, no notices, no brackets, no semicolons, no dangling colons, no overflow.
Three card sets on one page at three, four and five across, all from the item
count.

No new template keys.

**Two colons became sentences.** The draft leads two card sets with "we help
develop profiles around:" and "we help explain:". A colon hanging above a card
grid reads as a missing list, so each now names what follows, using the item
titles themselves and nothing more. Same edit as the recruitment page.

Studio Ubique stays on the story block, disclosed as our partner and openly not
a law firm, metric pending.

One industry left on the old shape: consulting.


## /consulting/ rebuilt — all fifteen pages now share one structure — 25 Sep 2026

The ninth and last industry page on the new shape. Fourteen sections, the most
of any page, with four argument blocks and the bands alternating the whole way
down without a repeat. The stacking z-index runs 16 to 3, so the card-corner
effect still has headroom.

No new template keys. The old industry shape is no longer used by any data file,
though the template still carries it.

**One semicolon fixed.** The old SweetRush write-up on this page had "knew what
they were worth; to everyone else the website read like a brochure". Two
sentences now.

SweetRush stays, and this is the one industry page where the client is the same
kind of business as the reader, which the write-up says in its first clause.
Metric pending after the 3.2x sweep.

### Where the site stands

Six service pages and nine industry pages rebuilt to Kulwant's copy, all on the
same structure and the same rules. A fetch sweep of 29 URLs — every service,
industry, hub, story index and standalone page — returns:

- no non-200 status,
- no PHP notice, warning or fatal,
- no bracketed placeholder printed anywhere,
- neither invented figure anywhere.

Measured at 1440 and 375 on every rebuilt page: no horizontal overflow and
nothing wider than the viewport.

**One published figure remains on the site's cards**: Pine Tree Lane's 4x, on
/ai-visibility/, /interior-design/, /construction/ and /architecture/, labelled
as organic traffic on each. Every other story card shows the pending state.

**The last open claims item is unchanged**: `/success-stories/sweetrush/` and
`/success-stories/studio-ubique/` each carry a results table their own file
marks as placeholder data, six invented numbers between them. Both are behind
`SITE_NOINDEX`. They need the clients' real figures or a rebuild without a
results section.


## /success-stories/ hero rebuilt — and the last unsourced stat removed — 25 Sep 2026

The hero is now the centred one every rebuilt page uses: eyebrow, heading, two
lines of sub, then the growth audit and the call.

### The 62% retention figure is gone

The stat bar carried "62% clients retained beyond five years" with a comment in
this very file saying it was a placeholder to be measured and confirmed before
launch. It had been sitting on the page unsourced since. The new copy has no
stat bar, so it came off rather than being carried forward. "200+ clients
served" and "2009" went with it and still appear on /about/, where they are
explained.

The hero note, "free, back within a working day, and yours whether you hire us
or not", was replaced by the shared second action, so the page now offers the
same two routes as every other page.

### Page title and description updated

The old ones promised "named clients, real numbers, real dates", which stopped
being accurate when two of the three metrics went to the pending state. They now
describe what the page actually shows.

### What the page shows now

One published figure (Pine Tree Lane, 4x organic traffic in three months) and
two pending states. That is an honest page.


## The success story detail rebuilt to Kulwant's structure — 25 Sep 2026

`includes/story-template.php` now carries both shapes. A story that sets
'business' gets the new eleven-section structure; one that does not keeps the
22 Sep shape. SweetRush and Studio Ubique render unchanged.

/success-stories/pine-tree-lane/ is the first on the new shape.

### Four claims problems came off that page

| What | Why it had to go |
| --- | --- |
| "38 keywords ranking in the top three" | Marked PLACEHOLDER DATA in the file, and printing |
| "11 enquiries a month, up from 2" | Same, and the same figure appeared on three other pages attached to different clients |
| The client quote | Invented words attributed to "Client name, Job title, Company", under a heading that says it is what the client said |
| The "headline result" fact row | Repeated the figure the hero already carries |

The quote slot now renders its empty state: "we do not write a client's words for
them."

### Three things the structure asks for that this story cannot honestly fill

- **The before-and-after copy pair** in "what we changed". We do not have Pine
  Tree Lane's previous page copy recorded, and inventing a client's old headline
  to make the new one look better is not something this site does. The template
  renders the pair whenever a step supplies one, so it is ready for a story
  where we kept the original wording.
- **The results comparison table.** Every figure in the structure's worked
  example is marked illustrative. The table renders only when there are real
  rows. Here the slot says the comparison is with the client and lists the four
  measures and their sources.
- **Month-numbered delivery phases.** We do not have a dated schedule, so the
  phases are labelled by sequence: first, then, ongoing. That is what we can
  stand behind.

### The hero figures

Three cards. One published (4x organic traffic over the first three months) and
two in the pending state, which keeps the shape of what is measured visible
without inventing the number. A footnote says what the comparison covers.

### Still open

The 4x has been on this site since the story went up and has still never been
tied to a dated analytics export. That is now stated on the page itself, in the
results section, rather than only in this file.

`/success-stories/sweetrush/` and `/success-stories/studio-ubique/` are still on
the old shape and still carry their own placeholder results tables. They are the
last claims item on the site.


## The blog, built with dummy data — 25 Sep 2026
### (superseded the same day by Kulwant's copy — see the entry below)

Two new pages and a shared index, at Kulwant's request for templates with dummy
content.

| File | What it is |
| --- | --- |
| `includes/posts.php` | The index. Three placeholder posts plus the topic list |
| `blog.php` | /blog/ — the overview, with topic filtering |
| `includes/blog-template.php` | The detail page |
| `blog-*.php` (3) | One data file per post |

No `.htaccess` change was needed: the two-segment rule already routes
/blog/<slug>/ to blog-<slug>.php. "Blog" was added to the header nav between
Pricing and About, and to the company column in the footer.

### The dummy content is deliberately claim-free

Every placeholder article is about our own work and carries **no statistic, no
client name and no result**. That is the point. A dummy article with an invented
figure in it is exactly the kind of thing that survives into production, and
this site has already had to remove two invented figures from nine pages this
week.

The dates are placeholders and are marked as such in each file.

### No personal byline

The three posts are attributed to RankinAI, not to a person. Attributing words
nobody wrote to a named colleague is the same mistake as an invented client
testimonial, and these are placeholders. Real bylines come with real articles.

### Filtering is server-side

`?topic=` on the overview, not JavaScript. Every filtered view has its own URL
that can be linked and shared, it works with the script blocked, and the chips
become category archives unchanged when this moves to WordPress. A topic only
appears as a chip when a post actually uses it, so there are no dead ends.

### Before this goes live

Replace all three posts, or delete them and remove Blog from the nav. An empty
section is better than a section of placeholders.


## The blog rebuilt to Kulwant's copy — 25 Sep 2026

Seven articles, a featured card, server-side search, topic filters and paging.
The three earlier placeholder posts were deleted and replaced by seven matching
Kulwant's titles and standfirsts.

### What is real and what is not

| Part | Status |
| --- | --- |
| Titles, standfirsts, topics | Kulwant's copy, used as written |
| Article bodies | Placeholders, written for the template |
| Dates and reading times | Placeholders |
| Author | Not printed. See below |

Every placeholder body carries **no statistic, no client name and no result**,
for the same reason as before: a dummy article with an invented figure in it is
the kind of thing that survives into production.

### Two bracketed placeholders in the copy did not print

- The featured card's meta line is "[Author name] · [Publication date] ·
  [Reading time]". It prints the date and the reading time only. There is no
  named author, on purpose: attributing words nobody wrote to a named colleague
  is the same mistake as an invented client testimonial.
- "Results for [search term]" and "[Number] articles found" are filled from the
  actual query and the actual count, so the placeholder text never appears.

### One behaviour change, because our own advice did not work

The empty state suggests trying "enquiries". Every article says "enquiry", so
that search returned nothing: a reader who took our suggestion would have been
told the search was broken. `posts_search()` now also matches on the stem shared
by a word and its singular, so "enquiries" finds "enquiry" and "proposals" finds
"proposal". It only ever widens a search that would otherwise fail.

### Everything works without JavaScript

Search, filtering and paging are all query-string state. Every view has an
address that can be linked and shared, all of it works with the script blocked,
and the whole lot becomes standard WordPress archive behaviour unchanged. "Load
more articles" is a link to the next page, not a fetch button.

Four articles to a page, so the "load more" state is visible with seven posts.

### A register question for Kulwant

The seven article titles are in Title Case ("Your Website Gets Visitors. What
Stops Them Becoming Clients?"). Every other heading on the site is sentence
case. The titles are used exactly as written, but the two conventions sit next
to each other on the blog index, and one of them should give.

### Before this goes live

Replace all seven bodies, or delete the section and remove Blog from the nav.


## The first real article — 25 Sep 2026

`/blog/website-visitors-not-clients/` carries Kulwant's full copy. It is the
first piece on the blog that is not a placeholder. The other six are still
placeholder bodies under real titles.

### Three block types were added to the template

`note` for a single statement set apart from the paragraphs around it, `olist`
for a numbered list, and `table` for a captioned table. Each is data in the post
file, so all three move into Gutenberg unchanged.

### The captions are a claims device, not decoration

The article contains one table of numbers. The copy labels it twice: in the
sentence that introduces it and in the caption. **The caption prints above the
table**, so a reader cannot reach the figures without passing the line that says
what they are. It reads "an illustrative example. Not a client result and not a
forecast."

That is the right default for this site. Any table of numbers in a future
article should carry a caption saying where the numbers came from, and the
template makes that the path of least resistance.

The second table is captioned "suggestions to investigate, not a universal
formula". The third holds no figures and needs no caption.

### Two external references, both real

Nielsen Norman Group's form-design guidance, and the recommended lead-generation
events in Google Analytics. Both are attributed in the running text rather than
in a footnote, neither is quoted, and neither is presented as our own research.
The article states that the Analytics events require implementation, which is
true and is the kind of thing readers get wrong.

### The author line

Kulwant's copy has "[Author name] · [Publication date] · 11-minute read". The
eyebrow prints the topic, the date and the reading time. There is no named
author: the piece has not been attributed to a person, and a placeholder name is
not an option. The byline at the foot says RankinAI.

### Register

The article's own headings are sentence case, which is the site's convention.
The title in the index is Title Case, which is Kulwant's. The two conventions
now sit on the same page: the browser tab and the index card disagree with the
h1 in case. **This is the register question from the previous entry, and it is
now visible rather than theoretical.**


## Photographs on the blog, from Unsplash — 25 Sep 2026

Seven photographs, one per article. They are the first images on this site that
are not a client's own.

### What they are, and what they are not

Textural rather than illustrative: light on a wall, leaf shadow, woven canvas,
brown paper, concrete stairs, a building facade, one figure crossing an empty
street. **No laptops, no meeting rooms, no smiling stock teams.** A site that
has been careful about what it claims should not open its blog with a
photograph pretending to be our office, and the first article on the blog is
partly an argument that interchangeable stock imagery is what makes a good firm
look ordinary.

They are colour-graded down (desaturated, slight contrast lift) so they sit
under the palette rather than shouting over it.

| Article | Photograph | Photographer |
| --- | --- | --- |
| Your website gets visitors | Leaf shadow on a sunlit wall | Tim Mossholder |
| Can your next client find you | Sunlight across a bare wall | Kevin Ortiz |
| Your best sales answers | White canvas, woven texture | Annie Spratt |
| Cheap leads, expensive problem | A figure crossing a concrete street | K T |
| What prospective clients need to hear | Warm brown paper | Pixelbuddha Studio |
| The proposal went out | Pale concrete stairs | Ricardo Gomez Angel |
| Which part of your marketing | A white building facade | Joel Filipe |

### Hotlinked, not copied

Unsplash's API guidelines require the image URLs the API returns rather than a
copy on our own server, so these point at images.unsplash.com with the sizing
parameters on the query string. Two consequences worth knowing:

- The blog adds no image weight to this site's own hosting.
- **If Unsplash is ever unreachable, the blog images do not load.** The cards and
  the article hero are built so the page still reads without them, but it is a
  third-party dependency the rest of the site does not have.

### Attribution is in place

Every article credits its photographer under the picture, linking to their
Unsplash profile and to Unsplash, both with the referral parameters the
guidelines ask for. The index carries one line covering the thumbnails, which
are too small to hold a credit each.

One photographer, Rubén García, had a stronger stairs photograph but has not
accepted Unsplash's current terms, so a different one was used.

### Still to decide

The images are keyed to the article, not the topic. When the six placeholder
bodies are replaced, check that each picture still suits its piece.


## The article page redesigned as a long read — 25 Sep 2026

/blog/<slug>/ now has a rail: a contents list that follows the reader down the
page, and one short offer under it.

### The contents list builds itself

It is generated from the article's own h2 blocks, and each heading's anchor is
derived from its own text with the same function. Nothing is written by hand,
so the list cannot drift from the piece, and a duplicate heading gets a
suffixed anchor rather than a clash.

**The first version walked a counter alongside the render loop and the anchors
drifted after the fifth heading**, because the loop also renders nine other
block types. Deriving the id from the heading text cannot fall out of step.

### The current-section marker uses offsetTop, not IntersectionObserver

The reveal animation on this site transforms elements as they scroll into view,
and a transform moves the rect a browser reports without moving the element in
the document. An IntersectionObserver reads that same polluted geometry, which
is why the first version sat on section one the whole way down a
fourteen-thousand-pixel page. An offsetTop chain is the document position and a
transform cannot touch it. That is the third time this pattern has caught us on
this site.

The list works without JavaScript. The highlight is the only part that needs it.

### The rail is capped to the viewport

A twelve-section article makes a list taller than the screen, and a sticky block
taller than the screen has a bottom the reader can never reach — which would
have hidden the offer underneath it. The rail is capped, the contents list
scrolls inside it, and the offer is always visible.

### Two layout bugs worth recording

- `grid-template-columns: 1fr` in the responsive rule is `minmax(auto, 1fr)`,
  and the article contains a table whose min-content width is wider than a
  phone, so the column refused to shrink.
- Even with the track fixed and `min-width: 0` set, the article reported a used
  width of exactly 68ch on a 335px track. Stating `width: 100%` alongside the
  max-width resolved it. Both are the same class of problem: a max-width being
  taken as a width when nothing else constrains the box.

### What was added

Article link styles (underlined in running prose, clay on hover), row hover on
tables, an `img` block type, and two photographs inside the first article — a
doorway before "does the next step match how ready the visitor is", daylight
through windows before "what happens after the website succeeds". Both credited
under the picture like the hero.


## The article column widened to 30/70, four related articles — 25 Sep 2026

At Kulwant's instruction the long-read grid is now thirty per cent rail and
seventy per cent article, and the article fills its column rather than capping
at a reading measure. At 1440 that is a 348px rail and an 811px column.

**The trade-off, recorded rather than argued.** 811px at the body size is
roughly 90 characters a line. The usual comfortable range for continuous prose
is 60 to 80, and past that the eye has more trouble finding the start of the
next line. The line height was raised to compensate, which is the part of a
wide measure that actually costs a reader, and the breakout margins on images,
tables and pull quotes were reduced from 60px to 40px because the column no
longer needs as much help to feel wide.

If it reads long once there are more articles, the fix is one line: put a
max-width back on `.longread .article`.

Related reading went from two articles to four, four across on a wide screen,
two on a tablet and one on a phone.

### One cascade bug

The two-column rule for `.postgrid--four` sits in the 1100px block, which is
declared after the earlier 600px block, so a phone was getting two 160px cards
with the reading time running off the side. Same specificity, so the narrower
rule has to come later in the file. Fixed with a 600px block at the end, and
noted there, because the next person to add a responsive rule to this file will
hit the same thing.


## The rail as one panel, and the blog pages go light — 25 Sep 2026

### The rail is a single box

The contents list and the offer now sit in one panel: paper ground, hairline
border, the same card treatment as the post cards and the channel cards. The
contents are at the top, the offer closes the panel on sand, a hairline between
them. It reads as a thing on the page rather than as loose furniture beside the
text.

The panel still caps to the viewport with the list scrolling inside it, so the
offer stays reachable on a twelve-section article.

Below 1100px the panel lies down: contents left, offer right, divided by a
vertical hairline. Below 900px it is a column again and the divider goes back
to horizontal.

**One bug caught in that change.** The list keeps `min-height: 0` so it can
shrink inside the sticky panel, and that behaviour followed it into the stacked
layout, where it was squeezed to half its content and clipped the last six
sections behind the offer. It now takes `min-height: auto` and `flex: none`
below 1100.

### Three dark areas, and no more

At Kulwant's instruction the blog keeps only the header, the close and the
footer dark. The two forest bands are gone: the featured article on the index
and the related reading on the article page are both on the page's own cream
now.

**Read as cream, not as pure white.** The site's light ground is the cream and
shell gradient every other page uses, and repainting it to #FFFFFF would mean
changing the palette for the whole site rather than the blog. If literal white
was meant, that is a different and much larger change and it should be decided
for the site, not for two pages.

The featured card gained a light variant: ink title, body-coloured standfirst,
a hairline round the picture so it still reads as a panel without a dark ground
behind it, and the primary button in place of the cream one.


## The growth audit form cut to two fields — 25 Sep 2026

Kulwant's copy, built as `includes/auditform.php` so the offer is one file and
the same offer wherever it appears. Live on /growth-audit/, where it replaced
the form that was there.

### What came off, and why it matters commercially

The old form asked for six things: name, company, work email, phone, website
and an optional note. The new one asks for two: the website and an email
address.

**Name, company and phone are no longer collected at the point of enquiry.**
Whoever answers an audit request will have a URL and an email and nothing else,
so the name and the company have to come from the reply or from looking the
site up, and there is no phone number to call. That is a real trade: fewer
fields usually means more submissions and less qualified ones, and it is worth
watching once the form is live rather than assuming either way.

It is recorded here rather than in the file because it is a commercial decision,
not a design one.

### The reassurance now appears twice

The panel says "free, no obligation, no call required". The tick list beside it
already says "free, and it stays free", "back within one working day", "written
by a person, not generated" and "no call booked on your behalf". Both are true
and neither is wrong, but a reader meets the same promise twice in one screen.
Worth a decision: keep the ticks and shorten the panel line, or drop the ticks.

### Still no handler

`action="#"` posts nowhere. **This page must not go live without an endpoint.**
A form that silently does nothing is worse than no form, and this is now the
primary conversion path on the site. The same warning applies to the contact and
call forms.

The validation and the sent state were checked: both fields report "required"
when empty, and a completed submit swaps the form for the confirmation.


## /growth-audit/: how it works removed, questions restyled — 25 Sep 2026

### The how it works section is gone

Three steps and, under them, the "what this isn't" block: a sales call in
disguise, an automated report with your logo on the cover, something you sit
through a demo to receive.

**That objection block was the only place on the site answering it in those
words.** The two-field form's own line, "free, no obligation, no call
required", carries the same promise in shorter form, and the tick list beside
it says "no call booked on your behalf". So the promise survives; the fuller
answer does not. If it should come back, it belongs directly under the form
rather than three screens below it.

The three steps described the old six-field form ("five fields and a website
address"), so they were describing something that no longer existed anyway.

### The site now has one way of asking a question

This page used the `.fqs` / `.answers` stepper, which is the home page pattern.
Every other page uses the `<details>` accordion. The page now uses the
accordion, so a visitor moving between the audit page, a service page and the
questions page meets the same behaviour each time.

The stepper is left on the home page, which is the only place it survives. It
is worth deciding whether that stays a deliberate home page flourish or goes
the same way.

The answers were rewritten from single paragraphs into two short ones each,
which is what the accordion is built for, and the "your time: two minutes,
once" fact box was folded into the first line of its answer.


## The growth audit becomes a modal — 25 Sep 2026

Every "get your growth audit" link on the site now opens the green panel over
the page instead of loading a page. Forty-one links across eleven page types,
and **not one of them had to change**: the hook is the href they already had.

`includes/modal.php` renders the dialog once per page from the footer, with the
same `includes/auditform.php` panel inside it.

### The page is still there, on purpose

Kulwant asked to skip the idea of a page. The links still point at
/growth-audit/ and the page still answers, because the script intercepts the
click and opens the dialog instead. If the script has not run, has failed, or is
blocked, the link does what a link does and the visitor gets the page.

That is the same principle as the blog's search, filtering and paging, and it
buys three things: no link had to be edited, no bookmark or existing inbound
link breaks, and the URL is still there to rank and to share. **The offer never
depends on JavaScript.**

If the page should actually be deleted, that is a separate decision and it
would mean the audit is unreachable without JavaScript.

### What was checked

- Opens from a link on the home page, pricing, a service page, an industry
  page, the blog index and an article, without navigating away.
- Closes on Escape, on the backdrop, and on the close button.
- Focuses the website field on open.
- Validation and the sent state work inside the dialog.
- Scroll lock reuses the `rankinai:scroll-lock` event the mobile sheet already
  dispatches, so Lenis stops while the dialog is up.
- Fits at 375 with the fields stacked, and at 1440.
- Modified clicks (cmd, ctrl, shift, middle) are left alone, so "open in new
  tab" still gets the page.

### One rough edge

Returning focus to the link that opened the dialog works for most triggers but
not all: a duplicate of the header button lives inside the closed mobile sheet
and cannot take focus back. The code tries once on the next frame and accepts
failure rather than hunting for somewhere else to put it, because leaving focus
where the browser put it is better than throwing it to the top of the document.

### Unchanged, and still the biggest risk

`action="#"`. **The modal is now the primary conversion path on every page of
the site and it still posts nowhere.**
