$( document ).ready(function() {
             $(".show-more").hide();
         });

         $("#custom_option").click(function(){
         	$("input[name='candy_table']:radio").prop('checked',false);
             if($("#custom_option").prop('checked') == true){

                $(".show-more").show();
             }else{
                $(".show-more").hide();
             }
         })

         $("#all_service").click(function(){
         	
             if($("#all_service").prop('checked') == true){
                $(".show-more").hide();
                $("input[name='candy_table']:checkbox").prop('checked',false);
                $("#show_amount_all").text("$"+$(this).data("price"))

             }else{
                $(".show-more").show();
             }
         })
$("#submit-form").click(function(){
	$("#inquiry-form").submit();
});
 
$(".touching").click(function(){
	if ($(this).prop("checked")) {
	    var amount = $(this).data("price");
	    var final_amount = $(this).closest("div .bouncy").find(".show_amount").attr("data-final_amount");
	    if ($(this).hasClass("custo")) {
	    	var final_amount = $(this).closest("#bouncy-custom").find(".show_amount").attr("data-final_amount");

	    	if (typeof final_amount !== "undefined") {
		      var final_amount = $(this).closest("#bouncy-custom").find(".show_amount").attr("data-final_amount");
		      var total = +amount + +final_amount;
		      $(this).closest("#bouncy-custom").find(".show_amount").attr("data-final_amount" , total);
		      $(this).closest("#bouncy-custom").find(".show_amount").text("$"+total);
		      $("#grand_total").val(+$("#grand_total").val() + +total - +final_amount)
		      $("#grand_total_label").text("$"+$("#grand_total").val())
		    }
		    else{
		        $(this).closest("#bouncy-custom").find(".show_amount").attr("data-final_amount" , amount)
		        $(this).closest("#bouncy-custom").find(".show_amount").text("$"+amount);
		        $("#grand_total").val(+$("#grand_total").val() + +amount)
		        $("#grand_total_label").text("$"+$("#grand_total").val())

		    }
	    }else{
	    	$(this).closest("div .bouncy").find(".show_amount").attr("data-final_amount" , amount)
	    	$(this).closest("div .bouncy").find(".show_amount").text("$"+amount)
	    	$("#grand_total").val(+$("#grand_total").val() + +amount)
	    	$("#grand_total_label").text("$"+$("#grand_total").val())
	    }

	    //$(this).closest("div .bouncy").find(".show_amount").text("$"+amount);
	}else{
		var amount = $(this).data("price");

		if ($(this).hasClass("custo")) {
			var final_amount = $(this).closest("#bouncy-custom").find(".show_amount").attr("data-final_amount");
			console.log(final_amount);
			if (typeof final_amount !== "undefined") {
		      var total = +final_amount - +amount;
		      
		      $(this).closest("#bouncy-custom").find(".show_amount").attr("data-final_amount" , total);
		      $(this).closest("#bouncy-custom").find(".show_amount").text("$"+total);
		      $("#grand_total").val(+$("#grand_total").val() - +amount)
		      $("#grand_total_label").text("$"+$("#grand_total").val())
		    }
		    else{
		        $(this).closest("#bouncy-custom").find(".show_amount").attr("data-final_amount" , amount)
		        $(this).closest("#bouncy-custom").find(".show_amount").text("$"+amount);
		        $("#grand_total").val(+$("#grand_total").val() - +total  - +final_amount)
		        $("#grand_total_label").text("$"+$("#grand_total").val())
		    }
		}else{
	    	$(this).closest("div .bouncy").find(".show_amount").attr("data-final_amount" , amount)
	    	$(this).closest("div .bouncy").find(".show_amount").text("$00.00")
	    	$("#grand_total").val(+$("#grand_total").val() - +amount)
	    	$("#grand_total_label").text("$"+$("#grand_total").val())
	    }
	    //$(this).closest("div .bouncy").find(".show_amount").text("$0.00");
	}
})
