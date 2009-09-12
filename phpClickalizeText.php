function f1init_makeClickableLinks($text)
{

        $text = html_entity_decode($text);
        $text = " ".$text;
        $text = eregi_replace('(((f|ht){1}tp://)[-a-zA-Z0-9@:%_\+.~#?&//=]+)',
                '<a type="convertedurl0" href="\\1">\\1</a>', $text);
        $text = eregi_replace('(((f|ht){1}tps://)[-a-zA-Z0-9@:%_\+.~#?&//=]+)',
                '<a type="convertedurl1" href="\\1">\\1</a>', $text);
        $text = eregi_replace('([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&//=]+)',
        '\\1<a type="convertedurl2" href="http://\\2">\\2</a>', $text);
        $text = eregi_replace('([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})',
        '<a type="convertedemail" href="mailto:\\1">\\1</a>', $text);
        $text = eregi_replace(' #([0-9a-z][0-9a-z-]+)',
        '<a type="hashtag" href="http://twitter.com/#search?q=\\1"> <em>#</em>\\1</a>', $text);
        $text = eregi_replace('@([0-9a-z][0-9a-z-]+)',
        '<a type="twitteruser" href="http://twitter.com/\\1"><em>@</em>\\1</a>', $text);

        return $text;
}

