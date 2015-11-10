( function( $ ) {
  wp.customize( 'site-title', function( value ) {
    value.bind( function( to ) {
      $( 'h1.brand' ).css( 'color', to );
    } );
  } );
  wp.customize( 'header-tags', function( value ) {
    value.bind( function( to ) {
      $( 'h1, h2, h3' ).not('h1.brand').css( 'color', to );
    } );
  } );
  wp.customize( 'body-text', function( value ) {
    value.bind( function( to ) {
      $( 'p' ).css( 'color', to );
    } );
  } );
  wp.customize( 'border-color', function( value ) {
    value.bind( function( to ) {
      $( '.sticky, .nav-container ul li ul' ).css( 'border-color', to );
    } );
  } );
  wp.customize( 'sticky-background', function( value ) {
    value.bind( function( to ) {
      $( '.sticky' ).css( 'background-color', to );
    } );
  } );
  wp.customize( 'comment-background', function( value ) {
    value.bind( function( to ) {
      $( '.even, .children .odd, .bypostauthor' ).css( 'background-color', to );
    } );
  } );
  wp.customize( 'links', function( value ) {
    value.bind( function( to ) {
      $( 'a, a:visited' ).css( 'color', to );
    } );
  } );
  wp.customize( 'navbar-background', function( value ) {
    value.bind( function( to ) {
      $( '.navbar-pdxc' ).css( 'background-color', to );
    } );
  } );
  wp.customize( 'navbar-border', function( value ) {
    value.bind( function( to ) {
      $( '.navbar-pdxc' ).css( 'border-color', to );
    } );
  } );
  wp.customize( 'nav-bar-links', function( value ) {
    value.bind( function( to ) {
      $( '.navbar-pdxc .navbar-nav > li > a, .navbar-pdxc .navbar-nav > li > a:hover, .navbar-pdxc .navbar-nav > li > a:focus' ).css( 'color', to );
    } );
  } );
  wp.customize( 'nav-bar-active-link', function( value ) {
    value.bind( function( to ) {
      $( '.navbar-pdxc .navbar-nav > .active > a, .navbar-pdxc .navbar-nav > .active > a:hover, .navbar-pdxc .navbar-nav > .active > a:focus' ).css( 'color', to );
    } );
  } );
  wp.customize( 'nav-bar-active-link-background', function( value ) {
    value.bind( function( to ) {
      $( '.navbar-nav>li.active>a, .navbar-nav>li.active>a:focus, .navbar-nav>li.active>a:hover' ).css( 'background-color', to );
    } );
  } );
  wp.customize( 'nav-sub-menu', function( value ) {
    value.bind( function( to ) {
      $( '.navbar ul li ul' ).css( 'background-color', to );
    } );
  } );
  wp.customize( 'sidebar-background', function( value ) {
    value.bind( function( to ) {
      $( '#sidebar' ).css( 'background-color', to );
    } );
  } );
} )( jQuery );
