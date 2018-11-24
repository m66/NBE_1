<?php
    include "php/config.php";
?>
<!doctype html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang['title'] ?></title>
    <link rel="shortcut icon" type="image/png" href="http://www.nbe.am/images/Logo_pub.png">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="styles/jPages.css">
    <link rel="stylesheet" href="styles/concatUs.css">
    <link rel="stylesheet" href="styles/struct.css">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
<header>
    <div class="logo">
        <div class="logoMargin">
            <div class="logoContent">
                <img src="images/logo.png" alt="Logo">
                <div class="headerTitle">
                    <a href="#">
                        <h1><?php echo $lang['country'] ?></h1>
                        <h4><?php echo $lang['title'] ?></h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="headerNav" style="background: #fff;">
        <!-- _________burger__________ -->
        <div class="open-slide">
            <div id="openSlideMenu">
                <svg width="30" height="30">
                    <path d="M0,5 30,5" stroke="#7F7F7F" stroke-width="3"/>
                    <path d="M0,14 30,14" stroke="#7F7F7F" stroke-width="3"/>
                    <path d="M0,23 30,23" stroke="#7F7F7F" stroke-width="3"/>
                </svg>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#" id="getHome"><p class="navItem"><?php echo $lang['home'] ?></p></a></li>
                <li><a href="#main"><p class="navItem newsButton"><?php echo $lang['news'] ?></p></a></li>
                <li><a href="#main"><p class="navItem structure"><?php echo $lang['structure'] ?></p></a></li>
                <li><a href="#main"><p class="navItem contactUs"><?php echo $lang['contactUs'] ?></p></a></li>
            </ul>
        </nav>
        <ul class="language">
            <li><a href="index.php?lang=en" name="en"><p class="button <?php echo ($_SESSION['lang'] == 'en') ? 'active' : ''; ?>">EN</p></a></li>
            <li><a href="index.php?lang=rs" name="ru"><p class="button <?php echo ($_SESSION['lang'] == 'rs') ? 'active' : ''; ?>">RU</p></a></li>
            <li><a href="index.php?lang=hy" name="am"><p class="button <?php echo ($_SESSION['lang'] == 'hy') ? 'active' : ''; ?>">AM</p></a></li>
        </ul>
    </div>
    <div id="side-menu" class="side-nav">
        <a href="#" id="getHome"><p class="navItem"><?php echo $lang['home'] ?></p></a>
        <a href="#"><p class="navItem"><?php echo $lang['news'] ?></p></a>
        <a href="#"><p class="navItem"><?php echo $lang['structure'] ?></p></a>
        <a href="#"><p class="navItem"><?php echo $lang['contactUs'] ?></p></a>
    </div>
    <div class="your-class">
        <div><a href="#"><img src="http://www.nbe.am/upload/images/1532423313.Calendar - Copy (2).jpg" style="width: 100%" alt="Workplace"></a></div>
        <div><a href="#"><img src="http://www.nbe.am/upload/images/1529957891.scientist-plant-soil-over-virtual-charts-science-biology-ecology-research-concept-close-up-young-female-wearing-89664233.jpg" style="width: 100%" alt="Dreams time"></a></div>
        <div><a href="#"><img src="http://www.nbe.am/upload/images/1529957937.Document.jpg" style="width: 100%" alt="Investigation"></a></div>
        <div><a href="#"><img src="http://www.nbe.am/upload/images/1529958242.digital-forensics.png" alt="Digital Forensics"></a></div>
        <div><a href="#"><img src="http://www.nbe.am/upload/images/1530171267.evidence_analysis-1024-512-604x270.jpg" alt="Foresight"></a></div>
        <div><a href="#"><img src="http://www.nbe.am/upload/images/1531042177.ss-analytics-data.jpg" alt="Technical service"></a></div>
        <div><a href="#"><img src="http://www.nbe.am/upload/images/1532423180.Calendar - Copy.jpg" alt="National bureau of expertises"></a></div>
    </div>
