
            var i=1;
            var j=1;
             
              $('#addplan').on("click", function() {
                var sel_tenure = document.getElementById('select_tenure').value;
                var pl_name = document.getElementById('text_tenure').value;
                var pl_dur = document.getElementById('text_tenureduration').value;
                var txt_tenureamount = document.getElementById('text_tenureamount').value;
  
               // var planname = sel_tenure
                if(pl_name!='' && pl_dur!='' && txt_tenureamount!='' && sel_tenure!=0){

                 $('#addplandiv').append('<div id="new'+i+'"<div class="row"><div class="col-lg-6"> <input type="text" name="tenure[]" class="form-control name_list" id="row'+i+'" class="form-control" readonly onkeydown="upperCaseF(this)" style="text-transform: uppercase;" value="'+sel_tenure+'-'+pl_name+'"></div><div class="col-lg-2"><input type="text" name="tenureamount[]" class="form-control name_list ten_amount" id="dur'+i+'" value="'+txt_tenureamount+'" readonly class="form-control" onkeydown="upperCaseF(this)" style="text-transform: uppercase;border-botton:0px;text-align:right"> </div><div class="col-lg-2"><input uppercasetype="text" name="tenureduration[]" class="form-control name_list" id="dur'+i+'" value="'+pl_dur+'" readonly class="form-control" onkeydown="upperCaseF(this)" style="text-transform: ;border-botton:0px;text-align:center"> </div><div class="col-lg-2"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div></div>');
                i++;
                  $('#msgepy').html('');
                 $('#txt_tenure').val('');
                $('#txt_tenureduration').val('');
                  $('#txt_tenureamount').val('');
                  $('#sel_tenure').val('0');
                  var packegamount = 0;
                  $('.ten_amount').each(function(){
                    var amount = parseInt($(this).val());
                     packegamount += amount;
                    // alert();
                  });
                  $('#txt_planprice').val(packegamount);
            }
            else{
                $('#msgepy').html('Blank Field Cannot Be Added *')
            }
                
              });

              $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#new'+button_id+'').remove(); 
           var packegamount = 0;
                  $('.ten_amount').each(function(){
                    var amount = parseInt($(this).val());
                     packegamount += amount;
                    // alert();
                  });
                  $('#txt_planprice').val(packegamount);
           
            // document.getElementById('check').value=parseInt((document.getElementById('check').value)-1); 
      });  

              $('#addcomp').on("click", function() {

                var comp_name = document.getElementById('txt_complimentry').value;
                var comp_dur = document.getElementById('txt_complimentryduration').value;

               
                 if(comp_name!='' && comp_dur!='')
                {

                 $('#addcompdiv').append('<div id="newx'+j+'"<div class="row"><div class="col-lg-8"> <input type="text" name="complimentryfaci[]"  id="row'+j+'" class="form-control" onkeydown="upperCaseF(this)" style="text-transform: uppercase;bor" value="'+comp_name+'"></div><div class="col-lg-2"><input type="text" name="complimentryduration[]"  id="dur'+j+'" value="'+comp_dur+'" class="form-control" onkeydown="upperCaseF(this)" style="text-transform: uppercase;border-botton:0px;"> </div><div class="col-lg-2"><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove3">X</button></div></div></div>');
                i++;
             $('#txt_complimentry').val('');
                $('#txt_complimentryduration').val('');
                 $('#msgepy').html('');
                }
            else{
                $('#msgepy').html('Blank Field Cannot Be Added *')
            }
              });

              $(document).on('click', '.btn_remove3', function(){  
           var button_id = $(this).attr("id");   
           $('#newx'+button_id+'').remove(); 
           
      });  