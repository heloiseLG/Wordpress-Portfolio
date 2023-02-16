jQuery(document).ready(function($) {

	'use strict';

          $( "#bonjour-background-type").on('change', function() {
          var bgType = $( "#bonjour-background-type").val(),
          bgTypeImage = $( ".bonjour-bar__background-image"),
          bgTypeColor = $( ".bonjour-bar__bg-color"),
          bgTypeGradient = $( ".bonjour-bar__gradient-color");

            if ( bgType == "color" ) {            
                bgTypeColor.addClass('bonjour-bar__show-option');
            }else{
              bgTypeColor.removeClass('bonjour-bar__show-option');
            } 

            if(bgType == "gradient"){
              bgTypeGradient.addClass('bonjour-bar__show-option');
            }else{
                bgTypeGradient.removeClass('bonjour-bar__show-option');
            }

            if(bgType == "image"){
              bgTypeImage.addClass('bonjour-bar__show-option');
            }else{
              bgTypeImage.removeClass('bonjour-bar__show-option');
            }

       });
        
        // active and deactive the bar animation
        var barActive = $( "#bonjour-active-bar" ),
        optionWrapper = $( ".bonjour-bar__content" ),
        activeBox = $(".bonjour-bar__content-active-box");

        if (!barActive.is(':checked')) {
              optionWrapper.addClass('bonjour-bar__content-deactivated');
              optionWrapper.addClass('bonjour-bar__content-height');
              activeBox.addClass('active-box');
            }else{
              optionWrapper.removeClass('bonjour-bar__content-deactivated');
              optionWrapper.removeClass('bonjour-bar__content-height');
              activeBox.removeClass('active-box');
          };

        barActive.change( function() {
            if (!barActive.is(':checked')) {
              optionWrapper.addClass('bonjour-bar__content-deactivated');
              optionWrapper.addClass('bonjour-bar__content-height');
              activeBox.addClass('active-box');
            }else{
              optionWrapper.removeClass('bonjour-bar__content-deactivated');
              optionWrapper.removeClass('bonjour-bar__content-height');
              activeBox.removeClass('active-box');
            };
        });

        

        /* Bar position animation */
        var fixedBar = $( ".fixed-bar"), 
        vall = $( "#bonjour-position" ).val(),
        previewHeight = $( "#bar-option" ).outerHeight( true ),
        clockWidth = $( ".rounded-clock" ).outerWidth( true ); 

        $( ".bonjour-bar__content-browser" ).css({'height' : previewHeight + 30 + "px"});
        $( ".browser-mockup" ).css({'margin-top' : previewHeight / 5.7 + "px"});
        $( ".rounded-clock" ).css({'height' : clockWidth  + "px"});

    

				if ( vall == "bottom" ) {
    				fixedBar.addClass('fixed-bar__bottom');
    				}else{
    				fixedBar.removeClass('fixed-bar__bottom');
  			};

        $( "#bonjour-position" ).change( function() {
             var vall = $( "#bonjour-position" ).val();
    				if ( vall == "bottom" ) {
    					fixedBar.addClass('fixed-bar__bottom');
    				}else {
    					fixedBar.removeClass('fixed-bar__bottom');
    				} ;
			 });

        var backgroundType = $( "#bonjour-background-type" ).val();
        if ( backgroundType == "gradient" ) {
            fixedBar.addClass('fixed-bar__gradient');
            }else if ( backgroundType == "image" ){
              fixedBar.addClass('fixed-bar__image');
            }

        $( "#bonjour-background-type" ).change( function() {
            var backgroundType = $( "#bonjour-background-type" ).val();
            
            if ( backgroundType == "gradient" ) {
            fixedBar.addClass('fixed-bar__gradient');
            fixedBar.removeClass('fixed-bar__image');
            }else if ( backgroundType == "image" ){
              fixedBar.addClass('fixed-bar__image');
            }else{
              fixedBar.removeClass('fixed-bar__image');
              fixedBar.removeClass('fixed-bar__gradient');
            }
            
       });


      /* Exit button animation */
      var exiteButton = $( "#bonjour-exit-button" ),
      xButton = $('.fixed-bar__exit');

      if (!exiteButton.is(':checked')) {
          xButton.css("display","table-row");
      };

      exiteButton.on('change', function() {
        if (!exiteButton.is(':checked')) {
          xButton.css("display","none");
        }else{
          xButton.css("display","table-row"); 
        } ;
      });


      // Cookies admin options
      var cookieVal = $('input[name="bonjour[cookies_opt]"]:radio:checked').val(),
      cookieText = $("#cookies-value");

        if ( cookieVal == "cookies-non" ) {
            cookieText.text('The User Open A New Page');
          } else if ( cookieVal == "cookies-new-sesson" ){
            cookieText.text('The User Open A New Windows');
          } else if ( cookieVal == "cookies-days" ){

            var daysValue  = $("#bonjour-cookies-days-number").val();
            cookieText.text( daysValue + " Days");

            $("#bonjour-cookies-days-number").keyup(function(){

              var daysValue  = $("#bonjour-cookies-days-number").val();
              cookieText.text( daysValue + " Days");
              
          });
        };

        $('input[type=radio][name="bonjour[cookies_opt]"]').on('change', function() {
          
          var cookieVal = $('input[name="bonjour[cookies_opt]"]:radio:checked').val(),
          cookieText = $("#cookies-value");

          if ( cookieVal == "cookies-non" ) {
            cookieText.text('The User Open A New Page');
          } else if ( cookieVal == "cookies-new-sesson" ){
            cookieText.text('The User Open A New Windows');
          } else if ( cookieVal == "cookies-days" ){

            var daysValue  = $("#bonjour-cookies-days-number").val();
            cookieText.text( daysValue + " Days");

            $("#bonjour-cookies-days-number").keyup(function(){

              var daysValue  = $("#bonjour-cookies-days-number").val();
              cookieText.text( daysValue + " Days");

            });

          };

       });


      // content type admin options
        
        var contentTypeVall = $( "#bonjour-content-type").val(),
        contentTypeEmail = $( ".content-type-email"),
        contentTypeSocial = $( ".content-type-social"),
        contentTypeButton = $( ".content-type-call-action"),
        contentText = $( ".content-type-editor");

                if ( contentTypeVall == "text" ) {            
                contentText.addClass('full-opacity');
            }else if(contentTypeVall == "email"){
              contentTypeEmail.addClass('full-opacity');
            }else if(contentTypeVall == "social"){
              contentTypeSocial.addClass('full-opacity');
            }else if(contentTypeVall == "call-action"){
              contentTypeButton.addClass('full-opacity');
            } ; 


        $( "#bonjour-content-type").on('change', function() {
           var contentTypeVall = $( "#bonjour-content-type").val(),
            contentTypeEmail = $( ".content-type-email"),
            contentTypeSocial = $( ".content-type-social"),
            contentTypeButton = $( ".content-type-call-action"),
            contentText = $( ".content-type-editor");

            if ( contentTypeVall == "text" ) {            
                contentText.addClass('full-opacity');
            }else{
              contentText.removeClass('full-opacity');
            } 

            if(contentTypeVall == "email"){
              contentTypeEmail.addClass('full-opacity');
            }else{
                contentTypeEmail.removeClass('full-opacity');
            }

            if(contentTypeVall == "social"){
              contentTypeSocial.addClass('full-opacity');
            }else{
              contentTypeSocial.removeClass('full-opacity');
            }

            if(contentTypeVall == "call-action"){
              contentTypeButton.addClass('full-opacity');
            }else{
              contentTypeButton.removeClass('full-opacity');
            } ;
       });

        // show option by background type 
        var bgType = $( "#bonjour-background-type").val(),
        bgTypeImage = $( ".bonjour-bar__background-image"),
        bgTypeColor = $( ".bonjour-bar__bg-color"),
        bgTypeGradient = $( ".bonjour-bar__gradient-color");

            if ( bgType == "color" ) {            
                bgTypeColor.addClass('bonjour-bar__show-option');
            }else if(bgType == "gradient"){
              bgTypeGradient.addClass('bonjour-bar__show-option');
            }else if(bgType == "image"){
              bgTypeImage.addClass('bonjour-bar__show-option');
            }




      



      /* Color picker and image uploader script */

       $(function(){

         // Let's set up some variables for the image upload and removing the image     
         var frame,
             imgUploadButton = $( '#upload_bg_image_button' ),    
             imgContainer = $( '#upload_image_preview' ),
             imgIdInput = $( '#bonjour-bg-image-id' ),
             imgPreview = $('#upload_image_preview'),        
             imgDelButton = $('#bonjour-delete_image_button'),
             // Color Pickers Inputs
             colorPickerInputs = $( '.bonjour-color-picker' );

             


         // WordPress specific plugins - color picker and image upload
         $( '.bonjour-color-picker' ).wpColorPicker();

        // wp.media add Image
         imgUploadButton.on( 'click', function( event ){
            
            event.preventDefault();
            
            // If the media frame already exists, reopen it.
            if ( frame ) {
              frame.open();
              return;
            }
            
            // Create a new media frame
            frame = wp.media({
              title: 'Select or Upload Background Imag',
              button: {
                text: 'Use as Backgound image'
              },
              multiple: false  // Set to true to allow multiple files to be selected
            });
            // When an image is selected in the media frame...
            frame.on( 'select', function() {
              
              // Get media attachment details from the frame state
              var attachment = frame.state().get('selection').first().toJSON();                

              // Send the attachment URL to our custom image input field.
              imgPreview.find( 'img' ).attr( 'src', attachment.sizes.thumbnail.url );

              // Send the attachment id to our hidden input
              imgIdInput.val( attachment.id );

              // Unhide the remove image link
              imgPreview.removeClass( 'hidden' );
            });

            // Finally, open the modal on click
            frame.open();
        });


        // Erase image url and age preview
        imgDelButton.on('click', function(e){
            e.preventDefault();
            imgIdInput.val('');
            imgPreview.find( 'img' ).attr( 'src', '' );
            imgPreview.addClass('hidden');
        });

    }); // End of DOM Ready

+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.toggle"),f="object"==typeof b&&b;e||d.data("bs.toggle",e=new c(this,f)),"string"==typeof b&&e[b]&&e[b]()})}var c=function(b,c){this.$element=a(b),this.options=a.extend({},this.defaults(),c),this.render()};c.VERSION="2.2.0",c.DEFAULTS={on:"On",off:"Off",onstyle:"primary",offstyle:"default",size:"normal",style:"",width:null,height:null},c.prototype.defaults=function(){return{on:this.$element.attr("data-on")||c.DEFAULTS.on,off:this.$element.attr("data-off")||c.DEFAULTS.off,onstyle:this.$element.attr("data-onstyle")||c.DEFAULTS.onstyle,offstyle:this.$element.attr("data-offstyle")||c.DEFAULTS.offstyle,size:this.$element.attr("data-size")||c.DEFAULTS.size,style:this.$element.attr("data-style")||c.DEFAULTS.style,width:this.$element.attr("data-width")||c.DEFAULTS.width,height:this.$element.attr("data-height")||c.DEFAULTS.height}},c.prototype.render=function(){this._onstyle="btn-"+this.options.onstyle,this._offstyle="btn-"+this.options.offstyle;var b="large"===this.options.size?"btn-large":"small"===this.options.size?"btn-small":"mini"===this.options.size?"btn-mini":"",c=a('<label class="btn">').html(this.options.on).addClass(this._onstyle+" "+b),d=a('<label class="btn">').html(this.options.off).addClass(this._offstyle+" "+b+" active"),e=a('<span class="toggle-handle btn btn-default">').addClass(b),f=a('<div class="toggle-group">').append(c,d,e),g=a('<div class="toggle btn" data-toggle="toggle">').addClass(this.$element.prop("checked")?this._onstyle:this._offstyle+" off").addClass(b).addClass(this.options.style);this.$element.wrap(g),a.extend(this,{$toggle:this.$element.parent(),$toggleOn:c,$toggleOff:d,$toggleGroup:f}),this.$toggle.append(f);var h=this.options.width||Math.max(c.width(),d.width())+e.outerWidth()/2,i=this.options.height||Math.max(c.height(),d.height());c.addClass("toggle-on"),d.addClass("toggle-off"),this.$toggle.css({width:h,height:i}),this.options.height&&(c.css("line-height",c.height()+"px"),d.css("line-height",d.height()+"px")),this.update(!0),this.trigger(!0)},c.prototype.toggle=function(){this.$element.prop("checked")?this.off():this.on()},c.prototype.on=function(a){return this.$element.prop("disabled")?!1:(this.$toggle.removeClass(this._offstyle+" off").addClass(this._onstyle),this.$element.prop("checked",!0),void(a||this.trigger()))},c.prototype.off=function(a){return this.$element.prop("disabled")?!1:(this.$toggle.removeClass(this._onstyle).addClass(this._offstyle+" off"),this.$element.prop("checked",!1),void(a||this.trigger()))},c.prototype.enable=function(){this.$toggle.removeAttr("disabled"),this.$element.prop("disabled",!1)},c.prototype.disable=function(){this.$toggle.attr("disabled","disabled"),this.$element.prop("disabled",!0)},c.prototype.update=function(a){this.$element.prop("disabled")?this.disable():this.enable(),this.$element.prop("checked")?this.on(a):this.off(a)},c.prototype.trigger=function(b){this.$element.off("change.bs.toggle"),b||this.$element.change(),this.$element.on("change.bs.toggle",a.proxy(function(){this.update()},this))},c.prototype.destroy=function(){this.$element.off("change.bs.toggle"),this.$toggleGroup.remove(),this.$element.removeData("bs.toggle"),this.$element.unwrap()};var d=a.fn.bootstrapToggle;a.fn.bootstrapToggle=b,a.fn.bootstrapToggle.Constructor=c,a.fn.toggle.noConflict=function(){return a.fn.bootstrapToggle=d,this},a(function(){a("input[type=checkbox][data-toggle^=toggle]").bootstrapToggle()}),a(document).on("click.bs.toggle","div[data-toggle^=toggle]",function(b){var c=a(this).find("input[type=checkbox]");c.bootstrapToggle("toggle"),b.preventDefault()})}(jQuery);

      
});