</header>
<section id="main">
    <div class="leftSidebar">
        <div class="navbar">
            <div>
                <form>
                    <input type="text" placeholder="<?php echo $lang['searchWEBSite'] ?>">
                    <input type="submit" value="<?php echo $lang['search'] ?>">
                </form>
            </div>
            <div class="nav">
                <div class="nav_1">
                    <div class=""><a href=""><?php echo $lang['n1'] ?></a></div>
                </div>
            </div>
            <div class="nav">
                <div class="nav_1">
                    <div class=""><a href=""><?php echo $lang['n2'] ?></a></div>
                </div>
            </div>
            <div class="nav">
                <div class="nav_1">
                    <div class=""><a href=""><?php echo $lang['n3'] ?></a></div>
                </div>
            </div>
            <div class="nav">
                <div class="nav_1">
                    <div class=""><a href=""><?php echo $lang['n4'] ?></a></div>
                </div>
            </div>
            <div class="nav" id="get_started_1">
                <div class="nav_1 opened">
                    <div><span class=".custom-select-trigger"><?php echo $lang['n5'] ?> <i class="arrowDown"></i></span></div>
                </div>
            </div>
            <div class="nav_control" id="nav_control_1">
                <div class="navControl_1">
                    <div class="navControlItem"><a href="">Ձգաբանական փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">Հետքաբանական փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">Ֆոտոտեխնիկական, դիմանկարային, տեսա- և աուդիոձայնագրական փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">Ֆիզիկատեխնիկական հետազոտությունների և քիմիական փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">Ձեռագրաբանական, հեղինակային և փաստաթղթաբանական փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">Հոգեբանական փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">Պայթյունատեխնիկական և հրդեհատեխնիկական փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">Տնտեսագիտական և հաշվապահական փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">Շինարարատեխնիկական փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">Ապրանքագիտական փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">Սննդամթերքի և խմիչքների փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">Մշակութաբանական փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">Համակարգչատեխնիկական փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">ՃՏՊ հանգամանքների, տրանսպորտային միջոցների տեխնիկական վիճակի և տրանսպորտա-հետքաբանական փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">Դատաբժշկական փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">Էկոլոգիական, հողագիտական և կենսաբանական փորձաքննությունների բաժին</a></div>
                    <div class="navControlItem"><a href="">Ճարտարագիտատեխնիկական փորձաքննությունների բաժին</a></div>
                </div>
            </div>
            <div class="nav" id="get_started_2">
                <div class="nav_1">
                    <div class=""><span><?php echo $lang['n6'] ?><i class="arrowDown"></i></span></div>
                </div>
            </div>
            <div class="nav_control" id="nav_control_2">
                <div class="navControl_1">
                    <div class="navControlItem"><a href="">Քրեաբանության կիրառական հիմնախնդիրների գիտահետազոտական կենտրոն</a></div>
                    <div class="navControlItem"><a href="">Ուսուցման և որակավորման կենտրոն</a></div>
                    <div class="navControlItem"><a href="">Որակի ապահովման բաժին</a></div>
                    <div class="navControlItem"><a href="">Գիտական հետազոտությունների և տեխնիկական փորձարկումների համակարգման բաժին</a></div>
                </div>
            </div>
            <div class="nav">
                <div class="nav_1">
                    <div class=""><a href=""><?php echo $lang['n7'] ?></a></div>
                </div>
            </div>
            <div class="nav">
                <div class="nav_1">
                    <div class=""><a href=""><?php echo $lang['n8'] ?></a></div>
                </div>
            </div>
            <div class="nav">
                <div class="nav_1">
                    <div class=""><a href=""><?php echo $lang['n9'] ?></a></div>
                </div>
            </div>
            <div class="nav" id="get_started_3">
                <div class="nav_1">
                    <div class=""><span><?php echo $lang['n10'] ?><i class="arrowDown"></i></span></div>
                </div>
            </div>
            <div class="nav_control" id="nav_control_3">
                <div class="navControl_1">
                    <div class="navControlItem"><a href="">2013</a></div>
                    <div class="navControlItem"><a href="">2014</a></div>
                    <div class="navControlItem"><a href="">2015</a></div>
                    <div class="navControlItem"><a href="">2016</a></div>
                    <div class="navControlItem"><a href="">2017</a></div>
                    <div class="navControlItem"><a href="">2018</a></div>
                </div>
            </div>
            <div class="nav">
                <div class="nav_1">
                    <div class=""><a href=""><?php echo $lang['n11'] ?></a></div>
                </div>
            </div>
        </div>
        <div class="videoNewsAll">
            <div class="videoNews">
                <div class="content">
                    <p>ARMENIAN NEWS: BREAKING NEWS 3.08.2018</p>
                    <div><img id="my_img" src="https://img.youtube.com/vi/YVkTuGClOo8/hqdefault.jpg" alt="Youtube Information"></div>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3049.3374080939457!2d44.45687927891804!3d40.15704078869878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abe8013fef643%3A0xcc6e01a9b980714e!2zMjQgQWRtaXJhbCBJc2Frb3YgQXZlLCBZZXJldmFuIDAwODIsINCQ0YDQvNC10L3QuNGP!5e0!3m2!1sru!2s!4v1539188604039" width="100%" height="300" style="border:0" allowfullscreen></iframe>
            <div class="mapContact">
                <p><span>Հասցե.</span> 0004 ք. Երևան, Ծովակալ Իսակովի պող. 24</p>
                <p><span>Հեռ.</span> (+37410) 77 77  10</p>
                <p><span>Էլ. փոստ</span> info@nbe.am</p>
                <p><span>Կայք.</span> www.nbe.am</p>
            </div>
        </div>
    </div>
    <div class="allContent" id="scroll">
        <div class="rightcontent">
            <div class="speechContent">
                <div class="person">
                    <div>
                        <img src="http://www.nbe.am/upload/images/1530816449.IMG_1124.jpg" alt="Argam Hovsepyan">
                        <h4><?php echo $lang['person'] ?></h4>
                    </div>
                    <p><?php echo $lang['degree'] ?></p>
                </div>
                <div class="speech">
                    <p><?php echo $lang['p1'] ?></p>
                    <p><?php echo $lang['p2'] ?></p>
                    <p><?php echo $lang['p3'] ?></p>
                </div>
            </div>
        </div>
        <div class="news">
            <div class="newsTitle"><span>Լրահոս</span></div>
            <div style="clear:both"></div>
            <div class="newsContent" id="newId"></div>
            <div style="clear:both"></div>
            <div id="pagination" class="pagination holder"></div>
            <div class="newsPagination"></div>
        </div>
        <div class="mapCopy">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3049.3374080939457!2d44.45687927891804!3d40.15704078869878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abe8013fef643%3A0xcc6e01a9b980714e!2zMjQgQWRtaXJhbCBJc2Frb3YgQXZlLCBZZXJldmFuIDAwODIsINCQ0YDQvNC10L3QuNGP!5e0!3m2!1sru!2s!4v1539188604039" width="100%" height="300" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>
