jQuery('.recipes').click(function(){
  jQuery('.menu').toggleClass('showNav');
})

jQuery('.x').click(function(){
  jQuery('.menu').toggleClass('showNav');
})

// hide second article at start
jQuery('#two').hide();

// add class to first button to show it's selected
jQuery('.toggle-nav button[data-tab="one"]').addClass('selected');

// handle button clicks
jQuery('.toggle-nav button').on('click',function(){
  // save the data-tab value
  // of the button just clicked for later
  var current = jQuery(this).data('tab');
  // remove selected class from both buttons
  jQuery('.toggle-nav button').removeClass('selected');
  // add class to the selected button
  jQuery(this).addClass('selected');
  // hide all articles
  jQuery('article').hide();

  // show the article related to the button clicked;
  // create the dynamic id by concatenating
  // the hash + the value from the button
  // that relates to the id of the article
  jQuery('#'+current).show();
})


// jQuery('#one #inner, #two #inner').hide();

// // handle button clicks
// jQuery('#one #showone, #two #showone').click(function(){

// 	jQuery('#one #inner, #two #inner').show();
// 	jQuery('html').scrollTop(800);
// 	jQuery(this).hide();

// })

// $('#showtwo').click(function(){

// 	$('#twomore').show();

// 	// $('.bottomheader').css("grid-column", "1/-1");
// 	// $('header a').html('<img src="img/logoblack.png">');
//   // save the data-tab value
//   // add class to the selected button
//   // hide all articles
//   // $('#one, #two').hide();
//   $('#onemore').hide();

// })

jQuery('header a').click(function(){
	location.reload(true);
})

if (matchMedia) {
const mq = window.matchMedia("(min-width:62.1875em)");
mq.addListener(WidthChange);
WidthChange(mq);
}

// media query change
function WidthChange(mq) {
if (mq.matches) {


jQuery(document).scroll(function(){
    var row = jQuery('header'), scrollTop = jQuery(this).scrollTop();
    if(scrollTop > 1)
    {   
        row .css({"height":"15vh"});
        row .css({"background-color":"#ffffff"});
        row .css({"position":"fixed"});
    }
    else if (scrollTop <= 1)
    {
        row.css({"height":"30vh"});
        row .css({"background-color":"transparent"});
        row .css({"position":"relative"});
    }

    var row = jQuery('header nav'), scrollTop = jQuery(this).scrollTop();
    if(scrollTop > 1)
    {   
        row .css({"height":"13vh"});
    }
    else if (scrollTop <= 1)
    {
        row.css({"height":"28vh"});
    }

    var row = jQuery('.bab, .me'), scrollTop = jQuery(this).scrollTop();
    if(scrollTop > 1)
    {   
        row .css({"margin-bottom":"1rem"});
        row.css({"font-size":"4rem"});
    }
    else if (scrollTop <= 1)
    {
        row.css({"margin-bottom":"2rem"});
        row.css({"font-size":"6rem"});
    }

    var row = jQuery('.initial'), scrollTop = jQuery(this).scrollTop();
    if(scrollTop > 1)
    {   
        row .css({"height":"100vh"});
    }
    else if (scrollTop <= 1)
    {
        row.css({"height":"70vh"});
    }

    var row = jQuery('.headimg'), scrollTop = jQuery(this).scrollTop();
    if(scrollTop > 1)
    {   
        row .html('<img src="http://bingeworthy.nathanspinetti.com/wp-content/themes/Bingeworthy_Theme/img/logoblack.png">');
    }
    else if (scrollTop <= 1)
    {
        row .html('<img src="http://bingeworthy.nathanspinetti.com/wp-content/themes/Bingeworthy_Theme/img/logo.png">');
    }


    var row = jQuery('header a img'), scrollTop = jQuery(this).scrollTop();
    if(scrollTop > 1)
    {   
        row .css({"width":"60%"});
    }
    else if (scrollTop <= 1)
    {
        row .css({"width":"80%"});
    }

    var row = jQuery('.bottomheader'), scrollTop = jQuery(this).scrollTop();
    if(scrollTop > 1)
    {   
        row .css({"border-bottom": "none"});
        row .css({"box-shadow":"0 1px 3px rgba(0, 0, 0, 0.4)"});
        row .css({"grid-column":"1/-1"});

    }
    else if (scrollTop <= 1)
    {
        row .css({"grid-column": "2/-1"});
        row .css({"border-bottom":"1px solid #707070;"});
    }
});
}
}

// if (matchMedia) {
// const mq = window.matchMedia("(max-width: 769px)");
// mq.addListener(WidthChange);
// WidthChange(mq);
// }

// // media query change
// function WidthChange(mq) {
// if (mq.matches) {


//     jQuery(document).scroll(function(){

//     var row = jQuery('.bab, .me'), scrollTop = jQuery(this).scrollTop();
//     if(scrollTop > 1)
//     {   
//         row .css({"margin-bottom":"1rem"});
//         row.css({"font-size":"3rem"});
//     }
//     else if (scrollTop <= 1)
//     {
//         row.css({"margin-bottom":"2rem"});
//         row.css({"font-size":"4rem"});
//     }

//     var row = jQuery('.headimg'), scrollTop = jQuery(this).scrollTop();
//     if(scrollTop > 1)
//     {   
//         row .html('<img src="http://bingeworthy.nathanspinetti.com/wp-content/themes/Bingeworthy_Theme/img/logoblack.png">');
//     }
//     else if (scrollTop <= 1)
//     {
//         row .html('<img src="http://bingeworthy.nathanspinetti.com/wp-content/themes/Bingeworthy_Theme/img/logoblack.png">');
//     }

//     var row = jQuery('.bottomheader'), scrollTop = jQuery(this).scrollTop();
//     if(scrollTop > 1)
//     {   
//         row .css({"border-bottom": "none"});
//         row .css({"box-shadow":"0 1px 3px rgba(0, 0, 0, 0.4)"});
//         row .css({"grid-column":"1/-1"});

//     }
//     else if (scrollTop <= 1)
//     {
//         row .css({"grid-column": "1/-1"});
//         row .css({"border-bottom":"1px solid #707070;"});
//     }

//     var row = jQuery('header a'), scrollTop = jQuery(this).scrollTop();
//     if(scrollTop > 1)
//     {   
//         row .css({"margin-top":"0rem"});
//     }
//     else if (scrollTop <= 1)
//     {
//         row.css({"margin-top":"-10rem"});
//     }
// });



// }

// }