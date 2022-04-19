var patharray = location.pathname.split("/");

// alert(patharray[3])


if(patharray[3] === '') {

  document.getElementById('lc_home_url').classList = 'active';
}

if(patharray[3] == 'html5') {
  

  // HTML5
  document.getElementById('nav-menu-item-166').classList = 'active';

  window.onload = function() {
    
    var folder_name = patharray[4];
    // var root_path = location.href;
    // alert(root_path);
    if(folder_name == "" || folder_name == 'home') {
      document.getElementById('html5-sidebar').className = 'sidebar-link-lesson-active';
      
    } else {
      // alert(folder_name);
      var nav = document.querySelector('.lesson-sidebar-container');
      var links = nav.getElementsByTagName('a');
      // alert(links.length);
      for(i = 1; i < links.length; i++) {
        if(links[i].getAttribute('href').indexOf(folder_name) > -1) {
          links[i].className = "sidebar-link-lesson-active";
        }
      }
      
    }

  }

}

if(patharray[3] == 'css3') {

  window.onload = function() {

    // CSS3
    document.getElementById('nav-menu-item-167').classList = 'active';
    
    var folder_name = patharray[4];
    // var root_path = location.href;
    // alert(root_path);
    if(folder_name == "" || folder_name == 'home') {
      document.getElementById('css3-sidebar').className = 'sidebar-link-lesson-active';
      
    } else {
      // alert(folder_name);
      var nav = document.querySelector('.lesson-sidebar-container');
      var links = nav.getElementsByTagName('a');
      // alert(links.length);
      for(i = 1; i < links.length; i++) {
        if(links[i].getAttribute('href').indexOf(folder_name) > -1) {
          links[i].className = "sidebar-link-lesson-active";
        }
      }
      
    }

  }
}

if(patharray[3] == 'bootstrap') {

  // Bootstrap
  document.getElementById('nav-menu-item-168').classList = 'active';

  window.onload = function() {
    
    var folder_name = patharray[4];
    // var root_path = location.href;
    // alert(root_path);
    if(folder_name == "" || folder_name == 'home') {
      document.getElementById('boot-sidebar').className = 'sidebar-link-lesson-active';
      
    } else {
      // alert(folder_name);
      var nav = document.querySelector('.lesson-sidebar-container');
      var links = nav.getElementsByTagName('a');
      // alert(links.length);
      for(i = 1; i < links.length; i++) {
        if(links[i].getAttribute('href').indexOf(folder_name) > -1) {
          links[i].className = "sidebar-link-lesson-active";
        }
      }
      
    }

  }
}

if(patharray[3] == 'javascript') {

  // Javascript
  document.getElementById('nav-menu-item-169').classList = 'active';

  window.onload = function() {
    
    var folder_name = patharray[4];
    // var root_path = location.href;
    // alert(root_path);
    if(folder_name == "" || folder_name == 'home') {
      document.getElementById('js-sidebar').className = 'sidebar-link-lesson-active';
      
    } else {
      // alert(folder_name);
      var nav = document.querySelector('.lesson-sidebar-container');
      var links = nav.getElementsByTagName('a');
      // alert(links.length);
      for(i = 1; i < links.length; i++) {
        if(links[i].getAttribute('href').indexOf(folder_name) > -1) {
          links[i].className = "sidebar-link-lesson-active";
        }
      }
      
    }

  }
}

if(patharray[3] == 'php') {

  // PHP
  document.getElementById('nav-menu-item-170').classList = 'active';

  window.onload = function() {
    
    var folder_name = patharray[4];
    // var root_path = location.href;
    // alert(root_path);
    if(folder_name == "" || folder_name == 'home') {
      document.getElementById('php-sidebar').className = 'sidebar-link-lesson-active';
      
    } else {
      // alert(folder_name);
      var nav = document.querySelector('.lesson-sidebar-container');
      var links = nav.getElementsByTagName('a');
      // alert(links.length);
      for(i = 1; i < links.length; i++) {
        if(links[i].getAttribute('href').indexOf(folder_name) > -1) {
          links[i].className = "sidebar-link-lesson-active";
        }
      }
      
    }

  }
}