<footer>
    <div class="footerTop">
        <div class="footerItem"><a href="#"><img src="http://www.nbe.am/upload/images/1531215503.logo.gif" alt="gif1"></a></div>
        <div class="footerItem"><a href="#"><img src="http://www.nbe.am/upload/images/1531217319.f1a7215556cbe3df0baeb3d987335d8b.png" alt="gif2"></a></div>
        <div class="footerItem"><a href="#"><img src="http://www.nbe.am/upload/images/1531217502.imageedit_1_9198038361.png" alt="gif3"></a></div>
        <div class="footerItem"><a href="#"><img src="http://www.nbe.am/upload/images/1531217686.imageedit_1_6752211123.png" alt="gif4"></a></div>
        <div class="footerItem"><a href="#"><img src="http://www.nbe.am/upload/images/1531217859.Emblem_of_Kazakhstan.svg (1).png" alt="gif5"></a></div>
        <div class="footerItem"><a href="#"><img src="http://www.nbe.am/upload/images/1531218035.client1.png" alt="gif6"></a></div>
        <div class="footerItem"><a href="#"><img src="http://www.nbe.am/upload/images/1531218325.imageedit_1_8115444134.png" alt="gif7"></a></div>
        <div class="footerItem"><a href="#"><img src="http://www.nbe.am/upload/images/1531218574.imageedit_1_3116429153.png" alt="gif8"></a></div>
    </div>
    <div class="footer">
        <div class="footerLeft">
            <h3>ԿԱՅՔԻ ԲԱԺԻՆՆԵՐ</h3>
            <div class="footerLink"><a href="">ԳԼԽԱՎՈՐ ԷՋ</a></div>
            <div class="footerLink"><a href="">ԼՐԱՀՈՍ</a></div>
            <div class="footerLink"><a href="">ԿԱՊ ԲՅՈՒՐՈՅԻ ՀԵՏ</a></div>
            <div class="footerLink"><a href="">Կառուցվածք</a></div>
            <div class="footerLink"><a href="">ԿԱՅՔԻ ՔԱՐՏԵԶ</a></div>
        </div>
        <div class="footerRight">
            <h3>ԿԱՊ</h3>
            <div class="footerLink home"><span> 0004 ք. Երևան, Ծովակալ Իսակովի պող. 24</span></div>
            <div class="footerLink phone"><span> (+37410) 77 77  10</span></div>
            <div class="footerLink message"><span> info@nbe.am</span></div>
            <div class="footerLink internet"><span> www.nbe.am</span></div>
        </div>
    </div>
    <div class="footerBottom">&#169; 2018 National Bureau of Expertises</div>
