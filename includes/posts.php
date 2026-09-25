<?php
/**
 * The blog index
 * =============================================================================
 * One array, read by four things: /blog/ to list, search and filter the posts,
 * the detail template to build the related-reading block, each post file to
 * find its own row, and the featured card at the top of the overview.
 *
 * DUMMY BODIES, REAL TITLES. The seven titles, standfirsts and topics below are
 * Kulwant's copy. The article bodies in blog-*.php are placeholders written so
 * the detail template can be designed against a real-looking page, and every
 * one of them carries no statistic, no client name and no result. A dummy
 * article with an invented figure in it is exactly the thing that survives into
 * production. See CLAIMS.md.
 *
 * The dates and reading times are placeholders. Replace them, or let the CMS
 * set them.
 *
 * WordPress: becomes the `post` type. 'topic' becomes a category, 'slug' the
 * post name, 'featured' a sticky flag.
 *
 * A post's URL is /blog/<slug>/ and its file is blog-<slug>.php. The
 * two-segment rewrite in .htaccess already routes that.
 */

/* The filter row, in the order Kulwant's copy lists them: the six services,
   then marketing strategy for the pieces that sit across all of them. */
$TOPICS = [
    'search'      => 'AI and search visibility',
    'advertising' => 'Paid advertising',
    'content'     => 'Content',
    'website'     => 'Website and conversion',
    'reputation'  => 'Reviews and reputation',
    'crm'         => 'CRM and automation',
    'strategy'    => 'Marketing strategy',
];

$POSTS = [

    [
        'slug'     => 'website-visitors-not-clients',
        'img' => [
            'photo' => 'photo-1502815806195-bf25bba76625',
            'alt'   => 'The shadow of leaves thrown across a plain sunlit wall',
            'by'    => 'Tim Mossholder',
            'user'  => 'timmossholder',
            'html'  => 'silhouette-of-leaves-by-the-wall-SHqyYGbFiQM',
        ],
        'topic'    => 'website',
        'featured' => true,
        'title'    => 'Your Website Gets Visitors. What Stops Them Becoming Clients?',
        'stand'    => 'Before increasing your traffic budget, examine what happens after someone arrives. A practical guide to understanding visitor intent, strengthening your offer and improving the path to an enquiry.',
        'date'     => '2026-09-18',
        'mins'     => 11,
    ],

    [
        'slug'  => 'find-you-without-your-name',
        'img' => [
            'photo' => 'photo-1565896643288-8b1f8ac7f1a2',
            'alt'   => 'Low sunlight falling across a bare grey wall',
            'by'    => 'Kevin Ortiz',
            'user'  => 'kevinortizdesign',
            'html'  => 'gray-wall-paint-cDcMHi6y7cI',
        ],
        'topic' => 'search',
        'title' => 'Can Your Next Client Find You Without Knowing Your Name?',
        'stand' => 'Your business name is only one way to search. Explore how service, location and problem-based searches can help new buyers discover your expertise.',
        'date'  => '2026-09-11',
        'mins'  => 6,
    ],

    [
        'slug'  => 'sales-answers-on-your-website',
        'img' => [
            'photo' => 'photo-1612538498613-35c5c8d675c4',
            'alt'   => 'A close view of white canvas, its weave just visible',
            'by'    => 'Annie Spratt',
            'user'  => 'anniespratt',
            'html'  => 'white-canvas-with-woven-texture-xz485Eku8O4',
        ],
        'topic' => 'content',
        'title' => 'Your Best Sales Answers Belong on Your Website',
        'stand' => 'The questions you answer in meetings can reveal gaps in your content. Here&rsquo;s how to turn those conversations into pages that help buyers decide.',
        'date'  => '2026-09-04',
        'mins'  => 5,
    ],

    [
        'slug'  => 'judging-enquiry-quality',
        'img' => [
            'photo' => 'photo-1548574194-6414df57d0af',
            'alt'   => 'One figure crossing a wide concrete street beside a long building shadow',
            'by'    => 'K T',
            'user'  => '_knt',
            'html'  => 'man-walking-through-concrete-street-u7SCebzS57Q',
        ],
        'topic' => 'advertising',
        'title' => 'Cheap Leads, Expensive Problem: How to Judge Enquiry Quality',
        'stand' => 'A low cost per lead tells only part of the story. Learn what to track between the first response and a worthwhile sales opportunity.',
        'date'  => '2026-08-28',
        'mins'  => 6,
    ],

    [
        'slug'  => 'what-clients-need-to-hear',
        'img' => [
            'photo' => 'photo-1706790608211-4c03fd4f4d33',
            'alt'   => 'A sheet of warm brown paper, lightly creased',
            'by'    => 'Pixelbuddha Studio',
            'user'  => 'pixelbuddhastudio',
            'html'  => 'a-piece-of-paper-with-a-brown-background-Ng5onpi5iRQ',
        ],
        'topic' => 'reputation',
        'title' => 'What Prospective Clients Need to Hear from Your Existing Ones',
        'stand' => 'Explore how specific, genuine feedback can help buyers understand your communication, approach and working relationship before they contact you.',
        'date'  => '2026-08-21',
        'mins'  => 5,
    ],

    [
        'slug'  => 'after-the-proposal',
        'img' => [
            'photo' => 'photo-1588680152893-a4b533646c6e',
            'alt'   => 'A flight of pale concrete stairs turning out of frame',
            'by'    => 'Ricardo Gomez Angel',
            'user'  => 'rgaleriacom',
            'html'  => 'white-concrete-stairs-with-black-metal-railings-Z61MuLuFQDQ',
        ],
        'topic' => 'crm',
        'title' => 'The Proposal Went Out. What Should Happen Next?',
        'stand' => 'Build a follow-up process that reflects the buyer&rsquo;s situation, gives your team a clear next action and keeps useful conversations moving.',
        'date'  => '2026-08-14',
        'mins'  => 6,
    ],

    [
        'slug'  => 'where-to-start',
        'img' => [
            'photo' => 'photo-1484242857719-4b9144542727',
            'alt'   => 'The repeating balconies of a white building against a pale sky',
            'by'    => 'Joel Filipe',
            'user'  => 'joelfilip',
            'html'  => 'white-high-rise-building-over-cloudy-sky-at-daytime-_Di_gyxSdSk',
        ],
        'topic' => 'strategy',
        'title' => 'Which Part of Your Marketing Needs Attention First?',
        'stand' => 'Visibility, messaging, conversion or follow-up? A practical way to investigate the gaps and decide where your next round of effort should go.',
        'date'  => '2026-08-07',
        'mins'  => 8,
    ],

];

