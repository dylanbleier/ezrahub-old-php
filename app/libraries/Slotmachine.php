<?php

class Slotmachine {

    static function sloot($thread, $reply) {
        static $slot_replies = array(
            "haha hey i'm a new transfer! (psych major) and i'm just looking to make some friends to cuddle with and keep me company for a little bit tonight. pm me if your in a top frat ;) lol",
            "heyhey wow I really wish my boyfriend was here... i'm so touch starved and want to feel someones hands on my body. anyone want to text a little? pm me",
            "yeah i used to be a slot machine but now i'm just looking for a boy who will respect me and treat me right. why can't any boys just grow up and be respectful to girls?? pm me if your a real man and know how to respect a woman and treat her right",
            "i really just need something in my mouth right now lol...",
            "haha once I gave blowjobs to three guys in the same night and then cuddled with this beta engineer guy... and my boyfriend never found out! one of the best nights i've ever had",
            "don't even ask me about spring break last year lollll",
            "you can put it anywhere you know... just PM me...",
            "lol what frat are you in? you sound hot...i'll pm a picture of me to you....dump you're old gf and hang out with me, you'll have a better time ;)",
            "i'm not wearing any underwear just saying boys",
            "you sound so much cuter than other guys ive poppycocked, why haven't we yet?? pm me",
            "i'm just really bored and hanging out naked in my bed lol.. pm me if you want to talk haha i live in collegetown",
            "i don't know why but every time you post I get so restless. im touching myself right now lol, why don't you join me? pm if your in a top frat...",
            "Love me or hate me, just know you'll want to poppycock me!",
            "i used to be a gymnast... you can't even imagine the positions I can get into lol. you should see me do splits..",
            "i'm just not like other girls, i'm totally willing to admit that i want the dick... ;)",
            "can I be your midnight snack?",
            "can't go a day without the dick ;)",
            "how about instead of playing xbox, you come play with me, I promise ill make it worth it. pm me",
            "heyyyyy :)",
            "hha hey pm me? :)",
            "i'm so lonelyy right nowwwww ugh just want someone in a top frat to cuddle with me for tonight",
            "i'm pretty outgoing in bed boys... just ask and you can do anything to me ;)"
        );

        //don't reply to people quoting another post with the targeted text in it
        $slot_reply_quote_body = preg_replace('/\[quote=\"([^\"]+)\"\](.*?)\[\/quote\]/is', '', $reply->body);
        $slot_reply_quote_body = preg_replace('/\[quote\](.*?)\[\/quote\]/is', '', $slot_reply_quote_body);

        //did someone say slot machine?
        if (preg_match('/slot machine/', $slot_reply_quote_body) && mt_rand(1,100) > 40) {
            $slot_reply_quote_body = preg_replace('/\[img\](.*?)\[\/img\]/is', "[url]$1[/url]", $slot_reply_quote_body);
            $slot_reply = Reply::create(array(
                'thread_id' => $thread->id,
                'body' => '[quote="' . $reply->user . '"]' . $slot_reply_quote_body . "[/quote]\r\n" . $slot_replies[mt_rand(0, count($slot_replies) - 1)],
                'user' => 'slotmachine',
                'ip_addr' => '8.8.8.8',
                'location' => 'turning stone resort & casino'
            ));
            return;
        }
    }
}

?>
