$(document).ready(function() {

    // populate nav links based on included sections
    var $sectionsParent = $('.styleguide__sectionparent');
    var $nav = $('nav > ul');

    $sectionsParent.each(function(parentIndex) {
        var $this = $(this);
        var sectionParentTitle = $(this).attr('data-sectionparent-title');
        var $sections = $(this).children('.styleguide__section');

        // print section parent title
        $nav.append('<li><span class="parent h3" id="section'+ parentIndex+1 +'">'+ sectionParentTitle +'</span><ul></ul></li>');

        // append child section links
        $sections.each(function(){
            var sectionID = $(this).attr('id');
            var linkTitle = $(this).find('h1:first-child').html();
            $nav.find('.parent#section'+ parentIndex+1 +' + ul').append('<li><a href="#'+ sectionID +'">'+ linkTitle +'</a></li>');
        });
    });

    // tabs
    var $sections = $('.page').find('.styleguide__section');
    var $links = $('nav').find('a');

    if(window.location.hash) {
        $sections.hide();
        $('.page').find('.styleguide__section' + window.location.hash).show();
        $('nav').find('a[href="' + window.location.hash + '"]').addClass('current');
    } else {
        $sections.hide();
        $('.page').find('.styleguide__section#landing').show();
    }

    $links.click(function(){
        var $this  = $(this);
        var target = $(this).attr('href');
        window.location.hash = target;
        $links.not(this).removeClass('current');
        $sections.hide();
        $this.addClass('current');
        $('section' +target).fadeIn(500);
        return false;
    });
});
