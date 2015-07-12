{if $smarty.session.USERID GT "0" AND $smarty.session.STORE eq "1"}

<!--<link type="text/css" rel="stylesheet" href="{$cssurl}/bootstrap/bootstrap.css"/>-->
<link rel="stylesheet" href="{$cssurl}/jquery.mobile.custom.structure.min.css" />


<link type="text/css" rel="stylesheet" href="{$cssurl}/css.php"/>
<link type="text/css" rel="stylesheet" href="{$cssurl}/style.php"/>
<link type="text/css" rel="stylesheet" href="{$cssurl}/custom.css"/>


<link type="text/css" rel="stylesheet" href="{$cssurl}/form.css"/>
<link type="text/css" rel="stylesheet" href="{$cssurl}/import.css"/>

<div class="common">
    <div id="new_body" >
        <!--        <div id="body_900">-->
        <div id="body_left">
            <div id= "instruction"class="col-lg-4 col-md-4">
                <h1>Instructions:</h1>
                <br>
                <p><i>Copy-paste the inventory with each item on a new line</i><br><br>
                    <span style="font-weight:bold;">Example:</span>
                    <br>
                <div style="border:solid">
                    item1<br>
                    item2<br>
                    item3<br>
                </div>
                <br>
                <span style="font-weight:bold;">OR</span><br>
                <i>Drag and Drop .csv file (must be comma delimited)</i>
                </p>
        </div>

    </div>
    <div id="body_main">
        <!--                <div class="grid-container">-->
        <div class="before text-center" id="browse">			
            <h1>Inventory import</h1>
            <br>
            <div id="dropzone">
                <textarea id="input_text" placeholder="Input"></textarea>
            </div>
            <br>
            <b>or</b>
            <br>
            <form>
                <input type="file" id="files" accept=".csv">
                <br><br>
                <input class="button" id="submit-parse" value="Next"/>
            </form>
            <br><br>
        </div>

        <div class="after text-center" id = "items">
            <h1>Inventory import</h1>
            <br>
            <div class="table_wrapper">

                <div class="CSSTableGenerator">
                    <form>
                        Search:<input id="filterTable-input" data-type="search">
                    </form>
                    <table  id="items_table" data-role="table" data-filter="true" data-input="#filterTable-input">
                        <!--                                    <thead>-->
                        <tr>
                            <th></th>
                            <th data-rel="external">Item</th>
                            <!--<th>Category</th>-->
                        </tr>
                        <!--                                    </thead>-->
                        <!--                                    <tbody>-->
                        <!--                                        <tr><td data-rel="external"><p>1</p></td><td data-rel="external">abc</td></tr>-->
                        <!--                                    </tbody>-->
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="body_right"> 
        <div class="after">
            <h1></h1>
            <br><br>
            <div class="cat_wrapper">
                <div class="CSSTableGenerator">
                    <table id="cat_table">
                        <tr><th>from row</th><th>to row</th><th>Category</th></tr>
                        {section name=i loop=$cats}
                        <tr class="cat">
                            <td><input class="from" type="number" min="1"/></td>
                            <td><input class="to" type="number" min="1"/></td>
                            <td class="id" id="{$cats[i].CATID}">{$cats[i].name|stripslashes}</td>

                        </tr>
                        {/section}
                    </table>
                </div>
            </div>
            <br><br>
            <button id="importBtn">Import</button>
        </div>
    </div>
    <div class="clear"></div>
    <ul>

    </ul>
    <div class="modal"><h1>Loading</h1><!-- Place at bottom of page --></div>
    {literal}

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

    <script src="/js/papaparse.js"></script>
    <script>
        var rows = 0;
        var start, end;
        var items= [];
        var categories = [];

        var dropdown = "";
        var totalImprt = 0;
        var currentImprt =0;
        $(function(){
            var dropped = new Array();
            $(document).on({
                //        ajaxStart: function() { $body.addClass("loading");    },
                ajaxStop: function() {
                    console.log("ajaxStop");
//                    if(currentImprt == totalImprt){
                        $("body").removeClass("loading");

                        console.log("All done");
                        alert("All done");
//                    }
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
                var allData = new Array();
                
                for(var i =0; i < cats.length; i++){
                    var cat = cats[i];
                    var from = $(cat).find(".from").val();
                    var to = $(cat).find(".to").val();
                    var id = $(cat).find(".id").attr("id");
                    if(from != "" && to != "" && id > 0){
                        totalImprt += to-from+1;
                        for(var j = from; j <= to; j++){
                            allData.push({"item":items[j-1],"cid":id});
//                            pushData({"item":items[j-1],"cid":id});  
                        }// for all items in a category
                    }else{
                        console.log("Ignoring category:"+id);
                    }
                }// for all categories
                pushData(allData);
            });


        });

//        function pushData(payload){
//            payload.request = "pushData";
//            $.post("../import.php",payload,function(res){
//                currentImprt++;
//                console.log("finished "+currentImprt+" from "+totalImprt);
//                $(".modal h1").html("Imported "+currentImprt+" from "+totalImprt);
//                //        console.log("Items were imported successfully... payload = "+payload+"response="+res);
//            },"json").fail(function(err){
//                currentImprt++;
//                console.log("finished "+currentImprt+" from "+totalImprt);
//                $(".modal h1").html("Imported "+currentImprt+" from "+totalImprt);
//
//                console.error("err");
//                console.log(err.responseText);
//                alert("Error loading data for category "+payload.cid+" at product <"+payload.item+">, please try again the page.");
//            });  
//        }    
//        var test;
        function pushData(allData){
            var payload = {'request':"pushData",'data':JSON.stringify(allData)};
//            payload.request = "pushData";
            $(".modal h1").html("Uploading "+allData.length+" items<br> Please stay on this page");
            $.post("../import.php",payload,function(res){
                    
//                currentImprt++;
//                console.log("finished "+currentImprt+" from "+totalImprt);
//                $(".modal h1").html("For "+allData[0].cid+"<br>Imported "+currentImprt+" from "+totalImprt);
                var failed = JSON.parse(res);
                console.log(failed);
                if(failed.length > 0){
                    var failedStr = "";
                    for(var i=0; i<failed.length; i++){
                        failedStr += failed.item+"\n";
                    }
                    alert("Following items were not imported \n"+failedStr);
                }else{
                    window.location.assign("{/literal}{$baseurl}{literal}/myquestions");
                }
                
                //        console.log("Items were imported successfully... payload = "+payload+"response="+res);
            }).fail(function(err){
//                test = err;
//                currentImprt++;
//                console.log("finished "+currentImprt+" from "+totalImprt);
//                $(".modal h1").html("For "+allData[0].cid+"<br>Imported "+currentImprt+" from "+totalImprt);

                console.error("err");
                console.log("response>>"+err.resoponseText);
                console.log("failed>>"+JSON.parse(res.responseText));

                alert("Error loading data for category "+allData[0].cid+" at product <"+allData[0].item+">, please try again the page.");
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
    </script>
    {/literal}

    {else}
    <br><br><br><br>

    <center>
        <h1> Ops!! You have accessed a restricted area of the site.</h1>
        <br><br><br>
        <h1>You must have a store account to be able to use the import tool. Log out and log back in with your store account.</h1>
        <br><br>
        <h2>If you think this is a mistake please contact us at contact@seeqe.com</h2>
    </center>
    <!--    Must <a href="{$baseurl}/login" class="answer-button">Log in</a>-->
    <div class="clear">	</div>
    {/if}