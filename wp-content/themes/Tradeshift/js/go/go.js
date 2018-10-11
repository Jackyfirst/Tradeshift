// TS Go JS

$(document).ready(function($){
    var $html = $("html");
    setTimeout(function() {
        $html.addClass("showPage");
    }, 800);
    var goAnimation = {
        checkForAnimationSupport: function() {
            var desktopLarge;
            var csstransitions = $html.hasClass("csstransitions");
            var notouch = $html.hasClass("no-touch");
            var csstransforms = $html.hasClass("csstransforms");

            if (window.matchMedia("(min-width: 1200px)").matches) {
                desktopLarge = true;
            } else {
                desktopLarge = false;
            }

            if(csstransitions && notouch && csstransforms && desktopLarge) {
                $html.addClass("goSupportsAnimations");
                this.initAnimation();
                setTimeout(function() {
                    $html.addClass("enabledTransitions");
                }, 1000);
            }
        },
        initAnimation: function() {
            this.destroyed = false;
            this.allWaypointElements = $(".ts-go .container");
            this.bindMethods();
            this.setupEvents();
            $("#container1").addClass("animated");
            this.createScrollMagicAnimations();
        },
        bindMethods: function() {
            this.setupEvents = this.setupEvents.bind(this);
            this.handleResize = this.handleResize.bind(this);
            this.destroy = this.destroy.bind(this);
            this.destroyScrollMagic = this.destroyScrollMagic.bind(this);
            this.createScrollMagicAnimations = this.createScrollMagicAnimations.bind(this);
            this.activateWaypoint = this.activateWaypoint.bind(this);
        },
        setupEvents: function() {
            $(window).resize(this.handleResize);
        },

        createScrollMagicAnimations: function() {
            this.scrollMagicController = new ScrollMagic.Controller();

             this.scrollMagicWaypointScenes = [
                {
                    scene: this.scrollMagicWaypointScene1,
                    elementid: "#go-scroll-content-1",
                    activator: "#container1"
                },
                {
                    scene: this.scrollMagicWaypointScene2,
                    elementid: "#go-scroll-content-2",
                    activator: "#container2"
                },
                {
                    scene: this.scrollMagicWaypointScene3,
                    elementid: "#go-scroll-content-3",
                    activator: "#container3"
                },
                {
                    scene: this.scrollMagicWaypointScene4,
                    elementid: "#go-scroll-content-4",
                    activator: "#container4"
                },
                {
                    scene: this.scrollMagicWaypointScene5,
                    elementid: "#go-scroll-content-5",
                    activator: "#container5"
                },
                {
                    scene: this.scrollMagicWaypointScene6,
                    elementid: "#go-scroll-content-6",
                    activator: "#container6"
                }
            ];

            var index;
            var customDuration;
            for (var i = 0; i <= this.scrollMagicWaypointScenes.length - 1; i++) {

                index = i;

                if(i === 3) {
                    customDuration = "-42%";
                } else if (i === 1){
                    customDuration = "-81%";
                } else {
                    customDuration = "-100%";
                }

                this.scrollMagicWaypointScenes[i].scene = new ScrollMagic.Scene({
                        triggerElement: this.scrollMagicWaypointScenes[i].activator,
                        triggerHook: 0,
                        duration: 1600
                    })
                    // .addIndicators()
                    .setTween(this.scrollMagicWaypointScenes[i].elementid, {y: customDuration, ease: Linear.easeNone})
                    .addTo(this.scrollMagicController);

                (function(index){
                    var $el = $(this.scrollMagicWaypointScenes[index].activator);

                    this.scrollMagicWaypointScenes[index].scene.on("start", function(event) {
                        this.activateWaypoint(event, index, $el);
                    }.bind(this));

                }).bind(this)(i);
            };

        },
        activateWaypoint: function(e, index, el) {
            if(e.scrollDirection === "REVERSE") {

                if(el[0].id !== "container1") {
                    this.allWaypointElements.removeClass("active");
                } else {
                    return;
                }

                if (el[0].id === "container2") {
                    $("#container1").addClass("active");
                    return;
                }
                var previousSection = $(this.scrollMagicWaypointScenes[index - 1].activator);
                previousSection.addClass("active");
                if(!previousSection.hasClass("animated")) {
                    previousSection.addClass("animated")
                }
                return;
            }
            this.allWaypointElements.removeClass("active");
            el.addClass("active");
            if(!el.hasClass("animated")) {
                el.addClass("animated")
            }
        },

        handleResize: function() {
            if (!window.matchMedia("(min-width: 1200px)").matches) {
                this.destroy();
            }
        },
        destroy: function() {
            console.log("destroy");
            this.destroyed = true;
            $(window).off("resize");
            $html.removeClass("goSupportsAnimations");
            $html.removeClass("enabledTransitions");
            this.destroyScrollMagic();
        },
        destroyScrollMagic: function() {
            for (var i = this.scrollMagicWaypointScenes.length - 1; i >= 0; i--) {
                this.scrollMagicWaypointScenes[i].scene.destroy(false);
                this.scrollMagicWaypointScenes[i].scene = null;
                $(this.scrollMagicWaypointScenes[i].elementid).removeAttr('style');
                this.scrollMagicWaypointScenes[i] = null;
            };
            this.scrollMagicController.destroy(false);
            this.scrollMagicController = null;
        }
    }

    goAnimation.checkForAnimationSupport();


// Prevents Marketo Form to submit a non-business e-mail
// ------------------------------------------------------

(function (){
  // Please include the email domains you would like to block in this list
  var invalidDomains = ["@gmail.","@yahoo.","@hotmail.","@live.","@aol.","@outlook."];

  MktoForms2.whenReady(function (form){
    form.onValidate(function(){
      var email = form.vals().Email.toLowerCase();
      if(email){
        if(!isEmailGood(email)) {
          form.submitable(false);
          var emailElem = form.getFormElem().find("#Email");
          form.showErrorMessage("Must be business email", emailElem);
        }else{
          form.submitable(true);
        }
      }
    });
  });
  
  function isEmailGood(email) {
    for(var i=0; i < invalidDomains.length; i++) {
      var domain = invalidDomains[i];
      if (email.indexOf(domain) != -1) {
        return false;
      }
    }
    return true;
  }

})();

});