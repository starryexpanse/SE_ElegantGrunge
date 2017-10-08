<?php

function printBios() {

$members = array(

    array(
        'full' => '2016/06/Leonard-thumb.jpg',
        'thumb' => '2016/06/Leonard-thumb.jpg',
        'name' => 'Leonard Sch&ouml;lch',
        'bio' => 'Leonard joins the team from Germany, to help with all things 3D and help the team realize the artistic vision of a modern Riven.'
    ),

    array(
        'full' => '2010/08/Will.png',
        'thumb' => '2013/10/WillThumb.png',
        'name' => 'Will Kimerer',
        'bio' => 'Will has an amazing talent for low level computer programming stuff&#8230; and art too! He&#8217;s one of our main modelers and texture artists at the moment, and he&#8217;s often surrounded by a torrent of technology.'
    ),

    array(
        'full' => '2010/08/nickroster.jpg',
        'thumb' => '2010/08/nickroster1.jpg',
        'name' => 'Nick Mower',
        'bio' => 'Nick, another spectacular 3D artist, is first and foremost the project&#8217;s very own, custom-caught Australian. Armed with a graduate degree in animation, Nick has used his Australianity to fight the various challenges that have reared their collective ugly head, by demonstrating superb and detail-oriented modeling skill in the face of darkness.'
    ),

    array(
        'full' => '2014/02/iman-full.jpg',
        'thumb' => '2014/02/iman-thumb.jpg',
        'name' => 'Iman Rastegari',
        'bio' => 'A professional multimedia producer, Iman joined the Starry Expanse team to champion the video side of things, both for in-game assets and marketing materials. Since many of these video needs are currently further out in the project&#8217;s pipeline, he&#8217;s been tackling many of our other media needs, such as promotional content, social media strategy, and a visual overhaul of our website. He&#8217;s also restructured our internal task management system, and tries to pitch in wherever else he can.'
    ),

    array(
        'full' => '2010/08/matt.jpg',
        'thumb' => '2010/08/matt_thumb.jpg',
        'name' => 'Matthew Sampson',
        'bio' => 'An animator who sails the high seas of awesomeness, Matt Sampson is a wizard. He&#8217;s contributed tons to the most painstaking and cleverness-requiring aspects of the project, including meticulously matching terrain and architecture in a 3D view using 2D reference shots, and creating and texturing 54 unique vegetation assets for the game, all of which breathe life into the recreated world. Equipped with Full Sail education, he has also begun the daunting task of rigging and animating the character models.'
    ),


    array(
        'name' => 'Tim Mrozek',
        'full' => '2010/08/Tim-full.jpg',
        'thumb' => '2010/08/Tim-thumb.jpg',
        'bio' => "Tim was born in the land of The Wire, and now resides in D.C. where he keeps the city safe from the threat of n-gons and bad edgeloops, animating and modeling primarily for television. He joined the Starry Expanse project to model and zbrush all of Riven's memorable characters back to life!"
    ),

    array(
        'name' => 'Robert Kreps',
        'full' => '2014/03/robert.png',
        'thumb' => '2014/03/robert.png',
        'bio' => 'Freelance 3D artist by day, methodical gamer by night, Robert is a specialist in hard surface modeling. He usually uses his formal training in the art of games to make shiny overly-complicated robots and guns, but a world of islands and levers were a welcome change of pace.'
    ),

    array(
        'full' => '2014/03/Kelly.jpg',
        'name' => 'Kelly Coston',
        'thumb' => '2014/03/Kelly_thumb.jpg',
        'bio' => 'Kelly is from the Pacific Northwest, where she runs her own graphic arts business. A graduate of the Art Institute of Portland, she brings 3D modeling, texturing, graphic arts, and an endless supply of enthusiasm to the table.'
    ),

    array(
        'name' => 'Vincent Holten',
        'bio' => 'Our font artisan, Vincent is hard at work creating high-quality, vector-based fonts for use in the many journals found throughout the game.'
    ),

    /*
    array(
        'name' => 'Chad Williams',
        'bio' => 'Chad joined on as a programmer and part-time artist, and now helps out with Perforce hosting and such.'
    ),
    */

    array(
        'full' => '2010/08/rr-full.png',
        'thumb' => '2010/08/rr-thumb.png',
        'name' => 'Merijn Hijmans',
        'bio' => 'Merijn is our in-house critic. A professional product designer with an emphasis on engineering, he always provides assessment of how we can do things better, more efficiently, or more clearly.'
    ),

    array(
        'full' => '2015/03/PhilipPeterson.jpg',
        'thumb' => '2015/03/PhilipPeterson_Thumb.png',
        'name' => 'Philip Peterson',
        'bio' => 'A founder of the Starry Expanse project, Philip started out planning and modeling, but has since switched over to programming and coordination. A pioneer of new systems, he is always eager to help the project stay equipped with the most effective and elegant use of technology.'
    ),

    array(
        'full' => '2010/08/zib.jpg',
        'thumb' => '2010/08/zib-thumb.jpg',
        'name' => 'Zib Redlektab',
        'bio' => "A founder of the Starry Expanse Project, Zib was somewhat intimidated by the concept of building a \"realRiven\" in the beginning. However, having triumphed over this trepidation, he now represents us every year at Mysterium, the Myst convention, as well as serves as the project's chief spokesperson."
    ),

    array(
        'thumb' => '2015/03/JosephGrout.png',
        'full' => '2015/03/JosephGrout.png',
        'name' => 'Joseph Grout',
        'bio' => "Joseph is a freelance animator based out of Savannah, Georgia. A graduate of the Art Institute of Atlanta, he joined the project to work on all things animated and is excited to work on some iconic scenes."
    ),

    array(
        'name' => 'Hollister Starrett',
        'full' => '2017/08/Hollister.jpg',
        'thumb' => '2017/08/Hollister_thumb.png',
        'bio' => "A singer/actor/dancer by day and composer by night, Hollister is incredibly excited to help bring the audio side of his favorite game into the modern age!"
    ),

    array(
        'name' => 'Fran&ccedil;ois Hurtubise',
        'bio' => ""
    ),

    array(
        'name' => 'Nathan Grove',
        'bio' => ""
    ),

    array(
        'name' => 'Liam Smyth',
        'bio' => ""
    ),

    array(
        'name' => 'Jacek Kalinowski',
        'bio' => ""
    ),

    array(
        'thumb' => '2017/08/jonas_thumb.png',
        'full' => '2017/08/jonas.png',
        'name' => 'Jonas Becsan',
        'bio' => "A self-proclaimed lazy Norwegian, aspiring pilot, and 3D artist, Jonas got his taste for filmmaking in his early youth. Since then, he has touched many aspects of film production, but 3D and VFX became a big passion. Now, he's getting his hands dirty with game design on the Starry Expanse project.",
    ),

    array(
        'name' => 'Kyle Hovey',
        'bio' => "Kyle works as a software developer for the Utah Power Electronics Laboratory and Electrical Vehicle Research facility as a part of SELECT, a university research organization that focuses on electrical vehicle development and integration. He is one of our system administrators and says he has been a \"devout Myst fan\" since age 4.",
    ),

    array(
        'name' => 'Brandon Kouri',
        'bio' => ""
    ),

    array(
        'name' => 'Ryan Jung',
        'bio' => ""
    ),

    array(
        'name' => 'Paul Petre',
        'bio' => ""
    ),

    array(
        'name' => 'Chris Mumford',
        'full' => '2017/08/Chris.png',
        'thumb' => '2017/08/Chris_thumb.png',
        'bio' => "Chris began his career as a software engineer with a medical imaging startup. He then moved into visual simulation, gaming, networking, security, and browser development. Chris contributes to the Starry Expanse project writing tools, and working on the game source."
    ),

);

shuffle($members);

$i = 0;
foreach ($members as $member) {
    $i++;

    $safename = htmlspecialchars($member['name']);

    echo <<<ENDHTML

    <tr>

        <td valign="top">

ENDHTML;

if (isset($member['full']) && isset($member['thumb'])) {

    echo <<<ENDHTML
            
            <span class="frame-outer small aligncenter size-full wp-image-708">
                <span><span><span><span>

                    <a  href="/wp-content/uploads/$member[full]"
                        rel="lightbox[$i]" title="$safename"><img
                                class="aligncenter size-full wp-image-708"
                                src="/wp-content/uploads/$member[thumb]"
                                alt="$member[name]" width="97" height="150"/></a>

                </span></span></span></span>
            </span>

ENDHTML;

}

    echo <<<ENDHTML

        </td>

        <td valign="top">
            <b>$member[name]</b>
            <p></p>
            <div>
                $member[bio]
            </div>
        </td>

    </tr>

ENDHTML;

    }

}

?>

This team roster is displayed in a random order.
<br /><br />
<table cellspacing="4" cellpadding="10">
<tbody>


<?php
printBios();

// HACK: update the post's modified date by when this file
// was last modified
$post_date = get_post_field('post_date_gmt', get_the_ID());
$page_date = date("Y-m-d H:i:s", filemtime(__FILE__));
if ($post_date != $page_date) {
    wp_update_post(array('ID' => get_the_ID(), 'post_date_gmt' => $page_date));
}

?>

</td>
</tr>
</tbody>
</table>

<br /><br /><br />
Last updated <?php echo $page_date; ?> GMT
<?php

/* ex-members:

    array(
        'full' => '2010/08/Davis-full.jpg',
        'thumb' => '2010/08/Davis-thumb.jpg',
        'name' => 'Davis Engel',
        'bio' => 'Davis, a legendary warrior from the southwest whose art skills were the stuff of legend, discovered the Starry Expanse Project after many years of searching for a game as epic as Riven. Having found no such alternative, he brought his jack-of all trades 3D skill and Sony Santa Monica Studio experience and recently joined with the might of the team in mutual mightiness to bring realRiven to life.'
    ),

*/
