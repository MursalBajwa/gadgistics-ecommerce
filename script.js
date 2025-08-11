$(document).ready(function(){
 
        $('#shopNowLink').click(function() {
            $('#shopNotification').text('Redirecting to shop page...');

            // Show the popup with animation
            $('#popup').css({
                display: 'block',        // Ensure the popup is visible
                opacity: 0,              // Start with 0 opacity
                transform: 'scale(0.5)', // Start with a smaller scale
            }).animate({
                opacity: 1               // Animate opacity from 0 to 1
            }, {
                duration: 2000,           // Duration of the animation (500ms)
                step: function(now, fx) {
                    // Animate the scale along with opacity
                    if (fx.prop === 'opacity') {
                        $(this).css('transform', 'scale(' + (0.5 + now * 0.5) + ')');
                    }
                }
            });

              $('#popup').fadeOut(2000)

              setTimeout(function() {
                window.location.href = '#'; // Replace with the actual page you want to redirect to
            }, 4000); // Redirect after 2 seconds
                
        });


         $('#submitBtn').click(function(event) { 
         event.preventDefault(); 
 
         let name = $('#thename').val(); 
         $('#Greeting').text('Thanks for your precious Feedback ' + name + '!'); 
         }); 


        $(document).on('keydown', function(event) {
            // Change color based on key pressed
            if (event.key === 'd') { // If the 'd' key is pressed
                $('body').css('background-color', 'grey');
            }

            if (event.key === 'l') { // If the 'l' key is pressed
                $('body').css('background-color', 'white');
            }
        });


        $('#hoverBoxPara1').hover(
            function() { 
                // On mouse enter
                $(this).css({
                    'background-color': 'black',
                    'color': 'white',      // Change text color
                    'border-radius': '10px',
                   
                    // Add more CSS properties as needed
                }); 
            }, 
            function() { 
                // On mouse leave
                $(this).css({
                    'background-color': 'white',
                    'color': '#A9ABAE',      // Change text color back
                    'border': 'none'       // Remove the border
                    // Add more CSS properties as needed
                }); 
            }
        );


        $('#hoverBoxPara2').hover(
            function() { 
                // On mouse enter
                $(this).css({
                    'background-color': 'black',
                    'color': 'white',      // Change text color
                    'border-radius': '10px',
                   
                    // Add more CSS properties as needed
                }); 
            }, 
            function() { 
                // On mouse leave
                $(this).css({
                    'background-color': 'white',
                    'color': '#A9ABAE',      // Change text color back
                    'border': 'none'       // Remove the border
                    // Add more CSS properties as needed
                }); 
            }
        );


        $('#hoverBoxPara3').hover(
            function() { 
                // On mouse enter
                $(this).css({
                    'background-color': 'black',
                    'color': 'white',      // Change text color
                    'border-radius': '10px',
                   
                    // Add more CSS properties as needed
                }); 
            }, 
            function() { 
                // On mouse leave
                $(this).css({
                    'background-color': 'white',
                    'color': '#A9ABAE',      // Change text color back
                    'border': 'none'       // Remove the border
                    // Add more CSS properties as needed
                }); 
            }
        );


        $('#hoverBoxPara4').hover(
            function() { 
                // On mouse enter
                $(this).css({
                    'background-color': 'black',
                    'color': 'white',      // Change text color
                    'border-radius': '10px',
                   
                    // Add more CSS properties as needed
                }); 
            }, 
            function() { 
                // On mouse leave
                $(this).css({
                    'background-color': 'white',
                    'color': '#A9ABAE',      // Change text color back
                    'border': 'none'       // Remove the border
                    // Add more CSS properties as needed
                }); 
            }
        );



        function incrementWithWhile() {
            let visitors = 0; // Start from 0
            let visitsElement = document.getElementById('Visits'); // Get the visits tag

            // Use a setInterval to automatically increment the visitors count every second
            let intervalId = setInterval(function() {
                visitors++; // Increment visitors count by 1
                visitsElement.innerHTML = `Website Visitors after you: ${visitors}`; // Update the HTML element

                // Stop incrementing after reaching 10
                
            }, 3000); // 1000 milliseconds = 1 second
        }

        // Call the function to start incrementing automatically
        incrementWithWhile();

        (function($) {
            $.fn.CustomEffect = function() {
                this.slideUp().slideDown().fadeOut().fadeIn();  // Change the color of the selected elements
                return this; // Return the jQuery object for chaining
            };
        })(jQuery);

        $('#Location').slideUp(0);

        $('#LocationBtn').click(function() { 
         $('#Location').CustomEffect(); 
        });



         $('#submitBtn').click(function(event) { 

        let name = $('#thename').val(); 
         if (name === '') { 
         event.preventDefault(); 
         $('#errorMessageName').text('Name is required!'); 

            $('#Greeting').hide(0);
         } 

         let email = $('#theemail').val(); 
         if (email === '') { 
         event.preventDefault(); 
         $('#errorMessageEmail').text('Email is required!'); 

         $('#Greeting').hide(0);

         }

         let subject = $('#subject').val(); 
         if (subject === '') { 
         event.preventDefault(); 
         $('#errorMessageSubject').text('Subject is required!'); 

         $('#Greeting').hide(0);

         } 

         let comment = $('#comment').val(); 
         if (comment === '') { 
         event.preventDefault(); 
         $('#errorMessageComment').text('Comment is required!'); 

         $('#Greeting').hide(0);

         } 

         if(name !== '' && email !== '' && subject !== '' && comment !== '')
         {
             $('#Greeting').show(0);
         }
         });




         $('.signup').click(function(){
             $('#Login').hide();
            $('#Signup').fadeToggle();
         });


         $('.login').click(function(){
             $('#Signup').hide();
            $('#Login').fadeToggle();
         });





            








        $('#upcoming').sortable();


         $('#saveBtn').click(function() { 
            let inputEmail = $('#Signupemail').val(); 
            let inputPass = $('#Signuppassword').val(); 
            localStorage.setItem('inputEmail', inputEmail); 
            localStorage.setItem('inputPass', inputPass); 
         }); 
         
         $('#AutoFillBtn').click(function() { 
             let storedEmail = localStorage.getItem('inputEmail'); 
             let storedPass = localStorage.getItem('inputPass'); 
             $('#Loginemail').val(storedEmail); 
             $('#Loginpassword').val(storedPass);
         });





          // Clear the input field when the user focuses on it if the default value is still there
            $('#thename').focus(function(){
                if($(this).val() == 'John Doe') {
                    $(this).val('');  // Clear the field
                }
            });

            $('#theemail').focus(function(){
                if($(this).val() == 'john.doe@example.com') {
                    $(this).val('');  // Clear the field
                }
            });

            // If the input field is empty when the user leaves it, restore the default value
            $('#thename').blur(function(){
                if($(this).val() == '') {
                    $(this).val('John Doe');  // Restore default value
                }
            });

            $('#theemail').blur(function(){
                if($(this).val() == '') {
                    $(this).val('john.doe@example.com');  // Restore default value
                }
            });
        



          // Clear the input field when the user focuses on it if the default value is still there
            $('#thename').focus(function(){
                if($(this).val() == 'John Doe') {
                    $(this).val('');  // Clear the field
                }
            });

            $('#theemail').focus(function(){
                if($(this).val() == 'john.doe@example.com') {
                    $(this).val('');  // Clear the field
                }
            });

            // If the input field is empty when the user leaves it, restore the default value
            $('#thename').blur(function(){
                if($(this).val() == '') {
                    $(this).val('John Doe');  // Restore default value
                }
            });

            $('#theemail').blur(function(){
                if($(this).val() == '') {
                    $(this).val('john.doe@example.com');  // Restore default value
                }
            });






 });