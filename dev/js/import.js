var rows = 0;
var start, end;
var items= [];
var categories = [];

//var dropdown = "<div class='dropdown'><button class='btn btn-default dropdown-toggle' type='button' id='dropdownMenu1' data-toggle='dropdown' aria-expanded='true'>Category<span class='caret'></span></button><ul class='dropdown-menu' role='menu' aria-labelledby='dropdownMenu1'><li role='presentation'><a role='menuitem' tabindex='-1' href='#'>Cat 1</a></li><li role='presentation'><a role='menuitem' tabindex='-1' href='#'>Cat 2</a></li><li role='presentation'><a role='menuitem' tabindex='-1' href='#'>Something else here</a></li><li role='presentation'><a role='menuitem' tabindex='-1' href='#'>Separated link</a></li></ul></div>";
var dropdown = "";
var totalImprt = 0;
var currentImprt =0;
$(function(){
	var dropped = new Array();
    $(document).on({
//        ajaxStart: function() { $body.addClass("loading");    },
        ajaxStop: function() {
            console.log("ajaxStop");
            if(currentImprt == totalImprt){
                $("body").removeClass("loading");

                console.log("All done");
                alert("All done");
            }else{

            }
        }    
    });
    
	$('#submit-parse').click(function(){
		rows = 0;

		var txt = $('#input_text').val();
		var files = $('#files')[0].files;
		var config = {
					// delimiter: $('#delimiter').val(),
					delimiter: ",",
					newline: "\r\n", //getLineEnding(),
					header: false,
					dynamicTyping: false,
					preview: 0,
					// step: $('#stream').prop('checked') ? stepFn : undefined,
					step: undefined,
					encoding: "",
					worker: false,
					comments: "",
					complete: completeFn,
					error: errorFn,
					download: false,
					fastMode: false,
					skipEmptyLines: true,
					// chunk: $('#chunk').prop('checked') ? chunkFn : undefined
					chunk: undefined
				};
		
		if(dropped.length > 0){
			start = performance.now();
			Papa.parse(dropped[0],{config: config,complete: completeFn});
            
		}else if (files.length > 0){
			if (files[0].size > 1024 * 1024 * 10){
				alert("A file you've selected is larger than 10 MB; please choose to stream or chunk the input to prevent the browser from crashing.");
				return;
			}
	
			start = performance.now();
			
			$('#files').parse({
				config: config,
				before: function(file, inputElem)
				{
					console.log("Parsing file:", file,"<<");
				},
				complete: function()
				{
					// console.log("Done with all files.");
				}
			});
		}else{
			start = performance.now();
			var results = Papa.parse(txt, {config:config,complete: completeFn});
			console.log("Synchronous parse results:", results);
		}
	});
	
	$('#dropzone').on('dragover', function(e) {
		e.preventDefault();
		e.stopPropagation();
	    });
	
	$('#dropzone').on('dragenter', function(e) {
		e.preventDefault();
		e.stopPropagation();
	    });
	
	$('#dropzone').on('drop', function(e){
		console.log("file loaded");
		if(e.originalEvent.dataTransfer){
		    if(e.originalEvent.dataTransfer.files.length) {
			e.preventDefault();
			e.stopPropagation();
			/*UPLOAD FILES HERE*/
			// upload(e.originalEvent.dataTransfer.files);
			dropped = e.originalEvent.dataTransfer.files;
			$("#input_text").val(dropped[0].name);
		    }   
		}
	    });
	    
    $("#importBtn").click(function(){
        totalImprt = 0;
        currentImprt = 0;
        var cats = $(".cat");
        if(!validateCats(cats)){
            alert("One or more of the categories are invalid.\nFix it and try again.\nLeave unassigned categories empty.");
            return;
        }
        $("body").addClass("loading");
        for(var i =0; i < cats.length; i++){
            
            var cat = cats[i];
            var from = $(cat).find(".from").val();
            var to = $(cat).find(".to").val();
            var id = $(cat).find(".id").attr("id");
            if(from != "" && to != "" && id > 0){
                totalImprt += to-from+1;
                for(var j = from; j <= to; j++){
                    pushData({"item":items[j-1],"cid":id});  
                }
            }else{
                console.log("Ignoring category:"+id);
            }
            
        }
//        alert("All items were imported successfully");		
	});
    
//	$(".dropdown-menu li a").click(function(){
//
//	      $(".btn:first-child").text($(this).text());
//	      $(".btn:first-child").val($(this).text());
//
//	});
    
//    $.post("../import.php",{request:"getCategories"},function(data){
//        console.log(data);     
//    },"json").fail(function(err){
//        console.error("err");
//        console.log(err.responseText);
//        alert("Error loading data, please refreash the page.");
//        }).success(function(){
//            console.log("done");
//    });
});

function pushData(payload){
    payload.request = "pushData";
    $.post("../import.php",payload,function(res){
        currentImprt++;
        console.log("finished "+currentImprt+" from "+totalImprt);
        $(".modal h1").html("Imported "+currentImprt+" from "+totalImprt);
//        console.log("Items were imported successfully... payload = "+payload+"response="+res);
    },"json").fail(function(err){
        currentImprt++;
        console.log("finished "+currentImprt+" from "+totalImprt);
        $(".modal h1").html("Imported "+currentImprt+" from "+totalImprt);

        console.error("err");
        console.log(err.responseText);
        alert("Error loading data for category "+payload.cid+" at product <"+payload.item+">, please try again the page.");
        });  
}

function buildConfig(){
	return {
		// delimiter: $('#delimiter').val(),
		delimiter: ",",
		newline: "\r\n", //getLineEnding(),
		header: false,
		dynamicTyping: false,
		preview: 0,
		// step: $('#stream').prop('checked') ? stepFn : undefined,
		step: undefined,
		encoding: "",
		worker: false,
		comments: "",
		complete: completeFn,
		error: errorFn,
		download: false,
		fastMode: false,
		skipEmptyLines: true,
		// chunk: $('#chunk').prop('checked') ? chunkFn : undefined
		chunk: undefined
	};

}

function showItem(item,index,parentArray){
//	console.log(item[0]);
//	$("#items_table tr:last").after("<tr><td><input type='checkbox'></td><td>"+item[0]+"</td><td>"+dropdown+"</td></td>");
	var name = $.trim(item[0]);
    if(name != ""){
        $("#items_table tr:last").after("<tr><td><p>"+(index+1)+"</p></td><td>"+item[0]+"</td></tr>");
        items.push(name);
    }
}

function errorFn(error, file){
	console.log("ERROR:", error, file);
}

function completeFn(doc){
	console.log("completeFN");
	end = performance.now();
	if (doc && doc.data){
		rows = doc.data.length;
        $(".before").css("display","none");
        $(".after").css("display","block");
		doc.data.forEach(showItem);
		console.log("Done with all files.");
		
		
	}
}

function validateCats(cats){
    for(var i =0; i < cats.length ; i++){
        var cat = cats[i];
        var from = $(cat).find(".from").val();
        var to = $(cat).find(".to").val();
        var id = $(cat).find(".id").attr("id");
        if(from == "" && to != ""){
            return false;
        }else if(from != "" && to == ""){
            return false;
        }else if(from != "" && to != ""){        
            if(from > to){
                return false;
            }
            if(to > items.length){
                return false;

            }
            
        }
    }
    return true;
}