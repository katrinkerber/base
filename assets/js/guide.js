$(document).ready(function() {

  // populate nav links based on included sections
  var $sections = $('[data-section]');
  var $nav = $('nav > ul');

  $sections.each(function(parentIndex) {
    var $this = $(this);
    var sectionParentTitle = $this.attr('data-section-title');
    var $sections = $this.children('[data-section-child]');

    // print section parent title
    $nav.append('<li><span class="nav__parent h3" id="section'+ parentIndex+1 +'">'+ sectionParentTitle +'</span><ul></ul></li>');

    // append child section links
    $sections.each(function(){
      var $this = $(this);
      var sectionID = $this.attr('id');
      var linkTitle = $this.find('h1:first-child').html();
      $nav.find('.nav__parent#section'+ parentIndex+1 +' + ul').append('<li><a href="#'+ sectionID +'">'+ linkTitle +'</a></li>');
    });
  });

  // tabs
  var $sectionChildren = $('[data-section-child]');
  var $links = $('nav').find('a');

  if(window.location.hash) {
    $sectionChildren.hide();
    $('[data-section-child]' + window.location.hash).show();
    $('nav').find('a[href="' + window.location.hash + '"]').addClass('nav__current');
  } else {
    $sectionChildren.hide();
    $('[data-section-child]#intro').show();
    $('nav').find('a[href="#intro"]').addClass('nav__current');
  }

  $links.click(function(){
    var $this = $(this);
    var target = $this.attr('href');
    window.location.hash = target;
    $links.not($this).removeClass('nav__current');
    $sectionChildren.hide();
    $this.addClass('nav__current');
    $('section' +target).fadeIn(500);
    return false;
  });

});
