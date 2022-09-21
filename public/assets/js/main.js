$(function ($) {
  "use strict";

  jQuery(document).ready(function () {

    // preloader
    $("#preloader").delay(300).animate({
      "opacity": "0"
    }, 500, function () {
      $("#preloader").css("display", "none");
    });

    // Scroll Top
    var ScrollTop = $(".scrollToTop");
    $(window).on('scroll', function () {
      if ($(this).scrollTop() < 500) {
        ScrollTop.removeClass("active");
      } else {
        ScrollTop.addClass("active");
      }
    });
    $('.scrollToTop').on('click', function () {
      $('html, body').animate({
        scrollTop: 0
      }, 500);
      return false;
    });

    // Navbar Dropdown
    $(window).resize(function () {
      if ($(window).width() < 992) {
        $(".dropdown-menu").removeClass('show');
      }
      else {
        $(".dropdown-menu").addClass('show');
      }
    });
    if ($(window).width() < 992) {
      $(".dropdown-menu").removeClass('show');
    }
    else {
      $(".dropdown-menu").addClass('show');
    }

    // Sticky Header
    var fixed_top = $(".header-section");
    $(window).on("scroll", function () {
      if ($(window).scrollTop() > 50) {
        fixed_top.addClass("animated fadeInDown header-fixed");
      }
      else {
        fixed_top.removeClass("animated fadeInDown header-fixed");
      }
    });

    // Modal active
    $(".login").on("click", function () {
      $("#loginArea").addClass("show").addClass("active");
      $("#regArea").removeClass("show").removeClass("active");
      $("#loginArea-tab").addClass("active");
      $("#regArea-tab").removeClass("active");
    });
    $(".reg").on("click", function () {
        $("#regArea").addClass("show").addClass("active");
        $("#loginArea").removeClass("show").removeClass("active");
        $("#loginArea-tab").removeClass("active");
        $("#regArea-tab").addClass("active");
    });

    // increase decrease value
    $('.minus, .plus').click(function() {
      var $input = $(".InDeVal1");
      var val = parseInt($input.val());
      val += $(this).hasClass('plus') ? 1 : -1;
      if (val < 1 || isNaN(val))
        val = 1;
      $input.val(val.toFixed(1)).trigger('change');
    });
    $('.minus2, .plus2').click(function() {
      var $input = $(".InDeVal2");
      var val = parseInt($input.val());
      val += $(this).hasClass('plus2') ? 1: 1;
      if (val < 1 || isNaN(val))
        val = 1;
      $input.val(val.toFixed(1)).trigger('change');
    });

    // Quick Amounts
    $('.quickIn').click(function(){
      var btnVal = $(this).html();
      $(".InDeVal1").val(btnVal);

     
    });
    calculatetotalamount();

    // calculate total depending on odds
    function calculatetotalamount(){
    let total =0;
    let amount =$('.InDeVal1').val();
    let oddsarray = [];
    let Oddsvalue = document.querySelectorAll('.odds')
    for(let i=0;i<Oddsvalue.length;i++){
      let odds =Oddsvalue[i].innerText;
      oddsarray.push(odds);
    }
       
   
    oddsarray.forEach((odd )=>{
      total += parseInt(odd)
     
    } );
    
    let totalamount =(total*amount);
    let betpeerfee =5/100*totalamount;
    
    let recievableamount = totalamount-betpeerfee
    $('.betpeerfee').empty();
    $('.betpeerfee').append(betpeerfee);
    $('.amount').empty();
    $('.amount').append(recievableamount);
  }

    // Login Reg Tab
    $('.reg-btn').click(function(){
      $("#regArea-tab").click();
    });
    $('.log-btn').click(function(){
      $("#loginArea-tab").click();
    });

    // Withdraw Deposit Tab
    $('.withdraw-btn').click(function(){
      $("#withdraw-tab").click();
    });
    $('.deposit-btn').click(function(){
      $("#deposit-tab").click();
    });

    // User Active
    $('.single-item .user-btn').on('click', function () {
      $('.user-content').toggleClass('active');
      $('.notifications-content').removeClass('active');
    });
    $('.single-item .notifications-btn').on('click', function () {
      $('.notifications-content').toggleClass('active');
      $('.user-content').removeClass('active');
    });

          // add to betslip
          let arsenalbtn = document.getElementById('arsenalbtn');
          let volnabtn = document.getElementById('volnabtn');
          if(volnabtn){
            volnabtn.addEventListener('click', function() {
              let hometeam= document.getElementById('Arsenal').innerText;
          let awayteam = document.getElementById('volna').innerText
          let game_id=1;
          let team_id=2;
          let bet_type=2;
          let bet_odds=1;
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          $.ajax({
              type: 'POST',
              url: '/add-to-betslip',
              data: {
                  'team_name': hometeam,
                  'away_team':awayteam,
                  'game_id': game_id,
                  'team_id': team_id,
                  'bet_type': bet_type,
                  'bet_odds': bet_odds
              },
              success: function(response){
                 let el =$('#volnabtn')
                  if(response.Success == 2){
                   arsenalbtn.classList.remove("colorbutton")
                    volnabtn.classList.add("colorbutton")
                   
                  }
                  else{
                    volnabtn.classList.remove("colorbutton")
                   
                  }
              
                  

              
                    }
                });
            });
          }

         
            $(' .active-bet').attr("disabled", false)

            //bet against someone for team to draw
            $('.clickbuttondraw').on('click', function (e) {

              var el = this;
              e.preventDefault();
          
              let betagainstid=$(el).closest('.betagainst').find('.betagainstinput').val();
              let betvalue = 0;
              
              console.log(betagainstid)

              $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

              bootbox.confirm("Do you really want to bet Draw", function (result) {

                if (result) {
                    // AJAX Request
                    $.ajax({
                        method: 'POST',
                        url: '/competition',
                        data: {'betagainst_id': betagainstid,
                                'betvalue ': betvalue},
                        success: function (response) {
                            
                            // Removing row from HTML Table
                            if (response.success == 1) {
                                // $(el).closest('.betcard').css('background', 'tomato');
                                // $(el).closest('.betcard').fadeOut(800, function () {
                                //     $(this).remove();
                                // });
                               alert(response.message);
                               window.location.reload();
                                
                               
                            } else {
                                bootbox.alert('Sorry you are not able to bet.');
                            }
    
                        }
                    });
                }
    
            });
            });

            //bet against someone for hometeam to win
            $('.clickbuttonhome').on('click', function (e) {

              var el = this;
              e.preventDefault();
          
              let betagainstid=$(el).closest('.betagainst').find('.betagainstinput').val();
              let betvalue = 1;
              
             

              $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

              bootbox.confirm("Do you really want to bet Home team to win", function (result) {

                if (result) {
                    // AJAX Request
                    $.ajax({
                        method: 'POST',
                        url: '/competitionhome',
                        data: {'betagainst_id': betagainstid,
                                },
                        success: function (response) {
                            
                            // Removing row from HTML Table
                            if (response.success == 1) {
                                // $(el).closest('.betcard').css('background', 'tomato');
                                // $(el).closest('.betcard').fadeOut(800, function () {
                                //     $(this).remove();
                                // });
                               alert(response.message);
                               window.location.reload();
                                
                               
                            } else {
                                bootbox.alert('Sorry you are not able to bet.');
                            }
    
                        }
                    });
                }
    
            });
            });

            //bet against someone for awayteam to win
            $('.clickbuttonaway').on('click', function (e) {

              var el = this;
              e.preventDefault();
          
              let betagainstid=$(el).closest('.betagainst').find('.betagainstinput').val();
              let betvalue = 2;
              
             

              $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

              bootbox.confirm("Do you really want to bet Away team to win", function (result) {

                if (result) {
                    // AJAX Request
                    $.ajax({
                        method: 'POST',
                        url: '/competitionaway',
                        data: {'betagainst_id': betagainstid,
                                },
                        success: function (response) {
                            
                            // Removing row from HTML Table
                            if (response.success == 1) {
                                // $(el).closest('.betcard').css('background', 'tomato');
                                // $(el).closest('.betcard').fadeOut(800, function () {
                                //     $(this).remove();
                                // });
                               alert(response.message);
                               window.location.reload();
                                
                               
                            } else {
                                bootbox.alert('Sorry you are not able to bet.');
                            }
    
                        }
                    });
                }
    
            });
            });
            

          if(arsenalbtn ){
          arsenalbtn.addEventListener('click', function() {
              
      
          let hometeam= document.getElementById('Arsenal').innerText;
          let awayteam = document.getElementById('volna').innerText
          let game_id=1;
          let team_id=2;
          let bet_type=1;
          let bet_odds=1;
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          $.ajax({
              type: 'POST',
              url: '/add-to-betslip',
              data: {
                  'team_name': hometeam,
                  'away_team':awayteam,
                  'game_id': game_id,
                  'team_id': team_id,
                  'bet_type': bet_type,
                  'bet_odds': bet_odds
              },
              success: function(response){
                let el = $('#arsenalbtn');
                 if(response.Success === 2){
                  volnabtn.classList.remove("colorbutton")
                 
                  arsenalbtn.classList.add("colorbutton")
                 
                  
                 }
                 else{
                  
                  arsenal.classList.remove("colorbutton");
                  console.log(response.message)
                  
                                    
                 }
              
                 

              
              }
          });
      });
  }


        // Delete bets

        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    $('.deleteicon').click(function (e) {
        var el = this;
        e.preventDefault();
      
      

            // Delete id
        let deleteid =$(el).closest('.betcard').find('.delete_class').val();
          console.log(deleteid);

        // Confirm box
        bootbox.confirm("Do you really want to delete the bet?", function (result) {

            if (result) {
                // AJAX Request
                $.ajax({
                    method: 'POST',
                    url: '/delete-betslip',
                    data: {'betitem_id': deleteid},
                    success: function (response) {
                        
                        // Removing row from HTML Table
                        if (response.success == 1) {
                            $(el).closest('.betcard').css('background', 'tomato');
                            $(el).closest('.betcard').fadeOut(800, function () {
                                $(this).remove();
                            });
                           
                            
                           
                        } else {
                            bootbox.alert('Record not deleted.');
                        }

                    }
                });
            }

        });

    });

   

      //change input at interval and detect events
      $.event.special.inputchange = {
        setup: function() {
            var self = this, val;
            $.data(this, 'timer', window.setInterval(function() {
                val = self.value;
                if ( $.data( self, 'cache') != val ) {
                    $.data( self, 'cache', val );
                    $( self ).trigger( 'inputchange' );
                }
            }, 20));
        },
        teardown: function() {
            window.clearInterval( $.data(this, 'timer') );
        },
        add: function() {
            $.data(this, 'cache', this.value);
        }
    };
     //Update total
     $('.InDeVal1').on('inputchange', function() {
      calculatetotalamount();
    });

     
// make bet
$('.placebet').click(function (e) {
      var el = this;
      e.preventDefault();       
      
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      
      let amount =$('.InDeVal1').val();
      let amountrecievable = document.querySelector('.amount').innerText;
     

      let betpeerfee = document.querySelector('.betpeerfee').innerText;
      console.log(betpeerfee)
    

  
      $.ajax({
          type: 'POST',
          url: '/placebet',
          data: {
              'amount': amount,
              'amountrecievable': amountrecievable,
              
          },
          success: function(response){
              console.log(response);
              window.location.reload();

             
              // alert(response.message);

          
          }
      });
  });
 
    

    // Enable Google Authentication
    $( "#switch" ).change(function() {
      $( ".google-authentication" ).slideToggle( "slow" );
    });

    // Betpop Up Modal Active
    $('.bottom-item .firstTeam').on('click', function () {
      $(".top-item .cmn-btn").removeClass("active");
      $(".top-item .firstTeam").addClass("active");
    });
    $('.bottom-item .lastTeam').on('click', function () {
      $(".top-item .cmn-btn").removeClass("active");
      $(".top-item .lastTeam").addClass("active");
    });
    $('.bottom-item .draw').on('click', function () {
      $(".top-item .cmn-btn").removeClass("active");
      $(".top-item .draw").addClass("active");
    });

    // Blog Reply btn
    var replybtn = $(".reply-btn");
    $(replybtn).on('click', function () {
      $(this).next().slideToggle('slow');
    });

    // social link active
    var socialLink = $(".social-link a");
    $(socialLink).on('mouseover', function () {
      $(socialLink).removeClass('active');
      $(this).addClass('active');
    });

  });
});