/** The post row for a slug, or null. */
function post_by_slug(string $slug): ?array {
    global $POSTS;
    foreach ($POSTS as $p) {
        if ($p['slug'] === $slug) return $p;
    }
    return null;
}

/** The featured post, or the newest one if none is flagged. */
function post_featured(): ?array {
    global $POSTS;
    foreach ($POSTS as $p) {
        if (!empty($p['featured'])) return $p;
    }
    return $POSTS[0] ?? null;
}

/** Every post except the one given, newest first, capped. */
function posts_except(string $slug, int $limit = 2): array {
    global $POSTS;
    $out = [];
    foreach ($POSTS as $p) {
        if ($p['slug'] !== $slug) $out[] = $p;
    }
    return array_slice($out, 0, $limit);
}

/**
 * Title and standfirst, case-insensitive, on the words the reader typed. Two
 * fields is the whole of it: a flat-file site has nothing to index, and
 * pretending otherwise would mean a search box that misses the body of every
 * article. WordPress replaces this with a real query.
 *
 * A PLURAL FINDS THE SINGULAR. Without this, "enquiries" returns nothing on a
 * site whose articles all say "enquiry", and "enquiries" is one of the three
 * terms the empty state suggests trying. A reader who takes our own advice and
 * gets nothing back has been told the search is broken. The stem is crude and
 * one-directional on purpose: it widens a search that found nothing rather than
 * changing one that worked.
 */
function post_stem(string $w): string {
    if (mb_substr($w, -3) === 'ies') return mb_substr($w, 0, -3) . 'y';
    if (mb_substr($w, -2) === 'es')  return mb_substr($w, 0, -2);
    if (mb_substr($w, -1) === 's')   return mb_substr($w, 0, -1);
    return $w;
}

function posts_search(array $posts, string $q): array {
    $needle = mb_strtolower(trim($q));
    if ($needle === '') return $posts;

    /* The word as typed, and the shortest stem it and its singular share, so
       "enquiries" and "enquiry" both reduce to "enquir". */
    $single = post_stem($needle);
    $stem   = $single;
    $len    = min(mb_strlen($needle), mb_strlen($single));
    for ($i = 0; $i < $len; $i++) {
        if (mb_substr($needle, $i, 1) !== mb_substr($single, $i, 1)) {
            $stem = mb_substr($needle, 0, $i);
            break;
        }
        $stem = mb_substr($needle, 0, $i + 1);
    }
    if (mb_strlen($stem) < 4) $stem = $needle;

    return array_values(array_filter($posts, function ($p) use ($needle, $stem) {
        $hay = mb_strtolower(html_entity_decode($p['title'] . ' ' . $p['stand'], ENT_QUOTES, 'UTF-8'));
        return mb_strpos($hay, $needle) !== false || mb_strpos($hay, $stem) !== false;
    }));
}


/* --------------------------------------------------------------------------
   The photographs

   HOTLINKED, NOT COPIED. Unsplash's API guidelines require the image URLs the
   API returns rather than a copy on our own server, so these point at
   images.unsplash.com and carry the sizing parameters on the query string.
   That also means the blog costs this site no image weight of its own.

   ATTRIBUTION IS NOT OPTIONAL. Every photograph is credited to its
   photographer, with a link to their Unsplash profile and to Unsplash, both
   carrying the referral parameters the guidelines ask for. The credit sits
   under the picture on the article page, where a reader meets the photograph.

   These are the only photographs on the site that are not a client's. They are
   deliberately textural — light, paper, concrete, shadow — because a stock
   photograph of a smiling team would be the one thing on this site that is
   pretending. See CLAIMS.md.
   -------------------------------------------------------------------------- */

/** A sized, cropped Unsplash URL for one of the posts above. */
function post_img(array $p, int $w = 1200, int $h = 0): string {
    if (empty($p['img'])) return '';
    $q = [
        'ixlib' => 'rb-4.1.0',
        'auto'  => 'format',
        'fit'   => 'crop',
        'w'     => $w,
        'q'     => 70,
    ];
    if ($h) $q['h'] = $h;
    return 'https://images.unsplash.com/' . $p['img']['photo'] . '?' . http_build_query($q);
}

/** The photographer's profile, with the referral parameters Unsplash asks for. */
function post_img_by_url(array $p): string {
    return 'https://unsplash.com/@' . $p['img']['user'] . '?utm_source=RankinAI&utm_medium=referral';
}

/** Unsplash itself, same parameters. */
function unsplash_url(): string {
    return 'https://unsplash.com/?utm_source=RankinAI&utm_medium=referral';
}

/** 18 September 2026. */
function post_date(string $iso): string {
    $t = strtotime($iso);
    return $t ? date('j F Y', $t) : '';
}
