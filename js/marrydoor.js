// remap jQuery to $
(function($){})(window.jQuery);
//global tab
$(function(){
    $('.tab-head > li > a').live('click',function(){
        $('.tab-head > li > a').each(function(){
           $(this).removeClass();
        });
        $(this).addClass('select');
        var tabid = $(this).attr('id');
        
        $('.tab-data').each(function(){
           $(this).hide();
        })
        $('#'+tabid+'_data').show();
        return false;
    });  
});

//nav bar
$(document).ready(function(){
    $('.menu > a.link').live('click',function(){
        $('.menu > div.sub').each(function(){
            $(this).hide();    
        });
        $(this).parent().find('.sub').show();
    });
    $(document).mouseup(function(){
        $('.menu > div.sub').each(function(){
            $(this).hide();    
        });
    });
});

//info box
$(document).ready(function(){
    $('.left-bar-data > li > a.infoB').live('hover',function(){
        $('li > div.infoBox').each(function(){
            $(this).hide();    
        });
        $(this).parent().find('.infoBox').show();
    });
    $(document).mouseout(function(){
        $('li > div.infoBox').each(function(){
            $(this).hide();    
        });
    });
});
//notification tab
$(function(){
    $('.noti_contnr > .notifications > a').live('click',function(){
        $('.noti_contnr > .notifications > a').each(function(){
           $(this).removeClass();
        });
        $(this).addClass('select');
        var tabid = $(this).attr('id');
        
        $('.notiTabData').each(function(){
           $(this).hide();
        })
        $('#'+tabid+'_notif').show();
        return false;
    });
    $(document).mouseup(function(){
        $('.noti_contnr > .notiTabData').each(function(){
            $(this).hide();
        });
	$('.noti_contnr > .notifications > a').each(function(){
	    $(this).removeClass('select');
        });
    });
});	

// remap jQuery to $
(function($){})(window.jQuery);
/* trigger when page is ready */
$(document).ready(function (){
	// your functions go here
});
/* optional triggers
$(window).load(function() {
});
$(window).resize(function() {
    
});
*/
//global tab
$(function(){
    $('.tab-head > li > a').live('click',function(){
        $('.tab-head > li > a').each(function(){
           $(this).removeClass();
        });
        $(this).addClass('select');
        var tabid = $(this).attr('id');
        
        $('.tab-data').each(function(){
           $(this).hide();
        })
        $('#'+tabid+'_data').show();
        return false;
    });  
});

//nav bar
$(document).ready(function(){
    $('.menu > a.link').live('click',function(){
        $('.menu > div.sub').each(function(){
            $(this).hide();    
        });
        $(this).parent().find('.sub').show();
    });
    $(document).mouseup(function(){
        $('.menu > div.sub').each(function(){
            $(this).hide();    
        });
    });
});

