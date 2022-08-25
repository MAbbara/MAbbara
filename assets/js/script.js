if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
  document.documentElement.classList.add('dark')
  $(".themeToggle").html(`<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="fill-white h-5 w-5 lg:h-6 lg:w-6"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path></svg>  `)
} else {
  document.documentElement.classList.remove('dark')
  $(".themeToggle").html(`<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="fill-gray-800 h-5 w-5 lg:h-6 lg:w-6"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>  `)
}

$(document).ready(() => {
    let d2 = new Date();
    let diff = d2.getTime() - new Date(2002, 7, 5).getTime();
    let d = Math.floor(diff / (1000 * 60 * 60 * 24 * 365.25));
    $(".age").text(d);

    $(".contactForm").submit(function(e) {
      e.preventDefault();

      let name = $("#name");
      let email = $("#email");
      let subject = $("#subject");
      let message = $("#message");

      if (name.val() == '' || !name.val()) {
        alert("Name is required.");
      } else if (email.val() == '' || !email.val()) {
        alert("Email is required.");
      } else if (subject.val() == '' || !subject.val()) {
        alert("Subject is required.");
      } else if (message.val() == '' || !message.val()) {
        alert("Message is required.");
      } 

      $.post("actions/contact.php", {
        name: name.val(),
        email: email.val(),
        message: message.val(),
        subject: subject.val()
      }, data => {
        data = JSON.parse(data)

        if (data.success) {
          name.val('')
          email.val('')
          subject.val('')
          message.val('')
        } else {
          alert("Unable to send email.")
        }
      })
    });

    $(".goTop").click(function(e) {
      e.preventDefault();

      $('html, body').animate({
        scrollTop: $("body").offset().top
      }, 1500, 'easeInOutExpo');
    })

    $(".themeToggle").click(function() {
      let theme = localStorage.theme;

      if (theme == "light") {
        document.documentElement.classList.add('dark')
        $(".themeToggle").html(`<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="fill-white h-5 w-5 lg:h-6 lg:w-6"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path></svg>  `)
        localStorage.theme = "dark";
      } else {
        document.documentElement.classList.remove('dark')
        $(".themeToggle").html(`<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="fill-gray-800 h-5 w-5 lg:h-6 lg:w-6"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>  `)
        localStorage.theme = "light";
        
      }
    })

    $(".nav-item").click(function(e) {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          e.preventDefault();
          var target = $(this.hash);
          if (target.length) {
    
            var scrollto = target.offset().top;
    
            $('html, body').animate({
              scrollTop: scrollto
            }, 1500, 'easeInOutExpo');
    
            // if ($(this).parents('.nav-menu, .mobile-nav').length) {
            //   $('.nav-menu .active, .mobile-nav .active').removeClass('active');
            //   $(this).closest('li').addClass('active');
            // }
    
            // if ($('body').hasClass('mobile-nav-active')) {
            //   $('body').removeClass('mobile-nav-active');
            //   $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
            // }
          }
        }
      });

      $(".toggleNav").click(function() {
        let navbar = $("#mobile-menu")
        let before = $($(this).children()[1])
        let after = $($(this).children()[2])

        if (navbar.is(":visible")) {
            navbar.hide(300)
            before.show()
            after.hide()
        } else {
            navbar.show(500)
            after.show()
            before.hide()
        }
      })
    
})