</footer>
<iframe id="iframeVideo" allowfullscreen="" src="https://www.youtube.com/embed/YVkTuGClOo8?autoplay=1"></iframe>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="slick/slick.min.js"></script>
<script src="scripts/jPages.min.js"></script>
<script src="scripts/main.js"></script>
<script>
    $(document).ready(function(){
        $('.your-class').slick({
            arrows: true,
            dots: true,
            autoplay: true
        });
        $('.footerTop').slick({
            slidesToShow: 5,
            arrows: false,
            dots: false,
            autoplay: false,
            autoplaySpeed: 1000,
            centerMode: true,
            // centerPadding: '40px',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                    }
                }
            ]
        });

        $('#get_started_1').on('click', function () {
            $('#nav_control_1').slideToggle(200);
            $(this).find('i.arrowDown').toggleClass('arrowDownUp');
        });
        $('#get_started_2').on('click', function () {
            $('#nav_control_2').slideToggle(200);
            $(this).find('i.arrowDown').toggleClass('arrowDownUp');
        });
        $('#get_started_3').on('click', function () {
            $('#nav_control_3').slideToggle(200);
            $(this).find('i.arrowDown').toggleClass('arrowDownUp');
        });

        //Structure toggle
        $('#get_started_4').on('click', function () {
            $('#nav_control_4').slideToggle(200);
        });

        // navbar open in media
        $('#openSlideMenu').on('click', function () {
            $('#side-menu').slideToggle(400);
        });

        $('#my_img').click(function () {
            var img = $(this).attr("src");
            var btn = "<button id='btn'>&#10006;</button>";
            var appear_img = "<div id='appear_img_div' onClick='closeImg()'></div>";

            // appear_img = appear_img.concat("<img id="my_img" src='"+img+"'>");
            $('body').append(appear_img);
            $('#appear_img_div').append($('#iframeVideo')).append(btn);
            $('#iframeVideo').css("display", "block");
        });
    });

    function closeImg() {
        // $('#iframeVideo').css('display', 'none');
        $('body').append($('#iframeVideo'));
        $('#appear_img_div').detach();
        // $("iframe").prop('muted', true);
        location.reload();
    }

    //pagination
    var pagination = $('.pagination');

    function setPagination(){
        pagination.jPages({
            containerID: 'newId',
            perPage: 15,
            startPage: 1,
            startRange: 1,
            midRange: 3,
            endRange: 1,
            first: false,
            last: false,
            minHeight: false,
            previous: "\«",
            next: "\»"
        });
    }
    function destroyPagination() {
        pagination.jPages('destroy');
    }
    setPagination();

    //load function for button
    $('.newsButton').on('click', function () {
        $('.allContent').load('news.html');
    });
    $('.structure').on('click', function () {
        $('.allContent').load('structure.html');
    });
    $('.contactUs').on('click', function () {
        $('.allContent').load('concatUs.html');
    });

    //language click to button
    //$('.button').first().addClass('active');
    $('.button').click(function(){
        var $this = $(this);
        $siblings = $this.parent().children(),

            $siblings.removeClass('active');
        $this.addClass('active');
    });

    //scroll button
    $(function() {
        $('.headerNav a[href*=#]').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 400 );
        });
    });

    //get home reload
    $('#getHome').on('click', function () {
        location.reload();
    })
</script>
</body>
</html>