//info box
$(document).ready(function(){
    $('.left-bar-data > li > a.infoB').live('hover',function(){
        $('li > div.infoBox').each(function(){
            $(this).hide();    
        });
        $(this).parent().find('.infoBox').show();
    });
    $(document).mouseout(function(){
        $('li > div.infoBox').each(function(){
            $(this).hide();    
        });
    });
	
	
	$(".headerForgetPassword").colorbox({iframe:true, width:"855px", height:"355px"});
	$("#popUpClose").click(function(){
		parent.$.fn.colorbox.close();
	});
});
//notification tab
$(function(){
    $('.noti_contnr > .notifications > a').live('click',function(){
        $('.noti_contnr > .notifications > a').each(function(){
           $(this).removeClass(
		   );
        });
        $(this).addClass('select');
        var tabid = $(this).attr('id');
        
        $('.notiTabData').each(function(){
           $(this).hide();
        })
        $('#'+tabid+'_notif').show();
        return false;
    });
    $(document).mouseup(function(){
        $('.noti_contnr > .notiTabData').each(function(){
            $(this).hide();
        });
	$('.noti_contnr > .notifications > a').each(function(){
	    $(this).removeClass('select');
        });
    });
});


		function add(select1,select2)
		{
			$('#'+select1+' option:selected').appendTo('#'+select2);
			return false;
		}
		
		// User defined functions
		
		// functions to add more pics and documents

				function addMoreFiles()
				{

					// get the current element count
					var count = document.getElementById("photoCount").value;
					//Create an input type dynamically.
				    var element = document.createElement("input");
				     //Assign different attributes to the element.
				    element.setAttribute("type", "file");
				    element.setAttribute("value", "");
				    element.setAttribute("name", "profilePhoto_"+count);
				    element.setAttribute("id", "profilePhoto_"+count);
				    element.setAttribute("class", "fileStyle");
				 
				    var container = document.getElementById("photoContainer");
				 
				    //Append the element in page (in span).
				    container.appendChild(element);
				    count = parseInt(count) + 1;
				    document.getElementById("photoCount").value = count;
				}

				function addMoreDocuments()
				{

					// get the current element count
					var count = document.getElementById("documentCount").value;
					//Create an input type dynamically.
				    var element = document.createElement("input");
				     //Assign different attributes to the element.
				    element.setAttribute("type", "file");
				    element.setAttribute("value", "");
				    element.setAttribute("name", "profileDocument_"+count);
				    element.setAttribute("id", "profileDocument_"+count);
				    element.setAttribute("class", "fileStyle");
				 
				    var container = document.getElementById("documentContainer");
				 
				    //Append the element in page (in span).
				    container.appendChild(element);

				    // create the select box
				    
				    var element = document.createElement("select");
				     //Assign different attributes to the element.
				    element.setAttribute("name", "documentType_"+count);
				    element.setAttribute("id", "documentType_"+count);
				    element.setAttribute("class", "select_small_140");

				    var option = document.createElement("option");
				    option.setAttribute("value", "1");
				    option.innerHTML = 'Passport';
				    element.appendChild(option);
				    var option = document.createElement("option");
				    option.setAttribute("value", "2");
				    option.innerHTML = 'Voters ID';
				    element.appendChild(option);
				    var option = document.createElement("option");
				    option.setAttribute("value", "3");
				    option.innerHTML = 'PAN Card';
				    element.appendChild(option);
				    container.appendChild(element);
				    
				    count = parseInt(count) + 1;
				    document.getElementById("documentCount").value = count;
				}
				
		// function to change the picture in album page

		function changeAlbumPicture(image){
			$("#albumImageContainer").attr("src", image);
		}
		
		$(document).ready(function(){
   		//toggle the request dropdown 
   		
   		$("#requestIcon").click(function(){
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#communicateContainer").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#requestDropdown").slideToggle();
   		});
   		
   		//toggle the notification dropdown 
   		
   		$("#notificationIcon").click(function(){
   			$("#requestDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#communicateContainer").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#notificationDropdown").slideToggle();
   			
   		});
   		
   		
   		//toggle the message dropdown 
   		
   		$("#messageIcon").click(function(){
   			$("#requestDropdown").css("display","none");
   			$("#notificationDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#communicateContainer").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#messageDropdown").slideToggle();
   			
   		});
   		
   		// toggle interest dropdown
   		
   		$("#interestIcon").click(function(){
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#requestDropdown").css("display","none");
   			$("#communicateContainer").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#interestDropdown").slideToggle();
   		});
   		
   		//toggle the myaccount dropdown 
   		
   		$("#myaccount").click(function(){
   			$("#communicateContainer").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#requestDropdown").css("display","none");
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#myaccountContainer").slideToggle();
   			
   		});
   		
   		
   		//toggle the myprofile dropdown 
   		
   		$("#myprofile").click(function(){
   			$("#communicateContainer").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#requestDropdown").css("display","none");
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#profileContainer").slideToggle();
   			
   		});
   		
   		//toggle the communicate dropdown
   		
   		$("#mycommunicate").click(function(){
   			$("#profileContainer").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#requestDropdown").css("display","none");
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#communicateContainer").slideToggle();
   			
   		});
   		
   		
   		//toggle the search dropdown
   		
   		$("#search").click(function(){
   			$("#communicateContainer").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#requestDropdown").css("display","none");
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#searchContainer").slideToggle();
   			
   		});
   		
   		//toggle the search dropdown
   		
   		$("#contactus").click(function(){
   			$("#communicateContainer").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#requestDropdown").css("display","none");
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#contactusContainer").slideToggle();
   			
   		});
   		
   		//toggle the paymentoptions dropdown
   		
   		$("#paymentoptions").click(function(){
   			$("#communicateContainer").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#requestDropdown").css("display","none");
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#paymentOptionsContainer").slideToggle();
   			
   		});
   		
   		
   		
   		// detect the mouse click on the document
   		
   		/*$(document).click(function(e) { 
   			
   			if ($(e.target).parents("#requestDropdown").length == 0) { 
   				alert('correct');
   				$("#requestDropdown").css("display","");
   				
   			}else{
   				alert('incorrect');
   				//$("#requestDropdown").css("display","none");
   			}
   			
   			});*/
	})
		
